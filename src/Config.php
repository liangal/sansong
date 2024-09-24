<?php

namespace Liangal\Sansong;

trait Config
{
    /**
     * 请求链接开关  1-测试，2-生产
     * @var int
     */
    protected int $urlType = 1;
    //Shop ID
    protected string $shopID;
    //Client ID
    protected string $clientID;
    //App_secret
    protected string $appSecret;

    protected string $redirectUri;

    protected string $accessToken;

    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key) && !is_null($value)) {
                $this->{$key} = $value;
            }
        }
    }

    //获取Shop ID
    public function getShopID(): string
    {
        return $this->shopID;
    }

    //获取Client ID
    public function getClientID(): string
    {
        return $this->clientID;
    }

    //获取App_secret
    public function getAppSecret(): string
    {
        return $this->appSecret;
    }

    //获取accessToken
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    //获取跳转地址
    public function getRedirectUri(): string
    {
        return $this->redirectUri;
    }

    //获取请求链接
    public function getUrl(): string
    {
        return $this->urlType == 2 ? 'https://open.ishansong.com' : 'http://open.s.bingex.com';
    }

    //获取毫秒
    public function getTimestamp()
    {
        $microtime = microtime(true); // 获取当前时间戳
        list($seconds, $microseconds) = explode('.', $microtime); // 分割秒和微秒
        $milliseconds = $seconds * 1000; // 微秒转毫秒
        return strval($milliseconds);
    }

    //获取accessToken
    public function getSign($params = [])
    {
        return strtoupper(md5($this->appSecret . 'clientId' . $this->getClientID() . ($params ? 'data' . json_encode($params) : null) . 'shopId' . $this->getShopID() . 'timestamp' . $this->getTimestamp()));
    }
}