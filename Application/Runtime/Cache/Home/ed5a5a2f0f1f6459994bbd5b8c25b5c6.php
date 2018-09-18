<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="x-rim-auto-match" content="none">

        <link rel="stylesheet" href="/Public/home/css/mui.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/home/css/mui.picker.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/home/css/icons-extra.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/home/css/common.css" type="text/css"/>
        <script type="text/javascript" src="/Public/home/js/jquery-1.11.0.js"></script>
        <script type="text/javascript" src="/Public/home/js/mui.min.js"></script>
        <script type="text/javascript">
            (function ($, doc) {
                $.init();
            })(mui, document);
        </script>
        <?php echo ($Assigndata); ?>
        <script src="/Public/home/js/common.js"></script>
        <style>
            .mui-btn-block{
                width:30%;
                margin: 8px 1%;
                float:left;
            }
        </style>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <h1 class="mui-title header-a-l">微信公众号文章</h1>	
        </header>

        <!--页面主内容区开始-->
        <div class="mui-content">
            <div class="mui-row">
                <div class="mui-content-padded">
                    <button type="button" class="mui-btn mui-btn-primary mui-btn-block" onclick="download(0)">热门</button>
                    <button type="button" class="mui-btn mui-btn-success mui-btn-block" onclick="download(1)">搞笑</button>
                    <button type="button" class="mui-btn mui-btn-warning mui-btn-block" onclick="download(2)">养生堂</button>
                    <button type="button" class="mui-btn mui-btn-royal mui-btn-block" onclick="download(3)">私房话</button>
                    <button type="button" class="mui-btn mui-btn-danger mui-btn-block" onclick="download(4)">八卦精</button>
                    
                    <button type="button" class="mui-btn mui-btn-primary mui-btn-block" onclick="download(5)">科技咖</button>
                    <button type="button" class="mui-btn mui-btn-success mui-btn-block" onclick="download(6)">财经迷</button>
                    <button type="button" class="mui-btn mui-btn-warning mui-btn-block" onclick="download(7)">汽车控</button>
                    <button type="button" class="mui-btn mui-btn-royal mui-btn-block" onclick="download(8)">生活家</button>
                    <button type="button" class="mui-btn mui-btn-danger mui-btn-block" onclick="download(9)">时尚圈</button>
                    
                    <button type="button" class="mui-btn mui-btn-primary mui-btn-block" onclick="download(10)">育儿</button>
                    <button type="button" class="mui-btn mui-btn-success mui-btn-block" onclick="download(11)">旅游</button>
                    <button type="button" class="mui-btn mui-btn-warning mui-btn-block" onclick="download(12)">职场</button>
                    <button type="button" class="mui-btn mui-btn-royal mui-btn-block" onclick="download(13)">美食</button>
                    <button type="button" class="mui-btn mui-btn-danger mui-btn-block" onclick="download(14)">历史</button>
                    
                    <button type="button" class="mui-btn mui-btn-primary mui-btn-block" onclick="download(15)">教育</button>
                    <button type="button" class="mui-btn mui-btn-success mui-btn-block" onclick="download(16)">星座</button>
                    <button type="button" class="mui-btn mui-btn-warning mui-btn-block" onclick="download(17)">体育</button>
                    <button type="button" class="mui-btn mui-btn-royal mui-btn-block" onclick="download(18)">军事</button>
                    <button type="button" class="mui-btn mui-btn-danger mui-btn-block" onclick="download(19)">游戏</button>
                    
                    <button type="button" class="mui-btn mui-btn-primary mui-btn-block" onclick="download(20)">萌宠</button>
                </div>
            </div>
            <!--页面主内容区结束-->
        </div>
    </body>

</html>
<script type="text/javascript">
    function download(id){
        window.open("zxw/wxlist?key="+id);
    }

</script>