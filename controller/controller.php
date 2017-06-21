<?php

//***************************************
//全体で使用するクラス、及びライブラリの読み込み
//***************************************
require_once(_SMARTY_FILE); //smartyのインストール
foreach( glob( _CONTROLLER_DIR . "lib/*.php" ) as $filename ){
  require_once( $filename );
}

//***************************************
//使用する変数の宣言
//***************************************
$_conn = array(); //dbの設定
$_smarty = array(); //smarty用の変数
$_global = array(); //グローバル変数

//フレームワークの初期化
initFramework( $_conn , $_smarty , $_global );

//url解析
parseURI();

//アプリの実行
processSwitch( $_conn , $_smarty , $_global );

//****************************************************************
// URL分解
// {index.phpまでのパス}/{ptype}/{action}
// ptype=1個目 action=2個目
// 分解結果を $_REQUEST に入れる
//****************************************************************
function parseURI(){
  // ptype がリクエストにある場合には、何もしない
  if ( isset($_REQUEST["ptype"]) ) return;

  //リクエストのuriを解析用に編集
  $request_uri = substr( $_SERVER["REQUEST_URI"] , 0 );

  $ret = preg_match("/^\/(\w+)(\/)?(\w+)?(\/)?/i", $request_uri, $item);
  //正規表現時のエラーを確認
  if( $ret === FALSE ){
    exit_with404();
  }

  //取得文字列の調整部分
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

  //現在のurlを調整し、対応する。制約されているものに変更する。
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
      $to_url = "/".$_REQUEST["ptype"]."/".$_REQUEST["action"];
      if ($_SERVER["QUERY_STRING"]) {
        $to_url .= "?" . $_SERVER["QUERY_STRING"];
      }
      // リダイレクトループを抑制するため、SESSION を利用
      $_SESSION["_parseurl_redirected_"] = true;
      header("Location: ".$to_url);
      exit_app();
    }
    unset($_SESSION["_parseurl_redirected_"]);
  }
}

//****************************************************************
// フレームワークの初期化用の関数
//****************************************************************
function initFramework( &$_conn , &$_smarty , &$_global ){

  //アクセスの解析
  //log_output();

  //smartyの設定
  $_smarty = initSmarty();

  // ユーザエージェントの設定
  $ua = getUAtype();
  $_global["UA"] = $ua;
  $_smarty->assign( "UA" , $ua );

  //データベースの接続処理 エラー時はデータベースエラー画面に飛ばす
  try{
    $_conn = db_connect();
  }catch (PDOException $ex){
    $_smarty->assign( "EX" , $ex );
    exit_withDB();
  }
}

//****************************************************************
// アプリケーション実行用の関数
//****************************************************************
function processSwitch( &$_conn , &$_smarty , &$_global ){

  //ptypeとactionを確認する
  $ptype = isset( $_REQUEST["ptype"] ) ? $_REQUEST["ptype"] : "base" ;
  $action = isset( $_REQUEST["action"] ) ? $_REQUEST["action"] : "" ;
  $ua = $_global["UA"];

  //対応するデバイスをチェックする、必要ない時にはコメントアウト
  check_UAtype( "type" , array("pc") );

  if ( strlen( $ptype ) <= 0 ){
    //ptypeの指定なし
    exit_with404();
  }

  //実行phpのファイルパス app の部分は今後別途に定数化の予定
  $program_path = _CONTROLLER_DIR . "app/" . $ptype . ".php";

  //アプリの実行
  if( file_exists( $program_path ) ){
    require_once( $program_path );
    if( function_exists("Process") ){
      //該当ファイルのプラグインを実行
      Process( $action , $_conn , $_smarty , $_global );
      return;
    }
  }

  //該当ファイルなし、エラー出力
  exit_with404();

}

?>
