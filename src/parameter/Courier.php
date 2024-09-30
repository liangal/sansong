<?php

namespace Liangal\Sansong\parameter;

class Courier extends Validate
{
    use JsonSerialTrait;
    protected array $necessary = [];

    /**
     * 闪送员位置纬度（百度坐标系）
     * @var string
     */
    public string $latitude = '';
    /**
     * 闪送员位置经度（百度坐标系）
     * @var string
     */
    public string $longitude = '';
    /**
     * 闪送员姓名
     * @var string
     */
    public string $name;
    /**
     * 闪送员手机号
     * @var string
     */
    public string $mobile;
    /**
     * 闪送员位置所处的当前时间
     * @var string
     */
    public string $time;
    /**
     * 闪送员服务总次数
     * @var int
     */
    public int $orderCount = 0;
    /**
     * 闪送员头像
     * @var string
     */
    public string $headIcon = '';
    /**
     * 骑手id
     * @var string
     */
    public string $id = '';
    /**
     * 配送过程轨迹列表
     * @var array
     */
    public array $deliveryProcessTrail = [];
    /**
     * 预计送达时间文案,闪送员未接单或者订单终态，该值为空
     * @var string
     */
    public string $estimateDeliveryTimeTip = '';
}