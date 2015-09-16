<?php /* Smarty version Smarty-3.1.20, created on 2015-09-16 09:18:59
         compiled from "./templates/userinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:119975001255f8bea3ebcb39-42618684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749d1f6ec77fe6ab592c05c85ce41d93f79a396f' => 
    array (
      0 => './templates/userinfo.html',
      1 => 1442365460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119975001255f8bea3ebcb39-42618684',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55f8bea412b4f4_14402676',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f8bea412b4f4_14402676')) {function content_55f8bea412b4f4_14402676($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>积分管理</title>
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
            <li><a href="index.php"><img src="../public/image/admin/panda.png" />宠物管理</a></li>
            <li><a href="userlist.php"><img src="../public/image/admin/people.png" />会员管理</a></li>
            <li><a href="score.php"><img src="../public/image/admin/integral.png" />积分系统</a></li>
            <li><a href="logout.php"><img src="../public/image/admin/exit.png" />退出系统</a></li>
        </ul>
    </div>
    <div class="rightpart">
        <div class="toppart">
            <p>您当前的位置:积分系统<span>2015年09月14日</span></p>
        </div>
        <div class="contentpart">
            <p class="title">积分系统</p>
            <div class="contentbox">
                <table style="width: 50%; margin: auto; background: #eeeeee;  text-align: center; line-height: 40px;">
                    <tr>
                        <td style="background: #fff; width: 50%;">openid</td>
                        <td style="background: #fff; width: 50%;">xxxxxxxxxxxxxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td style="background: #fff; width: 50%;">昵称</td>
                        <td style="background: #fff; width: 50%;">XXXXX</td>
                    </tr>
                    <tr>
                        <td style="background: #fff; width: 50%;">等级</td>
                        <td style="background: #fff; width: 50%;">30</td>
                    </tr>
                    <tr>
                        <td style="background: #fff; width: 50%;">积分</td>
                        <td style="background: #fff; width: 50%;">30</td>
                    </tr>
                    <tr>
                        <td style="background: #fff; width: 50%;">关注量</td>
                        <td style="background: #fff; width: 50%;">2000</td>
                    </tr>
                    <tr>
                        <td style="background: #fff; width: 50%;" rowspan="3">分销商</td>
                        <td style="background: #fff; width: 50%;">一级分销商<span style="padding:0 10px">8</span>个</td>
                    </tr>
                    <tr>
                        <td style="background: #fff; width: 50%;">二级分销商<span style="padding:0 10px">8</span>个</td>
                    </tr>
                    <tr>
                        <td style="background: #fff; width: 50%;">三级分销商<span style="padding:0 10px">8</span>个</td>
                    </tr>
                    <tr>
                        <td style="background: #fff; width: 50%;" rowspan="2">提现</td>
                        <td style="background: #fff; width: 50%;">已提现金额<span style="padding:0 10px">20</span>元</td>
                    </tr>
                    <tr>
                        <td style="background: #fff; width: 50%;">可提现金额<span style="padding:0 10px">20</span>元</td>
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
