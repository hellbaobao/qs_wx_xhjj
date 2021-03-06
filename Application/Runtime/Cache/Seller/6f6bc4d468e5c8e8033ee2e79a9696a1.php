<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>智能商圈广告管理</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/seller/css/mui.min.css">
        <link rel="stylesheet" href="/Public/seller/css/icons-extra.css">
        <link rel="stylesheet" href="/Public/seller/css/common.css">
        <style type="text/css">
            .seller_s{
                height:50%;width:4px;margin-right: 2px;background-color: #7cacff;
            }
            .item_list{
                margin: 4px 3%;background-color:none;width:94%;height:70px;
            }
            .item_list_img{
                margin-left: 4px;background-color: red;float: right;width: 140px;height: 70px;
            }
            .item_list_word{
                /*height: 35px;;line-height: 35px;*/
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
        <script type="text/javascript" src="/Public/seller/js/prom_manage.js"></script>
    </head>

    <body>

        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Seller/seller/seller_home')"></a>
            <h1 class="mui-title header-a-l">广告管理</h1>
            <a href="#popover" id="openPopover" class="mui-icon mui-icon-extra mui-icon-extra-regist mui-pull-right header-a"></a>
        </header>


        <!--右上角弹出菜单-->
        <div id="popover" class="mui-popover" style="width:100px;">
            <ul class="mui-table-view">
                <li class="mui-table-view-cell" onclick="aHref('/index.php/Seller/prom/prom_manage')">
                    <a href="javascript:void(0)" class="mui-pull-left" >
                        <span style="font-size: 14px;padding-left: 5px;">全部</span>
                    </a>
                </li>
                <li class="mui-table-view-cell">
                    <a href="#" class="mui-pull-left" onclick="aHref('/index.php/Seller/prom/prom_manage?type=1')">
                        <span style="font-size: 14px;padding-left: 5px;">已发布</span>
                    </a>
                </li>
                <li class="mui-table-view-cell" onclick="aHref('/index.php/Seller/prom/prom_manage?type=0')">
                    <a href="#" class="mui-pull-left">
                        <span style="font-size: 14px;padding-left: 5px;">正在审核</span>
                    </a>
                </li>
                <li class="mui-table-view-cell" onclick="aHref('/index.php/Seller/prom/prom_manage?type=3')">
                    <a href="#" class="mui-pull-left">
                        <span style="font-size: 14px;padding-left: 5px;">已下架</span>
                    </a>
                </li>
            </ul>
        </div>


        <!--主体部分-->

        <div class="mui-content" style="padding-top: 45px;background-color: #fefefe;">

            <div class="mui-card" style="margin-left:0;margin-right:0;">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>广告</div>
                    <p class="mui-card-link" id="status1">已发布:3</p>
                    <p class="mui-card-link" id="status02">正在审核:3</p>
                    <p class="mui-card-link" id="status3">已下架:3</p>
                </div>
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>统计</div>
                    <p class="mui-card-link" id="count">数量:3</p>
                    <p class="mui-card-link" id="allReadNum">浏览:3000</p>
                    <p class="mui-card-link" id="integral_num">积分:3000</p>
                </div>
            </div>
            <div class="mui-content-padded" id="promBtn">
                <button type="button" class="mui-btn mui-btn-warning mui-btn-block" onclick="changeConfirm()">兑换广告发布</button>
            </div>
            <div class="mui-row" id="myPromList">

<!--                <div class="mui-card" onclick="aHref('/index.php/Seller/prom/prom_detail')">
                    <div class="mui-card-header">
                        <div class="mui-card-link"><div class="seller_s"></div>已发布</div>
                        <p class="mui-card-link">浏览量：1000</p>
                    </div>
                    <div class="mui-card-content">
                        <div class="mui-card-content">
                            <div class="item_list">
                                <div class="item_list_img"></div>
                                <div class="item_list_word">
                                    <p class="mui-ellipsis font333">信息化推进办公室张彦合同付款信息化</p>
                                    <p class="mui-ellipsis-2">信息化推进办公室张彦合同付款信息化推进办公室张彦合同付款信息化推进办公室张彦合同付款</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</body>
</html>