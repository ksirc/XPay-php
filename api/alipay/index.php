<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>XPay个人收款支付系统</title>
    <meta name="description" content="XPay个人收款支付系统 无需签约 无需第三方SDK 完全免费">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.ico">

    <!--<link rel="stylesheet" href="../../assets/css/swiper.min.css">-->
    <link rel="stylesheet" href="../../assets/css/animate.css">
    <link rel="stylesheet" href="../../assets/css/iconfont.css">
    <!--<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="../../assets/css/magnific-popup.css">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.1/magnific-popup.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/bootsnav2.css">

    <!--For Plugins external css-->
    <!--<link rel="stylesheet" href="../../assets/css/plugins.css" />-->
    <!--Theme custom css -->
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="../../assets/css/responsive.css"/>

    <link rel="stylesheet" href="../../assets/css/alipay.css">

    <!--<script src="../../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>-->
    <!--<script src="https://cdn.bootcss.com/modernizr/2.8.2/modernizr.min.js"></script>-->

</head>

<body data-spy="scroll" data-target=".navbar-collapse" style="background:#f1f2f7">

<div class="culmn">
    <!--Home page style-->


    <!--Featured Section-->
    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="main_features p-top-20">

                    <div class="gray-box">
                        <div class="title">
                            <h2>XPay收银台 收款方：Cronfee</h2>
                        </div>
                        <!--内容-->
                        <div>
                            <div class="box-inner order-info">
                                <p class="payment-detail">扫一扫付款（元）</p>
                                <p class="payment-money" id="money1"></p>
                                <p id="showreamrk" class="payment-detail" style="display: none">
                                    支付时请在备注中输入您的订单标识号：<b class="payNum" style="color: #d44d44;"></b><br>
                                </p>
                                <!--<div id="qr-pic" style="width: 168px;height: 168px;margin-top:3px"/>-->
                                <div class="img-box" style="flex-direction: column;">
                                    <img class="pic" id="qr-pic"
                                    src="/assets/qr/Alipay/custom.png"
                                    alt="加载失败" width="160px" height="160px"/>
                                    <div class="explain">
                                        <img class="fn-left"
                                             src="https://t.alipayobjects.com/images/T1bdtfXfdiXXXXXXXX.png"
                                             alt="扫一扫标识">
                                        <div class="fn-right">打开手机支付宝<br>扫一扫继续付款</div>
                                    </div>
                                    <div class="timeout" style="display: none">二维码已过期</div>
                                </div>
                                <div class="download-box">
                                    <p id="qrmobile" style="display: none;margin: 10px;text-align: center;">
                                        <span>请长按二维码或截图保存至手机后，打开支付宝使用“扫一扫”，点击右上角“相册”选择刚保存的二维码进行支付</span>
                                    </p>
                                    <a id="startApp" class="main-btn" style="width: 205px;display: none;margin-top: 20px;">一键启动支付宝APP支付</a>
                                    <a id="startAppFromWechat" onclick="showTip()" class="main-btn" style="width: 205px;display: none;margin-top: 20px;">打开支付宝APP支付</a>
                                    <a class="download-alipay" href="https://mobile.alipay.com/index.htm" target="_blank">首次使用请下载手机支付宝</a>
                                </div>

                                <div class="count" id="time-box"></div>

                                <div class="qrguide-area">
                                    <img id="img1"
                                         src="https://t.alipayobjects.com/images/rmsweb/T13CpgXf8mXXXXXXXX.png"
                                         class="show" onclick="change()">
                                    <img id="img2"
                                         src="https://t.alipayobjects.com/images/rmsweb/T1ASFgXdtnXXXXXXXX.png"
                                         class="hide" onclick="change()">
                                </div>

                                <img src="../../assets/images/red.png" width="50px" height="50px" class="red" title="支付领红包"
                                     onclick="showRed()">
                            </div>
                        </div>

                        <div>
                            <div class="box-inner">
                                <div>
                                    <span id="other-way" style="position: absolute;left: 15px;font-size: 14px;">
                                        体验红包或转卡其他方式扫码后请勿立即支付，返回后再点击支付按钮
                                    </span>
                                    <em><span>¥</span><em id="money2"></em></em>
                                    <input type="text" class="disabled-btn" onclick="confirm()" id="confirm"
                                           value="等待支付..." readonly>
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
                    <h4 class="modal-title" id="title">支付红包</h4>
                </div>
                <div class="modal-body" id="body">
                    <img src="/assets/images/alired.jpg" class="qr-red"/>
                    <p id="redmobile" style="display: none;text-align: center;">
                        请长按二维码或截图保存至手机后，打开支付宝使用“扫一扫”，点击右上角“相册”选择刚保存的红包二维码领取
                    </p>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-warning" type="button">领取了</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="reamrkModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">请在备注中输入支付标识号</h4>
                </div>
                <div class="modal-body reamrk">
                    <p style="margin-bottom: 10px;">
                        支付时请在备注中输入您的订单标识号：<b class="payNum" style="color: #d44d44;"></b><br>
                        若忘记输入或输入错误可能会造成您支付失败！
                    </p>
                    <img src="/assets/images/alireamrk.png" width="300px;" style="margin:0 auto"/>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-warning" type="button">知道了</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">提示</h4>
                </div>
                <div class="modal-body" id="msgBody">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="button" onclick="toThanks()">确 认</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="msgModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">提示</h4>
                </div>
                <div class="modal-body" id="msgBody2">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="button" data-dismiss="modal">知道了</button>
                </div>
            </div>
        </div>
    </div>

    <div id="wx-tip" class="wx-tip" style="display:none;" onclick="closeTip()">
        <img src="../../assets/images/weixinTip.png" alt="">
    </div>
