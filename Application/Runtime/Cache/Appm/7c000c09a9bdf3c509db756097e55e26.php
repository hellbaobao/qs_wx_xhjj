<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>我的信息</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">


        <link rel="stylesheet" href="/Public/appm/css/mui.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/icons-extra.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/common.css" type="text/css"/>

        <style type="text/css">
            .mui-table-view{
                margin: 10px 0;
            }
        </style>

        <script type="text/javascript" src="/Public/appm/js/jquery-1.11.0.js"></script>
        <script type="text/javascript" src="/Public/appm/js/mui.min.js"></script>
        <script type="text/javascript">
            //启用双击监听
            mui.init({
                gestureConfig: {
                    doubletap: true
                },
            });
        </script>
        <?php echo ($Assigndata); ?>
        <script type="text/javascript" src="/Public/appm/js/common.js"></script>
        <script type="text/javascript" src="/Public/appm/js/setting.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <h1 class="mui-title header-a-l">我的信息</h1>	
            <!--<a  class="mui-icon mui-icon-chat mui-pull-right header-a" onclick="aHref('/index.php/Appm/index/my_notice')"></a>-->
        </header>

        <!--底部tabbar-->
    <script src="/Public/appm/js/mui.min.js"></script>
<script type="text/javascript">
    //启用双击监听
    mui.init({
        gestureConfig: {
            doubletap: true
        },
    });
</script>
<nav class="mui-bar mui-bar-tab">
    <a class="mui-tab-item" href="/index.php/Appm/notice/notice_list" id="Notice_btn">
        <span class="mui-icon mui-icon-extra mui-icon-extra-comment" id="notice_num">
        </span>
        <span class="mui-tab-label">通知</span>
    </a>
    <a class="mui-tab-item" href="/index.php/Appm/activity/activity_list" id="Activity_btn">
        <span class="mui-icon mui-icon-extra mui-icon-extra-class" id="activity_num">
        </span>
        <span class="mui-tab-label">活动</span>
    </a>
    <a class="mui-tab-item" href="/index.php/Appm/SellerIntegralGoods/item_list?type=0" id="SellerIntegralGoods_btn">
        <span class="mui-icon mui-icon-extra mui-icon-extra-gift" id="item_num">
        </span>
        <span class="mui-tab-label">积分</span>
    </a>
    <a class="mui-tab-item" href="/index.php/Appm/top/top_home" id="Top_btn">
        <span class="mui-icon mui-icon-extra mui-icon-extra-rank"></span>
        <span class="mui-tab-label">榜单</span>
    </a>
    <a class="mui-tab-item" href="/index.php/Appm/index/setting" id="Index_btn">
        <span class="mui-icon mui-icon-extra mui-icon-extra-custom "></span>
        <span class="mui-tab-label">我的</span>
    </a>
</nav>
<script type="text/javascript">
    mui('.mui-bar-tab').on('tap', 'a', function (e) {
        var targetTab = this.getAttribute('href');
        aHref(targetTab);
    });
</script>



    <!--主体部分-->
    <div class="mui-content">
        <ul class="mui-table-view mui-table-view-chevron">
            <li class="mui-table-view-cell mui-media">
                <a class="mui-navigate-right" onclick="aHref('/index.php/Appm/index/my_info')">
                    <img class="mui-media-object mui-pull-left head-img" id="head-img" src="<?php echo ($myInfo["tx_path"]); ?>">
                    <div class="mui-media-body">
                        <?php echo ($myInfo["realname"]); ?>&#12288;[<?php echo ($myInfo["address_name"]); ?>]
                        <p class='mui-ellipsis'>可消费积分：<?php echo ($myInfo["integral_num"]); ?>&#12288;经验值：<?php echo ($myInfo["exp_num"]); ?></p>
                    </div>
                </a>
            </li>
        </ul>
        <ul class="mui-table-view mui-table-view-chevron">
            <li class="mui-table-view-cell">
                <a onclick="aHref('/index.php/Appm/index/activ_list')" class="mui-navigate-right">我的活动</a>
            </li>
            <li class="mui-table-view-cell">
                <a onclick="aHref('/index.php/Appm/index/signin_list')" class="mui-navigate-right">我的签到</a>
            </li>
        </ul>
        <ul class="mui-table-view mui-table-view-chevron">
            <li class="mui-table-view-cell">
                <a onclick="aHref('/index.php/Appm/index/order_list')" class="mui-navigate-right">积分消费记录</a>
            </li>
<!--            <li class="mui-table-view-cell">
                <a onclick="aHref('/index.php/Appm/index/litem_list')" class="mui-navigate-right">已兑换券码</a>
            </li>-->
        </ul>
        <ul class="mui-table-view mui-table-view-chevron">
            <li class="mui-table-view-cell">
                <a onclick="aHref('/index.php/Appm/index/my_card')" class="mui-navigate-right">我的实体卡</a>
            </li>
        </ul>
        <ul class="mui-table-view mui-table-view-chevron">
            <li class="mui-table-view-cell">
                </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br>
            </li>
        </ul>
        <!--页面主内容区结束-->
    </div>
</body>

</html>