<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); ?>
        <link rel="stylesheet" href="/Public/Plugin/bootstrap/css/bootstrap-treeview.css">
        <link rel="stylesheet" href="/Public/admin/css/common.css">
        <script type="text/javascript" src="/Public/Plugin/bootstrap/js/bootstrap-treeview.js"></script>
        <script type="text/javascript" src="/Public/Plugin/layer-v3.0.2/layer.js"></script>
        <script type="text/javascript" src="/Public/admin/js/common.js"></script>
        <script type="text/javascript" src="/Public/admin/js/seller/sellerntegralGoods.js"></script>
    </head>
    <style>
        .field-group{width:100%;margin-top: 20px;height: 30px;}
        .field-name,.field-value{float:left;line-height: 30px;}
        .field-name{width:30%;font-size: 18px;font-weight: normal;}
        .field-value{width:60%;font-size: 16px;}
        .field-btn{width:33%;float: left;}
        .score-group{width:100%;border:1px darkgray solid;height: 100px;}
        .score-left,.score-center,.score-right{float: left;height: 98px;}
        .score-left{width:20%;}
        .score-center{width:60%;}
        .score-right{width:20%;}
        .score-field{width: 100%;float:left;height: 50px;line-height: 50px;}
    </style>
    <body>
        <div class="panel panel-info">
            <div class="panel-body">
                <div class="col-sm-6 text-left" >
                    梨园镇积分商品数量:&nbsp;&nbsp;<?php echo ($data["allGoodsCount"]); ?>
                </div>
                <div class="col-sm-6 text-right" >
                    <?php if($_SESSION['sys_name']== 'sqAdmin'): ?>本社区积分商品数量:&nbsp;&nbsp;<?php echo ($data["currentGoodsCount"]); endif; ?>
                </div>
            </div>
        </div>

        <div class="option_search">
            <form method="get" action="/index.php/Admin/SellerIntegralGoods/showList" class="form-horizontal" id="search-form" style="margin-top: 20px;">
                <div class="form-group">
                    <div class="col-sm-4" style="min-width: 300px;">
                        <button type="button" class="btn btn-danger delGoods" id="delArrayInfo-btn" style="height: 34px;">
                            <span class="glyphicon glyphicon-trash"></span> 批量删除
                        </button>
                        <button type="button" class="btn btn-success" onclick="javascript:void(window.location.href = '/index.php/Admin/SellerIntegralGoods/showList')" style="height: 34px;">
                            显示全部积分商品
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
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo ($data["searchInfo"]["name"]); ?>" placeholder="积分商品名称/商家名称">
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
                    <th>&nbsp;名称</th>
                    <th>&nbsp;类型</th>
                    <th>发布商家</th>
                    <th>发布时间</th>
                    <th>所需积分</th>
                    <th>所需加价</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                <?php if(!empty($data["infoList"])): if(is_array($data["infoList"])): foreach($data["infoList"] as $k=>$v): ?><tr class="tr">
                            <td><input type="checkbox" name="rowChecked" value="<?php echo ($v["id"]); ?>"/></td>
                            <td><?php echo ($v["id"]); ?></td>
                            <td><?php echo ($v["goods_name"]); ?></td>
                            <td><?php echo ($v["cat_name"]); ?></td>
                            <td><?php echo ($v["seller_name"]); ?></td>
                            <td><?php echo ($v["public_time"]); ?></td>
                            <td><?php echo ($v["required_integral"]); ?></td>
                            <td>￥<?php echo ($v["payment_amount"]); ?></td>
                            <td>
                        <?php if($v["status"] == 1): ?>已发布
                            <?php elseif($v["status"] == 2): ?>
                            已下架<?php endif; ?>
                        </td>
                        <td>
                            <div>
                                <button class="btn btn-success showGoodsDetail" onclick="showGoodsInfo(<?php echo ($v["id"]); ?>, '<?php echo ($v["seller_name"]); ?>');">
                                    查看详情
                                </button>
                                <button class="btn btn-default edit-btn showGoodsRecord" onclick="javascript:void(window.location.href = '/index.php/Admin/GoodsExchangeRecord/showListById/goods_id/<?php echo ($v["id"]); ?>')">
                                    兑换记录
                                </button>
                                <?php if($v["status"] == 1): ?><button class="btn btn-danger upDownGoods change-goods-status" onclick="changeGoodsStatus('<?php echo ($v["id"]); ?>-<?php echo ($v["status"]); ?>')">
                                        下架
                                    </button>
                                    <?php elseif($v["status"] == 2): ?>
                                    <button class="btn btn-success upDownGoods change-goods-status" onclick="changeGoodsStatus('<?php echo ($v["id"]); ?>-<?php echo ($v["status"]); ?>')">
                                        上架
                                    </button><?php endif; ?>
                            </div>
                        </td>
                        </tr><?php endforeach; endif; endif; ?>
                <?php if(empty($data["infoList"])): ?><tr><td colspan="9">暂无数据</td></tr><?php endif; ?>
            </table>
            <div style="text-align: center;"><?php echo ($data["page"]); ?></div>



        </div>
    </body>

    <div class="catLayer" style="display: none;">
        <div class="container" style="width: 500px;">
            <div class="row">
                <table class="table table-hover">
                    <tr>
                        <th style="width:80px;">商品图片</th>
                        <td><img src="" class="goods_pic" width="200"/></td>
                    </tr>
                    <tr>
                        <th>商品名称</th>
                        <td>
                            <p class="goods_name"></p>
                            <p class="required_integral"></p>
                        </td>
                    </tr>
                    <tr>
                        <th>商品详情</th>
                        <td>
                             <p class="goods_detail"></p>
                        </td>
                    </tr>
                    <tr>
                        <th>适用门店</th>
                        <td>
                            <p class="seller_name"></p>
                        </td>
                    </tr>
                    <tr>
                        <th>适用须知</th>
                        <td>
                            <p class="use_of_knowledge"></p>
                        </td>
                    </tr>
                </table>
                
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            $("select[name='is_checked']").find("option[value='<?php echo ($searchInfo["is_checked"]); ?>']").prop("selected", 'selected');
        });
    </script>
</html>