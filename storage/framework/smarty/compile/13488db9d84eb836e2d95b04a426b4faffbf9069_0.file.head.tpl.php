<?php
/* Smarty version 3.1.36, created on 2022-03-16 17:52:36
  from 'D:\phpstudy_pro\WWW\cafe.com\resources\views\malio\user\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6231b364b91371_20258213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13488db9d84eb836e2d95b04a426b4faffbf9069' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\cafe.com\\resources\\views\\malio\\user\\head.tpl',
      1 => 1642774451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:crisp.tpl' => 1,
    'file:chatra.tpl' => 1,
  ),
),false)) {
function content_6231b364b91371_20258213 (Smarty_Internal_Template $_smarty_tpl) {
?><meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

<!-- General CSS Files -->
<link rel="stylesheet" href="https://fastly.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fastly.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.8.2/css/all.min.css">

<!-- Template CSS -->
<link rel="stylesheet" href="/theme/malio/css/style-<?php echo $_smarty_tpl->tpl_vars['malio_config']->value['theme_color'];?>
.css">
<link rel="stylesheet" href="/theme/malio/assets/css/components.css">

<!-- Custom CSS -->
<link rel="stylesheet" href="/theme/malio/css/malio.css">

<?php if ($_smarty_tpl->tpl_vars['malio_config']->value['google_analytics_code'] != '') {?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $_smarty_tpl->tpl_vars['malio_config']->value['google_analytics_code'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  window.dataLayer = window.dataLayer || [];
  function gtag() {dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?php echo $_smarty_tpl->tpl_vars['malio_config']->value['google_analytics_code'];?>
');
<?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['config']->value["sspanelAnalysis"] == 'true') {?>
<!-- Google Analytics -->
<?php echo '<script'; ?>
>
    window.ga = window.ga || function () {
        (ga.q = ga.q || []).push(arguments)
    };
    ga.l = +new Date;
    ga('create', 'UA-143778338-1', 'auto');
    var hostDomain = window.location.host || document.location.host || document.domain;
    ga('set', 'dimension1', hostDomain);
    ga('send', 'pageview');
    (function () {
        function perfops() {
            var js = document.createElement('script');
            js.src = 'https://fastly.jsdelivr.net/npm/perfops-rom';
            document.body.appendChild(js);
        }
        if (document.readyState === 'complete') {
            perfops();
        } else {
            window.addEventListener('load', perfops);
        }
    })();
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 async src="https://www.google-analytics.com/analytics.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="/js/fuck.js"><?php echo '</script'; ?>
>
<!-- End Google Analytics -->
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_crisp'] == true) {
$_smarty_tpl->_subTemplateRender('file:crisp.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_chatra'] == true) {
$_smarty_tpl->_subTemplateRender('file:chatra.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
