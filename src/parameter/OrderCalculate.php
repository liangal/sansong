<?php

namespace Liangal\Sansong\parameter;
class OrderCalculate extends Validate
{
    use JsonSerialTrait;

    protected array $necessary = [
        'cityName' => '城市名称不能为空',
    ];

    public string $cityName;
    public int $appointType = 0; //0立即单，1预约单
    public string $appointmentDate = '';// 预约时间:非必填项, yyyy-MM-dd HH:mm格式(例如：2020-02-02 22:00）,指的是预约取件时间,只支持一个小时以后两天以内
    public string $storeName; //三方店铺名:非必填项, 传storeName时，将以该值作为店铺名称（包括：闪送员端、商家端、商家端账单）；不传storeName时，将取storeId对应的店铺名称（订单归属仍以storeId为准，不传则为默认店铺）
    public int $travelWay = 0; //指定交通工具:非必填项,通过查询城市可指定交通方式接口获取对应travelWay字段，指定交通工具会产生交通费，默认为0：不限交通方式；
    public int $deliveryType = 1; //非必填项 1.帮我送 2.帮我取 ；默认为1
    public int $pickupPwd = 0; //取件码开关:非必填项，0:关闭取件码，1:开启取件码，默认值为0。
    public int $deliveryPwd = 0; //收件码开关:非必填项，0:关闭收件码，1:开启收件码码，默认值为0。
    public int $lbsType = 0; //坐标类型:非必填项， 0：百度坐标系，1：国测局标准坐标系，非必填；默认为0
    public OrderCalculateSender $sender;
    public orderCalculateReceiverList $receiverList;


}