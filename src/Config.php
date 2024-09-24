<?php

namespace Liangal\Sansong;

trait Config
{
    //Shop ID
    protected $shopID;
    //Client ID
    protected $clientID;
    //App_secret
    protected $appSecret;

    protected $redirectUri;

    protected $accessToken;

    public function __construct(array $data){
        foreach ($data as $key => $value) {
            if (property_exists($this, $key) && !is_null($value)) {
                $this->{$key} = $value;
            }
        }
    }
    //获取Shop ID
    public function getShopID(){
        return $this->shopID;
    }
    //获取Client ID
    public function getClientID(){
        return $this->clientID;
    }
    //获取App_secret
    public function getAppSecret(){
        return $this->appSecret;
    }
    //获取accessToken
    public function getAccessToken(){
        return $this->accessToken;
    }
    //获取跳转地址
    public function getRedirectUri(){
        return $this->redirectUri;
    }
    //获取毫秒
    public function getTimestamp(){
        $microtime = microtime(true); // 获取当前时间戳
        list($seconds, $microseconds) = explode('.', $microtime); // 分割秒和微秒
        $milliseconds = $seconds * 1000; // 微秒转毫秒
        return strval($milliseconds);
    }
    //获取accessToken
    public function getSign($params = []){
        return strtoupper(md5($this->appSecret.'clientId'.$this->getClientID().($params?'data'.json_encode($params):null).'shopId'.$this->getShopID().'timestamp'.$this->getTimestamp()));
    }
}