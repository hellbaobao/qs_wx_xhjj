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
            .seller_s{
                height:50%;width:4px;margin-right: 2px;background-color: #7cacff;
            }
            .item_list{
                margin: 4px 3%;background-color:none;width:94%;height:70px;
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
        <script type="text/javascript" src="/Public/seller/js/goods_manage.js"></script>
    </head>

    <body>
        
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Seller/seller/seller_home')"></a>
             <h1 id="title" class="mui-title header-a-l">商品管理</h1>
            <a href="#popover" id="openPopover" class="mui-icon mui-icon-extra mui-icon-extra-regist mui-pull-right header-a"></a>
        </header>
        
        
        <!--右上角弹出菜单-->
        <div id="popover" class="mui-popover" style="width:100px;">
            <ul class="mui-table-view">
                <li class="mui-table-view-cell">
                    <a href="#" class="mui-pull-left" onclick="aHref('/index.php/Seller/goods/goods_manage')">
                        <span style="font-size: 14px;padding-left: 5px;" >全部</span>
                    </a>
                </li>
                <li class="mui-table-view-cell">
                    <a href="#" class="mui-pull-left" onclick="aHref('/index.php/Seller/goods/goods_manage?type=not_publish')">
                        <span style="font-size: 14px;padding-left: 5px;" >未发布</span>
                    </a>
                </li>
                <li class="mui-table-view-cell">
                    <a href="#" class="mui-pull-left" onclick="aHref('/index.php/Seller/goods/goods_manage?type=already_publish')">
                        <span style="font-size: 14px;padding-left: 5px;" >已发布</span>
                    </a>
                </li>
                <li class="mui-table-view-cell">
                    <a href="#" class="mui-pull-left" onclick="aHref('/index.php/Seller/goods/goods_manage?type=lower_frame')">
                        <span style="font-size: 14px;padding-left: 5px;" >已下架</span>
                    </a>
                </li>
            </ul>
        </div>
        
        
        <!--主体部分-->

        <div class="mui-content" style="padding-top: 45px;background-color: #fefefe;">

            <div class="mui-card" style="margin-left:0;margin-right:0;">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>商品</div>
                    <p class="mui-card-link">券码（<?php echo ($data["goodsCount"]["juanMaCount"]); ?>）</p>
                    <p class="mui-card-link">加价购（<?php echo ($data["goodsCount"]["jiajiaGouCount"]); ?>）</p>
                    <p class="mui-card-link">积分换（<?php echo ($data["goodsCount"]["jifenHuanCount"]); ?>）</p>
                </div>
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>统计</div>
                    <p class="mui-card-link">总量（<?php echo ($data["goodsCount"]["allCount"]); ?>）</p>
                    <p class="mui-card-link">兑换（<?php echo ($data["exchangeCount"]); ?>）</p>
                    <p class="mui-card-link">总积分（<?php echo ($data["sellerInfo"]["integral_num"]); ?>）</p>
                </div>
            </div>
            <div class="mui-content-padded">
                <button type="button" class="mui-btn mui-btn-warning mui-btn-block" onclick="aHref('/index.php/Seller/goods/goods_add')">新增积分商品</button>
            </div>
            <div class="mui-row" id="goods-lists">
                <!--<div class="mui-card" onclick="aHref('/index.php/Seller/goods/goods_detail/id/1')">
                    <div class="mui-card-header">
                        <div class="mui-card-link"><div class="seller_s"></div>王师傅店铺</div>
                        <p class="mui-card-link">距离1.5km</p>
                    </div>
                    <div class="mui-card-content">
                        <div class="item_list">
                            <div class="item_list_img"></div>
                            <div class="item_list_word">
                                <span class="">礼品卡券面值30元</span>
                            </div>
                            <div class="item_list_word">
                                <span class="fontred">￥30元+300积分</span>
                                <span class="font888">原价：￥45</span>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>

        </div>


       

    </div>
</body>

</html>