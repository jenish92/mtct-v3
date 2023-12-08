<?php
include_once("../master/header.php");
$medicalHelps = $metaDetails->getHelpRequest(1);
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
        <p class="med-help-heading mt-3">Education Helps</p>
        <p class="med-help-content p-2">
            "Schools and colleges have reopened. Parents are thriving for school admissions and paying fees.
            Poverty stricken parents, orphaned children, kids of single parent and children of sick parents suffers a lot to continue their studies.
            Let us be a helping hand to them. MTCT tries to mobilize funds for their support. Join us in the journey of building a better nation by sponsoring school fees and donating for education. Join with us to help these Children. . .
        </p>
        <p class="text-center">"Education is the most powerful weapon which one can use to change the world"
            "One of the greatest diseases is to be nobody to anybody"
        </p>
        <p class="text-right">- Mother Teresa -</p>
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
                            <p><span>Education</span> : <?php echo $value->requestor_ailment; ?></p>
                            <p><span>Amount requested</span> : <?php echo number_format($value->requestor_amount); ?></p>
                        </div>
                    </div>
                    <div>
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