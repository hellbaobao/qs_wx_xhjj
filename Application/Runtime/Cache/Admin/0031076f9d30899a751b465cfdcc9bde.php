<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); ?>
        <!--自定义样式及脚本放于此处-->
        <link rel="stylesheet" href="/Public/admin/css/index.css">
        <link rel="stylesheet" href="/Public/admin/css/common.css">
        <link rel="stylesheet" href="/Public/admin/css/top.css">

        <script type="text/javascript">
            $(function () {
                $('#tabBtn').find('button').removeClass('btn-success');
                if (assignData.sys_name == 'sysAdmin' && assignData.data.type==0) {
                    showTopList(1);
                } else {
                    $('#btn_' + assignData.data.type).addClass('btn-success');
                }
            });
            function showTopList(type) {
                location.href = a_path + '?type=' + type;
            }
        </script>
        <?php echo (ANIMATION); ?>
        <title><?php echo ($config['system_name']); ?></title>
    </head>
    <body>
        <div class="container" style="width: 100%;background-color: #e9ecf3;">
            <div class="option_search">
                <div class="btn-group btn-group-lg" id='tabBtn'>
                    <?php if($sys_name != 'sysAdmin'): ?><button type="button" id='btn_0' class="btn btn-default btn-success" onclick="showTopList(0)">
                            本社区用户榜单
                        </button><?php endif; ?>
                    <button type="button" id='btn_1' class="btn btn-default" onclick="showTopList(1)">
                        梨园镇用户榜单
                    </button>
                    <button type="button" id='btn_2' class="btn btn-default" onclick="showTopList(2)">
                        梨园镇商家榜单
                    </button>
                    <button type="button" id='btn_3' class="btn btn-default" onclick="showTopList(3)">
                        梨园镇社区榜单
                    </button>
                </div>
            </div>
            <div class="row">

                <div class="b-tip-div col-xs-6 col-sm-4">
                    <div class="panel b-color-tip2">
                        <div class="panel-heading">
                            <div class="b-tip-body">
                                <div class="b-tip-left">
                                    <i class="glyphicon glyphicon-stats"></i>
                                </div>
                                <div class="b-tip-right">
                                    <div class="b-tip-titleb"><?php echo ($data["type_name"]); ?></div>
                                    <div class="b-tip-titlel">本季度</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <?php if(is_array($data["nowList"])): foreach($data["nowList"] as $k=>$v): ?><div class="row_list">
                                    <div class="row_list_jp jp0<?php echo ($k+1); ?>"></div>
                                    <div class="row_list_tx">
                                        <?php echo ($v["tx_icon"]); ?>
                                    </div>
                                    <span class="row_list_title"><?php echo ($v["top"]); ?></br><p><?php echo ($v["bottom"]); ?></p></span>
                                    <span class="row_list_integral"><?php echo ($v["right"]); ?></span>
                                </div><?php endforeach; endif; ?>
                            <?php if(empty($data["nowList"])): ?><div class="panel panel-default">
                                    <div class="panel-body">
                                        暂时没有数据
                                    </div>
                                </div><?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="b-tip-div col-xs-6 col-sm-4">
                    <div class="panel  b-color-tip1">
                        <div class="panel-heading">
                            <div class="b-tip-body">
                                <div class="b-tip-left">
                                    <i class="glyphicon glyphicon-stats"></i>
                                </div>
                                <div class="b-tip-right">
                                    <div class="b-tip-titleb"><?php echo ($data["type_name"]); ?></div>
                                    <div class="b-tip-titlel">上季度</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <?php if(is_array($data["lastList"])): foreach($data["lastList"] as $k=>$v): ?><div class="row_list">
                                    <div class="row_list_jp jp0<?php echo ($k+1); ?>"></div>
                                    <div class="row_list_tx">
                                        <?php echo ($v["tx_icon"]); ?>
                                    </div>
                                    <span class="row_list_title"><?php echo ($v["top"]); ?></br><p><?php echo ($v["bottom"]); ?></p></span>
                                    <span class="row_list_integral"><?php echo ($v["right"]); ?></span>
                                </div><?php endforeach; endif; ?>
                            <?php if(empty($data["lastList"])): ?><div class="panel panel-default">
                                    <div class="panel-body">
                                        暂时没有数据
                                    </div>
                                </div><?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="b-tip-div col-xs-6 col-sm-4">
                    <div class="panel  b-color-tip3">
                        <div class="panel-heading">
                            <div class="b-tip-body">
                                <div class="b-tip-left">
                                    <i class="glyphicon glyphicon-stats"></i>
                                </div>
                                <div class="b-tip-right">
                                    <div class="b-tip-titleb"><?php echo ($data["type_name"]); ?></div>
                                    <div class="b-tip-titlel">总榜单</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <?php if(is_array($data["allList"])): foreach($data["allList"] as $k=>$v): ?><div class="row_list">
                                    <div class="row_list_jp jp0<?php echo ($k+1); ?>"></div>
                                    <div class="row_list_tx">
                                        <?php echo ($v["tx_icon"]); ?>
                                    </div>
                                    <span class="row_list_title"><?php echo ($v["top"]); ?></br><p><?php echo ($v["bottom"]); ?></p></span>
                                    <span class="row_list_integral"><?php echo ($v["right"]); ?></span>
                                </div><?php endforeach; endif; ?>
                            <?php if(empty($data["allList"])): ?><div class="panel panel-default">
                                    <div class="panel-body">
                                        暂时没有数据
                                    </div>
                                </div><?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </body>
</html>