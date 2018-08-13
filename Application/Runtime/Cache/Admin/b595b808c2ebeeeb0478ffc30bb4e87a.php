<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); ?>
        <!--自定义样式及脚本放于此处-->
        <link rel="stylesheet" href="/Public/admin/css/index.css">
        <script type="text/javascript" src="/Public/admin/js/index/index.js"></script>
        <?php echo (ANIMATION); ?>
        <title><?php echo ($config['system_name']); ?></title>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top b-header">
            <div class="container-fluid">
                <div class="navbar-header ">
                    <div class="b-systitle"><?php echo ($config['system_name']); ?></div>
                </div>
                <div class="navbar-collapse collapse" >
                    <ul class="nav navbar-nav navbar-right" style="margin: 5px 0px;">
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle b-top b-icon-tix hvr-buzz-out" style="color: #fff;display:<?php echo ($tixing); ?>" data-toggle="dropdown">
                                提醒
                                <span class="label label-danger" id="countSum">0</span>
                            </a>
                            <ul class="dropdown-menu" style="width: auto" id="txNum">

                            </ul>
                        </li>
                        <li>
                            <a  href="javascript:void(0)" onclick="jumpPage('/index.php/Admin/SysUserInfo/saveUserMyInfo', 0)" class="b-top b-icon-user hvr-buzz-out" style="color: #fff;" target="right">
                                <?php echo ($realname); ?>
                            </a>
                        </li>
                        <li ><a href="/index.php/Admin/login/logout" class="b-top b-icon-logout hvr-buzz-out" style="color: #fff;">退出</a></li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid b-menu">
            <div class="row">
                <div class="col-md-2 b-div-menu" id="menu">
                    <ul id="main-nav" class="nav nav-list nav-stacked" >

                        <li style="border-left-color: #3fb2ac">
                            <div class="li-color-1" onclick="jumpPage('/index.php/Admin/index/main', 0)">
                                <i class="glyphicon glyphicon-home"></i>
                                首&#12288;&#12288;页         
                                <span class="pull-right glyphicon">&#12288;</span>
                            </div>
                        </li>

                        <li class="noticeMenu">
                            <div href="#div1" class="nav-header collapsed li-color-2" onclick="zkTab('div1')">
                                <i class="glyphicon glyphicon-list-alt"></i>
                                内容管理
                                <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                            </div>
                            <ul id="div1" class="nav nav-list collapse secondmenu" style="height: 0px;">
                                <li class="showNoticeCat"><div onclick="jumpPage('/index.php/Admin/NoticeCat/showList', this)" class="li-color-2">内容分类</div></li>
                                <li class="showNoticeInfo"><div onclick="jumpPage('/index.php/Admin/NoticeInfo/showList', this)" class="li-color-2" >信息列表</div></li>
                            </ul>
                        </li>
                        
                        <li class="appointmentMenu">
                            <div href="#div2" class="nav-header collapsed li-color-3" onclick="zkTab('div2')">
                                <i class="glyphicon glyphicon-phone-alt"></i>
                                预约管理
                                <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                            </div>
                            <ul id="div2" class="nav nav-list collapse secondmenu" style="height: 0px;">
                                <li class="showVisitInfo"><div onclick="jumpPage('/index.php/Admin/Appt/apptVisitDate', this)" class="li-color-3">参观预约</div></li>
                                <li class="showLearnInfo"><div onclick="jumpPage('/index.php/Admin/Apptlearn/showList', this)" class="li-color-3" >培训列表</div></li>
                            </ul>
                        </li>
                        
                        <li class="systemMenu" id="myName">
                            <div class="nav-header collapsed li-color-6" onclick="zkTab('div7')">
                                <i class="glyphicon glyphicon-cog"></i>
                                系统设置
                                <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                            </div>
                            <ul id="div7" class="nav nav-list collapse secondmenu" style="height: 0px;">
                                <li class="showPrivCat"><div onclick="jumpPage('/index.php/Admin/SysPrivCat/showList', this)"  class="li-color-6" >权限分类</div></li>
                                <li class="showPrivInfo"><div onclick="jumpPage('/index.php/Admin/SysPrivInfo/showList', this)"  class="li-color-6" >权限列表</div></li>
                                <li class="showUserGroup"><div onclick="jumpPage('/index.php/Admin/SysUserGroup/showList', this)"  class="li-color-6" >角色管理</div></li>
                                <li class="showUserInfo"><div onclick="jumpPage('/index.php/Admin/SysUserInfo/showList', this)"  class="li-color-6" >用户管理</div></li>
                                <li class="showDbBack"><div onclick="jumpPage('/index.php/Admin/Dbbackup/showList', this)"  class="li-color-6" >数据备份</div></li>
                                <li class="cleanTemPic"><div onclick="jumpPage('/index.php/Admin/Allattach/delAttachs', this)"  class="li-color-6" >清理缓存</div></li>
                                <li class="showLogInfo"><div onclick="jumpPage('/index.php/Admin/Actionlog/showLogList', this)"  class="li-color-6" >系统日志</div></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-body b-main-title">
                            <a id="firCat" style="color:#3fb2ac;" href="javascript:void(0)">后台</a>&nbsp;&raquo;&nbsp;<a id="secCat" style="color:#3fb2ac;" href="javascript:void(0)">首页</a>
                        </div>
                    </div>
                    <div class="panel panel-default" id="main">
                        <iframe name="right" id="rightMain" src="/index.php/Admin/index/main" frameborder="no" scrolling="auto" width="100%" height="100%" allowtransparency="true"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html> 
<script src="/Public/admin/plugin/frameworks/Tour/tour.js"></script>
<link rel="stylesheet" href="/Public/admin/plugin/frameworks/Tour/tour-default.css">
<script src="/Public/admin/js/yd/yd-index.js"></script>