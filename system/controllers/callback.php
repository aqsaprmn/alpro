<?php
$my_server = "localhost";
$my_db = "pinter";
$my_uid = "root";
$my_pwd = "S@l3strack";

$mysqli = new mysqli($my_server, $my_uid, $my_pwd, $my_db);
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect to database. " . $mysqli->connect_error);
}

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

// ambil data JSON
$json = file_get_contents("php://input");
$ts = date('Y-m-d H:i:s');
// ***************************************
$sql = "INSERT INTO tbl_callback (`payload`, `received_timestamp`) VALUES('{$json}', '{$ts}')";
if($result = $mysqli->query($sql)){

} else{
    echo "ERROR: Could not save callback information. " . $mysqli->error;
}
// ***************************************

// ambil callback signature
$callbackSignature = isset($_SERVER['HTTP_X_CALLBACK_SIGNATURE']) ? $_SERVER['HTTP_X_CALLBACK_SIGNATURE'] : '';

// generate signature untuk dicocokkan dengan X-Callback-Signature
$signature = hash_hmac('sha256', $json, $privatekey);

// validasi signature
if( $callbackSignature !== $signature ) {
    echo $callbackSignature;
    echo $signature;
    exit("Invalid Signature"); // signature tidak valid, hentikan proses
}

$data = json_decode($json);
$event = $_SERVER['HTTP_X_CALLBACK_EVENT'];

if( $event == 'payment_status' )
{
    $merchantRef = $data->merchant_ref;
    $totalAmount = (int) $data->total_amount;

    //echo $data->status.'&'.$totalAmount;
    // lakukan validasi status
    if( $data->status == 'PAID' )
    {
        // pembayaran sukses, lanjutkan proses sesuai sistem Anda, contoh:
        $sql = "SELECT * FROM tbl_payments WHERE payment_ref_merchant = '{$merchantRef}' AND status = 'UNPAID' LIMIT 1";
        //echo '.'.$sql;
        if( ($getInvoice = $mysqli->query($sql)) )
        {
            while( $invoice = $getInvoice->fetch_object() )
            {
                // lakukan validasi nominal pembayaran
                if( intval($invoice->amount) == $totalAmount )
                {
                    $update = "UPDATE tbl_payments SET time_callback='{$ts}', callback_status='SUKSES', status = 'PAID', payload_callback='{$json}' WHERE id = {$invoice->id}";
                    $mysqli->query($update) or die($mysqli->error);
                    $mysqli->close();

                    echo json_encode(['success' => true]); // berikan respon yang sesuai
                    exit;
                }
                else                
                {
                    $message="Jumlah pembayaran salah. Seharusnya: ".$invoice->amount." | Jumlah yang dibayar: ".$totalAmount;
                    $update = "UPDATE tbl_payments SET time_callback='{$ts}', callback_status='GAGAL', message = '{$message}', payload_callback='{$json}' WHERE id = {$invoice->id}";
                    $mysqli->query($update) or die($mysqli->error);
                    $mysqli->close();
                    die("Jumlah pembayaran salah. Seharusnya: ".$invoice->amount." | Jumlah yang dibayar: ".$totalAmount);
                }
            }
        }
    }
    elseif( $data->status == 'EXPIRED' )
    {
        // pembayaran kadaluarsa, lanjutkan proses sesuai sistem Anda, contoh:
        $sql = "SELECT * FROM tbl_payments WHERE payment_ref_merchant = '{$merchantRef}' AND status = 'UNPAID' LIMIT 1";
        if( ($getInvoice = $mysqli->query($sql)) )
        {
            while( $invoice = $getInvoice->fetch_object() )
            {
                $update = "UPDATE tbl_payments SET time_callback='{$ts}', callback_status='GAGAL', status = 'EXPIRED', payload_callback='{$json}' WHERE id = {$invoice->id}";
                $mysqli->query($update) or die($mysqli->error);
                $mysqli->close();

                echo json_encode(['success' => true]); // berikan respon yang sesuai
                exit;
            }
        }
    }
    elseif( $data->status == 'FAILED' )
    {
        // pembayaran gagal, lanjutkan proses sesuai sistem Anda, contoh:
        $sql = "SELECT * FROM tbl_payments WHERE payment_ref_merchant = '{$merchantRef}' AND status = 'UNPAID' LIMIT 1";
        if( ($getInvoice = $mysqli->query($sql)) )
        {
            while( $invoice = $getInvoice->fetch_object() )
            {
                $update = "UPDATE tbl_payments SET time_callback='{$ts}', callback_status='GAGAL', status = 'FAILED', payload_callback='{$json}' WHERE id = {$invoice->id}";
                $mysqli->query($update) or die($mysqli->error);
                $mysqli->close();

                echo json_encode(['success' => true]); // berikan respon yang sesuai
                exit;
            }
        }
    }
}

die("No action was taken");
