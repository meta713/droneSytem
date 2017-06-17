<?php
/* Smarty version 3.1.30, created on 2017-06-05 01:45:51
  from "/Users/hayashimizuki/www/card_system/smarty/templates/404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5934393fec72f8_06849531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09509c094aaffeb861ae57c75057a4dc8c7cd528' => 
    array (
      0 => '/Users/hayashimizuki/www/card_system/smarty/templates/404.tpl',
      1 => 1496591455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error_tmp.tpl' => 1,
  ),
),false)) {
function content_5934393fec72f8_06849531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19022962035934393fec64a6_56270777', "template_body");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:error_tmp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "template_body"} */
class Block_19022962035934393fec64a6_56270777 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>404 Not Found</h1>
<p>The requested URL <?php echo $_SERVER['REQUEST_URI'];?>
 was not found on this server.</p>
<hr/>
<?php
}
}
/* {/block "template_body"} */
}
