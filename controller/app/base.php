<?php

function Process( $action , &$_conn , &$_smarty , &$_global ){
  $_smarty->assign("action",$action);
  $_smarty->display("login.tpl");
  exit();
}

?>
