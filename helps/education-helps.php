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
            <div class="card-body"><p>"Schools and colleges have reopened. Parents are thriving for school admissions and paying fees. Poverty stricken parents, orphaned children, kids of single parent and children of sick parents suffers a lot to continue their studies. Let us be a helping hand to them. MTCT tries to mobilize funds for their support. Join us in the journey of building a better nation by sponsoring school fees and donating for education. Join with us to help these Children. . .</p>
                <div class="alert alert-info p-2">
                <h5 class="text-center">"Education is the most powerful weapon which one can use to change the world"</h5>
 <h5 class="text-center">"One of the greatest diseases is to be nobody to anybody"</h5>
                    <h5 class="text-right">- Mother Teresa</h5>
                    </div>
                </div>
            </div>
            
            <?php
            foreach(json_decode($medicalHelps) as $key => $value){
            ?>
                
                <div class="">
        <div class="">
            
        <div class="table-responsive">
            <table class="table table-bordered mtct-helps-table">
                <tr><th>Name</th><td><?php echo $value->requestor_name; ?></td><td class="text-center align-middle" colspan="2" rowspan="5"><img src="<?php echo BASE_URL."img/helps/".$value->requestor_photo; ?>" class="img-fluid"></td></tr> 
                <tr><th>Age</th><td><?php echo $value->requestor_age." , ".$value->requestor_gender; ?></td></tr>     
                <tr><th>Education</th><td><?php echo $value->requestor_place; ?></td></tr>     
                <tr><th>Amount Requested</th><td><i class="fa fa-inr"></i>&nbsp;<?php echo $value->requestor_amount; ?></td></tr> 
                <tr><th>Family Background</th><td colspan="3"><?php echo $value->requestor_background; ?><a href="<?php echo $value->requestor_profile; ?>">More Details</a></td> </tr>    
            
            </table>
            </div>
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