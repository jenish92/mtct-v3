<?php
class Mtct{
	
	public $now;
 
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
//    private $username = 'mtctin_admin';
//    private $password = 'MTct519#';
    private $database = 'mtctin_mtct';
 
    protected $connection;
 
    public function __construct(){
 
        define("BASE_URL","http://localhost/mtct-v3/");
        //define("BASE_URL","https://www.motherteresacharities.org/v3.1/");
		define("ACTIVE",1);
		define("WORLDLINE_DEFAULT_CURRENCY",356);
        define("ROOT",getenv("DOCUMENT_ROOT")."/mtct-v3/");
        //define("ROOT",getenv("DOCUMENT_ROOT")."/v3.1/");
		date_default_timezone_set("Asia/Kolkata");
		$this->now = date("Y-m-d H:i:s");
    }
	
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
	
	public function GetMetaDetails($page_url = 'home/home.php'){
		$res = [];
		$this->dbConnection();
		$sql = "SELECT meta_title,meta_description,meta_keywords FROM mtct_pages WHERE page_url = '".$page_url."' LIMIT 1";
		
			
        $query = $this->connection->query($sql);
 		
        if($query->num_rows > 0){
            $row = $query->fetch_object();
			$res = $row;
        }
        else{
            $res = null;
        }
		return $res;
	}

	
	public function BasicValidation($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	
	public function MailValidation($email){
		$resData = filter_var($email, FILTER_SANITIZE_EMAIL);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		  return $resData;
		} else {
		  return false;
		}
	}
	
	public function IntValidation($val){
		if (!filter_var($val, FILTER_VALIDATE_INT) === false) {
		  return true;
		} else {
		  return false;
		}
	}
	
	public function StringValidation($val){
		if (!filter_var($val, FILTER_SANITIZE_STRING) === false) {
		  return true;
		} else {
		  return false;
		}
	}
	
	public function CurrencyList($req = "All"){
		$res = [];
		$this->dbConnection();
		$sql = "SELECT entity,currency,alphabetic_code,numeric_code FROM master_currency WHERE active = ".ACTIVE;
		
		if($req == "All"){
			
        $query = $this->connection->query($sql);
 		
        if($query->num_rows > 0){
			$i=0;
            while($row = $query->fetch_object()){
				$res[$i]= $row;
				$i++;
			}
			
        }
        else{
            $res = false;
        }
			
		}
		else{
			$query = $this->connection->query($sql." AND numeric_code=".$req);
 
			if($query->num_rows > 0){
				$row = $query->fetch_array();
				$res = json_encode($row);
			}
			else{
				$res = false;
			}
		}
		return $res;
	}
	
	public function PaymentModeList($req = "All"){
		$res = [];
		$this->dbConnection();
		$sql = "SELECT mode_id,mode_description FROM master_mode";
		
		if($req == "All"){
			
        $query = $this->connection->query($sql);
 		
        if($query->num_rows > 0){
            while($row = $query->fetch_object()){
				$res[$row->mode_id]= $row->mode_description;
			}
			
        }
        else{
            $res = false;
        }
			
		}
		else{
			$query = $this->connection->query($sql." WHERE mode_id=".$req);
 
			if($query->num_rows > 0){
				$row = $query->fetch_array();
				$res = json_encode($row);
			}
			else{
				$res = false;
			}
		}
		return $res;
	}
	

	
	public function DonationList($req = "All"){
		$res = [];
		$this->dbConnection();
		$sql = "SELECT donate_id,description FROM master_donation";
		
		if($req == "All"){
			
        $query = $this->connection->query($sql);
 		
        if($query->num_rows > 0){
            while($row = $query->fetch_object()){
				$res[$row->donate_id]= $row->description;
			}
			
        }
        else{
            $res = false;
        }
			
		}
		else{
			$query = $this->connection->query($sql." WHERE donate_id=".$req);
 
			if($query->num_rows > 0){
				$row = $query->fetch_array();
				$res = json_encode($row);
			}
			else{
				$res = false;
			}
		}
		return $res;
	}

