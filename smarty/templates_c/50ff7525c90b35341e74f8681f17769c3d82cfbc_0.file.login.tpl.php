<?php
/* Smarty version 3.1.30, created on 2017-05-23 19:29:43
  from "/Users/hayashimizuki/www/card_system/smarty/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59240f177e4385_35041934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50ff7525c90b35341e74f8681f17769c3d82cfbc' => 
    array (
      0 => '/Users/hayashimizuki/www/card_system/smarty/templates/login.tpl',
      1 => 1495535381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59240f177e4385_35041934 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>login</title>
      <link rel="shortcut icon" href="assets/favicon/key.png">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css" />
      <!-- Optional theme -->
      <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap-theme.css" />
      <?php echo '<script'; ?>
 src="assets/lib/jquery-1.12.1.min.js"><?php echo '</script'; ?>
>
      <!-- Latest compiled and minified JavaScript -->
      <?php echo '<script'; ?>
 src="assets/lib/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
      <!-- underscore.js -->
      <?php echo '<script'; ?>
 src="assets/lib/underscore-min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="assets/scripts/login.js"><?php echo '</script'; ?>
>
   </head>
   <body>

     <div class="container">
       <div id="loginbox" style="margin-top:100px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="panel-title">ログイン</div>
            </div>
            <div style="padding-top:30px" class="panel-body" >
              <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
              <form id="loginform" class="form-horizontal" role="form" method="" action="" onsubmit="inputcheck();return false;">
              <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="ユーザ名">
              </div>
              <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="login-password" type="password" class="form-control" name="password" placeholder="パスワード">
              </div>
              <div style="margin-bottom: 25px" class="" id="error"></div>
              <div style="margin-top:10px" class="form-group">
                <!-- Button -->
                <div class="col-sm-12 controls">
                  <button id="btn-login" class="btn btn-success">ログイン</button>
                </div>
              </div>
              </form>
            </div>
        </div>
       </div>
     </div>
   </body>
</html>
<?php }
}
