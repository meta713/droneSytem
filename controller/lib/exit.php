<?php

function exit_app(){
  global $_conn;
  $_conn = NULL;
  exit();
}

function exit_withDB(){
  global $_smarty;
  $_smarty->display( "db_error.tpl" );
  exit_app();
}

function exit_with404(){
  global $_smarty;
  header("HTTP/1.1 404 Not Found");
  header("Content-Type: text/html");
  $_smarty->display( "404.tpl" );
  exit_app();
}

?>
