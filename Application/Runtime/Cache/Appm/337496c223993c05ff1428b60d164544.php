<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>我的签到</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="x-rim-auto-match" content="none">

        <link rel="stylesheet" href="/Public/appm/css/mui.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/icons-extra.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/common.css" type="text/css"/>
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
        <link rel="stylesheet" href="/Public/appm/css/common.css">
        <script src="/Public/appm/js/common.js"></script>
        <script src="/Public/appm/js/signin_list.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Appm/index/setting')"></a>
            <h1 class="mui-title header-a-l">我的签到</h1>	
        </header>

        <!--主体部分-->
        <div class="mui-content">
            <div class="mui-row">
                <ul class="mui-table-view mui-table-view-chevron">
                    <li class="mui-table-view-cell mui-media">
                        <img class="mui-media-object mui-pull-left head-img" id="head-img" src="<?php echo ($myInfo["tx_path"]); ?>">
                        <div class="mui-media-body">
                            <?php echo ($myInfo["realname"]); ?>&#12288;[<?php echo ($myInfo["address_name"]); ?>]
                            <p class='mui-ellipsis'>累计参加：<?php echo ($myInfo["joined_activ_num"]); ?>场</p>
                            <p class='mui-ellipsis'>签到：<?php echo ($myInfo["signed_activ_num"]); ?>次&#12288;积分：<?php echo ($myInfo["integral_num"]); ?></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mui-row">
                <ul class="mui-table-view" id="signinList">
                    <!--                <li class="mui-table-view-cell mui-media">
                                        <a href="javascript:;">
                                            <img class="mui-media-object mui-pull-left" src="/Public/appm/img/card_sign.jpg">
                                            <div class="mui-media-body">
                                                <p class='mui-ellipsis'>签到时间：2018.04.25&nbsp;12:00:00</p>
                                                <p class='mui-ellipsis'>活动名称：发科萨里叫东方卡家连锁店</p>
                                                <p class='mui-ellipsis'>签到次数：1/3&#12288;获得积分：300分</p>
                                            </div>
                                        </a>
                                    </li>       -->

                </ul>
                <!--动态加载模块-->
                <button id="loadMore" type="button" data-loading-icon="mui-spinner mui-spinner-custom" style="border:0px;width: 100%;color:#999;padding: 12px 0px;" class="mui-btn" sth onclick="loadMore()"></button>
                <input type="hidden" id="page" value="1">
            </div>


        </div>
        <!--页面主内容区结束-->
    </body>

</html>