<?php /* Smarty version Smarty-3.1.20, created on 2015-09-16 17:16:19
         compiled from "./templates/userinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:119975001255f8bea3ebcb39-42618684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749d1f6ec77fe6ab592c05c85ce41d93f79a396f' => 
    array (
      0 => './templates/userinfo.html',
      1 => 1442369111,
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
<?php if ($_valid && !is_callable('content_55f8bea412b4f4_14402676')) {function content_55f8bea412b4f4_14402676($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<input type="hidden" id="pagetag" value="userManage"/>
<div class="center">
    <?php echo $_smarty_tpl->getSubTemplate ("left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
