<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); ?>
        <link rel="stylesheet" href="/Public/Plugin/bootstrap/css/bootstrap-treeview.css">
        <link rel="stylesheet" href="/Public/admin/css/common.css">
        <script type="text/javascript" src="/Public/Plugin/bootstrap/js/bootstrap-treeview.js"></script>
        <script type="text/javascript" src="/Public/Plugin/layer-v3.0.2/layer.js"></script>
        <script type="text/javascript" src="/Public/admin/js/common.js"></script>
        <script type="text/javascript" src="/Public/admin/js/seller/sellerInfo.js"></script>
    </head>
    <style>
        .field-group{width:100%;margin-top: 20px;height: 30px;}
        .field-name,.field-value{float:left;line-height: 30px;}
        .field-name{width:30%;font-size: 18px;font-weight: normal;}
        .field-value{width:60%;font-size: 16px;}
        .field-btn{width:33%;float: left;}
        .score-group{width:100%;border:1px darkgray solid;height: 100px;}
        .score-left,.score-center,.score-right{float: left;height: 98px;}
        .score-left{width:15%;}
        .score-center{width:65%;}
        .score-right{width:20%;}
        .score-field{width: 100%;float:left;height: 50px;line-height: 50px;}
        .score-right-btn {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
    <body>
        <div class="panel panel-info">
            <div class="panel-body">
                <div class="col-sm-4 text-left" >
                    梨园镇注册商家数:<?php echo ($data["allSellerCount"]); ?>
                </div>
                <div class="col-sm-4 text-center" >
                    <?php if($_SESSION['sys_name']== 'sqAdmin'): ?>本社区注册商家数:<?php echo ($data["currentComSellerCount"]); endif; ?>
                </div>
                <div class="col-sm-4 text-right" >
                    <button class="btn btn-success" onclick="javascript:void(window.location.href = '/index.php/Admin/SellerComplaint/showList')">
                        反馈信息
                        <?php if($data["complaintCount"] > 0): ?><span class="badge alert-danger"><?php echo ($data["complaintCount"]); ?></span><?php endif; ?>
                    </button>
                </div>
            </div>
        </div>
        <div class="option_search">
            <form method="get" action="/index.php/Admin/SellerInfo/showList" class="form-horizontal" id="search-form" style="margin-top: 20px;">
                <div class="form-group">
                    <div class="col-sm-4" style="min-width: 300px;">
                        <button type="button" class="btn btn-success addSellerInfo" id="addInfo-btn" onclick="javascript:void(window.location.href = '/index.php/Admin/SellerInfo/edit')" style="height: 34px;">
                            <span class="glyphicon glyphicon-plus"></span> 新增商家
                        </button>
                        <button type="button" class="btn btn-danger delSellerInfo" id="delArrayInfo-btn" style="height: 34px;">
                            <span class="glyphicon glyphicon-trash"></span> 批量删除
                        </button>
                        <button type="button" class="btn btn-info" onclick="javascript:void(window.location.href = '/index.php/Admin/SellerInfo/showList')" style="height: 34px;">
                            显示全部商家
                        </button>
                    </div>
                    <!--<div class="col-sm-2"></div>-->
                    <?php if($_SESSION['sys_name']== 'sysAdmin'): ?><div class="col-sm-2">
                            <select class="form-control" name="address_id">
                                <option value="">社区</option>
                                <?php if(is_array($data["communitys"])): foreach($data["communitys"] as $key=>$val): ?><option value='<?php echo ($val["id"]); ?>' <?php if($val["id"] == $searchInfo['address_id']): ?>selected<?php endif; ?> >
                                    <?php echo ($val["com_name"]); ?>
                                    </option><?php endforeach; endif; ?>
                            </select>
                        </div><?php endif; ?>
                    <div class="col-sm-2">
                        <select class="form-control" name="status">
                            <option value="">状态</option>
                            <?php if(is_array($data["sellerStatusMap"])): foreach($data["sellerStatusMap"] as $key=>$val): ?><option value='<?php echo ($val["status_code"]); ?>' <?php if($val["status_code"] == $searchInfo['status']): ?>selected<?php endif; ?> >
                                <?php echo ($val["status_name"]); ?>
                                </option><?php endforeach; endif; ?>

                        </select>
                    </div>
                    <div class="col-sm-2" style="min-width: 300px;">
                        <div class="input-group">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo ($searchInfo["name"]); ?>" placeholder="请输入商家名/注册手机号">
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
                    <th>&nbsp;注册小区</th>
                    <th>&nbsp;商家名称</th>
                    <th>注册手机号</th>
                    <th>联系人</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                <?php if(!empty($infoList)): if(is_array($infoList)): foreach($infoList as $k=>$v): ?><tr class="tr">
                            <td><input type="checkbox" name="rowChecked" value="<?php echo ($v["id"]); ?>"/></td>
                            <td><?php echo (I('get.p'))?((I('get.p')-1)*C('PAGE_SIZE')+$k+1):($k+1);?></td>
                            <td><?php echo ($v["com_name"]); ?></td>
                            <td><?php echo ($v["name"]); ?></td>
                            <td><?php echo ($v["tel"]); ?></td>
                            <td><?php echo ($v["contacts"]); ?></td>
                            <td>
                        <?php if($v["status"] == 0): ?><span class="label label-default" style="padding: 4px">&nbsp;待&nbsp;审&nbsp;核</span>
                            <?php elseif($v["status"] == 1): ?>
                            <span class="label label-success" style="padding: 4px">正&#12288;&#12288;常</span>
                            <?php elseif($v["status"] == 2): ?>
                            <span class="label label-danger" style="padding: 4px">暂停账号</span><?php endif; ?>
                        </td>
                        <td>
                            <div>
                                <button class="btn btn-default edit-btn editSellerInfo" onclick="javascript:void(window.location.href = '/index.php/Admin/SellerInfo/detail/id/<?php echo ($v["id"]); ?>')">
                                    <span class="glyphicon glyphicon-edit"></span> 查看
                                </button>
                            </div>
                        </td>
                        </tr><?php endforeach; endif; endif; ?>
                <?php if(empty($infoList)): ?><tr><td colspan="9">暂无数据</td></tr><?php endif; ?>
            </table>
            <div style="text-align: center;"><?php echo ($page); ?></div>



        </div>
    </body>
    <script>
        $(document).ready(function () {
            $("select[name='is_checked']").find("option[value='<?php echo ($searchInfo["is_checked"]); ?>']").prop("selected", 'selected');
        });
    </script>
</html>