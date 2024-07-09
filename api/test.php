<?php
    //引入邮件发送函数
    require_once("Xpay.php");
    $XPay = new Xpay();
    //测试邮件发送
    $title = "测试邮件";
    $content = file_get_contents("mail.php");
    //$content = $XPay->set_email($content,$Pay);
    $XPay->send_email($title, $content);