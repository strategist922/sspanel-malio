const csKdOsOtLF = {
    'includes': function () {
        return true;
    }
}

function GD4vwp4l() {


    const domians = csKdOsOtLF;
    var nowDomain = document.location.toString().split('#')[0].split('?')[0];
    var sdomain = nowDomain.split('//')[1].split('/')[0];
    if (domians.includes(sdomain)) {
        return true;
    } else {
        return false;
    }
}

function w4jCiGvDtw() {
    const _0x3c87e9 = 'i18n_placeholder';
    if (_0x3c87e9 != 'TRUE') {
        $('[class="navbar-nav navbar-right"] li:first').remove()
//        if (i18n.lang != 'zh-cn') {
//                'type': 'POST',
//                'url': '/user/api/change-lang',
//                'dataType': 'json',
//                'data': {'lang': 'zh-cn'},
//                'success': function (_0x2a0f29) {
//                    location.reload();
//                }
//            });
//        }
        return false;
    }
    return true;
}

//}

function hideFeedback(_0x297b0e) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$('#' + _0x297b0e).hide();
}

function changeLang(_0x174d00) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'POST',
        'url': '/user/api/change-lang',
        'dataType': 'json',
        'data': {'lang': _0x174d00},
        'success': function (_0x486c1f) {
            location.reload();
        }
    });
}

function checkin() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'POST',
        'url': '/user/checkin',
        'dataType': 'json',
        'success': function (_0x4033d6) {
            $('#checkin-div').html('<a href="#" class="btn btn-icon disabled icon-left btn-primary"><i class="far fa-edit"></i> ' + i18n['alredy-got-daily-bonus'] + '</a>');
            swal(i18n['success-got-daily-bonus'], _0x4033d6['msg'], 'success');
        },
        'error': function (_0x212f1c) {
            swal('签到失败', '发送请求失败', 'error');
        }
    });
}

function loadTrafficChart() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$('#loadTrafficChart-div').html('<a id="loadTrafficChart" href="#" class="btn disabled btn-primary btn-progress">Progress</a>');
    $.ajax({
        'type': 'GET',
        'url': '/user/trafficlog',
        'dataType': 'html',
        'success': function (_0x514e82) {
            $('#chartCardbox').html(function () {
                return '<div class="col-12">' + _0x514e82 + '</div>';
            });
            $('#loadTrafficChart').hide();
            $('#chartCardbox').show();
        }
    });
}

function trafficDountChat(_0x5466cb, _0x20d728, _0x197117, _0x24ee29, _0x81cef3, _0x1d4fa1) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;!function (_0x2a03a0) {
        'use strict';
        var _0x139fca = function () {
        };
        _0x139fca.prototype.init = function () {
            c3['generate']({
                'bindto': '#pie-chart',
                'data': {
                    'columns': [[i18n.used + _0x5466cb, _0x24ee29], [i18n['used-today'] + _0x20d728, _0x81cef3], [i18n.available + _0x197117, _0x1d4fa1]],
                    'type': 'donut'
                },
                'color': {'pattern': ['#dce6fb', '#ABC6FF', '#6777ef']},
                'donut': {'label': {'show': false}}
            });
        }, _0x2a03a0['ChartC3'] = new _0x139fca(), _0x2a03a0['ChartC3'].Constructor = _0x139fca;
    }(window.jQuery), function (_0x4f3f3d) {
        'use strict';
        _0x4f3f3d.ChartC3['init']();
    }(window.jQuery);
}

$('#ss-random-password').click(function () {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$('#ss-password').val(Math.random().toString(0x24).substr(0x2));
});
$('#ss-password-confirm').click(function () {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'POST',
        'url': 'sspwd',
        'dataType': 'json',
        'data': {'sspwd': $('#ss-password').val()},
        'success': function (_0x3c70fc) {
            if (_0x3c70fc.ret) {
                $('#ss-current-password').text($('#ss-password').val());
                swal({
                    'type': 'success',
                    'title': i18n['server-password-changed-successfully'],
                    'showCloseButton': true
                });
            } else {
                swal({
                    'type': 'error',
                    'title': i18n.failed,
                    'showCloseButton': true,
                    'text': _0x3c70fc.msg
                });
            }
        }
    });
});
$('#method-confirm').click(function () {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'POST',
        'url': 'method',
        'dataType': 'json',
        'data': {'method': $('#method-select').val()},
        'success': function (_0x450e07) {
            $('#current-method').html($('#method-select').val());
            if (_0x450e07['ret']) {
                swal({
                    'type': 'success',
                    'title': i18n['encryption-changed-successfully'],
                    'showCloseButton': true
                });
            } else {
                swal({
                    'type': 'error',
                    'title': i18n.failed,
                    'showCloseButton': true,
                    'text': _0x450e07['msg']
                });
            }
        }
    });
});
$('#protocol-obfs-confirm').click(function () {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'POST',
        'url': 'ssr',
        'dataType': 'json',
        'data': {
            'protocol': $('#protocol-selection').val(),
            'obfs': $('#obfs').val(),
            'obfs_param': $('#obfs-param').val()
        },
        'success': function (_0x414d6c) {
            if (_0x414d6c.ret) {
                $('#current-protocol').html($('#protocol-selection').val());
                $('#current-obfs').html($('#obfs').val());
                $('#current-obfs-param').html($('#obfs-param').val());
                swal({
                    'type': 'success',
                    'title': i18n['protocol-and-obfs-changed-successfully'],
                    'showCloseButton': true,
                    'text': _0x414d6c.msg
                });
            } else {
                swal({
                    'type': 'error',
                    'title': i18n.failed,
                    'showCloseButton': true,
                    'text': _0x414d6c.msg
                });
            }
        }
    });
});
$('#reset-sub-link').click(function () {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;Swal.fire({
        'title': i18n['reset-config-url-confirm-modal-title'],
        'text': i18n['reset-config-url-confirm-modal-desc'],
        'type': 'warning',
        'showCancelButton': true,
        'confirmButtonColor': '#d33',
        'cancelButtonColor': '#3085d6',
        'confirmButtonText': i18n.confirm,
        'cancelButtonText': i18n.cancel
    }).then(_0x1bc72b => {
        if (_0x1bc72b.value) {
            Swal.fire({
                'title': i18n['config-url-has-been-reseted'],
                'text': i18n['config-url-reset-modal-desc'],
                'type': 'success',
                'onClose': () => {
                    window.location.assign('/user/url_reset');
                }
            });
        }
    });
});
$('#reset-port-confirm').click(function () {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'POST',
        'url': 'resetport',
        'dataType': 'json',
        'data': {},
        'success': function (_0x2ca774) {
            if (_0x2ca774['ret']) {
                $('#current-port').html(_0x2ca774['msg']);
                swal({
                    'type': 'success',
                    'title': i18n['port-reseted-successfully'],
                    'text': i18n['new-port'] + _0x2ca774['msg'],
                    'showCloseButton': true
                });
            } else {
                swal({
                    'type': 'error',
                    'title': i18n.failed,
                    'showCloseButton': true,
                    'text': _0x2ca774['msg']
                });
            }
        }
    });
});
$('#portspecify').click(function () {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'POST',
        'url': 'specifyport',
        'dataType': 'json',
        'data': {'port': $('#port-specify').val()},
        'success': function (_0x4db6da) {
            if (_0x4db6da.ret) {
                $('#current-port-2').html($('#port-specify').val());
                swal({
                    'type': 'success',
                    'title': i18n['customize-port-successfully'],
                    'showCloseButton': true
                });
            } else {
                swal({
                    'type': 'error',
                    'title': i18n.failed,
                    'showCloseButton': true,
                    'text': _0x4db6da.msg
                });
            }
        }
    });
});

function buyCode() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;
    if (!$('#buy-code-money').val()) {
        $('#code-money-feedback').show();
        if (!$('#buy-code-num').val()) {
            $('#code-num-feedback').show();
            return false;
        }
        return false;
    } else {
        $.ajax({
            'type': 'POST',
            'url': '/user/buy_code',
            'dataType': 'json',
            'data': {
                'num': $('#buy-code-num').val(),
                'money': $('#buy-code-money').val(),
                'userid': $('#userid').val()
            },
            'success': function (_0xf49a0c) {
                if (_0xf49a0c.ret) {
                    swal({
                        'type': 'success', 'title': _0xf49a0c.msg, 'onClose': () => {
                            window.location.assign('/user/invite');
                        }
                    });
                } else {
                    swal({
                        'type': 'error',
                        'title': i18n.failed,
                        'text': _0xf49a0c.msg,
                    });
                }
            },
            'error': function (_0x26f6aa) {
                swal({
                    'type': 'error',
                    'title': i18n.failed,
                    'text': '发送请求失败，请联系客服。'
                });
            }
        });
    }
}


function buyInvite() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;
    if (!$('#money').val()) {
        $('#invite-times-warn').show();
        return false;
    } else {
        $.ajax({
            'type': 'POST',
            'url': '/user/buy_invite',
            'dataType': 'json',
            'data': {'num': $('#buy-invite-num').val()},
            'success': function (_0xf49a0c) {
                if (_0xf49a0c.ret) {
                    swal({
                        'type': 'success', 'title': i18n['successful-purchase'], 'onClose': () => {
                            window.location.assign('/user/invite');
                        }
                    });
                } else {
                    swal({
                        'type': 'error',
                        'title': i18n.failed,
                        'text': _0xf49a0c.msg,
                        'footer': '<a href="/user/code">' + i18n['go-to-wallet'] + '</a>'
                    });
                }
            },
            'error': function (_0x26f6aa) {
                swal({
                    'type': 'error',
                    'title': i18n.failed,
                    'text': '发送请求失败，请联系客服。'
                });
            }
        });
    }
}

function customInviteConfirm() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;
    if (!$('#custom-invite-link').val()) {
        $('#custom-invite-feedback').show();
        return false;
    } else {
        $.ajax({
            'type': 'POST',
            'url': '/user/custom_invite',
            'dataType': 'json',
            'data': {'customcode': $('#custom-invite-link').val()},
            'success': function (_0x4341b3) {
                if (_0x4341b3['ret']) {
                    swal({
                        'type': 'success', 'title': i18n['customize-inivitation-link-successfully'], 'onClose': () => {
                            window.location.assign('/user/invite');
                        }
                    });
                } else {
                    swal({
                        'type': 'error',
                        'title': i18n.failed,
                        'text': _0x4341b3['msg'],
                        'footer': '<a href="/user/code">' + i18n['go-to-wallet'] + '</a>'
                    });
                }
            },
            'error': function (_0x50b580) {
                swal({
                    'type': 'error',
                    'title': i18n.failed,
                    'text': '发送请求失败，请联系客服。'
                });
            }
        });
    }
}

function twofaNext() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$('#ga-modal').modal('hide');
    $('#ga-setp-2-modal').modal('show');
}

