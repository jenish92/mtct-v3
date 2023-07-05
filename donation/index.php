<?php 
include_once("../master/header.php"); 
$donation_for = $metaDetails->DonationList();
?>
<div class="container-fluid">
    
         <section class="mobile-view goals">
    <div class="container">
  <div class="accordion">
    <div class="accordion-item">
      <a class="click-anchor">
        <div class="in-tab-but">
          <img src="img/we.png" alt="img">
           <h3>Women Empowerment</h3>
           <i class="fa fa-plus" aria-hidden="true"></i>
         </div>
      </a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a class="click-anchor">
        <div class="in-tab-but">
          <img src="img/hc.png" alt="img">
                     <h3>Handicapped</h3>
                     <i class="fa fa-plus" aria-hidden="true"></i>
         </div>
      </a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a class="click-anchor">
        <div class="in-tab-but">
          <img src="img/ed.png" alt="img">
                     <h3>Education Help</h3>
                     <i class="fa fa-plus" aria-hidden="true"></i>
         </div>
      </a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a class="click-anchor">
        <div class="in-tab-but">
          <img src="img/nc.png" alt="img">
                     <h3>Natural Calamities</h3>
                     <i class="fa fa-plus" aria-hidden="true"></i>
         </div>
      </a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a class="click-anchor">
        <div class="in-tab-but">
            <img src="img/hp.png" alt="img">
                     <h3>Housing the Poor</h3>
                     <i class="fa fa-plus" aria-hidden="true"></i>
         </div>
      </a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a class="click-anchor">
        <div class="in-tab-but">
             <img src="img/pf.png" alt="img">
                     <h3>Poor Feeding</h3>
                     <i class="fa fa-plus" aria-hidden="true"></i>

         </div>
      </a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
  </div>
  
</div>
</section>
    <section id="our-goals" class="p-40px">
    <div class="container-fluid">
       <div class="row">
         <div class="col-md-12">
            
        <div class="tabbing-ver">
          <div class="tab">
              <button class="tablinks" onclick="openCity(event, 'Women Empowerment')" id="defaultOpen">
                   <div class="in-tab-but">
                    <img src="https://cdn-icons-png.flaticon.com/512/6963/6963703.png" alt="img">
                     <h3>Credit/Debit Cards</h3>
                   </div>
              </button>
              <button class="tablinks" onclick="openCity(event, 'Handicapped')"><div class="in-tab-but">
                    <img src="https://cdn-icons-png.flaticon.com/512/2655/2655001.png" alt="img">
                     <h3>Net Banking</h3>
                   </div></button>
              <button class="tablinks" onclick="openCity(event, 'Education Help')"><div class="in-tab-but">
                    <img src="https://w7.pngwing.com/pngs/667/120/png-transparent-google-pay-2020-hd-logo.png" alt="img">
                     <h3>UPI / GPay</h3>
                   </div></button>
              <button class="tablinks" onclick="openCity(event, 'Natural Calamities')"><div class="in-tab-but">
                    <img src="https://cdn4.iconfinder.com/data/icons/cashless-society-5/64/debit-card-payment-international-credit-512.png" alt="img">
                     <h3>International Payments</h3>
                   </div></button>
            </div>

            <div id="Women Empowerment" class="tabcontent">
