<?php
/* Smarty version 3.1.36, created on 2022-03-16 17:52:31
  from 'D:\phpstudy_pro\WWW\cafe.com\resources\views\malio\auth\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6231b35f3a9002_35521188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1af6ce64d8708e94b3c71f0b96e845dcf687dc84' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\cafe.com\\resources\\views\\malio\\auth\\login.tpl',
      1 => 1644090826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:crisp.tpl' => 1,
    'file:chatra.tpl' => 1,
  ),
),false)) {
function content_6231b35f3a9002_35521188 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login');?>
 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://fastly.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fastly.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.8.2/css/all.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="/theme/malio/assets/css/style.css">
  <link rel="stylesheet" href="/theme/malio/assets/css/components.css">

  <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_crisp'] == true && $_smarty_tpl->tpl_vars['malio_config']->value['enable_crisp_outside'] == true) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:crisp.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_chatra'] == true && $_smarty_tpl->tpl_vars['malio_config']->value['enable_crisp_outside'] == true) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:chatra.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
</head>

<body>
  <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['login_style'] == 'simple') {?>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="/theme/malio/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h4><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login');?>
</h4>
              </div>
              <form action="javascript:void(0);" method="POST" class="needs-validation" novalidate="">

                <div class="card-body">
                  <div class="form-group login-form-item">
                    <label for="email"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('email');?>
</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('please-fill-in-your-email');?>

                    </div>
                  </div>

                  <div class="form-group login-form-item">
                    <div class="d-block">
                      <label for="password" class="control-label"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('password');?>
</label>
                      <div class="float-right">
                        <a href="/password/reset" class="text-small">
                          <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('forgot-password-question-mark');?>

                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('please-fill-in-your-password');?>

                    </div>
                  </div>

                  <div id="2fa-form" class="form-group" style="display: none;">
                    <label for="2fa-code">二步验证</label>
                    <input id="2fa-code" type="number" class="form-control" name="2fa-code" tabindex="1" maxlength="6" placeholder="请输入6位验证码" required>
                    <div class="invalid-feedback">
                      请输入验证码
                    </div>
                  </div>

                  <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
                  <div class="form-group">
                    <div class="embed-captcha"></div>
                  </div>
                  <?php }?>

                  <?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
                      <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['recaptcha_sitekey']->value;?>
"></div>
                      </div>
                  <?php }?>

                  <div class="form-group login-form-item">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('remember-me');?>
</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block login" tabindex="4">
                      <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login');?>

                    </button>
                  </div>
              </form>
              <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_telegram'] == true) {?>
              <div class="text-center mt-4 mb-3 login-form-item">
                <div class="text-job text-muted"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('or');?>
</div>
              </div>
              <div class="form-group login-form-item">
                <button data-toggle="modal" id="telegram-login-button" data-target="#telegram-modal" class="btn btn-info btn-lg btn-block" tabindex="4" style="box-shadow:none;">
                  <i class="fab fa-telegram-plane"></i> <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login-with-telegram');?>

                </button>
              </div>
              <?php }?>

            </div>
          </div>
          <div class="mt-5 text-muted text-center login-form-item">
            <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('dont-have-an-account-question-mark');?>

          </div>
          <div class="simple-footer">
            2022 &copy; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
  <br>Powered by <a href="/staff">SSPANEL</a>
            
          </div>
        </div>
      </div>
  </div>
  </section>
  </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['login_style'] == 'wallpaper') {?>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="/theme/malio/assets/img/stisla-fill.svg" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
            <h4 class="text-dark font-weight-normal"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login_welcome');?>
</h4>
            <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login_slogan');?>
</p>

            <form action="javascript:void(0);" method="POST" class="needs-validation" novalidate="">
              <div class="login-form-item">
                <div class="form-group">
                  <label for="email"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('email');?>
</label>
                  <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                  <div class="invalid-feedback">
                    <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('please-fill-in-your-email');?>

                  </div>
                </div>

                <div class="form-group">
                  <div class="d-block">
                    <label for="password" class="control-label"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('password');?>
</label>
                    <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_telegram'] == true) {?>
                    <div class="float-right">
                      <a href="/password/reset" class="text-small">
                        <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('forgot-password-question-mark');?>

                      </a>
                    </div>
                    <?php }?>
                  </div>
                  <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                  <div class="invalid-feedback">
                    <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('please-fill-in-your-password');?>

                  </div>
                </div>
              </div>

              <div id="2fa-form" class="form-group" style="display: none;">
                <label for="2fa-code">二步验证</label>
                <input id="2fa-code" type="number" class="form-control" name="2fa-code" tabindex="1" maxlength="6" placeholder="请输入6位验证码" required>
                <div class="invalid-feedback">
                  请输入验证码
                </div>
              </div>

              <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
              <div class="form-group">
                <div class="embed-captcha"></div>
              </div>
              <?php }?>

              <?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
                <div class="form-group">
                  <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['recaptcha_sitekey']->value;?>
"></div>
                </div>
              <?php }?>

              <div class="form-group login-form-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                  <label class="custom-control-label" for="remember-me"><?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('remember-me');?>
</label>
                </div>
              </div>

              <div class="form-group text-right">
                <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_telegram'] == false) {?>
                <a href="/password/reset" class="float-left mt-3 login-form-item">
                  <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('forgot-password-question-mark');?>

                </a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_telegram'] == true) {?>
                <a href="##" id="telegram-login-button" data-toggle="modal" data-target="#telegram-modal" class="float-left mt-3 login-form-item">
                  <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login-with-telegram');?>

                </a>
                <?php }?>
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right login" tabindex="4">
                  <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('login');?>

                </button>
              </div>
            </form>

            <div class="mt-5 text-center login-form-item">
              <?php echo $_smarty_tpl->tpl_vars['i18n']->value->get('dont-have-an-account-question-mark');?>

            </div>

            <div class="text-center mt-5 text-small">
              Copyright &copy; 2022 <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>

            
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="/theme/malio/assets/img/unsplash/login-bg.jpg" style='background-image: url("/theme/malio/assets/img/unsplash/login-bg.jpg");'>
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['welcome']->value;?>
</h1>
                <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
              </div>
              Photo by <a class="text-light" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light" target="_blank" href="https://unsplash.com">Unsplash</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php }?>

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

  <!-- JS Libraies -->
  <?php echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/sweetalert2@7.25.6/dist/sweetalert2.all.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://fastly.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"><?php echo '</script'; ?>
>

  <!-- Page Specific JS File -->
  <?php echo '<script'; ?>
 src="/theme/malio/js/malio.js?<?php echo $_smarty_tpl->tpl_vars['malio_config']->value['malio_js_version'];?>
"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
>
  var code = "UG93ZXJlZCBieSA8YSBocmVmPSIvc3RhZmYiPlNTUEFORUw8L2E+IDxkaXYgY2xhc3M9ImJ1bGxldCI+PC9kaXY+VGhlbWUgYnkgPGEgaHJlZj0iaHR0cHM6Ly90Lm1lL2VkaXRYWSIgdGFyZ2V0PSJibGFuayI+ZWRpdFhZPC9hPg==";
  $('#copyright').html(atob(code));
  <?php echo '</script'; ?>
>

  <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
  <?php echo '<script'; ?>
 src="//static.geetest.com/static/tools/gt.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    captcha = '';
    var handlerEmbed = function (captchaObj) {
      captchaObj.onSuccess(function () {
          validate = captchaObj.getValidate();
      });
      captchaObj.appendTo(".embed-captcha");
      captcha = captchaObj;
    };
    initGeetest({
      gt: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->gt;?>
",
      challenge: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->challenge;?>
",
      product: "embed",
      width: "100%",
      offline: <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value->success) {?>0<?php } else { ?>1<?php }?>
    }, handlerEmbed);
  <?php echo '</script'; ?>
>
  <?php }?>

  <?php echo '<script'; ?>
>
    var twoFA = false;
    function login() {
      if (!$("#password").val() || !$("#email").val()) {
        return false;
      }

      <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
      validate = captcha.getValidate();
      if (typeof validate === 'undefined' || !validate) {
        swal('请验证身份', '请滑动验证码来完成验证。', 'info');
        return;
      }
      <?php }?>

      if (twoFA == true) {
        if (!$("#2fa-code").val()) {
          return false;
        }
      }

      $.ajax({
        type: "POST",
        url: "/auth/login",
        dataType: "json",
        data: {
          email: $("#email").val(),
          passwd: $("#password").val(),
          code: $("#2fa-code").val(),<?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
          recaptcha: grecaptcha.getResponse(),<?php }?>
          remember_me: $("#remember-me:checked").val()<?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>,
          geetest_challenge: validate.geetest_challenge,
          geetest_validate: validate.geetest_validate,
          geetest_seccode: validate.geetest_seccode<?php }?>
        },
        success: function (data) {
          if (data.ret == 1) {
            window.location.assign('/user')
          } else if(data.ret == 2) {
            $('.login-form-item').hide('500');
            $('form').removeClass('was-validated');
            $('#2fa-form').show('fast');
            <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
            captcha.reset();
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
            grecaptcha.reset();
            <?php }?>
          } else {
            <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
            captcha.reset();
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
            grecaptcha.reset();
            <?php }?>
            var errorMsg = '密码或邮箱不正确';
            if (twoFA == true) {
              errorMsg = '两步验证码错误'
            }
            swal('出错了', errorMsg, 'error');
          }
        }
      });
    }
    $("html").keydown(function (event) {
      if (event.keyCode == 13) {
        login();
      }
    });
    $(".login").click(function () {
      login();
    });
  <?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['malio_config']->value['enable_telegram'] == true) {?>
<div class="modal fade" tabindex="-1" role="dialog" id="telegram-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Telegram 一键登录</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center mt-4" id="telegram-login-box"></div>
        <div class="text-center mt-4 mb-3">
          <div class="text-job text-muted">或者添加机器人账号 <a href="https://t.me/<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
">@<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
</a>，发送下面的数字给它</div>
        </div>
        <div class="text-center">
            <h2><code id="code_number" style="color: #6777ef"><?php echo $_smarty_tpl->tpl_vars['login_number']->value;?>
</code></h2>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
  $(document).ready(function () {
    var el = document.createElement('script');
    document.getElementById('telegram-login-box').append(el);
    el.onload = function () {
      $('#telegram-alert').remove()
    }
    el.src = 'https://telegram.org/js/telegram-widget.js?4';
    el.setAttribute('data-size', 'large')
    el.setAttribute('data-telegram-login', '<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
')
    el.setAttribute('data-auth-url', '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/auth/telegram_oauth')
    el.setAttribute('data-request-access', 'write')
  });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  $(document).ready(function () {
    $("#telegram-login-button").click(
      function () {
        tgLogin();
      }
    );

    function tgLogin() {
      $.ajax({
        type: "POST",
        url: "qrcode_check",
        dataType: "json",
        data: {
          token: "<?php echo $_smarty_tpl->tpl_vars['login_token']->value;?>
",
          number: "<?php echo $_smarty_tpl->tpl_vars['login_number']->value;?>
"
        },
        success: (data) => {
          if (data.ret > 0) {
            clearTimeout(tid);

            $.ajax({
              type: "POST",
              url: "/auth/qrcode_login",
              dataType: "json",
              data: {
                token: "<?php echo $_smarty_tpl->tpl_vars['login_token']->value;?>
",
                number: "<?php echo $_smarty_tpl->tpl_vars['login_number']->value;?>
"
              },
              success: (data) => {
                if (data.ret) {
                  window.location.href = '/user'
                }
              },
              error: (jqXHR) => {
                swal('TG登录失败','请使用账号密码登录', 'error');
              }
            });
          } else {
            if (data.ret === -1) {
              $('#code_number').replaceWith('<code id="code_number">此数字已经过期，请刷新页面后重试。</code>');
            }
          }
        },
        error: (jqXHR) => {
          if (jqXHR.status !== 200 && jqXHR.status !== 0) {
            swal('TG登录失败','请使用账号密码登录', 'error');
          }
        }
      });
      tid = setTimeout(tgLogin, 2500); //循环调用触发setTimeout
    }
  })
<?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="/js/fuck.js"><?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
    <?php echo '<script'; ?>
 src="https://recaptcha.net/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
<?php }?>
</body>

</html><?php }
}
