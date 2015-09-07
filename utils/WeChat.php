<?php
class WeChat{
    var $appid;
    var $appsecret;
    var $basepath;
    /**
     * WeChat constructor.
     * @param string $OauthUrl
     */
    public function __construct($appid,$appsecret,$basepath){
        $this->appid = $appid;
        $this->appsecret=$appsecret;
        $this->basepath=$basepath;
    }

    public function Oauth_base($url,$state=''){
        $url=urlencode($url);
        $oauthUrl='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->appid.'&redirect_uri='.$url.'&response_type=code&scope=snsapi_base&state='.$state.'#wechat_redirect';
        jump($oauthUrl);
    }
    public function Oauth_userinfo($url,$state=''){
        $url=urlencode($url);
        $oauthUrl='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->appid.'&redirect_uri='.$url.'&response_type=code&scope=snsapi_userinfo&state='.$state.'#wechat_redirect';
        jump($oauthUrl);
    }

    public function Oauth_check($code){
        $url='https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$this->appid.'&secret='.$this->appsecret.'&code='.$code.'&grant_type=authorization_code';
        $json=file_get_contents($url);
        $res=json_decode($json,true);
        if(isset($res['openid'])){
            return $openid;
        }else{
            return false;
        }
    }

    public function getAccessToken(){
        $data = json_decode(file_get_contents($this->basepath."global/access_token.json"));

        if ($data->expire_time < time()) {
            // 如果是企业号用以下URL获取access_token
            // $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=$this->appId&corpsecret=$this->appSecret";
            $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$this->appid.'&secret='.$this->appsecret;
            $res = json_decode($this->httpGet($url));
            $access_token = $res->access_token;
            if ($access_token) {
                $data->expire_time = time() + 7000;
                $data->access_token = $access_token;
                $fp = fopen($this->basepath."global/access_token.json", "w");
                fwrite($fp, json_encode($data));
                fclose($fp);
            }
        } else {
            $access_token = $data->access_token;
        }
        return $access_token;
    }

    public function getUserInfo($openid){
        $accesstoken=$this->getAccessToken();
        $json=file_get_contents('https://api.weixin.qq.com/cgi-bin/user/info?access_token='.$accesstoken.'&openid='.$openid.'&lang=zh_CN');
        $res=json_decode($json,true);
        return $res;
    }
    public function httpGet($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 500);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_URL, $url);

        $res = curl_exec($curl);
        curl_close($curl);

        return $res;
    }
}