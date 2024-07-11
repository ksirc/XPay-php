<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>支付</title>
    <meta name="keywords" content="XPay个人收款支付系统,个人免签支付,个人支付接口,免签约,无需第三方SDK,完全免费,支付宝,微信,移动端支付">
    <meta name="description" content="XPay个人收款支付系统 个人免签支付 个人支付接口 完全免费 免签约 支付宝转账码 无需第三方SDK 个人支付宝、微信、QQ免签支付 支持移动端支付 无视支付宝风控">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.ico">

    <!--<link rel="stylesheet" href="assets/css/swiper.min.css">-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/iconfont.css">
    <!--<link rel="stylesheet" href="assets/css/font-awesome.min.css">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="assets/css/magnific-popup.css">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.1/magnific-popup.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootsnav2.css">

    <!--For Plugins external css-->
    <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->
    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <link rel="stylesheet" href="assets/css/pay.css">

</head>

<?php
$serverid = $_GET['serverId'];   //区服ID
$nickname = $_GET['nickname'];     //角色ID
$money = $_GET['money'];       //支付金额
?>

<body data-spy="scroll" data-target=".navbar-collapse" style="background:#f1f2f7">

<div class="culmn">

    <!--Featured Section-->
    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="main_features p-top-20">

                    <div class="gray-box">
                        <div class="title">
                            <h2>确认订单</h2>
                        </div>
                        <!--内容-->
                        <div>
                            <div class="order-info">
                                <p class="payment-detail" style="margin-bottom: 20px;">请仔细核对您的支付信息，确认无误后，请点击立即支付按钮进行支付！</p>
                                <div class="pay-info">
                                    <div class="form">
                                        <div class="form-group">
                                            <label for="server" class="control-label col-sm-3" style="color:#5c81e3">区服</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="serverlist" name="serverlist" type="text" maxlength="30" placeholder="区服名称" value="<?php echo !empty($serverid)? $serverid : ""; ?>" <?php if(!empty($serverid)) echo "readonly" ?> />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nickName" class="control-label col-sm-3">昵称<span class="red-txt"> *</span></label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="nickName" name="nickName" maxlength="20" type="text" placeholder="请输入您的昵称" value="<?php echo !empty($nickname)? $nickname : ""; ?>" <?php if(!empty($nickname)) echo "readonly" ?> />
                                            </div>
                                        </div>

                                        <div class="form-group" id="custom-input">
                                            <label for="money" class="control-label col-sm-3">金额<span class="red-txt"> *</span></label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="money" name="money" oninput="toMoney()" type="text" maxlength="20" placeholder="请确认您的支付金额(支持小数点后2位)" value="<?php echo !empty($money)? $money : ""; ?>" <?php if(!empty($money)) echo "readonly" ?> />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="control-label col-sm-3">您的邮箱<span class="red-txt"> *</span></label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="email" name="email" type="text" maxlength="30" placeholder="支付结果将发送至您邮箱(推荐QQ邮箱)" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="control-label col-sm-3">留言</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="info" name="info" type="text" maxlength="50" placeholder="请输入您的留言内容" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pay-type">
                                    <div class="p-title">支付方式</div>
                                    <div class="pay-item">
                                        <div id="ali" class="active" onclick="changeType(1)"><img src="assets/images/alipay@2x.png" alt=""></div>
                                        <div id="wechat" class="" onclick="changeType(2)"><img src="assets/images/weixinpay@2x.png" alt=""></div>
                                        <div id="qq" class="" onclick="changeType(3)"><img src="assets/images/qqpay.png" alt=""></div>
                                        <!-- <div id="uni" class="" onclick="changeType(4)"><img src="assets/images/uni.png" alt=""></div>
                                        <div id="dian" class="" onclick="changeType(5)"><img src="assets/images/diandan.png" alt=""></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="box-inner">
                                <div>
										<span>
											应付金额：
										</span>
                                    <em><span>¥</span><em id="realMoney" name="realMoney"><?php echo !empty($money)? $money : "0.00"; ?></em></em>
                                    <input type="text" class="main-btn" value="立刻支付" onclick="submit()" id="submit" readonly>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div><!-- End off row -->
        </div><!-- End off container -->
    </section><!-- End off Featured Section-->

    <!-- scroll up-->
    <div class="scrollup">
        <a href="#"><i class="fa fa-chevron-up"></i></a>
    </div><!-- End off scroll up -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="title">提示</h4>
                </div>
                <div class="modal-body" id="body">
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-warning" type="button">确 认</button>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- JS includes -->

<!--<script src="assets/js/vendor/jquery-1.11.2.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!--<script src="assets/js/vendor/bootstrap.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<!--<script src="assets/js/jquery.magnific-popup.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.1/jquery.magnific-popup.min.js"></script>
<!--<script src="assets/js/jquery.easing.1.3.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.compatibility.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/js/swiper.jquery.min.js"></script>

<script src="assets/js/jquery.collapse.js"></script>
<script src="assets/js/bootsnav.js"></script>

<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/jquery.cookie.js"></script>

</body>

