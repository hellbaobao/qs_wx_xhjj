<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>交易详情</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/Dxt/css/mui.min.css">
        <link rel="stylesheet" href="/Public/Dxt/css/icons-extra.css">
        <link rel="stylesheet" href="/Public/Dxt/css/common.css">
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


        <script src="/Public/Dxt/js/jquery-1.11.0.js"></script>
        <script src="/Public/Dxt/js/mui.min.js"></script>
        <script type="text/javascript">
            //启用双击监听
            mui.init({
                gestureConfig: {
                    doubletap: true
                },
            });
        </script>
        <?php echo ($Assigndata); ?>
        <link rel="stylesheet" href="/Public/Dxt/css/common.css">
        <script type="text/javascript" src="/Public/Dxt/js/common.js"></script>
        <script type="text/javascript" src="/Public/Dxt/js/trading_detail.js"></script>
    </head>

    <body>

        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Dxt/index/order_list')"></a>
            <h1 class="mui-title header-a-l">积分商品交易详情</h1>
        </header>

        <!--主体部分-->

        <div class="mui-content" style="padding-top: 45px;background-color: #fefefe;">

            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>
                        <h4>收取积分</h4>
                    </div>
                    <div class="mui-card-link">
                        <h4 style="float:right;">+<?php echo ($data["trading_integral"]); ?></h4>
                    </div>
                </div>
                <div class="mui-card-content">

                    <div class="mui-card-content-inner">
                        <div class="mui-row">
                            <div class="mui-col-xs-6">
                                <p class="mui-h5 mui-ellipsis">当前状态</p>
                            </div>
                            <div class="mui-col-xs-6 mui-text-right">
                                <span class="mui-h5">
                                    <?php if($data["status"] == 1): ?>交易成功
                                        <?php else: ?>
                                        交易失败<?php endif; ?>
                                </span>
                            </div>
                        </div>
                        <div class="mui-row">
                            <div class="mui-col-xs-6">
                                <p class="mui-h5 mui-ellipsis">收&nbsp;&nbsp;款&nbsp;&nbsp;方</p>
                            </div>
                            <div class="mui-col-xs-6 mui-text-right">
                                <span class="mui-h5"><?php echo ($data["title"]); ?></span>
                            </div>
                        </div>
                        <div class="mui-row">
                            <div class="mui-col-xs-6">
                                <p class="mui-h5 mui-ellipsis">客户名称</p>
                            </div>
                            <div class="mui-col-xs-6 mui-text-right">
                                <span class="mui-h5"><?php echo ($data["appUserInfo"]["realname"]); ?>(<?php echo ($data["appUserInfo"]["tel"]); ?>)</span>
                            </div>
                        </div>
                        <div class="mui-row">
                            <div class="mui-col-xs-6">
                                <p class="mui-h5 mui-ellipsis">交易时间</p>
                            </div>
                            <div class="mui-col-xs-6 mui-text-right">
                                <span class="mui-h5"><?php echo ($data["trading_time"]); ?></span>

                            </div>
                        </div>
                        <div class="mui-row">
                            <div class="mui-col-xs-6">
                                <p class="mui-h5 mui-ellipsis">交易方式</p>
                            </div>
                            <div class="mui-col-xs-6 mui-text-right">
                                <span class="mui-h5"><?php echo ($data["tradingMethod"]); ?></span>

                            </div>
                        </div>
                        <div class="mui-row">
                            <div class="mui-col-xs-6">
                                <p class="mui-h5 mui-ellipsis">交易单号</p>
                            </div>
                            <div class="mui-col-xs-6 mui-text-right">
                                <span class="mui-h5"><?php echo ($data["trading_number"]); ?></span>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>




    </body>

</html>