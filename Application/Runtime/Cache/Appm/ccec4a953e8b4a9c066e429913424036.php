<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/appm/css/mui.min.css">
        <link rel="stylesheet" href="/Public/appm/css/activity.css">

        <script src="/Public/appm/js/jquery-1.11.0.js"></script>
        <link rel="stylesheet" href="/Public/appm/css/common.css">
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
        <script src="/Public/appm/js/common.js"></script>
        <script src="/Public/appm/js/apply.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Appm/login/index')">
                <!--<sapn class="comfont">设置</span>-->
            </a>
            <h1 id="title" class="mui-title header-a-l">社区卡申请</h1>
        </header>
        <!--tab-->
        <div class="mui-content">
            <div class="mui-card">
                <div class="mui-card-content">
                    <div class="m-inputheader">验证手机</div>
                    <div class="m-inputframe">
                        <input type="text" id="tel" name="tel" placeholder="请输入手机号码" onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                        <button type="button" class="mui-btn-warning mui-btn-block" onclick="getApplyKeyCode()">发送验证码至手机</button>
                    </div>
                    <!--                    <form class="mui-input-group">
                                            <div class="mui-input-row">
                                                <label>手机号码</label>
                                                <input type="text" id="tel" name="tel" style="text-align: right;" placeholder="请输入手机号码" onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                                            </div>
                                        </form>-->
                    <!--<button type="button" class="mui-btn-primary mui-btn-block" onclick="getApplyKeyCode()">发送验证码至手机</button>-->

                    <!--<div class="m-inputheader">验证码</div>-->
                    <div class="m-inputframe">
                        <input type="text" id="keycode" placeholder="请输入验证码" onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                        <input type="hidden" id="hiddenKeycode" value="0">
                    </div>
<!--                    <form class="mui-input-group">
                        <div class="mui-input-row">
                            <label>验证码</label>
                            <input type="text" id="keycode" style="text-align: right;" placeholder="请输入验证码" onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                            <input type="hidden" id="hiddenKeycode" value="0">
                        </div>
                    </form>-->
                    <button type="button" class="mui-btn-primary mui-btn-block" onclick="checkApplyKeyCode()">下一步</button>
                </div>
            </div>
        </div>
    </body>
</html>