<?php
/* Smarty version 3.1.30, created on 2017-06-19 17:04:45
  from "/Users/hayashimizuki/www/card_system/smarty/templates/top.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5947859d134d69_65439988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '381ac72373cd02f99907b7f4f60af86563c6e32f' => 
    array (
      0 => '/Users/hayashimizuki/www/card_system/smarty/templates/top.tpl',
      1 => 1497859475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:design_templa.tpl' => 1,
  ),
),false)) {
function content_5947859d134d69_65439988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31567915947859d133316_83014402', "content_area");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:design_templa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content_area"} */
class Block_31567915947859d133316_83014402 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- HomeContent -->
<div style="<?php if ($_smarty_tpl->tpl_vars['page']->value != 'top') {?>display:none<?php }?>">
  <p style="font-size: 16px;">操作を選択してください</p>
  <div class="row" style="margin-top:20px;padding-right:20px;">
    <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12" style="padding:14px;">
      <a href="/base/use" class="btn btn-default btn-lg btn-block" style="padding:50px;font-weight:bold;color:rgb(109,109,109);border-radius:12px;">工房利用</a>
    </div>
    <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12" style="padding:14px;">
      <a href="/base/regist" class="btn btn-default btn-lg btn-block" style="padding:50px;font-weight:bold;color:rgb(109,109,109);border-radius:12px;">登録</a>
    </div>
    <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12" style="padding:14px;">
      <a href="/base/change" class="btn btn-default btn-lg btn-block" style="padding:50px;font-weight:bold;color:rgb(109,109,109);border-radius:12px;">変更</a>
    </div>
    <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12" style="padding:14px;">
      <a href="/base/top" class="btn btn-default btn-lg btn-block" style="padding:50px;font-weight:bold;color:rgb(109,109,109);border-radius:12px;">ホーム</a>
    </div>
  </div>
</div>
<!-- HomeContent End -->
<?php
}
}
/* {/block "content_area"} */
}
