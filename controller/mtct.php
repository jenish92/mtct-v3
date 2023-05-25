<?php
class Mtct{
	
	public $now;
 
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'mtctin_mtct';
 
    protected $connection;
 
    public function __construct(){
 
        define("BASE_URL","http://localhost/mtct-v1/");
		define("ACTIVE",1);
		define("WORLDLINE_DEFAULT_CURRENCY",356);
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
            $res = $sql;
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

}
?>