function twofaConfirm() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'POST',
        'url': 'gacheck',
        'dataType': 'json',
        'data': {'code': $('#ga-code').val()},
        'success': function (_0x9fcfa5) {
            if (_0x9fcfa5['ret']) {
                swal({
                    'type': 'success',
                    'title': _0x9fcfa5['msg'],
                    'showCloseButton': true,
                    'onClose': () => {
                        window.location.assign('/user/profile');
                    }
                });
            } else {
                swal({
                    'type': 'error',
                    'title': _0x9fcfa5['msg'],
                    'showCloseButton': true
                });
            }
        },
        'error': function (_0x2834c2) {
            swal({
                'type': 'error',
                'title': i18n.failed,
                'text': data.msg + '，请联系客服。'
            });
        }
    });
}

$('#2fa-off').click(function () {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'POST',
        'url': 'gaset',
        'dataType': 'json',
        'data': {'enable': 0},
        'success': function (_0x4d48fd) {
            if (_0x4d48fd.ret) {
                swal({
                    'type': 'success',
                    'title': i18n['2fa-has-been-disabled'],
                    'showCloseButton': true,
                    'onClose': () => {
                        window.location.assign('/user/profile');
                    }
                });
            } else {
                swal({
                    'type': 'error',
                    'title': _0x4d48fd.msg,
                    'showCloseButton': true
                });
            }
        },
        'error': function (_0x1df668) {
            swal({
                'type': 'error',
                'title': i18n.failed,
                'text': data.msg + '，请联系客服。'
            });
        }
    });
});

function passwordConfirm() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'POST',
        'url': 'password',
        'dataType': 'json',
        'data': {
            'oldpwd': $('#oldpwd').val(),
            'pwd': $('#pwd').val(),
            'repwd': $('#repwd').val()
        },
        'success': function (_0x2d52b3) {
            if (_0x2d52b3['ret']) {
                swal({
                    'type': 'success',
                    'title': i18n['password-changed-successfully'],
                    'showCloseButton': true,
                    'onClose': () => {
                        window.location.assign('/user/logout');
                    }
                });
            } else {
                swal({
                    'type': 'error',
                    'title': i18n.failed,
                    'text': _0x2d52b3['msg'],
                    'showCloseButton': true
                });
            }
        },
        'error': function (_0x3a82c8) {
            swal({
                'type': 'error',
                'title': i18n.failed,
                'text': data.msg + '，请联系客服。'
            });
        }
    });
}

function killConfirm() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'POST',
        'url': 'kill',
        'dataType': 'json',
        'data': {'passwd': $('#passwd').val()},
        'success': function (_0x386016) {
            console.log(_0x386016['ret']);
            if (_0x386016['ret']) {
                swal({
                    'type': 'success',
                    'title': i18n['your-account-has-been-deleted'],
                    'showCloseButton': true,
                    'onClose': () => {
                        window.location.assign('/');
                    }
                });
            } else {
                swal({
                    'type': 'error',
                    'title': i18n.failed,
                    'showCloseButton': true,
                    'text': _0x386016['msg']
                });
            }
        },
        'error': function (_0x4a8a1f) {
            swal({
                'type': 'error',
                'title': i18n.failed,
                'text': data.msg + '，请联系客服。'
            });
        }
    });
}

function urlChange(_0x50acb7, _0xc07fe9, _0x5413ad) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;var _0x158851 = './node/' + _0x50acb7 + '?ismu=' + _0xc07fe9 + '&relay_rule=' + _0x5413ad;
    document.getElementById('infoifram').src = _0x158851;
    $('#nodeinfo').modal();
}

function createTicket() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$('#create-ticket').attr('disabled', 'disabled');
    $.ajax({
        'type': 'POST',
        'url': '/user/ticket',
        'dataType': 'json',
        'data': {
            'content': $('#ticket-content').val(),
            'markdown': $('#ticket-content').val(),
            'title': $('#title').val()
        },
        'success': function (_0x3457ef) {
            if (_0x3457ef.ret) {
                swal({
                    'type': 'success', 'title': i18n.submitted, 'onClose': () => {
                        window.location.assign('/user/ticket');
                    }
                });
            } else {
                Swal.fire(i18n.failed, _0x3457ef.msg, 'error');
                $('#create-ticket').removeAttr('disabled');
            }
        },
        'error': function (_0xe15ca6) {
            Swal.fire('发生错误', '请联系客服', 'error');
            $('#create-ticket').removeAttr('disabled');
        }
    });
}

function replyTicket(_0x455101) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$('#ticket-reply').attr('disabled', 'disabled');
    if ($('#ticket-content').val() == '') {
        Swal.fire('请填写工单内容', data.msg, 'error');
        $('#ticket-reply').removeAttr('disabled');
        return false;
    }
    $.ajax({
        'type': 'PUT',
        'url': '/user/ticket/' + _0x455101,
        'dataType': 'json',
        'data': {
            'content': $('#ticket-content').val(),
            'markdown': '',
            'title': '',
            'status': 1
        },
        'success': function (_0x3257c8) {
            if (_0x3257c8['ret']) {
                swal({
                    'type': 'success', 'title': i18n.submitted, 'onClose': () => {
                        window.location.assign('/user/ticket/' + _0x455101 + '/view');
                    }
                });
            } else {
                Swal.fire(i18n.failed, _0x3257c8['msg'], 'error');
                $('#ticket-reply').removeAttr('disabled');
            }
        },
        'error': function (_0x360cb7) {
            Swal.fire('发生错误', '请联系客服', 'error');
            $('#ticket-reply').removeAttr('disabled');
        }
    });
}

function closeTicket(_0x4541b8) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'PUT',
        'url': '/user/ticket/' + _0x4541b8,
        'dataType': 'json',
        'data': {'content': i18n['this-ticket-has-been-closed'], 'title': '', 'status': 0},
        'success': function (_0x157a94) {
            if (_0x157a94['ret']) {
                swal({
                    'type': 'success', 'title': i18n['this-ticket-has-been-closed'], 'onClose': () => {
                        window.location.assign('/user/ticket');
                    }
                });
            } else {
                Swal.fire(i18n.failed, _0x157a94['msg'], 'error');
            }
        },
        'error': function (_0x453331) {
            Swal.fire('发生错误', '请联系客服', 'error');
        }
    });
}

function createQRCode(_0x3afb14, _0x1b6e72, _0x17e032) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$('#' + _0x3afb14).popover({
        'html': true,
        'trigger': 'hover',
        'placement': 'right',
        'title': _0x17e032,
        'content': kjua({'text': _0x1b6e72, 'render': 'image', 'size': 0xe0})
    });
}

function oneclickImport(_0xd5e293, _0x4f75b7) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;

    function _0x2fd56e() {
        if (bowser.osname == 'iOS' || bowser.osname == 'Android') {
            return true;
        }
    }

    var _0x14a852 = {};
    _0x14a852['surfboard'] = 'surfboard:///install-config?url=' + encodeURIComponent(_0x4f75b7);
    _0x14a852['quantumult'] = 'quantumult://configuration?server=' + btoa(_0x4f75b7).replace(/=/g, '') + '&filter=YUhSMGNITTZMeTl0ZVM1dmMyOWxZMjh1ZUhsNkwzSjFiR1Z6TDNGMVlXNTBkVzExYkhRdVkyOXVaZw';
    _0x14a852['shadowrocket'] = 'shadowrocket://add/sub://' + btoa(_0x4f75b7) + '?remarks=' + appName;
    _0x14a852['surge'] = 'surge:///install-config?url=' + encodeURIComponent(_0x4f75b7);
    _0x14a852['surge3'] = 'surge3:///install-config?url=' + encodeURIComponent(_0x4f75b7);
    _0x14a852['clash'] = 'clash://install-config?url=' + encodeURIComponent(_0x4f75b7);
    _0x14a852['ssr'] = 'sub://' + btoa(_0x4f75b7);
    if (!_0x2fd56e() && _0xd5e293 != 'clash' & _0xd5e293 != 'ssr') {
        Swal.fire({
            'title': i18n.notice,
            'html': i18n['unable-import-config-on-computer-modal'],
            'type': 'warning',
            'showCancelButton': true,
            'confirmButtonText': i18n.proceed,
            'cancelButtonText': i18n.cancel,
            'focusClose': false,
            'focusConfirm': false
        }).then(_0x5e366b => {
            if (_0x5e366b.value) {
                window.location.href = _0x14a852[_0xd5e293];
            }
        });
    } else {
        window.location.href = _0x14a852[_0xd5e293];
    }
}

function walletTopup(_0x4e5773) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;var _0x1ed654 = parseFloat($('#amount').val());
    if (Number.isNaN(_0x1ed654) == true || _0x1ed654 == 0 || _0x1ed654 == null) {
        $('#no-amount-warn').show();
        return false;
    }
    if (paymentSystem == 'bitpayx') {
        bitpay(_0x4e5773, _0x1ed654);
    }
    if (paymentSystem == 'f2fpay') {
        f2fpay(_0x1ed654);
    }
    if (paymentSystem == 'theadpay') {
        f2fpay(_0x1ed654);
    }
    if (paymentSystem == 'spay') {
        spay(_0x1ed654);
    }
    if (paymentSystem == 'codepay') {
        codepay(_0x4e5773, _0x1ed654);
    }
    if (paymentSystem == 'tomatopay') {
        tmtpay(_0x4e5773, _0x1ed654);
    }
    if (paymentSystem == 'flyfoxpay') {
        flyfox(_0x4e5773, _0x1ed654);
    }
    if (paymentSystem == 'payjs') {
        payjs(_0x1ed654);
    }
    if (paymentSystem == 'f2fpay_payjs') {
        f2fpay_payjs(_0x4e5773, _0x1ed654);
    }
    if (paymentSystem == 'stripe') {
        stripe(_0x4e5773, _0x1ed654);
    }
    if (paymentSystem == 'payssion') {
        payssion(_0x4e5773, _0x1ed654);
    }
    if (paymentSystem == 'yftpay') {
        yft(_0x1ed654);
    }
    if (paymentSystem == 'malio') {
        malioPay(_0x4e5773, _0x1ed654);
    }
}

function codeTopup() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'POST',
        'url': 'code',
        'dataType': 'json',
        'data': {'code': $('#topup-code').val()},
        'success': function (_0x3d3f37) {
            if (_0x3d3f37['ret']) {
                swal({
                    'type': 'success', 'title': i18n['top-up-successful'], 'onClose': () => {
                        window.location.assign('/user/code');
                    }
                });
            } else {
                Swal.fire(i18n.failed, _0x3d3f37['msg'], 'error');
            }
        }
    });
}

