<?php
/* Smarty version 3.1.30, created on 2017-05-23 15:50:06
  from "/Users/hayashimizuki/www/card_system/smarty/templates/sample.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5923db9eab23c8_71792567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d5f49bbbb07d8ea4a1173e0fbf3808f47aa312e' => 
    array (
      0 => '/Users/hayashimizuki/www/card_system/smarty/templates/sample.tpl',
      1 => 1495522067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include.tpl' => 1,
  ),
),false)) {
function content_5923db9eab23c8_71792567 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Smarty Test</title>
</head>
<body>

<h1><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h1>

<?php $_smarty_tpl->_subTemplateRender("file:include.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
