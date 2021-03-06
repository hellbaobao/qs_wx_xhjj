<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>兑换记录</title>
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
        <script type="text/javascript" src="/Public/seller/js/trading_list.js"></script>
    </head>

    <body>

        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Seller/seller/seller_home')"></a>
            <h1 class="mui-title header-a-l">兑换记录</h1>
        </header>

        <!--主体部分-->

        <div class="mui-content" style="padding-top: 45px;background-color: #fefefe;">

            <div class="mui-row" onclick="aHref('/index.php/Seller/seller/my_info');">
                <ul class="mui-table-view mui-table-view-chevron">
                    <li class="mui-table-view-cell mui-media">
                        <a class="mui-navigate-right">
                            <img class="mui-media-object mui-pull-left head-img" id="head-img" src="/<?php echo ($data["sellerInfo"]["tx_path"]); ?>">
                            <div class="mui-media-body">
                                <?php echo ($data["sellerInfo"]["name"]); ?>&#12288;[<?php echo ($data["sellerInfo"]["com_name"]); ?>]
                                <p class='mui-ellipsis'>积分：<?php echo ($data["sellerInfo"]["integral_num"]); ?>&nbsp;&nbsp;&nbsp;经验：<?php echo ($data["sellerInfo"]["exp_num"]); ?></p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>
                        <h4>兑换记录</h4>
                    </div>
                </div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner">
                        <div class="mui-row">
                            <ul class="mui-table-view">
                                <?php if(is_array($data["exchangeLists"])): foreach($data["exchangeLists"] as $key=>$value): ?><li class="mui-table-view-cell" onclick="aHref('/index.php/Seller/trading/trading_detail/exchange_id/<?php echo ($value["id"]); ?>')">
                                    <a class="mui-navigate-right">
                                        <span class="mui-badge mui-badge-danger">消费：<?php echo ($value["exchange_integral"]); ?>分</span>
                                        <?php echo ($value["realname"]); ?>
                                    </a>
                                </li><?php endforeach; endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>