</div>

<!-- JS includes -->

<!--<script src="../../assets/js/vendor/jquery-1.11.2.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!--<script src="../../assets/js/vendor/bootstrap.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<!--<script src="../../assets/js/jquery.magnific-popup.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.1/jquery.magnific-popup.min.js"></script>
<!--<script src="../../assets/js/jquery.easing.1.3.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.compatibility.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/js/swiper.jquery.min.js"></script>
<script src="../../assets/js/qrcode.min.js"></script>
<script src="../../assets/js/jquery.collapse.js"></script>
<script src="../../assets/js/bootsnav.js"></script>

<script src="../../assets/js/plugins.js"></script>
<script src="../../assets/js/main.js"></script>
<script src="../../assets/js/jquery.cookie.js"></script>

</body>
<script>
    $("[data-toggle='popover']").popover();
    var money = $.cookie('money');
    if (money == "" || money == null) {
        window.location.href = "/";
    }

    $.cookie('scanned', "0");

    // 判断移动设备
    function isMobile() {
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
            return 1;
        }
        return 0;
    }

    if(isMobile()){
        $("#redmobile").css('display','block');
        $("#qrmobile").css('display','block');
        $("#other-way").css('display','none');
    }

    // 判断是否微信浏览器
    function isWeixin() {
        var ua = window.navigator.userAgent.toLowerCase();
        if (ua.match(/MicroMessenger/i) == 'micromessenger') {
            return 1;
        }
        return 0;
    }

    // 判断是否安卓QQ浏览器
    function isQQAndroid() {
        var ua = window.navigator.userAgent.toLowerCase();
        if (ua.match(/QQ/i) == 'qq'&&ua.match(/Android/i) == 'android') {
            return 1;
        }
        return 0;
    }

    // 从cookie中获取订单编号
    var payNum = $.cookie('payNum');

    // 从金额获取图片标识
    var num = money;

    //获取picName
    var picName = $.cookie('picName');
    function showTip() {
        $("#wx-tip").css("display","block");
    }

    function closeTip() {
        $("#wx-tip").css("display","none");
    }

    $("#money1").html(Number(money).toFixed(2));
    $("#money2").html(Number(money).toFixed(2));
    //
    // var qrcode = new QRCode(document.getElementById("qr-pic"), {
    //     width: 160,
    //     height: 160
    // });

       // var path="";
       // if(picName==""||picName==null||picName=="null"||picName=="custom"){
       //     // 自定义金额显示需填写订单标识
       //     $(".payNum").html(payNum);
       //     //显示
       //     $("#showreamrk").css("display","block");
       //     //隐藏图片
       //     $(".qrguide-area").css("display","none");
       // }else{
       //     // 获取num
       //     path="../../assets/qr/alipay/"+num+".png";
       //     $("#qr-pic").attr("src",path);
       // }
    showRed();

    function showRed() {
        $("#myModal").modal('show');
    }
