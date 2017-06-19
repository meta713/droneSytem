{extends file="design_templa.tpl"}
{block name="content_area"}
<!-- RegistContent -->
<div class="row regist_form" style="margin-top:20px;padding-left:20px;{if $page != 'regist' and $page != 'change'}display:none;{/if}margin-bottom:20px;">
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
      <button type="button" class="btn btn-primary" id="send_btn" style="margin-left:10px;" data-loading-text="送信中...">{if $page =="regist"}登録{else if $page == "change"}変更{/if}する</button>
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
{/block}
