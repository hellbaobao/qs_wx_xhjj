<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>我的实体卡</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="x-rim-auto-match" content="none">

        <link rel="stylesheet" href="/Public/appm/css/mui.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/icons-extra.css" type="text/css"/>
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

        <script src="/Public/appm/js/jquery-1.11.0.js"></script>
        <script src="/Public/appm/js/mui.min.js"></script>
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
        <script src="/Public/appm/js/common.js"></script>
        <script src="/Public/appm/js/my_card.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Appm/index/setting')"></a>
            <h1 class="mui-title header-a-l">我的实体卡</h1>	
        </header>

    <!--主体部分-->
    <div class="mui-content">
        <?php if($myInfo["iccard_num"] == 0): ?><div class="mui-row">
                <div class="mui-card">
                    <div class="mui-card-content">
                        <div class="mui-card-content-inner">
                            您还没有申领实体卡，请到本社区管理员处，免费领取实体卡
                        </div>
                    </div>
                </div>
            </div><?php endif; ?>
        <div class="mui-row">
            <div class="mui-card">
                <div class="mui-card-header">请展示此二维码进行消费</div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner">
                        <p>
                            <img src="/<?php echo ($myInfo["qrcode_path"]); ?>" style="width:100%;height:auto;">
                        </p>
                    </div>
                </div>
                <?php if($myInfo["iccard_num"] != 0): ?><div class="mui-card-footer">
                        卡号：<?php echo ($myInfo["iccard_num"]); ?>
                    </div><?php endif; ?>
            </div>
        </div>



    </div>
    <!--页面主内容区结束-->
</body>

</html>