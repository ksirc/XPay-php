<?php

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Xpay
{
//支付系统数据库配置
private $host = "localhost";
private $db_user = "root";
private $db_passwd = "123456";
private $db_name = "xpay";
private $db_port = 3306;

//生成token
private $token = "3f4a8b2c9d1e7f6g";
//审核回调地址+端口
private  $pass_url = "http://localhost:8088/api/notify.php";

//邮件配置
private $smtp_server = "smtp.qq.com";       //SMTP服务器
private $smtp_port = 465;                   //SMTP端口
private $smtp_user = "1324749175@qq.com";    //SMTP用户名
private $smtp_passwd = "xxxxxxxx";   //SMTP密码
private $smtp_from = "lotlcn@qq.com";        //发件人邮箱
private $smtp_to = "lotlcn@qq.com";          //收件人邮箱


    //连接数据库方法
    function connect_db(){
        $conn = mysqli_connect($this->host, $this->db_user, $this->db_passwd, $this->db_name, $this->db_port);
        if (!$conn) {
            die("连接失败: ". mysqli_connect_error());
        }
        return $conn;
    }

    //添加订单方法
    function add_order(Pay $pay)
    {
        $sql = "INSERT INTO t_pay (nick_name, money, email, server_list, pay_type, info, custom, mobile, device, pay_num) VALUES ('{$pay->getNickName()}', '{$pay->getMoney()}', '{$pay->getEmail()}', '{$pay->getServerList()}', '{$pay->getPayType()}', '{$pay->getInfo()}', '{$pay->getCustom()}', '{$pay->getMobile()}', '{$pay->getDevice()}', '{$pay->getPayNum()}')";
        $conn = $this->connect_db();
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            return null;
        }
        $pay_id = mysqli_insert_id($conn);
        $conn->close();
        return $pay_id;
    }

    //检查订单状态方法
    function check_order_status($pay_id){
        $sql = "SELECT state FROM t_pay WHERE id = '". $pay_id. "'";
        $conn = $this->connect_db();
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            return null;
        }
        $row = mysqli_fetch_assoc($result);
        $status = $row['state'];
        $conn->close();
        return $status;
    }

    //删除订单方法
    public function delete_order($pay_id)
    {
        $sql = "DELETE FROM t_pay WHERE id = '". $pay_id. "'";
        $conn = $this->connect_db();
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            return null;
        }
        $conn->close();
        return true;
    }

    //更新订单状态方法
    public function update_order_state($pay_id, $state){
        $sql = "UPDATE t_pay SET state = '". $state. "' WHERE id = '". $pay_id. "'";
        $conn = $this->connect_db();
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            return null;
        }
        $conn->close();
        return true;
    }


    //发送邮件方法
    /*
     * @param $subject 邮件主题
     * @param $content 邮件内容
     */
    function send_email($subject, $content){
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = $this->smtp_server;                     // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = $this->smtp_user;                     // SMTP username
            $mail->Password   = $this->smtp_passwd;                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = $this->smtp_port;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($this->smtp_from, 'Xpay');
            $mail->addAddress($this->smtp_to, 'Lotlcn');     // Add a recipient
            $mail->addReplyTo($this->smtp_from, 'Xpay');
            $mail->addCC($this->smtp_from, 'Xpay');
            $mail->addBCC($this->smtp_from, 'Xpay');

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $content;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            return true;
        } catch (Exception $e) {
            return 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
        }
    }

    // 设置邮件模板方法
    function set_email(string $content, Pay $Pay){
        //替换模板变量
        $content = str_replace("{nickname}", $Pay->getNickName(), $content);
        $content = str_replace("{money}", $Pay->getMoney(), $content);
        $content = str_replace("{email}", $Pay->getEmail(), $content);
        $content = str_replace("{pay_type}", $Pay->getPayType(), $content);
        $content = str_replace("{info}", $Pay->getInfo(), $content);
        $content = str_replace("{mobile}", $Pay->getMobile(), $content);
        $content = str_replace("{device}", $Pay->getDevice(), $content);
        $content = str_replace("{pay_num}", $Pay->getPayNum(), $content);
        $content = str_replace("{time}", date("Y-m-d H:i:s", time()), $content);
        $content = str_replace("{pass_url}", $this->pass_url. "?pay_id=". $Pay->getPayId(). "&state=1". "&token=". $this->token, $content);
        $content = str_replace("{fail_url}", $this->pass_url. "?pay_id=". $Pay->getPayId(). "&state=2". "&token=". $this->token, $content);
        $content = str_replace("{del_url}", $this->pass_url. "?pay_id=". $Pay->getPayId(). "&state=del". "&token=". $this->token, $content);
        return $content;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): void
    {
        $this->token = $token;
    }

}