	public function ProjectList($limit = 3){
		$res = [];
		$this->dbConnection();
		$sql = "SELECT id,title,description,img_link,more_link FROM mtct_projects WHERE active = '1' LIMIT ".$limit;
		
			
        $query = $this->connection->query($sql);
 		
        if($query->num_rows > 0){
            while($row = $query->fetch_object()){
				$res[]= $row;
			}
			
        }
        else{
            $res = false;
        }
		return $res;
	}
    
    public function getFedTxID(){
        $this->dbConnection();
		$getQuery = $this->connection->query("SELECT MAX(tx_id) FROM mtct_online_fed LIMIT 1");
		
		$result = $getQuery->fetch_row();
		
		return $result[0];
	}
    
    public function getWorldlineActivated($pgReferenceNo){
        $this->dbConnection();
		$getQuery = $this->connection->query("SELECT transaction_id FROM mtct_online_fed WHERE transaction_id = '$pgReferenceNo'");
		
		$activated = ($getQuery->num_rows == 0) ? 2 : 1 ;
		
		return $activated;
	}
    
    public function getWorldlineDonors($rOrderId){
        $this->dbConnection();
		$getQuery = $this->connection->query("SELECT donor_name, donor_email, donor_phone, donor_address, donor_city, donor_country, donor_dob FROM mtct_online_fed WHERE tx_id = '$rOrderId'");
		
		$get_donor = $getQuery->fetch_row();
		
		return $get_donor;
	}
    
    public function WorldlineConfirmation($donator){
        
		$this->dbConnection();
		$sql = "INSERT INTO mtct_online_fed(tx_id, donor_name, donor_email, donor_phone, donor_address, donor_city, donor_country, donor_dob, donate_for, currency_code, donate_amount, merchant_reference_no, transaction_id, transaction_type_code, res_status,resAmount, originalAmount, exponent, pg_error_code, pg_error_detail,pg_error_msg, card_type, card_brand, created_date, updated_date) VALUES (NULL,'".$donator["name"]."','".$donator["email"]."','".$donator["mobile"]."','".$donator["address"]."','".$donator["city"]."','','".$donator["dob"]."','".$donator["for"][0]."','".$donator["currency_type"]."','".$donator["amount"]."','','','','','','','','','','','','','$this->now','0001-01-01 00:00:00')";
        
        error_log("\n\n\nINSERT INTO mtct_online_fed(tx_id, donor_name, donor_email, donor_phone, donor_address, donor_city, donor_country, donor_dob, donate_for, currency_code, donate_amount, merchant_reference_no, transaction_id, transaction_type_code, res_status,resAmount, originalAmount, exponent, pg_error_code, pg_error_detail,pg_error_msg, card_type, card_brand, created_date, updated_date) VALUES (NULL,'".$donator["name"]."','".$donator["email"]."','".$donator["mobile"]."','".$donator["address"]."','".$donator["city"]."','','".$donator["dob"]."','".$donator["for"][0]."','".$donator["currency_type"]."','".$donator["amount"]."','','','','','','','','','','','','','$this->now','0001-01-01 00:00:00')",3,ROOT."logs/worldline/attempt.txt");
        
        $query = $this->connection->query($sql);
        
        if($query){
            return true;
        }
        else{
            return false;
        }
    }
    
    public function WorldlineConfirmationResponse($response,$worldline_status){
        $this->dbConnection();
        $rMerchantReferenceNo = $response["merch_ref_no"];
        $pgReferenceNo = $response["pg_ref_no"];
        $res_perform = $response["res_perform"];
        $status = $response["status"];
        $rAmount = $response["amount"];
        $rGetAmount = $response["r_amount"];
        $description = $response["description"];
        $rOrderId = $response["r_order_id"];
        $rDonateFor = $response["donate_for"];

        $rAmount_r = $response["r_amount_r"];
        $res_exponent = $response["res_exponent"];
        $res_error_code = $response["res_error_code"];
        
        if($worldline_status == 1){
        
            $sql = "UPDATE mtct_online_fed SET merchant_reference_no='$rMerchantReferenceNo',transaction_id='$pgReferenceNo',transaction_type_code='$res_perform',res_status='$status',resAmount='$rAmount',originalAmount='$rGetAmount',pg_error_detail='$description',pg_error_msg='',card_type='',card_brand='',updated_date=NOW() WHERE tx_id = '$rOrderId' AND donate_for = '$rDonateFor'";
        }
        
        else{
           $sql =  "INSERT INTO mtct_online_fed(donor_name, donor_email, donor_phone, donor_address, donor_city, donor_country, donor_dob, donate_for, currency_code, donate_amount, merchant_reference_no, transaction_id, transaction_type_code, res_status, resAmount, originalAmount, exponent, pg_error_code, pg_error_detail, pg_error_msg, card_type, card_brand, created_date, updated_date) VALUES ('', '', '', '', '', '', '', '$rDonateFor', '356', '$rAmount_r', '$rMerchantReferenceNo', '$pgReferenceNo', '$res_perform', '$status', '$rAmount', '$rGetAmount', '$res_exponent', '$res_error_code', '$description', '', '', '', NOW(), NOW())";
            
        }
        error_log("\n\n\n$sql",3,ROOT."logs/worldline/response.txt");
        
        $query = $this->connection->query($sql);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }
    
