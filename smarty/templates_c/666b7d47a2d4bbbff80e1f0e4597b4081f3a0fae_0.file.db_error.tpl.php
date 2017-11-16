<?php
/* Smarty version 3.1.30, created on 2017-10-24 02:25:20
  from "/Users/hayashimizuki/www/card_system/smarty/templates/db_error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ee2600efa411_34305320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '666b7d47a2d4bbbff80e1f0e4597b4081f3a0fae' => 
    array (
      0 => '/Users/hayashimizuki/www/card_system/smarty/templates/db_error.tpl',
      1 => 1496591538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error_tmp.tpl' => 1,
  ),
),false)) {
function content_59ee2600efa411_34305320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165737435159ee2600ef7fe1_98062053', "template_body");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:error_tmp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "template_body"} */
class Block_165737435159ee2600ef7fe1_98062053 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>DB ERROR</h1>
<p>申し訳ございません、現在メンテナンス中でございます。しばらくお待ちください。</p>
<hr/>
<?php
}
}
/* {/block "template_body"} */
}
