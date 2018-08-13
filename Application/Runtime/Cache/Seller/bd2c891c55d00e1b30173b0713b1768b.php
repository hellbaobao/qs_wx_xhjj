<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>梨园智能商圈</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="x-rim-auto-match" content="none">

        <link rel="stylesheet" href="/Public/seller/css/mui.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/seller/css/icons-extra.css" type="text/css"/>
        <style type="text/css">
            .mui-table-view{
                margin: 10px 0;
            }
            .mui-table-view .mui-media-object {
                line-height: 42px;
                max-width: 60px;
                height: 60px;
            }
        </style>

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
        <link rel="stylesheet" href="/Public/appm/css/common.css">
        <script src="/Public/seller/js/common.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Seller/seller/seller_home')"></a>
            <h1 class="mui-title header-a-l">收取积分二维码</h1>	
        </header>

        <!--主体部分-->
        <div class="mui-content">
            <div class="mui-row">
                <div class="mui-card">
                    <div class="mui-card-content">
                        <div class="mui-card-content-inner fontred">
                            扫描此二维码直接给商家转账积分
                        </div>
                    </div>
                </div>
            </div>
            <div class="mui-row">
                <div class="mui-card">
                    <div class="mui-card-header"><?php echo ($sellerInfo["name"]); ?></div>
                    <div class="mui-card-content">
                        <div class="mui-card-content-inner">
                            <p>
                                <img src="../../../<?php echo ($sellerInfo["transfer_qrcode_path"]); ?>" style="width:100%;height:auto;">
                            </p>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!--页面主内容区结束-->
    </body>

</html>