    public function DonationEntry($get_donor,$rDonateFor,$rAmount,$pgReferenceNo){
        $this->dbConnection();
        
        $query = $this->connection->query("INSERT INTO mtct_donations(donor_name, donor_email, donor_phone, donor_address, donor_city, donor_country, donate_towards, donated_amount, donate_mode, transaction_number, donor_dob, donated_date, created_date) VALUES ('$get_donor[0]','$get_donor[1]','$get_donor[2]','$get_donor[3]','$get_donor[4]','$get_donor[5]','$rDonateFor','$rAmount','1','$pgReferenceNo','$get_donor[6]',NOW(),NOW())");
        
        if($query){
            return true;
        }
        else{
            return false;
        }
    }
    
    public function mtctEmails($status,$status_message,$body_content,$to){
        $status_color = ($status == "S") ? "green" : "red";
        
        $mail_content = "<table border='5' cellpadding='0' cellspacing='0' width='600' align='center' style='border-collapse: collapse; margin-bottom:50px'
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
                        <font color='$status_color'><b>$status_message</b></font>
                    </span></p>
            </td>
        </tr>
        <tr>
            <td>
                <br />
                $body_content
                
                <p align='center' class='style9'>
                    NB:Donations are exempted from Income Tax U/S 80G of Income Tax Act 1961</br> vide
                    DIT (E) No. 2(16)/98-99 dt. 1.5.2009 . PAN No : AABTM0430B
                </p>
            </td>
        </tr>
    </table>
";
        
    $reciever_email = $to.',mtct1997@gmail.com';
    $from = 'donation@motherteresatrust.org';
    $subject = 'Receipt from Mother Teresa Charitable Trust';
    
    $headers = 'From: '.$from . "\r\n" .
    'Reply-To: '.$from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    mail($reciever_email, $subject, $mail_content, $headers);
    }
    
    public function getHelpRequest($help_for, $res_limit = 100){
        $this->dbConnection();
        switch($help_for){
            case 1:
                $sql = "SELECT hr.requestor_name,hr.requestor_age,hr.requestor_gender,ed.requestor_education,ed.requestor_place,hr.requestor_amount,hr.requestor_background,hr.requestor_profile,hr.requestor_photo FROM mtct_help_requested as hr INNER JOIN mtct_education_help as ed ON hr.id = ed.requestor_id WHERE hr.active = 1 AND hr.request_for = $help_for LIMIT $res_limit";
                break;
                
            case 2:
                $sql = "SELECT hr.requestor_name,hr.requestor_age,hr.requestor_gender,md.requestor_place,md.requestor_ailment,md.treatment_in,hr.requestor_amount,hr.requestor_background,hr.requestor_profile,hr.requestor_photo FROM mtct_help_requested as hr INNER JOIN mtct_medical_help as md ON hr.id = md.requestor_id WHERE hr.active = 1 AND hr.request_for = $help_for LIMIT $res_limit";
                break;
                
            default:
                $sql = "";
                break;
        }
        
        
		$getQuery = $this->connection->query($sql);
		$i = 0;
		while($result = $getQuery->fetch_object()){
            $response[$i] = $result;
            $i++;
        }
		
		return json_encode($response);
	}

}
?>