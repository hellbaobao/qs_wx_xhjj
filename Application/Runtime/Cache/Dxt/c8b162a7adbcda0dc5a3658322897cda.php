<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>活动详情</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/dxt/css/mui.min.css">
        <link rel="stylesheet" href="/Public/dxt/css/icons-extra.css">
        <link rel="stylesheet" href="/Public/dxt/css/activity.css">

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
        <script src="/Public/dxt/js/activity_detail.js"></script>
    </head>

    <body>

        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Dxt/activity/activity_list')"></a>
            <h1 id="title" class="mui-title header-a-l">活动详情</h1>
        </header>

        <!--底部-->
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


        <div class="mui-content">

            <!--页面部分-->
            <div class="mui-row">
                <div class="mui-card">
                    <div class="mui-card-header mui-card-media">
                        <img src="/Public/appm/img/linkman.png" />
                        <div class="mui-media-body" id="activ_title">
                            <!--活动标题
                            <p>who 发表于 2016-06-30 15:30</p>-->
                        </div>
                    </div>
                </div>

                <div class="mui-card">
                    <div class="mui-card-header mui-card-media" id="activ_first_pic" style="height:40vw;position:relative;"></div>
                    <div class="mui-card-content">
                        <div class="mui-card-content-inner">
                            <div>

                                <span class="mui-badge mui-badge-primary font14" style="float: left;" id="integral"></span>
                                <span class="font14" id="address_name_a_start_date">&#12288;云景东里/2018.09.12</span>
                                <span class="mui-icon mui-icon-extra mui-icon-extra mui-icon-extra-heart font14 m-float-r" style="line-height: 1.5;" id="like_num">&nbsp;人收藏</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mui-content-padded" id="joinLikeBtn">
                    <button type="button" class="mui-btn mui-btn-success mui-btn-block">收藏</button>
                </div>
                <div class="mui-card">
                    <div class="mui-card-header">活动信息</div>
                    <div class="mui-card-content">
                        <div class="mui-card-content-inner">
                            <ul class="mui-table-view">
                                <li class="mui-table-view-divider font333">开始时间<span class="m-float-r .m-padding-lr10" id="start_time">23423&#12288;</span></li>
                                <li class="mui-table-view-divider font333">结束时间<span class="m-float-r .m-padding-lr10" id="end_time">23423&#12288;</span></li>
                                <li class="mui-table-view-divider font333">活动地点<span class="m-float-r .m-padding-lr10" id="address">23423&#12288;</span></li>
                                <li class="mui-table-view-divider font333">签到次数<span class="m-float-r .m-padding-lr10" id="signin_time">23423&#12288;</span></li>
                                <li class="mui-table-view-divider font333">发起人<span class="m-float-r .m-padding-lr10" id="initiator">23423&#12288;</span></li>
                                <li class="mui-table-view-divider font333">联系人<span class="m-float-r .m-padding-lr10" id="link_name">23423&#12288;</span></li>
                                <li class="mui-table-view-divider font333">联系方式<span class="m-float-r .m-padding-lr10" id="link_tel">23423&#12288;</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mui-card">
                    <div class="mui-card-header">活动详情</div>
                    <div class="mui-card-content">
                        <!--主体-->

                        <div class="listdigest m-padding-lr10" id="activ_content">
                            <!--内容区							
                            -->
                        </div>
                    </div>
                    <div class="mui-card-footer">
                        <div class="mui-card-link"><span id="read_num">浏览45次</span></div>
                        <a class="mui-card-link"></a>
                        <div class="mui-card-link"><span class="mui-icon mui-icon-chat font14" id="comm_num">&nbsp;123人评论</span></div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>