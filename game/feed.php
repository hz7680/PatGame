<?php
    require_once '../common/set_inc.php';
    if(isset($_GET['openid'])){
        if(!isset($_SESSION['openid'])){
            //没有session,没有通过认证
            if(isset($_GET['code'])){
                //有code,已经完成跳转
                $openid=$weChat->Oauth_check($_GET['code']);
                if($openid){
                    $res=$weChat->getUserInfo($openid);
                    $_SESSION['openid']=$openid;
                    if($res['subscribe']==1){
                        //已关注
                        $smarty->assign('attentionStatue',true);
                    }else{
                        //未关注
                        //记录当前用户通过谁的宠物关注
                        $patService=new PatService();
                        $patService->setDownOpenid($openid,$_GET['openid']);
//                        jump(ATTENTION_PAGE);
//                        exit();
                        $smarty->assign('attentionStatue',false);
                    }
                }
            }else{
                //没有跳转,需要跳转去认证页面
                $url='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
                $weChat->Oauth_base($url);
                exit();
            }
        }
        //通过认证且已经关注公众号
        if(isset($_SESSION['openid'])){
            if($_SESSION['openid']==$_GET['openid']){
                //访问的是自己分享的喂养页面,直接跳转到我的宠物页面
                jump(MY_PAT_URL);
                exit();
            }
            $pat=$patService->getPatInfoByOpenid($_GET['openid']);
            $smarty->assign('pat',$pat);
            $smarty->display('feed.html');
        }
    }