<?php
$root = getenv("DOCUMENT_ROOT");
include 'worldline/AWLMEAPI.php';
include_once '../master/header.php';
include 'worldline/worldline-config.php';
$obj = new AWLMEAPI();
$resMsgDTO = new ResMsgDTO();
$reqMsgDTO = new ReqMsgDTO();
$responseMerchant = $_REQUEST['merchantResponse'];
$response = $obj->parseTrnResMsg( $responseMerchant , encKey );
error_log("\n\n\n$response",3,"WorldLineResponse.txt");
$pgReferenceNo = $response->getPgMeTrnRefNo();
$rMerchantReferenceNo = $response->getOrderId(); 
$getResponseKeys = explode("mt",$rMerchantReferenceNo);
$rOrderId = $getResponseKeys[0];
$match_order_id = ($rOrderId == $_COOKIE["txFedID"]) ? 1 : 2;
$rDonateFor = $getResponseKeys[1];
$rGetAmount = $getResponseKeys[2];
$rAmount = $response->getTrnAmt()/100;
$status = $response->getStatusCode();
$description = $response->getStatusDesc();
$rTrnDate = $response->getTrnReqDate();
$bankResponseCode = $response->getResponseCode();
$bankRRN = $response->getRrn();
$bankAuth = $response->getAuthZCode();
$rName = $response->getAddField1();
$rMobile = $response->getAddField2();
$rEmail = $response->getAddField3();
$res_perform = "";
$res_error_code = 0;
$donorFor = $metaDetails->DonationList($rDonateFor);
$activated = $metaDetails->getWorldlineActivated($pgReferenceNo);
$get_donor = $metaDetails->getWorldlineDonors($rOrderId);
$worldlineRespponseToQuery = [];
        $worldlineRespponseToQuery["merch_ref_no"] = $rMerchantReferenceNo;
        $worldlineRespponseToQuery["pg_ref_no"] = $pgReferenceNo;
        $worldlineRespponseToQuery["res_perform"] = $res_perform;
        $worldlineRespponseToQuery["status"] = $status;
        $worldlineRespponseToQuery["amount"] = $rAmount;
        $worldlineRespponseToQuery["r_amount"] = $rGetAmount;
        $worldlineRespponseToQuery["description"] = $description;
        $worldlineRespponseToQuery["r_order_id"] = $rOrderId;
        $worldlineRespponseToQuery["donate_for"] = $rDonateFor;

        $worldlineRespponseToQuery["r_amount_r"] = (is_null($rAmount_r)) ? "" : $rAmount_r;
        $worldlineRespponseToQuery["res_exponent"] = (is_null($res_exponent)) ? "" : $res_exponent;
        $worldlineRespponseToQuery["res_error_code"] = (is_null($res_error_code)) ? "" : $res_error_code;


	if($activated == 2 && $match_order_id == 1 && $rAmount == $_COOKIE["donate_amount"] && $status == "S")
	{
		//Success
		$pg_fed_res = $metaDetails->WorldlineConfirmationResponse($worldlineRespponseToQuery,1);
		
		$setDonor_transaction = $metaDetails->DonationEntry($get_donor,$rDonateFor,$rAmount,$pgReferenceNo);
        
        if($setDonor_transaction){
		
		$mail_content = "<table border='1' cellpadding='10' cellspacing='2' width='560' align='center' style='border-collapse: collapse;'
                    bordercolor='#797979' bgcolor='#eeeeee' height='500'>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Donated by :</span> 
                        </td>
                        <td width='300'>
                            <span>$get_donor[0]</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Email:</span> 
                        </td>
                        <td width='300'>
                            <span>$get_donor[1]</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Mobile:</span> 
                        </td>
                        <td width='300'>
                            <span>$get_donor[2]</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Address :</span> 
                        </td>
                        <td width='300'>
                            <span> $get_donor[3] </span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>City / Province :</span> 
                        </td>
                        <td width='300'>
                            <span> $get_donor[4] </span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>PAN:</span> 
                        </td>
                        <td width='300'>
                            <span>$get_donor[6]</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>DOB:</span> 
                        </td>
                        <td width='300'>
                            <span>$get_donor[7]</span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td width='250'>
                            <span class='style5'>Support towards :</span> 
                        </td>
                        <td width='300'>
                            <span >$donorFor</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Amount :</span> 
                        </td>
                        <td width='300'>
                            $rAmount
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Transaction Id :</span> 
                        </td>
                        <td width='300'>
                            $pgReferenceNo
                        </td>
                    </tr>
                </table><p align='center' class='style6'>
                    Thank you for your generosity. We appreciate your support!
                </p>";
            
            $response_message="Transaction Success";
            
            $metaDetails->mtctEmails($status,$response_message,$mail_content,$get_donor[1]);
            
            }
		
	}
	
	else if($activated == 2 && $match_order_id == 1 && $rAmount == $_COOKIE["donate_amount"] && $status != "S"){
	    //Failed
	    
	    $pg_fed_res = $metaDetails->WorldlineConfirmationResponse($worldlineRespponseToQuery,1);
	    $response_message="Transaction Failed";
	    
	    $mail_content = "<table border='1' cellpadding='10' cellspacing='2' width='560' align='center' style='border-collapse: collapse;'
                    bordercolor='#797979' bgcolor='#eeeeee' height='500'>
                    <tr>
                    <td width='250'>
                            <span class='style5'>Status:</span> 
                        </td>
                        <td width='300'>
                            <span>$description</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Name :</span> 
                        </td>
                        <td width='300'>
                            <span>$get_donor[0]</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Email:</span> 
                        </td>
                        <td width='300'>
                            <span>$get_donor[1]</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Mobile:</span> 
                        </td>
                        <td width='300'>
                            <span>$get_donor[2]</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Address :</span> 
                        </td>
                        <td width='300'>
                            <span> $get_donor[3] </span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>City / Province :</span> 
                        </td>
                        <td width='300'>
                            <span> $get_donor[4] </span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>PAN:</span> 
                        </td>
                        <td width='300'>
                            <span>$get_donor[6]</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>DOB:</span> 
                        </td>
                        <td width='300'>
                            <span>$get_donor[7]</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Support towards :</span> 
                        </td>
                        <td width='300'>
                            <span >$donorFor</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Amount :</span> 
                        </td>
                        <td width='300'>
                            $rAmount
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Transaction Id :</span> 
                        </td>
                        <td width='300'>
                            $pgReferenceNo
                        </td>
                    </tr>
                </table>";
        
        $metaDetails->mtctEmails($status,$response_message,$mail_content,$get_donor[1]);
	}
	
	else if($match_order_id == 2){
	    //Order ID Mismatch
	     $metaDetails->WorldlineConfirmationResponse($worldlineRespponseToQuery,2);
	    
	    $response_message="Transaction Mismatched";
	    $mail_content = "<table border='1' cellpadding='10' cellspacing='2' width='560' align='center' style='border-collapse: collapse;'
                    bordercolor='#797979' bgcolor='#eeeeee' height='500'>
                    <tr>
                    <td width='250'>
                            <span class='style5'>Status:</span> 
                        </td>
                        <td width='300'>
                            <span>$description</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Name :</span> 
                        </td>
                        <td width='300'>
                            <span>-</span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td width='250'>
                            <span class='style5'>Email:</span> 
                        </td>
                        <td width='300'>
                            <span>-</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Mobile:</span> 
                        </td>
                        <td width='300'>
                            <span>-</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Address :</span> 
                        </td>
                        <td width='300'>
                            <span> - </span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>City / Province :</span> 
                        </td>
                        <td width='300'>
                            <span> - </span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td width='250'>
                            <span class='style5'>Support towards :</span> 
                        </td>
                        <td width='300'>
                            <span >$donorFor</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Amount :</span> 
                        </td>
                        <td width='300'>
                            $rAmount
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Transaction Id :</span> 
                        </td>
                        <td width='300'>
                            $pgReferenceNo
                        </td>
                    </tr>
                </table>";
        
        $metaDetails->mtctEmails($status,$response_message,$mail_content,$get_donor[1]);
	}
	
	else if($activated == 1){
	    //Already Executed
        $response_message = "Transaction Already Executed";
	    $mail_content = "<table border='1' cellpadding='10' cellspacing='2' width='560' align='center' style='border-collapse: collapse;'
                    bordercolor='#797979' bgcolor='#eeeeee' height='500'>
        <tr>
                        <td width='250'>
                            <span class='style5'>Transaction Id :</span> 
                        </td>
                        <td width='300'>
                            $pgReferenceNo
                        </td>
                    </tr>
                    </table>";
        
        $metaDetails->mtctEmails($status,$response_message,$mail_content,$get_donor[1]);
	}
	
	else{
        
        $response_message = "Transaction Failed";
		$mail_content = "<table border='1' cellpadding='10' cellspacing='2' width='560' align='center' style='border-collapse: collapse;'
                    bordercolor='#797979' bgcolor='#eeeeee' height='500'>
        <tr>
                        <td width='250' colspan='2'>
                            
                            $description
                        </td>
                    </tr>
                    </table>";
        
        $metaDetails->mtctEmails($status,$response_message,$mail_content,$get_donor[1]);
	}
	
	setcookie("txFedID", "", time()-3600, "/", "", 1);
	setcookie("donate_amount","", time()-3600, "/", "", 1);
?>

<div class="container">
   <div class="row pt-5 pb-5">
      <div class="col-lg-12 col-md-12 col-12">
         <h2 class="text-center">Transaction <span class="cus-color1">Response</span></h2>
          
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <center>
                    <tr>
            <td bgcolor='yellow' height='50'>
                <p align='center'>
                    <span class='style8'>
                        <font color='red'><b><?php echo $response_message; ?></b></font>
                    </span></p>
            </td>
        </tr>
                    
                    
                    <?php echo $mail_content; ?></center>	    
            </div>
          </div>
      </div>
    </div>
</div>
<?php include_once '../master/footer.php'; ?>