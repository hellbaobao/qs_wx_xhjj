<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>完善信息</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/seller/css/mui.min.css">

        <script src="/Public/seller/js/jquery-1.11.0.js"></script>
        <link rel="stylesheet" href="/Public/seller/css/common.css">
        <script src="/Public/seller/js/mui.min.js"></script>
        <script type="text/javascript">
            //启用双击监听
            mui.init({
                gestureConfig: {
                    doubletap: true
                },
            });
        </script>
        <?php echo ($Assigndata); ?>
        <script src="/Public/seller/js/common.js"></script>
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3"></script>
        <script src="/Public/seller/js/perfect_info.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Seller/index/apply')">
                <!--<sapn class="comfont">设置</span>-->
            </a>
            <h1 id="title" class="mui-title header-a-l">完善信息</h1>
        </header>
        <!--tab-->
        <div class="mui-content">
            <div class="mui-card">
                <div class="mui-card-content">
                    <ul class="mui-table-view mui-table-view-chevron">
                        <li class="mui-table-view-cell">
                            <a id="head" class="mui-navigate-right">
                                手机号码：【<span id="tel"><?php echo ($tel); ?></span>】
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mui-card">
                <div class="mui-card-content">
                    <form class="mui-input-group">
                        <input type="hidden" name="headimgurl" id="headimgurl" value="<?php echo ($wxInfo["headimgurl"]); ?>"/>
                        <input type="hidden" name="nickname" id="nickname" value="<?php echo ($wxInfo["nickname"]); ?>"/>
                        <input type="hidden" name="openid" id="openid" value="<?php echo ($wxInfo["openid"]); ?>"/>
                        <div class="mui-input-row">
                            <label>营业执照号</label>
                            <input type="text" id="business_license" style="text-align: left;width: 50%;" placeholder="请输入营业执照号" onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                        </div>
                        <div class="mui-input-row">
                            <label>商家名称</label>
                            <input type="text" id="name" style="text-align: left;width: 50%;" placeholder="请输入商家名称" >
                        </div>
                        <div class="mui-input-row">
                            <label>注册社区</label>
                            <select style="margin: 0;text-align: left;width: 50%;" id="address_id" name="address_id">
                                <option value='1'>翠景北里</option>
                                <option value='2'>翠屏北里</option>
                                <option value='3'>翠屏南里</option>
                                <option value='4'>大方居</option>
                                <option value='5'>格瑞雅居</option>
                                <option value='6'>葛布店东里</option>
                                <option value='7'>金侨时代</option>
                                <option value='8'>京洲园</option>
                                <option value='9'>靓景明居</option>
                                <option value='10'>梨园东里</option>
                                <option value='11'>龙鼎园</option>
                                <option value='12'>曼城家园</option>
                                <option value='13'>群芳园</option>
                                <option value='14'>万盛北里</option>
                                <option value='15'>欣达园</option>
                                <option value='16'>新城乐居</option>
                                <option value='17'>新华联南区</option>
                                <option value='18'>颐瑞东里</option>
                                <option value='19'>颐瑞西里</option>
                                <option value='20'>云景北里</option>
                                <option value='21'>云景东里</option>
                                <option value='22'>云景里</option>
                            </select>
                        </div> 
                        <div class="mui-input-row">
                            <label>商家地址</label>
                            <input type="text" id="address" style="text-align: left;width: 50%;" placeholder="请输入地址" >
                            <input type="hidden" id="address_api_url" value="">
                            <div style="display:none"; id="container"></div>
                        </div>
                        <div class="mui-input-row">
                            <label>联系人</label>
                            <input type="text" id="contacts" value="<?php echo ($wxInfo["nickname"]); ?>" style="text-align: left;width: 50%;" placeholder="请输入联系人">
                        </div>
                    </form>
                </div>
            </div>
            <div class="mui-row">
                <button type="button" class="mui-btn mui-btn-primary mui-btn-block" onclick="saveSellerInfo()">下一步</button>
            </div>
        </div>
    </body>
</html>