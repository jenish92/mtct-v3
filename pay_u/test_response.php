<?php
namespace APITestCode;
$root = getenv("DOCUMENT_ROOT");
require_once('PayU.php');
require_once("config.php");

//$response = array("mihpayid" => "403993715529876240","mode" => "NB","status" => "success","unmappedstatus" => "captured","key" => "9Xnuud","txnid" => "10mt1mt1500","amount" => "1500.00","discount" => "0.00","net_amount_debit" => "1500","addedon" => "2023-08-18 00:55:14","productinfo" => "Donate for Save a Child","firstname" => "Jenish","lastname" => "J","address1" => "No 11","address2" => "","city" => "Chennai","state" => "Tamilnadu","country" => "India","zipcode" => "629804","email" => "jenish.steps@gmail.com","phone" => "8760014478","udf1" => "test","udf2" => "","udf3" => "","udf4" => "","udf5" => "","udf6" => "","udf7" => "","udf8" => "","udf9" => "","udf10" => "","hash" => "c130e6288238845163feffdc9fbbc896ac43cf63241ba392753aa9fc0b801dd14c01b4a03917d845dfb5b8185c0d58dbc223324a02df32feb8bcdc664c44384b","field1" => "","field2" => "","field3" => "","field4" => "","field5" => "","field6" => "","field7" => "","field8" => "","field9" => "Transaction Completed Successfully","payment_source" => "payu","PG_TYPE" => "NB-PG","bank_ref_num" => "81242722-b92b-4f05-90f2-0020dc05cef4","bankcode" => "TESTPGNB","error" => "E000","error_Message" => "No Error");
error_log(print_r($_POST,true),3,"response.txt");
            
            $response = $_POST;

            $pgReferenceNo = $response["mihpayid"];
			
			$rMerchantReferenceNo = $response["txnid"]; 

			$getResponseKeys = explode("mt",$rMerchantReferenceNo);

			$rOrderId = $getResponseKeys[0];

			$match_order_id = ($rOrderId == $_COOKIE["txPayUId"]) ? 1 : 2;
			

			$rDonateFor = $getResponseKeys[1];

			$rGetAmount = $getResponseKeys[2];
			
			$rAmount = $response["amount"];
			
		
			$status = $response["status"];
			
			
			$description = $response["productinfo"];
			
			
			$rTrnDate = $response["addedon"];
			
			$rMode = $response["mode"];
			
			$rHash = $response["hash"];
			
			$rError =  $response["error"];
			
			$rErrorMessage =  $response["error_Message"];
			
			$amount_match = ($_COOKIE["donate_amount"] == $rAmount) ? 1 : 2;
			
			$getFed_Tx = $mtct->db_query->query("SELECT mihpayid FROM mtct_online_payu WHERE mihpayid = '$pgReferenceNo'");

	        $activated = ($getFed_Tx->num_rows == 0) ? 2 : 1 ;
	        
	        
	        
	        $donor_name = $response["firstname"]." ".$response["lastname"];
	        
	        $donor_email = $response["email"];
	        $donor_mobile = $response["phone"];
	        
	        $donor_address = $response["address1"];
	        
	        $donor_city = $response["city"];
	        
	        $cookie_currency = $_COOKIE["donor_currency"];
	        $cookie_amount = $_COOKIE["donor_amount"];
	        $ux_amount = $cookie_currency." ".$cookie_amount;
	        
	        
	        $getDonor_details = $mtct->db_query->query("SELECT donor_first_name, donor_email, donor_mobile, donor_address, donor_city, donor_country, donor_dob FROM mtct_online_payu WHERE tx_id = '$rOrderId'");
	$get_donor = $getDonor_details->fetch_row();


