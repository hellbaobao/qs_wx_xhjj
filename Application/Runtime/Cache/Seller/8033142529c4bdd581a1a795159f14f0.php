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
        <link rel="stylesheet" href="/Public/seller/css/common.css" type="text/css"/>

        <style type="text/css">
            .mui-table-view{
                margin: 10px 0;
            }
        </style>

        <script type="text/javascript" src="/Public/seller/js/jquery-1.11.0.js"></script>
        <script type="text/javascript" src="/Public/seller/js/mui.min.js"></script>
        <script type="text/javascript">
            //启用双击监听
            mui.init({
                gestureConfig: {
                    doubletap: true
                },
            });
        </script>
        <?php echo ($Assigndata); ?>
        <script type="text/javascript" src="/Public/seller/js/common.js"></script>
        <script type="text/javascript" src="/Public/seller/js/seller_home.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <h1 class="mui-title header-a-l">梨园智能商圈</h1>
        </header>

        <!--主体部分-->
        <div class="mui-content">
            <div class="mui-row">
                <ul class="mui-table-view mui-table-view-chevron">
                    <li class="mui-table-view-cell mui-media">
                        <a class="mui-navigate-right" onclick="aHref('/index.php/Seller/seller/my_info')">
                            <img class="mui-media-object mui-pull-left head-img" id="head-img" src="../../../<?php echo ($sellerInfo["tx_path"]); ?>">
                            <div class="mui-media-body">
                                <?php echo ($sellerInfo["name"]); ?>&#12288;[<?php echo ($sellerInfo["address_name"]); ?>]
                                <p class='mui-ellipsis'>
                                    <!--排名:<?php echo ($sellerInfo["top_num"]); ?>&#12288;-->
                                    积分:<?php echo ($sellerInfo["integral_num"]); ?>&#12288;
                                    经验:<?php echo ($sellerInfo["exp_num"]); ?></p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mui-row">
                <div class="mui-col-sm-6 mui-col-xs-6">
                    <div class="mui-content-padded">
                        <button type="button" class="mui-btn mui-btn-success mui-btn-block" onclick="aHref('/sys')">扫一扫</button>
                    </div>
                </div>
                <div class="mui-col-sm-6 mui-col-xs-6">
                    <div class="mui-content-padded">
                        <button type="button" class="mui-btn mui-btn-success mui-btn-block" onclick="aHref('/index.php/Seller/seller/transfer_qrcode')">收取码</button>
                    </div>
                </div>
            </div>
            <div class="mui-row">
                <div class="mui-col-sm-12 mui-col-xs-12">
                    <div class="mui-content-padded">
                        <button type="button" class="mui-btn mui-btn-warning mui-btn-block" onclick="aHref('/index.php/Seller/seller/my_qrcode')">商家二维码</button>
                    </div>
                </div>
            </div>
            <div class="mui-row">
                <ul class="mui-table-view mui-table-view-chevron">
                    <li class="mui-table-view-cell">
                        <a onclick="aHref('/index.php/Seller/goods/goods_manage')" class="mui-navigate-right">
                            <span class="mui-icon mui-icon-pengyouquan"></span>
                            积分商品
                        </a>
                    </li>

                </ul>
            </div>
            <div class="mui-row">
                <ul class="mui-table-view mui-table-view-chevron">
                    <li class="mui-table-view-cell">
                        <a onclick="aHref('/index.php/Seller/trading/trading_list')" class="mui-navigate-right">
                            <span class="mui-icon mui-icon-pengyouquan"></span>
                            兑换记录
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mui-row">
                <ul class="mui-table-view mui-table-view-chevron">
                    <li class="mui-table-view-cell">
                        <a onclick="aHref('/index.php/Seller/top/top_home')" class="mui-navigate-right">
                            <span class="mui-icon mui-icon-pengyouquan"></span>
                            排行榜
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mui-row">
                <ul class="mui-table-view mui-table-view-chevron">
                    <li class="mui-table-view-cell">
                        <a onclick="aHref('/index.php/Seller/prom/prom_manage')" class="mui-navigate-right">
                            <span class="mui-icon mui-icon-pengyouquan"></span>
                            广告发布
                        </a>
                    </li>
                </ul>
            </div>
            <!--页面主内容区结束-->
        </div>
    </body>

</html>