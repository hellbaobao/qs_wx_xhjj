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
                margin-bottom:4px; background-color: red;float: right;width: 70px;height:70px;
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
        <script type="text/javascript" src="/Public/seller/js/goods_detail.js"></script>
    </head>

    <body>

        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Seller/goods/goods_manage')"></a>
             <h1 class="mui-title header-a-l">积分商品详情</h1>
        </header>

        <!--主体部分-->

        <div class="mui-content" style="padding-top: 45px;background-color: #fefefe;">

            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div><?php echo ($data["goodsInfo"]["goods_name"]); ?></div>
                    <p class="mui-card-link">
                        <?php if($data['goodsInfo']['status'] == 1): ?><button class="mui-btn mui-btn-danger mui-btn-outlined" onclick="lowerFrame('<?php echo ($data["goodsInfo"]["id"]); ?>', 2)">下线</button>
                        <?php elseif($data['goodsInfo']['status'] == 0): ?>
                            <button class="mui-btn mui-btn-success mui-btn-outlined" onclick="lowerFrame('<?php echo ($data["goodsInfo"]["id"]); ?>', 1)">发布</button>
                        <?php else: ?>
                            已下线<?php endif; ?>
                    </p>
                </div>
                <div class="mui-card-content">
                    <div class="item_list">
                        <div class="item_list_img">
                            <img src="/<?php echo ($data["goodsInfo"]["goods_pic"]); ?>" style="width:70px;height:70px;"/>
                        </div>
                        <div class="item_list_word">
                            <span class="fontred">
                                <?php if($data['goodsInfo']['cat_id'] == 2): echo ($data["goodsInfo"]["required_integral"]); ?>积分
                                <?php else: ?>
                                    ￥<?php echo ($data["goodsInfo"]["payment_amount"]); ?>元+<?php echo ($data["goodsInfo"]["required_integral"]); ?>积分<?php endif; ?>
                            </span>
                        </div>
                        <div class="item_list_word">
                            <span class="font666">
                                原价：￥<?php echo ($data["goodsInfo"]["original_price"]); ?>元
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>商品详情</div>
                </div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner font666">
                        <?php echo ($data["goodsInfo"]["goods_detail"]); ?>
                    </div>
                </div>
            </div>

            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>兑换规则</div>
                </div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner font666">
                        库存：<?php echo ($data["goodsInfo"]["stock"]); ?>&#12288;每个用户限购：<?php echo ($data["goodsInfo"]["user_exchange_limit"]); ?>
                    </div>
                </div>
            </div>

            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>使用须知</div>
                </div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner font666">
                        <?php echo ($data["goodsInfo"]["use_of_knowledge"]); ?>
                    </div>
                </div>
            </div>

            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>兑换记录</div>
                    <p class="mui-card-link">共兑换<?php echo ($data["exchangeCount"]); ?>次</p>
                </div>
                <div class="mui-card-content">
                    <div class="mui-row">
                        <ul class="mui-table-view">
                            <?php if(is_array($data["exchangeLists"])): foreach($data["exchangeLists"] as $key=>$exchange): ?><li class="mui-table-view-cell" onclick="aHref('/index.php/Seller/trading/trading_detail/exchange_id/<?php echo ($exchange["id"]); ?>/fromUrl/goodsDetail')">
                                <a class="mui-navigate-right">
                                    <span class="mui-badge mui-badge-danger">消费：<?php echo ($exchange["exchange_integral"]); ?>分</span>
                                    <?php echo ($exchange["realname"]); ?>
                                </a>
                            </li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>

</html>