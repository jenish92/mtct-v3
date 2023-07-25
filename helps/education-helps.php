<?php
include_once("../master/header.php");
$medicalHelps = $metaDetails->getHelpRequest(1);
?>
<div class="container">
    <div class="row pt-5 pb-5">
        <div class="col-lg-12 col-md-12 col-12">
            <h2 class="text-center">Education <span class="cus-color1">Helps</span></h2>
            <div class="text-justify">

                <div class="card mb-3">
                    <div class="card-body">
                        <p>"Schools and colleges have reopened. Parents are thriving for school admissions and paying fees. Poverty stricken parents, orphaned children, kids of single parent and children of sick parents suffers a lot to continue their studies. Let us be a helping hand to them. MTCT tries to mobilize funds for their support. Join us in the journey of building a better nation by sponsoring school fees and donating for education. Join with us to help these Children. . .</p>
                        <div class="alert alert-info p-2">
                            <h5 class="text-center">"Education is the most powerful weapon which one can use to change the world"</h5>
                            <h5 class="text-center">"One of the greatest diseases is to be nobody to anybody"</h5>
                            <h5 class="text-right">- Mother Teresa</h5>
                        </div>
                    </div>
                </div>

                <?php
                foreach (json_decode($medicalHelps) as $key => $value) {
                ?>
                    <!-- New Desing -->
                    <div class="row shadow border p-lg-2 help-card my-4">
                        <div class="col-sm-2 d-flex align-items-center justify-content-center">
                            <img class="img-fluid mt-5 mt-sm-1 rounded" src="<?php echo BASE_URL . "img/helps/" . $value->requestor_photo; ?>" alt="">
                        </div>
                        <div class="col-sm-10">
                            <table class="table table-sm table-bordered help-table mt-3">
                                <tbody>
                                    <tr>
                                        <td class="p-2">Name</td>
                                        <td class="p-2 font-weight-bold"><?php echo $value->requestor_name; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2">Age</td>
                                        <td class="p-2"><?php echo $value->requestor_age . " , " . $value->requestor_gender; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2">Education</td>
                                        <td class="p-2"><?php echo $value->requestor_place; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2">Amount Requested</td>
                                        <td class="p-2"><i class="fa fa-inr"></i>&nbsp;<?php echo $value->requestor_amount; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2">Family Background</td>
                                        <td class="p-2"><?php echo $value->requestor_background; ?><a href="<?php echo $value->requestor_profile; ?>">More Details</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php
                }

                ?>


            </div>


        </div>
    </div>
</div>
<?php include_once("../master/footer.php"); ?>