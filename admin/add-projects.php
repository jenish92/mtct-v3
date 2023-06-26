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
    $last_id = $db->insert('mtct_projects', $data_to_store);
	
	echo $last_id; 

    if($last_id)
    {
    	$_SESSION['success'] = "Project added successfully!";
    	header('location: projects.php');
    	exit();
    }
    else
    {
        echo 'insert failed: ' . $db->getLastError();
        exit();
    }
}

//We are using same form for adding and editing. This is a create form so declare $edit = false.
$edit = false;

require_once 'includes/header.php'; 
?>
<div id="page-wrapper">
<div class="row">
     <div class="col-lg-12">
            <h2 class="page-header">Add Project</h2>
        </div>
        
</div>
    <form class="form" action="" method="post"  id="meta_form" enctype="multipart/form-data">
       <?php  include_once('./forms/projects_form.php'); ?>
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