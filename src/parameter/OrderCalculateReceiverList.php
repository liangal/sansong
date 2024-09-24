<?php

namespace Liangal\Sansong\parameter;
class OrderCalculateReceiverList extends Validate
{
    use JsonSerialTrait;
    protected array $necessary = [
        'orderNo' => '平台流水号不能为空',
        'toAddress' => '收件地址不能为空',
        'toLatitude' => '收件纬度不能为空',
        'toLongitude' => '收件经度不能为空',
        'toReceiverName' => '收件人姓名不能为空',
        'toMobile' => '收件联系方式不能为空',
        'goodType' => '物品类型不能为空',
        'weight' => '物品重量不能为空',
    ];
    public string $orderNo;//第三方平台流水号:必填
    public string $toAddress;//收件地址:必填
    public string $toLatitude;//收件纬度:必填
    public string $toLongitude;//收件经度:必填
    public string $toReceiverName;//收件人姓名:必填
    public string $toMobile;//收件联系人:必填
    public int $goodType;//物品类型:必填 1-文件,3-数码,5-蛋糕,6-餐饮,7-鲜花,9-汽配,10-其他,12-母婴,13-医药健康,15-商超,16-水果
    public int $weight;//物品重量:必填  传向上取整整数，单位为kg，例如：6.7kg传7；最大重量不超过999kg

    //非必填
    public string $toAddressDetail = '';//收件详细地址:非必填
    public string $remarks = ''	;//备注:非必填
    public string $additionFee = '';//快速通道费:非必填 单位为分，能被100整除，最大值为10000，用于促进闪送员接单
    public int $orderingSourceType = 0;//物品来源:非必填 1-闪送,2-百度外卖,3-饿了么外卖,4-美团外卖,5-其他平台,6-京东到家,7-达达,8-饿百
    public string $orderingSourceNo = '';//物品来源流水号:非必填 orderingSourceType有值时必填
    public string $goodsSizeId  = '';//蛋糕尺寸:非必填 当qualityDelivery为1，并且goodType为5时，必传。详见下方蛋糕尺寸枚举
    public string $goodsPrice  = '';//投保金额:非必填
    public string $qualityDelivery  = '';//尊享送服务:非必填
    public int $insuranceFlag = 0;//是否投保:非必填
}