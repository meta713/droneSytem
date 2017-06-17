<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- 共通部分　開始 -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{$smarty.const._BASE_DIRECTORY}assets/favicon/key.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="{$smarty.const._BASE_DIRECTORY}assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- 共通部分　終了 -->
    {block name="template_styles"}
    {/block}
    <title>{block name="template_title"}{/block}</title>
  </head>
  <body>
    {block name="template_body"}
    {/block}
    {block name="template_script"}
    {/block}
    <!-- 共通部分　開始 -->
    <script src="{$smarty.const._BASE_DIRECTORY}assets/bootstrap/js/jquery.min.js"></script>
    <script src="{$smarty.const._BASE_DIRECTORY}assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- 共通部分　終了 -->
  </body>
</html>
