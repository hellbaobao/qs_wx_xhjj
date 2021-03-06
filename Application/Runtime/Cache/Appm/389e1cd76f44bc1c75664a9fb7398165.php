<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>智慧社区积分商城</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/appm/css/mui.min.css">
        <link rel="stylesheet" href="/Public/appm/css/icons-extra.css">
        <link rel="stylesheet" href="/Public/appm/css/common.css">
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
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <div class="mui-title mui-input-search header-ss-div">
                <input id="keyword" name="keyword" class="mui-input-clear" placeholder="请输入关键字搜索" type="search" style="width: 70%;height: 30px;margin: 0px;background-color: #fff;">
            </div>
            <a  class="mui-icon mui-icon-extra mui-icon-extra-regist mui-pull-right header-a" onclick="openSelect()"></a>
        </header>
        <!--底部tabbar-->
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

    <div class="mui-content" style="padding-top: 0;background-color: #fefefe;">
        <div id="slider" class="mui-slider" style="height:150px;margin-top: 45px;">
            <div class="mui-slider-group mui-slider-loop" id="sliderList">
                <?php if(is_array($sliderData)): foreach($sliderData as $k=>$v): if($k == 0): ?><div class="mui-slider-item mui-slider-item-duplicate">
                            <a href="#">
                                <img src="../../../<?php echo ($v["url"]); ?>"  style="height:150px;">
                            </a>
                        </div>
                        <?php else: ?>
                        <div class="mui-slider-item">
                            <a href="#">
                                <img src="../../../<?php echo ($v["url"]); ?>" style="height:150px;">
                            </a>
                        </div><?php endif; ?>
                    <?php if($k == 0): ?><div class="mui-slider-item mui-slider-item-duplicate">
                            <a href="#">
                                <img src="../../../<?php echo ($v["url"]); ?>" style="height:150px;">
                            </a>
                        </div><?php endif; ?>><?php endforeach; endif; ?>
            </div>
        </div>


        <div class="mui-content-padded">
            <button type="button" class="mui-btn mui-btn-warning mui-btn-block">剩余积分：<?php echo ($userIntegralNum); ?>分</button>
        </div>
        <div id="goods-lists">
            <!--<div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>王师傅店铺</div>
                    <p class="mui-card-link">距离1.5km</p>
                </div>
                <div class="mui-card-content">
                    <div class="item_list">
                        <div class="item_list_img">
                            <img src="/Public/Upload/sellerInfo/2018-04-16/5ad46d9f1cf52.jpg">
                        </div>
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
        <!--动态加载模块-->
        <button id="loadMore" type="button" data-loading-icon="mui-spinner mui-spinner-custom" style="border:0px;width: 100%;color:#999;padding: 12px 0px;" class="mui-btn" sth onclick="loadMore()"></button>
        <input type="hidden" id="page" value="1">
    </div>


    <!--模态框-->
    <div class="m-modal"></div>
    <div class="m-modal-content" style="width:100%;margin-left: -50%;">
        <div class="mui-card">
            <div class="mui-card-header">
                <a class="mui-card-link" onclick="closeModal()">取消</a>
                <span class="mui-card-link font666">筛选</span>
                <a class="mui-card-link" onclick="subForm()">保存</a>
            </div>
            <div class="mui-card-content">
                <div class="mui-card-content-inner">
                    <!--form-->
                    <div class="mui-input-group" style="width: 100%;height:auto;background-color: #fff;border:1px solid #ccc;border-radius: 4px;">
                        <div class="mui-row">
                            <div class="mui-col-sm-6 mui-col-xs-6">
                                <div class="mui-input-row mui-radio mui-left">
                                    <label>最受欢迎</label>
                                    <input name="orderBy" type="radio" value="welcome">
                                </div>
                            </div>
                            <div class="mui-col-sm-6 mui-col-xs-6">
                                <div class="mui-input-row mui-radio mui-left" >
                                    <label>离我最近</label>
                                    <input name="orderBy" type="radio" value="distance">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="mui-content-padded font333">商家地点</h5>
                    <div class="mui-input-group" style="width: 100%;height:auto;background-color: #fff;border:1px solid #ccc;border-radius: 4px;">
                        <div class="mui-row">
                            <div class="mui-col-sm-6 mui-col-xs-6">
                                <div class="mui-input-row mui-radio mui-left">
                                    <label>本社区</label>
                                    <input name="address" type="radio" value="current"/>
                                </div>
                            </div>
                            <div class="mui-col-sm-6 mui-col-xs-6">
                                <div class="mui-input-row mui-radio mui-left" >
                                    <label>全体社区</label>
                                    <input name="address" type="radio" value="all"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="mui-content-padded font333">类&#12288;&#12288;型</h5>
                    <div class="mui-input-group" style="width: 100%;height:auto;background-color: #fff;border:1px solid #ccc;border-radius: 4px;">
                        <div class="mui-row">
                            <div class="mui-col-sm-4 mui-col-xs-4">
                                <div class="mui-input-row mui-radio mui-left">
                                    <label>加购</label>
                                    <input name="cat_type" type="radio" value="1"/>
                                </div>
                            </div>
                            <div class="mui-col-sm-4 mui-col-xs-4">
                                <div class="mui-input-row mui-radio mui-left" >
                                    <label>兑换</label>
                                    <input name="cat_type" type="radio" value="2"/>
                                </div>
                            </div>
                            <div class="mui-col-sm-4 mui-col-xs-4">
                                <div class="mui-input-row mui-radio mui-left" >
                                    <label>券码</label>
                                    <input name="cat_type" type="radio" value="3"/>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
</body>

</html>

<script src="/Public/appm/js/jquery-1.11.0.js"></script>
<script src="/Public/appm/js/mui.min.js"></script>
<script type="text/javascript">
            //启用双击监听
            mui.init({
                gestureConfig: {
                    doubletap: true
                },
            });
            var slider = mui("#slider");
            slider.slider({
                interval: 5000
            });
</script>
<?php echo ($Assigndata); ?>
<script src="/Public/appm/js/common.js"></script>
<script src="/Public/appm/js/item_list.js"></script>