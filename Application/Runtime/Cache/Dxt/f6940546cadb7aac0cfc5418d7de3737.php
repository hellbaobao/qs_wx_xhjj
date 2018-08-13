<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>积分消费记录</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="x-rim-auto-match" content="none">

        <link rel="stylesheet" href="/Public/dxt/css/mui.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/dxt/css/icons-extra.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/dxt/css/common.css" type="text/css"/>
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

        <script src="/Public/dxt/js/jquery-1.11.0.js"></script>
        <script src="/Public/dxt/js/mui.min.js"></script>
        <script type="text/javascript">
            //启用双击监听
            mui.init({
                gestureConfig: {
                    doubletap: true
                },
            });
        </script>
        <?php echo ($Assigndata); ?>
        <link rel="stylesheet" href="/Public/dxt/css/common.css">
        <script src="/Public/dxt/js/common.js"></script>
        <script src="/Public/dxt/js/order_list.js"></script>
    </head>
    <nav class="mui-bar mui-bar-tab">
    <a class="mui-tab-item" onclick="aHref('/index.php/Dxt/notice/notice_list')" id="Notice_btn">
        <span class="mui-icon mui-icon-extra mui-icon-extra-comment" id="notice_num">
        </span>
        <span class="mui-tab-label">通知</span>
    </a>
    <a class="mui-tab-item" onclick="aHref('/index.php/Dxt/activity/activity_list')" id="Activity_btn">
        <span class="mui-icon mui-icon-extra mui-icon-extra-class" id="activity_num">
        </span>
        <span class="mui-tab-label">活动</span>
    </a>
    <a class="mui-tab-item" onclick="aHref('/index.php/Dxt/SellerIntegralGoods/item_list?type=0')" id="SellerIntegralGoods_btn">
        <span class="mui-icon mui-icon-extra mui-icon-extra-gift" id="item_num">
        </span>
        <span class="mui-tab-label">积分</span>
    </a>
    <a class="mui-tab-item" onclick="aHref('/index.php/Dxt/top/top_home')" id="Top_btn">
        <span class="mui-icon mui-icon-extra mui-icon-extra-rank"></span>
        <span class="mui-tab-label">榜单</span>
    </a>
    <a class="mui-tab-item" onclick="aHref('/index.php/Dxt/index/setting')" id="Index_btn">
        <span class="mui-icon mui-icon-extra mui-icon-extra-custom "></span>
        <span class="mui-tab-label">我的</span>
    </a>
</nav>


    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Dxt/index/setting')"></a>
            <h1 class="mui-title header-a-l">积分消费记录</h1>	
        </header>

        <!--主体部分-->
        <div class="mui-content">
            <div class="mui-row">
                <ul class="mui-table-view mui-table-view-chevron">
                    <li class="mui-table-view-cell mui-media">
                        <a class="mui-navigate-right">
                            <img class="mui-media-object mui-pull-left head-img" id="head-img" src="<?php echo ($appUserInfo["txPath"]); ?>">
                            <div class="mui-media-body">
                                <?php echo ($appUserInfo["userName"]); ?>&#12288;[<?php echo ($appUserInfo["comName"]); ?>]
                                <p class='mui-ellipsis'>累计兑换：<?php echo ($appUserInfo["tradingCount"]); ?></p>
                                <p class='mui-ellipsis'>已消费：<?php echo ($appUserInfo["consumedIntegral"]); ?>分&#12288;剩余：<?php echo ($appUserInfo["currentIntegral"]); ?>分</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mui-row">
                <ul class="mui-table-view" id="tradingList">
                    <!--<li class="mui-table-view-cell">
                        <a class="mui-navigate-right">
                            <span class="mui-badge mui-badge-danger">消费：200分</span>
                            王师傅马克杯（任意一款）
                        </a>
                    </li> -->
                </ul>
                <!--动态加载模块-->
                <button id="loadMore" type="button" data-loading-icon="mui-spinner mui-spinner-custom" style="border:0px;width: 100%;color:#999;padding: 12px 0px;" class="mui-btn" sth onclick="loadMore()"></button>
                <input type="hidden" id="page" value="1">
            </div>
        </div>



        <!--页面主内容区结束-->
    </body>

</html>