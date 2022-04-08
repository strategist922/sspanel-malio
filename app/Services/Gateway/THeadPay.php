<?php
/**
 * Created by PhpStorm.
 * User: tonyzou
 * Date: 2018/9/24
 * Time: 下午9:24
 */

namespace App\Services\Gateway;

use App\Services\Auth;
use App\Models\Paylist;
use App\Services\View;
use App\Services\Config;
use Exception;

class THeadPay extends AbstractPayment
{
    protected $sdk;

    public function __construct()
    {
        $this->sdk = new THeadPaySDK([
            'theadpay_url'      => Config::get('theadpay_url'),
            'theadpay_mchid'    => Config::get('theadpay_mchid'),
            'theadpay_key'      => Config::get('theadpay_key'),
        ]);
    }


    public function purchase($request, $response, $args)
    {
        $amount = (int)$request->getParam('amount');
        $user = Auth::getUser();
        if ($amount <= 0) {
            return $response->withJson([
                'ret' => 0,
                'msg' => '订单金额错误：' . $amount
            ]);
        }

        $pl = new Paylist();
        $pl->userid     = $user->id;
        $pl->tradeno    = self::generateGuid();
        $pl->total      = $amount;
        $pl->save();

        try {
            $res = $this->sdk->pay([
                'trade_no'      => $pl->tradeno,
                'total_fee'     => $pl->total*100,
                'notify_url'    => 'https://'.$_SERVER['HTTP_HOST'].'/payment/notify',
                'return_url'    => 'https://'.$_SERVER['HTTP_HOST'].'/user/payment/return?tradeno='.$pl->tradeno,
            ]);

            return $response->withJson([
                'ret'       => 1,
                'qrcode'    => $res['code_url'],
                'amount'    => $pl->total,
                'pid'       => $pl->tradeno,
            ]);
        } catch (Exception $e) {
            return $response->withJson([
                'ret' => 0,
                'msg' => '创建支付订单错误：' . $e->getMessage(),
            ]);
        }
    }

    public function purchase_maliopay($type, $price, $shopid=null)
    {
        $amount = $price;
        $user = Auth::getUser();

        $pl = new Paylist();
        $pl->userid = $user->id;
        $pl->tradeno = self::generateGuid();
        $pl->total = $amount;
        if ($shopid != 0) {
            $pl->shopid = $shopid;
        }
        $pl->save();

        try {
            $res = $this->sdk->pay([
                'trade_no'      => $pl->tradeno,
                'total_fee'     => $pl->total*100,
                'notify_url'    => 'https://'.$_SERVER['HTTP_HOST'].'/payment/notify/theadpay',
                'return_url'    => 'https://'.$_SERVER['HTTP_HOST'].'/user/payment/return?tradeno=' . $pl->tradeno,
            ]);

            return json_encode([
                'ret' => 1,
                'type' => 'url',
                'tradeno' => $pl->tradeno,
                'url' => $res['redirect_url'],
            ]);
        } catch (Exception $e) {
            return json_encode([
                'ret' => 0,
                'msg' => '创建支付订单错误：' . $e->getMessage(),
            ]);
        }
    }

    public function notify($request, $response, $args)
    {
        $pid = $this->verifyAndGetPid();
        $this->postPayment($pid, 'THeadPay ' . $pid);
        die('success'); //The response should be 'success' only
    }

    public function verifyAndGetPid() {
        $inputString = file_get_contents('php://input', 'r');
        $inputStripped = str_replace(array("\r", "\n", "\t", "\v"), '', $inputString);
        $params = json_decode($inputStripped, true); //convert JSON into array

        if ($this->sdk->verify($params)) {
            return $params['out_trade_no'];
        }
        die('fail');
    }

    public function getPurchaseHTML()
    {
        return 0;
    }

    public function getReturnHTML($request, $response, $args)
    {
        return 0;
    }

    public function getStatus($request, $response, $args)
    {
        $p = Paylist::where('tradeno', $_POST['pid'])->first();
        return $response->withJson([
            'ret'       => 1,
            'result'    => $p->status,
        ]);
    }
}