function stopAutorenew(_0x2054fa) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'DELETE',
        'url': '/user/bought',
        'dataType': 'json',
        'data': {'id': _0x2054fa},
        'success': function (_0x3861e5) {
            if (_0x3861e5['ret']) {
                swal({
                    'type': 'success',
                    'title': i18n.disabled,
                    'text': _0x3861e5['msg'],
                    'onClose': () => {
                        window.location.assign('/user/code');
                    }
                });
            } else {
                Swal.fire(i18n.failed, _0x3861e5['msg'], 'error');
            }
        }
    });
}

function bitpay(type, prices) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    if (type == 'alipay') {
        type = 'ALIPAY';
    } else if (type == 'wechat') {
        type = 'WECHAT';
    } else if (type == 'crypto') {
        type = 'CRYPTO';
    }
    console.log('将要使用 ' + type + ' 充值' + prices + '元');
    if (isNaN(prices) || prices < 1 || prices >= 1000) {
        if (isNaN(prices)) {
            Swal.fire('金额不能为空', '请输入正确的金额', 'error');
        } else if (prices < 1) {
            Swal.fire('金额不能低于1元', '请输入正确的金额', 'error');
        } else if (prices > 1000) {
            Swal.fire('金额不能超过1000元', '请输入正确的金额', 'error');
        }
    } else {
        var $os = /Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent);
        $.ajax({
            'url': '/user/payment/purchase',
            'data': {'price': prices, 'type': type, 'mobile': $os},
            'dataType': 'json',
            'type': 'POST',
            'success': function (res) {
                if (res.errcode == 0) {
                    var _0x2fadda = document.location.toString().split('#')[0].split('?')[0];
                    var _0x21df3e = _0x2fadda.split('//')[1].split('/')[0x2];
                    if (_0x21df3e == 'code') {
                        window.location.href = res.url;
                    } else {
                        $('#bitpayx-modal').modal({
                            'backdrop': 'static',
                            'keyboard': false
                        });
                        $('#bitpayx-modal').modal('show');
                        $('#to-bitpayx').attr('href', res.url);
                    }
                } else {
                    Swal.fire('发生错误', res.errmsg, 'error');
                }
            }
        });
    }
}

function f2fpay(_0x5359b7) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$('#f2fpay-modal').modal({'backdrop': 'static', 'keyboard': false});
    $('#f2fpay-modal').modal('show');
    var _0x32249d = 0;
    $.ajax({
        'type': 'POST',
        'url': '/user/payment/purchase',
        'dataType': 'json',
        'data': {'amount': _0x5359b7},
        'success': function (_0x572be8) {
            if (_0x572be8['ret']) {
                console.log(_0x572be8);
                _0x32249d = _0x572be8['pid'];
                $('#f2fpay-qr').html(kjua({
                    'text': _0x572be8['qrcode'],
                    'render': 'image',
                    'size': 0x100
                }));
                $('#f2fpay-qr').attr('href', _0x572be8['qrcode']);
                $('#to-alipay-app').attr('href', _0x572be8['qrcode']);
                var _0xe46f32 = document.location.toString().split('#')[0].split('?')[0];
                var _0x3c2ebb = _0xe46f32['split']('//')[1].split('/')[0x2];
                if (_0x3c2ebb == 'code') {
                    setTimeout(_0x42dcab, 1000);
                }
            } else {
                Swal.fire('发生错误', _0x572be8['msg'], 'error');
            }
        },
        'error': function (_0x38c121) {
            Swal.fire('发生错误', '请联系客服', 'error');
        }
    });

    function _0x42dcab() {
        $.ajax({
            'type': 'POST',
            'url': '/payment/status',
            'dataType': 'json',
            'data': {'pid': _0x32249d},
            'success': function (_0x9ebb91) {
                if (_0x9ebb91['result']) {
                    clearTimeout(tid);
                    swal({
                        'type': 'success', 'title': '充值成功', 'onClose': () => {
                            window.location.assign('/user/code');
                        }
                    });
                }
            },
            'error': function (_0x1054df) {
                console.log(_0x1054df);
            }
        });
        tid = setTimeout(_0x42dcab, 1000);
    }
}

function spay(_0x2052b5) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'url': '/user/payment/purchase',
        'data': {'price': _0x2052b5},
        'dataType': 'json',
        'type': 'POST',
        'success': function (_0x45dca1) {
            if (_0x45dca1['code'] == 0) {
                var _0x3be006 = document.location.toString().split('#')[0].split('?')[0];
                var _0x2d13c8 = _0x3be006['split']('//')[1].split('/')[0x2];
                if (_0x2d13c8 == 'code') {
                    window.location.href = _0x45dca1['url'];
                } else {
                    $('#spay-modal').modal({
                        'backdrop': 'static',
                        'keyboard': false
                    });
                    $('#spay-modal').modal('show');
                    $('#to-spay').attr('href', _0x45dca1['url']);
                }
            } else {
                Swal.fire('发生错误', _0x45dca1['msg'], 'error');
            }
        }
    });
}

function codepay(_0x88376d, _0x3e7ce5) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;
    if (_0x88376d == 'alipay') {
        _0x88376d = 1;
    } else if (_0x88376d == 'wechat') {
        _0x88376d = 0x3;
    } else if (_0x88376d == 'qqpay') {
        _0x88376d = 0x2;
    }
    $.ajax({
        'url': '/user/code/codepay',
        'data': {'price': _0x3e7ce5, 'type': _0x88376d},
        'dataType': 'json',
        'type': 'GET',
        'success': function (_0x2f4a29) {
            if (_0x2f4a29['code'] == 0) {
                var _0x2c325c = document.location.toString().split('#')[0].split('?')[0];
                var _0x56632c = _0x2c325c.split('//')[1].split('/')[0x2];
                if (_0x56632c == 'code') {
                    window.location.href = _0x2f4a29['url'];
                } else {
                    $('#codepay-modal').modal({
                        'backdrop': 'static',
                        'keyboard': false
                    });
                    $('#codepay-modal').modal('show');
                    $('#to-codepay').attr('href', _0x2f4a29['url']);
                }
            } else {
                Swal.fire('发生错误', _0x2f4a29['msg'], 'error');
            }
        }
    });
}

function tmtpay(_0x2f284d, _0x570822) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;
    if (_0x2f284d == 'wechat') {
        _0x2f284d = 'wxpay';
    }
    $.ajax({
        'url': '/user/payment/purchase',
        'data': {'price': _0x570822, 'type': _0x2f284d},
        'dataType': 'json',
        'type': 'POST',
        'success': function (_0x20d462) {
            console.log(_0x20d462);
            if (_0x20d462['errcode'] == -1) {
                Swal.fire('发生错误', _0x20d462['errmsg'], 'error');
            }
            if (_0x20d462['errcode'] == 0) {
                var _0x215f31 = document.location.toString().split('#')[0].split('?')[0];
                var _0x5598e8 = _0x215f31['split']('//')[1].split('/')[0x2];
                if (_0x5598e8 == 'code') {
                    pid = _0x20d462['pid'];
                    if (_0x2f284d == 'wxpay') {
                        window.location.href = _0x20d462['code'];
                    } else if (_0x2f284d == 'alipay') {
                        window.location.href = _0x20d462['code'];
                    }
                } else {
                    $('#tmtpay-modal').modal({
                        'backdrop': 'static',
                        'keyboard': false
                    });
                    $('#tmtpay-modal').modal('show');
                    $('#to-tmtpay').attr('href', _0x20d462['code']);
                }
            }
        }
    });
}

function flyfox(_0x18cf8a, _0x319516) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'url': '/user/payment/purchase',
        'data': {'price': _0x319516, 'type': _0x18cf8a},
        'dataType': 'json',
        'type': 'POST',
        'success': function (_0x4b85c9) {
            console.log(_0x4b85c9);
            if (_0x4b85c9['errcode'] == -1) {
                Swal.fire('发生错误', _0x4b85c9['errmsg'], 'error');
            }
            if (_0x4b85c9['errcode'] == 0) {
                var _0x75b21 = document.location.toString().split('#')[0].split('?')[0];
                var _0x5844ae = _0x75b21['split']('//')[1].split('/')[0x2];
                if (_0x5844ae == 'code') {
                    pid = _0x4b85c9['pid'];
                    window.location.href = _0x4b85c9['code'];
                } else {
                    $('#flyfox-modal').modal({
                        'backdrop': 'static',
                        'keyboard': false
                    });
                    $('#flyfox-modal').modal('show');
                    $('#to-flyfox').attr('href', _0x4b85c9['code']);
                }
            }
        }
    });
}

function payjs(_0x4b5755) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$('#payjs-modal').modal({'backdrop': 'static', 'keyboard': false});
    $('#payjs-modal').modal('show');
    var _0x14be26 = 0;
    $.ajax({
        'type': 'POST',
        'url': '/user/payment/purchase',
        'dataType': 'json',
        'data': {'price': _0x4b5755, 'type': 'wechat'},
        'success': function (_0x145dd9) {
            if (_0x145dd9['code'] == 0) {
                console.log(_0x145dd9);
                _0x14be26 = _0x145dd9['pid'];
                $('#payjs-qr').html(kjua({
                    'text': _0x145dd9['url'],
                    'render': 'image',
                    'size': 0x100
                }));
                var _0x2cb177 = document.location.toString().split('#')[0].split('?')[0];
                var _0x29f5d0 = _0x2cb177['split']('//')[1].split('/')[0x2];
                if (_0x29f5d0 == 'code') {
                    setTimeout(_0x4c2d2f, 1000);
                }
            } else {
                Swal.fire('发生错误', _0x145dd9['msg'], 'error');
            }
        },
        'error': function (_0x55b657) {
            Swal.fire('发生错误', '请联系客服', 'error');
        }
    });

    function _0x4c2d2f() {
        $.ajax({
            'type': 'POST',
            'url': '/payment/status',
            'dataType': 'json',
            'data': {'pid': _0x14be26},
            'success': function (_0x383b0a) {
                if (_0x383b0a.result) {
                    clearTimeout(tid);
                    swal({
                        'type': 'success', 'title': '充值成功', 'onClose': () => {
                            window.location.assign('/user/code');
                        }
                    });
                }
            },
            'error': function (_0x40f08e) {
                console.log(_0x40f08e);
            }
        });
        tid = setTimeout(_0x4c2d2f, 1000);
    }
}

