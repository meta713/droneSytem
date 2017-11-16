<?php

//ユーザのタイプの取得
function getUAtype(){
  //返す用の変数
  $res = array();

  //ユーザエイジェントの取得
  $ua = isset( $_SERVER["HTTP_USER_AGENT"] ) ? $_SERVER["HTTP_USER_AGENT"] : "" ;

  // iphoneならば
  if (preg_match("/iPhone/",$ua)){
    $res["os"] = "ios";
    $res["device"] = "iphone";
    $res["type"] = "sp";
  }
  // iPadならば
  else if (preg_match("/iPad/",$ua)){
    $res["os"] = "ios";
    $res["device"] = "ipad";
    $res["type"] = "sp";
  }
  // iPodならば
  else if (preg_match("/iPod/",$ua)){
    $res["os"] = "ios";
    $res["device"] = "ipod";
    $res["type"] = "sp";
  }
  // Androidならば
  else if (preg_match("/Android/",$ua)){
    $res["os"] = "android";
    $res["device"] = "android";
    $res["type"] = "sp";
  }
  // Macos
  else if (preg_match("/Mac OS X/",$ua)){
    $res["os"] = "macos";
    $res["device"] = "macos";
    $res["type"] = "pc";
  }
  //それ以外
  else{
    $res["os"] = "windows";
    $res["device"] = "windows";
    $res["type"] = "pc";
  }

  return $res;
}

//アクセスを許可するuaのチェック
function check_UAtype( $type , $arraylist ){
  $res = getUAtype();
  //中身の確認
  if( !in_array( $res[$type] , $arraylist ) ){
    //アクセスを許可していないデバイスならエラーを出力
    exit_with404_api();
  }
}

?>