/*
    $('#myModal').on('hide.bs.modal', function () {
       if(picName==""||picName==null||picName=="null"||picName=="custom"){
           // 自定义金额显示备注提示
           $("#reamrkModal").modal('show');
       }else{
        countDown();
        countTime();
       }
    })*/


    // 获取收款码
    getQRCode(money);

    function getQRCode(money) {
        $.ajax({
            url: "../getQrcode.php",
            type: 'POST',
            data: {
                money: money,
                payType: $.cookie('payType'),
            },
            dataType: 'json',
            success: function (data) {
                if (data.success) {
                    $("#qr-pic").attr("src", "../" + data.qrcode);
                } else {
                    showMsg(data.message);
                }
            }
        });
    }

    $('#reamrkModal').on('hide.bs.modal', function () {
        countDown();
        countTime();
    })

    var flag = true;

    function change() {
        if (flag) {
            $("#img1").removeAttr("class");
            $("#img1").attr("class", "hide");
            $("#img2").removeAttr("class");
            $("#img2").attr("class", "show");
            flag = !flag;
        } else {
            $("#img1").removeAttr("class");
            $("#img1").attr("class", "show");
            $("#img2").removeAttr("class");
            $("#img2").attr("class", "hide");
            flag = !flag;
        }

    }

    // 倒计时
    var count = 25;
    $("#confirm").attr("disabled","disabled");
    function countDown() {
        if (count == 0) {
            $("#confirm").removeAttr("class");
            $("#confirm").removeAttr("disabled");
            $("#confirm").attr("class", "main-btn");
            $("#confirm").val("确认已支付");
            return;
        } else {
            count--;
        }
        setTimeout(function () {
            countDown();
        }, 1000);
    }


    function countTime() {
        var time = $.cookie('time');
        if (time <= 0) {
            document.getElementsByClassName("timeout")[0].style.display="block";
            $("#time-box").css("display","none");
            $("#confirm").attr("disabled","disabled");
            $("#confirm").removeAttr("class");
            $("#confirm").attr("class", "disabled-btn");
            $("#confirm").val("二维码已失效\n请刷新页面重新获取");
            $("#startApp").css("display","none");
            count=10000;
            return;
        } else {
            time--;
            showTime(time);
            $.cookie('time', time, {path: '/'});
        }
        setTimeout(function () {
            countTime();
        }, 1000)
    }

    function showTime(v) {
        if(v==null||v==""){
            return "";
        }
        var m=0,s=0;
        if(v>=60){
            m=Math.floor(v/60);
            s=v%60;
        }else{
            s=v;
        }

        if (m >= 0 && m <= 9) {
            m = "0" + m;
        }
        if (s >= 0 && s <= 9) {
            s = "0" + s;
        }
        $("#time-box").html("请于 "+ m + " 分 " + s + " 秒 内支付");
    }

    judgeState();
    function judgeState() {
        $.ajax({
            url:"../state.php",
            type: 'POST',
            data: {
                payId: $.cookie('payId')
            },
            dataType: 'json',
            success:function (data) {
                if(data.success==true){
                    if(data.result==1){
                        showMsg("恭喜您已成功支付 "+Number(money).toFixed(2)+" 元，感谢您的捐赠，请查收通知邮件，若长时间未收到请检查垃圾邮件或进行反馈！");
                    }else if(data.result==2){
                        showMsg("抱歉，您已支付失败，请检查您的支付金额或输入的标识号再次尝试支付！");
                    }else if(data.result==4){
                        if($.cookie('scanned')!="1"){
                            $("#msgModal2").modal('show');
                            $("#msgBody2").html("您已扫码，建议您尽快支付！");
                            $.cookie('scanned', "1");
                        }
                        setTimeout(function () {
                            judgeState();
                        }, 1000)
                    }else{
                        setTimeout(function () {
                            judgeState();
                        }, 1000)
                    }
                }
            }
        });
    }

    function showMsg(m){
        $("#msgModal").modal('show');
        $("#msgBody").html(m);
    }

    function confirm() {
        window.location.href = "/confirm";
    }

    function toThanks() {
        window.location.href = "/thanks";
    }
</script>
</html>
