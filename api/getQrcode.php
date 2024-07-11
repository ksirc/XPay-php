<?php
$money = number_format($_POST['money'], 2);
$payType = $_POST['payType'];
$dir = "../assets/qr/" . $payType . "/";
$qrFile = $dir . "custom.png";    //默认二维码文件名
if ($money > 0) {  //金额是否大于零
    $dir = $dir . $money;  //创建带金额的目录
    if (file_exists($dir) && is_dir($dir)) {    //目录是否存在
        $pngFiles = glob($dir . "/*.png");
        if (!empty($pngFiles)) {    //目录下是否有二维码文件
            $qrFile = $pngFiles[array_rand($pngFiles)];  //随机选取一个二维码文件
        }
    }
}
//返回二维码文件路径
$data = [
    "success" => true,
    "message" => "QR code already exists",
        "qrcode" => $qrFile,
];
echo json_encode($data);
