<?php
class PatService{
    var $patDao;
    public function __construct(){
        $this->patDao=new PatDao();
    }

    public function initNewPat($openid,$patName){
        if($this->patDao->setDownUser($openid)){
            $userinfo=$this->patDao->getUserByOpenid($openid);
            $userid=$userinfo[0]['userid'];
            $this->patDao->initNewPat($userid,$patName);
        }else{
            $this->initNewPat($openid,$patName);
        }
    }

    public function getPatInfoByOpenid($openid){
        $res=$this->patDao->getPatInfoByOpenid($openid);
        if(count($res)>0){
            return new Pat($res[0]);
        }else{
            return null;
        }
    }

    public function setDownOpenid($openid,$belong){
        $this->patDao->setDownOpenid($openid,$belong);
    }

    public function setDownUser($openid){
        $this->patDao->setDownUser($openid);
    }
}