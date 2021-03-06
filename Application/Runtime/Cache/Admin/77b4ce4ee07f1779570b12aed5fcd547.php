<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <?php echo (ADMIN_META); echo (ADMIN_CSS); echo (ADMIN_COMPATIBLE); echo (ADMIN_JS); echo ($Assigndata); ?>
        <script src="/Public/Plugin/Highcharts-5.0.0/js/highcharts.js"></script>
        <!--<script src="/Public/Plugin/Highcharts-5.0.0/js/modules/exporting.js"></script>
        <script src="/Public/Plugin/Highcharts-5.0.0/js/highcharts-zh_CN.js"></script>-->

        <!--所有图都要用到的js start-->
        <script src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
        <!--所有图都要用到的js end-->

        <!--柱状图要用到的js start-->
        <script src="http://cdn.hcharts.cn/highcharts/modules/data.js"></script>
        <script src="http://cdn.hcharts.cn/highcharts/modules/drilldown.js"></script>

    </head>
    <script type="text/javascript">
        $(function () {
            $('#tabBtn').find('button').removeClass('btn-success');
            $('#btn_' + assignData.data.type).addClass('btn-success');
        });
        function showTopList(type) {
            location.href = a_path + '?type=' + type;
        }
    </script>
    <body>

        <div class="option_search">
            <div class="btn-group btn-group-lg" id='tabBtn'>
                <button type="button" id='btn_1' class="btn btn-default btn-success " onclick="showTopList(1)">
                    注册人数
                </button>
                <button type="button" id='btn_2' class="btn btn-default " onclick="showTopList(2)">
                    注册商家数
                </button>
                <button type="button" id='btn_3' class="btn btn-default " onclick="showTopList(3)">
                    活动数
                </button>
                <button type="button" id='btn_4' class="btn btn-default " onclick="showTopList(4)">
                    签到人次
                </button>
                <button type="button" id='btn_5' class="btn btn-default " onclick="showTopList(5)">
                    交易量
                </button>
            </div>
        </div>

        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto">

        </div>

    </body>
    <script type="text/javascript">
        $(document).ready(function () {

            $('#container').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: '<?php echo ($data['title']['xTitle']); ?>'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: '<?php echo ($data['title']['yTitle']); ?>'
                    }

                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            //format: '{point.y:.1f}斤'
                            format: '{point.y}'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'
                },

                series: [{
                    name: '提示',
                    colorByPoint: true,
                    data: <?php echo ($data['data']); ?>
                }],

            });

        });
    </script>

</html>