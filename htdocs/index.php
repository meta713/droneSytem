<?php

//設定用の定数ファイルの読み
require_once('../config/config.php');

//設定ファイルの読み込み

//セッションの開始
session_start();

//コントローラーの呼び出し
require_once( _CONTROLLER_DIR . "controller.php" );

?>
