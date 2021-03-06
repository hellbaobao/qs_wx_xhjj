<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>预约参观</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/home/css/mui.min.css">
        <link rel="stylesheet" href="/Public/home/css/mui.picker.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/home/css/activity.css">

        <script src="/Public/home/js/jquery-1.11.0.js"></script>
        <link rel="stylesheet" href="/Public/home/css/common.css">
        <script src="/Public/home/js/mui.min.js"></script>
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
                    var showCityPickerButton = doc.getElementById('appt_time');
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
        <script src="/Public/home/js/common.js"></script>
        <script type="text/javascript" src="/Public/home/js/mui.picker.min.js"></script>
        <script type="text/javascript" src="/Public/home/js/year.data.js"></script>
        <script type="text/javascript">
            /**
             * 提交
             * @returns {undefined}
             */
            function subVisitOrder() {
                var flag = 1;
                telCheck = /^1[3|5|7|8|][0-9]{9}$/;
                if ($('#linkman_tel').val() != '' && $('#linkman_name').val() != '' && $('#appt_num').val() != '' && $('#appt_time').val() != '') {
                    if (telCheck.test($('#linkman_tel').val())) {
                        flag = 1;
                    } else {
                        flag = 0;
                        msg = '手机号码不正确';
                    }
                } else {
                    flag = 0;
                    msg = '请完善信息';
                }
                if (flag == 0) {
                    mui.toast(msg, {duration: 'long', type: 'div'});
                } else {
                    $.post("../appt/addVisitOrder", {
                        'linkman_tel': $('#linkman_tel').val(),
                        'linkman_name': $('#linkman_name').val(),
                        'appt_num': $('#appt_num').val(),
                        'appt_time': $('#appt_time').val(),
                    }, function (data) {
                        if (data.flag == 1) {
                            mui.toast("提交参观预约成功！", {duration: 'long', type: 'div'});
                        } else {
                            mui.toast(data.msg, {duration: 'long', type: 'div'});
                        }
                    }, 'json');
                }

            }
        </script>
    </head>

    <body>
        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <h1 id="title" class="mui-title header-a-l">预约参观</h1>
        </header>
        <!--tab-->
        <div class="mui-content">
            <div class="mui-card">
                <div class="mui-card-content">
                    <div class="mui-card-content-inner" style="color:#C00000;">
                        请认真填写联系人信息及预约时间和人数。
                    </div>
                </div>
            </div>
            <div class="mui-card">
                <div class="mui-card-content">
                    <div class="m-inputheader">预约时间</div>
                    <div class="m-inputframe">
                        <input id='appt_time'  type='text' onkeyup="value = value.replace(/[^1234567890-]+/g, '')">
                        <div id='cityResult3' class="ui-alert"></div>
                    </div>
                    <div class="m-inputheader">预约人数</div>
                    <div class="m-inputframe">
                        <input type="text" id="appt_num" name="appt_num"  onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                    </div>
                    <div class="m-inputheader">联系人</div>
                    <div class="m-inputframe">
                        <input type="text" id="linkman_name" name="linkman_name">
                    </div>
                    <div class="m-inputheader">联系方式</div>
                    <div class="m-inputframe">
                        <input type="text" id="linkman_tel" name="linkman_tel"  onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                    </div>



                </div>
            </div>
            <div class="mui-row">
                <button type="button" class="mui-btn mui-btn-primary mui-btn-block" onclick="subVisitOrder()">提交</button>
            </div>
        </div>
    </body>
</html>