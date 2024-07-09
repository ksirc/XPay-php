<?php
    require_once('Xpay.php');

    $payId = $_POST['payId'];
    $xpay = new Xpay();
    $result = $xpay->check_order_status($payId);
//检查订单状态
if($result != null){
    $success = true;
    $message = "检查订单状态成功！";
}else{
    $success = false;
    $message = "检查订单状态失败！";
}
//返回json格式的数据
$data = [
    'success' => $success,
    'message' => $message,
    'result' => $result
];
echo json_encode($data);
