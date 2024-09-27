<?php

namespace Liangal\Sansong\parameter;

/**
 * 预计送达时间文案,闪送员未接单或者订单终态
 */
class DeliveryProcessTrail extends Validate
{
    use JsonSerialTrait;

    /**
     * 闪送员位置所处的当前时间
     * @var string
     */
    public string $datetime;
    /**
     * 闪送员位置纬度（百度坐标系）
     * @var string
     */
    public string $latitude;
    /**
     * 闪送员位置经度（百度坐标系）
     * @var string
     */
    public string $longitude;
}