<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>意林</title>
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
                margin: 8px 1.3%;
                float:left;
            }
        </style>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <h1 class="mui-title header-a-l">《意林》</h1>	
        </header>

        <!--页面主内容区开始-->
        <div class="mui-content" style="background-color:#fff;">
            <ul class="mui-table-view mui-table-view-chevron">
                <?php if(is_array($data)): foreach($data as $k=>$vo): ?><li class="mui-table-view-cell mui-media" onclick="jumpHref('<?php echo ($vo["href"]); ?>')">
                    <a class="mui-navigate-right">
                        <img class="mui-media-object mui-pull-left" src="/Public/home/img/yllogo.png">
                        <div class="mui-media-body" style="line-height: 40px;">
                            <?php echo ($vo["title"]); ?>
                        </div>
                    </a>
                </li><?php endforeach; endif; ?>
            </ul>
            <div class="mui-row">
                <div>
                    <section style="padding:10px 10px;background:#fff;">
                        <section>
                            <section style="background:rgb(255,255,255);padding: 10px;display: flex;justify-content: center;align-items: center;">
                                <section style="width: 130px;">
                                    <img style="width: 100%;display: block;" src="http://image2.135editor.com/cache/remote/aHR0cHM6Ly9tbWJpei5xbG9nby5jbi9tbWJpel9wbmcvWVV5WjdBT0wzb2xSOGNsYjZ2R05YeW93MmVGYWVnTUdDYk9uR2N5aHF5VlY0OGVTaWJTSGhKTGV5dXlVckRwOEtPQWhtQjNhSHp5Y0JEelhVZlpiaWJOUS8w"/>
                                </section>
                                <section style="width: 1em;"></section>
                                <section style="color:rgb(56,56,55);text-align: center;padding: 3px 4px;">
                                    <section style="width: 1.5em; font-size: 12px;font-weight: bold;line-height: 1.2em;">
                                        把时间交给阅读
                                    </section>
                                </section>
                                <section style="width: 1em;"></section>
                                <section style="width:130px;">
                                    <img style="width: 100%;display: block;" src="/Public/home/img/myasmqrcode.jpg"/>
                                </section>
                            </section>
                        </section>
                    </section>
                </div>

            </div>
            <!--页面主内容区结束-->
        </div>
    </body>

</html>
<script type="text/javascript">
            function jumpHref(id) {
                window.open("/index.php/home/zxw/yllist?key=" + id);
            }

</script>