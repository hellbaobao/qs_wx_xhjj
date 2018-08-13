<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo ($Assigndata); ?>
        <!--自定义样式及脚本放于此处-->
        <link rel="stylesheet" href="/Public/dxt/css/index.css">
        <?php echo (ANIMATION); ?>
        <title><?php echo ($config['system_name']); ?></title>
        <script type="text/javascript" src="/Public/dxt/js/jquery-1.11.0.js"></script>
        <script type="text/javascript" src="/Public/dxt/js/index.js"></script>
    </head>
    <body>
        <div class="area">
            <div class="titleArea">
                <div class="logo"></div>
                <div class="sysName">梨园智能商圈</div>
            </div>
            <div class="adArea" id="adList">
                <div class="adList hvr-forward">
                    <div class="adImgArea"><img class="adImg" src="http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKaR0qCS2Z3iaj4IyVwF1STcrrWe5jicHbKHFz1k0P5KW0knapiaxgZTNaCUW6egbpDb8whj7HyicO3Wg/132"></div>
                    <div class="adTitle">将社区卡放置于导向台的读卡器上</div>
                </div>
                <div class="adList">
                    <div class="adImgArea"><img class="adImg" src="http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKaR0qCS2Z3iaj4IyVwF1STcrrWe5jicHbKHFz1k0P5KW0knapiaxgZTNaCUW6egbpDb8whj7HyicO3Wg/132"></div>
                    <div class="adTitle">将社区卡放置于导向台的读卡器上</div>
                </div>
                <div class="adList">
                    <div class="adImgArea"><img class="adImg" src="http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKaR0qCS2Z3iaj4IyVwF1STcrrWe5jicHbKHFz1k0P5KW0knapiaxgZTNaCUW6egbpDb8whj7HyicO3Wg/132"></div>
                    <div class="adTitle">将社区卡放置于导向台的读卡器上</div>
                </div>
                <div class="adList">
                    <div class="adImgArea"><img class="adImg" src="http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKaR0qCS2Z3iaj4IyVwF1STcrrWe5jicHbKHFz1k0P5KW0knapiaxgZTNaCUW6egbpDb8whj7HyicO3Wg/132"></div>
                    <div class="adTitle">将社区卡放置于导向台的读卡器上</div>
                </div>
                <div class="adList">
                    <div class="adImgArea"><img class="adImg" src="http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKaR0qCS2Z3iaj4IyVwF1STcrrWe5jicHbKHFz1k0P5KW0knapiaxgZTNaCUW6egbpDb8whj7HyicO3Wg/132"></div>
                    <div class="adTitle">将社区卡放置于导向台的读卡器上</div>
                </div>

            </div>
            
            <div class="changeBtn hvr-pop" onclick="getAdList(0)"></div>
            
            <div class="tspicArea">
                <img src="/Public/dxt/img/ystp.jpg">
            </div>
            
            <div class="tsArea">将社区卡放置于导向台的读卡器上</div>
            
            <input type="text" name="card_num" id="card_num" class="inputArea" maxlength="10" onkeyup="value = value.replace(/[^1234567890]+/g, '')"/>
            
            <div class="qrcodeArea">
                <img src='/Public/dxt/img/lyznsq_qrcode.jpg' style="width:129px;height:129px;">
            </div>
            <div class="qrcodeTsTitle">扫码关注公众号</div>
        </div>
    </body> 
</html>