<?php /* Smarty version Smarty-3.1.20, created on 2015-09-14 16:21:13
         compiled from "./templates/userlist.html" */ ?>
<?php /*%%SmartyHeaderCode:26664761155f68294e3ce35-04456721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2920fe3a5ebdda8d7bdf5dcd17df7ab3dca27e4d' => 
    array (
      0 => './templates/userlist.html',
      1 => 1442218870,
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
                    <li><input type="submit" value="搜索" class="submit"/></li>
                    <li><a href="">后一日</a></li>
                    <li><a href="" class="refresh">刷新</a></li>
                </ul>
            </div>
            <div class="contentbox">
                <table style="width: 50%; margin: auto; background: #eeeeee;  text-align: center; line-height: 40px;">
                    <tr>
                        <td style="background: #fff; width: 50%;">总积分</td>
                        <td style="background: #fff; width: 50%;">30</td>
                    </tr>
                    <tr>
                        <td style="background: #fff; width: 50%;">可兑换金额</td>
                        <td style="background: #fff; width: 50%;">30</td>
                    </tr>
                </table>
                <div class="clear"></div>
                <table style="width: 80%; margin: auto; margin-top: 50px; background: #eeeeee; line-height: 40px;text-align: center ">
                    <tr>
                        <td>等级</td>
                        <td>一级分销商</td>
                        <td>二级分销商</td>
                        <td>三级分销商</td>
                        <td>操作</td>
                    </tr>
                    <tr>
                        <td style="background: #fff">分销返佣比例</td>
                        <td style="background: #fff"><input type="text" value="25" style="width: 90px; text-align: center"/>%</td>
                        <td style="background: #fff"><input type="text" value="15" style="width: 90px; text-align: center"/>%</td>
                        <td style="background: #fff"><input type="text" value="10" style="width: 90px; text-align: center"/>%</td>
                        <td style="background: #fff"><input type="submit" value="修改"/></td>
                    </tr>
                </table>
                <table style="width: 80%; margin: auto; margin-top: 50px; background: #eeeeee; line-height: 40px;text-align: center; margin-bottom: 57px; ">
                    <tr>
                        <td>现金兑换比例</td>
                        <td style="background: #fff">1 元 = <input type="text" value="100" style="width: 50px; text-align: center"/> 分</td>
                        <td style="background: #fff; width: 30%"><input type="submit" value="修改"/></td>
                    </tr>
                </table>
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
