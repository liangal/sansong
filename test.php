<?php
require_once 'vendor/autoload.php';

$config = new Liangal\Sansong\Api([
    'shopID' => '20000000000005668',
    'clientID' => 'ssewwqzbrZlnOpumz',
    'appSecret' => 'vJL1w2NzskCU9yqRaO5oFvKXgu7DRhaP',
]);
////订单计费
////var_dump($config->openCitiesLists([]));
//$params = [ //基础信息
//    'cityName' => '海口市' //城市
//];
//$senderData = [ //发货信息
//    'fromAddress' => '金都花园',
//    'fromSenderName' => '寄件人姓名',
//    'fromMobile' => '寄件联系人',
//    'fromLatitude' => '20.011892',
//    'fromLongitude' => '110.306812',
//];
//$receiverListData = [ //收货信息
//    'orderNo' => '112233445566',
//    'toAddress' => '万花坊',
//    'toLatitude' => '19.999570',
//    'toLongitude' => '110.291088',
//    'toReceiverName' => '收件人姓名',
//    'toMobile' => '收件联系方式',
//    'goodType' => 7,
//    'weight' => 1,
////    'orderingSourceNo' => 'abc123456'//流水号
//];
//$data = $config->orderCalculate($params,$senderData,$receiverListData);
//
////下单
//if($data['status'] == 200){
//
//    $result = $config->orderPlace($data['data']['orderNumber']);
//    var_dump($result);
//}
$result = $config->courierInfo('TDH2024092640208470','112233445566');
var_dump($result);