<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); ?>
        <link rel="stylesheet" href="/Public/admin/css/common.css">
        <script type="text/javascript" src="/Public/Plugin/layer-v3.0.2/layer.js"></script>
        <script type="text/javascript" src="/Public/admin/js/common.js"></script>
    </head>
    <body>
        <div class="detail_div">
            <div class="content">
                <h1><?php echo ($prom["title"]); ?></h1>
                <div class="time">
                    发布时间：<?php echo ($prom["add_time"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div>
                    <table class="table table-bordered font14">
                        <tr>
                            <td>商家名称：<?php echo ($prom["seller_name"]); ?></td>
                            <td>展示次数：<?php echo ($prom["read_num"]); ?></td>
                            <td>
                        <?php if($prom["status"] == 0): ?>未审核
                            <?php elseif($prom["status"] == 1): ?>
                            通过并发布
                            <?php elseif($prom["status"] == 2): ?>
                            未通过
                            <?php else: ?>
                            已下架<?php endif; ?>
                        </td>
                        <td>
                        <?php if($prom["status"] == 0): ?><button class="btn btn-success editPromInfo" onclick="setPromStatus(<?php echo ($prom["id"]); ?>, 1)">
                                <span class="glyphicon glyphicon-edit"></span> 审核通过
                            </button>
                            <button class="btn btn-warning editPromInfo" onclick="setPromStatus(<?php echo ($prom["id"]); ?>, 2)">
                                <span class="glyphicon glyphicon-edit"></span> 审核不通过
                            </button>
                            <?php elseif($prom["status"] == 1): ?>
                            <button class="btn btn-danger  editPromInfo" onclick="setPromStatus(<?php echo ($prom["id"]); ?>, 3)">
                                <span class="glyphicon glyphicon-edit"></span> 下架
                            </button>
                            <?php elseif($prom["status"] == 2): ?>
                            <button class="btn btn-success editPromInfo" onclick="setPromStatus(<?php echo ($prom["id"]); ?>, 1)">
                                <span class="glyphicon glyphicon-edit"></span> 审核通过
                            </button>
                            <?php else: endif; ?>
                        </td>
                        </tr>
                    </table>
                </div>
                <div class="main">
                    <p><?php echo ($prom["content"]); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="attach_list">
                    <div class="model_title">广告图片</div>
                    <?php if(!empty($imgInfo)): if(is_array($imgInfo)): foreach($imgInfo as $k=>$v): ?><div class="list_header" style="margin-left: 75px;margin-bottom: 5px;margin-top:20px;float: left;">
                                <img src="/<?php echo ($v["file_path"]); ?>" style="width: 100%; height: auto; border: 1px solid #ccc;"/>
                            </div><?php endforeach; endif; endif; ?>
                    <?php if(empty($imgInfo)): ?><div class="list_header" style="margin-left: 75px;margin-bottom: 5px;margin-top:20px;float: left;">
                            暂无图片
                        </div><?php endif; ?>
                </div>
            </div>
        </div>
    </body>
</html>

<script type="text/javascript">

    function setPromStatus(id, status) {
    if (status == 3){
    var str = "下架";
    } else{
    var str = "审核";
    }
    layer.confirm('确定要' + str + '该广告嘛？', {
    icon: 2,
            title: '提示信息',
            btn: ['确定', '取消'] //按钮
    }, function (index) {
    $.post(c_path + '/setPromStatus', {'id': id, 'status': status}, function (result) {
    if (result.code == '500') {
    layer.msg(constants.SUCCESS, {time: 1000}, function () {
    location.reload();
    });
    } else {
    layer.msg(constants.FAILD);
    }
    }, 'json');
    });
    }
</script>