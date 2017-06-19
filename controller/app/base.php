<?php

//アプリケーション実行関数
function Process( $action , &$_conn , &$_smarty , &$_global ){

  // action 指定なしのとき
  if( empty( $action ) ) $action = "top";
  //ログイン状態の確認
  $action = ( check_login() ? $action : "login" );

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

    //サイトのトップを表示
    case "top":{
      $_smarty->assign( "user_name", ( $_SESSION["user_info"]["user_name"] == "design" ? "工房スタッフ" : $_SESSION["user_info"]["user_name"] ) );
      $_smarty->assign( "page", $action );
      $_smarty->display( $action . ".tpl" );
      exit();
      break;
    }

    //登録画面を表示
    case "regist":{
      $_smarty->assign( "user_name", ( $_SESSION["user_info"]["user_name"] == "design" ? "工房スタッフ" : $_SESSION["user_info"]["user_name"] ) );
      $_smarty->assign( "page", $action );
      $_smarty->display( "regist.tpl" );
      exit();
      break;
    }

    //変更画面を表示
    case "change":{
      $_smarty->assign( "user_name", ( $_SESSION["user_info"]["user_name"] == "design" ? "工房スタッフ" : $_SESSION["user_info"]["user_name"] ) );
      $_smarty->assign( "page", $action );
      $_smarty->display( "regist.tpl" );
      exit();
      break;
    }

    //工房利用画面を表示
    case "use":{
      $_smarty->assign( "user_name", ( $_SESSION["user_info"]["user_name"] == "design" ? "工房スタッフ" : $_SESSION["user_info"]["user_name"] ) );
      $_smarty->assign( "page", $action );
      $_smarty->display( $action . ".tpl" );
      exit();
      break;
    }

    case "logout":{
      session_reset();
      session_destroy();
      header("Location: /base/login");
      exit_app();
      break;
    }

    //ユーザのデータを登録（データの内訳は内部のapiにて処理
    case "regist_data":{

      $check	= $_SERVER['HTTP_X_REQUESTED_WITH'];
      $res_data = $_POST["data"];

      if( $check && isset( $res_data ) && strtolower( $check ) == 'xmlhttprequest' ){
        $send_data = array();
        $data = "";
        try {
          $data = json_decode( $res_data , true );
        }catch(Exception $ex){
          $send_data["status"] = "error";
          $send_data["error"] = $ex;
          print( json_encode( $res_data ) );
          exit;
        }
        //動作
        switch( $data["action"] ){
          //登録
          case "regist":
          {
            // require_once 'MYDB.php';
            // $_conn = db_connect();
            //get new userNo
            $sql = "select max(userNo) + 1 from kit_user2";
            try {
                $stmh = $_conn->prepare( $sql );
                $stmh->execute();
            } catch (Exception $ex) {
                $send_data["status"] = "error1";
                $send_data["error"] = $ex;
                print( json_encode( $res_data ) );
                exit;
            }
            $userNo = sprintf( "%08d" , $stmh->fetchAll()[0][0] );
            //regist sql
            $time = date( "Y-m-d H:i:s" , time() );
            $sql = "insert into id_user2 values('$userNo','$data[idm]','1','$time','A')";
            try {
                $stmh = $_conn->prepare( $sql );
                $stmh->execute();
            } catch (Exception $ex) {
                $send_data["status"] = "error2";
                //$res_data["error"] = $ex;
                print( json_encode( $res_data ) );
                exit;
            }
            $limit = date("Y-03-31",strtotime("+1 year"));
            $sql = "insert into kit_user2 values('$userNo','03','$data[student_number]','$data[user_name]','$data[email]','$data[phone_number]','$limit','0',NULL,NULL,NULL,NULL)";
            try {
                $stmh = $_conn->prepare( $sql );
                $stmh->execute();
            } catch (Exception $ex) {
                $send_data["status"] = "error3";
                //$res_data["error"] = $ex;
                print( json_encode( $send_data ) );
                exit;
            }
            $send_data["status"] = "ok";
            $send_data["code"] = $sql;
            print( json_encode( $send_data ) );
            exit;
          }
          //更新
          case "change":
          {
            //require_once 'MYDB.php';
            //$_conn = db_connect();
            //get new userNo
            $sql = "select max(userNo) + 1 from kit_user2";
            try {
                $stmh = $_conn->prepare( $sql );
                $stmh->execute();
            } catch (Exception $ex) {
                $send_data["status"] = "error1";
                $send_data["error"] = $ex;
                print( json_encode( $res_data ) );
                exit;
            }
            $userNo = sprintf( "%08d" , $stmh->fetchAll()[0][0] );
            //get old userNo and registTimes
            $sql = "select userNo , registTimes + 1 from id_user2 where idm = '$data[idm]' and stopFlg = 'A'";
            try {
                $stmh = $_conn->prepare( $sql );
                $stmh->execute();
            } catch (Exception $ex) {
                $send_data["status"] = "error1";
                $send_data["error"] = $ex;
                print( json_encode( $res_data ) );
                exit;
            }
            list( $old_userNo , $new_registTimes ) = $stmh->fetchAll()[0];
            //新規登録
            $time = date( "Y-m-d H:i:s" , time() );
            $sql = "insert into id_user2 values('$userNo','$data[idm]','$new_registTimes','$time','A')";
            try {
                $stmh = $_conn->prepare( $sql );
                $stmh->execute();
            } catch (Exception $ex) {
                $send_data["status"] = "error1";
                $send_data["error"] = $ex;
                print( json_encode( $res_data ) );
                exit;
            }
            //引き継ぎ用のデータを確保
            $sql = "select couponBalance,startDate1,endDate1,startDate2,endDate2 from kit_user2 where userNo = '$old_userNo'";
            try {
                $stmh = $_conn->prepare( $sql );
                $stmh->execute();
            } catch (Exception $ex) {
                $send_data["status"] = "error1";
                $send_data["error"] = $ex;
                print( json_encode( $res_data ) );
                exit;
            }
            list( $couponBalance , $startDate1 , $endDate1 , $startDate2 , $endDate2 ) = $stmh->fetchAll()[0];
            $limit = date("Y-03-31",strtotime("+1 year"));
            $sql = "insert into kit_user2 values('$userNo','04','$data[student_number]','$data[user_name]','$data[email]','$data[phone_number]','$limit','$couponBalance',NULL,NULL,NULL,NULL)";
            try {
                $stmh = $_conn->prepare( $sql );
                $stmh->execute();
            } catch (Exception $ex) {
                $send_data["status"] = "error1";
                $send_data["error"] = $ex;
                print( json_encode( $res_data ) );
                exit;
            }
            //データの更新 stopFlg = "U"にする
            $sql = "update id_user2 set stopFlg = 'U' where userNo = '$old_userNo'";
            try {
                $stmh = $_conn->prepare( $sql );
                $stmh->execute();
            } catch (Exception $ex) {
                $send_data["status"] = "error1";
                $send_data["error"] = $ex;
                print( json_encode( $res_data ) );
                exit;
            }
            $send_data["status"] = "ok";
            $send_data["code"] = $sql;
            print( json_encode( $send_data ) );
            exit;
          }
          //利用
          case "use":
          {
            //require_once 'MYDB.php';
            //$_conn = db_connect();
            //get new logNo
            $sql = "select count(logNo) + 1 from ride_log2";
            try {
                $stmh = $_conn->prepare( $sql );
                $stmh->execute();
            } catch (Exception $ex) {
                $send_data["status"] = "error1";
                $send_data["error"] = $ex;
                print( json_encode( $res_data ) );
                exit;
            }
            $logNo = $stmh->fetchAll()[0][0];
            //すでに登録済みか確認
            $first_time = date( "Y-m-d 00:00:00" , time() );
            $last_time = date( "Y-m-d 23:59:59" , time() );
            $sql = "select logNo from ride_log2 where idm = '$data[idm]' and rideDate between '$first_time' and '$last_time'";
            try {
                $stmh = $_conn->prepare( $sql );
                $stmh->execute();
            } catch (Exception $ex) {
                $send_data["status"] = "error1";
                $send_data["error"] = $ex;
                print( json_encode( $res_data ) );
                exit;
            }
            $ride_info = $stmh->fetchAll();
            if( count($ride_info) >= 1 ){
              //更新
              $old_logNo = $ride_info[0][0];
              $sql = "update ride_log2 set busNo = '$data[recog]' where logNo = '$old_logNo'";
            }else{
              //登録
              // current time
              $time = date( "Y-m-d H:i:s" , time() );
              $sql = "insert into ride_log2 values('$logNo','$data[idm]','$data[recog]','C','$time')";
            }
            try {
                $stmh = $_conn->prepare( $sql );
                $stmh->execute();
            } catch (Exception $ex) {
                $send_data["status"] = "error1";
                $send_data["error"] = $ex;
                print( json_encode( $res_data ) );
                exit;
            }
            $send_data["status"] = "ok";
            $send_data["code"] = $sql;
            print( json_encode( $send_data ) );
            exit;
          }
          //エラー
          default :
          {
            print("error");
            exit;
          }
        }

      }else{
        print("no");
      }

      exit();
      break;
    }

    //エラー:該当なし
    default:
      exit_with404();
      break;
  }
}

?>
