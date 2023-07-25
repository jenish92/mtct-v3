<?php
include_once("../master/header.php");
$medicalHelps = $metaDetails->getHelpRequest(2);
?>
<div class="container">
    <div class="row pt-5 pb-5">
        <div class="col-lg-12 col-md-12 col-12">
            <h2 class="text-center">Medical <span class="cus-color1">Helps</span></h2>
            <div class="text-justify">

                <div class="card mb-3">
                    <div class="card-body">
                        <p>" Health is a complete physical, mental and social wellbeing says – WHO ”. It is one of the fundamental rights of every human being, to attain peace and security. It is the foremost duty of all to protect and safeguard the health of each citizen. Of late COVID-19, the pandemic endangered the health of the elders, the youth and the children worldwide.
                            Several people died and several got side effects which caused immeasurable pain and agony, physically and economically. It is the foremost duty of the citizen’s at large and helping minded philanthropist to lend a helping hand at the highest possible level to the suffering people to lead their livelihood. Let us help. . .</p>
                        <h5 class="text-center">- Help people in need -</h5>
                    </div>
                </div>

                <?php
                foreach (json_decode($medicalHelps) as $key => $value) {
                ?>
                    <!-- new Design -->
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
                                        <td class="p-2">Place</td>
                                        <td class="p-2"><?php echo $value->requestor_place; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2">Nature of Ailment</td>
                                        <td class="p-2"><?php echo $value->requestor_ailment; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2">Amount Requested</td>
                                        <td class="p-2">&nbsp;<?php echo $value->requestor_amount; ?></td>
                                    </tr>
                                    <tr class="d-sm-none">
                                        <td class="p-2">Treatment in</td>
                                        <td class="p-2"><?php echo $value->treatment_in; ?></td>
                                    </tr>
                                    <tr class="d-sm-none">
                                        <td class="p-2">Family Background</td>
                                        <td class="p-2"><?php echo $value->requestor_background; ?><a href="<?php echo $value->requestor_profile; ?>">More Details</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="p-3 d-none d-sm-block">
                            <table class="table table-sm table-bordered help-table">
                                <tbody>
                                    <tr>
                                        <td class="p-2">Treatment in</td>
                                        <td class="p-2"><?php echo $value->treatment_in; ?></td>
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