<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>已兑换券码</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="x-rim-auto-match" content="none">

        <link rel="stylesheet" href="/Public/appm/css/mui.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/icons-extra.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/common.css" type="text/css"/>
        <style type="text/css">
            .seller_s{
                height:50%;width:4px;margin-right: 2px;background-color: #7cacff;
            }
            .item_list{
                margin: 4px 3%;background-color:none;width:94%;height:70px;
            }
            .item_list_img{
                background-color: red;float: right;width: 70px;height: 70px;
            }
            .item_list_word{
                height: 35px;;line-height: 35px;
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
        <script src="/Public/appm/js/litem_list.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Appm/index/setting')"></a>
            <h1 class="mui-title header-a-l">已兑换券码</h1>	
        </header>

    <!--主体部分-->
    <div class="mui-content">
        <div class="mui-row">
            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>王师傅店铺</div>
                    <p class="mui-card-link">距离1.5km</p>
                </div>
                <div class="mui-card-content">
                    <div class="item_list">
                        <div class="item_list_img"></div>
                        <div class="item_list_word">
                            <span class="">礼品卡券面值30元</span>
                        </div>
                        <div class="item_list_word">
                            <span class="fontred">￥30元+300积分</span>
                            <span class="font888">原价：￥45</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>王师傅店铺</div>
                    <p class="mui-card-link">距离1.5km</p>
                </div>
                <div class="mui-card-content">
                    <div class="item_list">
                        <div class="item_list_img"></div>
                        <div class="item_list_word">
                            <span class="">礼品卡券面值30元</span>
                        </div>
                        <div class="item_list_word">
                            <span class="fontred">￥30元+300积分</span>
                            <span class="font888">原价：￥45</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>王师傅店铺</div>
                    <p class="mui-card-link">距离1.5km</p>
                </div>
                <div class="mui-card-content">
                    <div class="item_list">
                        <div class="item_list_img"></div>
                        <div class="item_list_word">
                            <span class="">礼品卡券面值30元</span>
                        </div>
                        <div class="item_list_word">
                            <span class="fontred">￥30元+300积分</span>
                            <span class="font888">原价：￥45</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--页面主内容区结束-->
</body>

</html>