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

    public function setDownUserName($openid,$username){
        $this->patDao->setDownUserName($openid,$username);
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
        $greatGrandChildren=$this->getGrandChildren($grandChildren);
        return count($children)+count($grandChildren)+count($greatGrandChildren);
    }

    public function setDownMoneyLog($openid,$money,$prepay_id){
        $this->patDao->setDownMoneyLog($openid,$money,$prepay_id);
    }

    public function getGoldCoin($openid){
        $children=$this->getChildren($openid);
        $grandChildren=$this->getGrandChildren($children);
        $greatGrandChildren=$this->getGrandChildren($children);
        $childrenMoneyLog=$this->patDao->getMoneyLogsByOpenidArray($children);
        $grandChildrenMoneyLog=$this->patDao->getMoneyLogsByOpenidArray($grandChildren);
        $greatGrandChildrenMoneyLog=$this->patDao->getMoneyLogsByOpenidArray($greatGrandChildren);
        $childrenMoney=0;
        $grandChildrenMoney=0;
        $greatGrandChildrenMoney=0;
        for($i=0;$i<count($childrenMoneyLog);$i++){
            $childrenMoney+=$childrenMoneyLog[$i]['money'];
        }
        for($i=0;$i<count($grandChildrenMoneyLog);$i++){
            $grandChildrenMoney+=$grandChildrenMoneyLog[$i]['money'];
        }
        for($i=0;$i<count($greatGrandChildrenMoneyLog);$i++){
            $greatGrandChildrenMoney+=$greatGrandChildrenMoneyLog[$i]['money'];
        }
        $settings=$this->getSettings();
        return ($childrenMoney*$settings['childpercent']+$grandChildrenMoney*$settings['grandchildpercent']+$greatGrandChildrenMoney*$settings['greategrandchildpercent'])*$settings['rate'];
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