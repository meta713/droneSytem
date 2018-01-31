<?php
/* Smarty version 3.1.30, created on 2018-01-29 16:09:43
  from "/Users/hayashimizuki/www/drone_system/smarty/templates/map.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6ec8b7378ea4_59460789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fd5917b9e9d3197bf9554ab9a8ca0867b825df9' => 
    array (
      0 => '/Users/hayashimizuki/www/drone_system/smarty/templates/map.tpl',
      1 => 1517209766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templa.tpl' => 1,
  ),
),false)) {
function content_5a6ec8b7378ea4_59460789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2062006125a6ec8b736d350_14092895', "template_styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10181359015a6ec8b7374b39_32903118', "template_body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5002827155a6ec8b7378832_11511511', "template_script");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:templa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "template_styles"} */
class Block_2062006125a6ec8b736d350_14092895 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link href="<?php echo @constant('_BASE_DIRECTORY');?>
assets/stylesheet/sweetalert.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo @constant('_BASE_DIRECTORY');?>
assets/stylesheet/iziToast.min.css">
<?php
}
}
/* {/block "template_styles"} */
/* {block "template_body"} */
class Block_10181359015a6ec8b7374b39_32903118 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="#"><i class="far fa-paper-plane"></i> REAL FLIGHT</a>
  <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbardrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        System Options
      </a>
      <div class="dropdown-menu" aria-labelledby="navbardrop">
        <a class="dropdown-item" href="javascript:void(0)">ヘルプ</a>
        <a class="dropdown-item" href="javascript:void(0)">ログアウト</a>
      </div>
    </li>
  </ul>
  <a class="btn btn-success text-white"><i class="far fa-folder"></i> Library</a>
</nav>
<!-- <div class="jumbotron text-center" style="margin-top: 56px;">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p>
</div> -->
<div class="container-fluid" style="margin-top: 80px;">
  <div class="row">
    <div class="col-md-3">
      <div class="container">
        <h3 class="">Drone Lists <small id="drone_counter" class="badge badge-pill badge-info">0機</small></h3>
        <p class="drone_info small text-muted">現在、利用できるドローンはありません</p>
        <ul class="list-group drone_list">
        </ul>
      </div>
      <!-- <h3>Column 1</h3>
      <p>Lorem ipsum dolor..</p>
      <p>Ut enim ad..</p> -->
    </div>
    <div class="col-md-9 border-left">
      <div class="border-bottom mb-4">
        <div class="row">
          <div class="col-md-9">
            <h3 class="drone-header"><i class="fas fa-exclamation-circle"></i> ドローンが選択されていません</h3>
            <div class="current_droneinfo text-muted">
            </div>
            <!-- <button class="btn btn-info mb-2 connection-btn" disabled="">接続する</button> -->
          </div>
          <div class="col-md-3 pb-1">
            <button class="btn btn-info btn-block mb-2 connection-btn" disabled="">接続する</button>
          </div>
        </div>
      </div>
      <div class="test_area">

        <div class="row mb-4 battery-info d-none">
          <div class="col-md-1 text-right">
            <span class="badge badge-light text-info">バッテリー:</span>
          </div>
          <div class="col-md-11">
            <div class="progress h-100">
              <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 40%">40%</div>
            </div>
          </div>
        </div>

        <div class="drone-condition mb-4">
          <div class="card">
            <div class="card-body drone-condition-data-area d-none">
              <div class="row data-line">
                <div class="col-md-6 border-right">
                  <div class="p-1">
                    <div class="row border-bottom">
                      <div class="col-md-6">
                        種類:
                      </div>
                      <div class="col-md-6 text-right">
                        APFSコンテナ
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="p-1">
                    <div class="row border-bottom">
                      <div class="col-md-6">
                        ボリューム数:
                      </div>
                      <div class="col-md-6 text-right">
                        4
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row data-line">
                <div class="col-md-6 border-right">
                  <div class="p-1">
                    <div class="row border-bottom">
                      <div class="col-md-6">
                        容量:
                      </div>
                      <div class="col-md-6 text-right">
                        500.07 GB
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="p-1">
                    <div class="row border-bottom">
                      <div class="col-md-6">
                        物理ストア:
                      </div>
                      <div class="col-md-6 text-right">
                        disk0s2
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row data-line">
                <div class="col-md-6 border-right">
                  <div class="p-1">
                    <div class="row border-bottom">
                      <div class="col-md-4">
                        利用可能:
                      </div>
                      <div class="col-md-8 text-right">
                        388.88 GB（3.37 GBパージ可能)
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="p-1">
                    <div class="row border-bottom">
                      <div class="col-md-4">
                        接続:
                      </div>
                      <div class="col-md-8 text-right">
                        PCI
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="card-body drone-condition-no-selected">
              No drone's data.
            </div>
          </div>
        </div>
      </div>
      <!-- <button class="btn btn-info mb-2 connection-btn" disabled="">接続する</button> -->
      <div class="map_area border-top mt-4 pt-4">
        <div class="row no-gutters" style="background-image : url(<?php echo @constant('_BASE_DIRECTORY');?>
