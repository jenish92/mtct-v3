<?php
include_once("../master/header.php");
$medicalHelps = $metaDetails->getHelpRequest(2);
?>
<style>
    .med-help p {
        color: #424242;
    }

    .med-help .content-right p {
        margin-bottom: 5px;
    }

    .med-help .med-help-img {
        background-color: #e9f3f7;
        -webkit-border-top-right-radius: 50px;
        -webkit-border-bottom-left-radius: 50px;
        -moz-border-radius-topright: 50px;
        -moz-border-radius-bottomleft: 50px;
        border-top-right-radius: 50px;
        border-bottom-left-radius: 50px;
        transition: linear 0.4s;
    }


    .med-help span {
        font-weight: 500;
        color: black;
    }

    .med-help .med-help-card {
        background-color: #e9f3f7;
        -webkit-border-top-right-radius: 112px;
        -webkit-border-bottom-left-radius: 112px;
        -moz-border-radius-topright: 112px;
        -moz-border-radius-bottomleft: 112px;
        border-top-right-radius: 112px;
        border-bottom-left-radius: 112px;
        transition: linear 0.4s;
    }

    .med-help>div:nth-child(2n) .med-help-card {
        -webkit-border-top-right-radius: 0;
        -webkit-border-bottom-left-radius: 0;
        -moz-border-radius-topright: 0;
        -moz-border-radius-bottomleft: 0;
        border-top-right-radius: 0;
        border-bottom-left-radius: 0;

        -webkit-border-top-left-radius: 112px;
        -webkit-border-bottom-right-radius: 112px;
        -moz-border-radius-topleft: 112px;
        -moz-border-radius-bottomright: 112px;
        border-top-left-radius: 112px;
        border-bottom-right-radius: 112px;
    }

    .med-help-title {
        background-color: #ffffff;
    }

    .med-help-title .med-help-heading {
        font-size: 30px;
        font-weight: 700;
        color: #000000;
    }

    .med-help-title .med-help-content {
        text-align: justify;
    }
</style>
<div class="container">
    <div class="med-help-title py-3 ">
        <p class="med-help-heading mt-3">Medical Helps</p>
        <p class="med-help-content p-2">
            " Health is a complete physical, mental and social wellbeing says - WHO ”. It is one of the fundamental
            rights of every human being, to attain peace and security. It is the foremost duty of all to protect and
            safeguard the health of each citizen. Of late COVID-19, the pandemic endangered the health of the
            elders, the youth and the children worldwide. Several people died and several got side effects which
            caused immeasurable pain and agony, physically and economically. It is the foremost duty of the
            citizen's at large and helping minded philanthropist to lend a helping hand at the highest possible
            level to the suffering people to lead their livelihood. Let us help. . .
        </p>
        <p class="text-center">- Help people in need -</p>
    </div>
    <div class="row med-help my-5">
        <?php
        foreach (json_decode($medicalHelps) as $key => $value) {
        ?>
            <div class="col-lg-6 my-4">
                <div class="med-help-card px-4 py-5 shadow">
                    <div class="row align-items-center mb-2">
                        <div class="col-lg-4">
                            <img src="<?php echo BASE_URL . "img/helps/" . $value->requestor_photo; ?>" alt="" class="img-fluid med-help-img">
                        </div>
                        <div class="col-lg-8 content-right">
                            <p><span>Name</span> : <?php echo $value->requestor_name; ?></p>
                            <p><span>Age</span> : <?php echo $value->requestor_age; ?></p>
                            <p><span>Gender</span> : <?php echo $value->requestor_gender; ?></p>
                            <p><span>Place</span> : <?php echo $value->requestor_place; ?></p>
                            <p><span>Nature of aliment</span> : <?php echo $value->requestor_ailment; ?></p>
                            <p><span>Amount requested</span> : <?php echo number_format($value->requestor_amount); ?></p>
                        </div>
                    </div>
                    <div>
                        <p><span>Treatment in</span> : <?php echo $value->treatment_in; ?></p>
                        <p><span>Family back ground</span> : <?php echo $value->requestor_background; ?>
                            <a href="<?php echo $value->requestor_profile; ?>">more details...</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php
        }

        ?>
    </div>
</div>
<?php include_once("../master/footer.php"); ?>