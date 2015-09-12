<?php /* Smarty version Smarty-3.1.20, created on 2015-09-12 15:59:08
         compiled from "./templates/userinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:117440962655f3ce8807cf76-93864461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7bdcd20597badb92817a9fe5a5e9de424b006b1' => 
    array (
      0 => './templates/userinfo.html',
      1 => 1442044748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117440962655f3ce8807cf76-93864461',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55f3ce882edbf8_08000777',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f3ce882edbf8_08000777')) {function content_55f3ce882edbf8_08000777($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no,maximum-scale=1,initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="../public/css/index.css"/>
    <script src="../public/js/jquery-1.11.2.js"></script>
    <script src="../public/js/game.js"></script>
    <title>个人中心</title>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
</head>
<body>
    <h1 class="userinfo-top">个人中心</h1>
    <div class="info-img-box">
        <img src="../public/image/userinfo-pat-img.gif" />
        <div class="clear"></div>
        <div class="info-box">
            <ul>
                <li>等级: Lv3</li>
                <li>积分: 30</li>
                <li>关注量: 30</li>
            </ul>
        </div>
    </div>
    <ul class="info-list">
        <li class="info">
            <img src="../public/image/distributors.png" />
            我的分销商
            <ul class="details-list"></ul>
        </li>
        <li class="info">
            <img src="../public/image/money.png" />
            我的提现
        </li>
    </ul>
</body>
</html><?php }} ?>
