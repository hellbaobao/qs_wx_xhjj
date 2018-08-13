<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title>通知</title>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); ?>
        <link rel="stylesheet" href="/Public/Plugin/bootstrap/css/bootstrap-treeview.css">
        <link rel="stylesheet" href="/Public/admin/css/common.css">
        <script type="text/javascript" src="/Public/Plugin/bootstrap/js/bootstrap-treeview.js"></script>
        <script type="text/javascript" src="/Public/Plugin/layer-v3.0.2/layer.js"></script>
        <script type="text/javascript" src="/Public/admin/js/common.js"></script>
        <script type="text/javascript" src="/Public/admin/js/apptlearn/apptlearnInfo.js"></script>
    </head>
    <body>
        <div class="option_search">
            <form method="get" action="/index.php/Admin/Apptlearn/showList" class="form-horizontal" id="search-form" style="margin-top: 20px;">
                <div class="form-group">
                    <div class="col-sm-3" style="min-width: 200px;">
                        <button type="button" class="btn btn-success addApptlearnInfo" id="addInfo-btn" onclick="javascript:void(window.location.href = '/index.php/Admin/Apptlearn/add')" style="height: 34px;">
                            <span class="glyphicon glyphicon-plus"></span> 新增
                        </button>
                        <button type="button" class="btn btn-danger delApptlearnInfo" id="delArrayInfo-btn" style="height: 34px;">
                            <span class="glyphicon glyphicon-trash"></span> 批量删除
                        </button>
                    </div>
                    <div class="col-sm-5"></div>
                    <div class="col-sm-3" style="text-align: right;">
                        <div class='input-group'>
                            <input type="text" class="form-control" id="title" name="title" value="<?php echo ($searchInfo["title"]); ?>" placeholder="请输入标题">
                            <span class='input-group-btn'>
                                <button type="submit" class="btn btn-success" id="searchInfo-btn" style="height: 34px;">
                                    <span class="glyphicon glyphicon-search"></span> 搜索
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="table_content">
            <table class="table table-hover">
                <tr>
                    <th>全选</th>
                    <th><input type="checkbox" name="allChecked" onclick="setAllChecked(this);"/></th>
                    <th>培训标题</th>
                    <th>培训时间</th>
                    <th>培训讲师</th>
                    <th>预约人数</th>
                    <th>操作</th>
                </tr>
                <?php if(!empty($infoList)): if(is_array($infoList)): foreach($infoList as $k=>$v): ?><tr class="tr">
                            <td><?php echo (I('get.p'))?((I('get.p')-1)*C('PAGE_SIZE')+$k+1):($k+1);?></td>
                            <td>
                        <?php if($v["address_id"] == $address_id||$address_id == 0): ?><input type="checkbox" name="rowChecked" value="<?php echo ($v["id"]); ?>"/>
                            <?php else: ?><input type="checkbox" name="" value="" disabled="disabled"/><?php endif; ?>
                        </td>
                        <td>
                        <?php if($v["is_publish"] == 0): ?><span class="label label-default" style="padding: 4px">未发布</span>
                            <?php else: ?>
                            <span class="label label-success" style="padding: 4px">已发布</span><?php endif; ?>
                        <a href="/index.php/Admin/Apptlearn/apptlearnDetail/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a>

                        </td>
                        <td><?php echo ($v["start_time"]); ?></td>
                        <td><?php echo ($v["teacher"]); ?></td>
                        <td>
                        <?php if($v["appt_num"] == 0): ?><button class="btn btn-default del-btn lookOrderInfo " disabled="disabled">
                                <span class="glyphicon glyphicon-eye-open"></span> 预约:<?php echo ($v["appt_num"]); ?>
                            </button>
                            <?php else: ?>
                            <button class="btn btn-default del-btn lookOrderInfo" onclick="lookOrderLayer(<?php echo ($v["id"]); ?>)">
                                <span class="glyphicon glyphicon-eye-open"></span> 预约:<?php echo ($v["appt_num"]); ?>
                            </button><?php endif; ?>
                        </td>
                        <td>
                            <div>

                                <button class="btn btn-default edit-btn editApptlearnInfo" onclick="javascript:void(window.location.href = '/index.php/Admin/Apptlearn/edit/id/<?php echo ($v["id"]); ?>')">
                                    <span class="glyphicon glyphicon-edit"></span> 编辑
                                </button>

                                <?php if($v["is_publish"] == 0): ?><button class="btn btn-default pubApptlearnInfo" onclick="pubInfoLayer(<?php echo ($v["id"]); ?>)">
                                        <span class="glyphicon glyphicon-bullhorn"></span> 发布
                                    </button>
                                    <?php else: ?>
                                    <button class="btn btn-default pubApptlearnInfo" disabled="disabled">
                                        <span class="glyphicon glyphicon-bullhorn"></span> 发布
                                    </button><?php endif; ?>

                                <!--<button class="btn btn-default del-btn" onclick="delInfoLayer(<?php echo ($v["id"]); ?>)">-->
                                <!--<span class="glyphicon glyphicon-trash"></span> 删除-->
                                <!--</button>-->

                            </div>
                        </td>
                        </tr><?php endforeach; endif; endif; ?>
                <?php if(empty($infoList)): ?><tr><td colspan="8">暂无数据</td></tr><?php endif; ?>
            </table>
            <div style="text-align: center;"><?php echo ($page); ?></div>
        </div>
    </body>
</html>
<script type="text/javascript">
    
</script>