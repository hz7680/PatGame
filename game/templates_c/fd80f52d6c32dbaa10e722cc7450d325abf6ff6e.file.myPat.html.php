<?php /* Smarty version Smarty-3.1.20, created on 2015-09-08 09:41:17
         compiled from "./templates/myPat.html" */ ?>
<?php /*%%SmartyHeaderCode:116522939755eced47705a05-37893906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd80f52d6c32dbaa10e722cc7450d325abf6ff6e' => 
    array (
      0 => './templates/myPat.html',
      1 => 1441676396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116522939755eced47705a05-37893906',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55eced4789c7f7_25664566',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eced4789c7f7_25664566')) {function content_55eced4789c7f7_25664566($_smarty_tpl) {?><!DOCTYPE html>
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
    <title>我的宠物</title>

</head>
<body>
    <div class="bg">
        <img src="../public/image/bg.jpg" class="bgimg"/>
        <div class="container">
            <div class="titlebox">
                <img src="../public/image/title.png"/>
            </div>
            <div class="levelbox" id="levelbox">
                <ul>
                    <li>等级:Lv1</li>
                    <li>积分:30</li>
                    <li>关注量:30</li>
                </ul>
                <img src="../public/image/panda-level.png" />
            </div>
            <img src="../public/image/pat/1.gif" class="pat_level1"/>
            <div class="bottombox" id="bottombox">
                <img src="../public/image/bamboo.png" class="bamboo"/>
                <div class="box">
                    <div class="insidebox">
                        <div class="mapbox">
                            <img src="../public/image/map.png" class="map" />
                            <img src="../public/image/panda-level.png" class="mapPoint" id="mapPoint" />
                        </div>
                        <ul class="rulelist">
                            <li>
                                <img src="../public/image/stars.png"/>
                                <p>规则规则规则规则规则规则规则</p>
                            </li>
                            <li>
                                <img src="../public/image/stars.png"/>
                                <p>规则规则规则规则规则规则规则</p>
                            </li>
                        </ul>
                        <div class="btnbox">
                            <a href="javascript:void(0)" onclick="alert()">
                                <img src="../public/image/feedBtn.png" />
                            </a>
                        </div>
                    </div>
                    <div class="shadow"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        initMap(1,1);
    </script>
</body>
</html><?php }} ?>
