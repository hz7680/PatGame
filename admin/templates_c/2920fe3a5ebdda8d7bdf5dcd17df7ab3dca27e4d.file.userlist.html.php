<?php /* Smarty version Smarty-3.1.20, created on 2015-09-16 17:15:08
         compiled from "./templates/userlist.html" */ ?>
<?php /*%%SmartyHeaderCode:26664761155f68294e3ce35-04456721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2920fe3a5ebdda8d7bdf5dcd17df7ab3dca27e4d' => 
    array (
      0 => './templates/userlist.html',
      1 => 1442394906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26664761155f68294e3ce35-04456721',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55f68294efe816_85092420',
  'variables' => 
  array (
    'data' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f68294efe816_85092420')) {function content_55f68294efe816_85092420($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<input type="hidden" id="pagetag" value="userManage"/>
<div class="center">
    <?php echo $_smarty_tpl->getSubTemplate ("left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="rightpart">
        <div class="toppart">
            <p>您当前的位置:用户管理<span>2015年09月14日</span></p>
        </div>
        <div class="contentpart">
            <p class="title">用户管理</p>
            <div class="searchbox">
                <form action="userlist.php" method="get">
                <ul>
                    <li>会员积分大于 <input type="text" class="txtbox" name="minScore" id="maxScore"/></li>
                    <li>会员积分小于 <input type="text" class="txtbox" name="maxScore" id="minScore"/> </li>
                    <li>会员名称 <input type="text" class="txtbox" name="username" style="width: 100px;"/> </li>
                    <li><input type="submit" value="搜索" class="submit"/></li>
                    <li><a href="javascript:void(0)" onclick="refresh()" class="refresh">刷新</a></li>
                </ul>
                </form>
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
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <tr>
                            <td style="background: #f8f8f8; width: 10%; text-align: left; text-indent: 20px"><input type="checkbox"/> 1</td>
                            <td style="background: #f8f8f8; width: 15%;"><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
                            <td style="background: #f8f8f8; width: 15%; color: #ff0000">√</td>
                            <td style="background: #f8f8f8; width: 15%;">30</td>
                            <td style="background: #f8f8f8; width: 15%;">30</td>
                            <td style="background: #f8f8f8; width: 15%;">30</td>
                            <td style="background: #f8f8f8; width: 15%;">
                                <input type="button" value="查看" onclick="viewUserInfo('<?php echo $_smarty_tpl->tpl_vars['row']->value['userid'];?>
')" style="background: #3eabe7; border: none; padding: 2px 5px; color: #fff"/>
                                <input type="button" value="删除" style="background: #3eabe7; border: none; padding: 2px 5px; color: #fff"></td>
                        </tr>
                    <?php } ?>
                </table>
                <div class="clear"></div>
                <div class="pagebox">
                    <ul>
                        <li>共<span><?php echo $_smarty_tpl->tpl_vars['data']->value['totalcount'];?>
</span>条纪录,<?php echo $_smarty_tpl->tpl_vars['data']->value['pagenum'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['totalpagecount'];?>
页</li>
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
<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
