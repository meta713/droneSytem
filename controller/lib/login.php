<?php

//ログイン確認
function check_login(){
  //sessionは開始されている前提
  if(!isset($_SESSION["user_info"]) || !isset($_SESSION["is_login"])){
    //login していない
    return false;
  }
  // login している
  return true;
}


?>
