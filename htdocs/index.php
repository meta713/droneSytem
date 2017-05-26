<?php

//設定用の定数ファイルの読み
require_once('../config/config.php');

//設定ファイルの読み込み

//smartyのインストール
require_once(_SMARTY_FILE);
//smartyインスタンスの作成
$smarty = new Smarty();

//smarty関連のディレクトリの設定
$smarty->template_dir = _TEMPLATES_DIR;
$smarty->compile_dir  = _TEMPLATES_C_DIR;
$smarty->config_dir   = _SMARTY_CONFIGS_DIR;
$smarty->cache_dir    = _CACHE_DIR;

//smarty変数にデータのアサインテスト
$smarty->assign('msg','Hello World!');
$smarty->assign('mse','Hello World!');
$smarty->display('login.tpl');

?>
