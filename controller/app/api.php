<?php

//アプリケーション実行関数
function Process( $action , &$_conn , &$_smarty , &$_global ){

  // action 指定なしのとき
  if( empty( $action ) ) {
    //$action = "top";
    exit_with404_api();
  }
  //ログイン状態の確認
  //$action = ( check_login() ? $action : "login" );

  switch ( $action ) {

    //ログインしていない場合
    case 'login':{
      //リクエスト確認
      //strtolower( $_SERVER['HTTP_X_REQUESTED_WITH'] ) == 'xmlhttprequest' && これやるなら、まず値がセットされているかどうかの確認が必須
      if( isset( $_POST["password"] ) && isset( $_POST["username"] ) ){
        //本来ならここでデータベースに接続して、認証の処理が必要。今は、ひとまず決めうちで記入している
        $ds_username = "design";
        $ds_password = "ds_master";

        //postデータを格納
        $input_username = $_POST["username"];
        $input_password = $_POST["password"];

        //レスポンス用のデータ配列
        $res = array();
        //データの確認
        if(!($ds_username == $input_username) || !($ds_password == $input_password)){
          $res["status"] = "deny";
          print(json_encode($res));
          exit;
        }
        //認証の成功、データの格納
        $_SESSION["user_info"]["user_name"] = $input_username;
        $_SESSION["user_info"]["user_password"] = $input_password;
        $_SESSION["is_login"] = true;
        //ログイン時間の記録
        $_SESSION["m_logintime"] = time();
        $_SESSION["c_logintime"] = time();

        $res["status"] = "ok";
        $res["url"] = "/base/top";
        print(json_encode($res));
        exit();
      }else{
        $_smarty->assign("action",$action);
        $_smarty->display("login.tpl");
        exit();
      }
      break;
    }

    case "logout":{
      session_reset();
      session_destroy();
      print(json_encode(status_204()));
      exit_app();
      break;
    }

    case "test":{
      print("hoge");
      exit_app();
      break;
    }

    //react用のコメント追加および表示
    case "comments": {

      $sql = "select * from comments";
      try {
          $stmh = $_conn->prepare( $sql );
          $stmh->execute();
      } catch (Exception $ex) {
          $send_data["status"] = "error1";
          $send_data["error"] = $ex;
          print( json_encode( $res_data ) );
          exit;
      }
      $comments = $stmh->fetchAll();

      if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $comments[] = [
            'id'      => $_POST['id'],
            'author'  => $_POST['author'],
            'text'    => $_POST['text']
        ];
        $sql = "insert into comments (author, text) values(:author,:text)";
        try {
            $stmh = $_conn->prepare( $sql );
            $stmh->bindValue(":author", $_POST["author"], PDO::PARAM_STR);
            $stmh->bindValue(":text", $_POST["text"], PDO::PARAM_STR);
            $stmh->execute();
            $stmh->commit();
        } catch (Exception $ex) {
            $send_data["status"] = "error1";
            $send_data["error"] = $ex;
            print( json_encode( $res_data ) );
            exit;
        }
      }

      header('Content-Type: application/json');
      //header('Cache-Control: no-cache');
      header('Access-Control-Allow-Origin: *');
      echo json_encode($comments);

      exit_app();
      break;
    }

    case "comment": {
      $sql = "select * from comments";
      try {
          $stmh = $_conn->prepare( $sql );
          $stmh->execute();
      } catch (Exception $ex) {
          $send_data["status"] = "error1";
          $send_data["error"] = $ex;
          print( json_encode( $res_data ) );
          exit;
      }
      print("<pre>");
      print_r($stmh->fetchAll());
      print("</pre>");
      exit_app();
      break;
    }

    case "sql_comment": {
      $sql = "show full columns from comments";
      try {
          $stmh = $_conn->prepare( $sql );
          $stmh->execute();
      } catch (Exception $ex) {
          $send_data["status"] = "error1";
          $send_data["error"] = $ex;
          print( json_encode( $send_data ) );
          exit;
      }
      print("<pre>");
      print_r($stmh->fetchAll());
      print("</pre>");
      exit_app();
      break;
    }

    //エラー:該当なし
    default:
      exit_with404_api();
      break;
  }
}

?>
