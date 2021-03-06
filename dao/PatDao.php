<?php
class PatDao{
    var $sqlhelper;
    public function __construct(){
        $this->sqlhelper=new SqlHelper(DBNAME,DBUSER,DBPWD,HOST,CHARSET);
    }

    public function getPatInfoByOpenid($openid){
        $sql="select * from t_pat a inner join t_user b on a.userid=b.userid where b.isdeleted=0 and b.openid='$openid'";
        return $this->sqlhelper->excuteDataArray($sql);
    }

    public function getUserByOpenid($openid){
        $sql="select * from t_user where openid='$openid' and isdeleted=0";
        return $this->sqlhelper->excuteDataArray($sql);
    }

    public function initNewPat($userid,$patName){
        $sql="insert into t_pat(userid,patname) values ($userid,'$patName')";
        return $this->sqlhelper->excuteNonQuery($sql);
    }

    public function setDownOpenid($openid,$belong){
        $sql="select count(*) from t_relation where openid='$openid'";
        if($this->sqlhelper->excuteScalar($sql)>0){
            $sql="update t_relation set belong='$belong' where openid='$openid'";
        }else{
            $sql="insert into t_relation (openid,belong) values('$openid','$belong')";
        }
        return $this->sqlhelper->excuteNonQuery($sql);
    }

    public function setDownUserName($openid,$username){
        if($this->setDownUser($openid)){
            $sql="update t_user set username='$username' where openid='$openid'";
            return $this->sqlhelper->excuteNonQuery($sql);
        }else{
            return false;
        }
    }

    public function setDownUser($openid){
        $sql="select count(*) from t_user where openid='$openid'";
        if($this->sqlhelper->excuteScalar($sql)<1){
            $sql="insert into t_user (openid) values('$openid')";
            return $this->sqlhelper->excuteNonQuery($sql);
        }
        return true;
    }

    public function updateUserScore($openid,$childdis,$grandchilddis,$greatgrandchilddis){
        $sql="update t_user set childdis=$childdis,grandchilddis=$grandchilddis,greatgrandchilddis=$greatgrandchilddis where openid='$openid'";
        return $this->sqlhelper->excuteNonQuery($sql);
    }

    public function getChildren($openid){
        $sql="select * from t_relationtree where superioropenid='$openid'";
        return $this->sqlhelper->excuteDataArray($sql);
    }

    public function getGrandChildren($children){
        $res=array();
        if(empty($children)){
            return $res;
        }
        $str="";
        for($i=0;$i<count($children);$i++){
            if($i!=0) {
                $str .= ",";
            }
            $str.="'".$children[$i]['openid']."'";
        }
        $sql="select * from t_relationtree where superioropenid in($str)";
        return $this->sqlhelper->excuteDataArray($sql);
    }

    public function setDownMoneyLog($openid,$money,$prepay_id){
        $sql="insert into t_moneylog (openid,money,prepay_id) values('$openid','$money','$prepay_id')";
        return $this->sqlhelper->excuteNonQuery($sql);
    }

    public function getMoneyLogsByOpenid($openid){

    }

    public function getMoneyLogsByOpenidArray($arr){
        $res=array();
        if(empty($arr)){
            return $res;
        }
        $str="";
        for($i=0;$i<count($arr);$i++){
            if($i!=0) {
                $str .= ",";
            }
            $str.="'".$arr[$i]['openid']."'";
        }
        $sql="select * from t_moneylog where openid in($str)";
        return $this->sqlhelper->excuteDataArray($sql);
    }

    public function getSettings(){
        $sql="select * from t_settings";
        return $this->sqlhelper->excuteDataArray($sql);
    }

    public function setSettings($key,$word){
        $sql="update t_settings set word='$word' where `key`='$key'";
        return $this->sqlhelper->excuteNonQuery($sql);
    }

    public function getSqlParameters($arr,$settings){
        $require="";
        if(isset($arr['minScore'])&&!empty($arr['minScore'])){
            $require.=" and (childdis*".$settings['childpercent']."+grandchilddis*".$settings['grandchildpercent']."+greatgrandchilddis*".$settings['greatgrandchildpercent'].")>=".$arr['minScore']/$settings['rate'];
        }
        if(isset($arr['maxScore'])&&!empty($arr['maxScore'])){
            $require.=" and (childdis*".$settings['childpercent']."+grandchilddis*".$settings['grandchildpercent']."+greatgrandchilddis*".$settings['grandchildpercent'].")<=".$arr['maxScore']/$settings['rate'];
        }
        if(isset($arr['username'])&&!empty($arr['username'])){
            $require.=" and username like '%".$arr['username']."%'";
        }
        return $require;
    }

    public function getUserListCount($arr,$settings){
        $require=$this->getSqlParameters($arr,$settings);
        $sql="select count(*) from t_user where isdeleted=0 $require";
        return $this->sqlhelper->excuteScalar($sql);
    }

    public function getUserList($arr,$settings,$pagenum,$pagesize){
        $require=$this->getSqlParameters($arr,$settings);
        $sql="select * from t_user where isdeleted=0 $require limit ".($pagenum-1)*$pagesize.",".($pagenum*$pagesize-1);
        return $this->sqlhelper->excuteDataArray($sql);
    }
}