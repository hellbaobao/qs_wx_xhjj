<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>商家资料</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="x-rim-auto-match" content="none">

        <link rel="stylesheet" href="/Public/seller/css/mui.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/seller/css/icons-extra.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/seller/css/common.css" type="text/css"/>
        <style type="text/css">
            .head {
                height: 40px;
            }
            #head {
                line-height: 40px;
            }
            .head-img {
                width: 40px;
                height: 40px;
            }
            #head-img1 {
                position: absolute;
                bottom: 10px;
                right: 40px;
                width: 40px;
                height: 40px;
            }
        </style>

        <script type="text/javascript" src="/Public/seller/js/jquery-1.11.0.js"></script>
        <script type="text/javascript" src="/Public/seller/js/mui.min.js"></script>
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
        <script type="text/javascript" src="/Public/seller/js/my_info.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Seller/seller/seller_home')"></a>
            <h1 class="mui-title header-a-l">商家资料</h1>	
        </header>
        <!--页面主内容区开始-->
        <div class="mui-content">
            <div class="mui-card">
                <div class="mui-card-content">
                    <ul class="mui-table-view mui-table-view-chevron">
                        <li class="mui-table-view-cell">
                            <a class="mui-navigate-right" onclick="aHref('/index.php/Seller/seller/tx_upload')">头像
                                <img class="mui-media-object mui-pull-right head-img" id="head-img" src="../../../<?php echo ($sellerInfo["tx_path"]); ?>">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mui-card">
                <div class="mui-card-content">
                    <ul class="mui-table-view mui-table-view-chevron">
                        <li class="mui-table-view-cell">
                            <a class="mui-navigate-right" onclick="aHref('/index.php/Seller/seller/zz_upload')">资质照片
                                <?php if(is_array($zzPic)): foreach($zzPic as $key=>$v): ?><img class="mui-media-object mui-pull-right head-img" src="../../../<?php echo ($v["file_path"]); ?>"><?php endforeach; endif; ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mui-card">
                <div class="mui-card-content">
                    <form class="mui-input-group">
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
                            <input type="text" id="contacts" style="text-align: left;width: 50%;" placeholder="请输入联系人">
                        </div>
                        <div class="mui-input-row">
                            <label>联系方式</label>
                            <input type="text" id="tel" style="text-align: left;width: 50%;" placeholder="请输入手机号码" onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                        </div>


                    </form>


                </div>
            </div>
            <div class="mui-row">
                <button type="button" class="mui-btn mui-btn-success mui-btn-block" onclick="saveUserInfo()">修改资料</button>
            </div>
            <!--页面主内容区结束-->
        </div>
    </body>

</html>