<script>
    $("[data-toggle='popover']").popover();
    //清除cookie
    $.removeCookie('time');

    var url = window.location.href;
    if (url.indexOf("xboot") >= 0) {
        $("#money").val("168.00");
    }

    var nickName = "",
        money = "",
        email = "",
        serverlist = "",
        payType = "Alipay",
        picName = "",
        custom = false,
        mobile = false;
    // 支付时间倒计时
    var setTime = 90;

    // 判断移动设备
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        mobile = true;
        // 判断移动设备 3分钟支付时间
        setTime = 180;
    }

    function check() {
        nickName = $("#nickName").val();
        money = $("#money").val();
        email = $("#email").val();
        serverlist = $("#serverlist").val();

        if (nickName == "" || email == "") {
            showMsg('关键表单字段不能为空');
            return false;
        }
        if (picName == "custom") {
            if (!isMoney(money)) {
                showMsg('请填写正确的金额（支持2位小数，金额不得低于5.00元）');
                return false;
            }
        }
        if (!isEmail(email)) {
            showMsg('请填写正确的通知邮箱地址');
            return false;
        }
        // if (serverlist != "" && !isEmail(serverlist)) {
        // 	showMsg('请填写正确的区服');
        // 	return false;
        // }
        return true;
    }

    function isMoney(v) {
        if (v == "" || v == null || v < 5) {
            return false;
        }
        var regu = /(^[1-9]([0-9]+)?(\.[0-9]{1,2})?$)|(^(0){1}$)|(^[0-9]\.[0-9]([0-9])?$)/
        var re = new RegExp(regu);
        if (re.test(v)) {
            return true;
        } else {
            return false;
        }
    }

    function isEmail(v) {
        var regu = /^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/
        var re = new RegExp(regu);
        if (re.test(v)) {
            return true;
        } else {
            return false;
        }
    }

    function toMoney() {
        money = $("#money").val();
        if (money == "") {
            $("#realMoney").html("0.00");
            return;
        }
        money = parseFloat(money);
        money = money.toFixed(2);
        money = money.toLocaleString();
        $("#realMoney").html(money);
        return money;
    }


    function changeType(v) {
        if (v == 1) {
            payType = "Alipay";
            $("#ali").attr("class", "active");
            $("#wechat").removeAttr("class");
            $("#qq").removeAttr("class");
            $("#uni").removeAttr("class");
            $("#dian").removeAttr("class");
        } else if (v == 2) {
            payType = "Wechat";
            $("#ali").removeAttr("class");
            $("#wechat").attr("class", "active");
            $("#qq").removeAttr("class");
            $("#uni").removeAttr("class");
            $("#dian").removeAttr("class");
        } else if (v == 3) {
            payType = "QQ";
            $("#ali").removeAttr("class");
            $("#wechat").removeAttr("class");
            $("#qq").attr("class", "active");
            $("#uni").removeAttr("class");
            $("#dian").removeAttr("class");
        } else if (v == 4) {
            payType = "UnionPay";
            $("#ali").removeAttr("class");
            $("#wechat").removeAttr("class");
            $("#qq").removeAttr("class");
            $("#uni").attr("class", "active");
            $("#dian").removeAttr("class");
        } else if (v == 5) {
            payType = "Diandan";
            $("#ali").removeAttr("class");
            $("#wechat").removeAttr("class");
            $("#qq").removeAttr("class");
            $("#uni").removeAttr("class");
            $("#dian").attr("class", "active");
        }
    }

    //提交订单
    function submit() {
        if (!check()) {
            return;
        }
        money = $("#money").val();
        $.cookie('money', money);
        $.cookie('time', setTime, {path: '/'});

        $("#submit").attr("disabled", "disabled");
        $("#submit").val("提交中...");

        $.ajax({
            url: "/api/add.php",
            type: 'POST',
            data: {
                nickName: nickName,
                money: money,
                email: email,
                serverList: serverlist,
                payType: payType,
                info: $("#info").val(),
                custom: custom,
                mobile: mobile,
                device: navigator.userAgent
            },
            dataType: 'json',
            success: function(data) {
                if (data.success) {
                    // 存入num和id
                    $.cookie('payNum', data.result.payNum);
                    $.cookie('payId', data.result.id);
                    $.cookie('payType', payType);
                    $("#submit").removeAttr("disabled");
                    $("#submit").val("立刻支付");
                    // 跳转支付页面
                    if (payType == "Alipay") {
                        window.location.href = "api/alipay/";
                    } else if (payType == "Wechat") {
                        window.location.href = "api/wechat/";
                    } else if (payType == "QQ") {
                        window.location.href = "api/qqpay/";
                    } else if (payType == "UnionPay") {
                        // 重新存入价格信息
                        $.cookie('money', money - Number(data.result.payNum) * 0.1);
                        $.cookie('originPrice', money);
                        window.location.href = "api/unipay/";
                    } else if (payType == "Diandan") {
                        window.location.href = "api/diandan/";
                    }
                } else {
                    $("#submit").removeAttr("disabled");
                    $("#submit").val("立刻支付");
                    showMsg(data.message);
                }
            },
            error: function(XMLHttpRequest) {
                if (XMLHttpRequest.status != 200) {
                    $("#submit").removeAttr("disabled");
                    $("#submit").val("立刻支付");
                    alert('出错啦! 错误码:' + XMLHttpRequest.status);
                }
            }
        });
    }

    function showMsg(m) {
        $("#myModal").modal('show');
        $("#body").html(m);
    }
</script>

</html>