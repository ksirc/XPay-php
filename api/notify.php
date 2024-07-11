<?php
require_once('Xpay.php');
$xpay = new Xpay();

//验证token
if (isset($_GET['pay_id']) && isset($_GET['state']) && isset($_GET['token']) && isset($_GET['email'])) {
    //验证token
    $token = $_GET['token'];
    if ($token != $xpay->getToken()) {
        echo "token验证失败";
        exit;
    }
    //获取Get参数
    $pay_id = $_GET['pay_id'];
    $state_id = $_GET['state'];
    $email = $_GET['email'];

    if ($state_id == "del") {
        //删除订单
        $xpay->delete_order($pay_id);
        echo "订单已删除";
    } else {
        //更新订单状态
        $xpay->update_order_state($pay_id, $state_id);
        //发送邮件通知用户
        if ($state_id == "1") {
            $xpay->send_email("订单支付成功", "您的订单已支付成功，请注意查收。\n"."订单号：".$pay_id."\n"."支付金额：".$xpay->get_order_amount($pay_id)."\n"."支付方式：".$xpay->get_order_payment($pay_id)."\n"."支付时间：".$xpay->get_order_time($pay_id)."\n"."支付状态：".$xpay->get_order_state($pay_id)."\n"."支付邮箱：".$email);
        }else {
            $xpay->send_email("订单支付失败", "您的订单支付失败，请重新发起支付。\n"."订单号：".$pay_id."\n"."支付金额：".$xpay->get_order_amount($pay_id)."\n"."支付方式：".$xpay->get_order_payment($pay_id)."\n"."支付时间：".$xpay->get_order_time($pay_id)."\n"."支付状态：".$xpay->get_order_state($pay_id)."\n"."支付邮箱：".$email);
        }
        echo "订单状态已更新";
    }
} else {
    //跳转404页面
    header("/404.html");
    exit;
}