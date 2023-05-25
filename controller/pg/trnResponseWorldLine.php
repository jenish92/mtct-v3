<?php
$root = getenv("DOCUMENT_ROOT");
include("$root/lib/pg/worldline/AWLMEAPI.php");
include_once("$root/lib/pg/worldline/pgConfig.php");
$obj = new AWLMEAPI();
$resMsgDTO = new ResMsgDTO();




	$reqMsgDTO = new ReqMsgDTO();
	$enc_key = "8fcd52e5d14f877d47b1424a44c1a130";
	
	$responseMerchant = $_REQUEST['merchantResponse'];
	
	
	
	$response = $obj->parseTrnResMsg( $responseMerchant , $enc_key );
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
			
			$supportingTowards = $mtct->supportTowardsList();
        	$donorFor = $supportingTowards[$rDonateFor];

			
		
			$getDonor_details = $mtct->db_query->query("SELECT donor_name, donor_email, donor_phone, donor_address, donor_city, donor_country, donor_dob FROM mtct_online_fed WHERE tx_id = '$rOrderId'");
	$get_donor = $getDonor_details->fetch_row();

$getFed_Tx = $mtct->db_query->query("SELECT transaction_id FROM mtct_online_fed WHERE transaction_id = '$rOrderId'");

	$activated = ($getFed_Tx->num_rows == 0) ? 2 : 1 ;


	if($activated == 2 && $match_order_id == 1 && $rAmount == $_COOKIE["donate_amount"] && $status == "S")
	{
		//Success
		$pg_fed_res = $mtct->db_query->query("UPDATE mtct_online_fed SET merchant_reference_no='$rMerchantReferenceNo',transaction_id='$pgReferenceNo',transaction_type_code='$res_perform',res_status='$status',resAmount='$rAmount',originalAmount='$rGetAmount',pg_error_detail='$description',pg_error_msg='',card_type='',card_brand='',updated_date=NOW() WHERE tx_id = '$rOrderId' AND donate_for = '$rDonateFor'");

		
		
		
		$setDonor_transaction = $mtct->db_query->query("INSERT INTO mtct_donations(donor_name, donor_email, donor_phone, donor_address, donor_city, donor_country, donate_towards, donated_amount, donate_mode, transaction_number, donor_dob, donated_date, created_date) VALUES ('$get_donor[0]','$get_donor[1]','$get_donor[2]','$get_donor[3]','$get_donor[4]','$get_donor[5]','$rDonateFor','$rAmount','1','$pgReferenceNo','$get_donor[6]',NOW(),NOW())");
		
		$response_Display = "<table border='5' cellpadding='0' cellspacing='0' width='600' align='center' style='border-collapse: collapse; margin-bottom:50px'
        bordercolor='#003366' bgcolor='#acbdc6' height='500'>
        <tr>
            <td bgcolor='#000066' height='60'>
                <p align='center' class='res-head' style='color:white !important;font-size:18px !important'>
                    Donation Receipt</p>
            </td>
        </tr>
        <tr>
            <td bgcolor='#FFFFFF'>
                <center>
                    <img src='https://www.motherteresacharities.org/external/images/logoM.png' alt='logo' /></center>
                <p align='center' class='style9'>
                    43, Nelson Manickam Road, Choolaimedu,Chennai-600094.India.
                    <br />
                    Ph: +91 44 23743883,+91 44 23742399, Mobile: +91 8939300227
                    <br />
                    Email: mtct1997@yahoo.co.in,mtct1997@gmail.com<br />Web: www.mtct.info, www.motherteresacharities.org, www.motherteresatrust.org</p>
            </td>
        </tr>
        <tr>
            <td bgcolor='yellow' height='50'>
                <p align='center'>
                    <span class='style8'>
                        <font color='green'><b>Transaction Successfull</b></font>
                    </span></p>
            </td>
        </tr>
        <tr>
            <td>
                <br />
                <table border='1' cellpadding='10' cellspacing='2' width='560' align='center' style='border-collapse: collapse;'
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
                </table>
                <p align='center' class='style6'>
                    Thank you for your generosity. We appreciate your support!
                </p>
                <p align='center' class='style9'>
                    NB:Donations are exempted from Income Tax U/S 80G of Income Tax Act 1961</br> vide
                    DIT (E) No. 2(16)/98-99 dt. 1.5.2009 . PAN No : AABTM0430B
                </p>
            </td>
        </tr>
    </table>
";
		
	}
	
	else if($activated == 2 && $match_order_id == 1 && $rAmount == $_COOKIE["donate_amount"] && $status != "S"){
	    //Failed
	    
	    $pg_fed_res = $mtct->db_query->query("UPDATE mtct_online_fed SET merchant_reference_no='$rMerchantReferenceNo',transaction_id='$pgReferenceNo',transaction_type_code='$res_perform',res_status='$status',resAmount='$rAmount',originalAmount='$rGetAmount',pg_error_detail='$description',pg_error_msg='',card_type='',card_brand='',updated_date=NOW() WHERE tx_id = '$rOrderId' AND donate_for = '$rDonateFor'");
	    
	    
	    $response_Display = "<table border='5' cellpadding='0' cellspacing='0' width='600' align='center' style='border-collapse: collapse; margin-bottom:50px'
        bordercolor='#003366' bgcolor='#acbdc6' height='500'>
        <tr>
            <td bgcolor='#000066' height='60'>
                <p align='center' class='res-head' style='color:white !important;font-size:18px !important'>
                    Transaction Status</p>
            </td>
        </tr>
        <tr>
            <td bgcolor='#FFFFFF'>
                <center>
                    <img src='https://www.motherteresacharities.org/external/images/logoM.png' alt='logo' /></center>
                <p align='center' class='style9'>
                    43, Nelson Manickam Road, Choolaimedu,Chennai-600094.India.
                    <br />
                    Ph: +91 44 23743883,+91 44 23742399, Mobile: +91 8939300227
                    <br />
                    Email: mtct1997@yahoo.co.in,mtct1997@gmail.com<br />Web: www.mtct.info, www.motherteresacharities.org, www.motherteresatrust.org</p>
            </td>
        </tr>
        <tr>
            <td bgcolor='yellow' height='50'>
                <p align='center'>
                    <span class='style8'>
                        <font color='red'><b>Transaction Failed</b></font>
                    </span></p>
            </td>
        </tr>
        <tr>
            <td>
                <br />
                <table border='1' cellpadding='10' cellspacing='2' width='560' align='center' style='border-collapse: collapse;'
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
                </table>
                
                <p align='center' class='style9'>
                    NB:Donations are exempted from Income Tax U/S 80G of Income Tax Act 1961</br> vide
                    DIT (E) No. 2(16)/98-99 dt. 1.5.2009 . PAN No : AABTM0430B
                </p>
            </td>
        </tr>
    </table>
";
	}
	
	else if($match_order_id == 2){
	    //Order ID Mismatch
	    $mtct->db_query->query("INSERT INTO mtct_online_fed(donor_name, donor_email, donor_phone, donor_address, donor_city, donor_country, donor_dob, donate_for, currency_code, donate_amount, merchant_reference_no, transaction_id, transaction_type_code, res_status, resAmount, originalAmount, exponent, pg_error_code, pg_error_detail, pg_error_msg, card_type, card_brand, created_date, updated_date) VALUES ('', '', '', '', '', '', '', '$rDonateFor', '356', '$rAmount_r', '$rMerchantReferenceNo', '$pgReferenceNo', '$res_perform', '$status', '$rAmount', '$rGetAmount', '$res_exponent', '$res_error_code', '$description', '', '', '', NOW(), NOW())");
	    
	    
	    $response_Display = "<table border='5' cellpadding='0' cellspacing='0' width='600' align='center' style='border-collapse: collapse; margin-bottom:50px'
        bordercolor='#003366' bgcolor='#acbdc6' height='500'>
        <tr>
            <td bgcolor='#000066' height='60'>
                <p align='center' class='res-head' style='color:white !important;font-size:18px !important'>
                    Transaction Status</p>
            </td>
        </tr>
        <tr>
            <td bgcolor='#FFFFFF'>
                <center>
                    <img src='https://www.motherteresacharities.org/external/images/logoM.png' alt='logo' /></center>
                <p align='center' class='style9'>
                    43, Nelson Manickam Road, Choolaimedu,Chennai-600094.India.
                    <br />
                    Ph: +91 44 23743883,+91 44 23742399, Mobile: +91 8939300227
                    <br />
                    Email: mtct1997@yahoo.co.in,mtct1997@gmail.com<br />Web: www.mtct.info, www.motherteresacharities.org, www.motherteresatrust.org</p>
            </td>
        </tr>
        <tr>
            <td bgcolor='yellow' height='50'>
                <p align='center'>
                    <span class='style8'>
                        <font color='red'><b>Transaction Mismatched</b></font>
                    </span></p>
            </td>
        </tr>
        <tr>
            <td>
                <br />
                <table border='1' cellpadding='10' cellspacing='2' width='560' align='center' style='border-collapse: collapse;'
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
                </table>
                
                <p align='center' class='style9'>
                    NB:Donations are exempted from Income Tax U/S 80G of Income Tax Act 1961</br> vide
                    DIT (E) No. 2(16)/98-99 dt. 1.5.2009 . PAN No : AABTM0430B
                </p>
            </td>
        </tr>
    </table>
";
	}
	
	else if($activated == 1){
	    //Already Executed
	    $response_Display = "<table border='5' cellpadding='0' cellspacing='0' width='600' align='center' style='border-collapse: collapse; margin-bottom:50px'
        bordercolor='#003366' bgcolor='#acbdc6' height='500'>
        <tr>
            <td bgcolor='#000066' height='60'>
                <p align='center' class='res-head' style='color:white !important;font-size:18px !important'>
                    Transaction Status</p>
            </td>
        </tr>
        <tr>
            <td bgcolor='#FFFFFF'>
                <center>
                    <img src='https://www.motherteresacharities.org/external/images/logoM.png' alt='logo' /></center>
                <p align='center' class='style9'>
                    43, Nelson Manickam Road, Choolaimedu,Chennai-600094.India.
                    <br />
                    Ph: +91 44 23743883,+91 44 23742399, Mobile: +91 8939300227
                    <br />
                    Email: mtct1997@yahoo.co.in,mtct1997@gmail.com<br />Web: www.mtct.info, www.motherteresacharities.org, www.motherteresatrust.org</p>
            </td>
        </tr>
        <tr>
            <td bgcolor='yellow' height='50'>
                <p align='center'>
                    <span class='style8'>
                        <font color='red'><b>Transaction Already Executed</b></font>
                    </span></p>
            </td>
        </tr>
        <tr>
        <tr>
                        <td width='250'>
                            <span class='style5'>Transaction Id :</span> 
                        </td>
                        <td width='300'>
                            $pgReferenceNo
                        </td>
                    </tr>
            <td>
                
                
                <p align='center' class='style9'>
                    NB:Donations are exempted from Income Tax U/S 80G of Income Tax Act 1961</br> vide
                    DIT (E) No. 2(16)/98-99 dt. 1.5.2009 . PAN No : AABTM0430B
                </p>
            </td>
        </tr>
    </table>
";
	}
	
	else{
		$response_Display = "<table border='5' cellpadding='0' cellspacing='0' width='600' align='center' style='border-collapse: collapse; margin-bottom:50px'
        bordercolor='#003366' bgcolor='#acbdc6' height='500'>
        <tr>
            <td bgcolor='#000066' height='60'>
                <p align='center' class='res-head' style='color:white !important;font-size:18px !important'>
                Transaction Status</p>
            </td>
        </tr>
        <tr>
            <td bgcolor='#FFFFFF'>
                <center>
                    <img src='https://www.motherteresacharities.org/external/images/logoM.png' alt='logo' /></center>
                <p align='center' class='style9'>
                    43, Nelson Manickam Road, Choolaimedu,Chennai-600094.India.
                    <br />
                    Ph: +91 44 23743883,+91 44 23742399, Mobile: +91 8939300227
                    <br />
                    Email: mtct1997@yahoo.co.in,mtct1997@gmail.com<br />Web: www.mtct.info, www.motherteresacharities.org, www.motherteresatrust.org</p>
            </td>
        </tr>
        <tr>
            <td bgcolor='yellow' height='50'>
                <p align='center'>
                    <span class='style8'>
                        <font color='red'><b>Transaction Failed : $description</b></font>
                    </span></p>
            </td>
        </tr>
        <tr>
            <td>
                
                
                <p align='center' class='style9'>
                    NB:Donations are exempted from Income Tax U/S 80G of Income Tax Act 1961</br> vide
                    DIT (E) No. 2(16)/98-99 dt. 1.5.2009 . PAN No : AABTM0430B
                </p>
            </td>
        </tr>
    </table>
";
	}
	

    if($get_donor[1] != ""){
    $to = $get_donor[1].',mtct1997@gmail.com';
    $from = 'donation@motherteresatrust.org';
    $subject = 'Receipt from Mother Teresa Charitable Trust';
    
    $headers = 'From: '.$from . "\r\n" .
    'Reply-To: '.$from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    mail($to, $subject, $response_Display, $headers);
}
else{
    
}
	setcookie("txFedID", "", time()-3600, "/", "", 1);
	setcookie("donate_amount","", time()-3600, "/", "", 1);


