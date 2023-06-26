<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';


// Sanitize if you want
$donate_id = filter_input(INPUT_GET, 'donate_id', FILTER_VALIDATE_INT);
$operation = filter_input(INPUT_GET, htmlspecialchars("operation", ENT_QUOTES)); 
($operation == 'edit') ? $edit = true : $edit = false;
 $db = getDbInstance();

//Handle update request. As the form's action attribute is set to the same script, but 'POST' method, 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    //Get donation id form query string parameter.
    $donate_id = filter_input(INPUT_GET, 'donate_id', FILTER_VALIDATE_INT);

    //Get input data
    $data_to_update = filter_input_array(INPUT_POST);
    $db = getDbInstance();
    $db->where('donate_id',$donate_id);
    $stat = $db->update('mtct_donations', $data_to_update);

    if($stat)
    {
        $_SESSION['success'] = "donation updated successfully!";
        //Redirect to the listing page,
        header('location: donations.php');
        //Important! Don't execute the rest put the exit/die. 
        exit();
    }
}


//If edit variable is set, we are performing the update operation.
if($edit)
{
    $db->where('donate_id', $donate_id);
    //Get data to pre-populate the form.
    $donation = $db->getOne("mtct_donations");
}

?>


<?php
    include_once 'includes/header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <h2 class="page-header">Update Donation</h2>
    </div>
    <!-- Flash messages -->
    <?php
        include('./includes/flash_messages.php')
    ?>

    <form class="" action="" method="post" enctype="multipart/form-data" id="donation_form">
        
        <?php
            //Include the common form for add and edit  
            require_once('./forms/donation_form.php'); 
        ?>
    </form>
</div>




<?php include_once 'includes/footer.php'; ?>