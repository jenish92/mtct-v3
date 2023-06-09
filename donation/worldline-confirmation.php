<?php
$root = getenv("DOCUMENT_ROOT");
include 'worldline/AWLMEAPI.php';
include_once '../master/config.php';

$donator = array();

 $donator_name1 = $metaDetails->BasicValidation($_REQUEST["user_name"]);
 if (!preg_match("/^[a-zA-Z ]*$/",$donator_name1)) {
    $donator["name"] = "";
    }
else{
    $donator["name"] = $donator_name1;
    }
 $donator_mobile1 = $metaDetails->BasicValidation($_REQUEST["user_mobile"]);
 if (!preg_match("/^[0-9 ]*$/",$donator_mobile1)) {
     $donator["mobile"] = "";
 }
 else{
     $donator["mobile"] = $donator_mobile1;
 }
 $donator_email1 = $metaDetails->BasicValidation($_REQUEST["user_email"]);
 if (!filter_var($donator_email1, FILTER_VALIDATE_EMAIL)) {
  $donator["email"] = "";
}
else{
    $donator["mobile"] = $donator_email1;
}
 $donator_address1 = $metaDetails->BasicValidation($_REQUEST["user_address"]);
 if(!filter_var($donator_address1, FILTER_SANITIZE_STRING)){
     $donator["address"] = "";
 }
 else{
     $donator["address"] = $donator_address1;
 }
 
 $donator_city1 = $metaDetails->BasicValidation($_REQUEST["user_city"]);
 if (!preg_match("/^[a-zA-Z ]*$/",$donator_city1)) {
     $donator["city"] = "";
 }
 else{
     $donator["city"] = $donator_city1;
 }
 $donator["dob"] = $_REQUEST["user_dob"];
 $donate_amount1 = $metaDetails->BasicValidation($_REQUEST["user_amount"]);	
 if (!filter_var($donate_amount1, FILTER_VALIDATE_INT)) {
     $donator["amount"] = "";
 }
 else{
     $donator["amount"] = $donate_amount1;
 }

 $donator["for"] = explode("|",$_REQUEST["user_donate"]);
 
 
if($donator["name"] == "" || $donator["mobile"] == "" || $donator["email"] == "" || $donator["address"] == "" || $donator["city"] == "" || $donate["amount"] == ""){
    header("Location: ".$base_url."donation/index.php?er=fields");
    die();
}

$online_fed_attempt = $metaDetails->WorldlineConfirmation($donator);
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

var_dump($reqMsgDTO);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="<?php echo $requestURL; ?>" method="post" name="txnSubmitFrm">
	<h4 align="center">Redirecting To Payment Please Wait..</h4>
	<h4 align="center">Please Do Not Press Back Button OR Refresh Page</h4>
	<input type="text" size="200" name="merchantRequest" id="merchantRequest" value="<?php echo $merchantRequest; ?>"  />
	<input type="text" name="MID" id="MID" value="<?php echo $reqMsgDTO->getMid(); ?>"/>
</form>
<script  type="text/javascript">
	//document.txnSubmitFrm.submit();
</script>
</body>
</html>