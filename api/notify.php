<?php
require_once('Xpay.php');
$xpay = new Xpay();

//验证token
if (isset($_GET['pay_id']) && isset($_GET['state']) && isset($_GET['token'])) {
    //验证token
    $token = $_GET['token'];
    if ($token != $xpay->getToken()) {
        echo "token验证失败";
        exit;
    }
    //获取Get参数
    $pay_id = $_GET['pay_id'];
    $state_id = $_GET['state'];

    if ($state_id == "del") {
        //删除订单
        $xpay->delete_order($pay_id);
        echo "订单已删除";
    } else {
        //更新订单状态
        $xpay->update_order_state($pay_id, $state_id);
        echo "订单状态已更新";
    }
} else {
    //跳转404页面
    header("/404.html");
    exit;
}