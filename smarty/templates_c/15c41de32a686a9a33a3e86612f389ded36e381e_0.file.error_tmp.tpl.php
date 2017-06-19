<?php
/* Smarty version 3.1.30, created on 2017-06-18 00:56:18
  from "/Users/hayashimizuki/www/card_system/smarty/templates/error_tmp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59455122df1702_85806288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15c41de32a686a9a33a3e86612f389ded36e381e' => 
    array (
      0 => '/Users/hayashimizuki/www/card_system/smarty/templates/error_tmp.tpl',
      1 => 1497712282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templa.tpl' => 1,
  ),
),false)) {
function content_59455122df1702_85806288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129622564559455122ded6b4_21590295', "template_styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48276726759455122def4c8_40902412', "template_title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29094846859455122df0dd2_87598067', "template_script");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:templa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "template_styles"} */
class Block_129622564559455122ded6b4_21590295 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "template_styles"} */
/* {block "template_title"} */
class Block_48276726759455122def4c8_40902412 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

error
<?php
}
}
/* {/block "template_title"} */
/* {block "template_script"} */
class Block_29094846859455122df0dd2_87598067 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "template_script"} */
}
