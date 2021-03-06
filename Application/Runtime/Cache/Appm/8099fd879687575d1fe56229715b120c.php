<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>最新活动</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/appm/css/mui.min.css">
        <link rel="stylesheet" href="/Public/appm/css/icons-extra.css">
        <link rel="stylesheet" href="/Public/appm/css/common.css">
        <link rel="stylesheet" href="/Public/appm/css/activity.css">
        <script src="/Public/appm/js/jquery-1.11.0.js"></script>

    </head>

    <body>
        <!--头部-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <div class="mui-title mui-input-search header-ss-div"><input id="keyword" class="mui-input-clear" placeholder="请输入关键字搜索" type="search" style="width: 70%;height: 30px;margin: 0px;background-color: #fff;"></div>
            <a  class="mui-icon mui-icon-extra mui-icon-extra-regist mui-pull-right header-a" onclick="openSelect()"></a>
        </header>
        <!--底部-->
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



    <!--主体-->
    <div class="mui-content" style="background-color: #fff;">

        <!--轮播图-->
        <div id="slider" class="mui-slider" style="height:150px;">
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
        <!--list页面部分-->
        <ul class="mui-table-view" id="activityList">
            <div class="mui-card">
                <div class="mui-card-header mui-card-media" style="height:40vw;position:relative;background-image:url(/Public/Upload/activity/2018-04-11/5acd833d494d2.PNG)" onclick="getActivDetail(' + data.data[i]['id'] + ')">
                    <div class="p-modal"><div class="p-modal-div"><h4><i>已结束</i></h4></div></div>
                </div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner">
                        <p style="color: #000;font-size:1.1em;" onclick="getActivDetail()">【公益】放假啊看了电视剧分开拉就是打飞机阿斯利的空间看来飞机阿斯利的空间</p>
                        <div>
                            <span class="mui-badge mui-badge-primary" style="float: left;">300分</span>
                            <span>&#12288;云景东里/2018.09.12</span>
                            <span style="float: right;"><span class="mui-icon mui-icon-extra mui-icon-extra mui-icon-extra-heart font14"></span><span id="like_num">0</span>人收藏</span>
                        </div>
                    </div>
                </div>
            </div>
        </ul>

        <!--动态加载模块-->
        <button id="loadMore" type="button" data-loading-icon="mui-spinner mui-spinner-custom" style="border:0px;width: 100%;color:#999;padding: 12px 0px;" class="mui-btn" sth onclick="loadMore()"></button>
        <input type="hidden" id="page" value="1">
        <!--蒙层-->
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
                        <form id="form">
                            <h5 class="mui-content-padded font333">活动地点</h5>
                            <div class="mui-input-group" style="width: 100%;height:auto;background-color: #fff;border:1px solid #ccc;border-radius: 4px;">
                                <div class="mui-input-row mui-radio">
                                    <label>本社区</label>
                                    <input name="address_id" type="radio" value="<?php echo ($address_id); ?>" id="local_address" >
                                </div>
                                <div class="mui-input-row mui-radio" >
                                    <label>全体社区</label>
                                    <input name="address_id" type="radio" value="0" id="0_address" checked>
                                </div>
                            </div>
                            <h5 class="mui-content-padded font333">活动类型</h5>
                            <div class="mui-input-group" style="width: 100%;height:auto;background-color: #fff;border:1px solid #ccc;border-radius: 4px;">
                                <select style="margin: 0;" name="cat_id" id="cat_id">
                                    <option value="0">不限</option>
                                    <?php if(is_array($catData)): foreach($catData as $key=>$cat): ?><option value="<?php echo ($cat["id"]); ?>"><?php echo ($cat["cat_name"]); ?></option><?php endforeach; endif; ?>
                                </select>
                            </div>
                            <h5 class="mui-content-padded font333">积分等级</h5>
                            <div class="mui-input-group" style="width: 100%;height:auto;background-color: #fff;border:1px solid #ccc;border-radius: 4px;">
                                <select style="margin: 0;" name="integral" id="integral">
                                    <option value="0">不限</option>
                                    <option value="100">100分</option>
                                    <option value="200">200分</option>
                                    <option value="300">300分</option>
                                    <option value="400">400分</option>
                                    <option value="500">500分</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>

<script src="/Public/appm/js/mui.min.js"></script>
<script type="text/javascript">
                //启用双击监听
                mui.init({
                    gestureConfig: {
                        doubletap: true,
                        swipeBack: true //启用右滑关闭功能
                    },
                });
                var slider = mui("#slider");
                slider.slider({
                    interval: 5000
                });
</script>
<?php echo ($Assigndata); ?>
<script src="/Public/appm/js/common.js"></script>
<script src="/Public/appm/js/activity_list.js"></script>