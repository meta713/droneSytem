<?php
/* Smarty version 3.1.30, created on 2017-06-19 18:46:06
  from "/Users/hayashimizuki/www/card_system/smarty/templates/design_templa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59479d5e029935_63073424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bef9b11000dcc309317aa439c9e2feb4a084bd2f' => 
    array (
      0 => '/Users/hayashimizuki/www/card_system/smarty/templates/design_templa.tpl',
      1 => 1497865473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templa.tpl' => 1,
  ),
),false)) {
function content_59479d5e029935_63073424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150664810759479d5df35eb7_99778308', "template_styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77768932359479d5df381b8_28351062', "template_title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183713840159479d5e011282_07831578', "template_body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65058187859479d5e0282e2_33511748', "template_script");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:templa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "template_styles"} */
class Block_150664810759479d5df35eb7_99778308 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link href="<?php echo @constant('_BASE_DIRECTORY');?>
assets/stylesheet/sweetalert.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo @constant('_BASE_DIRECTORY');?>
assets/stylesheet/iziToast.min.css">
<style>
/*.btn-under:hover > span {
  border-bottom:solid 2px rgb(255, 85, 210);
}*/
.confirm_data{
  padding: 9px 12px;
  text-align: center;
  border-radius: 5px;
  display: none;
}
</style>
<?php echo '<script'; ?>
 type="text/javascript">
//グローバル変数
page_info = "<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
";
img_path = "<?php echo @constant('_BASE_DIRECTORY');?>
assets/image/Preloader_1.gif";
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template_styles"} */
/* {block "template_title"} */
class Block_77768932359479d5df381b8_28351062 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Card System
<?php
}
}
/* {/block "template_title"} */
/* {block "content_area"} */
class Block_160832963259479d5e00d862_11849340 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content_area"} */
/* {block "template_body"} */
class Block_183713840159479d5e011282_07831578 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="wrapper" style="min-height: 675px;">
  <div class="row">
    <!-- SideContent -->
    <div class="col-md-3 col-sm-4 col-xs-4 side_menu" style="min-height:625px;margin-top:55px;padding-left:40px;z-index:999;">
      <div style="border:solid 1px #c9c9c9;border-radius:10px;">
        <ul style="list-style:none;margin-top:0px;line-height:40px;padding:0;">
          <li style="padding:33px;font-size:14px;color:#6d6d6d;font-weight:bold;border-bottom:solid 1px #c9c9c9;text-align:center;">
            ログインユーザ <br><span style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</span>
          </li>
          <li style="padding:12px;font-size:14px;<?php if ($_smarty_tpl->tpl_vars['page']->value == 'top') {?>background-color:#E9E9E9;font-weight:bold;<?php }?>border-bottom:solid 1px #c9c9c9;text-align:center;">
            <a href="/base/top" style="text-decoration:none;display:block;color:#6d6d6d;">ホーム</a>
          </li>
          <li style="padding:12px;font-size:14px;<?php if ($_smarty_tpl->tpl_vars['page']->value == 'regist') {?>background-color:#E9E9E9;font-weight:bold;<?php }?>text-align:center;border-bottom:solid 1px #c9c9c9;">
            <a href="/base/regist" style="text-decoration:none;display:block;color:#6d6d6d;">登録</a>
          </li>
          <li style="padding:12px;font-size:14px;<?php if ($_smarty_tpl->tpl_vars['page']->value == 'change') {?>background-color:#E9E9E9;font-weight:bold;<?php }?>text-align:center;border-bottom:solid 1px #c9c9c9;">
            <a href="/base/change" style="text-decoration:none;display:block;color:#6d6d6d;">変更</a>
          </li>
          <li style="padding:12px;font-size:14px;<?php if ($_smarty_tpl->tpl_vars['page']->value == 'use') {?>background-color:#E9E9E9;font-weight:bold;<?php }?>text-align:center;border-bottom:solid 1px #c9c9c9;">
            <a href="/base/use" style="text-decoration:none;display:block;color:#6d6d6d;">工房利用</a>
          </li>
        </ul>
        <div style="color:#6d6d6d;text-align:center;padding-top:10px;">
          <h5 style="font-weight:bold;">オプション</h5>
        </div>
        <div style="margin-top:10px;text-align:center;margin-bottom:45px;">
          <a data-toggle="modal" data-target="#myModal" class="btn" style="line-height: 32px;height: 44px;font-size: 12px;font-weight: bold;width: 90%;margin-top: 15px;color: #ffffff;background-color: #4472c4;">
            ログアウト
          </a>
        </div>
      </div>
    </div>
    <!-- SideContent End -->
    <div class="col-md-9 col-sm-8 col-xs-8 main_content">
      <!-- ContentTitle -->
      <header style="border-bottom:solid 1px #c9c9c9;text-align:center;padding: 10px 0;margin: 0 20px;">
        <h3 style="line-height: inherit;font-weight: 400;">Card Reader System</h3>
      </header>
      <!-- ContentTitle End -->
      <div class="container-fluid" style="padding-top:15px;margin: 0 40px 0 20px;">
        <h2><?php if ($_smarty_tpl->tpl_vars['page']->value == "top") {?>ホーム<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "regist") {?>登録<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "change") {?>変更<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "use") {?>工房利用<?php } else { ?>unknown<?php }?></h2>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160832963259479d5e00d862_11849340', "content_area", $this->tplIndex);
