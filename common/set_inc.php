<?php
    header("Content-type: text/html; charset=utf-8");
    date_default_timezone_set("Asia/Shanghai");
    define('BASEPATH',str_replace('\\','/',realpath(dirname(__FILE__).'/'))."/../");
    define('BUY_PAT_URL','');
    define('MY_PAT_URL','myPat.php');
    define('APPID','');
    define('APPSECRET','');
    define('ATTENTION_PAGE','');

    require_once '../common/smarty.php';
    require_once '../common/session.php';
    require_once '../common/sqlhelper.php';
    require_once '../common/func.php';
    require_once '../service/PatService.php';
    require_once '../model/Pat.class.php';
    require_once '../utils/WeChat.php';
    require_once '../dao/PatDao.php';