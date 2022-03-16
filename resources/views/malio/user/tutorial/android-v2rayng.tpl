<!DOCTYPE html>
<html lang="en">

<head>
  {include file='user/head.tpl'}

  <title>Android 使用教程 &mdash; {$config["appName"]}</title>

  <style>
    .btn-app {
      background: linear-gradient(to right, black, #000) !important;
      color: #dcdcdc !important;
      border-color: black;
      box-shadow: 0 2px 4px #3030307a;
      margin-bottom: 16px;
    }

    .card a {
      color: #029688;
    }

    .steps {
      margin: 10px;
      padding: 0px;
    }

    li {
      list-style: none;
    }

    .step-no {
      font-size: 30px;
      font-weight: 700;
      color: #029688;
    }

    .right-pic {
      text-align: right;
    }

    .tutorial-pic img {
      border-radius: 5px;
      width: 100%;
      max-width: 24rem;
    }

    @media (max-width: 767px) {
      .right-pic {
        display: block;
      }

      .tutorial-pic img {
        margin-top: 16px;
        border-radius: 5px;
        max-width: 100%;
      }

      .qrcode-btn {
        display: none
      }

      .hide-on-mobie {
        display: none;
      }
    }

    .faq h6 {
      color: #191d21;
    }

    .faq h6:before {
      content: ' ';
      border-radius: 5px;
      height: 6px;
      width: 6px;
      background-color: #029688;
      display: inline-block;
      float: left;
      margin-top: 6px;
      margin-right: 8px;
    }

    .faq p {
      font-weight: normal !important;
    }
  </style>

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      {include file='user/navbar.tpl'}

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="/user/tutorial" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Android 使用教程</h1>
            {if $malio_config['display_more_app_button'] == true}
            <div class="section-header-breadcrumb">
              <div class="btn-group dropleft">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                其他客户端
                </button>
                <div class="dropdown-menu dropleft">
 <a class="dropdown-item has-icon" href="/user/tutorial?os=android&client=clash"><i class="malio-clash"></i>Clash</a>
                <!--  <a class="dropdown-item has-icon" href="/user/tutorial?os=android&client=ssr"><i class="malio-ssr"></i>SSR</a>
                  <a class="dropdown-item has-icon" href="/user/tutorial?os=android&client=surfboard"><i class="malio-surfboard"></i>Surfboard</a>
                  <a class="dropdown-item has-icon" href="/user/tutorial?os=android&client=kitsunebi"><i class="malio-kitsunebi"></i>Kitsunebi</a>
                -->
</div>
              </div>
            </div>
            {/if}
          </div>
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <ul class="steps">
                      <li>
                        <div class="row">
                          <div class="left-text col-xs-12 col-md-6 col-lg-6">
                            <label class="step-no">1.</label>
                            <p>下载 v2rayNG 客户端 。</p>
                            <a href="https://ghproxy.com/https://github.com/2dust/v2rayNG/releases/download/1.6.26/v2rayNG_1.6.26.apk" class="btn btn-icon icon-left btn-primary btn-app btn-lg btn-round" target="blank"><i class="fas fa-download"></i> 下载客户端 </a>
                          </div>
                          <div class="right-pic col-xs-12 col-md-6 col-lg-6">
                            <div class="tutorial-pic hide-on-mobie">
                              
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <hr>
                        <div class="row">
                          <div class="left-text col-xs-12 col-md-6 col-lg-6">
                            <label class="step-no">2.</label>
                            <p>打开 V2rayNG 点击左上角的菜单图标打开侧边栏，随后点击 订阅设置。点击右上角的加号按钮，在新页面的备注中填写本站名称，地址输入框中粘贴订阅链接并点击右上角的 <i class="fas fa-check"></i>。</p>
                            <a href="##" class="btn btn-icon icon-left btn-primary btn-app btn-lg btn-round copy-text" data-clipboard-text="{$subInfo['v2ray']}{if $malio_config['enable_sub_extend'] == true}&extend=1{/if}"><i class="malio-v2rayng"></i> 复制 V2Ray 订阅链接</a>
 <div class="right-pic col-xs-12 col-md-6 col-lg-6">
                            <div class="tutorial-pic">
                          <img src="https://i.loli.net/2019/11/24/XEqUaZQfWTcSLVP.png" alt>
                          </div>
</div>
                          <div class="right-pic col-xs-12 col-md-6 col-lg-6">
                            <div class="tutorial-pic">
                            
                             <img src="https://i.loli.net/2019/11/24/s1OX5xZEcTvY9kp.png" alt>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <hr>
                        <div class="row">
                          <div class="left-text col-xs-12 col-md-6 col-lg-6">
                            <label class="step-no">3.</label>
                            <p>再次从侧边栏进入 设置 页面，点击 路由模式 将其更改为 绕过局域网及大陆地址。</p>
                          </div>
                          <div class="right-pic col-xs-12 col-md-6 col-lg-6">
                            <div class="tutorial-pic">
                            <img src="https://i.loli.net/2019/11/24/Gdt8p25JwvLg6Sy.png" alt>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <hr>
                        <div class="row">
                          <div class="left-text col-xs-12 col-md-6 col-lg-6">
                            <label class="step-no">4.</label>
                            <p>随后从侧边栏回到 配置文件 页面，点击右上角的省略号图标选择更新订阅。</p>
<p class="text-muted" style="font-size: 13px">更新失败？<a href="#manual-import" class="text-muted " one-link-mark="yes"><u>试试手动导入</u> →</a></p>
                          </div>
                          <div class="right-pic col-xs-12 col-md-6 col-lg-6">
                            <div class="tutorial-pic"><img src="https://i.loli.net/2019/11/24/txRZrAOT6zQ9vVp.png" alt>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <hr>
                        <div class="row">
                          <div class="left-text col-xs-12 col-md-6 col-lg-6">
                            <label class="step-no">5.</label>
                            <p>点击选择您需要的节点，点击右下角的按钮即可连接。</p>
                          </div>
                          <div class="right-pic col-xs-12 col-md-6 col-lg-6">
                            <div class="tutorial-pic">
                             
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
			
                </div><div class="text-center">
                  <h3 style="margin-top: 50px;margin-bottom: 30px;">🤔</h3>
                </div>
<div class="card">
                  <div class="card-body">
                    <div class="faq">
                      <div class="row mt-2 mb-2">
                        
<div class="col-sm-6 col-xs-12 col-md-6 col-lg-6" id="manual-import">
			<h6>更新订阅失败手动导入方法</h6>
                          <p class="mb-4 font-13">
                           点击 <a href="/user">用户中心</a>，在便捷导入模块，点击 批量复制vmess链接->APP右上角＋号->从剪切板导入。
                          </p>
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
      {include file='user/footer.tpl'}
    </div>
  </div>

  {include file='user/scripts.tpl'}

</body>

</html>
