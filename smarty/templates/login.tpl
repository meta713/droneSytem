{extends file="templa.tpl"}
{block name="template_styles"}
<!-- Optional theme -->
<link rel="stylesheet" href="{$smarty.const._BASE_DIRECTORY}assets/lib/bootstrap/css/bootstrap-theme.css" />
{/block}
{block name="template_title"}
login
{/block}
{block name="template_body"}
<div class="container">
  <div id="loginbox" style="margin-top:100px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
   <div class="panel panel-info">
     <div class="panel-heading">
       <div class="panel-title">action:{$action}</div>
       </div>
       <div style="padding-top:30px" class="panel-body" >
         <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
         <form id="loginform" class="form-horizontal" role="form" method="" action="" onsubmit="inputcheck();return false;">
         <div style="margin-bottom: 25px" class="input-group">
           <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
           <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="ユーザ名">
         </div>
         <div style="margin-bottom: 25px" class="input-group">
           <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
           <input id="login-password" type="password" class="form-control" name="password" placeholder="パスワード">
         </div>
         <div style="margin-bottom: 25px" class="" id="error"></div>
         <div style="margin-top:10px" class="form-group">
           <!-- Button -->
           <div class="col-sm-12 controls">
             <button id="btn-login" class="btn btn-success">ログイン</button>
           </div>
         </div>
         </form>
       </div>
   </div>
  </div>
</div>
{/block}
{block name="template_script"}
<!-- <script src="assets/lib/jquery-1.12.1.min.js"></script> -->
<!-- underscore.js -->
<script src="{$smarty.const._BASE_DIRECTORY}assets/lib/underscore-min.js"></script>
<script src="{$smarty.const._BASE_DIRECTORY}assets/scripts/login.js"></script>
{/block}
