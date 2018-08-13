<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); ?>
        <link rel="stylesheet" href="/Public/Plugin/bootstrap/css/bootstrap-treeview.css">
        <link rel="stylesheet" href="/Public/admin/css/common.css">
        <script type="text/javascript" src="/Public/Plugin/bootstrap/js/bootstrap-treeview.js"></script>
        <script type="text/javascript" src="/Public/Plugin/layer-v3.0.2/layer.js"></script>
        <script type="text/javascript" src="/Public/admin/js/common.js"></script>
        <script type="text/javascript" src="/Public/admin/js/seller/GoodsExchangeRecord.js"></script>
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
        .score-center{width:40%;}
        .score-right{width:40%;}
        .score-field{width: 100%;float:left;height: 50px;line-height: 50px;}
    </style>
    <body>
        <div class="panel panel-info">
            <div class="panel-body">
                <div class="col-sm-6 text-left" >
                    全镇消费兑换次数:&nbsp;&nbsp;<?php echo ($data["exchangeIntegral"]["count"]); ?></br>
                    累计交易积分值:&nbsp;&nbsp;<?php echo ($data["exchangeIntegral"]["integral"]); ?>
                </div>
                <div class="col-sm-6 text-right" >
                    <?php if($_SESSION['sys_name']== 'sqAdmin'): ?>本社区消费兑换次数:&nbsp;&nbsp;<?php echo ($data["currentExchangeIntegral"]["count"]); ?></br>
                        累计交易积分值:&nbsp;&nbsp;<?php echo ($data["currentExchangeIntegral"]["integral"]); endif; ?>
                </div>
            </div>
        </div>
        <div class="option_search">
            <form method="get" action="/index.php/Admin/GoodsExchangeRecord/showList" class="form-horizontal" id="search-form" style="margin-top: 20px;">
                <div class="form-group">
                    <div class="col-sm-4" style="min-width: 300px;">
                        <button type="button" class="btn btn-danger delSellerInfo" id="delArrayInfo-btn" style="height: 34px;">
                            <span class="glyphicon glyphicon-trash"></span> 批量删除
                        </button>
                        <button type="button" class="btn btn-success delSellerInfo" onclick="javascript:void(window.location.href = '/index.php/Admin/GoodsExchangeRecord/showList')" style="height: 34px;">
                            显示全部
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
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo ($data["searchInfo"]["name"]); ?>" placeholder="商品名称/商家名称/用户名">
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
                    <th>&nbsp;交易商品</th>
                    <th>&nbsp;交易时间</th>
                    <th>积分接收商家</th>
                    <th>积分支出用户</th>
                    <th>积分接收值</th>
                    <th>操作</th>
                </tr>
                <?php if(!empty($data["infoList"])): if(is_array($data["infoList"])): foreach($data["infoList"] as $k=>$v): ?><tr class="tr">
                            <td><input type="checkbox" name="rowChecked" value="<?php echo ($v["id"]); ?>"/></td>
                            <td><?php echo ($v["goods_name"]); ?></td>
                            <td><?php echo ($v["exchange_time"]); ?></td>
                            <td><?php echo ($v["seller_name"]); ?></td>
                            <td><?php echo ($v["realname"]); ?>(<?php echo ($v["tel"]); ?>)</td>
                            <td><?php echo ($v["exchange_integral"]); ?></td>
                            <td>
                                <div>
                                    <button class="btn btn-success" onclick="showExchangeInfo(<?php echo ($v["id"]); ?>);">
                                        查看详情
                                    </button>
                                </div>
                            </td>
                        </tr><?php endforeach; endif; endif; ?>
                <?php if(empty($data["infoList"])): ?><tr><td colspan="9">暂无数据</td></tr><?php endif; ?>
            </table>
            <div style="text-align: center;"><?php echo ($data["page"]); ?></div>



        </div>
    </body>

    <div class="catLayer" style="display: none;">
        <div class="container" style="width: 400px;">
            </br></br>
            <div class="row">
                <div class="form-group" style="width: 400px;;">
                    <label for="goods_name" class="col-sm-4 control-label">商品名称</label>
                    <div class="col-sm-8">
                        <p class="goods_name"></p>
                    </div>
                </div>
                <div class="form-group" style="width: 400px;;">
                    <label for="exchange_time" class="col-sm-4 control-label">交易时间</label>
                    <div class="col-sm-8">
                        <p class="exchange_time"></p>
                    </div>
                </div>
                <div class="form-group" style="width: 400px;;">
                    <label for="seller_name" class="col-sm-4 control-label">交易店铺</label>
                    <div class="col-sm-8">
                        <p class="seller_name"></p>
                    </div>
                </div>
                <div class="form-group" style="width: 400px;;">
                    <label for="tel" class="col-sm-4 control-label">交易人</label>
                    <div class="col-sm-8">
                        <p class="tel"></p>
                    </div>
                </div>

                <div class="form-group" style="width: 400px;;">
                    <label for="realname" class="col-sm-4 control-label">姓名</label>
                    <div class="col-sm-8">
                        <p class="realname"></p>
                    </div>
                </div>

                <div class="form-group" style="width: 400px;;">
                    <label for="com_name" class="col-sm-4 control-label">社区</label>
                    <div class="col-sm-8">
                        <p class="com_name">
                        </p>
                    </div>
                </div>

                <div class="form-group" style="width: 400px;;">
                    <label for="exchange_number" class="col-sm-4 control-label">交易单号</label>
                    <div class="col-sm-8">
                        <p class="exchange_number">
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            $("select[name='is_checked']").find("option[value='<?php echo ($searchInfo["is_checked"]); ?>']").prop("selected", 'selected');
        });
    </script>
</html>