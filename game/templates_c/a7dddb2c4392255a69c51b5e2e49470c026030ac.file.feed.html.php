<?php /* Smarty version Smarty-3.1.20, created on 2015-09-08 14:26:19
         compiled from "./templates/feed.html" */ ?>
<?php /*%%SmartyHeaderCode:36052192855ee784f49dec3-82191185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7dddb2c4392255a69c51b5e2e49470c026030ac' => 
    array (
      0 => './templates/feed.html',
      1 => 1441693577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36052192855ee784f49dec3-82191185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55ee784f5f3b97_01810858',
  'variables' => 
  array (
    'signPackage' => 0,
    'pat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ee784f5f3b97_01810858')) {function content_55ee784f5f3b97_01810858($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no,maximum-scale=1,initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="../public/css/index.css"/>
    <script src="../public/js/jquery-1.11.2.js"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <title>喂养宠物</title>
    <script>
        wx.config({
            debug: false,
            appId: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['appId'];?>
',
            timestamp: <?php echo $_smarty_tpl->tpl_vars['signPackage']->value['timestamp'];?>
,
            nonceStr: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['nonceStr'];?>
',
            signature: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['signature'];?>
',
            jsApiList: ['checkJsApi',
            'onMenuShareAppMessage',
            'onMenuShareTimeline']
        });
        wx.ready(function () {
            // 在这里调用 API
            wx.onMenuShareAppMessage({
                title: "帮我养宠物啦",
                desc: "帮我养宠物啦",
                link: "",
                imgUrl: 'http://www.ropaid.com/weixin/zhuli/public/image/ver2/smallimg.jpg',
                type: 'link',
                dataUrl: '',
                success: function () {
                    //分享成功后的回调函数
                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数
                }
            });
            wx.onMenuShareTimeline({
                title: '帮我养宠物啦', // 分享标题
                link: '', // 分享链接
                imgUrl: 'http://www.ropaid.com/weixin/zhuli/public/image/ver2/smallimg.jpg', // 分享图标
                success: function () {
                    // 用户确认分享后执行的回调函数
                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数
                }
            });
        });

    </script>
</head>
<body>
    <p>这里是喂养宠物页面</p>
    <p>宠物信息:</p>
    <p>宠物名:<?php echo $_smarty_tpl->tpl_vars['pat']->value->patName;?>
</p>
    <p>宠物等级:<?php echo $_smarty_tpl->tpl_vars['pat']->value->patLevel;?>
</p>
    <p>宠物积分:<?php echo $_smarty_tpl->tpl_vars['pat']->value->patScore;?>
</p>
    <a href="javascript:void(0)">喂养</a>
</body>
</html><?php }} ?>
