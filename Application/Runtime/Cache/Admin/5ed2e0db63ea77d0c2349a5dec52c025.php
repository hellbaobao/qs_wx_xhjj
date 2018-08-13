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
        <div class="container" style="width:98%;">
            <div class="detail_div">
                <div class="row">
                    <div class="content">
                        <h1><?php echo ($activ["title"]); ?></h1>
                        <div class="time">
                            发布时间：<?php echo ($activ["add_time"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            发布人：<?php echo ($activ["usr"]); ?></br>
                        </div>
                        <div>
                            <table class="table table-bordered font14">
                                <tr>
                                    <td>活动积分</td>
                                    <td><?php echo ($activ["integral"]); ?>分</td>
                                    <td>签到次数</td>
                                    <td><?php echo ($activ["signin_time"]); ?>次</td>
                                </tr>
                                <tr>
                                    <td>发起人</td>
                                    <td><?php echo ($activ["initiator"]); ?></td>
                                    <td>联系人</td>
                                    <td><?php echo ($activ["link_name"]); ?>：<?php echo ($activ["link_tel"]); ?></td>
                                </tr>
                                <tr>
                                    <td>开始时间</td>
                                    <td><?php echo ($activ["start_time"]); ?></td>
                                    <td>活动地点</td>
                                    <td><?php echo ($activ["address"]); ?></td>
                                </tr>

                            </table>
                        </div>
                        <div class="main">
                            <?php echo ($activ["content"]); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="attach_list">
                        <div class="model_title">活动相册</div>
                        <?php if(!empty($imgInfo)): if(is_array($imgInfo)): foreach($imgInfo as $k=>$v): ?><div class="list_header" style="margin-left: 75px;margin-bottom: 5px;margin-top:20px;float: left;">
                                    <img src="/<?php echo ($v["file_path"]); ?>" style="width: 200px; height: 150px; border: 1px solid #ccc;"/>
                                </div><?php endforeach; endif; endif; ?>
                        <?php if(empty($imgInfo)): ?><div class="comment_content">暂无图片</div><?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="attach_list">
                        <div class="model_title">评论列表</div>
                        <!--                        <?php if(!empty($activComm)): ?><ul class="comment_content">
                                                        <?php if(is_array($activComm)): foreach($activComm as $k=>$v): ?><li>
                                                                <div class="list_header">
                                                                    <span style="font-size:15px; color:#1C77F6"><?php echo ($v["usr"]); ?></span>
                                                                    <span style="font-size:11px; color:#999;"><?php echo ($v["add_time"]); ?></span>
                                                                </div>
                                                                <div class="list_content">
                                                                    <p><?php echo ($v["content"]); ?></p>
                                                                </div>
                                                            </li><?php endforeach; endif; ?>
                                                    </ul><?php endif; ?>
                                                <?php if(empty($activComm)): ?><ul class="comment_content">暂无评论</ul><?php endif; ?>-->
                    </div>
                    <div class="row" style="padding: 0 20px;">
                        </br>
                        <?php if(!empty($activComm)): ?><ul class="list-group">
                                <?php if(is_array($activComm)): foreach($activComm as $k=>$v): ?><li class="list-group-item">
                                        <span class="badge">【<?php echo ($v["realname"]); ?>】发表于【<?php echo ($v["add_time"]); ?>】</span>
                                        <?php echo ($v["content"]); ?>
                                    </li><?php endforeach; endif; ?>
                            </ul><?php endif; ?>
                        <?php if(empty($activComm)): ?><ul class="comment_content">暂无评论</ul><?php endif; ?>
                    </div>

                </div>

            </div>
        </div>
    </body>
</html>