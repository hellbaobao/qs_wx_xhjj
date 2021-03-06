<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>活动签到</title>
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
            .row_btn6{
                width: 50%;height: 100%;font-size: 15px;float: left;border: 0px;
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
        <script src="/Public/appm/js/qrcodeurl_activ_signin.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <h1 class="mui-title header-a-l">活动签到</h1>	
        </header>

        <!--主体部分-->
        <div class="mui-content">
            <div class="mui-row">
                <div class="mui-card">
                    <div class="mui-card-content">
                        <div class="mui-card-content-inner">
                            <p style="color: #000;font-size:1.1em;">【<?php echo ($activInfo["cat_name"]); ?>】<?php echo ($activInfo["title"]); ?></p>
                            <div>
                                <span class="mui-badge mui-badge-primary" style="float: left;"><?php echo ($activInfo["integral"]); ?>分</span>
                                <span>&#12288;<?php echo ($activInfo["address_name"]); ?>/<?php echo ($activInfo["start_time"]["ymd"]); ?></span>
                                <span style="float: right;"><span class="mui-icon mui-icon-extra mui-icon-extra mui-icon-extra-heart font14"></span><span><?php echo ($activInfo["like_num"]); ?></span>人收藏</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mui-row">
                <div class="mui-card">
                    <div class="mui-card-header">
                        <span class="mui-card-link">第<?php echo ($signInfo["sign_num"]); ?>次签到</span>
                        <span class="mui-card-link">可获<?php echo ($signInfo["sign_integral"]); ?>积分</span>
                        <span class="mui-card-link">已签<?php echo ($signInfo["signed_num"]); ?>人</span>
                    </div>
                    <div class="mui-card-content">
                        <div class="mui-card-content-inner">
                            <ul class="mui-table-view mui-table-view-chevron">
                                <li class="mui-table-view-cell mui-media">
                                    <img class="mui-media-object mui-pull-left head-img" id="head-img" src="<?php echo ($myInfo["tx_path"]); ?>">
                                    <div class="mui-media-body">
                                        <?php echo ($myInfo["realname"]); ?>(<?php echo ($myInfo["tel"]); ?>)
                                        <p class='mui-ellipsis'><?php echo ($myInfo["address_name"]); ?>&#12288;<?php echo ($myInfo["integral_num"]); ?>分</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mui-card-footer text-center">
                        <?php if($signInfo["sign_status"] == '0'): ?><span class="mui-card-link"></span>
                                <span class="mui-card-link fontred">签到尚未开始</span>
                                <span class="mui-card-link"></span>
                            <?php elseif($signInfo["sign_status"] == '1'): ?>
                                <button type="button" class="mui-btn mui-btn-primary mui-btn-block" onclick='signIn()'>点击签到</button>
                                <?php else: ?>
                                <span class="mui-card-link"></span>
                                <span class="mui-card-link fontred">签到已结束</span>
                                <span class="mui-card-link"></span><?php endif; ?>

                    </div>
                </div>
            </div>
            
        </div>
        <!--页面主内容区结束-->
    </body>

</html>