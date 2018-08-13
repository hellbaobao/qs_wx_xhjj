<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); ?>
        <link rel="stylesheet" href="/Public/Plugin/bootstrap/css/bootstrap-treeview.css">
        <link rel="stylesheet" href="/Public/admin/css/common.css">
        <script type="text/javascript" src="/Public/Plugin/bootstrap/js/bootstrap-treeview.js"></script>
        <script type="text/javascript" src="/Public/Plugin/layer-v3.0.2/layer.js"></script>
        <script type="text/javascript" src="/Public/admin/js/common.js"></script>
        <script type="text/javascript" src="/Public/admin/js/seller/sellerComplaint.js"></script>
    </head>
    <style>
    </style>
    <body>
        <div class="option_search">

            <form method="get" action="/index.php/Admin/SellerComplaint/showList" class="form-horizontal" id="search-form" style="margin-top: 20px;">
                <div class="form-group">
                    <div class="col-sm-4" style="min-width: 300px;">
                        <button type="button" class="btn btn-danger delSellerInfo" id="delArrayInfo-btn" style="height: 34px;">
                            <span class="glyphicon glyphicon-trash"></span> 批量删除
                        </button>
                        <button type="button" class="btn btn-success delSellerInfo" onclick="javascript:void(window.location.href = '/index.php/Admin/SellerComplaint/showList')" style="height: 34px;">
                            显示全部反馈信息
                        </button>
                    </div>
                    <div class="col-sm-2"></div>
                    <?php if($_SESSION['sys_name']== 'sysAdmin'): ?><div class="col-sm-2">
                            <select class="form-control" name="address_id">
                                <option value="">社区</option>
                                <?php if(is_array($data["communitys"])): foreach($data["communitys"] as $key=>$val): ?><option value='<?php echo ($val["id"]); ?>' <?php if($val["id"] == $data['searchInfo']['address_id']): ?>selected<?php endif; ?> >
                                    <?php echo ($val["com_name"]); ?>
                                    </option><?php endforeach; endif; ?>
                            </select>
                        </div><?php endif; ?>
                    <div class="col-sm-2" style="min-width: 300px;">
                        <div class="input-group">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo ($data["searchInfo"]["name"]); ?>" placeholder="请输入商家名/注册手机号">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-success" id="searchInfo-btn" style="height: 34px;">
                                    <span class="glyphicon glyphicon-search"></span> 搜索
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>

        </div>
        <div class="table_content">
            <table class="table table-hover">
                <tr>
                    <th><input type="checkbox" name="allChecked" onclick="setAllChecked(this);"/></th>
                    <th>序号</th>
                    <th>&nbsp;反馈用户</th>
                    <th>&nbsp;被反馈商家</th>
                    <th>注册社区</th>
                    <th>反馈类型</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                <?php if(!empty($data["infoList"])): if(is_array($data["infoList"])): foreach($data["infoList"] as $k=>$v): ?><tr class="tr">
                            <td><input type="checkbox" name="rowChecked" value="<?php echo ($v["id"]); ?>"/></td>
                            <td><?php echo (I('get.p'))?((I('get.p')-1)*C('PAGE_SIZE')+$k+1):($k+1);?></td>
                            <td><?php echo ($v["realname"]); ?>(<?php echo ($v["tel"]); ?>)</td>
                            <td><?php echo ($v["name"]); ?></td>
                            <td><?php echo ($v["com_name"]); ?></td>
                            <td><?php echo ($v["cat_name"]); ?></td>
                            <td>
                        <?php if($v["status"] == 0): ?><span class="label label-default" style="padding: 4px">未处理</span>
                            <?php else: ?>
                            <span class="label label-success" style="padding: 4px">已处理</span><?php endif; ?>
                        </td>
                        <td>
                            <div>
                                <button class="btn btn-default edit-btn editSellerInfo" onclick="javascript:void(window.location.href = '/index.php/Admin/SellerComplaint/detail/id/<?php echo ($v["id"]); ?>')">
                                    <span class="glyphicon glyphicon-edit"></span> 查看
                                </button>
                                <?php if($v["status"] == 0): ?><button class="btn btn-default edit-btn change-complaint-status" title="<?php echo ($v["id"]); ?>">
                                        <span class="glyphicon glyphicon-edit"></span>标记为已处理
                                    </button><?php endif; ?>
                            </div>
                        </td>
                        </tr><?php endforeach; endif; endif; ?>
                <?php if(empty($data["infoList"])): ?><tr><td colspan="9">暂无数据</td></tr><?php endif; ?>
            </table>
            <div style="text-align: center;"><?php echo ($data["page"]); ?></div>



        </div>
    </body>
    <script>
        $(document).ready(function () {
            $("select[name='is_checked']").find("option[value='<?php echo ($searchInfo["is_checked"]); ?>']").prop("selected", 'selected');
        });
    </script>
</html>