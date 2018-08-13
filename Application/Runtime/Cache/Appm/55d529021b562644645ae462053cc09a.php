<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>公益排行榜单</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/appm/css/mui.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/icons-extra.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/common.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/top.css" type="text/css"/>
        <style type="text/css">
            .top_card_hearder{
                height:54px;color:#fff;
            }
            .top_xh{
                width:38px;height:38px;border: 3px solid #fff;border-radius: 19px;text-align: center;line-height: 38px;
            }
            .color01{
                background-color: #ff9eb1;
            }
            .color02{
                background-color: #eacc2c;
            }
            .color03{
                background-color: #6fbcf2;
            }
            .color04{
                background-color: #daacf7;
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
        <script src="/Public/appm/js/top_home.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <h1 class="mui-title header-a-l">公益排行榜单</h1>	
        </header>
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
        <!--页面部分-->
        <div class="mui-row">
            <div class="mui-card" onclick="aHref('/index.php/Appm/top/top_list?type=0')">
                <div class="mui-card-header top_card_hearder color01">
                    <div class="mui-card-link">
                        <div class="top_xh">
                            <h3>1</h3>
                        </div>
                        &#12288;本社区用户榜
                    </div>
                    <div class="mui-card-link">本季度</div>
                </div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner">
                        <?php if(is_array($data["bUserList"])): foreach($data["bUserList"] as $k=>$v): ?><div class="mui-table">
                                <div class="mui-table-cell mui-col-xs-1">
                                    <?php echo ($k+1); ?>
                                </div>
                                <div class="mui-table-cell mui-col-xs-4 ">
                                    <?php echo ($v["realname"]); ?>
                                </div>
                                <div class="mui-table-cell mui-col-xs-4 ">
                                    <?php echo ($v["bottom"]); ?>
                                </div>
                                <div class="mui-table-cell mui-col-xs-3 mui-text-right">
                                    <?php echo ($v["sign_integral"]); ?>分
                                </div>
                            </div><?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
            <div class="mui-card" onclick="aHref('/index.php/Appm/top/top_list?type=1')">
                <div class="mui-card-header top_card_hearder color02">
                    <div class="mui-card-link">
                        <div class="top_xh">
                            <h3>2</h3>
                        </div>
                        &#12288;梨园镇用户榜
                    </div>
                    <div class="mui-card-link">本季度</div>
                </div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner">
                        <?php if(is_array($data["allUserList"])): foreach($data["allUserList"] as $k=>$v): ?><div class="mui-table">
                                <div class="mui-table-cell mui-col-xs-1">
                                    <?php echo ($k+1); ?>
                                </div>
                                <div class="mui-table-cell mui-col-xs-4 ">
                                    <?php echo ($v["realname"]); ?>
                                </div>
                                <div class="mui-table-cell mui-col-xs-4 ">
                                    <?php echo ($v["bottom"]); ?>
                                </div>
                                <div class="mui-table-cell mui-col-xs-3 mui-text-right">
                                    <?php echo ($v["sign_integral"]); ?>分
                                </div>
                            </div><?php endforeach; endif; ?>

                    </div>
                </div>
            </div>
            <div class="mui-card" onclick="aHref('/index.php/Appm/top/top_list?type=2')">
                <div class="mui-card-header top_card_hearder color03">
                    <div class="mui-card-link">
                        <div class="top_xh">
                            <h3>3</h3>
                        </div>
                        &#12288;商家排行榜
                    </div>
                    <div class="mui-card-link">本季度</div>
                </div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner">
                        <?php if(is_array($data["sellerList"])): foreach($data["sellerList"] as $k=>$v): ?><div class="mui-table">
                                <div class="mui-table-cell mui-col-xs-1">
                                    <?php echo ($k+1); ?>
                                </div>
                                <div class="mui-table-cell mui-col-xs-4 ">
                                    <?php echo ($v["name"]); ?>
                                </div>
                                <div class="mui-table-cell mui-col-xs-7 mui-text-right">
                                    <?php echo ($v["exchange_integral"]); ?>分
                                </div>
                            </div><?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
            <div class="mui-card" onclick="aHref('/index.php/Appm/top/top_list?type=3')">
                <div class="mui-card-header top_card_hearder color04">
                    <div class="mui-card-link">
                        <div class="top_xh">
                            <h3>4</h3>
                        </div>
                        &#12288;社区排行榜
                    </div>
                    <div class="mui-card-link">本季度</div>
                </div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner">
                        <?php if(is_array($data["commList"])): foreach($data["commList"] as $k=>$v): ?><div class="mui-table">
                                <div class="mui-table-cell mui-col-xs-1">
                                    <?php echo ($k+1); ?>
                                </div>
                                <div class="mui-table-cell mui-col-xs-4">
                                    <?php echo ($v["com_name"]); ?>
                                </div>
                                <div class="mui-table-cell mui-col-xs-7 mui-text-right">
                                    活动：<?php echo ($v["activNum"]); ?>场&#12288;签到：<?php echo ($v["signNum"]); ?>次
                                </div>
                            </div><?php endforeach; endif; ?> 
                    </div>
                </div>
            </div>
        </div>
        </br></br></br></br></br></br></br></br></br></br></br></br>
        <!--页面部分end-->
    </div>
</body>

</html>