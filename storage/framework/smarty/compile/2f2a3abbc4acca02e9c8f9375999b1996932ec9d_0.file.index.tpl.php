<?php
/* Smarty version 3.1.36, created on 2022-03-16 17:52:36
  from 'D:\phpstudy_pro\WWW\cafe.com\resources\views\malio\user\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6231b364b7bcb9_08855377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f2a3abbc4acca02e9c8f9375999b1996932ec9d' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\cafe.com\\resources\\views\\malio\\user\\index.tpl',
      1 => 1644921831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/head.tpl' => 1,
    'file:user/navbar.tpl' => 1,
    'file:user/footer.tpl' => 1,
    'file:user/scripts.tpl' => 1,
  ),
),false)) {
function content_6231b364b7bcb9_08855377 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <?php $_smarty_tpl->_subTemplateRender('file:user/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <title><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('dashboard');?>
 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>

  <!-- C3 chart css -->
  <link rel="stylesheet" href="https://fastly.jsdelivr.net/npm/c3@0.6.8/c3.min.css">

  <style>
    .card-header i {
      vertical-align: 1px;
      font-size: 1rem;
    }

    .section .section-header .section-header-breadcrumb {
      flex-basis: 0;
    }

    .wizard-step-active {
      cursor: pointer;
    }

    .btn-quantumult {
      background: linear-gradient(to right, black, black) !important;
      color: white !important;
      border-color: transparent;
      border: none;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.38);
      margin-bottom: 16px;
    }
    .btn-shadowrocket {
      background: linear-gradient(to right, #3671b9, #3671b9) !important;
      color: white !important;
      border-color: transparent;
      border: none;
      box-shadow: 0 2px 6px #3671b99a;
      margin-bottom: 16px;
    }
    .btn-kitsunebi {
      background: linear-gradient(to right, #f2885b, #e83c9a) !important;
      color: white !important;
      border-color: transparent;
      border: none;
      box-shadow: 0 2px 4px #ff567885;
      margin-bottom: 16px;
    }
    .btn-ssr {
      background: linear-gradient(to right, #e780a3, #e780a3) !important;
      color: white !important;
      border-color: transparent;
      border: none;
      box-shadow: 0 2px 6px #e780a2b0;
      margin-bottom: 16px;
    }
    .btn-v2ray {
      background: linear-gradient(to right, #df268f, #a73178) !important;
      color: white !important;
      border-color: transparent;
      border: none;
      box-shadow: 0 2px 6px #df268f63;
      margin-bottom: 16px;
    }
    .btn-ss {
      background: linear-gradient(to right, #187abb, #187abb) !important;
      color: white !important;
      border-color: transparent;
      border: none;
      box-shadow: 0 2px 6px #3671b99a;
      margin-bottom: 16px;
    }
    .btn-surge {
      background: linear-gradient(to right, #5c97f0, #b769f3) !important;
      color: white !important;
      border-color: transparent;
      border: none;
      box-shadow: 0 2px 6px #8d7cfab2;
      margin-bottom: 16px;
    }
    .btn-clash {
      background: linear-gradient(to right, #49BCFC, #3B92F8) !important;
      color: white !important;
      border-color: transparent;
      border: none;
      box-shadow: 0 2px 6px rgba(73, 189, 252, 0.521);
      margin-bottom: 16px;
    }
    .btn-surfboard {
      background: linear-gradient(to right, #303030, #303030) !important;
      color: white !important;
      border-color: transparent;
      border: none;
      box-shadow: 0 2px 6px #3030306e;
      margin-bottom: 16px;
    }
    .wizard-steps .wizard-step .wizard-step-label {
        text-transform: none;
    }
    <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['index_subinfo_buttons_align'] == true) {?>
    .buttons a {
      width: 230px;
    }
    <?php }?>
  </style>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <?php $_smarty_tpl->_subTemplateRender('file:user/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php if ($_smarty_tpl->tpl_vars['user']->value->class != -1) {?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('dashboard');?>
</h1>
            <div class="section-header-breadcrumb">
              <div id="checkin-div" class="breadcrumb-item active">
                <?php if ($_smarty_tpl->tpl_vars['user']->value->isAbleToCheckin()) {?>
                <a href="#" onclick="checkin()" class="btn btn-icon icon-left btn-primary"><i class="far fa-calendar-check"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('daily-bonus');?>
</a>
                <?php } else { ?>
                <a href="#" class="btn btn-icon disabled icon-left btn-primary"><i class="far fa-calendar-check"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('alredy-got-daily-bonus');?>
</a>
                <?php }?>
              </div>
            </div>
          </div>
          <?php if (substr($_smarty_tpl->tpl_vars['user']->value->unusedTraffic(),0,-2) <= 0 && $_smarty_tpl->tpl_vars['user']->value->class != 0) {?>
            <div class="alert alert-warning">
              <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('no-available-data-alert');?>

            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->class == 0) {?>
            <div class="alert alert-warning">
              <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('plan-expired-alert');?>

            </div>
            <?php }?>
            <?php ob_start();
echo substr($_smarty_tpl->tpl_vars['user']->value->unusedTraffic(),-2);
$_prefixVariable1 = ob_get_clean();
if (substr($_smarty_tpl->tpl_vars['user']->value->unusedTraffic(),0,-2) <= 5 && substr($_smarty_tpl->tpl_vars['user']->value->unusedTraffic(),0,-2) > 0 && $_prefixVariable1 == 'GB') {?>
              <div class="alert alert-primary">
                <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('no-enough-data-alert');?>

              </div>
              <?php }?>
              <?php if (($_smarty_tpl->tpl_vars['user']->value->lastSsTime() == '从未使用喵' && $_smarty_tpl->tpl_vars['user']->value->class > 0) || $_smarty_tpl->tpl_vars['malio_config']->value['index_show_alert_to_tutorial'] == true) {?>
              <div class="alert alert-primary">
                <a href="/user/tutorial" class="alert-link" style="font-weight:400"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('new-user-guide-alert');?>
</a>
              </div>
              <div class="alert alert-primary">
                <a  class="alert-link" style="font-weight:400"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('code-off-guide-alert');?>
</a>
              </div>
              <?php }?>
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <div class="card card-statistic-2">
                    <div class="card-icon shadow-primary bg-primary">
                      <i class="fas fa-crown"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('your-plan');?>
</h4>
                      </div>
                      <div class="card-body">
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->class_expire != "1989-06-04 00:05:00" && $_smarty_tpl->tpl_vars['user']->value->class >= 1) {?>
                        <span class="counter"><?php echo $_smarty_tpl->tpl_vars['class_left_days']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('days');?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->class <= 0) {?>
                        <span class="counter">0</span> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('days');?>

                        <?php } else { ?>
                          <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('lifetime');?>

                        <?php }?>
                      </div>
                    </div>
                    <div class="card-stats">
                      <div class="card-stats-title" style="padding-top: 0;padding-bottom: 4px;">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">
                              <?php if ($_smarty_tpl->tpl_vars['user']->value->class == 0) {?>
                                <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('plan-expired');?>
:
                              <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['I18N']->value['class-plan-name-map'][$_smarty_tpl->tpl_vars['i18n']->value->lang][$_smarty_tpl->tpl_vars['user']->value->class];?>
:
                              <?php }?>

                              <?php if ($_smarty_tpl->tpl_vars['user']->value->class_expire != "1989-06-04 00:05:00") {?>
                                <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('plan-expire-at',array(substr($_smarty_tpl->tpl_vars['user']->value->class_expire,0,10)));?>

                              <?php } else { ?>
                              <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('lifetime');?>

                              <?php }?>
                            </li>
                          </ol>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <div class="card card-statistic-2">
                    <div class="card-icon shadow-success bg-success">
                      <i class="fas fa-tint"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('available-data');?>
</h4>
                      </div>
                      <div class="card-body">
                        <span class="counter"><?php echo substr($_smarty_tpl->tpl_vars['user']->value->unusedTraffic(),0,-2);?>
</span> <?php echo substr($_smarty_tpl->tpl_vars['user']->value->unusedTraffic(),-2);?>

                      </div>
                      <div class="card-stats">
                        <div class="card-stats-title" style="padding-top: 0;padding-bottom: 4px;">
                          <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('used-today');?>
: <?php echo $_smarty_tpl->tpl_vars['user']->value->TodayusedTraffic();?>
</li>
                            </ol>
                          </nav>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <div class="card card-statistic-2">
                    <div class="card-icon shadow-info bg-info">
                      <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('online-devices');?>
</h4>
                      </div>
                      <div class="card-body">
                        <span class="counter"><?php echo $_smarty_tpl->tpl_vars['user']->value->online_ip_count();?>
</span> / <?php if ($_smarty_tpl->tpl_vars['user']->value->node_connector == 0) {?>∞<?php } else { ?><span class="counterup"><?php echo $_smarty_tpl->tpl_vars['user']->value->node_connector;?>
</span><?php }?>
                      </div>
                      <div class="card-stats">
                        <div class="card-stats-title" style="padding-top: 0;padding-bottom: 4px;">
                          <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('last-used-time');?>
: <?php if ($_smarty_tpl->tpl_vars['user']->value->lastSsTime() == '从未使用喵') {
echo $_smarty_tpl->tpl_vars['i18n']->value->get('never-used');
} else {
echo substr($_smarty_tpl->tpl_vars['user']->value->lastSsTime(),5);
}?></li>
                            </ol>
                          </nav>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <div class="card card-statistic-2">
                    <div class="card-icon shadow-warning bg-warning">
                      <i class="fas fa-wallet"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('balance');?>
</h4>
                      </div>
                      <div class="card-body">
                        ¥ <span class="counter"><?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
</span>
                      </div>
                      <div class="card-stats">
                        <div class="card-stats-title" style="padding-top: 0;padding-bottom: 4px;">
                          <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('total-aff-reward');?>
: ¥<?php echo $_smarty_tpl->tpl_vars['paybacks_sum']->value;?>
</li>
                            </ol>
                          </nav>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-md-7 col-lg-7">
                  <div class="card">
                    <div class="card-header">
                      <h4><i class="fas fa-bullhorn"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('announcement');?>
</h4>
                    </div>
                    <div class="card-body">
                      <?php echo $_smarty_tpl->tpl_vars['ann']->value->content;?>

                    </div>
                  </div>

                 <!-- <div class="card">
                    <div class="card-header">
                      <h4><i class="fas fa-chart-bar" style="vertical-align: -1px;"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('data-usage-72-hours');?>
</h4>
                      <div class="card-header-action" id="loadTrafficChart-div">
                        <a href="##" onclick="loadTrafficChart()" class="btn btn-primary" style="display: inline-block">
                          <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('load-data');?>

                        </a>
                      </div>
                    </div>
                    <div id="chartCardbox" class="card-body">
                      <div id="scatter-plot"></div>
                    </div>
                  </div>-->
                </div>
                
                <div class="col-12 col-md-5 col-lg-5">
                  <div class="card">
                    <div class="card-header">
                      <h4><i class="fas fa-chart-pie"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('data-useage');?>
</h4>
                    </div>
                    <div class="card-body">
                      <div id="pie-chart"></div>
                    </div>
                  </div>

                  <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_share'] == true) {?>
                  <div class="card">
                    <div class="card-header">
                      <h4><i class="fas fa-share"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('shared-account');?>
</h4>
                    </div>
                    <div class="card-body">
                      <div id="accordion">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['malio_config']->value['share_account'], 'class', false, 'class_name');
$_smarty_tpl->tpl_vars['class']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['class_name']->value => $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->do_else = false;
?>
                        <div class="accordion">
                          <div class="accordion-header collapsed" role="button" data-toggle="collapse" data-target="#panel-body-<?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
" aria-expanded="false">
                            <h4><?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
</h4>
                          </div>
                          <div class="accordion-body collapse" id="panel-body-<?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
" data-parent="#accordion">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['class']->value, 'account');
$_smarty_tpl->tpl_vars['account']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->do_else = false;
?>
                            <p class="mb-2">
                              <p class="lead"><b><?php echo $_smarty_tpl->tpl_vars['account']->value['name'];?>
</b></p>
                              <?php if ($_smarty_tpl->tpl_vars['user']->value->class >= $_smarty_tpl->tpl_vars['account']->value['class']) {?>
                              <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('account');?>
: <a href="##" class="copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['account']->value['account'];?>
"><?php echo $_smarty_tpl->tpl_vars['account']->value['account'];?>
</a><br>
                              <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('password');?>
: <a href="##" class="copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['account']->value['passwd'];?>
">*********(<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('click-to-copy');?>
)</a>
                              <?php } else { ?>
                              <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('no-access-to-shared-account-desc');?>

                              <?php }?>
                            </p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </div>
                        </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </div>
                    </div>
                  </div>
                  <?php }?>

                  <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_index_subinfo'] == true) {?>
                  <div class="card">
                    <div class="card-header">
                      <h4><i class="fas fa-bolt"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('quick-import');?>
</h4>
                    </div>
                    <div class="card-body">
                      <div class="buttons">
                        <?php if ((in_array("ss",$_smarty_tpl->tpl_vars['malio_config']->value['support_sub_type'])) || (in_array("v2ray",$_smarty_tpl->tpl_vars['malio_config']->value['support_sub_type']))) {?>
                        <?php if ((!in_array("clash",$_smarty_tpl->tpl_vars['malio_config']->value['index_hidden_import_buttons']))) {?>
                          <a href="##" class="btn btn-icon icon-left btn-primary btn-clash btn-lg btn-round" onclick="importSublink('clash')"><i class="malio-clash"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('import-clash-config');?>
</a>
                        <?php }?>
                        <?php }?>
                        
                        <?php if ((in_array("ss",$_smarty_tpl->tpl_vars['malio_config']->value['support_sub_type'])) || (in_array("v2ray",$_smarty_tpl->tpl_vars['malio_config']->value['support_sub_type']))) {?>
                        <?php if ((!in_array("kitsunebi",$_smarty_tpl->tpl_vars['malio_config']->value['index_hidden_import_buttons']))) {?>
                        <a href="##" class="btn btn-icon icon-left btn-primary btn-kitsunebi copy-text btn-lg btn-round" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['kitsunebi'];?>
"><i class="malio-kitsunebi"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('copy-kitsunebi-config-url');?>
</a>
                        <?php }?>
                        <?php }?>

                        <?php if ((!in_array("quantumult",$_smarty_tpl->tpl_vars['malio_config']->value['index_hidden_import_buttons']))) {?>
                          <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['quantumult_mode'] == 'single') {?>
                            <a href="##" id="quan_sub" class="btn btn-icon icon-left btn-primary btn-quantumult btn-lg btn-round copy-config" onclick="importSublink('quantumult')"><i class="malio-quantumult"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('import-quantumult-config');?>
</a>
                          <?php } elseif ($_smarty_tpl->tpl_vars['malio_config']->value['quantumult_mode'] == 'all') {?>
                            <a href="##" id="quan_sub" class="btn btn-icon icon-left btn-primary btn-quantumult btn-lg btn-round copy-config" onclick="Copyconfig(&quot;<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['quantumult_sub'];?>
&quot;,&quot;#quan_sub&quot;,&quot;quantumult://settings?configuration=clipboard&quot;)"><i class="malio-quantumult"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('import-quantumult-config');?>
</a>
                          <?php }?>
                        <?php }?>

                        <?php if ((!in_array("shadowrocket",$_smarty_tpl->tpl_vars['malio_config']->value['index_hidden_import_buttons']))) {?>
                          <a href="##" class="btn btn-icon icon-left btn-primary btn-shadowrocket btn-lg btn-round" onclick="importSublink('shadowrocket')"><i class="malio-shadowrocket"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('import-shadowrocket-config');?>
</a>
                        <?php }?>

                        <?php if ((in_array("ss",$_smarty_tpl->tpl_vars['malio_config']->value['support_sub_type']))) {?>
                        <?php if ((!in_array("surge",$_smarty_tpl->tpl_vars['malio_config']->value['index_hidden_import_buttons']))) {?>
                          <div class="dropdown d-inline">
                            <button class="btn btn-primary btn-surge dropdown-toggle btn-icon btn-round btn-lg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="malio-surge mr-1"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('import-surge-config');?>

                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                              <a class="dropdown-item" href="##" onclick="importSublink('surge2')"> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('import-surge-version-config',array('2'));?>
</a>
                              <a class="dropdown-item copy-text" href="##" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['surge'];?>
"> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('copy-surge-version-config-url',array('2'));?>
</a>
                              <a class="dropdown-item" href="##" onclick="importSublink('surge3')"> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('import-surge-version-config',array('3'));?>
</a>
                              <a class="dropdown-item copy-text" href="##" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['surge3'];?>
"> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('copy-surge-version-config-url',array('3'));?>
</a>
                              <a class="dropdown-item" href="##" onclick="importSublink('surge4')"> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('import-surge-version-config',array('4'));?>
</a>
                              <a class="dropdown-item copy-text" href="##" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['surge4'];?>
"> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('copy-surge-version-config-url',array('4'));?>
</a>
                            </div>
                          </div>
                        <?php }?>

                        <?php if ((!in_array("surfboard",$_smarty_tpl->tpl_vars['malio_config']->value['index_hidden_import_buttons']))) {?>
                          <a href="##" class="btn btn-icon icon-left btn-primary btn-surfboard btn-lg btn-round" onclick="importSublink('surfboard')"><i class="malio-surfboard"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('import-surfboard-config');?>
</a>
                        <?php }?>
                        
                        <?php if ((!in_array("ss",$_smarty_tpl->tpl_vars['malio_config']->value['index_hidden_import_buttons']))) {?>
                          <a href="##" class="btn btn-icon icon-left btn-primary btn-ss copy-text btn-lg btn-round" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['ss'];
if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_sub_extend'] == true) {?>&extend=1<?php }?>"><i class="malio-ssr"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('copy-ss-config-url');?>
</a>
                        <?php }?>
                       <a href="##" class="btn btn-icon icon-left btn-primary btn-quantumult copy-text btn-lg btn-round" data-clipboard-text="https://dove.589669.xyz/profiles?type=QuanX&sub=<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['v2ray'];
if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_sub_extend'] == true) {?>&extend=1<?php }?>&emoji=0&sort=0"><i class="malio-quantumult"></i> 复制Quantumultx订阅</a> <?php }?>

                        <?php if ((in_array("v2ray",$_smarty_tpl->tpl_vars['malio_config']->value['support_sub_type']))) {?>
                        <?php if ((!in_array("v2ray",$_smarty_tpl->tpl_vars['malio_config']->value['index_hidden_import_buttons']))) {?>
                          <a href="##" class="btn btn-icon icon-left btn-primary btn-v2ray copy-text btn-lg btn-round" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['v2ray'];
if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_sub_extend'] == true) {?>&extend=1<?php }?>"><i class="malio-v2rayng"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('copy-v2ray-config-url');?>
</a>
                        <?php }?>
                        <?php }?>
                        
                        <?php if ((!in_array("ssd",$_smarty_tpl->tpl_vars['malio_config']->value['index_hidden_import_buttons']))) {?>
                        <a href="##" class="btn btn-icon icon-left btn-primary btn-quantumult copy-text btn-lg btn-round" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['ssd'];?>
"><i class="malio-ssr"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('copy-ssd-config-url');?>
</a>
                        <?php }?>
                        
                        <?php if ((in_array("ssr",$_smarty_tpl->tpl_vars['malio_config']->value['support_sub_type']))) {?>
                        <?php if ((!in_array("ssr",$_smarty_tpl->tpl_vars['malio_config']->value['index_hidden_import_buttons']))) {?>
                        <div class="dropdown d-inline">
                          <button class="btn btn-primary btn-ssr dropdown-toggle btn-icon btn-round btn-lg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="malio-ssr mr-1"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('ssr-config');?>

                          </button>
                          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item" href="##" onclick="importSublink('ssr')"> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('import-ssr-config');?>
</a>
                            <a class="dropdown-item copy-text" href="##" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value['ssr'];
if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_sub_extend'] == true) {?>&extend=1<?php }?>"> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('copy-ssr-config-url');?>
</a>
                          </div>
                        </div>
                        <?php }?>
                        <?php }?>
                        
                        
                        <?php if ((!in_array("copy-ss",$_smarty_tpl->tpl_vars['malio_config']->value['index_hidden_import_buttons']))) {?>
                        <a href="##" id="ss-all-urls" class="btn btn-icon icon-left btn-primary btn-ss copy-config btn-lg btn-round" onclick="Copyconfig('/user/getUserAllURL?type=ss','#ss-all-urls','')"><i class="malio-ssr"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('copy-ss-urls');?>
</a>
                        <?php }?>
                        
                        <?php if ((!in_array("copy-ssr",$_smarty_tpl->tpl_vars['malio_config']->value['index_hidden_import_buttons']))) {?>
                        <a href="##" id="ssr-all-urls" class="btn btn-icon icon-left btn-primary btn-ssr copy-config btn-lg btn-round" onclick="Copyconfig('/user/getUserAllURL?type=ssr','#ssr-all-urls','')"><i class="malio-ssr"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('copy-ssr-urls');?>
</a>
                        <?php }?>
                      
                        <?php if ((!in_array("copy-vmess",$_smarty_tpl->tpl_vars['malio_config']->value['index_hidden_import_buttons']))) {?>
                        <a href="##" id="v2ray-all-urls" class="btn btn-icon icon-left btn-primary btn-v2ray copy-config btn-lg btn-round" onclick="Copyconfig('/user/getUserAllURL?type=v2ray','#v2ray-all-urls','')"><i class="malio-v2rayng"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('copy-vmess-urls');?>
</a>
                        <?php }?>
                      </div>
                    </div>
                  </div>
                  <?php }?>

                </div>
              </div>
        </section>
      </div>
      <?php } else { ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h3 class="animated tada mt-5 text-center" style="color:#191d21">👋 Hi, <?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
</h3>
                  <h5 class="mb-5 mt-2 text-center" style="color:#191d21d5"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('new-user-guide-lead');?>
</h5>
                  <div class="row mt-4">
                    <div class="col-12 col-lg-8 offset-lg-2">
                      <div class="wizard-steps">
                        <div class="wizard-step wizard-step-active" onclick="location='/user/shop'">
                          <div class="wizard-step-icon">
                            <i class="fas fa-shopping-cart"></i>
                          </div>
                          <div class="wizard-step-label">
                            <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('new-user-guide-setp-1');?>

                          </div>
                        </div>
                        <div class="wizard-step wizard-step-active" onclick="location='/user/tutorial'">
                          <div class="wizard-step-icon">
                            <i class="fas fa-download"></i>
                          </div>
                          <div class="wizard-step-label">
                            <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('new-user-guide-setp-2');?>

                          </div>
                        </div>
                        <div class="wizard-step wizard-step-success">
                          <div class="wizard-step-icon">
                            <i class="fas fa-grin-squint"></i>
                          </div>
                          <div class="wizard-step-label">
                            <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('new-user-guide-setp-3');?>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php }?>
      <?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_index_popup_ann'] == true) {?>
  <div class="modal fade" tabindex="-1" role="dialog" id="popup-ann-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('important-announcement');?>
</h5>
        </div>
        <div class="modal-body">
          <p><?php echo $_smarty_tpl->tpl_vars['malio_config']->value['index_popup_ann_content'];?>
</p>
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('read');?>
</button>
        </div>
      </div>
    </div>
  </div>
  <?php }?>

  <?php $_smarty_tpl->_subTemplateRender('file:user/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <!-- Counter Up  -->
  <?php echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/waypoints@4.0.0/lib/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/theme/malio/js/jquery.counterup.min.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/bowser@1.9.4/bowser.min.js"><?php echo '</script'; ?>
>

  <!-- C3 Chart -->
  <?php echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/d3@3.5.0/d3.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/c3@0.4.10/c3.min.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
>
    trafficDountChat(
      '<?php echo $_smarty_tpl->tpl_vars['user']->value->LastusedTraffic();?>
',
      '<?php echo $_smarty_tpl->tpl_vars['user']->value->TodayusedTraffic();?>
',
      '<?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTraffic();?>
',
      '<?php echo number_format($_smarty_tpl->tpl_vars['user']->value->last_day_t/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100,2);?>
',
      '<?php echo number_format(($_smarty_tpl->tpl_vars['user']->value->u+$_smarty_tpl->tpl_vars['user']->value->d-$_smarty_tpl->tpl_vars['user']->value->last_day_t)/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100,2);?>
',
      '<?php echo number_format(($_smarty_tpl->tpl_vars['user']->value->transfer_enable-($_smarty_tpl->tpl_vars['user']->value->u+$_smarty_tpl->tpl_vars['user']->value->d))/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100,2);?>
'
    )

    $('.counter').counterUp({
      delay: 10,
      time: 1000
    });

    function importSublink(client) {
      if (client == 'quantumult') {
        oneclickImport('quantumult', '<?php if ($_smarty_tpl->tpl_vars['malio_config']->value["quantumult_sub_type"] == "v2ray") {
echo $_smarty_tpl->tpl_vars['subInfo']->value["quantumult_v2"];
} elseif ($_smarty_tpl->tpl_vars['malio_config']->value["quantumult_sub_type"] == "ss") {
echo $_smarty_tpl->tpl_vars['subInfo']->value["ss"];
} elseif ($_smarty_tpl->tpl_vars['malio_config']->value["quantumult_sub_type"] == "ssr") {
echo $_smarty_tpl->tpl_vars['subInfo']->value["ssr"];
}?>');
      }
      if (client == 'shadowrocket') {
        oneclickImport('shadowrocket','<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["shadowrocket"];?>
')
      };
      if (client == 'surfboard') {
        oneclickImport('surfboard','<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surfboard"];?>
')
      };
      if (client == 'surge2') {
        oneclickImport('surge','<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surge2"];?>
')
      };
      if (client == 'surge3') {
        oneclickImport('surge3','<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surge3"];?>
')
      };
      if (client == 'surge4') {
        oneclickImport('surge3','<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surge4"];?>
')
      };
      if (client == 'clash') {
        oneclickImport('clash','<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["clash"];?>
')
      };
      if (client == 'ssr') {
        oneclickImport('ssr','<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["ssr"];?>
')
      }
    }

    appName = "<?php echo $_smarty_tpl->tpl_vars['config']->value['appName'];?>
";

    setTimeout(loadTrafficChart(), 3000);
  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
>
    function Copyconfig(url, id, jumpurl = "") {
      $.ajax({
        url: url,
        type: 'GET',
        async: false,
        success: function (res) {
          if (res) {
            $("#result").modal();
            $("#msg").html("获取成功");
            $(id).data('data', res);
            console.log(res);
          } else {
            $("#result").modal();
            $("#msg").html("获取失败，请稍后再试");
          }
        }
      });
      const clipboard = new ClipboardJS('.copy-config', {
        text: function () {
          return $(id).data('data');
        }
      });
      clipboard.on('success', function (e) {
        var title = '已复制到您的剪贴板';
        if (jumpurl != '') {
          title = '复制成功，即将跳转到 APP';
        }
        swal({
          type: 'success',
          title: title,
          showConfirmButton: false,
          timer: 1500,
          onClose: () => {
            if (jumpurl != "") {
              window.setTimeout(function () {
                window.location.href = jumpurl;
              }, 1000);
            }
          }
        })
      });
      clipboard.on("error", function (e) {
        console.error('Action:', e.action);
        console.error('Trigger:', e.trigger);
        console.error('Text:', e.text);
      });
    }
  <?php echo '</script'; ?>
>

  <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_index_popup_ann'] == true) {?>
  <?php echo '<script'; ?>
>
  <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_index_popup_ann_time'] == true) {?>
      function setCookie(name, value) {
          var exp = new Date();
          exp.setTime(exp.getTime() + 1 * 60 * 1000*60*24);
          document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString() + ";path=/";
          }
  
      function ReadCookie(name) {
          var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
          if (arr = document.cookie.match(reg)) return unescape(arr[2]);
          else return null;
          }
          if (ReadCookie("cnxad_lunbo") == "" || ReadCookie("cnxad_lunbo") == null) {
              $('#popup-ann-modal').modal('show');
              setCookie("cnxad_lunbo", "yes");
              }
  <?php } else { ?>
      $('#popup-ann-modal').modal('show');
  <?php }?>
  <?php echo '</script'; ?>
>
  <?php }?>
</body>

</html>
<?php }
}
