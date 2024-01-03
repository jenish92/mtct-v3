<?php
namespace APITestCode;
use Mysqli;
class payu_pg{
    
    	public $now;
 
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
//    private $username = 'mtctin_admin';
//    private $password = 'MTct519#';
    private $database = 'mtctin_mtct';
 
    protected $connection;
 
   /* public function __construct(){
 
        define("BASE_URL","http://localhost/mtct-v3/");
        //define("BASE_URL","https://www.motherteresacharities.org/v3.1/");
		define("ACTIVE",1);
		define("WORLDLINE_DEFAULT_CURRENCY",356);
        define("ROOT",getenv("DOCUMENT_ROOT")."/mtct-v3/");
        //define("ROOT",getenv("DOCUMENT_ROOT")."/v3.1/");
		date_default_timezone_set("Asia/Kolkata");
		$this->now = date("Y-m-d H:i:s");
    }*/
	
	protected function dbConnection(){
		if (!isset($this->connection)) {
 
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
 
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
 
        return $this->connection;
	}

    public function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    public function getPayUTxID(){
        $this->dbConnection();
		$getQuery = $this->connection->query("SELECT MAX(tx_id) FROM mtct_online_payu LIMIT 1");
		
		$result = $getQuery->fetch_row();
		
		return $result[0];
	}


    public function getDonorDetails(){

        $this->dbConnection();
        $donator_fname1 = $this->test_input($_REQUEST["payu_first_name"]);
         if (!preg_match("/^[a-zA-Z ]*$/",$donator_fname1)) {
            $donator_fname = "";
            }
        else{
            $donator_fname = $donator_fname1;
            }

        $donator_lname1 = $this->test_input($_REQUEST["payu_last_name"]);
         if (!preg_match("/^[a-zA-Z ]*$/",$donator_lname1)) {
            $donator_fname = "";
            }
        else{
            $donator_lname = $donator_lname1;
            }


         $donator_mobile1 = $this->test_input($_REQUEST["payu_user_mobile"]);
         if (!preg_match("/^[0-9 ]*$/",$donator_mobile1)) {
             $donator_mobile = "";
         }
         else{
             $donator_mobile = $donator_mobile1;
         }
         $donator_email1 = $this->test_input($_REQUEST["payu_user_email"]);
         if (!filter_var($donator_email1, FILTER_VALIDATE_EMAIL)) {
          $donator_email = "";
        }
        else{
            $donator_email = $donator_email1;
        }
         $donator_address1 = $this->test_input($_REQUEST["payu_user_address"]);
         if(!filter_var($donator_address1, FILTER_SANITIZE_STRING)){
             $donator_address = "";
         }
         else{
             $donator_address = $donator_address1;
         }

         $donator_city1 = $this->test_input($_REQUEST["payu_user_city"]);
         if (!preg_match("/^[a-zA-Z ]*$/",$donator_city1)) {
             $donator_city = "";
         }
         else{
             $donator_city = $donator_city1;
         }

         $donator_state1 = $this->test_input($_REQUEST["payu_user_state"]);
         if (!preg_match("/^[a-zA-Z ]*$/",$donator_state1)) {
             $donator_state = "";
         }
         else{
             $donator_state = $donator_state1;
         }

         $donator_country1 = $this->test_input($_REQUEST["payu_user_country"]);
         if (!preg_match("/^[a-zA-Z ]*$/",$donator_country1)) {
             $donator_country = "";
         }
         else{
             $donator_country = $donator_country1;
         }

         $donator_zip1 = $this->test_input($_REQUEST["payu_user_zip"]);
         if (!preg_match("/^[0-9]*$/",$donator_zip1)) {
             $donator_zip = "";
         }
         else{
             $donator_zip = $donator_zip1;
         }
         $donator_dob = $_REQUEST["payu_user_dob"];

         $donator_currency = $this->test_input($_REQUEST["payu_user_currency"]);

         $donator_put_amount1 = $this->test_input($_REQUEST["payu_user_amount"]);	
         if (!filter_var($donator_put_amount1, FILTER_VALIDATE_INT)) {
             $donator_put_amount = "";
         }
         else{
             $donator_put_amount = $donator_put_amount1;
         }

         $donate_amount = $this->test_input($_REQUEST["payu_user_inr"]);

         $donate_for = explode("|",$_REQUEST["payu_user_donate"]);



        $online_payu_attempt = $this->connection->query("INSERT INTO mtct_online_payu(donor_first_name, donor_last_name, donor_email, donor_mobile, donor_address, donor_city, donor_state, donor_country, donor_zipcode, donor_dob, donate_for, donor_currency, donor_selected_amount, donate_amount, posted_hash, res_status, key_value, reference_no, transaction_id, mihpayid, mode, addedon, error, error_message) VALUES ('$donator_fname','$donator_lname','$donator_email','$donator_mobile','$donator_address','$donator_city','$donator_state','$donator_country','$donator_zip','$donator_dob','$donate_for[0]','$donator_currency','$donator_put_amount','$donate_amount','','','','','','','','','','')");





            error_log("\n\n\nIINSERT INTO mtct_online_payu(donor_first_name, donor_last_name, donor_email, donor_mobile, donor_address, donor_city, donor_state, donor_country, donor_zipcode, donor_dob, donate_for, donor_currency, donor_selected_amount, donate_amount, posted_hash, res_status, key_value, reference_no, transaction_id, mihpayid, mode, addedon, error, error_message) VALUES ('$donator_fname','$donator_lname','$donator_email','$donator_mobile','$donator_address','$donator_city','$donator_state','$donator_country','$donator_zip','$donator_dob','$donate_for[0]','$donator_currency','$donator_put_amount','$donate_amount','','','','','','','','','','')",3,"attempt.txt");
            if($online_payu_attempt){
                $_SESSION["txPayUId"] = $this->getPayUTxID();
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
        
    
	
	$merchantReferenceNo=$this->getPayUTxID().'mt'.$donate_for[0]."mt".$donate_amount;
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


        
        return $param;
	
    }
    
public function getTxResponse($response){
    
    //var_dump($response);
    
    
    $this->dbConnection();
    $pgReferenceNo = $response["mihpayid"];
			
			$rMerchantReferenceNo = $response["txnid"]; 

			$getResponseKeys = explode("mt",$rMerchantReferenceNo);

			$rOrderId = $getResponseKeys[0];

			$match_order_id = ($rOrderId == $_COOKIE["txPayUId"]) ? 1 : 2;
			
            $donate_for = $response["productinfo"];
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
			
			$getFed_Tx = $this->connection->query("SELECT mihpayid FROM mtct_online_payu WHERE mihpayid = '$pgReferenceNo'");

	        $activated = ($getFed_Tx->num_rows == 0) ? 2 : 1 ;
	        
	        
	        
	        $donor_name = $response["firstname"]." ".$response["lastname"];
    $donor_fname = $response["firstname"];
    $donor_lname = $response["lastname"];
	        
	        $donor_email = $response["email"];
	        $donor_mobile = $response["phone"];
	        
	        $donor_address = $response["address1"];
	        
	        $donor_city = $response["city"];
    
    $donor_state = $response["state"];
    $donor_country = $response["country"];
    
    $donor_zip = $response["zipcode"];
	        
	        $cookie_currency = $_COOKIE["donor_currency"];
	        $cookie_amount = $_COOKIE["donor_amount"];
	        $ux_amount = $cookie_currency." ".$cookie_amount;
	        
	        
	        $getDonor_details = $this->connection->query("SELECT donor_first_name, donor_email, donor_mobile, donor_address, donor_city, donor_country, donor_dob FROM mtct_online_payu WHERE tx_id = '$rOrderId'");
	$get_donor = $getDonor_details->fetch_row();


if($status == "success" && $match_order_id == 1 && $activated == 2){
    
   $update_donation =  $this->connection->query("UPDATE mtct_online_payu SET posted_hash='$rHash',res_status='$status',transaction_id='$rMerchantReferenceNo',mihpayid='$pgReferenceNo',mode='$rMode',addedon='$rTrnDate' WHERE tx_id = '$rOrderId'");
    
   $disp = ["status" => "success", "match order id" => $match_order_id, "amount match" => $amount_match, "activated" => $activated];
   
   
   
   $setDonor_transaction = $this->connection->query("INSERT INTO mtct_donations(donor_name, donor_email, donor_phone, donor_address, donor_city, donor_country, donate_towards, donated_amount, donate_mode, transaction_number, donor_dob, donated_date, created_date) VALUES ('$donor_name','$donor_email','$donor_mobile','$donor_address','$donor_city','$get_donor[5]','$rDonateFor','$rAmount','1','$pgReferenceNo','$get_donor[6]',NOW(),NOW())");
   
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
	    
	    $pg_fed_res =$this->connection->query("UPDATE mtct_online_payu SET posted_hash='$rHash',res_status='$status',transaction_id='$rMerchantReferenceNo',mihpayid='$pgReferenceNo',mode='$rMode',addedon='$rTrnDate', error = '$rError', error_message = '$rErrorMessage' WHERE tx_id = '$rOrderId'");
	    
	    
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
	    $this->connection->query("INSERT INTO mtct_online_payu(donor_first_name, donor_last_name, donor_email, donor_mobile, donor_address, donor_city, donor_state, donor_country, donor_zipcode, donor_dob, donate_for, donate_amount, posted_hash, res_status, key_value, reference_no, transaction_id, mihpayid, mode, addedon, error, error_message) VALUES ('$donor_fname','$donor_lname','$donor_email','$donor_mobile','$donor_address','$donor_city','$donor_state','$donor_country','$donor_zip','','$rDonateFor','$rAmount','$rHash','$status','','','$rMerchantReferenceNo','$pgReferenceNo','$rMode','$rTrnDate','$rError','$rErrorMessage')");

	    
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
                            <span class='style5'>State :</span> 
                        </td>
                        <td width='300'>
                            <span> $donor_state </span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td width='250'>
                            <span class='style5'>Country :</span> 
                        </td>
                        <td width='300'>
                            <span> $donor_country </span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td width='250'>
                            <span class='style5'>Zip Code :</span> 
                        </td>
                        <td width='300'>
                            <span> $donor_zip </span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td width='250'>
                            <span class='style5'>Support towards :</span> 
                        </td>
                        <td width='300'>
                            <span >$donate_for</span>
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
    
    $returnParam["email"] = $donor_email;
    $returnParam["mail_content"] = $response_Display;
    
    return $returnParam;
}


}
?>