<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>微信绑定</title>
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
        <script src="/Public/appm/js/common.js"></script>
        <script src="/Public/appm/js/wechat_binding.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Appm/login/index')">
                <!--<sapn class="comfont">设置</span>-->
            </a>
            <h1 id="title" class="mui-title header-a-l">微信绑定</h1>
        </header>
        <!--tab-->
        <div class="mui-content">
            <div class="mui-card">
                <div class="mui-card-content">
                    <ul class="mui-table-view mui-table-view-chevron">
                        <li class="mui-table-view-cell">
                            <a id="head" class="mui-navigate-right">
                                将微信【<?php echo ($wxInfo["nickname"]); ?>】绑定到
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mui-card">
                <div class="mui-card-content">
                    <form class="mui-input-group">
                        <input type="hidden" name="tx_path" id="tx_path" value="<?php echo ($wxInfo["headimgurl"]); ?>"/>
                        <input type="hidden" name="nickname" id="nickname" value="<?php echo ($wxInfo["nickname"]); ?>"/>
                        <input type="hidden" name="wx_num" id="wx_num" value="<?php echo ($wxInfo["openid"]); ?>"/>
                        <div class="mui-input-row">
                            <label>已注册手机</label>
                            <input type="text" id="tel" style="text-align: right;" placeholder="请输入手机号码" onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                        </div>
                    </form>
                    <button type="button" class="mui-btn-primary mui-btn-block mui-btn-outlined" onclick="getApplyKeyCodeCheckExist()">发送验证码至手机</button>
                    <form class="mui-input-group">
                        <div class="mui-input-row">
                            <label>验证码</label>
                            <input type="text" id="keycode" style="text-align: right;" placeholder="请输入验证码" onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                            <input type="hidden" id="hiddenKeycode" value="0">
                        </div>
                    </form>
                    <button type="button" class="mui-btn-primary mui-btn-block" onclick="subForm()">提交</button>
                </div>
            </div>
        </div>
    </body>
</html>