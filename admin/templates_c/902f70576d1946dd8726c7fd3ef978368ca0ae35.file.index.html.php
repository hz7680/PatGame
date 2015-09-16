<?php /* Smarty version Smarty-3.1.20, created on 2015-09-16 10:28:58
         compiled from "./templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:154828500155f62703bb2dc1-16322011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '902f70576d1946dd8726c7fd3ef978368ca0ae35' => 
    array (
      0 => './templates/index.html',
      1 => 1442370534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154828500155f62703bb2dc1-16322011',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55f62703be4663_64128839',
  'variables' => 
  array (
    'rule' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f62703be4663_64128839')) {function content_55f62703be4663_64128839($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <input type="hidden" id="pagetag" value="patManage"/>
    <div class="center">
        <?php echo $_smarty_tpl->getSubTemplate ("left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    <form action="index.php" method="post">
                    <div id="ruleBox">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rule']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <div>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" class="input1" name="rule[]" />
                                <a href="javascript:void(0)" onclick="removeRule(this)"></a>
                            </div>
                        <?php } ?>
                    </div>
                    <a href="javascript:void(0)" onclick="addRule()" style="width: 60%; display: block; margin: auto; height: 30px; margin-top: 15px; padding-top: 10px; background: transparent; border: 1px solid #dedede; vertical-align: middle"><img src="../public/image/admin/add.png" style="margin: auto" /></a>
                    <input type="submit" value="确认修改" name="submit" style="width: 40%; display: block; height: 40px; color: #fff; background: #3eabe7; border: none; margin: auto; margin-top: 35px; margin-bottom: 31px"/>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
