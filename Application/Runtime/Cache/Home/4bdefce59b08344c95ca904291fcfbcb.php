<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>热搜</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/home/css/mui.min.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/home/css/icons-extra.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/home/css/common.css" type="text/css"/>
        <link href="/Public/home/css/notice.css" rel="stylesheet" type="text/css"/>
        <script src="/Public/home/js/jquery-1.11.0.js"></script>
    </head>

    <body id="body">
        <!--主体部分-->
        <div class="mui-content" style="background-color: #fff;">
            <div>
                <section style="text-align: center;">
                    <section style="text-align: center;display: inline-block;">
                        <section style="width:1.3em;text-align:left;margin-bottom: -46px;margin-left: -15px;">
                            <section style="display: inline-block;">
                                <img style="width:100%;display: block;transform:rotate(0deg);" src="http://image2.135editor.com/cache/remote/aHR0cHM6Ly9tbWJpei5xbG9nby5jbi9tbWJpel9wbmcvN1FSVHZrSzJxQzRpY1NRdFlxOGlicE8wNGNlQ2lhZEdFNkl4V3dkUlprcUJQNGljVWljbXZpY0w5ZWZXU29aWlpwRHhicGlhZnF5N0xZMjE2emFDSVNaaDVVNHJBLzA="/>
                            </section>
                        </section>
                        <section style="display: inline-block;border: 1px solid #198247;border-top-width:4px;">
                            <section style="font-family: &quot;微软雅黑&quot;;font-size: 16px;letter-spacing: 1.5px;color: #198247;text-align: center;padding: 4px 1em 6px 1em;">
                                热搜：<?php echo ($key); ?>
                            </section>
                        </section>
                    </section>
                </section>
            </div>
            <div>
                <!--list页面部分-->
                <ul class="mui-table-view" id="noticeList">
                </ul>
                <!--动态加载模块-->
                <button id="loadMore" type="button" data-loading-icon="mui-spinner mui-spinner-custom" style="border:0px;width: 100%;color:#999;padding: 12px 0px;" class="mui-btn" sth onclick="loadMore()"></button>
                <input type="hidden" id="page" value="1">
            </div>
        </div>
    </body>

</html>
<script src="/Public/home/js/mui.min.js"></script>
<script type="text/javascript">
                    //启用双击监听
                    mui.init({
                        gestureConfig: {
                            doubletap: true, //双击关闭
                        }
                    });
</script>
<?php echo ($Assigndata); ?>
<script src="/Public/home/js/common.js"></script>
<script type="text/javascript">
                    var key = getUrl('key');
                    $(function () {
                        getList(1, key);
                    });
                    function getList(page) {
                        $.post(c_path + "/getHotList", {'page': page, 'key': key}, function (data) {
                            //通知公告
                            var str = '';
                            if (data.flag == 1) {
                                for (var i = 0; i < data.data.length; i++) {


                                    str += '<div class="mui-card" style="border-color:blue;">';
                                    str += '<a class="mui-card-header" style="color:#000;" href="' + data.data[i]["href"] + '" target="_blank">' + data.data[i]["id"] + '&nbsp;' + data.data[i]["title"] + '</a>';
                                    str += '<a class="mui-card-content" style="color:#000;" href="' + data.data[i]["href"] + '" target="_blank">';
                                    str += '<div class="mui-card-content-inner">';
                                    str += '<p>' + data.data[i]["info"] + '</p>';
                                    str += '</div>';
                                    str += '</a>';
                                    str += '<div class="mui-card-footer">';
                                    str += '<a href="' + data.data[i]["author_link"] + '" target="_blank"  class="mui-card-link">【' + data.data[i]["author"] + '】</a>';
                                    str += '<a class="mui-card-link">' + data.data[i]["datetime"] + '</a>';
                                    str += '</div>';
                                    str += '</div>';

//                            str += '<li class="mui-table-view-cell mui-media">';
//                    str += '<a href="' + data.data[i]["href"] + '" target="_blank">';
//                    str += '<div class="mui-media-body">' +
//                            '<div class="mui-ellipsis-2">' + data.data[i]["title"] + '</div>' +
//                            '<p class="mui-ellipsis-2">' + data.data[i]["info"] + '</p>' +
//                            '</div>' +
//                            '</a>' +
//                            '</br><a href="' + data.data[i]["author_link"] + '" target="_blank" style="color:#00BFFF">【' + data.data[i]["author"] + '】</a>fdsfsd' +
//                            '</li>';
                                }
                            } else {
                                str = '<li class="mui-table-view-cell font999" style="padding-right: 10px;text-align:center;">(＞﹏＜)&#12288;暂无消息</li>';
                            }

                            $("#noticeList").append(str);
                            $("#page").val(data.page);
                            if (data.is_end == 1) {
                                $("#loadMore").removeAttr('onclick');
                            } else {
                                $("#loadMore").attr('onclick', 'loadMore()');
                            }

                            mui("#loadMore").button('reset');
                            $("#loadMore").html(data.ajaxLoad);
                        }, 'json');
                    }

                    /**
                     * 动态加载数据
                     * @param {Object} type
                     */
                    function loadMore() {
                        mui("#loadMore").button('loading');
                        var page = parseInt($("#page").val()) + 1;
                        getList(page, key);
                    }
</script>