<?php
/* Smarty version 3.1.30, created on 2017-11-29 16:33:08
  from "/Users/hayashimizuki/www/card_system/smarty/templates/test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e62b4b9a0a6_96338656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e647e6b2d6938758a533b86ad4ccf08fa434d24' => 
    array (
      0 => '/Users/hayashimizuki/www/card_system/smarty/templates/test.tpl',
      1 => 1511874384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:test.tpl' => 2,
  ),
),false)) {
function content_5a1e62b4b9a0a6_96338656 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
  <div style="margin-left: <?php echo $_smarty_tpl->tpl_vars['index']->value;?>
em;">
    <label>key:<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</label>
    <label>test:--<?php echo $_smarty_tpl->tpl_vars['item']->value['test'];?>
</label>
    <label>col:--<?php echo $_smarty_tpl->tpl_vars['item']->value['col'];?>
</label>
    <?php if (array_key_exists("children",$_smarty_tpl->tpl_vars['item']->value)) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'child');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
        <?php $_smarty_tpl->_subTemplateRender("file:test.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('array'=>$_smarty_tpl->tpl_vars['child']->value,'index'=>$_smarty_tpl->tpl_vars['index']->value+1), 0, true);
?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }?>
  </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<?php }
}
