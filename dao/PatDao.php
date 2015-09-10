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

    public function setDownUser($openid){
        $sql="select count(*) from t_user where openid='$openid'";
        if($this->sqlhelper->excuteScalar($sql)<1){
            $sql="insert into t_user (openid) values('$openid')";
            $this->sqlhelper->excuteNonQuery($sql);
        }
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
}