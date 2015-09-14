<?php
    require_once '../common/set_inc.php';
    $_SESSION['openid']='123456';
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
                    //记录用户信息
                    $username=$res['nickname'];
                    $patService->setDownUserName($openid,$username);
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
        $patService->setDownUser($_SESSION['openid']);
        $pat=$patService->getPatInfoByOpenid($_SESSION['openid']);
        if(empty($pat)){
            //pat为null,说明没有宠物,跳转到购买宠物的页面
//            alert('no');
            jump(BUY_PAT_URL);
            exit();
        }else{
            //pat不为null,说明已经有宠物,跳转到个人宠物页面
//            alert('yes');
            jump(MY_PAT_URL);
            exit();
        }
    }