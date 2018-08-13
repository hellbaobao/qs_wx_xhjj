<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); ?>
        <link rel="stylesheet" href="/Public/admin/css/common.css">
        <script type="text/javascript" src="/Public/admin/js/common.js"></script>
        <script type="text/javascript">
            $(function () {
                $('.main table').css({'width': '100%'});
                $('.main table').attr({'border': '1'});
                $('.main').html(img_reset_detail($('.main').html()));
                $('.main img').each(function () {
                    $(this).css({'width': '95%'});
                });
            });
        </script>
    </head>
    <body>
        <div class="detail_div">
            <div class="content">
                <h1><?php echo ($apptlearn["title"]); ?></h1>
                <div class="time">
                    发布时间：<?php echo ($apptlearn["add_time"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    发布人：<?php echo ($apptlearn["usr"]); ?>
                </div>
                <div>
                    <table class="table table-bordered font14">
                        <tr>
                            <td>培训讲师</td>
                            <td><?php echo ($apptlearn["teacher"]); ?></td>
                            <td>培训时间</td>
                            <td><?php echo ($apptlearn["start_time"]); ?></td>
                        </tr>
                    </table>
                </div>

                <div class="main">
                    <?php echo ($apptlearn["content"]); ?>
                </div>



            </div>
            <div class="row">
                <div class="attach_list">
                    <div class="model_title">缩略图片</div>
                    <?php if(!empty($imgInfo)): if(is_array($imgInfo)): foreach($imgInfo as $k=>$v): ?><div class="list_header" style="margin-left: 75px;margin-bottom: 5px;margin-top:20px;float: left;">
                                <img src="/<?php echo ($v["file_path"]); ?>" style="width: 200px; height: 150px; border: 1px solid #ccc;"/>
                            </div><?php endforeach; endif; endif; ?>
                    <?php if(empty($imgInfo)): ?><div class="comment_content">暂无图片</div><?php endif; ?>
                </div>
            </div>
        </div>
    </body>
</html>