<?php
/* Smarty version 3.1.30, created on 2017-06-19 19:13:37
  from "/Users/hayashimizuki/www/card_system/smarty/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5947a3d1548341_83578422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50ff7525c90b35341e74f8681f17769c3d82cfbc' => 
    array (
      0 => '/Users/hayashimizuki/www/card_system/smarty/templates/login.tpl',
      1 => 1497866085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templa.tpl' => 1,
  ),
),false)) {
function content_5947a3d1548341_83578422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10507712245947a3d153c193_15640898', "template_styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20734243715947a3d153e5f5_55480455', "template_title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11422130195947a3d1542461_29335436', "template_body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9901436915947a3d15476a7_75718385', "template_script");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:templa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "template_styles"} */
class Block_10507712245947a3d153c193_15640898 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo @constant('_BASE_DIRECTORY');?>
assets/lib/bootstrap/css/bootstrap-theme.css" />
<?php
}
}
/* {/block "template_styles"} */
/* {block "template_title"} */
class Block_20734243715947a3d153e5f5_55480455 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

login
<?php
}
}
/* {/block "template_title"} */
/* {block "template_body"} */
class Block_11422130195947a3d1542461_29335436 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div id="loginbox" style="margin-top:100px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
   <div class="panel panel-info">
     <div class="panel-heading">
       <div class="panel-title">Card Reader System</div>
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
<?php
}
}
/* {/block "template_body"} */
/* {block "template_script"} */
class Block_9901436915947a3d15476a7_75718385 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- <?php echo '<script'; ?>
 src="assets/lib/jquery-1.12.1.min.js"><?php echo '</script'; ?>
> -->
<!-- underscore.js -->
<?php echo '<script'; ?>
 src="<?php echo @constant('_BASE_DIRECTORY');?>
assets/lib/underscore-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('_BASE_DIRECTORY');?>
assets/scripts/login.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template_script"} */
}
