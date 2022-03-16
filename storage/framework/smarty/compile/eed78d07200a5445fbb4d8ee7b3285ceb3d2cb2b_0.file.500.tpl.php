<?php
/* Smarty version 3.1.36, created on 2022-03-16 17:49:17
  from 'D:\phpstudy_pro\WWW\cafe.com\resources\views\malio\500.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6231b29dc16d49_27498272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eed78d07200a5445fbb4d8ee7b3285ceb3d2cb2b' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\cafe.com\\resources\\views\\malio\\500.tpl',
      1 => 1644090826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b29dc16d49_27498272 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>500 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://fastly.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fastly.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.8.2/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="/theme/malio/assets/css/style.css">
  <link rel="stylesheet" href="/theme/malio/assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="page-error">
          <div class="page-inner">
            <h1>500</h1>
            <div class="page-description">
              Whoopps, something went wrong.
            </div>
            <div class="page-search">
              <div class="mt-3">
                <a href="/">返回主页</a>
              </div>
            </div>
          </div>
        </div>
        <div class="simple-footer">
          Copyright &copy; 2022 <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>

          <div class="mt-2" id="copyright"></div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
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
  <?php echo '<script'; ?>
 src="/theme/malio/assets/js/stisla.js"><?php echo '</script'; ?>
>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <?php echo '<script'; ?>
 src="/theme/malio/assets/js/scripts.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
>
    var code = "UG93ZXJlZCBieSA8YSBocmVmPSIvc3RhZmYiPlNTUEFORUw8L2E+IDxkaXYgY2xhc3M9ImJ1bGxldCI+PC9kaXY+VGhlbWUgYnkgPGEgaHJlZj0iaHR0cHM6Ly90Lm1lL2VkaXRYWSIgdGFyZ2V0PSJibGFuayI+ZWRpdFhZPC9hPg==";
    $('#copyright').html(atob(code));
  <?php echo '</script'; ?>
>

  <!-- Page Specific JS File -->
</body>

</html>
<?php }
}
