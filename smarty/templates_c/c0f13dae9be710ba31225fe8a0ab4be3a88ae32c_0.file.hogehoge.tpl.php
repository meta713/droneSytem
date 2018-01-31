<?php
/* Smarty version 3.1.30, created on 2018-01-26 00:13:34
  from "/Users/hayashimizuki/www/card_system/smarty/templates/hogehoge.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a69f41ed55a29_08646626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0f13dae9be710ba31225fe8a0ab4be3a88ae32c' => 
    array (
      0 => '/Users/hayashimizuki/www/card_system/smarty/templates/hogehoge.tpl',
      1 => 1516893213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templa.tpl' => 1,
  ),
),false)) {
function content_5a69f41ed55a29_08646626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20233259855a69f41ed50f93_30421576', "template_styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15674226975a69f41ed51d93_85336596', "template_title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17864124265a69f41ed52903_62910058', "template_body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16573795475a69f41ed55357_53568232', "template_script");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:templa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "template_styles"} */
class Block_20233259855a69f41ed50f93_30421576 extends Smarty_Internal_Block
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
class Block_15674226975a69f41ed51d93_85336596 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

login
<?php
}
}
/* {/block "template_title"} */
/* {block "template_body"} */
class Block_17864124265a69f41ed52903_62910058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <h1>drone画面</h1>
</div>
<?php
}
}
/* {/block "template_body"} */
/* {block "template_script"} */
class Block_16573795475a69f41ed55357_53568232 extends Smarty_Internal_Block
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
