{extends file="design_templa.tpl"}
{block name="content_area"}
<!-- HomeContent -->
<div style="{if $page != 'top'}display:none{/if}">
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
{/block}
