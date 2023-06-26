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
    $db = getDbInstance();
    $db->where('id',$id);
    $stat = $db->update('mtct_projects', $data_to_update);

    if($stat)
    {
        $_SESSION['success'] = "project updated successfully!";
        //Redirect to the listing page,
        header('location: projects.php');
        //Important! Don't execute the rest put the exit/die. 
        exit();
    }
}


//If edit variable is set, we are performing the update operation.
if($edit)
{
    $db->where('id', $id);
    //Get data to pre-populate the form.
    $projects = $db->getOne("mtct_projects");
}

?>


<?php
    include_once 'includes/header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <h2 class="page-header">Update Projects</h2>
    </div>
    <!-- Flash messages -->
    <?php
        include('./includes/flash_messages.php')
    ?>

    <form class="" action="" method="post" enctype="multipart/form-data" id="donation_form">
        
        <?php
            //Include the common form for add and edit  
            require_once('./forms/projects_form.php'); 
        ?>
    </form>
</div>




<?php include_once 'includes/footer.php'; ?>