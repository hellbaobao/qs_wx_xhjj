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
        <script type="text/javascript" src="/Public/admin/js/seller/sellerComplaint.js"></script>
    </head>
    <style>
        .field-group{width:100%;margin-top: 20px;height: 30px;}
        .field-name,.field-value{float:left;line-height: 30px;}
        .field-name{width:20%;font-size: 18px;font-weight: normal;}
        .field-value{width:80%;font-size: 16px;}
        .field-btn{width:33%;float: left;}
    </style>
    <body>

        <div class="container" >

            <div class="field-group">
                <div class="field-name">
                    <?php if($seller_id == NULL): ?><button type="button" class="btn btn-warning" onclick="javascript:void(window.location.href = '/index.php/Admin/SellerComplaint/showList')">返回</button>
                    <?php else: ?>
                        <button type="button" class="btn btn-warning" onclick="javascript:void(window.location.href = '/index.php/Admin/SellerComplaint/showListById/seller_id/<?php echo ($seller_id); ?>')">返回</button><?php endif; ?>
                </div>
            </div>

            <div class="field-group">
                <div class="field-name">反馈用户名</div>
                <div class="field-value">
                    <a href="/index.php/Admin/SysUserInfo/detail/id/<?php echo ($complaintInfo["user_id"]); ?>"><?php echo ($complaintInfo["userInfo"]["usr"]); ?></a>
                </div>
            </div>

            <div class="field-group">
                <div class="field-name">用户注册社区</div>
                <div class="field-value"><?php echo ($complaintInfo["userInfo"]["com_name"]); ?></div>
            </div>

            <div class="field-group">
                <div class="field-name">联系方式</div>
                <div class="field-value"><?php echo ($complaintInfo["userInfo"]["tel"]); ?></div>
            </div>

            <div class="field-group">
                <div class="field-name">被反馈商家名</div>
                <div class="field-value">
                    <a href="/index.php/Admin/SellerInfo/detail/id/<?php echo ($complaintInfo["seller_id"]); ?>"><?php echo ($complaintInfo["sellerInfo"]["name"]); ?></a>
                </div>
            </div>

            <div class="field-group">
                <div class="field-name">商家注册社区</div>
                <div class="field-value"><?php echo ($complaintInfo["com_name"]); ?></div>
            </div>

            <div class="field-group">
                <div class="field-name">联系人</div>
                <div class="field-value"><?php echo ($complaintInfo["sellerInfo"]["contacts"]); ?></div>
            </div>

            <div class="field-group">
                <div class="field-name">联系方式</div>
                <div class="field-value"><?php echo ($complaintInfo["sellerInfo"]["tel"]); ?></div>
            </div>

            <div class="field-group">
                <div class="field-name">反馈类型</div>
                <div class="field-value"><?php echo ($complaintInfo["cat_name"]); ?></div>
            </div>


            <div class="field-group" style="margin-bottom: 50px;">
                <div class="field-name">处理状态</div>
                <div class="field-btn">
                    <?php if($complaintInfo['status'] == 0): ?><button type="button" class="btn btn-warning" onclick="changeStatus('<?php echo ($complaintInfo["id"]); ?>')">标记为处理完毕</button>
                    <?php else: ?>
                        <span style="color: red;">已处理</span><?php endif; ?>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">

    </script>
</html>