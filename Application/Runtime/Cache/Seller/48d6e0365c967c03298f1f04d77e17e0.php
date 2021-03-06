<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>发布广告</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/seller/css/mui.min.css">
        <link rel="stylesheet" href="/Public/seller/css/icons-extra.css">
        <link rel="stylesheet" href="/Public/seller/css/common.css">
        <link rel="stylesheet" type="text/css" href="/Public/seller/plugin/webuploader/webuploader.css">
        <style type="text/css">
            .seller_s{
                height:50%;width:4px;margin-right: 2px;background-color: #7cacff;
            }
            .item_list{
                margin: 4px 3%;background-color:none;width:94%;height:70px;
            }
            .item_list_img{
                background-color: red;float: right;width: 70px;height: 70px;
            }
            .item_list_word{
                height: 35px;;line-height: 35px;
            }
        </style>


        <script src="/Public/seller/js/jquery-1.11.0.js"></script>
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
        <link rel="stylesheet" href="/Public/seller/css/common.css">
        <script type="text/javascript" src="/Public/seller/js/common.js"></script>
        <script type="text/javascript" src="/Public/seller/plugin/webuploader/webuploader.min.js"></script>
        <script type="text/javascript" src="/Public/seller/js/prom_add.js"></script>
    </head>

    <body>

        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Seller/prom/prom_manage')"></a>
            <h1 class="mui-title header-a-l">发布广告</h1>
        </header>

        <div class="mui-content" style="padding-top: 45px;background-color: #fefefe;">

            <div class="mui-row">
                <div class="mui-card">
                    <!--内容区-->
                    <div class="mui-card-content">
                        <div id="fileJson" name="fileJson" style="display: none;"><?php echo ($attachList); ?></div>
                        <form id="save-form">
                            <input type="hidden" name="id" value="<?php echo ($promInfo["id"]); ?>">
                            <div class="mui-input-row">
                                <div class="m-inputheader">广告标题</div>
                                <div class="m-inputframe">
                                    <input type="text" style="margin:0px 0px;" placeholder="请输入广告标题" class="mui-input-clear" name="title" value="<?php echo ($promInfo["title"]); ?>">
                                </div>

                                <div class="m-inputheader">广告详情</div>
                                <div class="m-inputframe">
                                    <textarea placeholder="请输入广告详情" style="margin:0px 0px;" name="content"><?php echo ($promInfo["content"]); ?></textarea>
                                </div>


                            </div>
                            <div class="mui-input-row">
                                <div class="m-inputheader">请上传长宽约为2:1的海报形宣传图</div>
                                <div class="m-inputframe">
                                    <div  id="filePicker">添加宣传图</div>
                                    <div id="fileList" id="upload" class="uploader-list" style="width: 100%;height: 120px;background-color: #fff;border:1px solid #ccc;border-radius: 4px;padding: 10px;"></div>
                                </div>

                            </div>
                            <div class="mui-button-row" style="margin-bottom: 10px;">
                                <button type="button" class="mui-btn mui-btn-primary mui-btn-block"  onclick="subForm()">提交</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </body>

</html>
<script type="text/javascript">
    $(document).ready(function () {

        if ($('#fileJson').text().length > 0) {
            var jsonObj = $.parseJSON($('#fileJson').text());
            if (jsonObj.length > 0) {
                console.log(jsonObj.length);
                var strHtml = '';
                $.each(jsonObj, function (index, value) {
                    strHtml += '<div id="WU_FILE_10' + index + '" class="file-item thumbnail" style="float:left;">';
                    strHtml += '<div style="width:100px;margin-right:10px;">';
                    strHtml += '<img src="/' + value.url + '" style="width:100px;height:70px;">';
                    strHtml += '<div class="del fontred font12" style="background-color:#bbb;width:100px;border-radius:2px;">删除</div>';
                    strHtml += '<input type="hidden" name="files[]" value="' + value.id + '" />';
                    strHtml += '</div></div>';
                });
                $('#fileList').append(strHtml);// $list为容器jQuery实例
            }
        }
        // 初始化Web Uploader
        var uploader = WebUploader.create({
            // 选完文件后，是否自动上传。
            auto: true,
            // swf文件路径
            swf: '/Public/seller/plugin/webuploader/Uploader.swf',
            // 文件接收服务端。
            server: '/index.php/Seller/allattach/uploadAttach/module_name/sellerProm',
            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#filePicker',
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/*'
            },
            //可重复上传         
            duplicate: true
        });
        // 当有文件添加进来的时候
        uploader.on('fileQueued', function (file) {
            var $li = $('<div id="' + file.id + '" class="file-item thumbnail" style="float:left;"></div> ');
            var $img = $li.find('img');
            $('#fileList').append($li);// $list为容器jQuery实例
        });

        // 文件上传过程中创建进度条实时显示。
        uploader.on('uploadProgress', function (file, percentage) {
            var $li = $('#' + file.id);
            var $percent = $li.find('.progress span');
            $percent.css('width', percentage * 100 + '%');
        });

        // 文件上传成功，给item添加成功class, 用样式标记上传成功。
        uploader.on('uploadSuccess', function (file, response) {
            $file = $('#' + file.id);
            if (response.flag == 'success') {
                $file.append('<div style="width:100px;margin-right:10px;"><img src="/' + response.url + '" style="width:100px;height:70px;"><div class="del fontred font12" style="background-color:#bbb;width:100px;border-radius:2px;">删除</div><input type="hidden" name="files[]" value="' + response.att_id + '" /></div>');
                $file.css('background-img', 'url()');
                if ($('#input-title').val() == '') {
                    $('#input-title').val(file.name);
                }
            } else {
                upload_error(file, response);
            }
        });
        // 完成上传完了，成功或者失败，先删除进度条。
        uploader.on('uploadComplete', function (file) {
            $('#' + file.id).find('.progress').remove();
            uploader.removeFile(file.id);
        });

        function upload_error(file, response) {
            var $li = $('#' + file.id);
            $li.remove();
            $.messager.alert('上传错误', response.msg);
        }

        // 删除图片
        var $filelist = $('#fileList');
        $filelist.on('click', '.del', function (e) {
            $obj = $(this);
            $.post('/index.php/Seller/allattach/delAttach', {'id': $(this).next().val()}, function (result) {
                if (result.code == '500') {
                    var id = $obj.parent().attr('id');
                    if (typeof (id) != 'undefined') {
                        uploader.removeFile($obj.parent().attr('id'));
                    }
                    $obj.parent().parent().remove();
                }
            });
        });
    });
</script>