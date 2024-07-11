# XPay-php 个人收款系统

> 前身是 <a href="https://github.com/Exrick/xpay">XPay个人收款系统</a>
> 基于 Java SpringBoot 开发的个人收款系统，支持支付宝、微信支付、银联支付等多种支付方式，支持支付宝、微信扫码支付、微信公众号支付、微信小程序支付等多种支付方式。

## 功能

- 支持个人收款系统，支持支付宝、微信支付、QQ等多种支付方式
- 支持文件夹放置收款码图片，支持批量导入收款码图片
- ~~支持订单管理，支持查看、导出、删除订单记录~~
- ~~支持用户管理，支持查看、导出、删除用户记录~~
- ~~支持支付记录管理，支持查看、导出、删除支付记录~~

## 测试地址

- 手动输入  <a href="https://xpay.lotl.cn">https://xpay.lotl.cn</a>
- 自动生成  <a href="https://xpay.lotl.cn/?&nickname=HelloWorld&money=20&serverId=测试服">https://xpay.lotl.cn/?&nickname=HelloWorld&money=20&serverId=测试服</a>

## 运行环境

- php >= 7.0
- mysql >= 5.7
- nginx/apache

## 目录结构

```
xpay-php
|—— api          // 接口目录
│   ├── alipay
│   ├── wxpay
│   ├── qqpay
│   ├── add.php     // 添加数据库订单和发送邮件
│   ├── config.php  // 暂未使用，主要配置在Xpay.php
│   ├── mail.php    // 静态邮件模板
│   ├── notif.php   // 回调接口
│   ├── Pay.php     // 订单信息类
│   ├── state.php   // 订单状态查询接口
│   ├── test.php    // 邮件发送测试接口
│   └── Xpay.php    // 核心文件，包含配置信息
├── assets
│   ├── css 
│   ├── fonts
│   ├── images
│   ├── js
│   ├── qr        // 收款码图片存放目录
├── lib          // 第三方库目录(暂未使用)
├── vendor       // composer 依赖目录
│   ├── composer
│   ├── phpmailer    // 邮件发送依赖
├──  index.php       // 支付页面
├──  readme.md       // 说明文档
```

## 支付流程
1. 用户输入订单信息，提交订单
2. 订单信息存入数据库，并发送邮件通知管理员
3. 跳转到支付页面，并请求回调接口
4. 管理员根据实际情况审核订单，并发起订单处理请求
5. 系统根据管理员的审核结果，进行订单操作
6. 支付完成后，回调接口通知系统订单支付成功

## 使用方法

### 下载代码

1. 创建数据库 ```xpay```
2. 导入数据结构 ```xpay.sql```
3. 修改配置信息 ```api/Xpay.php``` 

### 收款码

- 收款码图片存放目录 ```assets/qr```
- 每个支付方式存放对应收款码，例如 ```Alipay``` 目录下存放支付宝收款码图片，```Wechat``` 目录下存放微信收款码图片
- ```custom.png``` 是默认收款码，系统会自动识别固定金额的收款码如果找不到对应固定金额的收款码，则使用默认收款码
- 固定金额的收款码命名规则为 ```金额/x.png```，例如 ```10.00/x.png``` 金额必须为两位小数，```x``` 为任意字符，收款码数量任意，系统会随机获取该金额下的收款码

### 接口配置

- 支付页面 ```index.php```
- 支付接口 ```api/add.php```
- 支付回调接口 ```api/notif.php```

> 在一些特定场景
> ```index.php``` 可接收GET参数锁定订单信息防止用户修改，示例参考该文件内的注释




