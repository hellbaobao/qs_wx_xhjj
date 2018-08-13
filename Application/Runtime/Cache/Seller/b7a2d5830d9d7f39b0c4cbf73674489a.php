<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>梨园智能商圈</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/seller/css/mui.min.css">
        <link rel="stylesheet" href="/Public/seller/css/icons-extra.css">
        <link rel="stylesheet" href="/Public/seller/css/common.css">
        <style type="text/css">
            .mui-card{
                background-color: #fff;
            }
            .seller_s{
                height:50%;width:4px;margin-right: 2px;background-color: #7cacff;
            }
            .item_list{
                margin: 4px 3%;background-color:none;width:94%;
            }
            .item_list_img{
                background-color: red;float: right;width: 70px;height: 70px;
            }
            .item_list_word{
                height: 35px;;line-height: 35px;
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
        <script type="text/javascript" src="/Public/seller/js/common.js"></script>
        <script type="text/javascript" src="/Public/seller/js/qrcodeurl_seller_detail.js"></script>
    </head>

    <body>

        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <h1 class="mui-title header-a-l">直接收取积分</h1>
        </header>

        <!--主体部分-->

        <div class="mui-content" style="padding-top: 45px;">

            <div class="mui-row">
                <ul class="mui-table-view mui-table-view-chevron">
                    <li class="mui-table-view-cell mui-media">
                        <a class="mui-navigate-right">
                            <img class="mui-media-object mui-pull-left head-img" id="head-img" src="<?php echo ($data["appUserInfo"]["tx_path"]); ?>">
                            <div class="mui-media-body">
                                <?php echo ($data["appUserInfo"]["realname"]); ?>&#12288;[<?php echo ($data["sellerInfo"]["com_name"]); ?>]
                                <p class='mui-ellipsis'>可用积分:<?php echo ($data["appUserInfo"]["integral_num"]); ?></p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <!--卡片1-->
            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>直接收取积分</div>
                </div>
                <div class="mui-card-content">
                    <form class="mui-input-group">
                        <div class="mui-input-row" style="width: 100%;background-color: #ccc;border:1px solid #ccc;border-radius: 4px;">
                            <input type="text" placeholder="请输入收取的积分值" name="trading_integral"  onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                        </div>
                        <div class="mui-button-row" style="height:auto;">
                            <button type="button" class="mui-btn mui-btn-primary mui-btn-block" onclick="koufenExchange()">收取</button>
                        </div>
                    </form>
                </div>
            </div>


            <!--卡片1-->
            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>本店积分商品</div>
                </div>
                <div class="mui-card-content">
                    <div id="goods-lists">
                        <!--列表为空-->
                        <?php if(empty($data["goodsList"])): ?><div class="mui-card">
                                <div class="mui-card-content" style="text-align:center;">
                                    <span class="font888">暂无数据</span>
                                </div>
                            </div><?php endif; ?>
                        <!--列表非空-->
                        <?php if(!empty($data["goodsList"])): if(is_array($data["goodsList"])): foreach($data["goodsList"] as $k=>$v): ?><div class="mui-card" onclick="aHref('/index.php/Seller/Qrcodeurl/goods_detail?id=<?php echo ($v["id"]); ?>&seller_id=<?php echo ($data["sellerInfo"]["id"]); ?>&iccard_num=<?php echo ($data["appUserInfo"]["iccard_num"]); ?>')">
                                    <div class="mui-card-content">
                                        <div class="item_list">
                                            <div class="item_list_img">
                                                <img src="/<?php echo ($v["goods_pic"]); ?>" style="width:70px;height:70px;">
                                            </div>
                                            <div class="item_list_word">
                                                <span class=""><?php echo ($v["goods_name"]); ?></span>
                                            </div>
                                            <div class="item_list_word">
                                                <span class="fontred">
                                                    <?php if($v["payment_amount"] == 0.00): echo ($v["required_integral"]); ?>积分
                                                        <?php else: ?>
                                                        ￥<?php echo ($v["payment_amount"]); ?>元+<?php echo ($v["required_integral"]); ?>积分<?php endif; ?>
                                                </span>
                                                <span class="font888">原价：￥<?php echo ($v["original_price"]); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div><?php endforeach; endif; endif; ?>  
                    </div>
                </div>
            </div>
            <!--卡片1end-->
        </div>

    </div>
</body>

</html>