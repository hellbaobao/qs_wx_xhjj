<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); ?>
        <link rel="stylesheet" href="/Public/Plugin/bootstrap/css/bootstrap-treeview.css">
        <link rel="stylesheet" href="/Public/admin/css/common.css">
        <script type="text/javascript" src="/Public/Plugin/bootstrap/js/bootstrap-treeview.js"></script>
        <script type="text/javascript" src="/Public/Plugin/layer-v3.0.2/layer.js"></script>
        <script type="text/javascript" src="/Public/admin/js/common.js"></script>
        <script type="text/javascript" src="/Public/admin/js/activity/activInfo.js"></script>
    </head>
    <body>        
        <div class="table_content">
            <div class="panel panel-success">
                <div class="panel-body">
                    <div class="col-sm-4"><b><?php echo ($activInfo["title"]); ?></b></div>
                    <div class="col-sm-4 text-center">活动收藏人数：<?php echo ($activInfo["like_num"]); ?></div>
                    <div class="col-sm-4 text-right">
                        活动签到人数：
                        <?php if(is_array($signInfo)): foreach($signInfo as $kkk=>$vvv): echo ($vvv["sign_sum"]); ?>&nbsp;/&nbsp;<?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
            <?php if(!empty($signInfo)): if(is_array($signInfo)): foreach($signInfo as $k=>$v): ?><div class="panel panel-danger">
                        <div class="panel-body">
                            <div class="col-sm-6"><h4>第【<?php echo ($v["sign_num"]); ?>】次签到,本次签到可获得积分【<?php echo ($v["sign_integral"]); ?>】分</h4></div>

                            <div class="col-sm-6 text-right">
                                <?php if($v["sign_status"] == 0): ?><button type="button" class="btn btn-primary">尚未开启</button>
                                    <?php else: ?>
                                    <?php if($v["sign_status"] == 1): ?><button type="button" class="btn btn-success">正在签到</button>
                                        <?php else: ?><button type="button" class="btn btn-warning">关闭签到</button><?php endif; endif; ?>

                            </div>
                        </div>
                        <?php if($v["sign_status"] == 0): else: ?>
                            <table class="table table-hover font12">
                                <tr class="tr">
                                    <th>序号</th>
                                    <th>用户名称</th>
                                    <th>获得积分</th>
                                    <th>签到方式</th>
                                    <th>签到时间</th>
                                </tr>
                                <?php if(is_array($v["data"])): foreach($v["data"] as $kk=>$vv): ?><tr class="tr">
                                        <td><?php echo ($kk+1); ?></td>
                                        <td><?php echo ($vv["realname"]); ?></td>
                                        <td><?php echo ($vv["sign_integral"]); ?></td>
                                        <td>
                                    <?php if($vv["sign_type"] == 0): ?><span class="label label-info">二维码</span>
                                        <?php else: ?><span class="label label-info">实体卡</span><?php endif; ?>
                                        </td>
                                        <td><?php echo ($vv["add_time"]); ?></td>
                                    </tr><?php endforeach; endif; ?>
                            </table><?php endif; ?>

                    </div><?php endforeach; endif; endif; ?>
            
        </div>
    </body>
</html>