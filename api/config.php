<?php

//数据库配置
$host = "localhost";//本地连接数据库 一般不修改
$db_user = "root";//数据库用户名 一般不修改
$db_passwd = "123456";//你的数据库密码
$db_port = "3306";//数据库端口  一般不修改
$db_name = "xpay";//数据库名称  一般不修改

//邮箱配置
$smtp_server = "smtp.qq.com";//你的邮箱服务器
$smtp_port = "465";//邮箱服务器端口
$smtp_user = "1324749175@qq.com";//你的邮箱用户名
$smtp_passwd = "jemivnqezzabfega";//你的邮箱密码
$smtp_from = "xpay@pay.com";//发件人邮箱
$smtp_to = "lotlcn@qq.com";//收件人邮箱

//连接数据库方法
function connect_db(){
    $conn = mysqli_connect($host, $db_user, $db_passwd, $db_name, $db_port);
    if (!$conn) {
        die("连接失败: " . mysqli_connect_error());
    }
    return $conn;
}

//发送邮件方法
function send_email($subject, $content){
    global $smtp_server, $smtp_port, $smtp_user, $smtp_passwd, $smtp_from, $smtp_to;
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->CharSet = "utf-8";
    $mail->Host = $smtp_server;
    $mail->SMTPAuth = true;
    $mail->Username = $smtp_user;
    $mail->Password = $smtp_passwd;
    $mail->SMTPSecure = "ssl";
    $mail->Port = $smtp_port;
    $mail->setFrom($smtp_from, "xpay");
    $mail->addAddress($smtp_to);
    $mail->Subject = $subject;
    $mail->Body = $content;
    if (!$mail->send()) {
        echo "邮件发送失败: " . $mail->ErrorInfo;
    } else {
        echo "邮件发送成功";
    }
}