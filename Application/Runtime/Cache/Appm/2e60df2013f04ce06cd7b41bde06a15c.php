<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/appm/css/mui.min.css">
        <link rel="stylesheet" href="/Public/appm/css/icons-extra.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/common.css">
        <link rel="stylesheet" href="/Public/appm/css/notice_detail.css">
        <script src="/Public/appm/js/jquery-1.11.0.js"></script>
        <script src="/Public/appm/js/mui.min.js"></script>
        <script type="text/javascript">
            //启用双击监听
            mui.init({
                gestureConfig: {
                    doubletap: true,
                },
            });
        </script>
        <?php echo ($Assigndata); ?>
        <script src="/Public/appm/js/common.js"></script>
        <script src="/Public/appm/js/notice_detail.js"></script>
    </head>

    <body>
        <!--底部-->
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



        <div class="mui-content">
            <!--顶部banner图 开始-->
            <div id="kr-article-banner" class="kr-article-banner">
                <div id="kr-article-cover" class="kr-article-cover">
                    <img id="kr-article-pic" src="#">
                </div>
                <h2 id="kr-article-title" class="kr-article-title"></h2>
            </div>
            <!--顶部banner图 结束-->

            <div class="kr-article-content">
                <!-- 文章作者、发布时间等信息 -->
                <div class="kr-article-meta">
                    <div id="kr-article-author" class="kr-article-author"></div>
                    <div class="kr-article-text">发表于</div>
                    <div id="kr-article-time" class="kr-article-time"></div>
                </div>
                <!--文章详细内容-->
                <div id="kr-article-article" class="kr-article-article" style="background-color: #fff;"></div>
            </div>
        </div>

    </body>

</html>