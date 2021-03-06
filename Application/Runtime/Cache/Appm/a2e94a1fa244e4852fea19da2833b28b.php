<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>我的资料</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="x-rim-auto-match" content="none">

        <link rel="stylesheet" href="/Public/appm/css/mui.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/mui.picker.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/icons-extra.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/appm/css/common.css" type="text/css"/>
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
            #headimgurl {
                position: absolute;
                bottom: 10px;
                right: 40px;
                width: 40px;
                height: 40px;
            }
            .u
        </style>

        <script type="text/javascript" src="/Public/appm/js/jquery-1.11.0.js"></script>
        <script type="text/javascript" src="/Public/appm/js/mui.min.js"></script>
        <script type="text/javascript" src="/Public/appm/js/mui.picker.min.js"></script>
        <script type="text/javascript" src="/Public/appm/js/year.data.js"></script>
        <script type="text/javascript">
            (function ($, doc) {
                $.init();
                $.ready(function () {
                    /**
                     * 获取对象属性的值
                     * 主要用于过滤三级联动中，可能出现的最低级的数据不存在的情况，实际开发中需要注意这一点；
                     * @param {Object} obj 对象
                     * @param {String} param 属性名
                     */
                    var _getParam = function (obj, param) {
                        return obj[param] || '';
                    };
                    //					//级联示例
                    var Picker3 = new $.PopPicker({
                        layer: 3
                    });
                    for (var i = 0; i < monthData.length; i++) {
                        monthData[i].children = dayData;
                    }
                    for (var i = 0; i < yearData.length; i++) {
                        yearData[i].children = monthData;
                    }
                    console.log(yearData);
                    Picker3.setData(yearData);
                    var showCityPickerButton = doc.getElementById('birthday');
                    var cityResult3 = doc.getElementById('cityResult3');
                    showCityPickerButton.addEventListener('tap', function (event) {
                        Picker3.show(function (items) {
                            showCityPickerButton.value = _getParam(items[0], 'text') + "-" + _getParam(items[1], 'text') + "-" + _getParam(items[2], 'text');
                            //返回 false 可以阻止选择框的关闭
                            //return false;
                        });
                    }, false);
                });
            })(mui, document);

        </script>
        <?php echo ($Assigndata); ?>
        <script src="/Public/appm/js/common.js"></script>
        <script type="text/javascript" src="/Public/appm/js/my_info.js"></script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Appm/index/setting')"></a>
            <h1 class="mui-title header-a-l">我的资料</h1>	
        </header>

        <!--页面主内容区开始-->
        <div class="mui-content">

            <div class="mui-card">
                <div class="mui-card-content">
                    <ul class="mui-table-view mui-table-view-chevron">
                        <li class="mui-table-view-cell">
                            <a id="head" class="mui-navigate-right" onclick="aHref('/index.php/Appm/index/tx_upload')">头像
                                <span class="mui-pull-right head">
                                    <img class="head-img mui-action-preview" id="headimgurl" src="#"/>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="mui-card">
                <div class="mui-card-content">
                    <form class="mui-input-group">
                        <div class="mui-input-row">
                            <label>姓名</label>
                            <input type="text" id="realname" style="text-align: left;width: 50%;" placeholder="请输入姓名" >
                        </div>
                        <div class="mui-input-row">
                            <label>性别</label>
                            <select style="margin: 0;text-align: left;width: 50%;" name="gender" id="gender">
                                <option value="0" id="man">男</option>
                                <option value="1">女</option>
                            </select>
                        </div>

                        <div class="mui-input-row">
                            <label>生日</label>
                            <input id='birthday' style="text-align: left;width: 50%;" placeholder="请选择生日" type='text' onkeyup="value = value.replace(/[^1234567890-]+/g, '')">
                            <div id='cityResult3' class="ui-alert"></div>
                            <!--<input type="text" id="birthday" style="text-align: left;width: 50%;" placeholder="如1970-01-01"  onkeyup="value = value.replace(/[^1234567890-]+/g, '')">-->
                        </div>
                        <div class="mui-input-row">
                            <label>手机</label>
                            <input type="text" id="tel" style="text-align: left;width: 50%;" placeholder="请输入手机号码" onkeyup="value = value.replace(/[^1234567890-]+/g, '')">
                        </div>
                        <div class="mui-input-row">
                            <label>社区</label>
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

                    </form>


                </div>
            </div>
            <div class="mui-row">
                <button type="button" class="mui-btn mui-btn-success mui-btn-block" onclick="saveUserInfo()">保存</button>
            </div>
            <!--页面主内容区结束-->
        </div>
    </body>

</html>