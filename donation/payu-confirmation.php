<?php
namespace APITestCode;
$root = getenv("DOCUMENT_ROOT");
require_once('payu/PayU.php');
require_once('payu/payu-mtct.php');
$payu_obj = new PayU();
$payu_obj->env_prod = 1;
$payu_obj->key = 'hQaC21';
$payu_obj->salt = 'MMJV5Rw7M5AsgMFR0PnUoARp7amPojoJ';

define("encKey","8fcd52e5d14f877d47b1424a44c1a130");
define("currencyType","INR");
define("trnType","S");

$res = $payu_obj->initGateway();





$ppp = new payu_pg();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $ppp->getDonorDetails();
    $posted_hash = $payu_obj->setHashKey($param);

    $_SESSION["posted_hash"] = $posted_hash;

    $pay_u_request = [];
    $pay_u_request["donor"] = $param;
    $pay_u_request["posted_hash"] = $posted_hash;

    error_log(print_r($pay_u_request,true),3,"request.txt");
    $res = $payu_obj->showPaymentForm($param);
}



var_dump($_SESSION);
?>