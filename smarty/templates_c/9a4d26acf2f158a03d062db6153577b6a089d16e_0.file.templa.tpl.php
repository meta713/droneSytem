<?php
/* Smarty version 3.1.30, created on 2018-01-29 15:33:40
  from "/Users/hayashimizuki/www/drone_system/smarty/templates/templa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6ec0442b07d8_99626161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a4d26acf2f158a03d062db6153577b6a089d16e' => 
    array (
      0 => '/Users/hayashimizuki/www/drone_system/smarty/templates/templa.tpl',
      1 => 1517207614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6ec0442b07d8_99626161 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="<?php echo @constant('_BASE_DIRECTORY');?>
assets/bootstrap/css/tether.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"><?php echo '</script'; ?>
>
    <!-- 共通部分　終了 -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9409394155a6ec0442ac025_97373711', "template_styles");
?>

    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17285441685a6ec0442acc52_60249137', "template_title");
?>
</title>
    <?php echo '<script'; ?>
>
    //ローディング画像パス
    img_path = "<?php echo @constant('_BASE_DIRECTORY');?>
assets/image/Preloader_1.gif";
    //img_path = "<?php echo @constant('_BASE_DIRECTORY');?>
assets/image/loading.gif";
    <?php echo '</script'; ?>
>
  </head>
  <body style="height: 1500px;">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6087004295a6ec0442ae807_27325119', "template_body");
?>

    <!-- 共通部分　開始 -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('_BASE_DIRECTORY');?>
assets/bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('_BASE_DIRECTORY');?>
assets/bootstrap/js/tether.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay_progress.min.js"><?php echo '</script'; ?>
>
    <!-- 共通部分　終了 -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13680028345a6ec0442b0259_63344991', "template_script");
?>

  </body>
</html>
<?php }
/* {block "template_styles"} */
class Block_9409394155a6ec0442ac025_97373711 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block "template_styles"} */
/* {block "template_title"} */
class Block_17285441685a6ec0442acc52_60249137 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "template_title"} */
/* {block "template_body"} */
class Block_6087004295a6ec0442ae807_27325119 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block "template_body"} */
/* {block "template_script"} */
class Block_13680028345a6ec0442b0259_63344991 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block "template_script"} */
}
