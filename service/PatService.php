<?php
class PatService{
    var $patDao;
    var $children;
    var $grandChildren;
    var $greatGrandChildren;
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

    public function initClass($openid){
        $children=$this->getChildren($openid);
        $grandChildren=$this->getGrandChildren($children);
        $greatGrandChildren=$this->getGreatGrandChildren($grandChildren);
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
        $res=$this->patDao->getChildren($openid);
        $this->children=$res;
        return $res;
    }

    public function getGrandChildren($children){
        $res=$this->patDao->getGrandChildren($children);
        $this->grandChildren=$res;
        return $res;
    }

    public function getGreatGrandChildren($grandChildren){
        $res=$this->patDao->getGrandChildren($grandChildren);
        $this->greatGrandChildren=$res;
        return $res;
    }

    public function getRelationTree($openid){
        return count($this->children)+count($this->grandChildren)+count($this->greatGrandChildren);
    }

    public function setDownMoneyLog($openid,$money,$prepay_id){
        $this->patDao->setDownMoneyLog($openid,$money,$prepay_id);
    }

    public function getGoldCoin($openid){
        $childrenMoneyLog=$this->patDao->getMoneyLogsByOpenidArray($this->children);
        $grandChildrenMoneyLog=$this->patDao->getMoneyLogsByOpenidArray($this->grandChildren);
        $greatGrandChildrenMoneyLog=$this->patDao->getMoneyLogsByOpenidArray($this->greatGrandChildren);
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

    public function checkUserScore($openid){
        $userinfo=$this->patDao->getUserByOpenid($openid);
        $childrenMoneyLog=$this->patDao->getMoneyLogsByOpenidArray($this->children);
        $grandChildrenMoneyLog=$this->patDao->getMoneyLogsByOpenidArray($this->grandChildren);
        $greatGrandChildrenMoneyLog=$this->patDao->getMoneyLogsByOpenidArray($this->greatGrandChildren);
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
        if(!($userinfo[0]['childdis']==$childrenMoney&&$userinfo[0]['grandchilddis']==$grandChildrenMoney&&$userinfo[0]['greatgrandchilddis']==$greatGrandChildrenMoney)){
            return $this->patDao->updateUserScore($openid,$childrenMoney,$grandChildrenMoney,$greatGrandChildrenMoney);
        }
        return true;
    }

    public function getSettings(){
        $temp=$this->patDao->getSettings();
        $res=array();
        foreach($temp as $row){
            $res[$row['key']]=$row['word'];
        }
        return $res;
    }

    public function setSettings($key,$word){
        return $this->patDao->setSettings($key,$word);
    }

    public function getUserList($pagenum){

    }
}