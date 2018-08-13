<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link href="/Public/seller/css/mui.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/Public/seller/css/common.css">

        <script src="/Public/seller/js/jquery-1.11.0.js"></script>
        <script src="/Public/seller/js/mui.min.js"></script>

        <script type="text/javascript">
            //启用双击监听
            mui.init({
                gestureConfig: {
                    doubletap: true
                },
            });
        </script>
        <?php echo ($Assigndata); ?>
        <script src="/Public/seller/js/common.js"></script>
        <script src="/Public/seller/js/login.js"></script>
    </head>

    <body>

        <div class="mui-content">
            <!--页面部分-->
            <div class="mui-card">
                <div class="mui-card-content">
                    <div class="mui-card-content-inner" style="text-align: center;">
                        <img src="<?php echo ($headimgurl); ?>" style="height:100px;width:100px; margin: 0 auto;">
                        <p>欢迎【<?php echo ($nickname); ?>】进入</p>
                        <p>您还不是梨园智能商圈社区卡商家用户</p>
                        <button type="button" class="mui-btn mui-btn-primary mui-btn-block" onclick="aHref('/index.php/Seller/Index/apply')">快速申请</button>
                        <button type="button" class="mui-btn mui-btn-block" onclick="aHref('/index.php/Seller/Index/wechat_binding')">已有商家账户，立即绑定</button>
                        <button type="button" class="mui-btn-danger mui-btn-block" onclick="aHref('/index.php/Seller/Index/ys')">演示帐号</button>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>