<?php
//****************************************************************
// コントローラクラス
// ・ProcessSwitch で全画面の遷移を制御する
// ・action によって処理を分ける
//****************************************************************

//********************************
// 全体に使用するクラスの読み込み
//********************************
require_once(SMARTY_PATH."Smarty.class.php"); // Smarty 用ライブラリ
foreach (glob(BASELIB_PATH."*.php") as $filename) require_once($filename); // BASE のライブラリをすべて読み込む
foreach (glob(DAO_PATH."*.php") as $filename) require_once($filename);
foreach (glob(UTIL_PATH."*.php") as $filename) require_once($filename);

//********************************
// 変数宣言
//********************************
$_conn = array(); // DB接続用変数
$_smarty = array(); // Smarty用変数
$_global = array(); // グローバル用変数

$_setting = array(); // 設定テーブル

//********************************
// フレームワーク初期化
//********************************
initializeFramework($_conn, $_smarty, $_global, $_setting);

//********************************
// URLのパースを行って、ptype と action を抽出する
// SEO対策用として使用するが、必要ないならコメントアウトしても可
// 使用する場合には、apache の設定で
//   RewriteEngine on
//   RewriteCond %{DOCUMENT_ROOT}/%{REQUEST_FILENAME} !-d
//   RewriteCond %{DOCUMENT_ROOT}/%{REQUEST_FILENAME} !-f
//   RewriteRule ^(.*)$ /index.php
// を追加すること
// home 以下テストでは .htaccess に
//   <IfModule mod_rewrite.c>
//     RewriteEngine On
//     RewriteBase /USER/dir/
//     RewriteCond %{REQUEST_FILENAME} !-d
//     RewriteCond %{REQUEST_FILENAME} !-f
//     RewriteRule ^(.*)$ /USER/dir/index.php
//   </IfModule>
//
//********************************
parseURL($_conn, $_smarty, $_global);
//********************************
// 振り分け処理 リクエストの ptype と action を利用する
//********************************
processSwitch($_conn, $_smarty, $_global);

//********************************
// 終了処理を追記した終了コマンド
//********************************
_exit_exit();




//****************************************************************
// フレームワークの初期化
//****************************************************************
function initializeFramework(&$_conn, &$_smarty, &$_global, &$_setting){

    // accessログの吐き出し
    _log_outputAccessLog();

    // Smarty の設定
    $_smarty = _smarty_construct();
    $_smarty->assign('BASEDIR', BASE_DIRECTORY);

    // ユーザエージェントの設定
    $ua = _ua_getDeviceType();
    $_smarty->assign('UA', $ua);
    $_global["ua"] = $ua;

    // ＤＢへのコネクタの初期化　エラーの場合はメンテナンスへ飛ばす
    try {
        $_conn = _db_constructPDO();
    } catch (PDOException $ex) {
        _log_outputErrorLog(CODE_DB_ERROR, MESSAGE_DB_ERROR . ", " . $ex->getMessage(), true);
        _exit_withMainte();
    }

    // 設定テーブルから設定を取り出す
    $_setting = _setting_getSettingList($_conn);

    // メンテナンス対応
    $ips = explode(",", DEVELOP_IPS);
    if (DO_MAINTE && !in_array($_SERVER["REMOTE_ADDR"], $ips)) {
        _exit_withMainte();
    }

    // ログイン処理の初期化
    // 引数にログインページを表示するための URL を指定する事が可能
    // 例： _login_initLogin(ROOT_SSL_URL.LOGIN_REL_URL);
    _login_initLogin();
}

//****************************************************************
// URL分解
// {index.phpまでのパス}/{ptype}/{action}
// ptype=1個目 action=2個目
// 分解結果を $_REQUEST に入れる
//****************************************************************
function parseURL(){
    // ptype がリクエストにある場合には、何もしない
    if (isset($_REQUEST["ptype"])) return;

    // index.php までのパス文字列は削除する
    $request_uri = substr($_SERVER["REQUEST_URI"], strlen(BASE_DIRECTORY));

    // 正規表現で分解する
    $ret = preg_match("/^\/(\w+)(\/)?(\w+)?(\/)?/i", $request_uri, $item);

    // preg 実行時エラー
    if ($ret === FALSE) {
        _log_outputErrorLog(CODE_INVALID_URL, MESSAGE_INVALID_URL, true);
        _exit_with404();
    }

    // [0] マッチ文字列全体
    // [1] ptype
    // [2] /
    // [3] action
    // [4] /
    if (count($item) >= 4) {
        $_REQUEST["ptype"]  = $item[1];
        $_REQUEST["action"] = $item[3];
    } else if (count($item) >= 2) {
        // 値ひとつだけ -> ptype にセット。action は空にする
        $_REQUEST["ptype"]  = $item[1];
        $_REQUEST["action"] = "";
    } else {
        // マッチしなかった -> ptype, action なし
    }

    /// 制約チェック
    // ptype の後ろには必ず '/' をつける。
    // action の後ろの '/' は消す。
    if (isset($_REQUEST["ptype"])) {
        $should_redirect = false;
        if (count($item) >= 5 && $item[4] == '/') {
            // action の後ろに '/' がある -> リダイレクトする
            $should_redirect = true;
        } else if (count($item) < 3 || $item[2] != '/') {
            // ptype の後ろの '/' なし -> リダイレクトする
            $should_redirect = true;
        }
        if ($should_redirect && !isset($_SESSION["_parseurl_redirected_"])) {
            $to_url = BASE_DIRECTORY."/".$_REQUEST["ptype"]."/".$_REQUEST["action"];
            if ($_SERVER["QUERY_STRING"]) {
                $to_url .= "?" . $_SERVER["QUERY_STRING"];
            }
            // リダイレクトループを抑制するため、SESSION を利用
            $_SESSION["_parseurl_redirected_"] = true;
            header("Location: ".$to_url);
        }
        unset($_SESSION["_parseurl_redirected_"]);
    }
}

//**********************************************
// 処理部分
//**********************************************
function processSwitch(&$_conn, &$_smarty, &$_global){

    // 変数が長いので他の短い変数に入れて処理を行わせる
    $ptype  = isset($_REQUEST["ptype"] ) ? $_REQUEST["ptype"]  : DEFAULT_PTYPE;
    $action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : (defined('DEFAULT_ACTION') ? DEFAULT_ACTION : "");
    $ua = $_global["ua"];

    // 対応端末以外だったら 404 へ
    // _ua_checkDevice("type", "pc");

    // ptype の指定なし -> 404
    if (strlen($ptype) <= 0) {
        _log_outputErrorLog(CODE_INVALID_ACCESS, MESSAGE_INVALID_ACCESS);
        _exit_with404();
    }

    // リクエスト内容によって読み込むプラグインを変更
    $programpath = CONTROLLER_PATH . BASE_TYPE."/".$ptype.".php";

    // プラグインの処理を行う
    if (file_exists($programpath)) {
        require_once($programpath);
        if (function_exists("Process")) {
            Process($action,$_conn,$_smarty,$_global);
            return;
        }
    }
    // ptype 不正 -> 404
    _log_outputErrorLog(CODE_INVALID_ACCESS, MESSAGE_INVALID_ACCESS);
    _exit_with404();
}
