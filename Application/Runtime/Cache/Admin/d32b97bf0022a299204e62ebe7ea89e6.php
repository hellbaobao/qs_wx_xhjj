<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); ?>
        <link rel="stylesheet" href="/Public/Plugin/bootstrap/css/bootstrap-treeview.css"/>
        <link rel="stylesheet" href="/Public/admin/css/common.css"/>
        <script type="text/javascript" src="/Public/Plugin/layer-v3.0.2/layer.js"></script>
        <script type="text/javascript" src="/Public/admin/js/common.js"></script>
        <link rel="stylesheet" type="text/css" href="/Public/admin/Plugin/wnDate/css/simple-calendar.css"/>
        <script type="text/javascript">
            //鼠标点击事件
            function dateonclick(yy, mm, dd) {
                $('#checkedDate').html(yy + '年' + mm + '月' + dd + '日');
                $('#closeVisit-btn').attr('onclick', 'closeVisit(' + yy + ',' + mm + ',' + dd + ')');
                $('#openVisit-btn').attr('onclick', 'openVisit(' + yy + ',' + mm + ',' + dd + ')');
                $.post(c_path + '/getDateVisitList', {'yy': yy, 'mm': mm, 'dd': dd}, function (data) {
                    if (data.status) {
                        $('#visitInfo').html("此日闭馆，谢绝参观");
                        $('#closeVisit-btn').css('display', 'none');
                        $('#openVisit-btn').css('display', 'block');
                    } else {
                        $('#visitInfo').html('场次：' + data.count + '&#12288;人次：' + data.sum);
                        $('#closeVisit-btn').css('display', 'block');
                        $('#openVisit-btn').css('display', 'none');
                    }
                    var str = '<tr>' +
                            '<th style="width: 50px;">序号</th>' +
                            '<th>预约人数</th>' +
                            '<th>联系人</th>' +
                            '<th>联系电话</th>' +
                            '</tr>';
                    if (data.count != 0) {
                        for (var i = 0; i < data.list.length; i++) {
                            str += '<tr class="tr">' +
                                    '<td>' + (i + 1) + '</td>' +
                                    '<td>' + data.list[i].appt_num + '</td>' +
                                    '<td>' + data.list[i].linkman_name + '</td>' +
                                    '<td>' + data.list[i].linkman_tel + '</td>' +
                                    '</tr>';
                        }
                    } else {
                        str += '<tr><td colspan="4">暂无数据</td></tr>';
                    }
                    $('#tableList').html(str);

                }, 'json');

            }
            function closeVisit(yy, mm, dd) {
                layer.confirm('确定 ' + yy + '年' + mm + '月' + dd + '日 要闭馆吗？', {
                    icon: 2,
                    title: '提示信息',
                    btn: ['确定', '取消'] //按钮
                }, function (index) {
                    $.post(c_path + '/setCloseVisitDate', {'yy': yy, 'mm': mm, 'dd': dd}, function (data) {
                        if (data.flag == 1) {
                            layer.msg(constants.SUCCESS, {time: 1000}, function () {
//                                location.reload();
                                dateonclick(yy, mm, dd);
                            });
                        } else {
                            layer.msg(constants.FAILD);
                        }
                    }, 'json');
                });
            }
            function openVisit(yy, mm, dd) {
                layer.confirm('确定 ' + yy + '年' + mm + '月' + dd + '日 要开启接待参观吗？', {
                    icon: 1,
                    title: '提示信息',
                    btn: ['确定', '取消'] //按钮
                }, function (index) {
                    $.post(c_path + '/delCloseVisitDate', {'yy': yy, 'mm': mm, 'dd': dd}, function (data) {
                        if (data.flag == 1) {
                            layer.msg(constants.SUCCESS, {time: 1000}, function () {
//                                location.reload();
                                dateonclick(yy, mm, dd);
                            });
                        } else {
                            layer.msg(constants.FAILD);
                        }
                    }, 'json');
                });
            }
        </script>
        <script type="text/javascript" src="/Public/admin/Plugin/wnDate/js/simple-calendar.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-md-5">
                <div id='container'></div>
            </div>
            <div class="col-md-7">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4" style="font-size: 24px;">
                                <span id="checkedDate"></span>
                            </div>
                            <div class="col-md-6" style="font-size: 24px;">
                                <span id="visitInfo">场次：0&#12288;人次：0</span>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-warning closeVisitBtn" id="closeVisit-btn" style="height: 34px;float: right;display:none;" onclick="closeVisit()">
                                    <span class="glyphicon glyphicon-off"></span> 闭馆
                                </button>
                                <button type="button" class="btn btn-success closeVisitBtn" id="openVisit-btn" style="height: 34px;float: right;display:none;" onclick="openVisit()">
                                    <span class="glyphicon glyphicon-off"></span> 开启
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body" style="height:445px;">
                        <div class="table_content">
                            <table class="table table-hover" id="tableList">
                                <tr>
                                    <th style="width: 50px;">序号</th>
                                    <th>预约人数</th>
                                    <th>联系人</th>
                                    <th>联系电话</th>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <script>
            var myCalendar = new SimpleCalendar('#container');
            $(function () {
                var mydate = new Date();
                var y = mydate.getFullYear();
                var m = (mydate.getMonth() + 1);
                var d = mydate.getDate();
                dateonclick(y, m, d);
            });
        </script>



    </body>

</html>