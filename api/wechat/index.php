<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
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
    <link rel="stylesheet" href="../../assets/css/responsive.css" />

    <link rel="stylesheet" href="../../assets/css/wechat.css">

    <!--<script src="../../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>-->
    <!--<script src="https://cdn.bootcss.com/modernizr/2.8.2/modernizr.min.js"></script>-->

</head>

<body data-spy="scroll" data-target=".navbar-collapse" style="background:#f1f2f7">

<div class="culmn">
    <!--Featured Section-->
    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="main_features p-top-20">

                    <div class="gray-box">
                        <div class="title">
                            <h2>XPay收银台 收款方：CronFee</h2>
                        </div>
                        <!--内容-->
                        <div>
                            <div class="box-inner order-info">
                                <img class="wechat" src="../../assets/images/weixinpay@2x.png" alt="扫一扫标识">
                                <p class="payment-detail">扫一扫付款（元）</p>
                                <p class="payment-money" id="money1"></p>
                                <p id="showreamrk" class="payment-detail" style="display: none">
                                    支付时请在备注中输入您的订单标识号：<b class="payNum" style="color: #d44d44;"></b><br>
                                </p>
                                <div class="img-box">
                                    <img class="pic" id="qr-pic"
                                         src="/assets/qr/wechat/custom.png" alt="加载失败" width="168px"
                                         height="168px" />
                                    <div class="timeout" style="display: none">二维码已过期</div>
                                </div>
                                <p id="qrmobile" style="display: none;margin: 10px;text-align: center;">
                                    <span>请长按二维码或截图保存图片至手机后，打开微信使用“扫一扫”，点击右上角“相册”选择刚保存的二维码进行支付</span>
                                </p>
                                <p id="qrscan" style="display: none;margin: 10px;text-align: center;">
                                    <span>请长按二维码选择“识别图中二维码”进行支付</span>
                                </p>
                                <img id="explain" class="explain" src="../../assets/images/wechat-explain.png" alt="扫一扫标识">
                                <div class="count" id="time-box"></div>
                            </div>
                        </div>

                        <div>
                            <div class="box-inner">
                                <div>
                                        <span>

                                        </span>
                                    <em><span>¥</span><em id="money2"></em></em>
                                    <input type="text" class="disabled-btn" onclick="confirm()" id="confirm" value="等待支付..." readonly style="margin-right:15px">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div><!-- End off row -->
        </div><!-- End off container -->
    </section><!-- End off Featured Section-->

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
                    <img src="/assets/images/wxremark.png" style="margin:0 auto;max-width:300px !important;"/>
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
<script src="../../assets/js/jquery.collapse.js"></script>
<script src="../../assets/js/bootsnav.js"></script>

<script src="../../assets/js/plugins.js"></script>
<script src="../../assets/js/main.js"></script>

<script src="../../assets/js/jquery.cookie.js"></script>

</body>
<script>
    $("[data-toggle='popover']").popover();

    // 判断移动设备
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        $("#qrmobile").css('display','block');
        $("#explain").css('display','none');
    }

    // 判断是否微信浏览器
    function isWeixin() {
        var ua = window.navigator.userAgent.toLowerCase();
        if (ua.match(/MicroMessenger/i) == 'micromessenger') {
            return 1;
        }
        return 0;
    }

    if(isWeixin()){
        $("#qrmobile").css('display','none');
        $("#qrscan").css('display','block');
    }

    var money=$.cookie('money');
    if(money==""||money==null){
        window.location.href="/";
    }
    $("#money1").html(Number(money).toFixed(2));
    $("#money2").html(Number(money).toFixed(2));

    var picName = $.cookie('picName');
    // 获取num
    var num  = $.cookie('payNum');
    var path="";
    /*if(true&&picName==""||picName==null||picName=="null"||picName=="custom"){
        $("#reamrkModal").modal('show');
        // 自定义金额显示需填写订单标识
        $(".payNum").html(num);
        //显示
        $("#showreamrk").css("display","block");
    }else{
        path="/assets/qr/alipay/"+Number(num).toFixed(2)+"/"+"<?php echo rand(1,10);?>"+".png";
        $("#qr-pic").attr("src",path);
        countDown();
        countTime();
    }*/
    path="/assets/qr/wechat/"+Number(money).toFixed(2)+"/"+"<?php echo rand(1,10);?>"+".png";
    $("#qr-pic").attr("src",path);
    countDown();
    countTime();

    $('#reamrkModal').on('hide.bs.modal', function () {
        countDown();
        countTime();
    })

    var count=30;
    $("#confirm").attr("disabled","disabled");

    function countDown(){
        if (count === 0) {
            $("#confirm").removeAttr("class");
            $("#confirm").removeAttr("disabled");
            $("#confirm").attr("class","main-btn");
            $("#confirm").val("确认已支付");
            return;
        } else {
            count--;
        }
        setTimeout(function () {
            countDown();
        }, 1000);
    }
    // 过期重新生成二维码
    ////1-10内随机数
    //var dir = "/assets/qr/alipay/"+Number(num).toFixed(2)+"/"+"<?php// echo rand(1,10);?>//"+".png";
    //$("#qr-pic").attr("src", dir);
    //if ($.cookie('time') == 0){
    //    $.removeCookie('time');
    //}
    function countTime() {
        var time = $.cookie('time');
        if (time <= 0) {
            document.getElementsByClassName("timeout")[0].style.display="block";
            $("#time-box").css("display","none");
            $("#confirm").attr("disabled","disabled");
            $("#confirm").val("二维码已失效");
            $("#confirm").removeAttr("class");
            $("#confirm").attr("class", "disabled-btn");
            count=10000;
            return;
        } else {
            time--;
            showTime(time);
            //指定目录cookie

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
                //console.log(data);
                if(data.success==true){
                    if(data.result==1){
                        showMsg("恭喜您已成功支付 "+Number(money).toFixed(2)+" 元，感谢您的捐赠，请查收通知邮件，若长时间未收到请检查垃圾邮件或进行反馈！");
                    }else if(data.result==2){
                        showMsg("抱歉，您已支付失败，请检查您的支付金额或输入的标识号再次尝试支付！");
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
