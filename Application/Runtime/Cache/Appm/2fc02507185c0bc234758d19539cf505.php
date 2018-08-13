<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>智慧社区积分商城</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/appm/css/mui.min.css"/>
        <link rel="stylesheet" href="/Public/appm/css/icons-extra.css"/>
        <link rel="stylesheet" href="/Public/seller/css/common.css"/>
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
            .item_list_word{
                height: 35px;;line-height: 35px;text-align:center;
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
        <script type="text/javascript" src="/Public/appm/js/common.js"></script>
        <script type="text/javascript" src="/Public/appm/js/goods_detail.js"></script>
    </head>

    <body>

        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Appm/SellerIntegralGoods/item_list')"></a>
            <h1 id="title" class="mui-title header-a-l">商品详情</h1>
        </header>

        <!--主体部分-->

        <div class="mui-content" style="padding-top: 45px;background-color: #fefefe;">

            <div class="mui-card">
                <div class="mui-card-header mui-card-media" style="height:40vw;background-image:url(../../../<?php echo ($goodInfo["goods_pic"]); ?>)"></div>
                <div class="mui-card-header" onclick="aHref('/index.php/Appm/SellerIntegralGoods/seller_detail?id=<?php echo ($sellerInfo["id"]); ?>')">
                    <div class="mui-card-link">
                        <div class="seller_s"></div>
                        <?php echo ($sellerInfo["name"]); ?>
                    </div>
                    <p class="mui-card-link"><?php echo ($sellerInfo["address_name"]); ?></p>
                </div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner">
                        <div class="item_list">
                            <div class="item_list_word">
                                <span class="font16"><?php echo ($goodInfo["goods_name"]); ?></span>
                            </div>
                            <div class="item_list_word">
                                <span class="fontred">
                                    <?php if($goodInfo["payment_amount"] == 0.00): echo ($goodInfo["required_integral"]); ?>积分
                                        <?php else: ?>
                                        ￥<?php echo ($goodInfo["payment_amount"]); ?>元+<?php echo ($goodInfo["required_integral"]); ?>积分<?php endif; ?>

                                </span>
                                <span class="font888">原价：￥<?php echo ($goodInfo["original_price"]); ?></span>
                            </div>
                        </div>
                        <?php if($goodInfo["cat_id"] == 3): ?><!--第三类-->
                            <button type="button" class="mui-btn-primary mui-btn-block" onclick="openExchange()">立即兑换券码</button>
                            <?php else: ?>
                            <!--前两类-->
                            <button type="button" class="mui-btn mui-btn-block">本商品进店消费即可</button><?php endif; ?>

                    </div>


                </div>
            </div>

            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>商品详情</div>
                </div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner font666">
                        <?php echo ($goodInfo["goods_detail"]); ?>
                    </div>
                </div>
            </div>

            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>兑换规则</div>
                </div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner font666">
                        库存：<?php echo ($goodInfo["stock"]); ?>&#12288;每个用户限购：
                        <?php if($goodInfo["user_exchange_limit"] == 0): ?>(不限购)
                            <?php else: ?>
                            <?php echo ($goodInfo["user_exchange_limit"]); endif; ?>
                    </div>
                </div>
            </div>

            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>使用须知</div>
                </div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner font666">
                        <?php echo ($goodInfo["use_of_knowledge"]); ?>
                    </div>
                </div>
            </div>

        </div>

        <!--模态框-->
        <div class="m-modal"></div>
        <div class="m-modal-content" style="width:100%;margin-left: -50%;">
            <div class="mui-card">
                <div class="mui-card-header">
                    <span class="mui-card-link font666">兑换券码</span>
                    <a class="mui-card-link" href="#" onclick="closeModal()">取消</a>
                </div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner">
                        <div class="item_list_word">
                            <span class="font16"><?php echo ($goodInfo["goods_name"]); ?></span>
                        </div>
                        <div class="item_list_word">
                            <span class="fontred">
                                <?php if($goodInfo["payment_amount"] == 0.00): echo ($goodInfo["required_integral"]); ?>积分
                                    <?php else: ?>
                                    ￥<?php echo ($goodInfo["payment_amount"]); ?>元+<?php echo ($goodInfo["required_integral"]); ?>积分<?php endif; ?>

                            </span>
                            <span class="font888">原价：￥<?php echo ($goodInfo["original_price"]); ?></span>
                        </div>
                        <span>该券限量10个，剩余3个</span>
                    </div>
                </div>
                <div class="mui-card-footer">
                    <div class="mui-card-link fontred">
                        ￥30元+300积分
                    </div>
                    <div class="mui-card-link font666">
                        <div class="mui-numbox">
                            <button class="mui-btn mui-btn-numbox-minus" type="button">-</button>
                            <input class="mui-input-numbox" type="number"/>
                            <button class="mui-btn mui-btn-numbox-plus" type="button">+</button>
                        </div>
                    </div>
                </div>
                <div class="mui-card-footer">
                    <button type="button" class="mui-btn-primary mui-btn-block" onclick="openExchange()">立即兑换券码</button>

                </div>
            </div>
        </div>

    </div>
</body>

</html>