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
        <script type="text/javascript" src="/Public/appm/js/qrcodeurl_transfer_comm.js"></script>
    </head>

    <body>

        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <h1 id="title" class="mui-title header-a-l"><?php echo ($commInfo["com_name"]); ?>社区</h1>
        </header>

        <!--主体部分-->

        <div class="mui-content" style="padding-top: 45px;">

            <div class="mui-row">
                
            </div>
            <div class="mui-row">
                <div class="mui-card">
                    <div class="mui-card-content">
                        <div class="mui-card-content-inner">
                            用户：<?php echo ($userInfo["realname"]); ?>(<?php echo ($userInfo["tel"]); ?>)</br>
                            积分：<?php echo ($userInfo["integral_num"]); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--卡片1-->
            <div class="mui-card">
                <div class="mui-card-header">
                    <div class="mui-card-link"><div class="seller_s"></div>直接转积分给[<?php echo ($commInfo["com_name"]); ?>社区]</div>
                </div>
                <div class="mui-card-content">
                    <form class="mui-input-group">
                        <div class="mui-input-row" style="width: 100%;background-color: #eee;border:1px solid #ccc;border-radius: 4px;">
                            <input id="integral_num" type="text" placeholder="请输入转账的积分值" onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                        </div>
                        <div class="mui-button-row" style="height:auto;">
                            <button type="button" class="mui-btn mui-btn-primary mui-btn-block" onclick="transrerIntegral()">转账</button>
                        </div>
                    </form>
                </div>
            </div>



        </div>

    </div>
</body>

</html>