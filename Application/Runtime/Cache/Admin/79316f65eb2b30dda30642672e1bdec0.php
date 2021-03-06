<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); echo (DATEPICKER); ?>
        <link rel="stylesheet" href="/Public/Plugin/bootstrap/css/bootstrap-treeview.css">
        <link rel="stylesheet" type="text/css" href="/Public/admin/plugin/webuploader/webuploader.css">
        <link rel="stylesheet" href="/Public/admin/css/common.css">
        <script type="text/javascript" src="/Public/Plugin/bootstrap/js/bootstrap-treeview.js"></script>
        <script type="text/javascript" src="/Public/Plugin/layer-v3.0.2/layer.js"></script>
        <script type="text/javascript" src="/Public/Plugin/ueditor1.4.3.3/ueditor.config.js" charset="UTF-8"></script>
        <script type="text/javascript" src="/Public/Plugin/ueditor1.4.3.3/ueditor.all.min.js" charset="UTF-8"></script>
        <script type="text/javascript" src="/Public/Plugin/ueditor1.4.3.3/lang/zh-cn/zh-cn.js" charset="UTF-8"></script>
        <script type="text/javascript" src="/Public/admin/plugin/webuploader/webuploader.min.js"></script>
        <script type="text/javascript" src="/Public/admin/js/common.js"></script>
        <script type="text/javascript" src="/Public/admin/js/seller/sellerInfo.js"></script>
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3&ak=woXSx1cEZqVgwpMkc8bgVzQZ4xHq1IU8"></script>
    </head>
    <body>
        <!--添加信息-->
        <div class="container" >
            <form method="post" action="/index.php/Admin/SellerInfo/saveSellerInfo" enctype="multipart/form-data" class="form-horizontal" id="save-form" style="margin-top: 20px;">
                <div id="fileJson" name="fileJson" style="display: none;"><?php echo ($data["attachList"]); ?></div>
                <input type="hidden" name="id" value="<?php echo ($data["sellerInfo"]["id"]); ?>"/>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">营业执照号</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="business_license" name="business_license" placeholder="请输入13、16、18位字母或数字" value="<?php echo ($data["sellerInfo"]["business_license"]); ?>"/>
                        <?php if($data.errorMsg.business_license != ''): ?><span class="tipMsg"><?php echo ($data["errorMsg"]["business_license"]); ?></span><?php endif; ?>
                    </div>
                    <label class="col-sm-2"><span class="tipMsg">*必填(13、16、18位)</span></label>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">商家名称</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" placeholder="请输入名称" value="<?php echo ($data["sellerInfo"]["name"]); ?>"/>
                        <?php if($data.errorMsg.name != ''): ?><span class="tipMsg"><?php echo ($data["errorMsg"]["name"]); ?></span><?php endif; ?>
                    </div>
                    <label class="col-sm-2"><span class="tipMsg">*必填(1-20个字符)</span></label>
                </div>
                <div class="form-group">
                    <label for="editor" class="col-sm-2 control-label">资质文件</label>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-2">
                                <div  id="filePicker">添加图片</div>
                            </div>
                            <div class="col-sm-9">
                                <span class="tipMsg">请上传营业执照及店面照片</span>
                            </div>

                        </div>

                        <div id="fileList" id="upload" class="uploader-list" style="width: 100%;height: 120px;background-color: #fff;border:1px solid #ccc;border-radius: 4px;padding: 10px;"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address_id" class="col-sm-2 control-label">注册社区</label>
                    <?php if($_SESSION['sys_name']== 'sysAdmin'): ?><div class="col-sm-8">
                            <select class="form-control" id="address_id2" name="address_id">
                                <?php if(is_array($data["communitys"])): foreach($data["communitys"] as $key=>$val): ?><option value='<?php echo ($val["id"]); ?>' <?php if($val["id"] == $data['sellerInfo']['address_id']): ?>selected<?php endif; ?> >
                                    <?php echo ($val["com_name"]); ?>
                                    </option><?php endforeach; endif; ?>
                            </select>
                        </div>
                        <label class="col-sm-2"><span class="tipMsg">*必选</span></label>
                        <?php elseif($_SESSION['sys_name']== 'sqAdmin'): ?>
                        <label style="line-height: 33px;margin-left: 12px;"><?php echo ($data["community"]); ?></label><?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">所在位置</label>
                    <div class="col-sm-8">
                        <div id="allmap" style="width: 700px;height: 250px;"></div>
                    </div>
                    <div id="map-address"></div>
                </div>

                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">商家地址</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="text" class="form-control" id="address" name="address" value="<?php echo ($data["sellerInfo"]["address"]); ?>" placeholder="请输入商家地址">
                            <input type="hidden" name="address_api_url" id="address_api_url" value="<?php echo ($data["sellerInfo"]["address_api_url"]); ?>">
                            <div style="display:none"; id="container"></div>
                            <span class="input-group-addon" onclick="setLongitude()" style="cursor: pointer;"><span class="glyphicon glyphicon-screenshot"></span> 点击定位</span>
                        </div>

                        <?php if($data.errorMsg.address != ''): ?><span class="tipMsg"><?php echo ($data["errorMsg"]["address"]); ?></span><?php endif; ?>
                    </div>
                    <label class="col-sm-2"><span class="tipMsg">*必填(不超过28字)</span></label>
                </div>
                <div class="form-group">
                    <label for="tel" class="col-sm-2 control-label">联系人</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="contacts" name="contacts" value="<?php echo ($data["sellerInfo"]["contacts"]); ?>" placeholder="请输入商家联系人">
                        <?php if($data.errorMsg.contacts != ''): ?><span class="tipMsg"><?php echo ($data["errorMsg"]["contacts"]); ?></span><?php endif; ?>
                    </div>
                    <label class="col-sm-2"><span class="tipMsg">*必填(不超过10字)</span></label>
                </div>
                <div class="form-group">
                    <label for="tel" class="col-sm-2 control-label">联系方式</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="tel" name="tel" value="<?php echo ($data["sellerInfo"]["tel"]); ?>" placeholder="手机号或者固话号" value="<?php echo ($data["sellerInfo"]["tel"]); ?>"/>
                        <?php if($data.errorMsg.tel != ''): ?><span class="tipMsg"><?php echo ($data["errorMsg"]["tel"]); ?></span><?php endif; ?>
                    </div>
                    <label class="col-sm-2"><span class="tipMsg">*必填(手机号或者固话号)</span></label>
                </div>
                <div class="form-group wechat-div">
                    <label for="weChat" class="col-sm-2 control-label">绑定微信</label>
                    <div class="col-sm-8 wechat-list">
                        <?php if($data['sellerWechat'] != NULL): if(is_array($data["sellerWechat"])): foreach($data["sellerWechat"] as $key=>$val): ?><p class="wechat-<?php echo ($val["id"]); ?>">
                                    [<?php echo ($val["name"]); ?>]<?php echo ($val["open_id"]); ?>
                                    <a class="btn btn-primary" title="<?php echo ($val["id"]); ?>">解绑</a>
                                </p><?php endforeach; endif; ?>
                            <?php else: ?>
                            <span style="color:red;font-size: 14px;">暂无微信绑定</span><?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary" >保&#12288;&#12288;存</button>
                        <button type="button" class="btn btn-warning" onclick="javascript:void(window.location.href = '/index.php/Admin/SellerInfo/showList')">取&#12288;&#12288;消</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
    <script type="text/javascript" src="/Public/admin/js/seller/baiduMap.js"></script>
    <script type="text/javascript">
                            //百度地图
                            baiduMap($("input[name='address_api_url']").val());

                            $(document).ready(function () {
                                if ($('#fileJson').text().length > 0) {
                                    console.log($('#fileJson').text().length);
                                    var jsonObj = $.parseJSON($('#fileJson').text());
                                    if (jsonObj.length > 0) {
                                        var strHtml = '';
                                        $.each(jsonObj, function (index, value) {
                                            strHtml += '<div id="WU_FILE_10' + index + '" class="file-item thumbnail" style="float:left;border:0px;">';
                                            strHtml += '<div style="width:100px;margin-right:10px;">';
                                            strHtml += '<img src="/' + value.file_path + '" style="width:100px;height:70px;">';
                                            strHtml += '<div class="del fontred font12" style="background-color:#bbb;width:100px;border-radius:2px;">删除</div>';
                                            strHtml += '<input type="hidden" name="files[]" value="' + value.id + '" />';
                                            strHtml += '</div></div>';
                                        });
                                        $('#fileList').append(strHtml);// $list为容器jQuery实例
                                    }
                                }

//                                var introEditor = UE.getEditor('editor', {
//                                    //这里可以选择自己需要的工具按钮名称
//                                    toolbars: [[
//                                            'fullscreen', 'source', '|', 'undo', 'redo', '|',
//                                            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', '|',
//                                            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
//                                            'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
//                                            'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|',
//                                            'link', 'unlink', '|', 'simpleupload', 'insertimage'
//                                        ]],
//                                    //focus时自动清空初始化时的内容
//                                    autoClearinitialContent: true,
//                                    //关闭字数统计
//                                    wordCount: true,
//                                    //关闭elementPath
//                                    elementPathEnabled: false,
//                                    //默认的编辑区域高度
//                                    initialFrameHeight: 450,
//                                })
//                                //初始化编辑器的值
//                                introEditor.ready(function () {
//                                    introEditor.setContent('<?php echo ($sellerInfo["introduction"]); ?>');
//                                });

                                // 初始化Web Uploader
                                var uploader = WebUploader.create({
                                    auto: true, // 选完文件后，是否自动上传。
                                    swf: '/Public/admin/plugin/webuploader/Uploader.swf', // swf文件路径
                                    server: '/index.php/Admin/allattach/uploadAttach/module_name/sellerInfo', // 文件接收服务端。
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
                                    var $li = $('<div id="' + file.id + '" class="file-item thumbnail" style="float:left;border:0px;"></div> ');
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
                                        console.log(response.att_id);
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
                                    $.post('/index.php/Admin/SellerInfo/delAttach', {'id': $(this).next().val()}, function (result) {
                                        if (result.code == '500') {
                                            var id = $obj.parent().attr('id');
                                            if (typeof (id) != 'undefined') {
                                                uploader.removeFile($obj.parent().attr('id'));
                                            }
                                            $obj.parent().parent().remove();
                                        }
                                    });
                                });

                                //控制微信绑定列表在新增时不显示
                                if ("<?php echo ($data["sellerInfo"]["id"]); ?>" == '') {
                                    $(".wechat-div").hide();
                                }

                            });
    </script>
</html>