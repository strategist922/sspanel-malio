<?php
/* Smarty version 3.1.36, created on 2022-03-16 17:52:36
  from 'D:\phpstudy_pro\WWW\cafe.com\resources\views\malio\user\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6231b364bba578_11269993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd27ddbc7ea485db06ed87da666fad3d3408f3a6d' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\cafe.com\\resources\\views\\malio\\user\\navbar.tpl',
      1 => 1646206493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b364bba578_11269993 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg hide"><i class="fas fa-bars"></i></a></li>
    </ul>
  </form>
  <ul class="navbar-nav navbar-right">
 <li class="dropdown"></i>
    </li>
  
<?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_i18n'] == true) {?>
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg nav-link-user"><i class="fas fa-language" style="vertical-align: -2px; padding-right: 2px;"></i> <?php if ($_smarty_tpl->tpl_vars['i18n']->value->lang == 'en') {?>English<?php } else { ?>简体中文<?php }?></a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="##" class="dropdown-item has-icon" onclick="changeLang('en')">
          🇬🇧 English
        </a>
        <a href="##" class="dropdown-item has-icon" onclick="changeLang('zh-cn')">
          🇨🇳 简体中文
        </a>
      </div>
    </li>
    <?php } else { ?>
    <li class="dropdown dropdown-list-toggle"></li>
    <?php }?>
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="<?php echo $_smarty_tpl->tpl_vars['user']->value->gravatar;?>
?d=retro" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
</div>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="/user/profile" class="dropdown-item has-icon">
          <i class="fas fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('my-account');?>

        </a>
        <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_wallet'] == true) {?>
        <a href="/user/code" class="dropdown-item has-icon">
          <i class="fas fa-wallet"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('wallet');?>

        </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_invite'] == true && $_smarty_tpl->tpl_vars['user']->value->class >= 0) {?>
        <a href="/user/invite" class="dropdown-item has-icon">
          <i class="fas fa-laugh-squint"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('aff');?>

        </a>
        <?php }?>
        <div class="dropdown-divider"></div>
        <a href="/user/logout" class="dropdown-item has-icon text-danger">
          <i class="fas fa-sign-out-alt"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('logout');?>

        </a>
      </div>
    </li>
  </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="/"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["appName"][$_smarty_tpl->tpl_vars['i18n']->value->lang];?>
</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="/"><?php echo $_smarty_tpl->tpl_vars['malio_config']->value["small_brand"];?>
</a>
    </div>
   <?php if ($_smarty_tpl->tpl_vars['can_backtoadmin']->value) {?>
    <div class="mb-4 mt-4 p-3 hide-sidebar-mini">
      <a href="/user/backtoadmin" class="btn btn-warning btn-lg btn-block btn-icon-split">
          <i class="fas fa-tachometer-alt"></i>返回管理员身份
      </a>
    </div>
    <?php }?>

 
   <?php if ($_smarty_tpl->tpl_vars['user']->value->isAdmin()) {?>
    <div class="mb-4 <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_sidebar_button'] != true) {?>mt-4<?php }?> p-3 hide-sidebar-mini">
        <a href="/admin" class="btn btn-warning btn-lg btn-block btn-icon-split">
            <i class="fas fa-tachometer-alt"></i>管理面板
        </a>
    </div>
    <?php }?>
 
    <ul class="sidebar-menu">
        <li><a class="nav-link" href="/user"><i class="fab fa-fort-awesome"></i> <span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('dashboard');?>
</span></a></li>
  <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_wallet'] == true) {?>
      <li><a class="nav-link" href="/user/code"><i class="fas fa-wallet"></i> <span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('wallet');?>
</span></a></li>
      <?php }?>
           
<li><a class="nav-link" href="/user/shop"><i class="fas fa-store"></i> <span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('store');?>
</span></a></li>
      <li><a class="nav-link" href="/user/tutorial"><i class="fas fa-book"></i> <span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('apps-and-tutorial');?>
</span></a></li>
      <li class="menu-header"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('my');?>
</li>
     <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_invite'] == true && $_smarty_tpl->tpl_vars['user']->value->class >= 0) {?>
      <li><a class="nav-link" href="/user/invite"><i class="fas fas fa-fire" style="color:red;"></i> <span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('aff');?>
</span></a></li>
      <?php }?>  
      <li><a class="nav-link" href="/user/profile"><i class="fas fa-user"></i> <span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('my-account');?>
</span></a></li>
      <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_wallet'] == true) {?>
      <li><a class="nav-link" href="/user/edit"><i class="fas fa-cog"></i> <span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('server-settings');?>
</span></a></li>
      <?php }?>
      
      <li class="menu-header"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('usage');?>
</li>
      <li><a class="nav-link" href="/user/node"><i class="fas fa-server"></i> <span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('servers');?>
</span></a></li>
     <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_user_sub_log'] == true && $_smarty_tpl->tpl_vars['user']->value->class >= 0) {?>
      <li><a class="nav-link" href="/user/subscribe_log"><i class="fas fa-stream"></i> <span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('config-history');?>
</span></a></li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_share_account_page'] == true && $_smarty_tpl->tpl_vars['user']->value->class >= 0) {?>
      <li><a class="nav-link" href="/user/share-account"><i class="fas fa-share"></i> <span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('shared-account');?>
</span></a></li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_ticket'] == true) {?>
      <li class="dropdown">
          <a href="#ticket" class="nav-link has-dropdown"><i class="fas fa-headset"></i> <span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('ticket-support');?>
</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="/user/ticket/create"><span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('new-ticket');?>
</span></a></li>
            <li><a class="nav-link" href="/user/ticket"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('my-tickets');?>
</a></li>
          </ul>
        </li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['user']->value->class >= 5) {?>
      <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_relay'] == true) {?>
      <li class="dropdown">
        <a href="#node-settings" class="nav-link has-dropdown"><i class="fas fa-cog"></i><span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('server-settings');?>
</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="/user/relay"><span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('relay-settings');?>
</span></a></li>
          <li><a class="nav-link" href="/user/edit"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('server-settings');?>
</a></li>
        </ul>
      </li>
      <?php } else { ?>
      <li><a class="nav-link" href="/user/edit"><i class="fas fa-cog"></i> <span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('server-settings');?>
</span></a></li>
      <?php }?>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_detect'] == true && $_smarty_tpl->tpl_vars['user']->value->class >= 0) {?>
      <li class="dropdown">
        <a href="#detect" class="nav-link has-dropdown"><i class="fas fa-balance-scale"></i><span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('audit-system');?>
</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="/user/detect"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('audit-rules');?>
</a></li>
          <li><a class="nav-link" href="/user/detect/log"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('audit-logs');?>
</a></li>
        </ul>
      </li>
      <?php }?>
      
      
      
      <li><a class="nav-link" href="/user/tutorial?os=faq"><i class="fas fa-laptop-code"></i> <span><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('faq-desc');?>
</span></a></li>
      
      
      
    </ul>
 <div class="mt-4 <?php if (!$_smarty_tpl->tpl_vars['user']->value->isAdmin()) {?>mb-4<?php }?> p-3 hide-sidebar-mini">
        <a href="https://t.me/cafecat_bot" target ='_block' class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fab fa-telegram-plane"></i> 加入頻道
        </a>

    <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_sidebar_button'] == true && $_smarty_tpl->tpl_vars['user']->value->class >= $_smarty_tpl->tpl_vars['malio_config']->value['telegram_group_class']) {?>
        <a href="##" onclick="joinTelegramGroup()" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fab fa-telegram-plane"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('join-telegram-group');?>

        </a>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['can_backtoadmin']->value) {?>
    <div class="mb-4 mt-4 p-3 hide-sidebar-mini">
      <a href="/user/backtoadmin" class="btn btn-warning btn-lg btn-block btn-icon-split">
          <i class="fas fa-tachometer-alt"></i>返回管理员身份
      </a>
    </div>
    <?php }?>


   <?php if ($_smarty_tpl->tpl_vars['user']->value->isAdmin()) {?>
    <div class="mb-4 <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_sidebar_button'] != true) {?>mt-4<?php }?> p-3 hide-sidebar-mini">
        <a href="/admin" class="btn btn-warning btn-lg btn-block btn-icon-split">
            <i class="fas fa-tachometer-alt"></i>管理面板
        </a>
    </div>
    <?php }?>
  </aside>
</div>
<?php }
}
