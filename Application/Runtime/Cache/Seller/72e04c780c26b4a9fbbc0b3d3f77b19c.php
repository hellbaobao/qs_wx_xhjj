<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>梨园智能商圈</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/seller/css/mui.min.css">
        <link rel="stylesheet" href="/Public/seller/css/icons-extra.css">
        <link rel="stylesheet" href="/Public/seller/css/common.css">
        <style type="text/css">
            .mui-card{
                background-color: #fff;
            }
            .seller_s{
                height:50%;width:4px;margin-right: 2px;background-color: #7cacff;
            }
            .item_list{
                margin: 4px 3%;background-color:none;width:94%;
            }
            .item_list_img{
                margin-bottom:4px; background-color: red;float: right;width: 70px;height:70px;
            }
            .item_list_word{
                height: 35px;;line-height: 35px;
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
        <link rel="stylesheet" href="/Public/seller/css/common.css">
        <script type="text/javascript" src="/Public/seller/js/common.js"></script>
    </head>

    <body>

        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Seller/prom/prom_manage')"></a>
             <h1 class="mui-title header-a-l">广告详情</h1>
        </header>

        <!--主体部分-->

        <div class="mui-content" style="padding-top: 45px;background-color: #fefefe;">

            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link mui-ellipsis"><div class="seller_s"></div><?php echo ($promInfo["title"]); ?></div>
                    <p class="mui-card-link">
                        <?php if($promInfo["status"] == 1): ?><button class="mui-btn mui-btn-danger mui-btn-outlined" onclick="lowerFrame('<?php echo ($data["goodsInfo"]["id"]); ?>', 2)">下线</button>
                        <?php else: ?>
                            <button class="mui-btn mui-btn-primary mui-btn-outlined" onclick="aHref('/index.php/Seller/prom/prom_edit?id=<?php echo ($promInfo["id"]); ?>')">修改</button><?php endif; ?>
                    </p>
                </div>
                <div class="mui-card-content">
                    <img src="../../../<?php echo ($promInfo["pics"]["data"]["0"]["url"]); ?>" style="width:100%;height:auto;">
                </div>
            </div>
            
            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>广告详情</div>
                </div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner font666">
                        <?php echo ($promInfo["content"]); ?>
                    </div>
                </div>
            </div>

           

        </div>

    </div>
</body>

</html>