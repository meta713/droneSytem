<?php
/* Smarty version 3.1.30, created on 2017-06-19 14:46:41
  from "/Users/hayashimizuki/www/card_system/smarty/templates/regist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594765413dd114_28811578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0163cd78fc1e0a558c6eb7f79289ce74f2fa01a2' => 
    array (
      0 => '/Users/hayashimizuki/www/card_system/smarty/templates/regist.tpl',
      1 => 1497851190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:design_templa.tpl' => 1,
  ),
),false)) {
function content_594765413dd114_28811578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_892152938594765413d7996_23435114', "content_area");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:design_templa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content_area"} */
class Block_892152938594765413d7996_23435114 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- RegistContent -->
<div class="row regist_form" style="margin-top:20px;padding-left:20px;<?php if ($_smarty_tpl->tpl_vars['page']->value != 'regist' && $_smarty_tpl->tpl_vars['page']->value != 'change') {?>display:none;<?php }?>margin-bottom:20px;">
  <form class="col-md-8  col-sm-8" style="border:solid 1px #c9c9c9;border-radius:6px;padding:20px;" onsubmit="return false;" id="regist_form">
    <div class="form-group">
      <label for="InputUserName">氏名</label>
      <input type="text" class="form-control input_data" id="user_name" placeholder="User name" style="width:30%;" maxlength="15">
      <p class="bg-info confirm_data"></p>
    </div>
    <div class="form-group">
      <label for="InputStudentNumber">学籍番号</label>
      <input type="text" class="form-control input_data" id="student_number" placeholder="Student number" style="width:30%;" maxlength="10">
      <p class="bg-info confirm_data"></p>
      <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
    <div class="form-group">
      <label for="InputPhoneNumber">電話番号</label>
      <input type="text" class="form-control input_data" id="phone_number" placeholder="Phone number" style="width:40%;" maxlength="15">
      <p class="bg-info confirm_data"></p>
      <p class="help-block" style="font-size:12px;">（左ヅメ、ハイフンなし）</p>
    </div>
    <div class="form-group">
      <label for="InputEmail">eメールアドレス</label>
      <input type="text" class="form-control input_data" id="email" placeholder="Email address" style="width:70%;" maxlength="35">
      <p class="bg-info confirm_data"></p>
    </div>
    <button type="submit" class="btn btn-default" style="margin:12px 0;" id="submit_btn">確認</button>
    <div class="btn_group" style="margin:26px 0 8px 0;display:none;float:right;">
      <button type="button" class="btn btn-default" id="back_btn">修正する</button>
      <button type="button" class="btn btn-primary" id="send_btn" style="margin-left:10px;" data-loading-text="送信中..."><?php if ($_smarty_tpl->tpl_vars['page']->value == "regist") {?>登録<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "change") {?>変更<?php }?>する</button>
    </div>
    <div id="error_area" style="margin-top:10px;display:none;">
    </div>
  </form>
  <div class="col-md-4 col-sm-4" id="alert_area">
    <!-- <div class="alert alert-info alert-dismissible col-md-12  col-sm-12" role="alert" style="display:none;" id="alert_connecting">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>info :</strong> サーバとの通信を確立しています。しばらくお待ちください。
    </div>
    <div class="alert alert-success alert-dismissible col-md-12  col-sm-12" role="alert" style="display:none;" id="alert_ready">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Success! :</strong> カードリーダーの準備ができました！ カードをタッチしてください。
    </div>
    <div class="alert alert-danger alert-dismissible col-md-12  col-sm-12" role="alert" style="display:none;" id="alert_fail">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Warning! :</strong> サーバとの接続に失敗しました。
    </div>
    <div class="alert alert-danger alert-dismissible col-md-12  col-sm-12" role="alert" style="display:none;" id="alert_timeout">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Warning! :</strong> タイムアウトです、もう一度最初からお願いします。
    </div>
    <div class="alert alert-success alert-dismissible col-md-12  col-sm-12" role="alert" style="display:none;" id="alert_ok">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Done! :</strong> カードを確認しました！ 情報を登録してください！
    </div>
    <div class="alert alert-warning alert-dismissible col-md-12  col-sm-12" role="alert" style="display:none;" id="cancel_btn">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>delete! :</strong> 全てのログを削除します。
    </div> -->
  </div>
</div>
<!-- RegistContent End -->
<?php
}
}
/* {/block "content_area"} */
}
