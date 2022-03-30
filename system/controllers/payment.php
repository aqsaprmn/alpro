<?php
require 'Tripay.php';
//PRODUCTION
//$privatekey = 'egm0P-EWMh3-wl5Ml-3Oexb-EZqBI'; // input your private key to here
//$apikey = 'q5rMVQuOcnbNbKHCMuvvzlcMgDHIr6tYpJObH0Fv'; // input your api key to here
//SANDBOX
$privatekey = 'LTtma-0czeV-91mrF-JiGLK-EID8B'; // input your private key to here
$apikey = 'DEV-aRwCMTWG88nD4SC8e774lK5L8m01HEAufLHnbLdM'; // input your api key to here
$tripay = new Tripay($privatekey,$apikey);

//$merchantCode = 'T5766'; // merchant code production 
$merchantCode = 'T5682'; // merchant code sandbox

_admin();
$ui->assign('_title', 'Setor Pembayaran'.' - '. $config['CompanyName']);
$ui->assign('_system_menu', 'payment');

$action = $routes['1'];
$admin = Admin::_info();
$ui->assign('_admin', $admin);

if($admin['user_type'] != 'Admin' AND $admin['user_type'] != 'Sales'){
	r2(U."dashboard",'e',$_L['Do_Not_Access']);
}

switch ($action) {
    
	case 'agent':
		$ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/prepaid.js"></script>');
        $id = $admin['id'];
		
        $d = ORM::for_table('viw_transaksi')->where('user_id', $id)->where('paid','0')->find_one();
        if($d){
			$p = ORM::for_table('viw_transaksi')->where('user_id', $id)->where('paid', '0')->find_many();
            $sum_to_pay = 0;
            foreach($p as $pd){
                $sum_to_pay+=$pd['setoran'];
            }
            $d['setoran'] = $sum_to_pay;
            $d['status'] = 'Rp. '. number_format($sum_to_pay, 0, ',', '.');
            $ui->assign('d',$d);
			$p = ORM::for_table('tbl_plans')->find_many();
			
            $ui->display('invoice-pembayaran.tpl');
        }else{
            r2(U . 'prepaid/voucher', 'e', 'Agen belum perlu menyetor pembayaran voucher');
        }
    break;
			
    case 'agent-post':
        $user_id = _post('user_id');
        $amount = _post('setoran');
        //$amount = 1000;
        $fullname = _post('fullname');
		//r2(U.'prepaid/voucher-refill/'.$id, 'e', $amount.'-'.$user_id);
        $phonenumber = _post('phonenumber');
        $merchantRef = 'R'.date('YmdHis')._raid(4); // example code transaction in your merchant
        $data = [
            'method'            => 'QRIS',
            'merchant_ref'      => $merchantRef,
            'amount'            => $amount,
            'customer_name'     => $fullname,
            'customer_email'    => 'cs@akses-prima.co.id',
            'customer_phone'    => $phonenumber,
            'order_items'       => [
              [
                'sku'       => 'SKU-0100',
                'name'      => 'Pembayaran Agen',
                'price'     => $amount,
                'quantity'  => 1
              ]
            ],
            'callback_url'      => 'http://103.242.181.10/apipinter/index.php?_route=callback/',
            'return_url'        => U.'prepaid/voucher',
            //'expired_time'      => (time()+(24*60*60)), // 24 jam
            'expired_time'      => (time()+(30*60)), // 24 jam
            'signature'         => hash_hmac('sha256', $merchantCode.$merchantRef.$amount, $privatekey)
          ];

        //SANDBOX create transaction
        $result = $tripay->curlAPI($tripay->URL_transMs,$data,'post');
        //PRODUCTION create transaction
        //$result = $tripay->curlAPI($tripay->URL_transMp,$data,'post');
        //$result='{"success":false,"message":"Ada isinya.","data":{"reference":"Rio Legoh"}}';
        //$result="{\"success\":true,\"message\":\"Ada isinya.\",\"data\":{\"reference\":\"Rio Legoh\"}}";
        //$res1 = (string)$result;
        //$res1 = substr($res1, 1, strlen($res1)-2);
        $res1 = substr($result, 1, strlen($result)-2);
        $res1 = str_replace('\\', '', $res1);
        $j_result =json_decode($res1) ;

        $message = $j_result->message;
        $request_status = '';
        $payment_ref_id = '';
        $payment_ref_merchant = '';
        $status = '';
        if($j_result->success){
            $request_status = 'SUKSES';
            $p_data = $j_result->data;
            $payment_ref_id = $p_data->reference;
            $payment_ref_merchant = $p_data->merchant_ref;
            $status = $p_data->status;
            $channel = $p_data->payment_method;
        } else {
            $request_status = 'GAGAL';
        }

        $d = ORM::for_table('tbl_payments')->create();
        $d->user_id = $user_id;
        $d->request_status = $request_status;
        $d->message = $message;
        $d->status = $status;
        $d->payment_ref_id = $payment_ref_id;
        $d->payment_ref_merchant = $payment_ref_merchant;
        $d->amount = $amount;
        $d->channel = $channel;
        $d->time_request = date('Y-m-d H:i:s');        
        $d->payload_request = $res1;
        $d->save();
        
        //r2(U.'prepaid/voucher-refill/'.$id, 'e', $res1.'-'.$user_id);

        if($request_status == 'SUKSES'){
            r2('https://tripay.co.id/checkout/'.$payment_ref_id, 's', '');
        }else{
            r2(U . 'prepaid/voucher', 'e', 'Pembayaran gagal. Silakan hubungi customer service.');
        }
    break;
		
    default:
        echo 'Fitur belum tersedia';
}