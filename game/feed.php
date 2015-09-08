<?php
    require_once '../common/set_inc.php';

    if(isset($_GET['openid'])){
        if(!isset($_SESSION['openid'])){
            //没有session,没有通过认证
            $weChat=new WeChat(APPID,APPSECRET,BASEPATH);
            if(isset($_GET['code'])){
                //有code,已经完成跳转
                $openid=$weChat->Oauth_check($_GET['code']);
                if($openid){
                    $res=$weChat->getUserInfo($openid);
                    if($res['subscribe']==1){
                        //已关注
                        $_SESSION['openid']=$openid;
                    }else{
                        //未关注
                        //记录当前用户通过谁的宠物关注
                        $patService=new PatService();
                        $patService->setDownOpenid($openid,$_GET['openid']);
                        jump(ATTENTION_PAGE);
                        exit();
                    }
                }
            }else{
                //没有跳转,需要跳转去认证页面
                $url='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
                $weChat->Oauth_base($url);
                exit();
            }
        }
    }
    //通过认证且已经关注公众号
    if(isset($_SESSION['openid'])){

    }