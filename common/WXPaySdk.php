<?php
class WXPaySDK{
    private $appid;
    private $timestamp;
    private $nonceStr;

    public function __construct($appid,$timestamp,$nonceStr){
        $this->appid=$appid;
        $this->timestamp=$timestamp;
        $this->nonceStr=$nonceStr;
    }

    public function getSignPackage($signType='MD5') {
        $res=array();
        $package=$this->createPackage();
        $res['timestamp']=$this->timestamp;
        $res['nonceStr']=$this->nonceStr;
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
        return $this->guid();
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

    private function guid(){
        $res="";
        if (function_exists('com_create_guid')){
            $res=com_create_guid();
        }else{
            mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);// "-"
            $uuid = chr(123)// "{"
                .substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid,12, 4).$hyphen
                .substr($charid,16, 4).$hyphen
                .substr($charid,20,12)
                .chr(125);// "}"
            $res=$uuid;
        }
        return str_replace('}','',str_replace('{','',str_replace('-','',$res)));
    }
}