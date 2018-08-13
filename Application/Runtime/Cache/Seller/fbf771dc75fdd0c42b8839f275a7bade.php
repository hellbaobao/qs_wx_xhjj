<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>排行榜</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/seller/css/mui.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/seller/css/icons-extra.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/seller/css/common.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/seller/css/top.css" type="text/css"/>
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
        <script src="/Public/seller/js/common.js"></script>
        <script src="/Public/seller/js/top_home.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Seller/seller/seller_home')"></a>
            <h1 class="mui-title header-a-l">排行榜</h1>	
        </header>
    <!--主体部分-->
    <!--主体部分-->
    <div class="mui-content">
        <!--页面部分-->
        <div class="mui-row">
            <div class="mui-card" onclick="aHref('/index.php/Seller/top/top_list?type=0')">
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
            <div class="mui-card" onclick="aHref('/index.php/Seller/top/top_list?type=1')">
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
            <div class="mui-card" onclick="aHref('/index.php/Seller/top/top_list?type=2')">
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
            <div class="mui-card" onclick="aHref('/index.php/Seller/top/top_list?type=3')">
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
        <!--页面部分end-->
    </div>
</body>

</html>