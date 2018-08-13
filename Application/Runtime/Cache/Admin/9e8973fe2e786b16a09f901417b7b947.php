<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); echo (DATEPICKER); ?>
        <link rel="stylesheet" href="/Public/Plugin/bootstrap/css/bootstrap-treeview.css"/>
        <link rel="stylesheet" type="text/css" href="/Public/admin/plugin/webuploader/webuploader.css"/>
        <link rel="stylesheet" href="/Public/admin/css/common.css"/>
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
        <div class="table_content col-xs-12 col-sm-12">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td colspan="2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="btn-group btn-group">
                                        <button class="score-right-btn btn btn-warning" onclick="javascript:void(window.location.href = '/index.php/Admin/SellerComplaint/showListById/seller_id/<?php echo ($data["sellerInfo"]["id"]); ?>')">
                                            反馈信息
                                            <?php if($data["sellerComplaintCount"] > 0): ?><span class="badge alert-danger"><?php echo ($data["sellerComplaintCount"]); ?></span><?php endif; ?>
                                        </button>
                                        <button class="score-right-btn btn btn-success" onclick="javascript:void(window.location.href = '/index.php/Admin/SellerIntegralGoods/showListById/seller_id/<?php echo ($data["sellerInfo"]["id"]); ?>')">查看积分商品</button>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th>营业执照号</th>
                        <td><?php echo ($data["sellerInfo"]["business_license"]); ?></td>
                    </tr>
                    <tr>
                        <th>商家名称</th>
                        <td><?php echo ($data["sellerInfo"]["name"]); ?></td>
                    </tr>
                    <tr>
                        <th>照片</th>
                        <td>
                <?php if($data['attachList'] != NULL): if(is_array($data["attachList"])): foreach($data["attachList"] as $key=>$val): ?><div style="width:auto;height:140px;float: left;margin-right: 20px;">
                            <img src="/<?php echo ($val["file_path"]); ?>" style="width:auto;height:140px;"/>
                        </div><?php endforeach; endif; ?>
                    <?php else: ?>
                    <span style="color:red;font-size: 14px;">暂无图片</span><?php endif; ?>
                </td>
                </tr>
                <tr>
                    <th>所在社区</th>
                    <td><?php echo ($data["sellerInfo"]["com_name"]); ?></td>
                </tr>
                <tr>
                    <th>所在位置</th>
                    <td>
                        <input type="hidden" name="address_api_url" value="<?php echo ($data["sellerInfo"]["address_api_url"]); ?>"/>
                        <div id="allmap" style="width: 700px;height: 250px;"></div>
                    </td>
                </tr>
                <tr>
                    <th>商家地址</th>
                    <td><?php echo ($data["sellerInfo"]["address"]); ?></td>
                </tr>
                <tr>
                    <th>联系人</th>
                    <td><?php echo ($data["sellerInfo"]["contacts"]); ?></td>
                </tr>
                <tr>
                    <th>注册手机</th>
                    <td><?php echo ($data["sellerInfo"]["tel"]); ?></td>
                </tr>
                <tr>
                    <th>绑定微信</th>
                    <td>
                <?php if($data['sellerWechat'] != NULL): if(is_array($data["sellerWechat"])): foreach($data["sellerWechat"] as $key=>$val): ?><p class="wechat-<?php echo ($val["id"]); ?>">
                            [<?php echo ($val["name"]); ?>]<?php echo ($val["open_id"]); ?>
                        </p><?php endforeach; endif; ?>
                    <?php else: ?>
                    <span style="color:red;font-size: 14px;">暂无微信绑定</span><?php endif; ?>
                </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="btn-group btn-group">
                            <button type="button" class="btn btn-warning fright" onclick="checkSellerState('<?php echo ($data["sellerInfo"]["status"]); ?>', '<?php echo ($data["sellerInfo"]["id"]); ?>')">
                                <?php if($data['sellerInfo']['status'] == 1): ?>暂停商家账号
                                    <?php else: ?>
                                    审核通过并上线<?php endif; ?>
                            </button>
                            <button type="button" class="btn btn-danger" onclick="delSeller('<?php echo ($data["sellerInfo"]["id"]); ?>')">删除商家账号</button>
                            <button type="button" class="btn btn-info" onclick="javascript:void(window.location.href = '/index.php/Admin/SellerInfo/edit/id/<?php echo ($data["sellerInfo"]["id"]); ?>')">修改资料</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </body>
    <script type="text/javascript" src="/Public/admin/js/seller/baiduMap.js"></script>
    <script type="text/javascript">
                                //百度地图
                                baiduMap($("input[name='address_api_url']").val());
    </script>
</html>