<?php
    //引入类文件
    require_once 'Xpay.php';
    require_once 'Pay.php';

    //实例化类
    $XPay = new Xpay();
    $Pay = new Pay();

    //接收ajax传过来的数据
    $nickName = $_POST['nickName'];
    $money = $_POST['money'];
    $email = $_POST['email'];
    $serverList = $_POST['serverList'];
    $payType = $_POST['payType'];
    $info = $_POST['info'];
    $custom = $_POST['custom'];
    $mobile = $_POST['mobile'];
    $device = $_POST['device'];

    $Pay->setNickName($nickName);
    $Pay->setMoney($money);
    $Pay->setEmail($email);
    $Pay->setServerList($serverList);
    $Pay->setPayType($payType);
    $Pay->setInfo($info);
    $Pay->setCustom($custom);
    $Pay->setMobile($mobile);
    $Pay->setDevice($device);
    //生成11位的随机数作为支付编号
    $Pay->setPayNum(mt_rand(10000000000, 99999999999));

    //插入数据
    $result = $XPay->add_order($Pay);

    //判断是否插入成功
    if($result != null){
        $success = true;
        $message = "订单创建成功！";
        $result = [
            'payNum' => $Pay->getPayNum(), // 生成的支付编号
            'id' => $result, // 订单id
        ];
        $Pay->setPayId($result['id']);
        //发送邮件通知管理员
        $title = "测试邮件";
        $content = file_get_contents("mail.php");
        $content = $XPay->set_email($content,$Pay);
        //file_put_contents("tmp.php", $content);
        $XPay->send_email($title, $content);
    }else{
        $success = false;
        $message = "订单创建失败！";
    }
    //返回json格式的数据
    $data = [
       'success' => $success,
       'message' => $message,
       'result' => $result
    ];
    echo json_encode($data);