?>

      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<footer style="padding:13px 0;text-align:center;border-top:solid 1px #c9c9c9;">
  <div class="pull-right"></div>
  <b style="font-weight:400">Copyright &copy; 2017 Design Studio<span style="color:red;">.</span> All Rights Reserved.</b>
</footer>
<!-- Footer End -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius:3px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="float:left;padding-top:4px;">ログアウトしますか？</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="font-weight:200;">
        <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
 としてログイン中です。
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-default" data-dismiss="modal">キャンセル</a>
        <a href="/base/logout" type="button" class="btn btn-primary" style="background-color: #4472c4;">ログアウト</a>
      </div>
    </div>
  </div>
</div>
<!-- ModalEnd -->
<!-- ConfirmModal -->
<!-- <div class="modal fade" id="ConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius:3px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">確認</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
        <button type="button" class="btn btn-primary">する</button>
      </div>
    </div>
  </div>
</div> -->
<?php
}
}
/* {/block "template_body"} */
/* {block "template_script"} */
class Block_65058187859479d5e0282e2_33511748 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- <?php echo '<script'; ?>
 src="<?php echo @constant('_BASE_DIRECTORY');?>
assets/bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
> -->
<!-- Plugin JavaScript -->
<?php echo '<script'; ?>
 src="<?php echo @constant('_BASE_DIRECTORY');?>
assets/scripts/jquery.easing.min.js"><?php echo '</script'; ?>
>

<!-- Bootstrap Core JavaScript -->
<!-- <?php echo '<script'; ?>
 src="<?php echo @constant('_BASE_DIRECTORY');?>
assets/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 src="<?php echo @constant('_BASE_DIRECTORY');?>
assets/scripts/jquery.formatter.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay_progress.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('_BASE_DIRECTORY');?>
assets/scripts/sweetalert.min.js"><?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 src="assets/scripts/sweetalert-dev.js"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 src="<?php echo @constant('_BASE_DIRECTORY');?>
assets/scripts/iziToast.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['page']->value == "regist" || $_smarty_tpl->tpl_vars['page']->value == "change" || $_smarty_tpl->tpl_vars['page']->value == "use") {
echo '<script'; ?>
 type='text/javascript' src='<?php echo @constant('_BASE_DIRECTORY');?>
assets/scripts/Data_Format.js'><?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['page']->value == "use") {
echo '<script'; ?>
 type='text/javascript' src='<?php echo @constant('_BASE_DIRECTORY');?>
assets/scripts/use.js'><?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['page']->value == "regist" || $_smarty_tpl->tpl_vars['page']->value == "change") {
echo '<script'; ?>
 type='text/javascript' src='<?php echo @constant('_BASE_DIRECTORY');?>
assets/scripts/socket.js'><?php echo '</script'; ?>
>
<?php }
}
}
/* {/block "template_script"} */
}
