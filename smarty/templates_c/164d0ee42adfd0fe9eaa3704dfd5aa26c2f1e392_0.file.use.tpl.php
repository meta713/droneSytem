<?php
/* Smarty version 3.1.30, created on 2017-06-19 12:49:05
  from "/Users/hayashimizuki/www/card_system/smarty/templates/use.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594749b18bfbd6_33306496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '164d0ee42adfd0fe9eaa3704dfd5aa26c2f1e392' => 
    array (
      0 => '/Users/hayashimizuki/www/card_system/smarty/templates/use.tpl',
      1 => 1497844124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:design_templa.tpl' => 1,
  ),
),false)) {
function content_594749b18bfbd6_33306496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_296793347594749b18be195_14597785', "content_area");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:design_templa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content_area"} */
class Block_296793347594749b18be195_14597785 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- UseContent -->
<div style="<?php if ($_smarty_tpl->tpl_vars['page']->value != 'use') {?>display:none;<?php }?>">
  <p style="font-size: 16px;">利用目的をクリックしてください</p>
  <div class="row" style="margin-top:20px;padding-right:20px;">
    <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1" style="padding:14px;" btn="B1">
      <a class="btn btn-default btn-lg btn-block btn-under" style="padding:50px;font-weight:bold;color:rgb(109,109,109);border-radius:12px;"><span class="edu">授業利用</span></a>
    </div>
    <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1" style="padding:14px;" btn="B2">
      <a class="btn btn-default btn-lg btn-block btn-under" style="padding:50px;font-weight:bold;color:rgb(109,109,109);border-radius:12px;"><span class="cir">サークル利用</span></a>
    </div>
    <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1" style="padding:14px;" btn="B3">
      <a class="btn btn-default btn-lg btn-block btn-under" style="padding:50px;font-weight:bold;color:rgb(109,109,109);border-radius:12px;"><span class="exa">研究利用</span></a>
    </div>
    <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1" style="padding:14px;" btn="B4">
      <a class="btn btn-default btn-lg btn-block btn-under" style="padding:50px;font-weight:bold;color:rgb(109,109,109);border-radius:12px;"><span class="etc">その他</span></a>
    </div>
  </div>
</div>
<!-- UseContent End -->
<?php
}
}
/* {/block "content_area"} */
}