<!--              <h3>Credit/Debit Cards</h3>-->
              <iframe src="https://rzp.io/l/mother-teresa" runat="server" visible="true" class="ifrmd" scrolling="no" height="550" width="100%"></iframe>
            </div>

            <div id="Handicapped" class="tabcontent">
              <h3>Net Banking</h3>
                  <section class="mtct-container ng-scope" ng-app="mtct" ng-controller="mtctDonate" style="padding: 0px 0;">
            
    
    	    
        	<form action="worldline-confirmation.php" method="post" id="donateForm" name="donateForm" target="_parent" novalidate>
           
           
       <div class="row">      
	
    <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
       	
        	<div class="input-group mb-3">
                <div class="input-group-prepend">
    <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-user"></i></span>
  </div>
            	<input type="text" name="user_name" class="form-control" required="required" ng-model="user_name" placeholder="Donor Name" ng-minlength="3" ng-maxlength="50" ng-pattern="/^[A-Za-z ]{3,50}$/">
            </div>
            <span style="color:red;" class="name-error" ng-show="donateForm.user_name.$dirty && donateForm.user_name.$error.required">Please Enter Your Name</span>
    		<span style="color:red" class="name-error" ng-show="donateForm.user_name.$error.pattern">Please Enter Your Valid Name</span>
    </div>
        
                                                        
	<div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
   		
    		<div class="input-group mb-3 ">
        	<div class="input-group-prepend">
    <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-at"></i></span>
  </div>
        	<input class="form-control" type="text" id="email" name="user_email" ng-blur="mailCheck(user_email,'S','availability','donateForm','user_email')" placeholder="Donar Email" ng-model="user_email" noncapitalize required />
    		</div>
    		<div style="color: red" id="emailError">{{ availability }}</div>
	</div>
	
      </div>   
                
                <div class="row">  
           
    	<div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
       	
        	<div class="input-group mb-3">
            	<div class="input-group-prepend">
    <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-phone"></i></span>
  </div>
            	<input type="text" name="user_mobile" class="form-control" required="required" ng-model="user_mobile" ng-minlength="stMin" ng-maxlength="stMax" placeholder="Donor Mobile Number">
            </div>
            <span style="color:red;" class="mobile-error" ng-show="(donateForm.user_mobile.$error.number || donateForm.user_mobile.$error.required) && donateForm.user_mobile.$dirty">Please Enter Your Mobile Number</span>
    	<span style="color:red;" class="mobile-error" ng-show="donateForm.user_mobile.$error.minlength ||
                           donateForm.user_mobile.$error.maxlength">Please Enter Your Valid Mobile Number</span>
    </div>
    
    
    
    <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
      	    
        	<div class="input-group mb-3">
            	<div class="input-group-prepend">
    <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-flag"></i></span>
  </div>
            	<input type="text" name="user_city" class="form-control" required="required" ng-model="user_city" ng-minlength="2" ng-maxlength="50" ng-pattern="/^[A-Za-z ]{2,50}$/" placeholder="Donor City">
            </div>
            <span style="color:red;" class="name-error" ng-show="donateForm.user_city.$dirty && donateForm.user_city.$error.required">Please Enter Your City Name</span>
    		<span style="color:red" class="name-error" ng-show="donateForm.user_city.$error.pattern">Invalid. Ex : Chennai</span>
    </div>
    
    
                </div>
                <div class="row">  
           
           
      	 <div class="form-group has-feedback col-md-12 col-12 col-sm-12 col-lg-12">
    
		<div class="input-group mb-3">
        <div class="input-group-prepend">
    <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-map-marker"></i></span>
  </div>
        <textarea name="user_address" ng-model="user_address" class="form-control" placeholder="Donor Address" required>
			</textarea>
		</div>
		<span style="color:red;" class="country-error" ng-show="donateForm.user_address.$dirty && donateForm.user_address.$error.required">Please Enter Your Address</span>
	</div>    

           
           
      	    
      
      
      	    <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
      	    
          
          <!-- Datepicker as text field -->         
          <div class="input-group date mb-3" data-date-format="dd.mm.yyyy">
            <div class="input-group-prepend">
    <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-calendar"></i></span>
  </div>
            <input type="date" name="user_dob" class="form-control" ng-model="user_dob" max="{{dob_max}}">
            
          </div>
          
            
    </div>
                </div>
                <div class="row">  
      
