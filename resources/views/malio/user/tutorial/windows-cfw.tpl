<!DOCTYPE html>
<html lang="en">

<head>
  {include file='user/head.tpl'}

  <title>Windows 使用教程 &mdash; {$config["appName"]}</title>

  <style>
    .btn-app {
      background: linear-gradient(to right, #224F87, #132748) !important;
      color: white !important;
      border-color: #224F87;
      box-shadow: 0 2px 6px rgba(34, 79, 135, 0.42);
      margin-bottom: 16px;
    }

    .card a {
      color: #224F87;
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
      color: #2E46AD;
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
      background-color: #2E46AD;
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
            <h1>Windows 使用教程</h1>
            {if $malio_config['display_more_app_button'] == true || $malio_config['enable_windows_gaming_tutorial'] == true}
            <div class="section-header-breadcrumb">
              {if $malio_config['enable_windows_gaming_tutorial'] == true}
              <div id="checkin-div" class="breadcrumb-item active">
                <a href="/user/tutorial?os=windows&client=netch" class="btn btn-icon icon-left btn-primary {if $malio_config['display_more_app_button'] == true}mr-2{/if}"><i class="fas fa-gamepad"></i> 游戏加速教程</a>
              </div>
              {/if}
              {if $malio_config['display_more_app_button'] == true}
              <div class="btn-group dropleft">
                <!--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  其他客户端
                </button>-->
                <div class="dropdown-menu dropleft">
                  <a class="dropdown-item has-icon" href="/user/tutorial?os=windows&client=ssr"><i class="malio-ssr"></i>SSR</a>
                </div>
              </div>
              {/if}
            </div>
            {/if}
          </div>
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12">
                {if !URL::SSCanConnect($user, $mu) && !(in_array("v2ray",$malio_config['support_sub_type']))}
                <div class="alert alert-warning alert-has-icon">
                  <div class="alert-icon"><i class="fas fa-exclamation-triangle"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">无法使用此客户端</div>
                    您的加密、混淆和协议不兼容 SS 客户端。如需使用，请在 <a href="/user/edit"><u>连接设置</u></a> 页面更改 “加密方式”、“混淆和协议” 为 SS 可连接的选项。
                  </div>
                </div>
                {/if}
                <div class="card">
                  <div class="card-body">
                    <ul class="steps">
                      <li>
                        <div class="row">
                          <div class="left-text col-xs-12 col-md-6 col-lg-6">
                            <label class="step-no">1.</label>
                            <p>下载V2ray客户端 </p>
                            <p>2.在菜单中点击复制订阅地址，稍后添加节点时需要用到<br>
                              新建文件夹并解压到桌面<br>
                              运行时请右键，以管理员身份运行
                            </p>
                            <a href="https://ghproxy.com/https://github.com/2dust/v2rayN/releases/download/4.24/v2rayN-Core.zip" class="btn btn-icon icon-left btn-primary btn-app btn-lg btn-round" target="blank"><i class="fas fa-download"></i> 下载客户端</a>
                          </div>
                          <div class="right-pic col-xs-12 col-md-6 col-lg-6">
                            <div class="tutorial-pic hide-on-mobie">
                              <img style="border:1px solid #f0f0f0" src="/theme/malio/img/tutorial/windows-cfw-1.png">
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <hr>
                        <div class="row">
                          <div class="left-text col-xs-12 col-md-6 col-lg-6">
                            <label class="step-no">2.</label>
                            <p>点击这个按钮 👇👇👇</p>
                             <a href="##" class="btn btn-icon icon-left btn-primary btn-app btn-lg btn-round copy-text" data-clipboard-text="{$subInfo['v2ray']}{if $malio_config['enable_sub_extend'] == true}&extend=1{/if}"><i class="malio-v2rayng"></i> 复制 V2Ray 订阅链接</a>

                            <p class="text-muted" style="font-size: 13px">
                            选择客户端中的订阅-》订阅设置-》添加您复制的订阅链接并点击订阅下方的更新按钮
                            订阅导入不成功？<a href="#manual-import" class="text-muted "><u>试试手动导入</u> →</a></p>
                          </div>
                          <div class="right-pic col-xs-12 col-md-6 col-lg-6">
                            <div class="tutorial-pic">
                              <img src="https://i.loli.net/2019/11/22/XcTvHR2z6oZUx3O.png">
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <hr>
                        <div class="row">
                          <div class="left-text col-xs-12 col-md-6 col-lg-6">
                            <label class="step-no">3.</label>
                            <p>配置好节点后需要设置系统代理才能让浏览器访问外网，操作为：右下角托盘找到v2rayN图标，在图标上点击右键，找到“系统代理” ，点击“自动配置系统代理”，此时图标会变成红色：</p>
                          </div>
                          <div class="right-pic col-xs-12 col-md-6 col-lg-6">
                            <div class="tutorial-pic">
                              <img style="border:1px solid #f0f0f0" src="https://s2.loli.net/2022/01/12/XRa1qfMETpLl3bz.jpg">
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <hr>
                        <div class="row">
                          <div class="left-text col-xs-12 col-md-6 col-lg-6">
                            <label class="step-no">4.</label>
                            <p>默认v2rayN是全局代理，也就是不管访问什么网站，都是走节点流量，主界面点击“设置” -> “路由设置” -> “基础功能” -> “一键导入基础规则”，然后点击“确定”。<br>
如果基础功能为灰色不可点击则可右键任务栏图标->“路由”->“绕过大陆”<br>
接下来访问百度、淘宝等国外网内都是直连，不会再走代理了</p>
                          </div>
                          <div class="right-pic col-xs-12 col-md-6 col-lg-6">
                            <div class="tutorial-pic">
                              <img style="border:1px solid #f0f0f0" src="https://s2.loli.net/2022/01/12/Ny5BARLdMS2Kvcq.jpg">
                            </div>
                          </div>
                        </div>
                      </li>
 
                    </ul>
                  </div>
                </div>
                <div class="text-center">
                  <h3 style="margin-top: 50px;margin-bottom: 30px;">🤔</h3>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="faq">
                      <div class="row mt-2 mb-2">
                        <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6" id="manual-import">
                          <h6>V2rayN for Windows 无法一键导入，如何手动导入配置？</h6>
                          <p class="mb-4 font-13">
                            
                            
                            
                            点击首页，在便捷导入模块，点击 批量复制vmess链接
                            
                            
                            ，右键托盘栏客户端，选择从剪切板导入。
                          </p>
                        </div>
                        
                        <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">
                          <h6>V2rayN for Windowss 如何切换节点？</h6>
                          <p class="mb-4 font-13">
                            选择侧边栏里的 服务器 ，点击展开分组，选择分组下的节点即可切换节点。
                          </p>
                        </div>
                        <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">
                          <h6>V2rayN for Windows 如何更新节点？</h6>
                          <p class="mb-4 font-13">
                            双击v2rayN打开，点击 订阅 点击 更新订阅 ，稍后您将会看到log栏里的更新成功提示。
                          </p>
                        </div>
                        <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">
                          <h6>V2rayN for Windows 如何进行 url-test 测试延迟？</h6>
                          <p class="mb-4 font-13">
                            双击v2rayN打开，单击想要测试的节点，右键选择测试节点延迟。
                          </p>
                        </div>
                        <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">
                          <h6>V2rayN for Windows 所有节点测试延迟都显示 Timeout 怎么办？</h6>
                          <p class="mb-0 font-13">
                            访问 <a href="https://time.is" target="blank">https://time.is <i class="fas fa-external-link-alt"></i></a> ，确保你的电脑系统时间与标准时间的时间差不超过 1 分钟。
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

  <script>
    function importSublink(client) {
      if (client == 'clash') {
        oneclickImport('clash', '{$subInfo["clash"]}{if $malio_config["enable_sub_extend"] == true}&extend=1{/if}')
      };
    }
    appName = "{$config['appName']}";
  </script>
</body>

</html>
