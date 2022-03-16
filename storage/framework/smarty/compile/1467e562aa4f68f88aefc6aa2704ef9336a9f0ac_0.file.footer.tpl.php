<?php
/* Smarty version 3.1.36, created on 2022-03-16 17:56:44
  from 'D:\phpstudy_pro\WWW\cafe.com\resources\views\malio\admin\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6231b45c7bf8b5_15386998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1467e562aa4f68f88aefc6aa2704ef9336a9f0ac' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\cafe.com\\resources\\views\\malio\\admin\\footer.tpl',
      1 => 1642774451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:analytics.tpl' => 1,
  ),
),false)) {
function content_6231b45c7bf8b5_15386998 (Smarty_Internal_Template $_smarty_tpl) {
?><footer class="ui-footer">
    <div class="container">
        &copy;<?php echo date("Y");?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 | Powered by <a href="/staff">SSPANEL</a>
        <?php if ($_smarty_tpl->tpl_vars['config']->value["enable_analytics_code"] === true) {
$_smarty_tpl->_subTemplateRender('file:analytics.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
    </div>
</footer>

<!-- js -->
<?php if ($_smarty_tpl->tpl_vars['config']->value["sspanelAnalysis"] === true) {?>
    <!-- Google Analytics -->
    <?php echo '<script'; ?>
>
        window.ga = window.ga || function () {
            (ga.q = ga.q || []).push(arguments)
        };
        ga.l = +new Date;
        ga('create', 'UA-111801619-3', 'auto');
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
>
    <!-- End Google Analytics -->
<?php }
echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/jquery-validation@1.17.0"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/datatables.net@1.10.19"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//fastly.jsdelivr.net/gh/DataTables/DataTables@1.10.19/media/js/dataTables.material.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/theme/material/js/base.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/theme/material/js/project.min.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
