<?php
/* Smarty version 3.1.30, created on 2018-02-10 01:38:13
  from "/Users/hayashimizuki/www/drone_system/smarty/templates/map.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7dce75243ac6_24770116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fd5917b9e9d3197bf9554ab9a8ca0867b825df9' => 
    array (
      0 => '/Users/hayashimizuki/www/drone_system/smarty/templates/map.tpl',
      1 => 1518194290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templa.tpl' => 1,
  ),
),false)) {
function content_5a7dce75243ac6_24770116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3823432195a7dce75223ed1_85322235', "template_styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10094663875a7dce75236df9_65583800', "template_body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3418430265a7dce75242ef5_23243462', "template_script");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:templa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "template_styles"} */
class Block_3823432195a7dce75223ed1_85322235 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link href="<?php echo @constant('_BASE_DIRECTORY');?>
assets/stylesheet/sweetalert.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo @constant('_BASE_DIRECTORY');?>
assets/stylesheet/iziToast.min.css">

<style>
.drone_item {
  cursor: pointer;
}

.drone_item_clicked {
  cursor: pointer;
  background-color: #eee;
}

.drone_item_not_allowed{
  cursor: not-allowed;
}

.col-sm-13{
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 7.692307%;
      -ms-flex: 0 0 7.692307%;
          flex: 0 0 7.692307%;
  max-width: 7.692307%;
}

.btn-ajust {
  padding: -0 0.75rem;
}
</style>
<?php
}
}
/* {/block "template_styles"} */
/* {block "template_body"} */
class Block_10094663875a7dce75236df9_65583800 extends Smarty_Internal_Block
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
  <a class="btn btn-info text-white"><i class="far fa-folder"></i> Library</a>
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
                        状態:
                      </div>
                      <div class="col-md-6 text-right" id="flyingStateChanged">
                        不定
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="p-1">
                    <div class="row border-bottom">
                      <div class="col-md-6">
                        ARCommandsVersion:
                      </div>
                      <div class="col-md-6 text-right" id="deviceLibARCommandsVersion">
                        不定
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
                        chargingInfo phase:
                      </div>
                      <div class="col-md-6 text-right" id="phase">
                        不定
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="p-1">
                    <div class="row border-bottom">
                      <div class="col-md-6">
                        chargingInfo rate:
                      </div>
                      <div class="col-md-6 text-right" id="rate">
                        不定
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
                      <div class="col-md-8 text-right" id="availableDevice">
                        不可
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="p-1">
                    <div class="row border-bottom">
                      <div class="col-md-4">
                        充電完了時間:
                      </div>
                      <div class="col-md-8 text-right" id="fullChargingTime">
                        不定
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
assets/image/room.jpg); background-size: 100% 100%;">
          <?php $_smarty_tpl->_assignInScope('x', 0);
$_smarty_tpl->_assignInScope('y', 5);
?>
          <?php
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? 13+1 - (1) : 1-(13)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 1, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration == 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration == $_smarty_tpl->tpl_vars['index']->total;?><div class="col-sm-13"><button style="padding: -0 0.75rem;" class="btn btn-block btn-outline-secondary text-center test-btn invisible btn-ajust"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</btn></div><?php }
}
?>

          <?php
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? 65+1 - (1) : 1-(65)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 1, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration == 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration == $_smarty_tpl->tpl_vars['index']->total;
if ($_smarty_tpl->tpl_vars['index']->value%13 == 1) {?><div class="col-sm-13"></div><?php } else {
$_smarty_tpl->_assignInScope('x', $_smarty_tpl->tpl_vars['x']->value+1);
?><div class="col-sm-13"><button style="padding: -0 0.75rem;" class="btn btn-block btn-outline-info text-center test-btn btn-ajust"><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['y']->value;?>
</btn></div><?php if ($_smarty_tpl->tpl_vars['index']->value%13 == 0) {
$_smarty_tpl->_assignInScope('y', $_smarty_tpl->tpl_vars['y']->value-1);
$_smarty_tpl->_assignInScope('x', 0);
}
}
}
}
?>

          <?php
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? 13+1 - (1) : 1-(13)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 1, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration == 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration == $_smarty_tpl->tpl_vars['index']->total;?><div class="col-sm-13"><button style="padding: -0 0.75rem;" class="btn btn-block btn-outline-secondary text-center test-btn invisible btn-ajust"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</btn></div><?php }
}
?>

        </div>
      </div>
      <div class="alert_area border-top mt-4 pt-4" style="display: none;">
        飛行中につき、利用できません。
      </div>
      <!-- <div style="max-width: 100%;">
        <img src="<?php echo @constant('_BASE_DIRECTORY');?>
