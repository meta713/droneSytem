{extends file="design_templa.tpl"}
{block name="content_area"}
<!-- UseContent -->
<div style="{if $page != 'use'}display:none;{/if}">
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
{/block}
