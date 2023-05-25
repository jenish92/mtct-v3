<?php
$root = getenv("DOCUMENT_ROOT");
include("$root/lib/pg/worldline/AWLMEAPI.php");
include_once("$root/lib/pg/worldline/pgConfig.php");

 $donator_name1 = test_input($_REQUEST["user_name"]);
 if (!preg_match("/^[a-zA-Z ]*$/",$donator_name1)) {
    $donator_name = "";
    }
else{
    $donator_name = $donator_name1;
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
 $donator_dob = $_REQUEST["user_dob"];
 $donate_amount1 = test_input($_REQUEST["user_amount"]);	
 if (!filter_var($donate_amount1, FILTER_VALIDATE_INT)) {
     $donate_amount = "";
 }
 else{
     $donate_amount = $donate_amount1;
 }

 $donate_for = explode("|",$_REQUEST["user_donate"]);
 
 
if($donator_name == "" || $donator_mobile == "" || $donator_email == "" || $donator_address == "" || $donator_city == "" || $donate_amount == ""){
    header("Location: $redirectRoot/donations-fed.php?er=fields");
    die();
}

$online_fed_attempt = $mtct->db_query->query("INSERT INTO mtct_online_fed(tx_id, donor_name, donor_email, donor_phone, donor_address, donor_city, donor_country, donor_dob, donate_for, currency_code, donate_amount, merchant_reference_no, transaction_id, transaction_type_code, res_status,resAmount, originalAmount, exponent, pg_error_code, pg_error_detail,pg_error_msg, card_type, card_brand, created_date, updated_date) VALUES (NULL,'$donator_name','$donator_email','$donator_mobile','$donator_address','$donator_city','','$donator_dob','$donate_for[0]','".currencyType."','$donate_amount','','','','','','','','','','','','','$mtct->timeNow','0001-01-01 00:00:00')");
	
	error_log("\n\n\nINSERT INTO mtct_online_fed(tx_id, donor_name, donor_email, donor_phone, donor_address, donor_city, donor_country, donor_dob, donate_for, currency_code, donate_amount, merchant_reference_no, transaction_id, transaction_type_code, res_status,resAmount, originalAmount, exponent, pg_error_code, pg_error_detail,pg_error_msg, card_type, card_brand, created_date, updated_date) VALUES (NULL,'$donator_name','$donator_email','$donator_mobile','$donator_address','$donator_city','','$donator_dob','$donate_for[0]','".currencyType."','$donate_amount','','','','','','','','','','','','','$mtct->timeNow','0001-01-01 00:00:00')",3,"attempt.txt");
	if($online_fed_attempt){
		$_SESSION["txFedID"] = $mtct->getFedTxID();
		$_SESSION["donate_amount"] = $donate_amount;
	}
	else{
		$_SESSION["txFedID"] = "";
		$_SESSION["donate_amount"] = $donate_amount;
	}
	
	setcookie("txFedID", $_SESSION["txFedID"], time()+3600, "/", "", 1);
	setcookie("donate_amount", $_SESSION["donate_amount"], time()+3600, "/", "", 1);
	
	$merchantReferenceNo=$mtct->getFedTxID().'mt'.$donate_for[0]."mt".$donate_amount;
	$orderDesc="Donate for ". $donate_for[1];


	$obj = new AWLMEAPI();

	$reqMsgDTO = new ReqMsgDTO();

	$reqMsgDTO->setMid(mid);
	$reqMsgDTO->setOrderId($merchantReferenceNo);
	$reqMsgDTO->setTrnAmt($donate_amount*100);
	$reqMsgDTO->setTrnRemarks($orderDesc);
	$reqMsgDTO->setMeTransReqType(trnType);
	$reqMsgDTO->setEnckey(encKey);
	$reqMsgDTO->setTrnCurrency(currencyType);
	$reqMsgDTO->setResponseUrl(returnURL);
	$reqMsgDTO->setAddField1($donator_name);
	$reqMsgDTO->setAddField2($donator_mobile);
	$reqMsgDTO->setAddField3($donator_email);
	
	$merchantRequest = "";
	
	$reqMsgDTO = $obj->generateTrnReqMsg($reqMsgDTO);
	
	if ($reqMsgDTO->getStatusDesc() == "Success"){
		$merchantRequest = $reqMsgDTO->getReqMsg();
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="<?php echo requestURL; ?>" method="post" name="txnSubmitFrm">
	<h4 align="center">Redirecting To Payment Please Wait..</h4>
	<h4 align="center">Please Do Not Press Back Button OR Refresh Page</h4>
	<input type="hidden" size="200" name="merchantRequest" id="merchantRequest" value="<?php echo $merchantRequest; ?>"  />
	<input type="hidden" name="MID" id="MID" value="<?php echo $reqMsgDTO->getMid(); ?>"/>
</form>
<script  type="text/javascript">
	document.txnSubmitFrm.submit();
</script>
</body>
</html>