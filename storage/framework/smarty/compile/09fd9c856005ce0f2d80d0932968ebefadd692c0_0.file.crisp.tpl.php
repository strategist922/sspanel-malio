<?php
/* Smarty version 3.1.36, created on 2022-03-16 17:50:05
  from 'D:\phpstudy_pro\WWW\cafe.com\resources\views\malio\crisp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6231b2cd7ce3d5_25979634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09fd9c856005ce0f2d80d0932968ebefadd692c0' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\cafe.com\\resources\\views\\malio\\crisp.tpl',
      1 => 1589811246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b2cd7ce3d5_25979634 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Crisp Chat  -->
<?php echo '<script'; ?>
 type="text/javascript">
window.$crisp = [];
window.CRISP_WEBSITE_ID = "<?php echo $_smarty_tpl->tpl_vars['malio_config']->value['crisp_wesite_id'];?>
";
CRISP_TOKEN_ID = '<?php echo $_smarty_tpl->tpl_vars['user']->value->uuid;?>
';
(function () {
    d = document;
    s = d.createElement("script");
    s.src = "https://client.crisp.chat/l.js";
    s.async = 1;
    d.getElementsByTagName("head")[0].appendChild(s);
})();
<?php echo '</script'; ?>
><?php }
}
