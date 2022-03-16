<?php
/* Smarty version 3.1.36, created on 2022-03-16 17:56:48
  from 'D:\phpstudy_pro\WWW\cafe.com\resources\views\malio\table\js_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6231b4602a01c1_18903801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74a6b220229426e56d6eb7e47958f611ad0b9159' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\cafe.com\\resources\\views\\malio\\table\\js_1.tpl',
      1 => 1589811246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b4602a01c1_18903801 (Smarty_Internal_Template $_smarty_tpl) {
?>function modify_table_visible(id, key) {
if(document.getElementById(id).checked)
{
table_1.columns( '.' + key ).visible( true );
localStorage.setItem(window.location.href + '-haschecked-' + id, true);
}
else
{
table_1.columns( '.' + key ).visible( false );
localStorage.setItem(window.location.href + '-haschecked-' + id, false);
}
}
<?php }
}
