<?php
class WXPaySDK{
    private $appid;

    public function __construct($appid){
        $this->appid=$appid;
    }

    public function getSignPackage($signType='MD5') {
        $res=array();
        $timestamp=time();
        $nonceStr=$this->createNonceStr();
        $package=$this->createPackage();
        $res['timestamp']=$timestamp;
        $res['nonceStr']=$nonceStr;
        $res['package']='prepay_id='.$package;
        $res['signType']=$signType;
        $res['paySign']=$this->createPaySign($signType,$nonceStr,$package,$timestamp);
        return $res;
    }

    private function createNonceStr($length = 16) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }
    private function createPackage(){
        return guid();
    }
    private function createPaySign($signType,$nonceStr,$package,$timestamp){
        $str='appId='.$this->appid.'&nonceStr='.$nonceStr.'&package=prepay_id='.$package.'&signType='.$signType;
        if($signType=='MD5'){
            $str.='&timeStamp='.$timestamp;
            return md5($str);
        }elseif($signType=='SHA1'){
            $str.='&timestamp='.$timestamp;
            return sha1($str);
        }
    }
}