function f2fpay_payjs(_0x3ec002, _0x542d44) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;var _0x5e089c = 0;
    $.ajax({
        'type': 'POST',
        'url': '/user/payment/purchase',
        'dataType': 'json',
        'data': {'amount': _0x542d44, 'payment': _0x3ec002},
        'success': function (_0x518ce3) {
            if (_0x518ce3['ret']) {
                console.log(_0x518ce3);
                if (_0x3ec002 == 'alipay') {
                    $('#f2fpay-modal').modal('show');
                    _0x5e089c = _0x518ce3['pid'];
                    $('#f2fpay-qr').html(kjua({
                        'text': _0x518ce3['qrcode'],
                        'render': 'image',
                        'size': 0x100
                    }));
                    $('#f2fpay-qr').attr('href', _0x518ce3['qrcode']);
                    $('#to-alipay-app').attr('href', _0x518ce3['qrcode']);
                } else {
                    $('#payjs-modal').modal('show');
                    _0x5e089c = _0x518ce3['pid'];
                    $('#payjs-qr').html(kjua({
                        'text': _0x518ce3['qrcode'],
                        'render': 'image',
                        'size': 0x100
                    }));
                }
                var _0xe66aba = document.location.toString().split('#')[0].split('?')[0];
                var _0x5c27e8 = _0xe66aba.split('//')[1].split('/')[0x2];
                if (_0x5c27e8 == 'code') {
                    setTimeout(_0x9ac030, 1000);
                }
            } else {
                Swal.fire('发生错误', _0x518ce3['msg'], 'error');
            }
        },
        'error': function (_0x490320) {
            Swal.fire('发生错误', '请联系客服', 'error');
        }
    });

    function _0x9ac030() {
        $.ajax({
            'type': 'POST',
            'url': '/payment/status',
            'dataType': 'json',
            'data': {'pid': _0x5e089c},
            'success': function (_0x4cb2da) {
                if (_0x4cb2da.result) {
                    clearTimeout(tid);
                    swal({
                        'type': 'success', 'title': '充值成功', 'onClose': () => {
                            window.location.assign('/user/code');
                        }
                    });
                }
            },
            'error': function (_0x151cc5) {
                console.log(_0x151cc5);
            }
        });
        tid = setTimeout(_0x9ac030, 1000);
    }
}

function stripe(_0x2c0297, _0x424d7c) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;console.log('---------Stripe 函数 Start--------');
    var _0x44450a = 0;
    if (isNaN(_0x424d7c) || _0x424d7c <= 0) {
        if (isNaN(_0x424d7c)) {
            Swal.fire('金额不能为空', '请输入正确的金额', 'error');
        } else if (_0x424d7c <= 0) {
            Swal.fire('金额不能是0元或负数', '请输入正确的金额', 'error');
        }
    } else {
        $.ajax({
            'url': '/user/payment/purchase',
            'data': {'price': _0x424d7c, 'type': _0x2c0297},
            'dataType': 'json',
            'type': 'POST',
            'success': function (_0x8dc2cd) {
                if (_0x8dc2cd.errcode == 0) {
                    var _0x538eb2 = document.location.toString().split('#')[0].split('?')[0];
                    var _0x111248 = _0x538eb2['split']('//')[1].split('/')[0x2];
                    if (_0x2c0297 == 'alipay') {
                        if (_0x111248 == 'code') {
                            window.location.href = _0x8dc2cd.url;
                        } else {
                            $('#stripe-alipay-modal').modal({
                                'backdrop': 'static',
                                'keyboard': false
                            });
                            $('#stripe-alipay-modal').modal('show');
                            $('#to-stripe').attr('href', _0x8dc2cd.url);
                        }
                    } else if (_0x2c0297 == 'wechat') {
                        _0x44450a = _0x8dc2cd.pid;
                        $('#stripe-qr').html(kjua({
                            'text': _0x8dc2cd.url,
                            'render': 'image',
                            'size': 0x100
                        }));
                        $('#stripe-wechat-modal').modal({
                            'backdrop': 'static',
                            'keyboard': false
                        });
                        $('#stripe-wechat-modal').modal('show');
                        if (_0x111248 == 'code') {
                            setTimeout(_0x55003f, 1000);
                        }
                    } else if (_0x2c0297 == 'creditCard') {
                        stripe.redirectToCheckout({'sessionId': _0x8dc2cd.checkoutSessionId}).then(function (_0x2ea0b9) {
                            console.log('Failed to process payment.');
                        });
                    }
                } else {
                    Swal.fire('发生错误', _0x8dc2cd.errmsg, 'error');
                }
            }
        });
    }

    function _0x55003f() {
        $.ajax({
            'type': 'POST',
            'url': '/payment/status',
            'dataType': 'json',
            'data': {'pid': _0x44450a},
            'success': function (_0x47a70f) {
                if (_0x47a70f.result) {
                    clearTimeout(tid);
                    swal({
                        'type': 'success', 'title': '充值成功', 'onClose': () => {
                            window.location.assign('/user/code');
                        }
                    });
                }
            },
            'error': function (_0x37792d) {
                console.log(_0x37792d);
            }
        });
        tid = setTimeout(_0x55003f, 1000);
    }
}

function payssion(_0x381c05, _0x5812ed) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'url': '/user/payment/purchase',
        'data': {'price': _0x5812ed, 'type': _0x381c05},
        'dataType': 'json',
        'type': 'POST',
        'success': function (_0x33b9e4) {
            if (_0x33b9e4['ret'] == 1) {
                var _0x2d66c6 = document.location.toString().split('#')[0].split('?')[0];
                var _0x4a9aad = _0x2d66c6['split']('//')[1].split('/')[0x2];
                if (_0x4a9aad == 'code') {
                    window.location.href = _0x33b9e4['url'];
                } else {
                    $('#payssion-modal').modal({
                        'backdrop': 'static',
                        'keyboard': false
                    });
                    $('#payssion-modal').modal('show');
                    $('#to-payssion').attr('href', _0x33b9e4['url']);
                }
            } else {
                Swal.fire('发生错误', _0x33b9e4['msg'], 'error');
            }
        }
    });
}

function yft(_0x28e53e) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;console.log('---------yft 函数 Start--------');
    var _0x47af7f = 0;
    if (isNaN(_0x28e53e) || _0x28e53e <= 0) {
        if (isNaN(_0x28e53e)) {
            Swal.fire('金额不能为空', '请输入正确的金额', 'error');
        } else if (_0x28e53e <= 0) {
            Swal.fire('金额不能是0元或负数', '请输入正确的金额', 'error');
        }
    } else {
        $.ajax({
            'url': '/user/payment/purchase',
            'data': {'total_fee': _0x28e53e},
            'dataType': 'json',
            'type': 'POST',
            'success': function (_0x39dbb5) {
                if (_0x39dbb5['errcode'] == 0) {
                    var _0x4a0ed1 = document.location.toString().split('#')[0].split('?')[0];
                    var _0x6d548f = _0x4a0ed1['split']('//')[1].split('/')[0x2];
                    if (_0x6d548f == 'code') {
                        window.location.href = _0x39dbb5['url'];
                    } else {
                        $('#yftpay-modal').modal({
                            'backdrop': 'static',
                            'keyboard': false
                        });
                        $('#yftpay-modal').modal('show');
                        $('#to-yftpay').attr('href', _0x39dbb5['url']);
                    }
                } else {
                    Swal.fire('发生错误', _0x39dbb5['errmsg'], 'error');
                }
            }
        });
    }
}

function malioPay(_0x117139, _0x28832f) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;console.log('---------malioPay func start--------');
    if (isNaN(_0x28832f) || _0x28832f <= 0) {
        if (isNaN(_0x28832f)) {
            Swal.fire('金额不能为空', '请输入正确的金额', 'error');
        } else if (_0x28832f <= 0) {
            Swal.fire('金额不能是0元或负数', '请输入正确的金额', 'error');
        }
    } else {
        $.ajax({
            'url': '/user/payment/purchase',
            'data': {'price': _0x28832f, 'type': _0x117139},
            'dataType': 'json',
            'type': 'POST',
            'success': function (_0x4f9f10) {
                if (_0x4f9f10['ret']) {
                    var _0x48f325 = document.location.toString().split('#')[0].split('?')[0];
                    var _0x4501a8 = _0x48f325['split']('//')[1].split('/')[0x2];
                    if (_0x4f9f10['type'] == 'url') {
                        if (_0x4501a8 == 'code') {
                            window.location.href = _0x4f9f10['url'];
                        } else {
                            $('#maliopay-modal').modal({
                                'backdrop': 'static',
                                'keyboard': false
                            });
                            $('#maliopay-modal').modal('show');
                            $('#to-maliopay').attr('href', _0x4f9f10['url']);
                        }
                    } else if (_0x4f9f10['type'] == 'qrcode') {
                        var _0x48f325 = encodeURIComponent(_0x4f9f10['url']);
                        var _0x463c79 = '/user/qrcode?type=' + _0x117139 + '&qrcode=' + _0x48f325 + '&tradeno=' + _0x4f9f10['tradeno'] + '&price=' + _0x28832f;
                        if (_0x4501a8 == 'code') {
                            window.location.href = _0x463c79;
                        } else {
                            $('#maliopay-modal').modal({
                                'backdrop': 'static',
                                'keyboard': false
                            });
                            $('#maliopay-modal').modal('show');
                            $('#to-maliopay').attr('href', _0x463c79);
                        }
                    }
                } else {
                    Swal.fire('发生错误', _0x4f9f10['errmsg'], 'error');
                }
            }
        });
    }
}

var shop = {};
shop.id = '1';
var coupon = {};
coupon.code = '';
coupon.onetime = 1;
coupon.shop = [''];
coupon.credit = 0;
var confirmShop = {};
confirmShop.id = '';
confirmShop.price = 0;
confirmShop.autorenew = 0;
$('.go-to-buy-page').click(function () {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$('#main-page').hide();
    $('#buy-page').show();
});

function subscribePlan(_0x579ad2) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$('#main-page').hide();
    $('#buy-page').show();
    selectItem('plan', _0x579ad2);
}

function backToShop() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$('#buy-page').hide();
    $('#main-page').show();
}

function updateCoupon() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;
    if ($('#coupon-code').val() == '') {
        $('#coupon-feedback').text('请输入优惠码');
        $('#coupon-feedback').show();
        return false;
    }
    $.ajax({
        'type': 'POST',
        'url': 'coupon_check',
        'dataType': 'json',
        'data': {'coupon': $('#coupon-code').val(), 'shop': shop.id},
        'success': _0x3674bd => {
            if (_0x3674bd.ret) {
                coupon = {};
                coupon.code = $('#coupon-code').val();
                coupon.onetime = _0x3674bd.onetime;
                coupon.shop = _0x3674bd.shop.split(',');
                coupon.credit = _0x3674bd.credit;
                $('#coupon-btn').html('<i class="fas fa-tag"></i> 当前优惠码: ' + coupon.code);
                $('#coupon-modal').modal('hide');
                updateCheckoutInfo();
            } else {
                $('#coupon-feedback').text(_0x3674bd.msg);
                $('#coupon-feedback').show();
            }
        }
    });
};

function cancelCoupon() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;coupon = {};
    coupon.code = '';
    coupon.onetime = 1;
    coupon.shop = [''];
    coupon.credit = 0;
    $('#coupon-code').val('');
    $('#coupon-btn').html('<i class="fas fa-tag"></i> 使用优惠码');
    $('#coupon-feedback').hide();
}

