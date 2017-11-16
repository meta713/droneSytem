{extends file="templa.tpl"}
{block name="template_styles"}
<link href="{$smarty.const._BASE_DIRECTORY}assets/stylesheet/sweetalert.css" rel="stylesheet">
<link rel="stylesheet" href="{$smarty.const._BASE_DIRECTORY}assets/stylesheet/iziToast.min.css">
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
<script type="text/javascript">
//グローバル変数
page_info = "{$page}";
img_path = "{$smarty.const._BASE_DIRECTORY}assets/image/Preloader_1.gif";
</script>
{/block}
{block name="template_title"}
Card System
{/block}
{block name="template_body"}
<div class="wrapper" style="min-height: 675px;">
  <div class="row">
    <!-- SideContent -->
    <div class="col-md-3 col-sm-4 col-xs-4 side_menu" style="min-height:625px;margin-top:55px;padding-left:40px;z-index:999;">
      <div style="border:solid 1px #c9c9c9;border-radius:10px;">
        <ul style="list-style:none;margin-top:0px;line-height:40px;padding:0;">
          <li style="padding:33px;font-size:14px;color:#6d6d6d;font-weight:bold;border-bottom:solid 1px #c9c9c9;text-align:center;">
            ログインユーザ <br><span style="text-align:center;">{$user_name}</span>
          </li>
          <li style="padding:12px;font-size:14px;{if $page == 'top'}background-color:#E9E9E9;font-weight:bold;{/if}border-bottom:solid 1px #c9c9c9;text-align:center;">
            <a href="/base/top" style="text-decoration:none;display:block;color:#6d6d6d;">ホーム</a>
          </li>
          <li style="padding:12px;font-size:14px;{if $page == 'regist'}background-color:#E9E9E9;font-weight:bold;{/if}text-align:center;border-bottom:solid 1px #c9c9c9;">
            <a href="/base/regist" style="text-decoration:none;display:block;color:#6d6d6d;">登録</a>
          </li>
          <li style="padding:12px;font-size:14px;{if $page == 'change'}background-color:#E9E9E9;font-weight:bold;{/if}text-align:center;border-bottom:solid 1px #c9c9c9;">
            <a href="/base/change" style="text-decoration:none;display:block;color:#6d6d6d;">変更</a>
          </li>
          <li style="padding:12px;font-size:14px;{if $page == 'use'}background-color:#E9E9E9;font-weight:bold;{/if}text-align:center;border-bottom:solid 1px #c9c9c9;">
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
        <h2>{if $page eq "top"}ホーム{elseif $page eq "regist"}登録{elseif $page eq "change"}変更{elseif $page eq "use"}工房利用{else}unknown{/if}</h2>
        {block name="content_area"}{/block}
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
        {$user_name} としてログイン中です。
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
{/block}
{block name="template_script"}
<!-- <script src="{$smarty.const._BASE_DIRECTORY}assets/bootstrap/js/jquery.min.js"></script> -->
<!-- Plugin JavaScript -->
<script src="{$smarty.const._BASE_DIRECTORY}assets/scripts/jquery.easing.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<!-- <script src="{$smarty.const._BASE_DIRECTORY}assets/bootstrap/js/bootstrap.min.js"></script> -->
<script src="{$smarty.const._BASE_DIRECTORY}assets/scripts/jquery.formatter.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay_progress.min.js"></script>
<script src="{$smarty.const._BASE_DIRECTORY}assets/scripts/sweetalert.min.js"></script>
<!-- <script src="assets/scripts/sweetalert-dev.js"></script> -->
<script src="{$smarty.const._BASE_DIRECTORY}assets/scripts/iziToast.min.js" type="text/javascript"></script>
{if $page == "regist" or $page == "change" or $page == "use"}
<script type='text/javascript' src='{$smarty.const._BASE_DIRECTORY}assets/scripts/Data_Format.js'></script>
{/if}
{if $page == "use"}
<script type='text/javascript' src='{$smarty.const._BASE_DIRECTORY}assets/scripts/use.js'></script>
{/if}
{if $page == "regist" or $page == "change"}
<script type='text/javascript' src='{$smarty.const._BASE_DIRECTORY}assets/scripts/socket.js'></script>
{/if}
{/block}
