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

    public function getChildren($openid){
        return $this->patDao->getChildren($openid);
    }

    public function getGrandChildren($children){
        return $this->patDao->getGrandChildren($children);
    }

    public function getRelationTree($openid){
        $children=$this->getChildren($openid);
        $grandChildren=$this->getGrandChildren($children);
        return count($children)+count($grandChildren);
    }

    public function setDownMoneyLog($openid,$money,$prepay_id){
        $this->patDao->setDownMoneyLog($openid,$money,$prepay_id);
    }

    public function getGoldCoin($openid){
        $children=$this->getChildren($openid);
        $grandChildren=$this->getGrandChildren($children);
        $childrenMoneyLog=$this->patDao->getMoneyLogsByOpenidArray($children);
        $grandChildrenMoneyLog=$this->patDao->getMoneyLogsByOpenidArray($grandChildren);
        $childrenMoney=0;
        $grandChildrenMoney=0;
        for($i=0;$i<count($childrenMoneyLog);$i++){
            $childrenMoney+=$childrenMoneyLog[$i]['money'];
        }
        for($i=0;$i<count($grandChildrenMoneyLog);$i++){
            $grandChildrenMoney+=$grandChildrenMoneyLog[$i]['money'];
        }
        $settings=$this->getSettings();
        return ($childrenMoney*$settings['childpercent']+$grandChildrenMoney*$settings['grandchildpercent'])*$settings['rate'];
    }

    public function getSettings(){
        $temp=$this->patDao->getSettings();
        $res=array();
        foreach($temp as $row){
            $res[$row['key']]=$row['word'];
        }
        return $res;
    }
}