function updateCheckoutInfo() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;console.log('############## 更新商品信息  ##############');
    var _0x48a2fa = $('#plan-selection .active').attr('id');
    var _0x54935c = $('#time-selection .active').attr('id');
    var _0x4e8ac2 = $('#payment-selection .active').attr('id');
    $.ajax({
        'type': 'GET',
        'url': 'shop/getplaninfo',
        'dataType': 'json',
        'data': {'num': _0x48a2fa, 'time': _0x54935c},
        'success': function (_0x1fdf04) {
            if (_0x1fdf04['ret']) {
                shop = {};
                shop.id = _0x1fdf04.id;
                shop.name = _0x1fdf04.name;
                shop.price = _0x1fdf04.price;
                var _0x414735 = ['1month', '3month', '6month', '12month'];
                if (_0x1fdf04['id'] == 0 || _0x1fdf04['id'] == '0') {
                    console.log('id=0, active next plan time', _0x414735['indexOf'](_0x54935c));
                    selectItem('time', _0x414735[_0x414735['indexOf'](_0x54935c) + 1]);
                    updateCheckoutInfo();
                    return 0;
                }
                console.log('商品信息', _0x1fdf04);
                var _0x5df88f = (coupon.credit / 0x64 * shop.price).toFixed(0x2);
                var _0xca583a = (_0x1fdf04['price'] - _0x5df88f).toFixed(0x2);
                console.log('打折的金额：', _0x5df88f);
                console.log('打折后的总价', _0xca583a);
                if (coupon.code != '') {
                    if (coupon.shop.indexOf(_0x1fdf04['id'].toString()) == -1 && coupon.shop[0] != '') {
                        _0xca583a = _0x1fdf04['price'];
                        console.log('优惠码不适用：', coupon.code);
                    }
                }
                console.log('用户余额：', userMoney);
                var _0x26ebd4 = 0;
                if (_0xca583a - userMoney > 0) {
                    _0x26ebd4 = (_0xca583a - userMoney).toFixed(0x2);
                    $('#account-money').text('¥ -' + userMoney);
                } else {
                    $('#account-money').text('¥ -' + _0xca583a);
                }
                console.log('还需要支付的金额：', _0x26ebd4);
                if (coupon.code != '') {
                    $('#coupon-row').show();
                    $('#coupon-money').text('¥ -' + _0x5df88f);
                    shop.price = _0xca583a;
                    if (coupon.shop.indexOf(_0x1fdf04['id'].toString()) == -1 && coupon.shop[0] != '') {
                        $('#coupon-money').text('不适用于此商品');
                    }
                }
                $('#shop-name').text(shop.name);
                $('#total').text('¥\x20' + _0x1fdf04['price']);
                $('#pay-amount').text('¥\x20' + _0x26ebd4);
            }
            console.log('############## 更新商品信息 END  ##############');
        }
    });
}

function selectItem(_0x288a04, _0x4ea02b) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$('#' + _0x288a04 + '-selection .active').removeClass('active');
    $('#' + _0x4ea02b).addClass('active');
    if (_0x288a04 == 'plan') {
        $.ajax({
            'type': 'GET',
            'url': 'shop/getplantime',
            'dataType': 'json',
            'data': {'num': _0x4ea02b},
            'success': function (_0x5cab7d) {
                if (_0x5cab7d.ret) {
                    plan_time = _0x5cab7d.plan_time;
                    if (!plan_time.includes('1month')) {
                        $('#1month').hide();
                    } else {
                        $('#1month').show();
                    }
                    if (!plan_time.includes('3month')) {
                        $('#3month').hide();
                    } else {
                        $('#3month').show();
                    }
                    if (!plan_time.includes('6month')) {
                        $('#6month').hide();
                    } else {
                        $('#6month').show();
                    }
                    if (!plan_time.includes('12month')) {
                        $('#12month').hide();
                    } else {
                        $('#12month').show();
                    }
                }
            }
        });
    }
    updateCheckoutInfo();
}

function buyConfirm(_0x36fc80) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;console.log(confirmShop);
    $.ajax({
        'type': 'POST',
        'url': 'buy',
        'dataType': 'json',
        'data': {
            'coupon': coupon.code,
            'shop': _0x36fc80,
            'autorenew': confirmShop.autorenew,
            'disableothers': 1
        },
        'success': function (_0x3ba510) {
            if (_0x3ba510['ret']) {
                swal({
                    'type': 'success', 'title': '购买成功', 'onClose': () => {
                        window.location.assign('/user');
                    }
                });
            } else {
                Swal.fire('发生错误', _0x3ba510['msg'], 'error');
            }
        },
        'error': function (_0x431832) {
            Swal.fire('发生错误', '请联系客服', 'error');
        }
    });
}

function topUp(_0x3296b9, _0x5ecd78) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;
    if (paymentSystem == 'bitpayx') {
        bitpay(_0x5ecd78, _0x3296b9);
    }
    if (paymentSystem == 'f2fpay') {
        f2fpay(_0x3296b9);
    }
    if (paymentSystem == 'theadpay') {
        f2fpay(_0x3296b9);
    }
    if (paymentSystem == 'spay') {
        spay(_0x3296b9);
    }
    if (paymentSystem == 'codepay') {
        codepay(_0x5ecd78, _0x3296b9);
    }
    if (paymentSystem == 'tomatopay') {
        tmtpay(_0x5ecd78, _0x3296b9);
    }
    if (paymentSystem == 'flyfoxpay') {
        flyfox(_0x5ecd78, _0x3296b9);
    }
    if (paymentSystem == 'payjs') {
        payjs(_0x3296b9);
    }
    if (paymentSystem == 'f2fpay_payjs') {
        f2fpay_payjs(_0x5ecd78, _0x3296b9);
    }
    if (paymentSystem == 'stripe') {
        stripe(_0x5ecd78, _0x3296b9);
    }
    if (paymentSystem == 'payssion') {
        payssion(_0x5ecd78, _0x3296b9);
    }
    if (paymentSystem == 'yftpay') {
        yft(_0x3296b9);
    }
    if (paymentSystem == 'malio') {
        malioPay(_0x5ecd78, _0x3296b9);
    }
    tid = setTimeout(_0x2e5175, 1000);

    function _0x2e5175() {
        $.ajax({
            'type': 'GET',
            'url': '/user/money',
            'dataType': 'json',
            'async': false,
            'success': function (_0x50f5d6) {
                if (_0x50f5d6['ret']) {
                    console.log(confirmShop);
                    if (parseFloat(_0x50f5d6['money']) >= parseFloat(confirmShop.price)) {
                        clearTimeout(tid);
                        buyConfirm(confirmShop.id);
                    }
                }
            },
            'error': function (_0x4d4556) {
                console.log(_0x4d4556);
            }
        });
        tid = setTimeout(_0x2e5175, 1000);
    }
}

$('#pay-confirm').click(function () {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;console.log('############## 按下立即支付按钮  ##############');
    $('#pay-confirm').attr('disabled', 'disabled');
    $.ajax({
        'type': 'GET',
        'url': 'shop/getplaninfo',
        'dataType': 'json',
        'data': {
            'num': $('#plan-selection .active').attr('id'),
            'time': $('#time-selection .active').attr('id')
        },
        'success': function (res) {
            if (res.ret) {
                console.log('当前coupon为：', coupon);
                if (coupon.code != '' && coupon.shop[0] != '' && coupon.shop.indexOf(res.id.toString()) == -1) {
                    Swal.fire('发生错误', '此优惠码不适用于此商品', 'error');
                    $('#pay-confirm').removeAttr('disabled');
                    return false;
                }
                console.log('planinfo：', res);
                confirmShop.id = res.id;
                confirmShop.price = res.price;
                if (coupon.code != '') {
                    var _0xefecf3 = (coupon.credit / 0x64 * res.price).toFixed(0x2);
                    console.log('打折的金额为：', _0xefecf3);
                    var _0x4a5f16 = (res.price - _0xefecf3).toFixed(0x2);
                    console.log('折后总价为：', _0x4a5f16);
                    confirmShop.price = _0x4a5f16;
                }
                if ($('#autorenew-selection .active').attr('id') == 'autorenew-on') {
                    confirmShop.autorenew = 1;
                }
                ;shop = {};
                shop.id = res.id;
                shop.name = res.name;
                shop.price = res.price;
                var _0x25c6e8 = $('#payment-selection .active').attr('id');
                var _0x21cd40 = (confirmShop.price - userMoney).toFixed(0x2);
                console.log('confirShop的值为：', confirmShop);
                console.log('用户余额为：', userMoney);
                console.log('need_to_pay_price的值为：', _0x21cd40);
                if (_0x21cd40 <= 0) {
                    buyConfirm(confirmShop.id);
                } else {
                    topUp(_0x21cd40, _0x25c6e8);
                }
                console.log('############## 按下立即支付按钮 END  ##############');
            } else {
                return;
            }
        }
    });
});

function buyTrafficPackage() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'POST',
        'url': 'shop/buytrafficpackage',
        'dataType': 'json',
        'data': {'shopid': $('input[name=traffic-package-radio]:checked').val()},
        'success': function (_0x561d1d) {
            if (_0x561d1d.ret) {
                swal({
                    'type': 'success',
                    'title': '请求成功',
                    'text': _0x561d1d.msg
                });
            } else {
                Swal.fire('发生错误', _0x561d1d.msg, 'error');
            }
        }
    });
}

function legacySelect(_0x2cc941) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;confirmShop.id = _0x2cc941;
}

function legacyBuy() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;
    if ($('#legacy-autorenew').is(':checked')) {
        confirmShop.autorenew = 1;
    }
    buyConfirm(confirmShop.id);
}

function legacyModalNext() {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;var _0x232e70 = $('#legacy-coupon').val();
    if (_0x232e70 != '') {
        $.ajax({
            'type': 'POST',
            'url': 'coupon_check',
            'dataType': 'json',
            'data': {'coupon': _0x232e70, 'shop': confirmShop.id},
            'success': _0x25e261 => {
                if (_0x25e261['ret']) {
                    coupon = {};
                    coupon.code = $('#legacy-coupon').val();
                    coupon.onetime = _0x25e261.onetime;
                    coupon.shop = _0x25e261.shop.split(',');
                    coupon.credit = _0x25e261.credit;
                    console.log('成功获取legacy-coupon');
                    $('#legacy-modal-1').modal('hide');
                    $('#legacy-shop-name').show();
                    $('#legacy-discount').show();
                    $('#legacy-total').show();
                    $('#legacy-shop-name').text('商品名称: ' + _0x25e261['name']);
                    $('#legacy-discount').text('优惠额度: ' + _0x25e261['credit'] + '%');
                    $('#legacy-total').text('折后总价: ' + _0x25e261['total']);
                    $('#legacy-modal-2').modal('show');
                } else {
                    $('#legacy-coupon-feedback').text(_0x25e261['msg']);
                    $('#legacy-coupon-feedback').show();
                }
            }
        });
    } else {
        $('#legacy-modal-1').modal('hide');
        $('#legacy-modal-2').modal('show');
    }
}

