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

//logout status
function status_204(){
  return array("status"=>204);
}

?>
