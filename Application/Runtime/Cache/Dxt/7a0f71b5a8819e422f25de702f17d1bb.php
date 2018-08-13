<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); ?>
        <!--自定义样式及脚本放于此处-->
        <link rel="stylesheet" href="/Public/dxt/css/detail.css">
        <?php echo (ANIMATION); ?>
        <title><?php echo ($config['system_name']); ?></title>
        <script type="text/javascript" src="/Public/dxt/js/jquery-1.11.0.js"></script>
        <script type="text/javascript" src="/Public/dxt/js/detail.js"></script>
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3&ak=woXSx1cEZqVgwpMkc8bgVzQZ4xHq1IU8"></script>
    </head>
    <body>
        <div class="area">
            <div class="titleArea">
                <div class="logo"></div>
                <div class="sysName">梨园智能商圈</div>
            </div>

            <div class="backhomeBtn hvr-backward" onclick="backHome(<?php echo ($address_id); ?>)"></div>

            <div class="adArea" id="adList">

            </div>

            <div class="changeBtn hvr-pop" onclick="getAdList(<?php echo ($address_id); ?>)"></div>

            <div class="contentArea">
                <div class="contentInfo">
                    <div class="linecenter">商家名称：<?php echo ($sellerInfo["name"]); ?>&#12288;注册社区：<?php echo ($sellerInfo["address_name"]); ?></div>
                    <hr>
                    <div class="lineleft">联系方式：<?php echo ($sellerInfo["tel"]); ?></div>
                    <div class="lineleft">地址：<?php echo ($sellerInfo["address"]); ?></div>
                    <div id="allmap" style="width:100%;height:200px;background-color: red;"></div>
                    <?php if(!empty($adList)): if(is_array($adList)): foreach($adList as $k=>$v): ?><hr>
                            <div class="linecenter"><?php echo ($v["title"]); ?></div>
                            <div class="linecenter">&#12288;</div>
                            <div class="lineleft"><img src="../../../<?php echo ($v["pics"]["data"]["0"]["url"]); ?>" style="width:100%;height: auto;"></div>
                            <div class="lineleft" style="text-indent: 2em;"><?php echo ($v["content"]); ?></div><?php endforeach; endif; endif; ?>
                </div>
            </div>

        </div>
    </body> 
</html>

<script type="text/javascript" src="/Public/dxt/js/baiduMap.js"></script>
<script type="text/javascript">
                //百度地图
                baiduMap('<?php echo ($sellerInfo["address_api_url"]); ?>');
</script>