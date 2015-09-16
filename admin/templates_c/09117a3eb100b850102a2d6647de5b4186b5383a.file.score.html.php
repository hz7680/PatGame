<?php /* Smarty version Smarty-3.1.20, created on 2015-09-16 10:57:39
         compiled from "./templates/score.html" */ ?>
<?php /*%%SmartyHeaderCode:19497302655f8ce73966e29-17663138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09117a3eb100b850102a2d6647de5b4186b5383a' => 
    array (
      0 => './templates/score.html',
      1 => 1442372257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19497302655f8ce73966e29-17663138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55f8ce739d69d8_18446922',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f8ce739d69d8_18446922')) {function content_55f8ce739d69d8_18446922($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<input type="hidden" id="pagetag" value="scoreManage"/>
<div class="center">
    <?php echo $_smarty_tpl->getSubTemplate ("left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="rightpart">
        <div class="toppart">
            <p>您当前的位置:积分系统<span>2015年09月14日</span></p>
        </div>
        <div class="contentpart">
            <p class="title">积分系统</p>
            <div class="searchbox">
                <ul>
                    <li><a href="">前一日</a></li>
                    <li><input type="text" class="txtbox" value="2015"/> 年</li>
                    <li><input type="text" class="txtbox"/> 月</li>
                    <li><input type="text" class="txtbox"/> 日</li>
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
                <form action="score.php" method="post">
                <input type="hidden" name="op" value="percent"/>
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
                        <td style="background: #fff"><input type="text" name="childpercent" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['childpercent']*100;?>
" style="width: 90px; text-align: center"/>%</td>
                        <td style="background: #fff"><input type="text" name="grandchildpercent" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['grandchildpercent']*100;?>
" style="width: 90px; text-align: center"/>%</td>
                        <td style="background: #fff"><input type="text" name="greatgrandchildpercent" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['greatgrandchildpercent']*100;?>
" style="width: 90px; text-align: center"/>%</td>
                        <td style="background: #fff"><input type="submit" name="submit" value="修改"/></td>
                    </tr>
                </table>
                </form>
                <form action="score.php" method="post">
                <input type="hidden" name="op" value="rate"/>
                <table style="width: 80%; margin: auto; margin-top: 50px; background: #eeeeee; line-height: 40px;text-align: center; margin-bottom: 57px; ">
                    <tr>
                        <td>现金兑换比例</td>
                        <td style="background: #fff">1 元 = <input type="text" name="rate" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['rate'];?>
" style="width: 50px; text-align: center"/> 分</td>
                        <td style="background: #fff; width: 30%"><input type="submit" name="submit" value="修改"/></td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
