<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>新增积分商品</title>
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
        <script type="text/javascript" src="/Public/seller/js/goods_add.js"></script>
    </head>

    <body>

        <!--头栏-->
        <header class="mui-bar mui-bar-nav header-a-l">
            <a class="mui-icon mui-icon-back mui-pull-left header-a-l" onclick="aHref('/index.php/Seller/goods/goods_manage')"></a>
            <h1 class="mui-title header-a-l">新增积分商品</h1>
        </header>

        <div class="mui-content" style="padding-top: 45px;background-color: #fefefe;">

            <div class="mui-row">
                <div class="mui-card">
                    <!--内容区-->
                    <div class="mui-card-content">
                        <form id="form" method="post" action="/index.php/Seller/Goods/addGoods">
                            <input type="hidden" name="goods_pic" id="input-title"/>
                            <div class="mui-input-row" id="formStr">
                                <div class="m-inputheader">商品名称</div>
                                <div class="m-inputframe">
                                    <input type="text" style="margin:0px 0px;" placeholder="请输入商品名称" class="mui-input-clear" name="goods_name">
                                </div>
                                <div class="m-inputheader">消费类型</div>
                                <div class="m-inputframe">
                                    <div class="m-select">
                                        <select style="margin:0px 0px; text-indent: 12px;" name="cat_id">
                                            <?php if(is_array($data["catLists"])): foreach($data["catLists"] as $key=>$val): ?><option value="<?php echo ($val["id"]); ?>"><?php echo ($val["cat_name"]); ?></option><?php endforeach; endif; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="m-inputheader" id="goods-number-title" style="display: none;">商品编号</div>
                                <div class="m-inputframe"id="goods-number-input" style="display: none;">
                                    <input type="text" style="margin:0px 0px;" placeholder="请输入商品编号" class="mui-input-clear" name="goods_number" onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                                </div>

                                <div class="m-inputheader">库存数量</div>
                                <div class="m-inputframe">
                                    <input type="text" style="margin:0px 0px;" placeholder="请输入库存数量" class="mui-input-clear" name="stock" onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                                </div>

                                <div class="m-inputheader">所需积分值</div>
                                <div class="m-inputframe">
                                    <input type="text" style="margin:0px 0px;" placeholder="请输入积分值" class="mui-input-clear" name="required_integral" onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                                </div>
                                
                                <div class="m-inputheader" id="payment-amount-title">所需支付价</div>
                                <div class="m-inputframe" id="payment-amount-input">
                                    <input type="text" style="margin:0px 0px;" placeholder="请输入实际所要支付的金额" class="mui-input-clear" name="payment_amount" onkeyup="value = value.replace(/[^1234567890.]+/g, '')">
                                </div>
                                
                                <div class="m-inputheader">声明原价</div>
                                <div class="m-inputframe">
                                    <input type="text" style="margin:0px 0px;" placeholder="请输入原价" class="mui-input-clear" name="original_price" onkeyup="value = value.replace(/[^1234567890.]+/g, '')">
                                </div>
                                
                                <!--<div class="m-inputheader">兑换限量数</div>
                                <div class="m-inputframe">
                                    <input type="text" style="margin:0px 0px;" placeholder="空白则不限量" class="mui-input-clear" name="exchange_limit_number" onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                                </div>-->
                                
                                <div class="m-inputheader">每个用户限量数</div>
                                <div class="m-inputframe">
                                    <input type="text" style="margin:0px 0px;" placeholder="空白则不限量" class="mui-input-clear" name="user_exchange_limit" onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                                </div>
                                
                                <div class="m-inputheader">商品详情</div>
                                <div class="m-inputframe">
                                    <textarea placeholder="请输入商品详情" style="margin:0px 0px;" name="goods_detail"></textarea>
                                </div>
                                
                                <div class="m-inputheader">使用须知</div>
                                <div class="m-inputframe">
                                    <textarea placeholder="请输入使用须知" style="margin:0px 0px;" name="use_of_knowledge"></textarea>
                                </div>

                                <div class="m-inputheader">是否发布</div>
                                <div class="m-inputframe">
                                    <!--发布<input type="radio" style="margin:0px 0px;" class="mui-input-clear mui-radio" name="is_publish" value="yes" checked>
                                    不发布<input type="radio" style="margin:0px 0px;" class="mui-input-clear mui-radio" name="is_publish" value="no">-->
                                    <div class="m-select">
                                        <select style="margin:0px 0px; text-indent: 12px;" name="is_publish">
                                                <option value="yes">发布</option>
                                                <option value="no">不发布</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="mui-input-row" style="margin-top: 20px;">
                                <!--<div class="m-inputheader">添加商品图</div>-->
                                <div class="m-inputframe">
                                    <div  id="filePicker">添加商品图</div>
                                    <div id="fileList" id="upload" class="uploader-list" style="width: 100%;height: 120px;background-color: #fff;border:1px solid #ccc;border-radius: 4px;padding: 10px;"></div>
                                </div>

                            </div>
                            <div class="mui-button-row" style="margin-bottom: 10px;">
                                <button type="button" class="mui-btn mui-btn-primary mui-btn-block" onclick="addGoods()">提交</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </body>

</html>
<script type="text/javascript">

    // 初始化Web Uploader
    var uploader = WebUploader.create({
        // 选完文件后，是否自动上传。
        auto: true,
        // swf文件路径
        swf: '/Public/seller/plugin/webuploader/Uploader.swf',
        // 文件接收服务端。
        server: '/index.php/Seller/allattach/uploadAttach/module_name/sellerGoods',
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
        // $list为容器jQuery实例
        $('#fileList').append($li);
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
            //			$file.addClass('upload-state-done');
            $file.append('<div style="width:100px;margin-right:10px;"><img src="' + appUpload_path + response.url + '" style="width:100px;height:70px;"><div class="del fontred font12" style="background-color:#bbb;width:100px;border-radius:2px;">删除</div><input type="hidden" name="files[]" value="' + response.att_id + '" /></div>');
            $file.css('background-img', 'url()');
            if ($('#input-title').val() == '') {
                $('#input-title').val(response.att_id);
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
        var id = $(this).parent().attr('id');
        if (typeof (id) != 'undefined') {
            uploader.removeFile($(this).parent().attr('id'));
        }
        $(this).parent().parent().remove();
    });
</script>