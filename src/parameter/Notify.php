<?php

namespace Liangal\Sansong\parameter;

class Notify extends Validate
{
    use JsonSerialTrait;
    /**
     * 闪送订单号
     * @var string
     */
    public string $issOrderNo;
    /**
     * 第三方平台流水号
     * @var string
     */
    public string $orderNo;
    /**
     * 订单状态
     * @var int
     */
    public int $status;
    /**
     * 订单状态描述
     * @var string
     */
    public string $statusDesc;
    /**
     * 订单子状态
     * @var int
     */
    public int $subStatus = 0;
    /**
     * 订单子状态描述
     * @var int
     */
    public string $subStatusDesc = '';
    /**
     * 取件密码
     * @var String
     */
    public String $pickupPassword = '';
    /**
     * 收件密码
     * @var string
     */
    public String $deliveryPassword = '';
    /**
     * 扣款金额，单位：分
     * @var int
     */
    public int $deductAmount = 0;
    /**
     * 取消发起人
     * @var int
     */
    public int $abortType = 0;
    /**
     * 取消责任人
     * @var int
     */
    public int $punishType = 0;
    /**
     * 取消原因
     * @var string
     */
    public string $abortReason = '';
    /**
     * @var Courier
     */
    public Courier $courier;
    /**
     * 送回费
     * @var int
     */
    public int $sendBackFee ;
    /**
     * 退款金额
     * @var int
     */
    public int $drawback ;
}