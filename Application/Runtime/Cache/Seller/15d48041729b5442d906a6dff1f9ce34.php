<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>梨园智能商圈</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/seller/css/mui.min.css"/>
        <link rel="stylesheet" href="/Public/seller/css/icons-extra.css"/>
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
        <script type="text/javascript" src="/Public/seller/js/qrcodeurl_goods_detail.js"></script>
    </head>

    <body>

        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" id="backBtn" ></a>
            <h1 id="title" class="mui-title header-a-l">商品详情</h1>
        </header>

        <!--主体部分-->

        <div class="mui-content" style="padding-top: 45px;background-color: #fefefe;">

            <div class="mui-card">
                <div class="mui-card-header mui-card-media" style="height:40vw;background-image:url(../../../<?php echo ($goodInfo["goods_pic"]); ?>)"></div>
                <div class="mui-card-header">
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
                        <button type="button" class="mui-btn-primary mui-btn-block" onclick="openExchange()">立即兑换商品</button>
                        </if>

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
                        兑换总量：<?php echo ($goodInfo["exchange_limit_number"]); ?>，每个用户限制兑换：<?php echo ($goodInfo["user_exchange_limit"]); ?>
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
                    <span class="mui-card-link font666">兑换商品</span>
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

                    </div>
                </div>
                <div class="mui-card-footer">
                    <div class="mui-card-link fontred" id="newPrice">
                        <?php if($goodInfo["payment_amount"] == 0.00): echo ($goodInfo["required_integral"]); ?>积分
                            <?php else: ?>
                            ￥<?php echo ($goodInfo["payment_amount"]); ?>元+<?php echo ($goodInfo["required_integral"]); ?>积分<?php endif; ?>
                    </div>
                    <div class="mui-card-link fontred" id="newPrice">
                        <button type="button" class="mui-btn mui-btn-primary mui-btn-outlined" id="jian" onclick="changeNum(0)">
                            -
                        </button>
                        <button type="button" class="mui-btn mui-btn mui-btn-outlined" id="number">
                            1
                        </button>
                        <button type="button" class="mui-btn mui-btn-primary mui-btn-outlined" id="jia" onclick="changeNum(1)">
                            +
                        </button>
                    </div>
                </div>
                <div class="mui-card-footer">
                    <input type="hidden" name="payment_amount" value="<?php echo ($goodInfo["payment_amount"]); ?>" id="payment_amount">
                    <input type="hidden" name="required_integral" value="<?php echo ($goodInfo["required_integral"]); ?>" id="required_integral">
                    <button type="button" class="mui-btn-success mui-btn-block" onclick="subExchange()">兑换</button>
                </div>
            </div>
        </div>
        <!--模态框end-->

    </div>
</body>

</html>