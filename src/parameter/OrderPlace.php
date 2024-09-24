<?php

namespace Liangal\Sansong\parameter;

/**
 * 订单提交类
 */
class OrderPlace extends Validate
{
    use JsonSerialTrait;

    public array $necessary = [
        'issOrderNo' => '订单号不能为空'
    ];

    public string $issOrderNo; //闪送订单号
}