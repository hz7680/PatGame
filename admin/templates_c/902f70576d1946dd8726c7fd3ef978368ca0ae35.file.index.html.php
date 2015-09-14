<?php /* Smarty version Smarty-3.1.20, created on 2015-09-14 15:20:10
         compiled from "./templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:154828500155f62703bb2dc1-16322011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '902f70576d1946dd8726c7fd3ef978368ca0ae35' => 
    array (
      0 => './templates/index.html',
      1 => 1442215209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154828500155f62703bb2dc1-16322011',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55f62703be4663_64128839',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f62703be4663_64128839')) {function content_55f62703be4663_64128839($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>宠物管理</title>
    <link rel="stylesheet" type="text/css" href="../public/css/admin.css"/>
    <script type="text/javascript" src="../public/js/jquery-1.11.2.js"></script>
    <script type="text/javascript" src="../public/js/admin.js"></script>
</head>
<body>
    <div class="top">
        <img src="../public/image/admin/top.jpg"/>
    </div>
    <div class="clear"></div>
    <div class="center">
        <div class="leftpart">
            <ul>
                <li><a href=""><img src="../public/image/admin/panda.png" />宠物管理</a></li>
                <li><a href=""><img src="../public/image/admin/people.png" />会员管理</a></li>
                <li><a href=""><img src="../public/image/admin/integral.png" />积分系统</a></li>
                <li><a href=""><img src="../public/image/admin/exit.png" />退出系统</a></li>
            </ul>
        </div>
        <div class="rightpart">
            <div class="toppart">
                <p>您当前的位置:宠物管理<span>2015年09月14日</span></p>
            </div>
            <div class="contentpart">
                <p class="title">宠物管理</p>

                <div class="contentbox">
                    <p style="width: 60%; margin: auto; font-size: 12px; line-height: 25px; padding-top: 15px">标题:</p>
                    <input type="text" value="萌宠" class="input1" disabled/>
                    <p style="width: 60%; margin: auto; font-size: 12px; line-height: 25px; padding-top: 15px">规则:</p>
                    <div id="ruleBox">
                        <div>
                            <input type="text" value="萌宠" class="input1" name="rule[]" />
                            <a href="javascript:void(0)" onclick="removeRule(this)"></a>
                        </div>
                        <div>
                            <input type="text" value="萌宠" class="input1" name="rule[]" />
                            <a href="javascript:void(0)" onclick="removeRule(this)"></a>
                        </div>
                        <div>
                            <input type="text" value="萌宠" class="input1" name="rule[]" />
                            <a href="javascript:void(0)" onclick="removeRule(this)"></a>
                        </div>
                    </div>
                    <button onclick="addRule()" style="width: 60%; display: block; margin: auto; height: 40px; margin-top: 15px; background: transparent; border: 1px solid #dedede;"><img src="../public/image/admin/add.png" style="margin: auto" /></button>
                    <input type="submit" value="确认修改" style="width: 40%; display: block; height: 40px; color: #fff; background: #3eabe7; border: none; margin: auto; margin-top: 35px; margin-bottom: 31px"/>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="bottom">
        <p>衢州市罗盘信息科技 版权所有</p>
    </div>
</body>
</html><?php }} ?>