assets/image/room.jpg" width="100%" height="100%">
      </div> -->
    </div>
  </div>
</div>
<?php
}
}
/* {/block "template_body"} */
/* {block "template_script"} */
class Block_3418430265a7dce75242ef5_23243462 extends Smarty_Internal_Block
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
$(function(){
  // ドローン一覧
  var knownDevices = [];

  // ***** KnownDevicesクラス ******
  var KnownDevices = (function(){
    var KnownDevices = function(connectingCount=0, flyingCount=0, currentDevice=null, Devices=[]){
      if(!(this instanceof KnownDevices)){
        return new KnownDevices(connectingCount, flyingCount, currentDevice, Devices);
      }
      this.connectingCount = connectingCount;
      this.flyingCount = flyingCount;
      this.currentDevice = currentDevice;
      this.Devices = Devices;
    };

    var p = KnownDevices.prototype;
    //検索
    p.findDeviceByUuid = function(uuid){
      return this.Devices.find(function(device){
        return device.equals(uuid);
      });
    };

    p.setDevices = function(devices=[]){
      var self = this;
      this.Devices = [];
      var conncount = 0;
      var flycount = 0;
      devices.forEach(function(device){
        if(device.isConnecting == null || device.isFlying == null) device = Device(device.name, device.uuid, device.rssi);
        self.Devices.push(Device(device.name, device.uuid, device.rssi, device.battery,device.isConnecting, device.isFlying));
        conncount = device.isConnecting ? conncount + 1 : conncount;
        flycount = device.isFlying ? flycount + 1 : flycount;
      });
      this.connectingCount = conncount;
      this.flyingCount = flycount;
    };

    p.setCurrentDevice = function(device){
      this.currentDevice = device;
    };

    p.setCurrentDeviceByUuid = function(uuid){
      this.setCurrentDevice(this.findDeviceByUuid(uuid));
    }

    p.addDevices = function(devices=[]){
      var self = this;
      devices.forEach(function(device){
        self.Devices.push(Device(device.name, device.uuid, device.rssi, device.battery, device.isConnecting, device.isFlying));
      });
    };

    p.updateDeviceStatus = function(device){
      var device = Device(device.name, device.uuid, device.rssi, device.battery, device.isConnecting, device.isFlying);
      if(this.equalToCurrent(device.uuid)){
        this.setCurrentDevice(device);
      }
      var conncount = 0;
      var flycount = 0;
      // foreachで取得したデータを丸ごと書き換えると参照元が失われることになるため、実際には変更を許容しない？？
      var td = this.Devices;
      for(var i = 0; i < td.length; i++){
        if(td[i].equals(device.uuid)){
          td[i] = device;
          conncount = td[i].isConnecting ? conncount + 1 : conncount;
          flycount = td[i].isFlying ? flycount + 1 : flycount;
        }
      }
      this.connectingCount = conncount;
      this.flyingCount = flycount;
    };

    p.equalToCurrent = function(uuid){
      if(!this.currentDevice) return false;
      return this.currentDevice.equals(uuid);
    };

    return KnownDevices;
  })();

  // ***** Deviceクラス ******
  var Device = (function(){
    const BATTERYLIMIT = 10;

    //コンストラクタ
    var Device = function(name, uuid, rssi, battery=0, isConnecting=false, isFlying=false){
      if(!(this instanceof Device)){
        return new Device(name, uuid, rssi, battery, isConnecting, isFlying);
      }
      this.name = name;
      this.uuid = uuid;
      this.rssi = rssi;
      this.battery = battery;
      this.isConnecting = isConnecting;
      this.isFlying = isFlying;
    }
    var p = Device.prototype;
    p.checkBattery = function(){
      return parseInt(this.battery) > BATTERYLIMIT;
    };
    p.connectable = function(){
      return this.checkBattery && this.isConnecting;
    };
    p.equals = function(uuid){
      return this.uuid === uuid;
    };

    return Device;
  })();

  // Socket Connection
  var ws = new WebSocket("ws://localhost:7777");

  // サーバから取得したデバイス
  var mydevices = KnownDevices();

  //image loader setup
  $.LoadingOverlaySetup({
    color : "rgba(255,255,255,1)",
    image       : img_path
  });

  var noticeOnLine = function(){
    iziToast.info({
      id : "info_toast",
      title: 'Info',
      message: 'オンライン',
      position: 'bottomRight',
      timeout: false,
      progressBar: false,
    });
  };

  var noticeOffLine = function(){
    swal(
      'ERROR',
      'ドローンとの接続に失敗しました。 もう一度お願いします。',
      'error'
    );
  };

  var setDevices = function(devices){
    mydevices.setDevices(devices);

    var availableCount = mydevices.Devices.length;
    // 件数更新
    $("#drone_counter").html(availableCount + "機");
    $(".drone_info").html(availableCount + "機のドローンが利用可能です");

    var $drone_list_dom = $(".drone_list");
    // 利用可能ドローン情報の更新
    $drone_list_dom.html("");
    mydevices.Devices.forEach(function(device){
      var h5_html = device.isConnecting ? '<h5 class="text-info"><i class="fas fa-check-circle"></i>'+ device.name +'</h5>' : '<h5 style="color: #212529;"><i class="fas fa-check-circle" style="display:none;"></i>'+ device.name +'</h5>';
      $(".drone_list").append('<li class="list-group-item drone_item" drone-id="'+ device.name +'" drone-uuid="'+ device.uuid +'" drone-rssi="'+ device.rssi +'">'+ h5_html +
        '<div id="'+ device.name +'" style="overflow: scroll;">' +
        '<div style="display: inline-flex"><span class="badge badge-secondary" style="padding-top: 0.5em;margin-right: 1rem">UUID:</span> <span class="text-muted" style="vertical-align: middle;">'+ device.uuid +'</span></div>' +
        '<div><span class="badge badge-secondary" style="margin-right: 1.2rem">RSSI:</span><span class="text-muted" style="vertical-align: middle;">'+ device.rssi +'</span></div>');
    });

    if(mydevices.currentDevice){
      $(".drone_item[drone-uuid='"+ mydevices.currentDevice.uuid +"']").addClass("drone_item_clicked");
    }

    // ドローンitemにクリックイベントを付与
    $(".drone_item").on("click", function(){
      if(mydevices.currentDevice && mydevices.currentDevice.isFlying) return;
      var $this_drone_dom = $(this);
      var $all_drone_item_dom = $(".drone_item");
      // 一度全ての選択をリセット
      $all_drone_item_dom.removeClass("drone_item_clicked");
      // 選択されたitemにcssを追加
      $this_drone_dom.addClass("drone_item_clicked");

      //currentDeviceを更新
      mydevices.setCurrentDeviceByUuid($this_drone_dom.attr("drone-uuid"));

      //選択されているdevice情報を更新
      $(".drone-header").html('<i class="fas fa-globe"></i> ' + mydevices.currentDevice.name);
      var conn_text = "";
      if(mydevices.currentDevice.isConnecting){
        conn_text = "<p class='text-info'>接続済み</p>";
        $(".connection-btn").attr("disabled","disabled").text("接続完了");
      }else{
        conn_text = "<p class='text-muted'>未接続</p>";
        $(".connection-btn").removeAttr("disabled").text("接続する");
      }
      $(".current_droneinfo").html(conn_text);
    });

  };

  var connect_success = function(data){
    setDevices(data["knownDevices"]);
    var cd = mydevices.currentDevice;

    $(".test_area").LoadingOverlay("hide");
    $(".current_droneinfo").html("<p class='text-info'>接続済み</p>");
    $(".connection-btn").attr("disabled","disabled").text("接続完了");

    var $sd_dom = $(".drone_item[drone-uuid='"+ cd.uuid +"']");
    $sd_dom.find("h5").addClass("text-info").find("svg").show();

    var api = data["api"]["data"];
    if(api["flyingStateChanged"]) $("#flyingStateChanged").html(api["flyingStateChanged"]["state"]);
    if(api["batteryStateChanged"]){
      var percent = api["batteryStateChanged"]["percent"];
      var percent_str = percent + "%";
      mydevices.updateDeviceStatus(Device(cd.name, cd.uuid, cd.rssi, percent, true, cd.isFlying));
      $(".battery-info .progress-bar").css("width",percent_str).html(percent_str);
      $(".battery-info").removeClass("d-none");
      if(mydevices.currentDevice.connectable()){
        $("#availableDevice").html("可能");
        $(".map_area").removeClass("d-none");
      }
    }
    if(api["chargingInfo"]){
      var cinfo = api["chargingInfo"];
      if(cinfo["phase"]) $("#phase").html(cinfo["phase"]);
      if(cinfo["rate"]) $("#rate").html(cinfo["rate"]);
      if(cinfo["fullChargingTime"]) $("#fullChargingTime").html(cinfo["fullChargingTime"] + "秒");
    }
    if(api["deviceLibARCommandsVersion"]) $("#deviceLibARCommandsVersion").html(api["deviceLibARCommandsVersion"]["version"]);
    //drone-condition-data-area show
    $(".drone-condition-data-area").removeClass("d-none");
    $(".drone-condition-no-selected").hide();
  }

  // event
  ws.onopen = function(){
    noticeOnLine();
  };

  // *** onmessage ***
  ws.onmessage = function(e){
    var data = JSON.parse(e.data);
    console.log(data);
    switch(data["flag"]){
      case "updateDevices": {
        setDevices(data["knownDevices"]);
        break;
      }
      case "connecting": {
        connect_success(data);
        break;
      }
      case "flying": {
        break;
      }
      default: {
        console.log("error!");
        break;
      }
    }
  };
  // *** onmessage end ***

  // *** onerror ***
  ws.onerror = function(e){
    noticeOffLine();
  };
  // *** onerror end ***

  //*** onclose ***
  ws.onclose = function(e){
    noticeOffLine();
  };
  //*** onclose end ***

  //接続ボタン処理
  $(".connection-btn").on("click", function(){
    swal({
      title: mydevices.currentDevice.name + 'と接続しますか?',
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

        //send処理
        var cd = mydevices.currentDevice;
        mydevices.updateDeviceStatus(Device(cd.name, cd.uuid, cd.rssi, cd.battery, true, cd.isFlying));
        ws.send(JSON.stringify({ rd : mydevices.currentDevice, flag : "connecting" }));
      }
    });
  });

  //飛行経路ボタン処理
  $(".btn-ajust").click(function(){
    var grid_point = $(this).html().split(",");
    var x = grid_point[0];
    var y = grid_point[1];
    swal({
      title: mydevices.currentDevice.name + 'を(' + x + ',' + y + ')地点にフライトさせますか？',
      text: 'ドローンが(' + x + ',' + y + ')地点を撮影します。',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Flight On!',
      //closeOnConfirm: false,
    },function(isConfirm){
      if(isConfirm){
        $(".map_area").hide();
        $(".alert_area").show();
        $(".current_droneinfo").html("<p class='text-warning'>飛行中</p>");
        $(".drone_list li").addClass("drone_item_not_allowed");

        // //send処理
        var cd = mydevices.currentDevice;
        mydevices.updateDeviceStatus(Device(cd.name, cd.uuid, cd.rssi, cd.battery, true, true));
        // ws.send(JSON.stringify({ rd : mydevices.currentDevice, flag : "connecting" }));
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
