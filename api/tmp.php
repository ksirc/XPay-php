<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>XPay个人收款支付系统</title>
    <style type="text/css">
        .ReadMsgBody { width: 100%; background-color: #ffffff; }
        .ExternalClass { width: 100%; background-color: #ffffff; }
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
        html { width: 100%; }
        body { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; margin: 0; padding: 0; }
        table { border-spacing: 0; border-collapse: collapse; table-layout: fixed; margin:0 auto; }
        table table table { table-layout: auto; }
        img { display: block !important; }
        table td { border-collapse: collapse; }
        .yshortcuts a { border-bottom: none !important; }
        a { color: #ff646a; text-decoration: none;}
        .textbutton a { font-family: 'open sans', arial, sans-serif !important; color: #ffffff !important; }
        .footer-link a { color: #7f8c8d !important; }
    </style>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

    <!-- header -->

    <tr>
        <td align="center">
            <table bgcolor="#f8f8f8" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr align="center" valign="top">
                    <td>
                        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="208" align="center" valign="top" bgcolor="#607e9d">
                                    <table width="158" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="50"></td>
                                        </tr>
                                        <!-- logo -->
                                        <tr>
                                            <td align="center" style="line-height:0px;">
                                                <img style="display:block;font-size:0px; border:0px; line-height:0px;" src="https://i.loli.net/2018/10/10/5bbddd6bcf412.png" width="130" height="26" alt="logo" />
                                            </td>
                                        </tr>
                                        <!-- end logo -->

                                        <tr>
                                            <td height="40"></td>
                                        </tr>

                                        <!-- Compane Name -->
                                        <tr>
                                            <td style="font-family: 'Open Sans', Arial, sans-serif; font-size:16px; color:#FFFFFF; line-height:26px; font-weight: bold;">个人收款支付系统</td>
                                        </tr>
                                        <!-- end Compane Name -->

                                        <tr>
                                            <td height="5"></td>
                                        </tr>

                                        <!-- address -->
                                        <tr>
                                            <td style="font-family: 'Open Sans', Arial, sans-serif; font-size:13px; color:#FFFFFF; line-height:26px;">
                                                免费开源
                                                <br />
                                                无需任何第三方SDK
                                            </td>
                                        </tr>
                                        <!-- end address -->

                                        <tr>
                                            <td height="25"></td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="392" align="center" valign="top">
                                    <table width="342" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="50"></td>
                                        </tr>

                                        <!-- title -->
                                        <tr>
                                            <td align="right" style="font-family: 'Open Sans', Arial, sans-serif; font-size:38px; color:#3b3b3b; line-height:26px;">支付审核通知</td>
                                        </tr>
                                        <!-- end title -->

                                        <tr>
                                            <td height="25"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                <table align="right" width="50" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td bgcolor="#ff646a" height="3" style="line-height:0px; font-size:0px;">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="15"></td>
                                        </tr>
                                        <!-- Compane Name -->
                                        <tr>
                                            <td align="right" style="font-family: 'Open Sans', Arial, sans-serif; font-size:16px; color:#3b3b3b; line-height:26px; font-weight: bold;">Exrick Presents</td>
                                        </tr>
                                        <!-- end Compane Name -->

                                        <tr>
                                            <td height="5"></td>
                                        </tr>

                                        <!-- address -->
                                        <tr>
                                            <td align="right" style="font-family: 'Open Sans', Arial, sans-serif; font-size:13px; color:#7f8c8d; line-height:26px;">
                                                作者博客：<a href="http://blog.exrick.cn">http://blog.exrick.cn</a>
                                                <br />
                                                Github：<a href="https://github.com/Exrick">https://github.com/Exrick</a>
                                                <br />
                                                QQ交流群 :
                                                <span style="color:#3b3b3b"> <strong>475743731</strong>
													</span>
                                            </td>
                                        </tr>
                                        <!-- end address -->

                                        <tr>
                                            <td height="25"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- end header -->

    <!-- title -->

    <tr>
        <td align="center">
            <table align="center" width="600" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center" style="border-bottom:3px solid #bcbcbc;">
                        <table align="center" width="550" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="20"></td>
                            </tr>

                            <!-- header -->
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td width="100%" align="left" valign="top" style="font-size:13px; color:#3b3b3b; line-height:26px; text-transform:uppercase;">
                                                尊敬的管理员Exrick您好，您收到新订单，请您及时处理：
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- end header -->
                            <tr>
                                <td height="10"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- end title -->

    <!-- list -->
    <tr>
        <td align="center">
            <table width="600" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center" style="border-bottom:1px solid #ecf0f1;">
                        <table width="550" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="15"></td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td width="250" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">用户昵称</td>
                                            <td width="300" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">越泰清</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height="5"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="5"></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- end list -->

    <!-- list -->
    <tr>
        <td align="center">
            <table width="600" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center" style="border-bottom:1px solid #ecf0f1;">
                        <table width="550" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="15"></td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td width="250" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">金额</td>
                                            <td width="300" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">
                                                20
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height="5"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="5"></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- end list -->

    <!-- list -->
    <tr>
        <td align="center">
            <table width="600" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center" style="border-bottom:1px solid #ecf0f1;">
                        <table width="550" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="15"></td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td width="250" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">支付方式</td>
                                            <td width="300" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">Alipay</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height="5"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="5"></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- end list -->

    <!-- list -->
    <tr>
        <td align="center">
            <table width="600" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center" style="border-bottom:1px solid #ecf0f1;">
                        <table width="550" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="15"></td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td width="250" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">订单编号</td>
                                            <td width="300" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">74763339553</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height="5"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="5"></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- end list -->

    <!-- list -->
    <tr>
        <td align="center">
            <table width="600" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center" style="border-bottom:1px solid #ecf0f1;">
                        <table width="550" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="15"></td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td width="250" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">是否为移动端(true是false否)</td>
                                            <td width="300" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">false</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height="5"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="5"></td>
        </tr>
    </table>
</td>
</tr>
<!-- end list -->

<!-- list -->
<tr>
    <td align="center">
        <table width="600" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center" style="border-bottom:1px solid #ecf0f1;">
                    <table width="550" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td height="15"></td>
                        </tr>
                        <tr>
                            <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td width="250" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">是否自定义金额输入</td>
                                        <td width="300" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">NO</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="5"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td height="5"></td>
            </tr>
        </table>
    </td>
</tr>
<!-- end list -->

<!-- list -->
<tr>
    <td align="center">
        <table width="600" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center" style="border-bottom:1px solid #ecf0f1;">
                    <table width="550" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td height="15"></td>
                        </tr>
                        <tr>
                            <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td width="250" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">留言</td>
                                        <td width="300" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="5"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td height="5"></td>
            </tr>
        </table>
    </td>
</tr>
<!-- end list -->

<!-- list -->
<tr>
    <td align="center">
        <table width="600" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center" style="border-bottom:1px solid #ecf0f1;">
                    <table width="550" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td height="15"></td>
                        </tr>
                        <tr>
                            <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td width="250" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">通知邮箱</td>
                                        <td width="300" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">ksir8888@gmail.com</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="5"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td height="5"></td>
            </tr>
        </table>
    </td>
</tr>
<!-- end list -->

<!-- list -->
<tr>
    <td align="center">
        <table width="600" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center" style="border-bottom:1px solid #ecf0f1;">
                    <table width="550" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td height="15"></td>
                        </tr>
                        <tr>
                            <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td width="250" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">支付时间</td>
                                        <td width="300" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">2024-07-10 17:01:55</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="5"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td height="5"></td>
            </tr>
        </table>
    </td>
</tr>
<!-- end list -->

<!-- list -->
<tr>
    <td align="center">
        <table width="600" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center" style="border-bottom:1px solid #ecf0f1;">
                    <table width="550" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td height="15"></td>
                        </tr>
                        <tr>
                            <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td width="250" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">用户支付设备信息</td>
                                        <td width="300" align="left" valign="top" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#3b3b3b; line-height:26px;  font-weight: bold;">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="5"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td height="5"></td>
            </tr>
        </table>
    </td>
</tr>
<!-- end list -->

<!-- total -->
<tr>
    <td align="center">
        <table align="center" width="600" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center" height="0" style="border-bottom:3px solid #3b3b3b;"></td>
            </tr>
        </table>
    </td>
</tr>
<!-- end total -->

<!-- note -->
<tr>
    <td align="center">
        <table align="center" width="600" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td height="20"></td>
            </tr>

            <!-- content -->
            <tr>
                <td style="font-size:13px; color:#7f8c8d; line-height:26px;">
                    请确认后点击以下对应按钮进行审核(3天内有效)：
                </td>
            </tr>
            <!-- end content -->
            <tr>
                <td height="20"></td>
            </tr>

            <tr>
                <td align="center">
                    <!--button-->
                    <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#91c444" class="textbutton" style="border-radius:5px;border-bottom:3px solid #e6e6e6">
                        <tr>
                            <td height="40" align="center" style="font-size:16px;color:#FFFFFF;line-height: 28px;padding-left: 15px;padding-right: 15px;">
                                <a href="http://locahost:/api/notify.php?pay_id=21&state=1" style="display: block;">审核通过</a>
                            </td>
                        </tr>
                    </table>
                    <!--end button-->
                </td>
            </tr>

            <tr>
                <td height="30"></td>
            </tr>


            <tr>
                <td align="center">
                    <!--button-->
                    <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#e4ba00" class="textbutton" style="border-radius:5px;border-bottom:3px solid #e6e6e6">
                        <tr>
                            <td height="40" align="center" style="font-size:16px;color:#FFFFFF;line-height: 28px;padding-left: 15px;padding-right: 15px;">
                                <a href="http://locahost:/api/notify.php?pay_id=21&state=2" style="display: block;">驳回</a>
                            </td>
                        </tr>
                    </table>
                    <!--end button-->
                </td>
            </tr>

            <tr>
                <td height="30"></td>
            </tr>



            <tr>
                <td align="center">
                    <!--button-->
                    <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#d9534f" class="textbutton" style="border-radius:5px;border-bottom:3px solid #e6e6e6">
                        <tr>
                            <td height="40" align="center" style="font-size:16px;color:#FFFFFF;line-height: 28px;padding-left: 15px;padding-right: 15px;">
                                <a href="{del_url}" style="display: block;">删除该支付数据</a>
                            </td>
                        </tr>
                    </table>
                    <!--end button-->
                </td>
            </tr>

            <tr>
                <td height="30"></td>
            </tr>

            <tr>
                <td height="15" style="border-bottom:3px solid #bcbcbc;"></td>
            </tr>
        </table>
    </td>
</tr>
<!-- end note -->

<!-- footer -->
<tr>
    <td align="center">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td height="15" align="center" valign="top" style="border-bottom:10px solid #ecf0f1;">
                    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="25"></td>
                        </tr>
                        <tr>
                            <td align="center" valign="top">
                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="13" align="center" style="line-height:0px;">
                                            <img style="display:block;font-size:0px; border:0px; line-height:0px;" src="https://i.loli.net/2018/07/18/5b4f3a79dc324.png" width="14" height="11" alt="img" />
                                        </td>
                                        <td width="10"></td>
                                        <td class="footer-link" width="120" align="left" style="font-family: 'Open Sans', Arial, sans-serif; font-size:13px; color:#3b3b3b; line-height:26px;">1012139570@qq.com</td>
                                        <td class="footer-link" width="300" align="right" style="font-family: 'Open Sans', Arial, sans-serif; font-size:13px; color:#3b3b3b; line-height:26px;">
                                            <a href="http://blog.exrick.cn ">Exrick</a>
                                            <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                            <a href="https://github.com/Exrick">作者更多开源项目</a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="25"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
<!-- end footer -->

</table>
</body>
</html>


