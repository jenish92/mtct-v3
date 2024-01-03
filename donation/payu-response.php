<?php
namespace APITestCode;
$root = getenv("DOCUMENT_ROOT");
define("encKey","8fcd52e5d14f877d47b1424a44c1a130");
define("currencyType","INR");
define("trnType","S");
require_once('payu/PayU.php');
require_once('payu/payu-mtct.php');

$mtct = new payu_pg();

    setcookie("txPayUId", 2, time()+3600, "/", "", 1);
	setcookie("donate_amount", 100, time()+3600, "/", "", 1);
	setcookie("donor_currency", "INR", time()+3600, "/", "", 1);
	setcookie("donor_amount", "82.5", time()+3600, "/", "", 1);


$response = array("mihpayid" => "403993715529876240","mode" => "NB","status" => "success","unmappedstatus" => "captured","key" => "9Xnuud","txnid" => "10mt1mt1500","amount" => "1500.00","discount" => "0.00","net_amount_debit" => "1500","addedon" => "2023-08-18 00:55:14","productinfo" => "Donate for Save a Child","firstname" => "Jenish","lastname" => "J","address1" => "No 11","address2" => "","city" => "Chennai","state" => "Tamilnadu","country" => "India","zipcode" => "629804","email" => "jenish.steps@gmail.com","phone" => "8760014478","udf1" => "test","udf2" => "","udf3" => "","udf4" => "","udf5" => "","udf6" => "","udf7" => "","udf8" => "","udf9" => "","udf10" => "","hash" => "c130e6288238845163feffdc9fbbc896ac43cf63241ba392753aa9fc0b801dd14c01b4a03917d845dfb5b8185c0d58dbc223324a02df32feb8bcdc664c44384b","field1" => "","field2" => "","field3" => "","field4" => "","field5" => "","field6" => "","field7" => "","field8" => "","field9" => "Transaction Completed Successfully","payment_source" => "payu","PG_TYPE" => "NB-PG","bank_ref_num" => "81242722-b92b-4f05-90f2-0020dc05cef4","bankcode" => "TESTPGNB","error" => "E000","error_Message" => "No Error");
error_log(print_r($_POST,true),3,"response.txt");
            
            //$response = $_POST;

$response_Display = $mtct->getTxResponse($response);

            
	
if($response_Display["email"] != ""){
    $to = $response_Display["email"].',mtct1997@gmail.com';
    $from = 'donation@motherteresatrust.org';
    $subject = 'Receipt from Mother Teresa Charitable Trust';
    
    $headers = 'From: '.$from . "\r\n" .
    'Reply-To: '.$from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    //mail($to, $subject, $response_Display["mail_content"], $headers);
}
else{
    
}
			
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

<?php include_once("../master/header.php"); ?>
<div class="container-fluid px-lg-5">
   <div class="row pt-3 pb-5">
      <div class="col-lg-12 col-md-12 col-12">
         <div class="page-header my-4">
             <h2 class="text-center">Transaction <span class="cus-color1">Details</span></h2>
            <p class="text-center">Not all of us can do great things. But we can do small things with great love.</p>
            <hr>
         </div>

    <center><?php echo $response_Display["mail_content"]; ?></center>	    
    </div>
    </div>
    </div>
<?php include_once("../master/footer.php"); ?>