<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); ?>
        <!--自定义样式及脚本放于此处-->
        <link rel="stylesheet" href="/Public/dxt/css/main.css">
        <?php echo (ANIMATION); ?>
        <title><?php echo ($config['system_name']); ?></title>
        <script type="text/javascript" src="/Public/dxt/js/jquery-1.11.0.js"></script>
        <script type="text/javascript" src="/Public/dxt/js/main.js"></script>
    </head>
    <body>
        <div class="area">
            <div class="infoArea">
                <div class="tx_path"><img src="<?php echo ($myInfo["tx_path"]); ?>" style="width:69px;height:69px;margin: 5px;"></div>
                <div class="myInfo">
                    欢&#12288;&#12288;迎：[<?php echo ($myInfo["address_name"]); ?>]&#12288;[<?php echo ($myInfo["realname"]); ?>]</br>
                    可用积分：&nbsp;<b><?php echo ($myInfo["integral_num"]); ?></b>&nbsp;
                </div>
            </div>

            <div class="adArea" id="adList">

            </div>

            <div class="qrcodeArea">
                <img src='/Public/dxt/img/lyznsq_qrcode.jpg' style="width:129px;height:129px;">
            </div>
            <div class="qrcodeTsTitle">扫码关注公众号</div>
            
            <div class="logoutBtn" onclick="javascript:location.href='/index.php/Dxt/Index/index/index'"></div>

            <div class="showArea">
                <iframe style="margin-right: 200px;overflow-y:scroll;" name="right" id="rightMain" src="/index.php/Dxt/Index/login/user_id/<?php echo ($user_id); ?>" frameborder="no" scrolling="auto" width="100%" height="100%" allowtransparency="true"></iframe>
            </div>
            <div class="backBtn" onclick="history.back()">返回</div>
        </div>
    </body> 
</html>