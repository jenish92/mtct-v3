<?php
session_start();
ini_set( 'display_errors', 1 );
ini_set( 'display_startup_errors', 1 );
error_reporting( E_ALL );
require_once './config/config.php';
require_once './includes/auth_validate.php';
$db = getDbInstance();

//serve POST method, After successful insert, redirect to customers.php page.
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    //Mass Insert Data. Keep "name" attribute in html form same as column name in mysql table.
    $data_to_store = array_filter($_POST);

    $data_to_store['created_by'] = $_SESSION['user_logged_in'];
	
	
	foreach($data_to_store as $key => $value){
		$data_to_store[$key] = strip_tags($value);
	}
    
    $help_request_keys = ['requestor_name','requestor_age','requestor_gender','requestor_amount','requestor_background','requestor_profile','requestor_photo'];
    
    $help_request = array_intersect_key($data_to_store,array_flip($help_request_keys));
    $help_request['request_for'] = 2;
    $help_request['created_by'] = $_SESSION['user_logged_in'];
    
        /*$help_request = [];
    $help_request['requestor_name'] = $data_to_store['requestor_name'];
    $help_request['requestor_age'] = $data_to_store['requestor_age'];
    $help_request['requestor_gender'] = $data_to_store['requestor_gender'];
    $help_request['request_for'] = 2;
    $help_request['requestor_amount'] = $data_to_store['requestor_amount'];
    $help_request['requestor_background'] = $data_to_store['requestor_background'];
    $help_request['requestor_profile'] = $data_to_store['requestor_profile'];
    $help_request['requestor_photo'] = $data_to_store['requestor_photo'];
    $help_request['created_by'] = $_SESSION['user_logged_in'];*/
    
    $last_id = $db->insert('mtct_help_requested', $help_request);
	
	echo $last_id; 

    if($last_id)
    {
    	
        $help_request_medical = array_diff_key($data_to_store,array_flip($help_request_keys));
        $help_request_medical['requestor_id'] = $last_id;
        $help_request_medical['created_by'] = $_SESSION['user_logged_in'];
        
        $medical_request = $db->insert('mtct_medical_help', $help_request_medical);
        
        if($medical_request){
           $_SESSION['success'] = "Project added successfully!";
            header('location: medical-helps.php');
            exit(); 
        }
        else
        {
            echo 'insert failed: ' . $db->getLastError();
            exit();
        }
        
    }
    
}

//We are using same form for adding and editing. This is a create form so declare $edit = false.
$edit = false;

require_once 'includes/header.php'; 
?>
<div id="page-wrapper">
<div class="row">
     <div class="col-lg-12">
            <h2 class="page-header">New Medical Help Request</h2>
        </div>
        
</div>
    <form class="form" action="" method="post"  id="meta_form" enctype="multipart/form-data">
       <?php  include_once('./forms/medical_helps_form.php'); ?>
    </form>
</div>


<script type="text/javascript">
$(document).ready(function(){
   $("#meta_form").validate({
       rules: {
            page_url: {
                required: true,
                minlength: 3
            },
            meta_title: {
                required: true,
                minlength: 3
            },
            meta_description: {
                required: true,
                minlength: 3
            },
            meta_keywords: {
                required: true,
                minlength: 3
            } 
        }
    });
});
</script>

<?php include_once 'includes/footer.php'; ?>