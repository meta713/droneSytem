<?php

function exit_withDB_api($ex){
  _disp_APIresponse(status_500(array("log"=>$ex)));
  exit_app();
}

function exit_with404_api(){
  //header("HTTP/1.1 404 Not Found");
  header("Content-Type: application/json");
  _disp_APIresponse(status_404(array("log"=>"Not Found.")));
  exit_app();
}

function exit_withStatus_api($status){
  //明示的にjsonを指定
  header("Content-Type: application/json");
  _disp_APIresponse($status);
  exit_app();
}

function exit_withJson_api($array){
  //明示的にjsonを指定
  header("Content-Type: application/json");
  _disp_APIresponse($array);
  exit_app();
}

?>
