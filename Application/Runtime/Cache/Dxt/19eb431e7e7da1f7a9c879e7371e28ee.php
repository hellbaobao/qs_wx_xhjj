<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>我的活动</title>
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
            .row_btn6{
                width: 50%;height: 100%;font-size: 15px;float: left;border: 0px;
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
        <script src="/Public/dxt/js/activ_list.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Dxt/index/setting')"></a>
            <h1 class="mui-title header-a-l">我的活动</h1>	
        </header>

    <!--主体部分-->
    <div class="mui-content">
        <div class="mui-row">
            <ul class="mui-table-view mui-table-view-chevron">
                <li class="mui-table-view-cell mui-media">
                    <a class="mui-navigate-right" >
                        <img class="mui-media-object mui-pull-left head-img" id="head-img" src="<?php echo ($myInfo["tx_path"]); ?>">
                        <div class="mui-media-body">
                            <?php echo ($myInfo["realname"]); ?>&#12288;[<?php echo ($myInfo["address_name"]); ?>]
                            <p class='mui-ellipsis'>积分：<?php echo ($myInfo["integral_num"]); ?></p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="mui-row">
            <div class="tab-div" id="tabActiv">
                <button id="activBtn0" type="button" class="mui-btn row_btn6 mui-btn-warning" onclick="selectType(0)">收藏的活动<span id="activNum0"></span></button>
                <button id="activBtn1" type="button" class="mui-btn row_btn6" onclick="selectType(1)">参加的活动<span id="activNum1"></span></button>
            </div>
        </div>

        <div class="mui-row">
            <ul class="mui-table-view" id="activityList">
                <div class="mui-card">
                    <div class="mui-card-header mui-card-media" style="height:40vw;position:relative;background-image:url(/Public/Upload/activity/2018-04-11/5acd833d494d2.PNG)" onclick="getActivDetail(' + data.data[i]['id'] + ')">
                        <div class="p-modal"><div class="p-modal-div"><h4><i>已结束</i></h4></div></div>
                    </div>
                    <div class="mui-card-content">
                        <div class="mui-card-content-inner">
                            <p style="color: #000;font-size:1.1em;" onclick="getActivDetail()">【公益】放假啊看了电视剧分开拉就是打飞机阿斯利的空间看来飞机阿斯利的空间</p>
                            <div>
                                <span class="mui-badge mui-badge-primary" style="float: left;">300分</span>
                                <span>&#12288;云景东里/2018.09.12</span>
                                <span style="float: right;"><span class="mui-icon mui-icon-extra mui-icon-extra mui-icon-extra-heart font14"></span><span id="like_num">0</span>人收藏</span>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>

        <!--动态加载模块-->
        <button id="loadMore" type="button" data-loading-icon="mui-spinner mui-spinner-custom" style="border:0px;width: 100%;color:#999;padding: 12px 0px;" class="mui-btn" sth onclick="loadMore()"></button>
        <input type="hidden" id="page" value="1">
        <input type="hidden" id="type" value="0">

    </div>
    <!--页面主内容区结束-->
</body>

</html>