<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>排行榜</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/appm/css/mui.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/icons-extra.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/common.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/top.css" type="text/css"/>


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
        <script src="/Public/appm/js/common.js"></script>
        <script src="/Public/appm/js/top_list.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Appm/top/top_home')"></a>
            <h1 class="mui-title header-a-l" id="top_name">本社区用户榜</h1>	
        </header>
        <!--主体部分-->
        <div class="mui-content">

            <!--页面部分-->
            <div class="mui-row">
                <div class="mui-card">
                    <div class="mui-card-header mui-card-media top_card_hearder_bg">
                        <div class="mui-card-link" id="topName">
                            <b>①</b>&nbsp;本社区用户榜
                        </div>
                        <div class="mui-card-link" id="tab">
                            <div id="tab0" class="tabbtn" onclick="changeTab(0)">本季度</div>
                            <div id="tab1" class="tabbtn"  onclick="changeTab(1)">上季度</div>
                            <div id="tab2" class="tabbtn"  onclick="changeTab(2)">总榜单</div>
                        </div>
                    </div>
                    <div class="mui-card-content">
                        <div class="mui-card-content-inner" id="topList">
<!--                            <div class="mui-row row_list">
                                <div class="row_list_jp jp01"></div>
                                <div class="row_list_tx">
                                    <img src="/Public/appm/img/tx_icon/3.jpg">
                                </div>
                                <span class="row_list_title">京客隆超市</br><p>云景东里社区</p></span>
                                <span class="row_list_integral">90000分</span>
                            </div>
                            <div class="mui-row row_list">
                                <div class="row_list_jp jp02"></div>
                                <div class="row_list_tx">
                                    <img src="/Public/appm/img/tx_icon/4.jpg">
                                </div>
                                <span class="row_list_title">京客隆超市</br><p>云景东里社区</p></span>
                                <span class="row_list_integral">90000分</span>
                            </div>
                            <div class="mui-row row_list">
                                <div class="row_list_jp jp03"></div>
                                <div class="row_list_tx">
                                    <img src="/Public/appm/img/tx_icon/5.jpg">
                                </div>
                                <span class="row_list_title">京客隆超市</br><p>云景东里社区</p></span>
                                <span class="row_list_integral">90000分</span>
                            </div>
                            <div class="mui-row row_list">
                                <div class="row_list_jp"></div>
                                <div class="row_list_tx">
                                    <img src="/Public/appm/img/tx_icon/5.jpg">
                                </div>
                                <span class="row_list_title">张晓炜</br><p>13521447599</p></span>
                                <span class="row_list_integral">9000积分</span>
                            </div>

                            <div class="mui-row row_list">
                                <div class="row_list_jp jp01"></div>
                                <div class="row_list_tx">
                                    <span class="mui-icon mui-icon-extra mui-icon-extra-hotel" style="font-size: 36px;"></span>
                                </div>
                                <span class="row_list_title">云景东里社区</br><p>举办活动35场</p></span>
                                <span class="row_list_integral">累计签到900人次</span>
                            </div>-->


                        </div>
                    </div>
                </div>          

            </div>
            <!--页面部分end-->
        </div>
    </body>

</html>