<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE_NAME', 'ecommerceapp');

define('CURRENCY', '&#8363;');

$vnp_TmnCode = "Y4U88XFK"; //Mã website tại VNPAY 
$vnp_HashSecret = "DTHXNFNBUMNKFKQOZVHTXUXNUQUUXMTV"; //Chuỗi bí mật
$vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost:8080/vnpay_php/vnpay_return.php";

?>