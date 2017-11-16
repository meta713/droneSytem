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

    //エラー:該当なし
    default:
      exit_with404_api();
      break;
  }
}

?>