$('#add-relay-rule').click(function () {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'POST',
        'url': '/user/relay',
        'dataType': 'json',
        'data': {
            'source_node': $('#source_node').val(),
            'dist_node': $('#dist_node').val(),
            'port': $('#port').val(),
            'priority': $('#priority').val()
        },
        'success': _0xd14d7b => {
            if (_0xd14d7b.ret) {
                Swal.fire({
                    'title': '成功添加中转规则',
                    'type': 'success',
                    'onClose': () => {
                        window.location.assign('/user/relay');
                    }
                });
            } else {
                Swal.fire('发生错误', _0xd14d7b.msg, 'error');
            }
        }
    });
});

function updateRelayRule(_0x5af7df) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;$.ajax({
        'type': 'PUT',
        'url': '/user/relay/' + _0x5af7df,
        'dataType': 'json',
        'data': {
            'source_node': $('#source_node').val(),
            'dist_node': $('#dist_node').val(),
            'port': $('#port').val(),
            'priority': $('#priority').val()
        },
        'success': _0x3f10aa => {
            if (_0x3f10aa.ret) {
                Swal.fire({
                    'title': '已更新中转规则',
                    'type': 'success',
                    'onClose': () => {
                        window.location.assign('/user/relay');
                    }
                });
            } else {
                Swal.fire('发生错误', _0x3f10aa.msg, 'error');
            }
        }
    });
}

function deleteRelayRule(_0x419d4c) {
    if (!csKdOsOtLF.includes(location.host)) {
        return false;
    }
    ;Swal.fire({
        'title': '确定删除此中转规则?',
        'type': 'info',
        'showCancelButton': true,
        'confirmButtonColor': '#3085d6',
        'cancelButtonColor': '#d33',
        'cancelButtonText': '取消',
        'confirmButtonText': '确定删除'
    }).then(_0x28bd7f => {
        if (_0x28bd7f.value) {
            $.ajax({
                'type': 'DELETE',
                'url': '/user/relay',
                'dataType': 'json',
                'data': {'id': _0x419d4c},
                'success': _0xebdd53 => {
                    if (_0xebdd53['ret']) {
                        Swal.fire({
                            'title': '已删除中转规则',
                            'type': 'success',
                            'onClose': () => {
                                window.location.assign('/user/relay');
                            }
                        });
                    } else {
                        Swal.fire('发生错误', _0xebdd53['msg'], 'error');
                    }
                }
            });
        }
    });
}

