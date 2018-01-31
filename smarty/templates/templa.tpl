<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- 共通部分　開始 -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{$smarty.const._BASE_DIRECTORY}assets/favicon/key.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="{$smarty.const._BASE_DIRECTORY}assets/bootstrap/css/tether.min.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- 共通部分　終了 -->
    {block name="template_styles"}
    {/block}
    <title>{block name="template_title"}{/block}</title>
    <script>
    //ローディング画像パス
    img_path = "{$smarty.const._BASE_DIRECTORY}assets/image/Preloader_1.gif";
    //img_path = "{$smarty.const._BASE_DIRECTORY}assets/image/loading.gif";
    </script>
  </head>
  <body style="height: 1500px;">
    {block name="template_body"}
    {/block}
    <!-- 共通部分　開始 -->
    <script src="{$smarty.const._BASE_DIRECTORY}assets/bootstrap/js/jquery.min.js"></script>
    <script src="{$smarty.const._BASE_DIRECTORY}assets/bootstrap/js/tether.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay_progress.min.js"></script>
    <!-- 共通部分　終了 -->
    {block name="template_script"}
    {/block}
  </body>
</html>
