<?php

function exit_withDB_api($ex){
  print(json_encode(status_500()));
  exit_app();
}

function exit_with404_api(){
  //header("HTTP/1.1 404 Not Found");
  header("Content-Type: application/json");
  print(json_encode(status_404()));
  exit_app();
}

?>
