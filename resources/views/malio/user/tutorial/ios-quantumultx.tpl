<!DOCTYPE html>
<html lang="en">

<head>
    {include file='user/head.tpl'}

    <title>iOS 使用教程 &mdash; {$config["appName"]}</title>

    <style>
        .btn-app {
            background: linear-gradient(to right, #089eea, #1e71d9) !important;
            color: white !important;
            border-color: #366ad8;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.38);
            margin-bottom: 16px;
        }

        .card a {
            color: #1c90f6;
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
            color: black;
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
            background-color: #1c90f6;
            display: inline-block;
            float: left;
            margin-top: 6px;
            margin-right: 8px;
        }

        .faq p {
            font-weight: normal !important;
        }

        .qrcode-btn {
            color: #a2a2a2;
            margin-left: 2px;
            background: none;
            margin-bottom: 16px;
        }

        .qrcode-btn:hover,
        .qrcode-btn:active,
        .qrcode-btn:focus {
            color: black;
            border-color: none;
            box-shadow: none;
            background: none;
        }

        .qrcode-btn i {
            vertical-align: -1px !important;
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
                    <h1>iOS 使用教程</h1>
                    {if $malio_config['display_more_app_button'] == true}
                        <div class="section-header-breadcrumb">
                            <div class="btn-group dropleft">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    其他客户端
                                </button>
                                <div class="dropdown-menu dropleft">
                                    <a class="dropdown-item has-icon"
                                       href="/user/tutorial?os=ios&client=shadowrocket"><i
                                                class="malio-shadowrocket"></i>Shadowrocket</a>
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
                                                    {if $malio_config['enable_ios_apple_id'] == true}
                                                        <p>在 App Store 登录本站提供的美区 Apple ID 下载客户端。<br>
                                                            为了保护您的隐私，请勿在手机设置里直接登录，仅在 App Store 登录即可。
                                                        </p>
                                                        {if $user->class>0}
                                                            <p>Apple ID：<a class="copy-text"
                                                                           data-clipboard-text="{$malio_config['ios_apple_id']}"
                                                                           href="##">{$malio_config['ios_apple_id']}</a><br>
                                                                密码：<a class="copy-text"
                                                                      data-clipboard-text="{$malio_config['ios_apple_id_password']}"
                                                                      href="##">********(点击复制)</a></p>
                                                        {else}
                                                            <p>购买会员计划后，刷新本页即可看到免费提供的 Apple ID。</p>
                                                        {/if}
                                                    {else}
                                                        <p>这是一个付费软件，由于苹果越来越严格的政策，本平台暂不提供，你需要将Apple Store账号切换为<strong>外区Apple
                                                                ID</strong>使用信用卡购买才能使用，或者使用下述方法购买一个属于自己的ID不用担心共享问题；<br>
                                                            你可以在万能的某宝购买美区Apple ID，使用<strong>credit
                                                                card</strong>或继续购买<strong>美区充值卡</strong>充值后购买APP。</p>
                                                        <p>你也可以在我们的合作伙伴网站购买:<a href='https://card.cafecat.club/'
                                                                               target='_blank'>点击跳转</a></p>
                                                    {/if}
                                                    <a href="https://itunes.apple.com/us/app/quantumult-x/id1443988620?ls=1&mt=8"
                                                       class="btn btn-icon icon-left btn-primary btn-app btn-lg btn-round"
                                                       target="blank"><i class="fab fa-apple"></i> 打开 App Store 下载</a>
                                                    <button id="quantumultx-download-qrcode" type="button"
                                                            class="qrcode-btn btn">
                                                        <i class="fas fa-qrcode"></i>
                                                    </button>
                                                </div>
                                                <div class="right-pic col-xs-12 col-md-6 col-lg-6">
                                                    <div class="tutorial-pic hide-on-mobie">
                                                        <img style="border:1px solid #f0f0f0"
                                                             src="https://s2.loli.net/2022/03/17/v4YpSRxay1mbMUi.png">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <hr>
                                            <div class="row">
                                                <div class="left-text col-xs-12 col-md-6 col-lg-6">
                                                    <label class="step-no">2.</label>
                                                    <p>点击这个按钮 👇👇👇，将订阅链接复制到剪切板中。</p>
                                                    <p>App右下角风车->下载->粘贴后右上角保存</p>
                                                    <a href="##" id="quan_sub"
                                                       class="btn btn-icon icon-left btn-primary btn-app btn-quantumultx copy-text btn-lg btn-round"
                                                       data-clipboard-text="https://dove.589669.xyz/profiles?type=QuanX&sub={$subInfo['quantumultx']}&emoji=0&sort=0"
                                                       )"><i
                                                            class="malio-quantumult"></i> 复制 Quantumult X订阅</a>

                                                </div>
                                                <div class="right-pic col-xs-12 col-md-6 col-lg-6">
                                                    <div class="tutorial-pic">
                                                        <img src="https://s2.loli.net/2022/03/17/KervuhgqPd6t7RG.png">
                                                        <img src="https://s2.loli.net/2022/03/17/Gye7ZWPsocqvi2u.png">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <hr>
                                            <div class="row">
                                                <div class="left-text col-xs-12 col-md-6 col-lg-6">
                                                    <label class="step-no">3.</label>
                                                    <p>返回主界面进行节点选择</p>
                                                </div>
                                                <div class="right-pic col-xs-12 col-md-6 col-lg-6">
                                                    <div class="tutorial-pic">
                                                        <a href="https://sm.ms/image/fwjHiudQ9WK5hVJ"
                                                           target="_blank"><img
                                                                    src="https://s2.loli.net/2022/03/17/fwjHiudQ9WK5hVJ.png"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="left-text col-xs-12 col-md-6 col-lg-6">
                                                    <label class="step-no">4.</label>
                                                    <p>打开开关，完成配置</p>
                                                </div>
                                                <div class="right-pic col-xs-12 col-md-6 col-lg-6">
                                                    <div class="tutorial-pic">
                                                        <a href="https://sm.ms/image/HwQoBKl6AGgsnNV"
                                                           target="_blank"><img
                                                                    src="https://s2.loli.net/2022/03/17/HwQoBKl6AGgsnNV.png"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="left-text col-xs-12 col-md-6 col-lg-6">
                                                    <label class="step-no">5.</label>
                                                    <p>代理模式切换</p>
                                                </div>
                                                <div class="right-pic col-xs-12 col-md-6 col-lg-6">
                                                    <div class="tutorial-pic">
                                                        <a href="https://sm.ms/image/FTYeZDiUWzbJ3Qn"
                                                           target="_blank"><img
                                                                    src="https://s2.loli.net/2022/03/17/FTYeZDiUWzbJ3Qn.png"></a>
                                                        <a href="https://sm.ms/image/1TpMY6y5ADF2jx7"
                                                           target="_blank"><img
                                                                    src="https://s2.loli.net/2022/03/17/1TpMY6y5ADF2jx7.png"></a>

                                                    </div>
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
                        {*                            <div class="card">*}
                        {*                                <div class="card-body">*}
                        {*                                    <div class="faq">*}
                        {*                                        <div class="row mt-2">*}
                        {*                                            <div id="manual-import" class="col-sm-6 col-xs-12 col-md-6 col-lg-6">*}
                        {*                                                <h6>Quantumult 无法一键导入，如何手动导入配置？</h6>*}
                        {*                                                <p class="mb-4 font-13">*}
                        {*                                                    <a href="##" class="copy-text"*}
                        {*                                                       data-clipboard-text="{if $malio_config['quantumult_sub_type']=='v2ray'}{$subInfo['quantumult_v2']}{if $malio_config['enable_sub_extend'] == true}&extend=1{/if}{elseif $malio_config['quantumult_sub_type']=='ss'}{$subInfo['ss']}{if $malio_config['enable_sub_extend'] == true}&extend=1{/if}{elseif $malio_config['quantumult_sub_type']=='ssr'}{$subInfo['ssr']}{if $malio_config['enable_sub_extend'] == true}&extend=1{/if}{/if}">点此复制*}
                        {*                                                        Quantumult 订阅链接</a>，打开*}
                        {*                                                    Quantumult，轻点底栏的设置，轻点订阅，轻点右上角的+，选择服务器，填入名称为 {$config['appName']}*}
                        {*                                                    ，粘贴订阅链接，最后保存即可。*}
                        {*                                                </p>*}
                        {*                                            </div>*}
                        {*                                            <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">*}
                        {*                                                <h6>Quantumult 如何切换节点？</h6>*}
                        {*                                                <p class="mb-4 font-13">*}
                        {*                                                    轻点底栏的黑色圆圈，然后选择节点即可。如果没有看到黑色圆圈，请重启 Quantumult。*}
                        {*                                                </p>*}
                        {*                                            </div>*}
                        {*                                            <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">*}
                        {*                                                <h6>Quantumult 如何更新节点？</h6>*}
                        {*                                                <p class="mb-4 font-13">*}
                        {*                                                    前往 Quantumult 底栏的“设置” > “订阅”，在 {$config['appName']} 上向左滑动，轻点“更新”。*}
                        {*                                                </p>*}
                        {*                                            </div>*}
                        {*                                        </div>*}
                        {*                                    </div>*}
                        {*                                </div>*}
                        {*                            </div>*}
                    </div>
                </div>
        </div>
        </section>
    </div>
    {include file='user/footer.tpl'}
</div>
</div>

{include file='user/scripts.tpl'}

<script src="https://fastly.jsdelivr.net/npm/bowser@1.9.4/bowser.min.js"></script>
<script src="https://fastly.jsdelivr.net/npm/kjua@0.1.2/dist/kjua.min.js"></script>

<script>
    function importSublink(client) {
        if (client == 'quantumult') {
            oneclickImport('quantumult', '{if $malio_config["quantumult_sub_type"]=="v2ray"}{$subInfo["quantumult_v2"]}{if $malio_config["enable_sub_extend"] == true}&extend=1{/if}{elseif $malio_config["quantumult_sub_type"]=="ss"}{$subInfo["ss"]}{elseif $malio_config["quantumult_sub_type"]=="ssr"}{$subInfo["ssr"]}{if $malio_config["enable_sub_extend"] == true}&extend=1{/if}{/if}');
        }
    }

    createQRCode('quantumult-qrcode', "quantumult://configuration?server=" + btoa('{if $malio_config["quantumult_sub_type"]=="v2ray"}{$subInfo["quantumult_v2"]}{if $malio_config["enable_sub_extend"] == true}&extend=1{/if}{elseif $malio_config["quantumult_sub_type"]=="ss"}{$subInfo["ss"]}{if $malio_config["enable_sub_extend"] == true}&extend=1{/if}{elseif $malio_config["quantumult_sub_type"]=="ssr"}{$subInfo["ssr"]}{if $malio_config["enable_sub_extend"] == true}&extend=1{/if}{/if}').replace(/=/g, '') + '&filter=YUhSMGNITTZMeTl0ZVM1dmMyOWxZMjh1ZUhsNkwzSjFiR1Z6TDNGMVlXNTBkVzExYkhRdVkyOXVaZw', '打开手机相机，扫描二维码导入');
    createQRCode('quantumult-download-qrcode', 'https://itunes.apple.com/us/app/quantumult/id1252015438', '扫描二维码下载客户端');
    var appName = '{$config["appName"]}';
</script>
<script>
    function Copyconfig(url, id, jumpurl = "") {
        $.ajax({
            url: url,
            type: 'GET',
            async: false,
            success: function (res) {
                if (res) {
                    $("#result").modal();
                    $("#msg").html("获取成功");
                    $(id).data('data', res);
                    console.log(res);
                } else {
                    $("#result").modal();
                    $("#msg").html("获取失败，请稍后再试");
                }
            }
        });
        const clipboard = new ClipboardJS('.copy-config', {
            text: function () {
                return $(id).data('data');
            }
        });
        clipboard.on('success', function (e) {
            swal({
                type: 'success',
                title: '复制成功，即将跳转到 APP',
                showConfirmButton: false,
                timer: 1500,
                onClose: () => {
                    if (jumpurl != "") {
                        window.setTimeout(function () {
                            window.location.href = jumpurl;
                        }, 1000);
                    }
                }
            })
        });
        clipboard.on("error", function (e) {
            console.error('Action:', e.action);
            console.error('Trigger:', e.trigger);
            console.error('Text:', e.text);
        });
    }
</script>
</body>

</html>
