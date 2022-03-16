<?php
/* Smarty version 3.1.36, created on 2022-03-16 17:52:36
  from 'D:\phpstudy_pro\WWW\cafe.com\resources\views\malio\user\scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6231b364bfd0d7_47106283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19d90ff9dac19b8e89bdcefe2d22ab212d24db15' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\cafe.com\\resources\\views\\malio\\user\\scripts.tpl',
      1 => 1642774451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b364bfd0d7_47106283 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- General JS Scripts -->
<?php echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/tooltip.js@1.3.2/dist/umd/tooltip.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/jquery.nicescroll@3.7.6/jquery.nicescroll.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/moment@2.18.1/min/moment.min.js"><?php echo '</script'; ?>
>

<!-- JS Libraies -->
<?php echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/sweetalert2@7.25.6/dist/sweetalert2.all.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/bowser@1.9.4/bowser.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
  const i18n = {
    'lang': "<?php echo $_smarty_tpl->tpl_vars['user']->value->lang;?>
",
    'used': "<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('data-used');?>
 ",
    'used-today': "<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('data-used-today');?>
 ",
    'available': "<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('data-available');?>
 ",
    'alredy-got-daily-bonus': "<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('alredy-got-daily-bonus');?>
",
    'success-got-daily-bonus': "<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('success-got-daily-bonus');?>
",
    "server-password-changed-successfully":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('server-password-changed-successfully');?>
",
    "encryption-changed-successfully":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('encryption-changed-successfully');?>
",
    "failed":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('failed');?>
",
    "protocol-and-obfs-changed-successfully":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('protocol-and-obfs-changed-successfully');?>
",
    "confirm":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('confirm');?>
",
    "cancel":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('cancel');?>
",
    "reset-config-url-confirm-modal-title":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('reset-config-url-confirm-modal-title');?>
",
    "reset-config-url-confirm-modal-desc":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('reset-config-url-confirm-modal-desc');?>
",
    "config-url-has-been-reseted":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('config-url-has-been-reseted');?>
",
    "config-url-reset-modal-desc":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('config-url-reset-modal-desc');?>
",
    "port-reseted-successfully":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('port-reseted-successfully');?>
",
    "new-port":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('new-port');?>
",
    "customize-port-successfully":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('customize-port-successfully');?>
",
    "successful-purchase":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('successful-purchase');?>
",
    "go-to-wallet":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('go-to-wallet');?>
",
    "customize-inivitation-link-successfully":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('customize-inivitation-link-successfully');?>
",
    "2fa-has-been-disabled":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('2fa-has-been-disabled');?>
",
    "password-changed-successfully":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('password-changed-successfully');?>
",
    "your-account-has-been-deleted":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('your-account-has-been-deleted');?>
",
    "submitted":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('submitted');?>
",
    "this-ticket-has-been-closed":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('this-ticket-has-been-closed');?>
",
    "notice":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('notice');?>
",
    "unable-import-config-on-computer-modal":'<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get("unable-import-config-on-computer-modal");?>
',
    "proceed":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('proceed');?>
",
    "top-up-successful":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('top-up-successful');?>
",
    "":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login');?>
",
    "":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login');?>
",
    "":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login');?>
",
    "":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login');?>
",
    "":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login');?>
",
    "":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login');?>
",
    "":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login');?>
",
    "":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login');?>
",
    "":"<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login');?>
",
  }
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="/theme/malio/js/malio.js?<?php echo $_smarty_tpl->tpl_vars['malio_config']->value['malio_js_version'];?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
  var isWeixin = function () {
    var ua = navigator.userAgent.toLowerCase();
    return ua.match(/MicroMessenger/i) == "micromessenger";
  };
  if (isWeixin() == true) {
    $('body').html('<h5 style="margin:20px">不支持在微信内访问<br>请点击右上角菜单<br>选择浏览器打开</h5>')
  }
  
  $(function () {
    new ClipboardJS('.copy-text');
  });
  $(".copy-text").click(function () {
    swal({
      type: 'success',
      title: "<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('copied');?>
",
      showConfirmButton: false,
      timer: 1500
    })
  });

  function joinTelegramGroup() {
    <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['force_user_to_bind_tg_when_join_group'] == true && $_smarty_tpl->tpl_vars['user']->value->telegram_id == 0) {?>
    Swal.fire({
      title: "<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('notice');?>
",
      html: '<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get("join-telegram-group-modal-text");?>
',
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: "<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('join-telegram-group');?>
",
      cancelButtonText: "<?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('cancel');?>
"
    }).then((result) => {
      if (result.value) {
        window.open("<?php echo $_smarty_tpl->tpl_vars['malio_config']->value['telegram_group'];?>
")
      }
    })
    <?php } else { ?>
    window.open("<?php echo $_smarty_tpl->tpl_vars['malio_config']->value['telegram_group'];?>
")
    <?php }?>
  }
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_crisp'] == true) {
echo '<script'; ?>
>
  function sendData() {
    $crisp.push(["set", "user:email", "<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
"], ["set", "user:nickname", "<?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
"]);
    $crisp.push(["set", "session:data", [[
      ["Class", "<?php echo $_smarty_tpl->tpl_vars['user']->value->class;?>
"],
      ["Class_Expire", "<?php echo $_smarty_tpl->tpl_vars['user']->value->class_expire;?>
"],
      ["Money", "<?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
"],
      ["Unused_Traffic", "<?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTraffic();?>
"]
    ]]]);
  }
  sendData();
<?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_chatra'] == true) {
echo '<script'; ?>
>
  window.ChatraIntegration = {
    name: '<?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
',
    email: '<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
',
    'Class': '<?php echo $_smarty_tpl->tpl_vars['user']->value->class;?>
',
    'Class_Expire': '<?php echo $_smarty_tpl->tpl_vars['user']->value->class_expire;?>
',
    'Money': '<?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
',
    'Unused_Traffic': '<?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTraffic();?>
'
  };
  var userUUID = '<?php echo $_smarty_tpl->tpl_vars['user']->value->uuid;?>
';
<?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
>
  var code = "UG93ZXJlZCBieSA8YSBocmVmPSIvc3RhZmYiPlNTUEFORUw8L2E+IDxkaXYgY2xhc3M9ImJ1bGxldCI+PC9kaXY+IFRoZW1lIGJ5IDxhIGhyZWY9Imh0dHBzOi8vdC5tZS9lZGl0WFkiIHRhcmdldD0iYmxhbmsiPmVkaXRYWTwvYT4=";
  $('#copyright').html(atob(code));
<?php echo '</script'; ?>
><?php }
}
