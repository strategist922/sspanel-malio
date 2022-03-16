<?php
/* Smarty version 3.1.36, created on 2022-03-16 17:52:37
  from 'D:\phpstudy_pro\WWW\cafe.com\resources\views\malio\user\trafficlog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6231b365e1c7b3_54574980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91d4f7dc6e60396c80119e33be866081a860d08e' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\cafe.com\\resources\\views\\malio\\user\\trafficlog.tpl',
      1 => 1589811246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b365e1c7b3_54574980 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="scatter-plot"></div>
<?php echo '<script'; ?>
>
    ! function ($) {
        "use strict";

        var ChartC3 = function () {};

        ChartC3.prototype.init = function () {
            var xs_data = {};
            var columns_data = [];
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logs']->value, 'single_log');
$_smarty_tpl->tpl_vars['single_log']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['single_log']->value) {
$_smarty_tpl->tpl_vars['single_log']->do_else = false;
?>
                var log_traffic = <?php echo number_format($_smarty_tpl->tpl_vars['single_log']->value->totalUsedRaw()/1024,2,'.','');?>
;
                if ( log_traffic > 0.5) {
                    var node_name = '<?php echo $_smarty_tpl->tpl_vars['single_log']->value->node()->name;?>
'.split(" - ")[0];
                    var node_name_x = '<?php echo $_smarty_tpl->tpl_vars['single_log']->value->node()->name;?>
'.split(" - ")[0]+'_x';
                    if (!xs_data.hasOwnProperty(node_name)) {
                        xs_data[node_name] = node_name_x;
                        columns_data[node_name] = [node_name];
                        columns_data[node_name_x] = [node_name_x];
                    };
                    columns_data[node_name].push(log_traffic);
                    columns_data[node_name_x].push((new Date(<?php echo $_smarty_tpl->tpl_vars['single_log']->value->log_time*1000;?>
)));
                };
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            var columns_data_edit = [];
            for (var column in columns_data) {
                columns_data_edit.push(
                    columns_data[column]
                )
            };
            //Scatter Plot
            c3.generate({
                bindto: '#scatter-plot',
                data: {
                    xs:xs_data,
                    columns: columns_data_edit,
                    type: 'scatter'
                },
                color: {
                    pattern: ["#1bb99a", "#f1b53d", "#007bff", "#6610f2", "#e83e8c", "#fd7e14", "#ffc107", "#6f42c1", "#28a745", "#20c997", "#17a2b8"]
                },
                tooltip: {
                    format: {
                        value: function (value) {
                            return value+'MB';
                        },
                        title: function (title) {
                            return title.toLocaleString('chinese',
                            {
                                hour12:false
                            }
                            )
                        }
                    }
                },
                axis: {
                    x: {
                        label: '时间',
                        type: 'timeseries',
                        tick: {
                            fit: false,
                            format: '%d日 %H:%M',
                            multiline: true,
                        }
                        
                    },
                    y: {
                        label: '流量/MB',
                    }
                }
                
            });


        },
        $.ChartC3 = new ChartC3, $.ChartC3.Constructor = ChartC3
    }(window.jQuery),

    //initializing 
    function ($) {
        "use strict";
        $.ChartC3.init()
    }(window.jQuery);
<?php echo '</script'; ?>
><?php }
}
