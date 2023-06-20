<?php 
include_once("../master/header.php");
$medicalHelps = $metaDetails->getHelpRequest(2);
?>
<div class="container">
   <div class="row pt-5 pb-5">
      <div class="col-lg-12 col-md-12 col-12">
         <h2 class="text-center">Medical <span class="cus-color1">Helps</span></h2>
        <div class="text-justify">
            
            <div class="card">
            <div class="card-body"><p>" Health is a complete physical, mental and social wellbeing says – WHO ”. It is one of the fundamental rights of every human being, to attain peace and security. It is the foremost duty of all to protect and safeguard the health of each citizen. Of late COVID-19, the pandemic endangered the health of the elders, the youth and the children worldwide.
Several people died and several got side effects which caused immeasurable pain and agony, physically and economically. It is the foremost duty of the citizen’s at large and helping minded philanthropist to lend a helping hand at the highest possible level to the suffering people to lead their livelihood. Let us help. . .</p>
                <h5 class="text-center">- Help people in need -</h5>
                </div>
            </div>
            
            <?php
            foreach(json_decode($medicalHelps) as $key => $value){
            ?>
                
                <div class="card">
        <div class="card-body">
            
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr><th>Name</th><td><?php echo $value->requestor_name; ?></td></tr> 
                <tr><th>Age</th><td><?php echo $value->requestor_age." ".$value->requestor_gender; ?></td></tr>     
                <tr><th>Place</th><td><?php echo $value->requestor_place; ?></td></tr>     
                <tr><th>Nature of Ailment</th><td><?php echo $value->requestor_ailment; ?></td></tr>     
                <tr><th>Amount Requested</th><td><?php echo $value->requestor_amount; ?></td></tr> 
                <tr><th>Treatment in</th><td><?php echo $value->treatment_in; ?></td></tr>     
                <tr><th>Family Background</th><td><?php echo $value->requestor_background; ?><a href="<?php echo $value->requestor_profile; ?>">More Details</a></td> </tr>    
            
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