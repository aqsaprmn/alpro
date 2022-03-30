<?php
/*
require 'lib/Tripay.php';

$privatekey = 'vbnhG-2Y3YA-TGslR-BDQcS-BXkmR'; // input your private key to here
$apikey = 'DEV-TPUfjAledP6DTePwcynHfzOUWrNhMKSPVIXClugz'; // input your api key to here
$tripay = new Tripay($privatekey,$apikey);
*/

//echo $tripay->callBack();
$myJson=new \stdClass();
$myJson->success = true;
$result = json_encode($myJson);
echo $result;


/*
* Example Response
*
{
  "success": true,
  "data": {
    "reference": "DEV-T16240000002822I4QCZ",
    "merchant_ref": "202012180001",
    "payment_method": "Alfamart",
    "payment_method_code": "ALFAMART",
    "amount_received": "1000000",
    "fee": "1250",
    "total_amount": "1001250",
    "is_customer_fee": "1",
    "is_closed_payment": 1,
    "status": "PAID",
    "paid_at": "1608390880",
    "note": "Testing yuks"
  },
  "event": "payment_status"
}
*/