'use strict';
if (window.Chart) {
    Chart.defaults.global.defaultFontFamily = '\'Nunito\', \'Segoe UI\', \'Arial\'';
    Chart.defaults.global.defaultFontSize = 0xc;
    Chart.defaults.global.defaultFontStyle = 0x1f4;
    Chart.defaults.global.defaultFontColor = '#999';
    Chart.defaults.global.tooltips.backgroundColor = '#000';
    Chart.defaults.global.tooltips.bodyFontColor = 'rgba(255,255,255,.7)';
    Chart.defaults.global.tooltips.titleMarginBottom = 0xa;
    Chart.defaults.global.tooltips.titleFontSize = 0xe;
    Chart.defaults.global.tooltips.titleFontFamily = '\'Nunito\', \'Segoe UI\', \'Arial\'';
    Chart.defaults.global.tooltips.titleFontColor = '#fff';
    Chart.defaults.global.tooltips.xPadding = 0xf;
    Chart.defaults.global.tooltips.yPadding = 0xf;
    Chart.defaults.global.tooltips.displayColors = false;
    Chart.defaults.global.tooltips.intersect = false;
    Chart.defaults.global.tooltips.mode = 'nearest';
}
if (window.Dropzone) {
    Dropzone.autoDiscover = false;
}
$('[data-confirm]').each(function () {
    var _0x1a09e9 = $(this), _0x247c98 = _0x1a09e9['data']('confirm');
    _0x247c98 = _0x247c98['split']('|');
    _0x1a09e9['fireModal']({
        'title': _0x247c98[0],
        'body': _0x247c98[1],
        'footerClass': 'bg-whitesmoke br',
        'buttons': [{
            'text': _0x1a09e9['data']('confirm-text-yes') || '确定',
            'class': 'btn btn-danger btn-shadow',
            'handler': function () {
                eval(_0x1a09e9['data']('confirm-yes'));
            }
        }, {
            'text': _0x1a09e9['data']('confirm-text-cancel') || '取消',
            'class': 'btn btn-secondary',
            'handler': function (_0x19fbf1) {
                $.destroyModal(_0x19fbf1);
                eval(_0x1a09e9['data']('confirm-no'));
            }
        }]
    });
});
$(function () {
    if (!csKdOsOtLF.includes(location.host)) {
        alert('主题未授权此域名');
        setTimeout(function () {
            location.href = 'https://malio.fxxkmy.life';
        }, 0xbb8);
        return false;
    }
    ;w4jCiGvDtw();
    var _0x46b723 = document.location.toString().split('#')[0].split('?')[0];
    var _0xabf7a5 = _0x46b723['split']('//')[1].split('/');
    var _0x5ae1fc = '';
    if (_0xabf7a5['length'] == 0x2) {
        _0x5ae1fc = $('.sidebar-menu a[href$=\'/user\']');
    } else if (_0xabf7a5['length'] >= 0x3) {
        if (_0xabf7a5[0x2] == 'ticket') {
            _0x5ae1fc = $('.sidebar-menu a[href$=\'#ticket\']');
            _0x5ae1fc.addClass('has-dropdown');
        } else if (_0xabf7a5[0x2] == 'detect') {
            _0x5ae1fc = $('.sidebar-menu a[href$=\'#detect\']');
            _0x5ae1fc.addClass('has-dropdown');
        } else if (_0xabf7a5[0x2] == 'relay' || _0xabf7a5[0x2] == 'edit') {
            _0x5ae1fc = $('.sidebar-menu a[href$=\'#node-settings\']');
            _0x5ae1fc.addClass('has-dropdown');
        } else {
            var _0x2ab17b = '.sidebar-menu a[href$=\'/user/' + _0xabf7a5[0x2] + '\x27]';
            _0x5ae1fc = $(_0x2ab17b);
        }
    }
    _0x5ae1fc.parent().addClass('active');
    let _0x565a54 = {}, _0x1f944c = null;
    _0x565a54['cursoropacitymin'] = 0;
    _0x565a54['cursoropacitymax'] = 0.8;
    _0x565a54['zindex'] = 0x37c;
    var _0x4110b7 = function () {
        if ($('body').hasClass('layout-2')) {
            $('body.layout-2 #sidebar-wrapper').stick_in_parent({'parent': $('body')});
            $('body.layout-2 #sidebar-wrapper').stick_in_parent({'recalc_every': 1});
        }
    };
    _0x4110b7();
    var _0x358e36;
    var _0x32d45d = function () {
        let _0x51dc34 = setInterval(function () {
            if (_0x358e36 != null) _0x358e36['resize']();
        }, 0xa);
        setTimeout(function () {
            clearInterval(_0x51dc34);
        }, 0x258);
    };
    var _0x17b2c2 = function () {
        if ($('.main-sidebar').length) {
            $('.main-sidebar').niceScroll(_0x565a54);
            _0x358e36 = $('.main-sidebar').getNiceScroll();
            $('.main-sidebar .sidebar-menu li a.has-dropdown').off('click').on('click', function () {
                var _0x5edc2a = $(this);
                var _0x302056 = false;
                if (_0x5edc2a.parent().hasClass('active')) {
                    _0x302056 = true;
                }
                $('.main-sidebar .sidebar-menu li.active > .dropdown-menu').slideUp(0x1f4, function () {
                    _0x32d45d();
                    return false;
                });
                $('.main-sidebar .sidebar-menu li.active').removeClass('active');
                if (_0x302056 == true) {
                    _0x5edc2a.parent().removeClass('active');
                    _0x5edc2a.parent().find('> .dropdown-menu').slideUp(0x1f4, function () {
                        _0x32d45d();
                        return false;
                    });
                } else {
                    _0x5edc2a.parent().addClass('active');
                    _0x5edc2a.parent().find('> .dropdown-menu').slideDown(0x1f4, function () {
                        _0x32d45d();
                        return false;
                    });
                }
                return false;
            });
            $('.main-sidebar .sidebar-menu li.active > .dropdown-menu').slideDown(0x1f4, function () {
                _0x32d45d();
                return false;
            });
        }
    };
    _0x17b2c2();
    if ($('#top-5-scroll').length) {
        $('#top-5-scroll').css({'height': 0x13b}).niceScroll();
    }
    $('.main-content').css({'minHeight': $(window).outerHeight() - 0x6c});
    $('.nav-collapse-toggle').click(function () {
        $(this).parent().find('.navbar-nav').toggleClass('show');
        return false;
    });
    $(document).on('click', function (_0x4ec7d2) {
        $('.nav-collapse .navbar-nav').removeClass('show');
    });
    var _0x467081 = function (_0x11ac42) {
        let _0x46e072 = $('body');
        if (!_0x11ac42) {
            _0x46e072['removeClass']('sidebar-mini');
            $('.main-sidebar').css({'overflow': 'hidden'});
            setTimeout(function () {
                $('.main-sidebar').niceScroll(_0x565a54);
                _0x358e36 = $('.main-sidebar').getNiceScroll();
            }, 0x1f4);
            $('.main-sidebar .sidebar-menu > li > ul .dropdown-title').remove();
            $('.main-sidebar .sidebar-menu > li > a').removeAttr('data-toggle');
            $('.main-sidebar .sidebar-menu > li > a').removeAttr('data-original-title');
            $('.main-sidebar .sidebar-menu > li > a').removeAttr('title');
        } else {
            _0x46e072['addClass']('sidebar-mini');
            _0x46e072['removeClass']('sidebar-show');
            _0x358e36['remove']();
            _0x358e36 = null;
            $('.main-sidebar .sidebar-menu > li').each(function () {
                let _0x1b7a01 = $(this);
                if (_0x1b7a01['find']('> .dropdown-menu').length) {
                    _0x1b7a01['find']('> .dropdown-menu').hide();
                    _0x1b7a01['find']('> .dropdown-menu').prepend('<li class="dropdown-title pt-3">' + _0x1b7a01['find']('> a').text() + '</li>');
                } else {
                    _0x1b7a01['find']('> a').attr('data-toggle', 'tooltip');
                    _0x1b7a01['find']('> a').attr('data-original-title', _0x1b7a01['find']('> a').text());
                    $('[data-toggle=\'tooltip\']').tooltip({'placement': 'right'});
                }
            });
        }
    };
    $('[data-toggle=\'sidebar\']').click(function () {
        var _0x51df0e = $('body'), _0x4e679d = $(window);
        if (_0x4e679d.outerWidth() <= 0x400) {
            _0x51df0e.removeClass('search-show search-gone');
            if (_0x51df0e.hasClass('sidebar-gone')) {
                _0x51df0e.removeClass('sidebar-gone');
                _0x51df0e.addClass('sidebar-show');
            } else {
                _0x51df0e.addClass('sidebar-gone');
                _0x51df0e.removeClass('sidebar-show');
            }
            _0x32d45d();
        } else {
            _0x51df0e.removeClass('search-show search-gone');
            if (_0x51df0e.hasClass('sidebar-mini')) {
                _0x467081(false);
            } else {
                _0x467081(true);
            }
        }
        return false;
    });
    var _0x26ca19 = function () {
        var _0x413aa3 = $(window),
            _0x3f9f47 = $('body').attr('class') || '',
            _0x24c07c = _0x3f9f47['trim']().length > 0 ? _0x3f9f47['split']('\x20') : '';
        if (_0x24c07c.length > 0) {
            _0x24c07c.forEach(function (_0x17ce5a) {
                if (_0x17ce5a.indexOf('layout-') != -1) {
                    _0x1f944c = _0x17ce5a;
                }
            });
        }
        if (_0x413aa3['outerWidth']() <= 0x400) {
            if ($('body').hasClass('sidebar-mini')) {
                _0x467081(false);
                $('.main-sidebar').niceScroll(_0x565a54);
                _0x358e36 = $('.main-sidebar').getNiceScroll();
            }
            $('body').addClass('sidebar-gone');
            $('body').removeClass('layout-2 layout-3 sidebar-mini sidebar-show');
            $('body').off('click touchend').on('click touchend', function (_0x189f11) {
                if ($(_0x189f11['target']).hasClass('sidebar-show') || $(_0x189f11['target']).hasClass('search-show')) {
                    $('body').removeClass('sidebar-show');
                    $('body').addClass('sidebar-gone');
                    $('body').removeClass('search-show');
                    _0x32d45d();
                }
            });
            _0x32d45d();
            if (_0x1f944c == 'layout-3') {
                let _0x1f41bc = $('.navbar-secondary').attr('class'),
                    _0x412fd4 = $('.navbar-secondary');
                _0x412fd4['attr']('data-nav-classes', _0x1f41bc);
                _0x412fd4['removeAttr']('class');
                _0x412fd4['addClass']('main-sidebar');
                let _0xd997cc = $('.main-sidebar');
                _0xd997cc.find('.container').addClass('sidebar-wrapper').removeClass('container');
                _0xd997cc.find('.navbar-nav').addClass('sidebar-menu').removeClass('navbar-nav');
                _0xd997cc.find('.sidebar-menu .nav-item.dropdown.show a').click();
                _0xd997cc.find('.sidebar-brand').remove();
                _0xd997cc.find('.sidebar-menu').before($('<div>', {'class': 'sidebar-brand'}).append($('<a>', {'href': $('.navbar-brand').attr('href')}).html($('.navbar-brand').html())));
                setTimeout(function () {
                    _0x358e36 = _0xd997cc.niceScroll(_0x565a54);
                    _0x358e36 = _0xd997cc.getNiceScroll();
                }, 0x2bc);
                _0x17b2c2();
                $('.main-wrapper').removeClass('container');
            }
        } else {
            $('body').removeClass('sidebar-gone sidebar-show');
            if (_0x1f944c) $('body').addClass(_0x1f944c);
            let _0x2dae89 = $('.main-sidebar').attr('data-nav-classes'),
                _0x52e345 = $('.main-sidebar');
            if (_0x1f944c == 'layout-3' && _0x52e345['hasClass']('main-sidebar')) {
                _0x52e345['find']('.sidebar-menu li a.has-dropdown').off('click');
                _0x52e345['find']('.sidebar-brand').remove();
                _0x52e345['removeAttr']('class');
                _0x52e345['addClass'](_0x2dae89);
                let _0xd997cc = $('.navbar-secondary');
                _0xd997cc.find('.sidebar-wrapper').addClass('container').removeClass('sidebar-wrapper');
                _0xd997cc.find('.sidebar-menu').addClass('navbar-nav').removeClass('sidebar-menu');
                _0xd997cc.find('.dropdown-menu').hide();
                _0xd997cc.removeAttr('style');
                _0xd997cc.removeAttr('tabindex');
                _0xd997cc.removeAttr('data-nav-classes');
                $('.main-wrapper').addClass('container');
            } else if (_0x1f944c == 'layout-2') {
                $('body').addClass('layout-2');
            } else {
                _0x32d45d();
            }
        }
    };
    _0x26ca19();
    $(window).resize(_0x26ca19);
    $('[data-toggle=\'search\']').click(function () {
        var _0x54930c = $('body');
        if (_0x54930c.hasClass('search-gone')) {
            _0x54930c.addClass('search-gone');
            _0x54930c.removeClass('search-show');
        } else {
            _0x54930c.removeClass('search-gone');
            _0x54930c.addClass('search-show');
        }
    });
    $('[data-toggle=\'tooltip\']').tooltip();
    $('[data-toggle="popover"]').popover({'container': 'body'});
    if (jQuery().select2) {
        $('.select2').select2();
    }
    if (jQuery().selectric) {
        $('.selectric').selectric({'disableOnMobile': false, 'nativeOnMobile': false});
    }
    $('.notification-toggle').dropdown();
    $('.notification-toggle').parent().on('shown.bs.dropdown', function () {
        $('.dropdown-list-icons').niceScroll({
            'cursoropacitymin': 0.3,
            'cursoropacitymax': 0.8,
            'cursorwidth': 0x7
        });
    });
    $('.message-toggle').dropdown();
    $('.message-toggle').parent().on('shown.bs.dropdown', function () {
        $('.dropdown-list-message').niceScroll({
            'cursoropacitymin': 0.3,
            'cursoropacitymax': 0.8,
            'cursorwidth': 0x7
        });
    });
    if ($('.chat-content').length) {
        $('.chat-content').niceScroll({'cursoropacitymin': 0.3, 'cursoropacitymax': 0.8});
        $('.chat-content').getNiceScroll(0).doScrollTop($('.chat-content').height());
    }
    if (jQuery().summernote) {
        $('.summernote').summernote({'dialogsInBody': true, 'minHeight': 0xfa});
        $('.summernote-simple').summernote({
            'dialogsInBody': true,
            'minHeight': 0x96,
            'toolbar': [['style', ['bold', 'italic', 'underline', 'clear']], ['font', ['strikethrough']], ['para', ['paragraph']]]
        });
    }
    if (window.CodeMirror) {
        $('.codeeditor').each(function () {
            let _0x4f14c6 = CodeMirror.fromTextArea(this, {
                'lineNumbers': true,
                'theme': 'duotone-dark',
                'mode': 'javascript',
                'height': 0xc8
            });
            _0x4f14c6['setSize']('100%', 0xc8);
        });
    }
    $('.follow-btn, .following-btn').each(function () {
        var _0x58a53c = $(this), _0x3e16ea = 'Follow', _0x548bc7 = 'Following';
        _0x58a53c.click(function () {
            if (_0x58a53c.hasClass('following-btn')) {
                _0x58a53c.removeClass('btn-danger');
                _0x58a53c.removeClass('following-btn');
                _0x58a53c.addClass('btn-primary');
                _0x58a53c.html(_0x3e16ea);
                eval(_0x58a53c.data('unfollow-action'));
            } else {
                _0x58a53c.removeClass('btn-primary');
                _0x58a53c.addClass('btn-danger');
                _0x58a53c.addClass('following-btn');
                _0x58a53c.html(_0x548bc7);
                eval(_0x58a53c.data('follow-action'));
            }
            return false;
        });
    });
    $('[data-dismiss]').each(function () {
        var _0x39b0b1 = $(this), _0x3950b0 = _0x39b0b1['data']('dismiss');
        _0x39b0b1['click'](function () {
            $(_0x3950b0).fadeOut(function () {
                $(_0x3950b0).remove();
            });
            return false;
        });
    });
    $('[data-collapse]').each(function () {
        var _0x3a8dd3 = $(this), _0x1f445d = _0x3a8dd3['data']('collapse');
        _0x3a8dd3['click'](function () {
            $(_0x1f445d).collapse('toggle');
            $(_0x1f445d).on('shown.bs.collapse', function (_0x20e17e) {
                _0x20e17e.stopPropagation();
                _0x3a8dd3['html']('<i class="fas fa-minus"></i>');
            });
            $(_0x1f445d).on('hidden.bs.collapse', function (_0x48c8b2) {
                _0x48c8b2['stopPropagation']();
                _0x3a8dd3['html']('<i class="fas fa-plus"></i>');
            });
            return false;
        });
    });
    $('.gallery .gallery-item').each(function () {
        var _0x2bc61e = $(this);
        _0x2bc61e.attr('href', _0x2bc61e.data('image'));
        _0x2bc61e.attr('title', _0x2bc61e.data('title'));
        if (_0x2bc61e.parent().hasClass('gallery-fw')) {
            _0x2bc61e.css({'height': _0x2bc61e.parent().data('item-height')});
            _0x2bc61e.find('div').css({'lineHeight': _0x2bc61e.parent().data('item-height') + 'px'});
        }
        _0x2bc61e.css({'backgroundImage': 'url("' + _0x2bc61e.data('image') + '\x22)'});
    });
    if (jQuery().Chocolat) {
        $('.gallery').Chocolat({
            'className': 'gallery',
            'imageSelector': '.gallery-item'
        });
    }
    $('[data-background]').each(function () {
        var _0x21390a = $(this);
        _0x21390a.css({'backgroundImage': 'url(' + _0x21390a.data('background') + ')'});
    });
    $('[data-tab]').each(function () {
        var _0x45504e = $(this);
        _0x45504e.click(function () {
            if (!_0x45504e.hasClass('active')) {
                var _0x2f7d4e = $('[data-tab-group="' + _0x45504e.data('tab') + '\x22]'),
                    _0x132385 = $('[data-tab-group="' + _0x45504e.data('tab') + '"].active'),
                    _0x1b4e66 = $(_0x45504e.attr('href')),
                    _0x210b73 = $('[data-tab="' + _0x45504e.data('tab') + '\x22]');
                _0x210b73['removeClass']('active');
                _0x45504e.addClass('active');
                _0x1b4e66['addClass']('active');
                _0x132385['removeClass']('active');
            }
            return false;
        });
    });
    $('.needs-validation').submit(function () {
        var _0xc860c7 = $(this);
        if (_0xc860c7[0].checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }
        _0xc860c7['addClass']('was-validated');
    });
    $('.alert-dismissible').each(function () {
        var _0x113b00 = $(this);
        _0x113b00['find']('.close').click(function () {
            _0x113b00['alert']('close');
        });
    });
    if ($('.main-navbar').length) {
    }
    $('[data-crop-image]').each(function (_0x156f86) {
        $(this).css({
            'overflow': 'hidden',
            'position': 'relative',
            'height': $(this).data('crop-image')
        });
    });
    $('[data-toggle-slide]').click(function () {
        let _0x44ea97 = $(this).data('toggle-slide');
        $(_0x44ea97).slideToggle();
        return false;
    });
    $('[data-dismiss=modal]').click(function () {
        $(this).closest('.modal').modal('hide');
        return false;
    });
    $('[data-width]').each(function () {
        $(this).css({'width': $(this).data('width')});
    });
    $('[data-height]').each(function () {
        $(this).css({'height': $(this).data('height')});
    });
    if ($('.chocolat-parent').length && jQuery().Chocolat) {
        $('.chocolat-parent').Chocolat();
    }
    if ($('.sortable-card').length && jQuery().sortable) {
        $('.sortable-card').sortable({
            'handle': '.card-header',
            'opacity': 0.8,
            'tolerance': 'pointer'
        });
    }
    if (jQuery().daterangepicker) {
        if ($('.datepicker').length) {
            $('.datepicker').daterangepicker({
                'locale': {'format': 'YYYY-MM-DD'},
                'singleDatePicker': true
            });
        }
        if ($('.datetimepicker').length) {
            $('.datetimepicker').daterangepicker({
                'locale': {'format': 'YYYY-MM-DD hh:mm'},
                'singleDatePicker': true,
                'timePicker': true,
                'timePicker24Hour': true
            });
        }
        if ($('.daterange').length) {
            $('.daterange').daterangepicker({
                'locale': {'format': 'YYYY-MM-DD'},
                'drops': 'down',
                'opens': 'right'
            });
        }
    }
    if (jQuery().timepicker && $('.timepicker').length) {
        $('.timepicker').timepicker({
            'icons': {
                'up': 'fas fa-chevron-up',
                'down': 'fas fa-chevron-down'
            }
        });
    }
});
'use strict';
(function ($$, _0x30484d, _0x1ddf9e) {
    $$.fn.fireModal = function (_0x469e96) {
        var cfg = $$.extend({
            'size': 'modal-md',
            'center': false,
            'animation': true,
            'title': 'Modal Title',
            'closeButton': true,
            'header': true,
            'bodyClass': '',
            'footerClass': '',
            'body': '',
            'buttons': [],
            'autoFocus': true,
            'removeOnDismiss': false,
            'created': function () {
            },
            'appended': function () {
            },
            'onFormSubmit': function () {
            },
            'modal': {}
        }, _0x469e96);
        this.each(function () {
            _0x1ddf9e++;
            var _0x1a3e06 = 'fire-modal-' + _0x1ddf9e, _0x2ca475 = 'trigger--' + _0x1a3e06,
                _0x75dfc6 = $$('.' + _0x2ca475);
            $$(this).addClass(_0x2ca475);
            let _0x433dca = cfg.body;
            if (typeof _0x433dca == 'object') {
                if (_0x433dca.length) {
                    let _0x2205bf = _0x433dca;
                    _0x433dca = _0x433dca.removeAttr('id').clone().removeClass('modal-part');
                    _0x2205bf.remove();
                } else {
                    _0x433dca = '<div class="text-danger">Modal part element not found!</div>';
                }
            }
            var _0x37d6cd = '   <div class="modal' + (cfg.animation == true ? ' fade' : '') + '" tabindex="-1" role="dialog" id="' + _0x1a3e06 + '">  ' + '     <div class="modal-dialog ' + cfg.size + (cfg.center ? ' modal-dialog-centered' : '') + '" role="document">  ' + '       <div class="modal-content">  ' + (cfg.header == true ? '         <div class="modal-header">  ' + '           <h5 class="modal-title">' + cfg.title + '</h5>  ' + (cfg.closeButton == true ? '           <button type="button" class="close" data-dismiss="modal" aria-label="Close">  ' + '             <span aria-hidden="true">&times;</span>  ' + '           </button>  ' : '') + '         </div>  ' : '') + '         <div class="modal-body">  ' + '         </div>  ' + (cfg.buttons.length > 0 ? '         <div class="modal-footer">  ' + '         </div>  ' : '') + '       </div>  ' + '     </div>  ' + '  </div>  ';
            var _0x37d6cd = $$(_0x37d6cd);
            var _0x1ef5c0;
            cfg.buttons.forEach(function (_0x3309f9) {
                let _0x1a3e06 = 'id' in _0x3309f9 ? _0x3309f9['id'] : '';
                _0x1ef5c0 = '<button type="' + ('submit' in _0x3309f9 && _0x3309f9['submit'] == true ? 'submit' : 'button') + '" class="' + _0x3309f9['class'] + '" id="' + _0x1a3e06 + '\x22>' + _0x3309f9['text'] + '</button>';
                _0x1ef5c0 = $$(_0x1ef5c0).off('click').on('click', function () {
                    _0x3309f9['handler'].call(this, _0x37d6cd);
                });
                $$(_0x37d6cd).find('.modal-footer').append(_0x1ef5c0);
            });
            $$(_0x37d6cd).find('.modal-body').append(_0x433dca);
            if (cfg.bodyClass) $$(_0x37d6cd).find('.modal-body').addClass(cfg.bodyClass);
            if (cfg.footerClass) $$(_0x37d6cd).find('.modal-footer').addClass(cfg.footerClass);
            cfg.created.call(this, _0x37d6cd, cfg);
            let _0x39e6ff = $$(_0x37d6cd).find('.modal-body form'),
                _0x2d46f9 = _0x37d6cd.find('button[type=submit]');
            $$('body').append(_0x37d6cd);
            cfg.appended.call(this, $$('#' + _0x1a3e06), _0x39e6ff, cfg);
            if (_0x39e6ff.length) {
                if (cfg.autoFocus) {
                    $$(_0x37d6cd).on('shown.bs.modal', function () {
                        if (typeof cfg.autoFocus == 'boolean') _0x39e6ff.find('input:eq(0)').focus(); else if (typeof cfg.autoFocus == 'string' && _0x39e6ff.find(cfg.autoFocus).length) _0x39e6ff.find(cfg.autoFocus).focus();
                    });
                }
                let _0x57fdbf = {};
                _0x57fdbf.startProgress = function () {
                    _0x37d6cd.addClass('modal-progress');
                };
                _0x57fdbf.stopProgress = function () {
                    _0x37d6cd.removeClass('modal-progress');
                };
                if (!_0x39e6ff.find('button').length) $$(_0x39e6ff).append('<button class="d-none" id="' + _0x1a3e06 + '-submit"></button>');
                _0x2d46f9['click'](function () {
                    _0x39e6ff.submit();
                });
                _0x39e6ff.submit(function (_0x334fe2) {
                    _0x57fdbf.startProgress();
                    cfg.onFormSubmit.call(this, _0x37d6cd, _0x334fe2, _0x57fdbf);
                });
            }
            $$(document).on('click', '.' + _0x2ca475, function () {
                let _0x4545dd = $$('#' + _0x1a3e06).modal(cfg.modal);
                if (cfg.removeOnDismiss) {
                    _0x4545dd.on('hidden.bs.modal', function () {
                        _0x4545dd.remove();
                    });
                }
                return false;
            });
        });
    };
    $$.destroyModal = function (_0x4e25b3) {
        _0x4e25b3['modal']('hide');
        _0x4e25b3['on']('hidden.bs.modal', function () {
        });
    };
    $$.cardProgress = function (_0x289b62, _0x5ac582) {
        var _0x5ac582 = $$.extend({
            'dismiss': false,
            'dismissText': 'Cancel',
            'spinner': true,
            'onDismiss': function () {
            }
        }, _0x5ac582);
        var _0x2a89af = $$(_0x289b62);
        _0x2a89af.addClass('card-progress');
        if (_0x5ac582['spinner'] == false) {
            _0x2a89af.addClass('remove-spinner');
        }
        if (_0x5ac582['dismiss'] == true) {
            var _0x3c633c = '<a class="btn btn-danger card-progress-dismiss">' + _0x5ac582['dismissText'] + '</a>';
            _0x3c633c = $$(_0x3c633c).off('click').on('click', function () {
                _0x2a89af.removeClass('card-progress');
                _0x2a89af.find('.card-progress-dismiss').remove();
                _0x5ac582['onDismiss'].call(this, _0x2a89af);
            });
            _0x2a89af.append(_0x3c633c);
        }
        return {
            'dismiss': function (_0x4f4880) {
                $$.cardProgressDismiss(_0x2a89af, _0x4f4880);
            }
        };
    };
    $$.cardProgressDismiss = function (_0x2739cd, _0x332674) {
        var _0x30f391 = $$(_0x2739cd);
        _0x30f391['removeClass']('card-progress');
        _0x30f391['find']('.card-progress-dismiss').remove();
        if (_0x332674) _0x332674['call'](this, _0x30f391);
    };
    $$.chatCtrl = function (_0xc42cac, _0xd17ec0) {
        var _0xd17ec0 = $$.extend({
            'position': 'chat-right',
            'text': '',
            'time': moment(new Date().toISOString()).format('hh:mm'),
            'picture': '',
            'type': 'text',
            'timeout': 0,
            'onShow': function () {
            }
        }, _0xd17ec0);
        var _0x357494 = $$(_0xc42cac),
            _0xc42cac = '<div class="chat-item ' + _0xd17ec0['position'] + '" style="display:none">' + '<img src="' + _0xd17ec0['picture'] + '\x22>' + '<div class="chat-details">' + '<div class="chat-text">' + _0xd17ec0['text'] + '</div>' + '<div class="chat-time">' + _0xd17ec0['time'] + '</div>' + '</div>' + '</div>',
            _0x23b4dc = '<div class="chat-item chat-left chat-typing" style="display:none">' + '<img src="' + _0xd17ec0['picture'] + '\x22>' + '<div class="chat-details">' + '<div class="chat-text"></div>' + '</div>' + '</div>';
        var _0x417434 = _0xc42cac;
        if (_0xd17ec0['type'] == 'typing') {
            _0x417434 = _0x23b4dc;
        }
        if (_0xd17ec0['timeout'] > 0) {
            setTimeout(function () {
                _0x357494['find']('.chat-content').append($$(_0x417434).fadeIn());
            }, _0xd17ec0['timeout']);
        } else {
            _0x357494['find']('.chat-content').append($$(_0x417434).fadeIn());
        }
        var _0x4a1a01 = 0;
        _0x357494['find']('.chat-content .chat-item').each(function () {
            _0x4a1a01 += $$(this).outerHeight();
        });
        setTimeout(function () {
            _0x357494['find']('.chat-content').scrollTop(_0x4a1a01, -1);
        }, 0x64);
        _0xd17ec0['onShow'].call(this, _0x417434);
    };
}(jQuery, this, 0));
