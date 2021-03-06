<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); ?>
        <!--自定义样式及脚本放于此处-->
        <link rel="stylesheet" href="/Public/admin/css/login.css">
        <script type="text/javascript" src="/Public/admin/js/login/login.js"></script>
        <?php echo (ANIMATION); ?>
        <title><?php echo ($config['system_name']); ?></title>
    </head>
    <body>
        <input type="hidden" name="url" id="url" value="findpwd">
        <nav class="navbar navbar-inverse navbar-fixed-top b-header">
            <div class="container-fluid">
                <div class="navbar-header ">
                    <div class="b-systitle"><?php echo ($config['system_name']); ?></div>
                </div>                
            </div>
        </nav>

        <div class="container-fluid b-menu">
            <div class="row">                
                <div class="col-md-12 b-login-bg">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 b-login-div b-icon-computer"></div>
                        <div class="col-xs-12 col-sm-6 b-login-div b-icon-login">
                            <!--找回密码-->
                            <div class="b-login-area" id="findpwd" style="display: block;">
                                <div class="b-login-title">
                                    找回密码
                                </div>
                                <div class="b-input-tr">
                                    <div class="input-group input-group-lg b-input-border">
                                        <span class="input-group-addon b-input-icon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" placeholder="请输入用户名" style="height: 50px;" id="usr">
                                    </div>
                                </div>
                                <div class="b-input-tr">
                                    <div class="input-group input-group-lg b-input-border">
                                        <span class="input-group-addon b-input-icon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input type="text" class="form-control" placeholder="请输入电子邮箱" style="height: 50px;" id="email">
                                        <span class="input-group-addon" style="width: 140px;cursor: pointer;" onclick="getKeyCode()">
                                            发送验证码
                                        </span>
                                    </div>
                                </div>
                                <div class="b-input-tr">
                                    <div class="input-group input-group-lg b-input-border">
                                        <span class="input-group-addon b-input-icon"><i class="glyphicon glyphicon-star"></i></span>
                                        <input type="text" class="form-control" placeholder="请输入收到的验证码" style="height: 50px;" id="keycode">
                                    </div>
                                </div>
                                <div class="b-input-tr">
                                    <div class="alert alert-danger" style="display: none;" id="warning">
                                        <i class="glyphicon glyphicon-exclamation-sign"></i>
                                        <span id="warnMsg">错误！请进行一些更改。</span>
                                    </div>
                                    <div class="b-login-btn hvr-grow" onclick="subFindPwd()">
                                        找回密码
                                    </div>
                                </div>
                                <div class="b-input-tr">
                                    <div class="b-input-foot">
                                        <div class="b-input-foot-btn b-text-left" onclick="aHref('login')">返回登录</div>
                                    </div>
                                </div>
                            </div>
                            <!--修改密码-->
                            <div class="b-login-area" id="editpwd" style="display: none;">
                                <div class="b-login-title">
                                    修改密码
                                </div>
                                <div class="b-input-tr">
                                    <input type="hidden" name="user_id" id="user_id" value="0">
                                    <div class="input-group input-group-lg b-input-border">
                                        <span class="input-group-addon b-input-icon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" class="form-control" placeholder="请输入密码" style="height: 50px;" id="newPwd">
                                    </div>
                                </div>
                                <div class="b-input-tr">
                                    <div class="input-group input-group-lg b-input-border">
                                        <span class="input-group-addon b-input-icon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" class="form-control" placeholder="请再次输入密码" style="height: 50px;" id="confirmPwd">
                                    </div>
                                </div>
                                <div class="b-input-tr">
                                    <div class="alert alert-danger" style="display: none;" id="warning1">
                                        <i class="glyphicon glyphicon-exclamation-sign"></i>
                                        <span id="warnMsg1">错误！请进行一些更改。</span>
                                    </div>
                                    <div class="b-login-btn" onclick="editPwd()">
                                        修改密码
                                    </div>
                                </div>
                                <div class="b-input-tr">
                                    <div class="b-input-foot">
                                        <div class="b-input-foot-btn b-text-left" onclick="aHref('findpwd')">返回登录</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">                
                <div class="col-md-12 b-login-footer hvr-overline-from-center">
                    <?php echo ($config['system_name']); ?>
                </div>
            </div>
        </div>

    </body>
</html>