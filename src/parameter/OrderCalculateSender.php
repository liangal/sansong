<?php

namespace Liangal\Sansong\parameter;

class OrderCalculateSender extends Validate
{
    use JsonSerialTrait;
    protected array $necessary = [
        'fromAddress' => '寄件地址不能为空',
        'fromSenderName' => '寄件人姓名不能为空',
        'fromMobile' => '寄件联系方式',
        'fromLatitude' => '寄件纬度不能为空',
        'fromLongitude' => '寄件经度不能为空',
    ];
    public string $fromAddress;//必填,寄件地址
    public string $fromAddressDetail = '';//寄件详细地址:非必填
    public string $fromSenderName;//寄件人姓名:必填
    public string $fromMobile;//寄件联系人 :必填
    public string $fromLatitude;//寄件纬度:必填
    public string $fromLongitude;//寄件经度:必填
}