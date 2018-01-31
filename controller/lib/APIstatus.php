<?php

//not fount status
function status_404($content=array("error"=>"Not Found.")){
  return array("status"=>404, "content"=>$content);
}

//db error status
function status_500($content=array("error"=>"DB ERROR.")){
  return array("status"=>500, "content"=>$content);
}

//api success status
function status_200($content=array()){
  return array("status"=>200, "content"=>$content);
}

// //api login success status
// function status_202($content=array()){
//   return array("status"=>202, "content"=>$content);
// }

//logout status or login status
function status_204($content=array()){
  return array("status"=>204, "content"=>$content);
}

function _Json_response($array=array()){
  return json_encode($array);
}

function _disp_APIresponse($array){
  print(_Json_response($array));
}
?>
