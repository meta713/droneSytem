<?php

//設定用の定数ファイルの読み
require_once('../config/config.php');

//設定ファイルの読み込み

//セッションの開始
session_start();

//コントローラーの呼び出し
require_once( _CONTROLLER_DIR . "controller.php" );

// //smartyインスタンスの作成
// $smarty = new Smarty();
//
// //smarty関連のディレクトリの設定
// $smarty->template_dir = _TEMPLATES_DIR;
// $smarty->compile_dir  = _TEMPLATES_C_DIR;
// $smarty->config_dir   = _SMARTY_CONFIGS_DIR;
// $smarty->cache_dir    = _CACHE_DIR;

//smarty変数にデータのアサインテスト
// $smarty->assign('data',$_SERVER["REQUEST_URI"]);
// $smarty->assign('mse','Hello World!');
// $smarty->display('login.tpl');

?>
