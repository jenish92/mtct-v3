<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';
$get_month = date('m');
$get_year = date('Y');
$get_month_name = date('F');
//Get DB instance. function is defined in config.php
$db = getDbInstance();


$select = "count(*) as num_of_donation";

$db->where("DATE_FORMAT(donated_date, '%Y-%m')", $get_year.'-'.$get_month);
$numDonations = $db->paginate('mtct_donations', 1, $select);

$select1 = "COALESCE(sum(donated_amount),0) as sum_of_donation";
$db->where("DATE_FORMAT(donated_date, '%Y-%m')", $get_year.'-'.$get_month);
$sumDonations = $db->paginate('mtct_donations', 1, $select1);

include_once('includes/header.php');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa-solid fa-hand-holding-dollar fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $numDonations[0]["num_of_donation"]; ?></div>
                            <div>No. of Donations for <?php echo $get_month_name ?></div>
                        </div>
                    </div>
                </div>
                <a href="donations.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-indian-rupee fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $sumDonations[0]["sum_of_donation"]; ?></div>
                            <div>Total Amount in <?php echo $get_month_name ?></div>
                        </div>
                    </div>
                </div>
                <a href="donations.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
        
        </div>
        <div class="col-lg-3 col-md-6">
            
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">


            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">

            <!-- /.panel .chat-panel -->
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<?php include_once('includes/footer.php'); ?>
