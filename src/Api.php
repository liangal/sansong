<?php

namespace Liangal\Sansong;

use Exception;
use Liangal\Sansong\parameter\OrderCalculate;
use Liangal\Sansong\parameter\OrderCalculateReceiverList;
use Liangal\Sansong\parameter\OrderCalculateSender;
use Liangal\Sansong\parameter\OrderPlace;


class Api extends Request
{
    public function getAuthUrl(): string
    {
        $redirect_uri = urlencode($this->getRedirectUri());
        return $this->getUrl() . "/auth?isAllStoreAuth=true&response_type=code&scope=shop_open_api&state=10583&client_id={$this->getClientID()}&redirect_uri={$redirect_uri}";
    }

    /**
     * 查询城市列表
     * @param $params
     * @return array
     */
    public function openCitiesLists(): array
    {
        return $this->get('/openapi/developer/v5/openCitiesLists');
    }

    /**
     * 订单股价
     * @param array $params 基础信息
     * @param array $senderData 寄送信息
     * @param array $receiverListData 收货信息
     * @return array
     * @throws Exception
     */
    public function orderCalculate(array $params, array $senderData, array $receiverListData): array
    {
        $sender = new OrderCalculateSender();
        $sender->check($senderData);
        $receiverList = new orderCalculateReceiverList();
        $receiverList->check($receiverListData);
        $orderCalculate = new OrderCalculate();
        $orderCalculate->check($params);
        $orderCalculate->sender = $sender;
        $orderCalculate->receiverList = $receiverList;
        $data = $orderCalculate->jsonSerialize();
        return $this->post('/openapi/merchants/v5/orderCalculate', $data);
    }

    /**
     * 订单提交
     * @param string $issOrderNo 订单号
     * @return array
     * @throws Exception
     */
    public function orderPlace(string $issOrderNo): array
    {
        $place = new OrderPlace();
        $place->check(['issOrderNo' => $issOrderNo]);
        return $this->post('/openapi/merchants/v5/orderPlace', $place->jsonSerialize());
    }
}