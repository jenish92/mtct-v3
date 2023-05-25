<?php
include_once('db-connection.php');
 
class Admin extends DbConnection{
 
    public function __construct(){
 
        parent::__construct();
		
		$access = 1;
		session_start();
    }
 
    public function login($username, $password){
 
        $sql = "SELECT * FROM mtct_admin WHERE admin_user = '$username' AND admin_password = '$password' AND access = $access";
        $query = $this->connection->query($sql);
 
        if($query->num_rows > 0){
            $row = $query->fetch_array();
            return $row['admin_id'];
        }
        else{
            return false;
        }
    }
	
	public function logout($admin){
		session_start();
		session_destroy();
	}
 
    public function details($sql){
 
        $query = $this->connection->query($sql);
 
        $row = $query->fetch_array();
 
        return $row;       
    }
 
    public function escape_string($value){
 
        return $this->connection->real_escape_string($value);
    }
}
?>