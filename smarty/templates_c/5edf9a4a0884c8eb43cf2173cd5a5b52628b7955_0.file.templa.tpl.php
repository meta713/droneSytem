<?php
/* Smarty version 3.1.30, created on 2017-06-19 14:55:25
  from "/Users/hayashimizuki/www/card_system/smarty/templates/templa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5947674d28bc99_21931013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5edf9a4a0884c8eb43cf2173cd5a5b52628b7955' => 
    array (
      0 => '/Users/hayashimizuki/www/card_system/smarty/templates/templa.tpl',
      1 => 1497851629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5947674d28bc99_21931013 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- 共通部分　開始 -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?php echo @constant('_BASE_DIRECTORY');?>
assets/favicon/key.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo @constant('_BASE_DIRECTORY');?>
assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- 共通部分　終了 -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5065473295947674d27e2d6_52945469', "template_styles");
?>

    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10368840775947674d281063_11430331', "template_title");
?>
</title>
  </head>
  <body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15038026945947674d282bb1_23485574', "template_body");
?>

    <!-- 共通部分　開始 -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('_BASE_DIRECTORY');?>
assets/bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('_BASE_DIRECTORY');?>
assets/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- 共通部分　終了 -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5453658335947674d289b26_79361907', "template_script");
?>

  </body>
</html>
<?php }
/* {block "template_styles"} */
class Block_5065473295947674d27e2d6_52945469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block "template_styles"} */
/* {block "template_title"} */
class Block_10368840775947674d281063_11430331 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template_title"} */
/* {block "template_body"} */
class Block_15038026945947674d282bb1_23485574 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block "template_body"} */
/* {block "template_script"} */
class Block_5453658335947674d289b26_79361907 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block "template_script"} */
}
