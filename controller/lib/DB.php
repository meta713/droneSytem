<?php

//データベースとの接続処理
function db_connect(){

   $db_user = _DB_USER;
   $db_pass = _DB_PASS;
   $db_host = _DB_HOST;
   $db_name = _DB_NAME;
   $db_type = "mysql";

   $dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";
   $pdo = new PDO($dsn , $db_user , $db_pass);
   $pdo->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
   $pdo->setAttribute(pdo::ATTR_EMULATE_PREPARES, false);
   return $pdo;

}


?>
