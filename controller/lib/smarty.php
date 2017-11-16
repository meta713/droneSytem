<?php

function initSmarty(){
  //smartyインスタンスの作成
  $smarty = new Smarty();

  //smarty関連のディレクトリの設定
  $smarty->template_dir = _TEMPLATES_DIR;
  $smarty->compile_dir  = _TEMPLATES_C_DIR;
  $smarty->config_dir   = _SMARTY_CONFIGS_DIR;
  $smarty->cache_dir    = _CACHE_DIR;

  return $smarty;
}

?>