<div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
        	
		<div class="input-group mb-3">
        <div class="input-group-prepend">
    <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-handshake-o"></i></span>
  </div>
        <select name="user_donate" ng-model="user_donate" ng-init="stateChnaged('24')" class="form-control" required>
        
        <option value="">Please Select</option>
        <?php
            foreach($donation_for as $key => $value){
                $setVal = $key."|".$value;
                echo "<option value='$setVal'>$value</option>";
            }
            ?>
                
        </select>
		</div>
		<span style="color:red;" class="country-error" ng-show="donateForm.user_donate.$dirty && donateForm.user_donate.$error.required">Please Choose Anyone from the above category</span>
	</div> 
           
        	
       
       
       <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
       	
        	<div class="input-group mb-3">
            	<div class="input-group-prepend text-center">
    <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class=" text-center fa fa-inr"></i></span>
  </div>
            	<input type="number" name="user_amount" class="form-control" required="required" ng-model="user_amount" placeholder="Amount">
            </div>
            <span style="color:red;" class="mobile-error" ng-show="(donateForm.user_amount.$error.number || donateForm.user_amount.$error.required) && donateForm.user_amount.$dirty">Please Enter the Valid Amount</span>
    	
    </div>
                    
                </div>
                
                <div class="row">  
       
           
			<div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6 "></div>
    <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6 ">
    	<center><button type="submit" name="donate_now" ng-disabled="donateForm.$invalid"  class="btn btn-primary">Donate Now</button></center>
    </div>
    
                </div> 
           
            
            </form>
    </section>

            </div>

            <div id="Education Help" class="tabcontent">
              <h3>UPI / GPay</h3>
              <img src="../img/payment/GPay.jpg" alt="Mother Teresa Charities - GPay" style="height:100%;width:100%">
            </div>

            <div id="Natural Calamities" class="tabcontent">
                <iframe src="https://rzp.io/l/K3TZjyy" runat="server" visible="true" class="ifrmd" height="550" width="100%"></iframe>
              
            </div>

        </div>
      </div>
    </div>
        
        
    <div class="row pt-5">
        <div class="col-lg-6 col-md-6 col-12">
       
        <ul class="mtct-list">
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a class="accordion-toggle" href="pdf/coin.pdf">
               Donations are excempted u/s.80G of the Income Tax Act, 1961. vide order No. DIT (E) No. 2(16) / 98 - 99 dt. 01.05.2009. PAN No : AABTM0430B
               </a>  
            </li>
         </ul>
         </div>
        <div class="col-lg-6 col-md-6 col-12">
        <ul class="mtct-list">
			<li><i class="fa fa-envelope"></i>&nbsp;&nbsp;mtct1997@gmail.com, mtct1997@yahoo.co.in</li>
			<li><i class="fa fa-phone"></i>&nbsp;&nbsp;+914423743883,23742699 +918939300227</li>
			<li><i class="fa fa-globe"></i>&nbsp;&nbsp;<a href="http://mtct.info/">www.mtct.info</a>, <a href="http://www.motherteresacharities.org">www.motherteresacharities.org</a></li>
        </ul>
         </div>
    </div>
        
        <script>
            function openCity(evt, cityName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(cityName).style.display = "block";
              evt.currentTarget.className += " active";
            }

            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
            </script>
    </div>
  </section>


</div>
<?php include_once("../master/footer.php"); ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular.js"></script>
<script type="text/javascript">
	
	
var admin = angular.module("mtct",[]);
  
  admin.controller("mtctDonate",function($scope,$http){
	  
	 $scope.stMin = 5;
	 $scope.stMax = 15;
	 var patt=/^[\w-]+(\.[\w-]+)*@([a-z0-9-]+(\.[a-z0-9-]+)*?\.[a-z]{2,6}|(\d{1,3}\.){3}\d{1,3})(:\d{4})?$/;
	 
    var date=new Date();  
    var day= ('0' + date.getDate()).slice(-2)
    var month=('0' + (date.getMonth()+1)).slice(-2);
    var year=date.getFullYear();  
    $scope.dob_max = year+"-"+month+"-"+day;  
      
	 
	 $scope.mailCheck = function (pg_mail,proc,response_msg,formName,fiedName) {
	if(!pg_mail){
		$scope[response_msg]="Please Fillup the Field";
		$scope[formName][fiedName].$setValidity(fiedName, false);
	}
	
	else if(pg_mail.match(patt)) {
	
		  $scope[formName][fiedName].$setValidity(fiedName, true);
		  $scope[response_msg]="";
		  
	}
	
	else {
		
		$scope[response_msg]="Invalid Email";
		$scope[formName][fiedName].$setValidity(fiedName, false);
	}
        };	

  });
	
	
	</script>