<?php
/* Smarty version 3.1.36, created on 2022-03-16 17:56:44
  from 'D:\phpstudy_pro\WWW\cafe.com\resources\views\malio\admin\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6231b45c153cc8_20628062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c3860780ec903d33c040af3b39d707ebf3e8b22' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\cafe.com\\resources\\views\\malio\\admin\\index.tpl',
      1 => 1646232804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_6231b45c153cc8_20628062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">汇总</h1>
        </div>
    </div>
    <div class="container">
        <section class="content-inner margin-top-no">
            <div class="row">
                <div class="col-xx-12">
                    <div class="card margin-bottom-no">
                        <div class="card-main">
                            <div class="card-inner">
                                <p>下面是系统运行情况简报。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui-card-wrap">
                <div class="row">

                    <div class="col-xx-12 col-sm-6">
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <h5>收入情况</h5>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
                                    <button class="mdl-button mdl-js-button mdl-button--raised" onclick="getIncome('<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</button>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <p id="income_text" style="margin-top: 10px;">loading</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">

                                    <div id="check_chart" style="height: 300px; width: 100%;"></div>

                                    <?php echo '<script'; ?>
 src="//fastly.jsdelivr.net/gh/SuicidalCat/canvasjs.js@v2.3.1/canvasjs.min.js"><?php echo '</script'; ?>
>
                                    <?php echo '<script'; ?>
>
                                        var chart = new CanvasJS.Chart("check_chart",
                                                {
                                                    title: {
                                                        text: "用户签到情况(总用户 <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalUser();?>
人)",
                                                        fontFamily: "Impact",
                                                        fontWeight: "normal"
                                                    },

                                                    legend: {
                                                        verticalAlign: "bottom",
                                                        horizontalAlign: "center"
                                                    },
                                                    data: [
                                                        {
                                                            //startAngle: 45,
                                                            indexLabelFontSize: 20,
                                                            indexLabelFontFamily: "Garamond",
                                                            indexLabelFontColor: "darkgrey",
                                                            indexLabelLineColor: "darkgrey",
                                                            indexLabelPlacement: "outside",
                                                            type: "doughnut",
                                                            showInLegend: true,
                                                            dataPoints: [
                                                                {
                                                                    y: <?php echo (1-($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100;?>
,
                                                                    legendText: "没有签到过的用户 <?php echo number_format((1-($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getCheckinUser();?>
人",
                                                                    indexLabel: "没有签到过的用户 <?php echo number_format((1-($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getCheckinUser();?>
人"
                                                                },
                                                                {
                                                                    y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()-$_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100;?>
,
                                                                    legendText: "曾经签到过的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()-$_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()-$_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser();?>
人",
                                                                    indexLabel: "曾经签到过的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()-$_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()-$_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser();?>
人"
                                                                },
                                                                {
                                                                    y: <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100;?>
,
                                                                    legendText: "今日签到用户 <?php echo number_format($_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser();?>
人",
                                                                    indexLabel: "今日签到用户 <?php echo number_format($_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser();?>
人"
                                                                }
                                                            ]
                                                        }
                                                    ]
                                                });

                                        chart.render();

                                        function chartRender(chart) {
                                            chart.render();
                                            chart.ctx.shadowBlur = 8;
                                            chart.ctx.shadowOffsetX = 4;
                                            chart.ctx.shadowColor = "black";

                                            for (let i in chart.plotInfo.plotTypes) {
                                                let plotType = chart.plotInfo.plotTypes[i];
                                                for (let j in plotType.plotUnits) {
                                                    let plotUnit = plotType.plotUnits[j];
                                                    if (plotUnit.type === "doughnut") {
                                                        // For Column Chart
                                                        chart.renderDoughnut(plotUnit);
                                                    } else if (plotUnit.type === "bar") {
                                                        // For Bar Chart
                                                        chart.renderBar(plotUnit);
                                                    }
                                                }
                                            }
                                            chart.ctx.shadowBlur = 0;
                                            chart.ctx.shadowOffsetX = 0;
                                            chart.ctx.shadowColor = "transparent";
                                        }
                                    <?php echo '</script'; ?>
>

                                </div>

                            </div>
                        </div>


                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
			    <div id="alive_chart" style="height: 300px; width: 100%;"></div>

                                    <?php echo '<script'; ?>
 src="//fastly.jsdelivr.net/gh/YihanH/canvasjs.js@v2.2/canvasjs.min.js"><?php echo '</script'; ?>
>
                                    <?php echo '<script'; ?>
 type="text/javascript">
                                        var chart = new CanvasJS.Chart("alive_chart",
                                                {
                                                    title: {
                                                        text: "用户在线情况(总用户 <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalUser();?>
人)",
                                                        fontFamily: "Impact",
                                                        fontWeight: "normal"
                                                    },

                                                    legend: {
                                                        verticalAlign: "bottom",
                                                        horizontalAlign: "center"
                                                    },
                                                    data: [
                                                        {
                                                            //startAngle: 45,
                                                            indexLabelFontSize: 20,
                                                            indexLabelFontFamily: "Garamond",
                                                            indexLabelFontColor: "darkgrey",
                                                            indexLabelLineColor: "darkgrey",
                                                            indexLabelPlacement: "outside",
                                                            type: "doughnut",
                                                            showInLegend: true,
                                                            dataPoints: [
                                                                {
                                                                    y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getUnusedUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100;?>
,
                                                                    legendText: "从未在线的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getUnusedUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getUnusedUser()));?>
人",
                                                                    indexLabel: "从未在线的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getUnusedUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getUnusedUser()));?>
人"
                                                                },
                                                                {
                                                                    y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getUnusedUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100;?>
,
                                                                    legendText: "一天以前在线的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getUnusedUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getUnusedUser());?>
人",
                                                                    indexLabel: "一天以前在线的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getUnusedUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getUnusedUser());?>
人"
                                                                },
                                                                {
                                                                    y: <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100;?>
,
                                                                    legendText: "一天内在线 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600));?>
人",
                                                                    indexLabel: "一天内在线 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600));?>
人"
                                                                },
                                                                {
                                                                    y: <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100;?>
,
                                                                    legendText: "一小时内在线的用户 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60));?>
人",
                                                                    indexLabel: "一小时内在线的用户 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60));?>
人"
                                                                },
                                                                {
                                                                    y: <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100;?>
,
                                                                    legendText: "一分钟内在线的用户 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60));?>
人",
                                                                    indexLabel: "一分钟内在线的用户 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60));?>
人"
                                                                }
                                                            ]
                                                        }
                                                    ]
                                                });

                                        chart.render();
                                    <?php echo '</script'; ?>
>

                                </div>

                            </div>
                        </div>


                    </div>


                    <div class="col-xx-12 col-sm-6">

                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <h5>注册新用户</h5>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
                                    <button class="mdl-button mdl-js-button mdl-button--raised" onclick="getNewUsers('<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</button>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <p id="newusers_text" style="margin-top: 10px;">loading</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">

                                    <div id="node_chart" style="height: 300px; width: 100%;"></div>

                                    <?php echo '<script'; ?>
 src="//fastly.jsdelivr.net/gh/YihanH/canvasjs.js@v2.2/canvasjs.min.js"><?php echo '</script'; ?>
>
                                    <?php echo '<script'; ?>
 type="text/javascript">
                                        var chart = new CanvasJS.Chart("node_chart",
                                                {
                                                    title: {
                                                        text: "节点在线情况(节点数 <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalNodes();?>
个)",
                                                        fontFamily: "Impact",
                                                        fontWeight: "normal"
                                                    },

                                                    legend: {
                                                        verticalAlign: "bottom",
                                                        horizontalAlign: "center"
                                                    },
                                                    data: [
                                                        {
                                                            //startAngle: 45,
                                                            indexLabelFontSize: 20,
                                                            indexLabelFontFamily: "Garamond",
                                                            indexLabelFontColor: "darkgrey",
                                                            indexLabelLineColor: "darkgrey",
                                                            indexLabelPlacement: "outside",
                                                            type: "doughnut",
                                                            showInLegend: true,
                                                            dataPoints: [
                                                                <?php if ($_smarty_tpl->tpl_vars['sts']->value->getTotalNodes() != 0) {?>
                                                                {
                                                                    y: <?php echo (1-($_smarty_tpl->tpl_vars['sts']->value->getAliveNodes()/$_smarty_tpl->tpl_vars['sts']->value->getTotalNodes()))*100;?>
,
                                                                    legendText: "离线节点 <?php echo number_format((1-($_smarty_tpl->tpl_vars['sts']->value->getAliveNodes()/$_smarty_tpl->tpl_vars['sts']->value->getTotalNodes()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalNodes()-$_smarty_tpl->tpl_vars['sts']->value->getAliveNodes();?>
个",
                                                                    indexLabel: "离线节点 <?php echo number_format((1-($_smarty_tpl->tpl_vars['sts']->value->getAliveNodes()/$_smarty_tpl->tpl_vars['sts']->value->getTotalNodes()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalNodes()-$_smarty_tpl->tpl_vars['sts']->value->getAliveNodes();?>
个"
                                                                },
                                                                {
                                                                    y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getAliveNodes()/$_smarty_tpl->tpl_vars['sts']->value->getTotalNodes()))*100;?>
,
                                                                    legendText: "在线节点 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getAliveNodes()/$_smarty_tpl->tpl_vars['sts']->value->getTotalNodes()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getAliveNodes();?>
个",
                                                                    indexLabel: "在线节点 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getAliveNodes()/$_smarty_tpl->tpl_vars['sts']->value->getTotalNodes()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getAliveNodes();?>
个"
                                                                }
                                                                <?php }?>
                                                            ]
                                                        }
                                                    ]
                                                });

                                        chart.render();
                                    <?php echo '</script'; ?>
>

                                </div>

                            </div>
                        </div>


                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">

                                    <div id="traffic_chart" style="height: 300px; width: 100%;"></div>

                                    <?php echo '<script'; ?>
 src="//fastly.jsdelivr.net/gh/YihanH/canvasjs.js@v2.2/canvasjs.min.js"><?php echo '</script'; ?>
>
                                    <?php echo '<script'; ?>
 type="text/javascript">
                                        var chart = new CanvasJS.Chart("traffic_chart",
                                                {
                                                    title: {
                                                        text: "流量使用情况(总分配流量 <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalTraffic();?>
)",
                                                        fontFamily: "Impact",
                                                        fontWeight: "normal"
                                                    },

                                                    legend: {
                                                        verticalAlign: "bottom",
                                                        horizontalAlign: "center"
                                                    },
                                                    data: [
                                                        {
                                                            //startAngle: 45,
                                                            indexLabelFontSize: 20,
                                                            indexLabelFontFamily: "Garamond",
                                                            indexLabelFontColor: "darkgrey",
                                                            indexLabelLineColor: "darkgrey",
                                                            indexLabelPlacement: "outside",
                                                            type: "doughnut",
                                                            showInLegend: true,
                                                            dataPoints: [
                                                                <?php if ($_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic() != 0) {?>
                                                                {
                                                                    y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getRawUnusedTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100;?>
,
                                                                    label: "总剩余可用",
                                                                    legendText: "总剩余可用 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawUnusedTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getUnusedTrafficUsage()));?>
",
                                                                    indexLabel: "总剩余可用 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawUnusedTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getUnusedTrafficUsage()));?>
"
                                                                },
                                                                {
                                                                    y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getRawLastTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100;?>
,
                                                                    label: "总过去已用",
                                                                    legendText: "总过去已用 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawLastTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getLastTrafficUsage()));?>
",
                                                                    indexLabel: "总过去已用 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawLastTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getLastTrafficUsage()));?>
"
                                                                },
                                                                {
                                                                    y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getRawTodayTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100;?>
,
                                                                    label: "总今日已用",
                                                                    legendText: "总今日已用 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawTodayTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getTodayTrafficUsage()));?>
",
                                                                    indexLabel: "总今日已用 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawTodayTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getTodayTrafficUsage()));?>
"
                                                                }
                                                                <?php }?>
                                                            ]
                                                        }
                                                    ]
                                                });

                                        chart.render();
                                    <?php echo '</script'; ?>
>

                                </div>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </section>
    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    function getIncome(date) {
        $.ajax({
            type: "GET",
            url: "/admin/api/analytics/income",
            dataType: "json",
            data: {
                date: date,
            },
            success: function (data) {
                console.log(data.ret);
                if (data.success) {
                    data = data.data;
                    var html_text = `<h6>${data.date}的数据</h6>
今日收入：${data.todayIncome}<br>
昨日收入：${data.yesterdayIncome}<br>
前日收入：${data.tbdyesterdayIncome}<br>
前四收入：${data.fourdayIncome}<br>
三日收入：${data.threeDaysIncome}<br>
本周收入：${data.thisWeekIncome}
上周收入：${data.lastWeekIncome}<br>
本月收入：${data.thisMonthIncome}
上月收入：${data.lastMonthIncome}`;

                    $('#income_text').html(html_text);
                } else {
                    console.log(data.error)
                }
            }
        })
    }

    function getNewUsers(date) {
        $.ajax({
            type: "GET",
            url: "/admin/api/analytics/new-users",
            dataType: "json",
            data: {
                date: date,
            },
            success: function (data) {
                console.log(data.ret);
                if (data.success) {
                    data = data.data;
                    var html_text = `<h6>${data.date}的数据</h6>今日新用户：${data.today}<br>昨日新用户：${data.yesterday}<br>本周新用户：${data.thisWeek}<br>上周新用户：${data.lastWeek}<br>本月新用户：${data.thisMonth}<br>上月新用户：${data.lastMonth}`;
                    $('#newusers_text').html(html_text);
                } else {
                    console.log(data.error)
                }
            }
        })
    }

    String.prototype.replaceAll = function (stringToFind, stringToReplace) {
        if (stringToFind === stringToReplace) return this;
        var temp = this;
        var index = temp.indexOf(stringToFind);
        while (index != -1) {
            temp = temp.replace(stringToFind, stringToReplace);
            index = temp.indexOf(stringToFind);
        }
        return temp;
    };

    var date = new Date();
    date = date.toLocaleDateString();
    date = date.replaceAll('/','-');
    getIncome(date);
    getNewUsers(date);
<?php echo '</script'; ?>
>

<?php }
}
