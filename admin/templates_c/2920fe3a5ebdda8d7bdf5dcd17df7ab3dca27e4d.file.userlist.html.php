<?php /* Smarty version Smarty-3.1.20, created on 2015-09-14 17:04:01
         compiled from "./templates/userlist.html" */ ?>
<?php /*%%SmartyHeaderCode:26664761155f68294e3ce35-04456721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2920fe3a5ebdda8d7bdf5dcd17df7ab3dca27e4d' => 
    array (
      0 => './templates/userlist.html',
      1 => 1442221441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26664761155f68294e3ce35-04456721',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55f68294efe816_85092420',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f68294efe816_85092420')) {function content_55f68294efe816_85092420($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户管理</title>
    <link rel="stylesheet" href="../public/css/admin.css"/>
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
            <p>您当前的位置:用户管理<span>2015年09月14日</span></p>
        </div>
        <div class="contentpart">
            <p class="title">用户管理</p>
            <div class="searchbox">
                <ul>
                    <li>会员积分大于 <input type="text" class="txtbox" value="2015"/></li>
                    <li>会员积分小于 <input type="text" class="txtbox"/> </li>
                    <li>会员名称 <input type="text" class="txtbox" style="width: 100px;"/> </li>
                    <li><input type="submit" value="搜索" class="submit"/></li>
                    <li><a href="" class="refresh">刷新</a></li>
                </ul>
            </div>
            <div class="contentbox">
                <table style="width: 90%; margin: auto; background: #e5e5e5;  text-align: center; line-height: 30px; font-size: 12px;" cellspacing="1">
                    <tr>
                        <td style="background: #f8f8f8; width: 10%; text-align: left; text-indent: 20px"><input type="checkbox"/> 编号</td>
                        <td style="background: #f8f8f8; width: 15%;">会员名称</td>
                        <td style="background: #f8f8f8; width: 15%;">是否验证</td>
                        <td style="background: #f8f8f8; width: 15%;">积分</td>
                        <td style="background: #f8f8f8; width: 15%;">已提现金额</td>
                        <td style="background: #f8f8f8; width: 15%;">可提现余额</td>
                        <td style="background: #f8f8f8; width: 15%;">操作</td>
                    </tr>
                    <tr>
                        <td style="background: #ffffff; width: 10%; text-align: left; text-indent: 20px"><input type="checkbox"/> 1</td>
                        <td style="background: #ffffff; width: 15%;">sldkflksdf</td>
                        <td style="background: #ffffff; width: 15%; color: #ff0000">√</td>
                        <td style="background: #ffffff; width: 15%;">30</td>
                        <td style="background: #ffffff; width: 15%;">30</td>
                        <td style="background: #ffffff; width: 15%;">30</td>
                        <td style="background: #ffffff; width: 15%;">
                            <input type="button" value="查看" style="background: #3eabe7; border: none; padding: 2px 5px; color: #fff"/>
                            <input type="button" value="删除" style="background: #3eabe7; border: none; padding: 2px 5px; color: #fff"></td>
                    </tr>
                    <tr>
                        <td style="background: #f8f8f8; width: 10%; text-align: left; text-indent: 20px"><input type="checkbox"/> 1</td>
                        <td style="background: #f8f8f8; width: 15%;">sldkflksdf</td>
                        <td style="background: #f8f8f8; width: 15%; color: #ff0000">√</td>
                        <td style="background: #f8f8f8; width: 15%;">30</td>
                        <td style="background: #f8f8f8; width: 15%;">30</td>
                        <td style="background: #f8f8f8; width: 15%;">30</td>
                        <td style="background: #f8f8f8; width: 15%;">
                            <input type="button" value="查看" style="background: #3eabe7; border: none; padding: 2px 5px; color: #fff"/>
                            <input type="button" value="删除" style="background: #3eabe7; border: none; padding: 2px 5px; color: #fff"></td>
                    </tr>
                </table>
                <div class="clear"></div>
                <div class="pagebox">
                    <ul>
                        <li>共<span>XX</span>条纪录,1/5页</li>
                        <li>到第<input type="text" style="width: 30px"/>页</li>
                        <li><a href="" class="on">前往</a></li>
                        <li><a href="">上一页</a></li>
                        <li><a href="">下一页</a></li>
                    </ul>
                </div>
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