require '$root/common/header.php';
	
			
?>
<style type="text/css">
	
	.mtct-container{
	    //background-color:#f2f2f2;
	}
	.mtct-federal-payment{
	    -webkit-box-shadow: 0px 2px 12px 1px rgba(0,0,0,0.18);
-moz-box-shadow: 0px 2px 12px 1px rgba(0,0,0,0.18);
box-shadow: 0px 2px 12px 1px rgba(0,0,0,0.18);
	  /*box-shadow: 0 2px 4px 0 rgba(0,0,0,0.18);*/
	    background-color:#ffffff;
	}
	
	
	
	
	h1,h2{
	color: #0d2366;	
	}
	
	h1{
	    padding:2%;
	}
	
	.res-head{
	    color:#ffffff !important;
	    font-size: 18px !important;
	}
</style>

<section class="banner_area_cus donation">
    </section>
    <!-- End Banner area -->


    <section class="container mtct-container"  ng-app="mtct"  ng-controller="mtctDonate">
        <div class="mtct-federal-payment">
            
                <div class="page-header">
                <center><h1>Transaction Response</h1></center>
                </div>
            
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <center><?php echo $response_Display; ?></center>	    
    </div>
    </div>
    </div>
    </section>
 <!-- Footer Area -->
    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Usful Links</h3>
                        <ul>
                            <li><a href="https://www.4icu.org/top200/">Top 200 World Universities</a></li>
                            <li><a href="https://www.airindia.com/">AirIndia Ticket</a></li>
                            <li><a href="https://passportindia.gov.in/AppOnlineProject/statusTracker/trackStatusInpNew">Passport Status</a></li>
                            <li><a href="https://www.tngovernmentjobs.in/">Government Jobs</a></li>
                            <li><a href="https://www.employmentnews.gov.in/">Employment News</a></li>
                            <li><a href="https://www.ruraleye.org/">Eye Bank and Eye Donations</a></li>
                            <li><a href="https://www.friends2support.org">Blood Donors Address</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Public Request</h3>
                        <ul>
                            <li><a href="health-request.php">Education Assistance</a></li>
                            <li><a href="edu-request.php">Medical Assistance</a></li> <br>
							
						</ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>News & Events</h3>
                        <ul>
                            <marquee direction="up" scrolldelay="8" scrollamount="1"  height="245">
							<ul class="" >
							
							<li><span class="bott-marquee-txt">Ambulance Service  -  Being used as Mobile Cancer research in tie up with CSI Medical Mission Hospital Neyyoor, Kanyakumari District.</span></li>
							
							
							<li><span class="bott-marquee-txt">Free tailoring units - New Delhi, Shamshabad-Telangana, Pune - Maharashtra, 
															     Lucknow- Uttar Pradesh, Padalam-Kanchipuram, Jolarpet- Vellore,Uthangarai- Krishnagiri, Madurai, Kollemcode Kanyakumari.</span></li>
							
							<li><span class="bott-marquee-txt">Free Tuition Center - New Delhi, Madurai, Uthangarai- Krishnagiri, Pune - Maharashtra, Shamshabad-Telangana, Lucknow- Uttar Pradesh</span></li>
							
							<li><span class="bott-marquee-txt">Are you a blood donor ? Join as member in "MTCT Blood Donors Guild" . if you need blood kindly Login www.motherteresacharities.org , www.motherteresatrust.org. For details contact -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +91 44 23743883.</span></li>
							
							<li>
							<span class="bott-marquee-txt">Support our free Ambulance Service, free tailoring centers, free tuition centers and free computer study centers functioning  at several places in India, so that the needy will be benefited.</span>
							</li>
								
							<li><span class="bott-marquee-txt">Join Mother Teresa Forum (MTF) and form committees in your area, to serve the downtrodden and under privileged in the society.</span></li>
																	
								
							</ul>
							</marquee>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Contact Info</h3>
                        <ul>
						<style>
						.tit{
							color:yellow;
						}
						</style>
                            <li><span class="tit">Nobel Laureate Mother Teresa Charitable Trust,</span><Br> 43, Nelson Manickam Road, Choolaimedu, Chennai-600094.India.</li>
                            <li><span class="tit">PHONE</span> 	: +91 44 23743883, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 44 23742699</a></li>
                            <li><span class="tit">Whatsapp</span> : +91 8939300227</a></li>
                            <li><span class="tit">MAIL</span> : mtct1997@yahoo.co.in, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mtct1997@gmail.com</a></li>                            
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">			
								
			
                <div class="col-sm-8">
                     <a target="_blank" href="pdf/Terms &amp; Privacy Policy.pdf" title="mtct">Terms &amp; Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                    &copy; 2018 <a target="_blank" href="#" title="mtct">Mother Teresa Charitable Trust</a>. All Rights Reserved. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=4uOuJNOkczLP6szknhVJHM354FgOWjOgWd7EisQntabanAkNtXCRe9J6Wg1i"></script></span>
					
                </div>				
                <div class="col-sm-4">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="member.php">Membership</a></li>
                        <li><a href="donations.php">Donation</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    <!-- End Footer Area -->
<?php require '$root/common/footer.php';?>
</body>
</html>
