<?php
    require_once '../common/set_inc.php';
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
    if(isset($_SESSION['openid'])){
        $pat=$patService->getPatInfoByOpenid($_SESSION['openid']);
        if(!empty($pat)){
            //已经有宠物了
            jump(MY_PAT_URL);
            exit();
        }
        $wxpaysdk=new WXPaySDK(APPID,$signPackage['timestamp'],$signPackage['nonceStr']);
        $paySignPackage=$wxpaysdk->getSignPackage('MD5');
        $smarty->assign('paySignPackage',$paySignPackage);
        $smarty->display('buyPat.html');
    }