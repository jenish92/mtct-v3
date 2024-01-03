<?php
namespace APITestCode;
$root = getenv("DOCUMENT_ROOT");
require_once('PayU.php');
require_once("config.php");
$payu_obj = new PayU();
$payu_obj->env_prod = 1;
$payu_obj->key = 'hQaC21';
$payu_obj->salt = 'MMJV5Rw7M5AsgMFR0PnUoARp7amPojoJ';


$res = $payu_obj->initGateway();

$donator_fname1 = test_input($_REQUEST["first_name"]);
 if (!preg_match("/^[a-zA-Z ]*$/",$donator_fname1)) {
    $donator_fname = "";
    }
else{
    $donator_fname = $donator_fname1;
    }
    
$donator_lname1 = test_input($_REQUEST["last_name"]);
 if (!preg_match("/^[a-zA-Z ]*$/",$donator_lname1)) {
    $donator_fname = "";
    }
else{
    $donator_lname = $donator_lname1;
    }
    
    
 $donator_mobile1 = test_input($_REQUEST["user_mobile"]);
 if (!preg_match("/^[0-9 ]*$/",$donator_mobile1)) {
     $donator_mobile = "";
 }
 else{
     $donator_mobile = $donator_mobile1;
 }
 $donator_email1 = test_input($_REQUEST["user_email"]);
 if (!filter_var($donator_email1, FILTER_VALIDATE_EMAIL)) {
  $donator_email = "";
}
else{
    $donator_email = $donator_email1;
}
 $donator_address1 = test_input($_REQUEST["user_address"]);
 if(!filter_var($donator_address1, FILTER_SANITIZE_STRING)){
     $donator_address = "";
 }
 else{
     $donator_address = $donator_address1;
 }
 
 $donator_city1 = test_input($_REQUEST["user_city"]);
 if (!preg_match("/^[a-zA-Z ]*$/",$donator_city1)) {
     $donator_city = "";
 }
 else{
     $donator_city = $donator_city1;
 }
 
 $donator_state1 = test_input($_REQUEST["user_state"]);
 if (!preg_match("/^[a-zA-Z ]*$/",$donator_state1)) {
     $donator_state = "";
 }
 else{
     $donator_state = $donator_state1;
 }
 
 $donator_country1 = test_input($_REQUEST["user_country"]);
 if (!preg_match("/^[a-zA-Z ]*$/",$donator_country1)) {
     $donator_country = "";
 }
 else{
     $donator_country = $donator_country1;
 }
 
 $donator_zip1 = test_input($_REQUEST["user_zip"]);
 if (!preg_match("/^[0-9]*$/",$donator_zip1)) {
     $donator_zip = "";
 }
 else{
     $donator_zip = $donator_zip1;
 }
 $donator_dob = $_REQUEST["user_dob"];
 
 $donator_currency = test_input($_REQUEST["user_currency"]);
 
 $donator_put_amount1 = test_input($_REQUEST["user_amount"]);	
 if (!filter_var($donator_put_amount1, FILTER_VALIDATE_INT)) {
     $donator_put_amount = "";
 }
 else{
     $donator_put_amount = $donator_put_amount1;
 }
 
 $donate_amount = test_input($_REQUEST["user_inr"]);

 $donate_for = explode("|",$_REQUEST["user_donate"]);
 
 
 
$online_payu_attempt = $mtct->db_query->query("INSERT INTO mtct_online_payu(donor_first_name, donor_last_name, donor_email, donor_mobile, donor_address, donor_city, donor_state, donor_country, donor_zipcode, donor_dob, donate_for, donor_currency, donor_selected_amount, donate_amount, posted_hash, res_status, key_value, reference_no, transaction_id, mihpayid, mode, addedon, error, error_message) VALUES ('$donator_fname','$donator_lname','$donator_email','$donator_mobile','$donator_address','$donator_city','$donator_state','$donator_country','$donator_zip','$donator_dob','$donate_for[0]','$donator_currency','$donator_put_amount','$donate_amount','','','','','','','','','','')");





	error_log("\n\n\nIINSERT INTO mtct_online_payu(donor_first_name, donor_last_name, donor_email, donor_mobile, donor_address, donor_city, donor_state, donor_country, donor_zipcode, donor_dob, donate_for, donor_currency, donor_selected_amount, donate_amount, posted_hash, res_status, key_value, reference_no, transaction_id, mihpayid, mode, addedon, error, error_message) VALUES ('$donator_fname','$donator_lname','$donator_email','$donator_mobile','$donator_address','$donator_city','$donator_state','$donator_country','$donator_zip','$donator_dob','$donate_for[0]','$donator_currency','$donator_put_amount','$donate_amount','','','','','','','','','','')",3,"attempt.txt");
	if($online_payu_attempt){
		$_SESSION["txPayUId"] = $mtct->getPayUTxID();
		$_SESSION["donate_amount"] = $donate_amount;
	}
	else{
		$_SESSION["txPayUId"] = "";
		$_SESSION["donate_amount"] = $donate_amount;
	}
	
	setcookie("txPayUId", $_SESSION["txPayUId"], time()+3600, "/", "", 1);
	setcookie("donate_amount", $_SESSION["donate_amount"], time()+3600, "/", "", 1);
	setcookie("donor_currency", $donator_currency, time()+3600, "/", "", 1);
	setcookie("donor_amount", $donator_put_amount, time()+3600, "/", "", 1);
	
	$merchantReferenceNo=$mtct->getPayUTxID().'mt'.$donate_for[0]."mt".$donate_amount;
	$orderDesc="Donate for ". $donate_for[1];

$param['txnid'] = $merchantReferenceNo;
$param['firstname'] = $donator_fname;
$param['lastname'] = $donator_lname;
$param['amount'] = $donate_amount;
$param['email'] = $donator_email;
$param['productinfo'] = $orderDesc;
$param['phone'] = $donator_mobile;
$param['address1'] = $donator_address;
$param['city'] = $donator_city;
$param['state'] = $donator_state;
$param['country'] = $donator_country;
$param['zipcode'] = $donator_zip;
//$param['api_version'] = '1';
$param['udf1'] = 'live';

$posted_hash = $payu_obj->setHashKey($param);

$_SESSION["posted_hash"] = $posted_hash;

$pay_u_request = [];
$pay_u_request["donor"] = $param;
$pay_u_request["posted_hash"] = $posted_hash;

error_log(print_r($pay_u_request,true),3,"request.txt");
	

$res = $payu_obj->showPaymentForm($param);


var_dump($_SESSION);
?>