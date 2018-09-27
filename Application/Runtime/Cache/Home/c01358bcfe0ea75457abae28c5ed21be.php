<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="/Public/home/css/mui.min.css">
        <link rel="stylesheet" href="/Public/home/css/icons-extra.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/home/css/common.css">
        <link rel="stylesheet" href="/Public/home/css/notice_wxdetail.css">
        <script src="/Public/home/js/jquery-1.11.0.js"></script>
        <script src="/Public/home/js/mui.min.js"></script>
        <script type="text/javascript">
            //启用双击监听
            mui.init({
                gestureConfig: {
                    doubletap: true,
                },
            });
        </script>
        <?php echo ($Assigndata); ?>
        <script src="/Public/home/js/common.js"></script>
        <script src="/Public/home/js/learn_wxdetail.js"></script>
    </head>

    <body>
        <div class="wrapper">
            <!--主体-->
            <div class="mui-content body" style="background-color: #fff;">

                <div class="mui-row">
                    <div class="mui-col-sm-12 mui-col-xs-12 title"></div>
                </div>
                <div class="mui-row">
                    <div class="mui-col-sm-12 mui-col-xs-12" style="margin-top: 5px;">
                        <div class="author">延庆生态农业循环经济科普基地</div>
                        <div class="addtime">昨天</div>
                    </div>
                </div>
                <div class="mui-row">
                    <div class="mui-col-sm-12 mui-col-xs-12" style="margin-top: 5px;">
                        <div>
                            <section style="border-style: solid; border-width: 1px 1px 1px 60px; border-color: rgb(53, 195, 201); padding: 10px 0px; margin: 10px 0px;" class="ImbBorder" border-width="1" border-style="solid" border-radius="0" border-color="rgb(53, 195, 201)">
                                <section style="margin:0 ; padding:5px 0 5px 20px; color: rgb(53,195,201);">
                                    <section style="font-weight: bold; color: inherit; font-size:30px;" class="ImbWord">
                                        讲师：<span class='teacher'></span></br>
                                    </section>
                                </section>
                                <section style="margin:0; padding:5px 0px 5px 20px; box-sizing:border-box; color: rgb(53,195,201); border-top:2px solid rgb(53,195,201); line-height:1.75em" class="ImbWord ImbBorder" border-color="rgb(53,195,201)">
                                    <p style=" margin:0; color: inherit; font-size:18px; font-weight:bold">
                                         时间：<span class="start_time"></span>
                                    </p>
                                </section>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="mui-row">
                    <div class="mui-col-sm-12 mui-col-xs-12 content"></div>
                </div>
                <div class="mui-row">
                    <div class="mui-col-sm-6 mui-col-xs-6 viewnum">阅读&#12288;234234</div>
                </div>
                <div class="mui-row">
                    <div class="mui-col-sm-12 mui-col-xs-12">
                        <div>
                            <section style="margin: 0px; padding: 0px; box-sizing: border-box;">
                                <section style="margin:0; padding:5px 0; border-bottom:2px solid rgb(190,15,15); border-top:2px solid rgb(190,15,15); font-size:18px; word-wrap:break-word" class="ImbWord ImbBorder" border-color="rgb(190,15,15)">
                                    <span class="ImbBrushWord" style="font-size:18px; margin-right:5px; color:rgb(0,0,0);">如果感兴趣，您可以预约参加本次培训</span>
                                </section>
                                <section style="margin-left:10px; padding:0; border-left:10px solid transparent; border-right:10px solid transparent; border-top:10px solid rgb(190,15,15); height:0; width:0;"></section>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="mui-row">
                    <div class="mui-col-sm-12 mui-col-xs-12">
                        <div class="mui-card">
                            <div class="mui-card-content">
                                <div class="mui-card-content-inner" style="color:#C00000;">
                                    请认真填写联系人信息及预约人数。
                                </div>
                            </div>
                        </div>
                        <div class="mui-card">
                            <div class="mui-card-content">
                                <div class="m-inputheader">预约人数</div>
                                <div class="m-inputframe">
                                    <input type="text" id="appt_num" name="appt_num"  onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                                </div>
                                <div class="m-inputheader">联系人</div>
                                <div class="m-inputframe">
                                    <input type="text" id="linkman_name" name="linkman_name">
                                </div>
                                <div class="m-inputheader">联系方式</div>
                                <div class="m-inputframe">
                                    <input type="text" id="linkman_tel" name="linkman_tel"  onkeyup="value = value.replace(/[^1234567890]+/g, '')">
                                </div>



                            </div>
                        </div>
                        <div class="mui-row" id="subBtn">
                            <button  type="button" class="mui-btn mui-btn-primary mui-btn-block" onclick="subLearnOrder()">提交</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </body>

</html>