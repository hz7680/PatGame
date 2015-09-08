<?php
    header("Content-type: text/html; charset=utf-8");
    date_default_timezone_set("Asia/Shanghai");
    define('BASEPATH',str_replace('\\','/',realpath(dirname(__FILE__).'/'))."/../");
    define('BUY_PAT_URL','');
    define('MY_PAT_URL','myPat.php');
    define('APPID','wx595469f693f2cb03');
    define('APPSECRET','3bd0cf38a800782a249ee84967cac924');
    define('TOKEN','hzgenius');
    define('ATTENTION_PAGE','');

    require_once '../common/smarty.php';
    require_once '../common/session.php';
    require_once '../common/sqlhelper.php';
    require_once '../common/func.php';
    require_once '../service/PatService.php';
    require_once '../model/Pat.class.php';
    require_once '../utils/WeChat.php';
    require_once '../utils/jssdk.php';
    require_once '../dao/PatDao.php';

    //微信JSSDK处理
    $jssdk=new JSSDK(APPID,APPSECRET,BASEPATH);
    $signPackage=$jssdk->getSignPackage();
    $smarty->assign('signPackage',$signPackage);

    $weChat=new WeChat(APPID,APPSECRET,BASEPATH);
    $patService=new PatService();