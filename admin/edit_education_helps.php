<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';


// Sanitize if you want
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$operation = filter_input(INPUT_GET, htmlspecialchars("operation", ENT_QUOTES)); 
($operation == 'edit') ? $edit = true : $edit = false;
 $db = getDbInstance();

//Handle update request. As the form's action attribute is set to the same script, but 'POST' method, 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    //Get donation id form query string parameter.
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    //Get input data
    $data_to_update = filter_input_array(INPUT_POST);
	$data_to_update['modified_by'] = $_SESSION['user_logged_in'];
	foreach($data_to_update as $key => $value){
			$data_to_update[$key] = strip_tags($value);
	}
    
  
    
    $help_request_keys = ['requestor_name','requestor_age','requestor_gender','requestor_amount','requestor_background','requestor_profile','requestor_photo'];
    
    $help_request = array_intersect_key($data_to_update,array_flip($help_request_keys));
    $help_request['request_for'] = 1;
    $help_request['modified_by'] = $_SESSION['user_logged_in'];
    
    
    
    $db = getDbInstance();
    $db->where('id',$id);
    $req_update = $db->update('mtct_help_requested', $help_request);
    if($req_update)
    {
        
        $help_request_education = array_diff_key($data_to_update,array_flip($help_request_keys));
        $help_request_education['modified_by'] = $_SESSION['user_logged_in'];
        $db->where('requestor_id',$id);
        $stat = $db->update('mtct_education_help', $help_request_education);
        
        if($stat)
        {
        $_SESSION['success'] = "Education help request updated successfully!";
        //Redirect to the listing page,
        header('location: education-helps.php');
        //Important! Don't execute the rest put the exit/die. 
        exit();
            }
    }
}


//If edit variable is set, we are performing the update operation.
if($edit)
{
    $db->join('mtct_education_help md', 'md.requestor_id = hr.id', 'LEFT');
    $db->where('hr.id', $id);
    //Get data to pre-populate the form.
    $education = $db->getOne("mtct_help_requested hr");
    
//    $db->where('id', $id);
//    $medical_details = $db->getOne("mtct_help_requested");
}

?>


<?php
    include_once 'includes/header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <h2 class="page-header">Update Education Help Request</h2>
    </div>
    <!-- Flash messages -->
    <?php
        include('./includes/flash_messages.php')
    ?>

    <form class="" action="" method="post" enctype="multipart/form-data" id="donation_form">
        
        <?php
            //Include the common form for add and edit  
            require_once('./forms/education_helps_form.php'); 
        ?>
    </form>
</div>




<?php include_once 'includes/footer.php'; ?>