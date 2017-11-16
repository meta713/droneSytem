<?php

$array = array();
file_get_contents("test.json");
file_put_contents("./test.json", json_encode($array, JSON_PRETTY_PRINT));

?>
