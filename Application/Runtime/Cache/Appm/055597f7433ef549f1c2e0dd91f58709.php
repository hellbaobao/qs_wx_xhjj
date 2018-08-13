<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>梨园智能商圈</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/appm/css/mui.min.css">
        <link rel="stylesheet" href="/Public/appm/css/icons-extra.css">
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
        <script type="text/javascript" src="/Public/appm/js/qrcodeurl_seller_detail.js"></script>
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3&ak=woXSx1cEZqVgwpMkc8bgVzQZ4xHq1IU8"></script>
    </head>

    <body>

        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <h1 id="title" class="mui-title header-a-l"><?php echo ($sellerInfo["name"]); ?></h1>
        </header>

        <!--主体部分-->

        <div class="mui-content" style="padding-top: 45px;background-color: #fefefe;">

            <!--卡片1-->
            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>本店积分商品</div>
                </div>
                <div class="mui-card-content">
                    <div id="goods-lists">
                        <!--列表为空-->
                        <?php if(empty($goodsList)): ?><div class="mui-card">
                                <div class="mui-card-content" style="text-align:center;">
                                    <span class="font888">暂无数据</span>
                                </div>
                            </div><?php endif; ?>
                        <!--列表非空-->
                        <?php if(!empty($goodsList)): if(is_array($goodsList)): foreach($goodsList as $k=>$v): ?><div class="mui-card" onclick="aHref('/index.php/Appm/Qrcodeurl/goods_detail?id=<?php echo ($v["id"]); ?>&seller_id=<?php echo ($sellerInfo["id"]); ?>')">
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

            <!--卡片2-->
            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>[积分：<?php echo ($sellerInfo["exp_num"]); ?>][排名：<?php echo ($sellerInfo["top_num"]); ?>]</div>
                    <p class="mui-card-link">
                        <button type="button" class="mui-btn-primary mui-btn-outlined" onclick="openComplaint()">反馈</button>
                    </p>
                </div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner">
                        <div class="item_list">
                            <div class="item_list_word">
                                <span class="font16">注册社区：<?php echo ($sellerInfo["address_name"]); ?></span>
                            </div>
                            <div class="item_list_word">
                                <span class="font16">联系方式：<?php echo ($sellerInfo["tel"]); ?></span>
                            </div>

                            <div class="item_list_word">
                                <span class="font16">地&#12288;&#12288;址：<?php echo ($sellerInfo["address"]); ?></span>
                            </div>
                            
                            

                            <div id="allmap" style="width:100%;height:200px;background-color: red;">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--卡片2end-->

            <!--模态框-->
            <div class="m-modal"></div>
            <div class="m-modal-content" style="width:100%;margin-left: -50%;">
                <div class="mui-card">
                    <div class="mui-card-header">
                        <span class="mui-card-link font666">举报反馈该商家</span>
                        <a class="mui-card-link" href="#" onclick="closeModal()">取消</a>
                    </div>
                    <div class="mui-card-content">
                        <div class="mui-card-content-inner">
                            <div class="mui-card">
                                <form class="mui-input-group" id="save-form">
                                    <input type="hidden" name="seller_id" value="<?php echo ($sellerInfo["id"]); ?>">
                                    <input type="hidden" name="address_id" value="<?php echo ($sellerInfo["address_id"]); ?>">
                                    <input type="hidden" name="user_id" value="0">
                                    <input type="hidden" name="status" value="0">
                                    <?php if(is_array($compalintCat)): foreach($compalintCat as $k=>$v): ?><div class="mui-input-row mui-radio">
                                            <label><?php echo ($v["cat_name"]); ?></label>
                                            <input name="cat_id" type="radio" value="<?php echo ($v["id"]); ?>">
                                        </div><?php endforeach; endif; ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mui-card-footer fontred">
                            请如实进行反馈，我们会根据您的反馈尽快处理。
                    </div>
                    <div class="mui-card-footer">
                        <button type="button" class="mui-btn-primary mui-btn-block" onclick="subForm()">立即反馈</button>

                    </div>
                </div>
            </div>
            <!--模态框end-->


        </div>

    </div>
</body>

</html>

<script type="text/javascript" src="/Public/appm/js/baiduMap.js"></script>
<script type="text/javascript">
                            //百度地图
                            baiduMap('<?php echo ($sellerInfo["address_api_url"]); ?>');
</script>