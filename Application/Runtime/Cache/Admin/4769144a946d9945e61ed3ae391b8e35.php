<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); echo (DATEPICKER); ?>
        <link rel="stylesheet" href="/Public/admin/css/common.css">
        <link rel="stylesheet" type="text/css" href="/Public/admin/plugin/webuploader/webuploader.css">
        <script type="text/javascript" src="/Public/Plugin/layer-v3.0.2/layer.js"></script>
        <script type="text/javascript" src="/Public/Plugin/ueditor1.4.3.3/ueditor.config.js" charset="UTF-8"></script>
        <script type="text/javascript" src="/Public/Plugin/ueditor1.4.3.3/ueditor.all.min.js" charset="UTF-8"></script>
        <script type="text/javascript" src="/Public/Plugin/ueditor1.4.3.3/lang/zh-cn/zh-cn.js" charset="UTF-8"></script>
        <script type="text/javascript" src="/Public/admin/plugin/webuploader/webuploader.min.js"></script>
        <script type="text/javascript" src="/Public/admin/js/common.js"></script>
        <script type="text/javascript" src="/Public/admin/js/seller/sellerPromInfo.js"></script>
    </head>
    <body>
        <!--添加信息-->
        <div class="container">
            <form method="post" class="form-horizontal" id="save-form" style="margin-top: 20px;">
                <div id="fileJson" name="fileJson" style="display: none;"><?php echo ($attachList); ?></div>
                <input type="hidden" name="id" value="<?php echo ($sellerPromInfo["id"]); ?>"/>
                <input type="hidden" name="from" value="<?php echo ($from); ?>"/>
                <?php if($from != ''): ?><input type="hidden" name="seller_id" value="<?php echo ($sellerPromInfo["seller_id"]); ?>"/><?php endif; ?>
                <div class="form-group">
                    <label for="address_id" class="col-sm-2 control-label">所属社区</label>
                    <?php if($_SESSION['sys_name']== 'sysAdmin'): ?><div class="col-sm-8">
                            <select class="form-control" id="address_id" name="address_id">
                                <option value='0'>全体社区</option>
                                <?php if(is_array($communitys)): foreach($communitys as $key=>$val): ?><option value='<?php echo ($val["id"]); ?>' <?php if($val["id"] == $sellerPromInfo['address_id']): ?>selected<?php endif; ?> >
                                    <?php echo ($val["com_name"]); ?>
                                    </option><?php endforeach; endif; ?>
                            </select>
                        </div>
                        <label class="col-sm-2"><span class="tipMsg">*必选</span></label>
                        <?php elseif($_SESSION['sys_name']== 'sqAdmin'): ?>
                        <label style="line-height: 33px;margin-left: 12px;"><?php echo ($community); ?></label><?php endif; ?>
                </div>

                <?php if($_SESSION['sys_name']== 'sqAdmin'): ?><div class="form-group">
                        <label for="address_id" class="col-sm-2 control-label">商&#12288;&#12288;家</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="seller_id" name="seller_id">
                                <?php if(is_array($sellers)): foreach($sellers as $key=>$val): ?><option value='<?php echo ($val["id"]); ?>' <?php if($val["id"] == $sellerPromInfo['seller_id']): ?>selected<?php endif; ?> >
                                    <?php echo ($val["name"]); ?>
                                    </option><?php endforeach; endif; ?>
                            </select>
                        </div>
                        <label class="col-sm-2"><span class="tipMsg">*必选</span></label>
                    </div><?php endif; ?>

                <div class="form-group" id="sellers-select-div">

                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">标&#12288;&#12288;题</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo ($sellerPromInfo["title"]); ?>" placeholder="请输入标题">
                    </div>
                    <label class="col-sm-2"><span class="tipMsg">*必填</span></label>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">广告时间</label>
                    <div class="col-sm-5" >
                        <div class="input-group">
                            <input type="text" class="form-control" id="start_time" name="start_time" value="<?php echo ($sellerPromInfo["start_time"]); ?>" placeholder="请输入开始时间">
                            <span class="input-group-addon">至</span>
                            <input type="text" class="form-control" id="end_time" name="end_time" value="<?php echo ($sellerPromInfo["end_time"]); ?>" placeholder="请输入结束时间">
                        </div>
                    </div>
                    <label class="col-sm-2"><span class="tipMsg">*必填</span></label>
                </div>
                <div class="form-group">
                    <label for="editor" class="col-sm-2 control-label">广告图片</label>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-2">
                                <div  id="filePicker">添加图片</div>
                            </div>
                            <div class="col-sm-9">
                                <span class="tipMsg">请上传宽高比约为2:1的海报形宣传图</span>
                            </div>
                        </div>
                        <div id="fileList" id="upload" class="uploader-list" style="width: 100%;height: 120px;background-color: #fff;border:1px solid #ccc;border-radius: 4px;padding: 10px;"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="editor" class="col-sm-2 control-label">内&#12288;&#12288;容</label>
                    <div class="col-sm-8">
                        <script id="editor" type="text/plain" name="content"></script>
                    </div>
                </div>
                <div class="form-group select-items" style="display: none;">
                    <label for="item_table" class="col-sm-2 control-label"></label>
                    <div class="col-sm-9">
                        <table class="table table-hover" id="select_item_table">
                            <tr class="itemsTableTitle">
                                <th>序号</th>
                                <th>图片</th>
                                <th>名称</th>
                                <th>分类</th>
                                <th>价格</th>
                                <th>操作</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-9">
                        <button type="button" class="btn btn-primary" id="saveInfo-btn">提&#12288;&#12288;交</button>
                        <button type="button" class="btn btn-warning" onclick="javascript:void(window.location.href = '/index.php/Admin/SellerPromInfo/showList/seller_id/<?php echo ($sellerPromInfo["seller_id"]); ?>')">取&#12288;&#12288;消</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
    <script type="text/javascript">
        $(document).ready(function () {
            
            if ($('#fileJson').text().length > 0) {
                var jsonObj = $.parseJSON($('#fileJson').text());
                if (jsonObj.length > 0) {
                    var strHtml = '';
                    $.each(jsonObj, function (index, value) {
                        strHtml += '<div id="WU_FILE_10' + index + '" class="file-item thumbnail" style="float:left;">';
                        strHtml += '<div style="width:100px;margin-right:10px;">';
                        strHtml += '<img src="/' + value.file_path + '" style="width:100px;height:70px;">';
                        strHtml += '<div class="del fontred font12" style="background-color:#bbb;width:100px;border-radius:2px;">删除</div>';
                        strHtml += '<input type="hidden" name="files[]" value="' + value.id + '" />';
                        strHtml += '</div></div>';
                    });
                    $('#fileList').append(strHtml);// $list为容器jQuery实例
                }
            }
            
            var contentEditor = UE.getEditor('editor', {
                //这里可以选择自己需要的工具按钮名称
                toolbars: [[
                        'fullscreen', 'source', '|', 'undo', 'redo', '|',
                        'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', '|',
                        'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
                        'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
                        'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|',
                        'link', 'unlink', '|', 'simpleupload', 'insertimage'
                    ]],
                //focus时自动清空初始化时的内容
                autoClearinitialContent: true,
                //关闭字数统计
                wordCount: true,
                //关闭elementPath
                elementPathEnabled: false,
                //默认的编辑区域高度
                initialFrameHeight: 450,
            })
            //初始化编辑器的值
            contentEditor.ready(function () {
                contentEditor.setContent('<?php echo ($sellerPromInfo["content"]); ?>');
            });
            
//            ---------------------------------------------------
 
            // 初始化Web Uploader
            var uploader = WebUploader.create({
                auto: true, // 选完文件后，是否自动上传。
                swf: '/Public/admin/plugin/webuploader/Uploader.swf', // swf文件路径
                server: '/index.php/Admin/allattach/uploadAttach/module_name/sellerProm', // 文件接收服务端。
                // 选择文件的按钮。可选。内部根据当前运行是创建，可能是input元素，也可能是flash.
                pick: '#filePicker',
                accept: {
                    title: 'Images',
                    extensions: 'gif,jpg,jpeg,bmp,png',
                    mimeTypes: 'image/*'
                },
                duplicate: true//可重复上传
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
                $.post('/index.php/Admin/allattach/delAttach', {'id': $(this).next().val()}, function (result) {
                    if (result.code == '500') {
                        var id = $obj.parent().attr('id');
                        if (typeof (id) != 'undefined') {
                            uploader.removeFile($obj.parent().attr('id'));
                        }
                        $obj.parent().parent().remove();
                    }
                });
            });
            
            $('#start_time').datepicker({changeMonth: true, changeYear: true});
            $('#end_time').datepicker({changeMonth: true, changeYear: true});

            //修改详情时渲染商家列表select
            listSellers();

            //点击改变社区时渲染商家列表select
            $("#address_id").change(function () {
                listSellers();
            })

            function listSellers() {
                var address_id = $("#address_id").val();
                $.ajax({
                    url: '/index.php/Admin/SellerPromInfo/getSellerListSync',
                    type: 'post',
                    data: {address_id: address_id},
                    success: function (res) {
                        if (res.code == 0) {
                            var sellers = eval(res.sellers);
                            var str = '<label for="address_id" class="col-sm-2 control-label">商&#12288;&#12288;家</label> <div class="col-sm-8"> <select class="form-control" id="seller_id" name="seller_id">';
                            for (var i = 0; i < sellers.length; i++) {
                                var id = sellers[i]['id'];
                                var name = sellers[i]['name'];
                                str = str + '<option value=' + id + '';
                                if (id == "<?php echo ($sellerPromInfo['seller_id']); ?>") {
                                    str = str + ' selected';
                                }
                                str = str + '>' + name + '</option>';
                            }
                            str = str + '</select></div><label class="col-sm-2"><span class="tipMsg">*必选</span></label>';
                            $("#sellers-select-div").html(str);
                        } else {
                            $("#sellers-select-div").html('');
                        }
                    }
                })
            }

        });
    </script>
</html>