assets/image/haikei.jpg); background-size: cover;">
          <?php
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? 120+1 - (1) : 1-(120)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 1, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration == 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration == $_smarty_tpl->tpl_vars['index']->total;?><div class="col-sm-1"><button class="btn btn-block btn-outline-secondary text-center test-btn"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</btn></div><?php }
}
?>

        </div>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block "template_body"} */
/* {block "template_script"} */
class Block_5002827155a6ec8b7378832_11511511 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php echo '<script'; ?>
>
// ドローン一覧
knownDevices = {};
current_droneid = {};

$(function(){

  $.LoadingOverlaySetup({
    color : "rgba(255,255,255,1)",
    image       : img_path
  });

  //最初はドローンの情報は空っぽ
  //$(".drone-condition-data-area").hide();

  var ws = new WebSocket("ws://localhost:8989");

  ws.onopen = function(){
    iziToast.info({
      id : "info_toast",
      title: 'Info',
      message: 'オンライン',
      position: 'bottomRight',
      timeout: false,
      progressBar: false,
      // close: false
    });
  };
  // *** onmessage ***
  ws.onmessage = function(e){
    // console.log(e.data);
    var data = JSON.parse(e.data);
    //knownDevices取得時 ドローン一覧取得時
    if(data["knownDevices"]){
      knownDevices = data["knownDevices"];
      $("#drone_counter").html(knownDevices.length + "機");
      $(".drone_info").html(knownDevices.length + "機のドローンが利用可能です");
      $(".drone_list").html("");
      for(var i = 0; i < data["knownDevices"].length; i++){
        var drone = data["knownDevices"][i];
        $(".drone_list").append('<li class="list-group-item"><h5 style="color: #212529; cursor:pointer;" class="drone-btn" drone-id="'+ drone.name +'" drone-uuid="'+ drone.uuid +'" drone-rssi="'+ drone.rssi +'"><i class="fas fa-check-circle" style="display:none;"></i>'+ drone.name +'</h5>' +
          '<div id="'+ drone.name +'" style="overflow: scroll;">' +
          '<div style="display: inline-flex"><span class="badge badge-secondary" style="padding-top: 0.5em;margin-right: 1rem">UUID:</span> <span class="text-info" style="vertical-align: middle;">'+ drone.uuid +'</span></div>' +
          '<div><span class="badge badge-secondary" style="margin-right: 1.2rem">RSSI:</span><span class="text-info" style="vertical-align: middle;">'+ drone.rssi +'</span></div>');
        $(".drone-btn").on("click", function(){
          $(".drone-btn").removeClass("text-info").find("svg").hide();
          var droneid = $(this).attr("drone-id");
          $(this).addClass("text-info").find("svg").show();
          $(".drone-header").html('<i class="fas fa-globe"></i> ' + droneid);
          current_droneinfo = { droneid : droneid, droneuuid : $(this).attr("drone-uuid"), dronerssi : $(this).attr("drone-rssi")};
          $(".current_droneinfo").html("").append("<p class='text-muted'>未接続</p>");
          $(".connection-btn").removeAttr("disabled");
        });
      }
    }
  };
  // *** onmessage end ***

  // *** onerror ***
  ws.onerror = function(e){
    swal(
      'ERROR',
      'ドローンとの接続に失敗しました。 もう一度お願いします。',
      'error'
    );
  };
  // *** onerror end ***

  //*** onclose ***
  ws.onclose = function(e){
    swal(
      'ERROR',
      'ドローンとの接続に失敗しました。 もう一度お願いします。',
      'error'
    );
  };
  //*** onclose end ***

  // $(".test-btn").on("click", function(){
  //   //alert($(this).html());
  //   var index = $(this).html();
  //   var keiro = index * 62.5;
  //   alert(keiro);
  // });

  $(".connection-btn").on("click", function(){
    swal({
      title: current_droneinfo.droneid + 'と接続しますか?',
      text: 'Create the connecting to your drone.',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: '接続する',
      //closeOnConfirm: false,
    },function(isConfirm){
      if(isConfirm){
        $(".test_area").LoadingOverlay("show");
        $(".current_droneinfo").html("<p class='text-muted'>接続中</p>");
        setTimeout(function(){

          $(".test_area").LoadingOverlay("hide");

          $(".current_droneinfo").html("<p class='text-success'>接続済み</p>");

          //drone-condition-data-area show
          $(".drone-condition-data-area").removeClass("d-none");
          $(".battery-info").removeClass("battery-info");
          $(".drone-condition-no-selected").hide();

        }, 3000);
      }
    });
  });
});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template_script"} */
}