if($status == "success" && $match_order_id == 1 && $activated == 2){
    
   $update_donation =  $mtct->db_query->query("UPDATE mtct_online_payu SET posted_hash='$rHash',res_status='$status',transaction_id='$rMerchantReferenceNo',mihpayid='$pgReferenceNo',mode='$rMode',addedon='$rTrnDate' WHERE tx_id = '$rOrderId'");
    
   $disp = ["status" => "success", "match order id" => $match_order_id, "amount match" => $amount_match, "activated" => $activated];
   
   print_r($disp);
   
   $setDonor_transaction = $mtct->db_query->query("INSERT INTO mtct_donations(donor_name, donor_email, donor_phone, donor_address, donor_city, donor_country, donate_towards, donated_amount, donate_mode, transaction_number, donor_dob, donated_date, created_date) VALUES ('$donor_name','$donor_email','$donor_mobile','$donor_address','$donor_city','$get_donor[5]','$rDonateFor','$rAmount','1','$pgReferenceNo','$get_donor[6]',NOW(),NOW())");
   
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
                    Mother's Castle, No:40 , Thiruvengadapuram Main Road, Choolaimedu,Chennai-600094.India.
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
                            <span class='style5'>Status:</span> 
                        </td>
                        <td width='300'>
                            <span>$status</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Name :</span> 
                        </td>
                        <td width='300'>
                            <span>$donor_name</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Email:</span> 
                        </td>
                        <td width='300'>
                            <span>$donor_email</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Mobile:</span> 
                        </td>
                        <td width='300'>
                            <span>$donor_mobile</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Address :</span> 
                        </td>
                        <td width='300'>
                            <span> $donor_address </span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>City / Province :</span> 
                        </td>
                        <td width='300'>
                            <span> $donor_city </span>
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td width='250'>
                            <span class='style5'>Support towards :</span> 
                        </td>
                        <td width='300'>
                            <span >$description</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Amount :</span> 
                        </td>
                        <td width='300'>
                           INR $rAmount
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
else if($activated == 2 && $match_order_id == 1 && $status != "success"){
	    //Failed
	    
	    $pg_fed_res =$mtct->db_query->query("UPDATE mtct_online_payu SET posted_hash='$rHash',res_status='$status',transaction_id='$rMerchantReferenceNo',mihpayid='$pgReferenceNo',mode='$rMode',addedon='$rTrnDate', error = '$rError', error_message = '$rErrorMessage' WHERE tx_id = '$rOrderId'");
	    
	    
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
                    Mother's Castle, No:40 , Thiruvengadapuram Main Road, Choolaimedu,Chennai-600094.India.
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
                        <font color='red'><b>$rErrorMessage</b></font>
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
                            <span>$status</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Name :</span> 
                        </td>
                        <td width='300'>
                            <span>$donor_name</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Email:</span> 
                        </td>
                        <td width='300'>
                            <span>$donor_email</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Mobile:</span> 
                        </td>
                        <td width='300'>
                            <span>$donor_mobile</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Address :</span> 
                        </td>
                        <td width='300'>
                            <span> $donor_address </span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>City / Province :</span> 
                        </td>
                        <td width='300'>
                            <span> $donor_city </span>
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td width='250'>
                            <span class='style5'>Support towards :</span> 
                        </td>
                        <td width='300'>
                            <span >$description</span>
                        </td>
                    </tr>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Amount :</span> 
                        </td>
                        <td width='300'>
                            INR $rAmount
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
	    $mtct->db_query->query("INSERT INTO mtct_online_payu(donor_first_name, donor_last_name, donor_email, donor_mobile, donor_address, donor_city, donor_state, donor_country, donor_zipcode, donor_dob, donate_for, donate_amount, posted_hash, res_status, key_value, reference_no, transaction_id, mihpayid, mode, addedon, error, error_message) VALUES ('$donator_fname','$donator_lname','$donator_email','$donator_mobile','$donator_address','$donator_city','$donator_state','$donator_country','$donator_zip','$donator_dob','$donate_for[0]','$donate_amount','$rHash','$status','','','$rMerchantReferenceNo','$pgReferenceNo','$rMode','$rTrnDate','$rError','$rErrorMessage')");

	    
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
                    Mother's Castle, No:40 , Thiruvengadapuram Main Road, Choolaimedu,Chennai-600094.India.
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
                            <span>$status</span>
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
                            INR $rAmount
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
                    Mother's Castle, No:40 , Thiruvengadapuram Main Road, Choolaimedu,Chennai-600094.India.
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
        <td>
                <br />
                <table border='1' cellpadding='10' cellspacing='2' width='560' align='center' style='border-collapse: collapse;'
                    bordercolor='#797979' bgcolor='#eeeeee' height='500'>
                    <tr>
                        <td width='250'>
                            <span class='style5'>Transaction Id :</span> 
                        </td>
                        <td width='300'>
                            $pgReferenceNo
                        </td>
                    </tr>
                    </table>
                    </td>
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
    $disp = ["status" => "failed", "match order id" => $match_order_id, "amount match" => $amount_match, "activated" => $activated];
   print_r($disp);

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
                    Mother's Castle, No:40 , Thiruvengadapuram Main Road, Choolaimedu,Chennai-600094.India.
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
                        <font color='red'><b>Transaction Failed : $rErrorMessage</b></font>
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
	
if($donor_email != ""){
    $to = $donor_email.',mtct1997@gmail.com';
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
include("header.php");
	
			
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
                            <li><span class="tit">Nobel Laureate Mother Teresa Charitable Trust,</span><Br> Mother's Castle, No:40 , Thiruvengadapuram Main Road, Choolaimedu, Chennai-600094.India.</li>
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

    <script src="<?php $root; ?>/js/jquery.js"></script>
    <script src="<?php $root; ?>/js/bootstrap.min.js"></script>
    <script src="<?php $root; ?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php $root; ?>/js/jquery.isotope.min.js"></script>
    <script src="<?php $root; ?>/js/main.js"></script>
    <script src="<?php $root; ?>/js/wow.min.js"></script>
	
	<!----FROM Other WEBSITE!---->
	<script src="<?php $root; ?>/external/vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="<?php $root; ?>/external/vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="<?php $root; ?>/external/vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="<?php $root; ?>/external/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="<?php $root; ?>/external/vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="<?php $root; ?>/external/vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="<?php $root; ?>/external/vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="<?php $root; ?>/external/vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="<?php $root; ?>/external/vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="<?php $root; ?>/external/js/theme.js"></script>
</body>
</html>

?>