<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>操作指南</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="x-rim-auto-match" content="none">

        <link rel="stylesheet" href="/Public/appm/css/mui.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/mui.picker.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/icons-extra.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/common.css" type="text/css"/>
        <script type="text/javascript" src="/Public/appm/js/jquery-1.11.0.js"></script>
        <script type="text/javascript" src="/Public/appm/js/mui.min.js"></script>
        <script type="text/javascript">
            (function ($, doc) {
                $.init();
            })(mui, document);

        </script>
        <?php echo ($Assigndata); ?>
        <script src="/Public/appm/js/common.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <h1 class="mui-title header-a-l">梨园智能商圈-操作指南</h1>	
        </header>

        <!--页面主内容区开始-->
        <div class="mui-content">
            <div class="mui-row">
                <div class="mui-card">
                    <div class="mui-card-content">
                        <div class="mui-card-content-inner fontred">
                            欢迎使用，您可以查看操作指南进行操作。
                        </div>
                    </div>
                </div>
            </div>
            <div class="mui-row">
                <div class="mui-content-padded">
                    <button type="button" class="mui-btn mui-btn-primary mui-btn-block">实体卡用户</button>
                    <button type="button" class="mui-btn mui-btn-success mui-btn-block">虚拟卡用户</button>
                    <button type="button" class="mui-btn mui-btn-warning mui-btn-block">商家用户</button>
                    <button type="button" class="mui-btn mui-btn-royal mui-btn-block">社区管理员用户</button>
                </div>
            </div>
            <!--页面主内容区结束-->
        </div>
    </body>

</html>