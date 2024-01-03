<?php
    include_once("../master/header.php");
$donation_for = $metaDetails->DonationList();
?>

<style>
  .payment-icon {
    height: 2.5rem;
  }

  .razorpay-iframe {
    width: 100%;
    height: 200vh;
  }

  .payment-menu {
    transition: 0.3s;
    cursor: pointer;
    -webkit-user-select: none;
    /* For Safari */
    -moz-user-select: none;
    /* For Firefox */
    -ms-user-select: none;
    /* For Internet Explorer/Edge */
    user-select: none;
  }

  .payment-menu:hover {
    background-color: #84d3f1;
    color: #fff;
  }

  .payment-menu.active {
    background-color: #1cabe2;
    color: #fff;
  }

  .payment-menu:active {
    background-color: #1382ad;
  }

  .payment-menu-box {
    position: fixed;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #fff;
    z-index: 100;
  }

  @media (max-width: 768px) {
    .payment-menu-box {
      position: sticky;
      top: 10;
      background-color: #fff;
      z-index: 0;
    }
  }
</style>


    <section class="container ng-scope" ng-app="mtct" ng-controller="mtctDonate" ng-init="init()" style="padding: 0px 0;">
        <div class="mtct-federal-payment">
            
                <div style="margin-left: 208px;">
                <h2 style="text-decoration-line: underline;">Donor Details</h2>
 </div><hr>
            
    <div class="row">
    
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mtct-payment-right-side">
    	    
        	<form action="<?php $root; ?>/pay_u/test.php" method="post" id="donateForm" name="donateForm" target="_parent" novalidate>
           
           
           <div class="row">      
	
    <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
       	<label for="Donator Name">First Name<span class="required">*</span></label>
        	<div class="input-group ">
            	<span class="input-group-addon"><i class="fa fa-user"></i></span>
            	<input type="text" name="first_name" class="form-control" required="required" ng-model="first_name" ng-minlength="3" ng-maxlength="50" ng-pattern="/^[A-Za-z ]{3,50}$/">
            </div>
            <span style="color:red;" class="name-error" ng-show="donateForm.first_name.$dirty && donateForm.first_name.$error.required">Please Enter Your Name</span>
    		<span style="color:red" class="name-error" ng-show="donateForm.first_name.$error.pattern">Please Enter Your Valid Name</span>
    </div>
    
    <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
       	<label for="Donator Name">Last Name<span class="required">*</span></label>
        	<div class="input-group ">
            	<span class="input-group-addon"><i class="fa fa-user"></i></span>
            	<input type="text" name="last_name" class="form-control" required="required" ng-model="last_name" ng-minlength="1" ng-maxlength="50" ng-pattern="/^[A-Za-z ]{1,50}$/">
            </div>
            <span style="color:red;" class="name-error" ng-show="donateForm.last_name.$dirty && donateForm.last_name.$error.required">Please Enter Your Name</span>
    		<span style="color:red" class="name-error" ng-show="donateForm.last_name.$error.pattern">Please Enter Your Valid Name</span>
    </div>
        
                                                        
	
	
    </div>
           
           
    <div class="row">
        
        <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
   		<label for="Donator Email">Email<span class="required">*</span></label>
    		<div class="input-group ">
        	<span class="input-group-addon"><i class="fa fa-at"></i></span>
        	<input class="form-control" type="text" id="email" name="user_email" ng-blur="mailCheck(user_email,'S','availability','donateForm','user_email')" ng-model="user_email" noncapitalize required />
    		</div>
    		<div style="color: red" id="emailError">{{ availability }}</div>
	</div>
	
    	<div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
       	<label for="Donator Name">Phone/Mobile<span class="required">*</span></label>
        	<div class="input-group ">
            	<span class="input-group-addon"><i class="fa fa-phone"></i></span>
            	<input type="text" name="user_mobile" class="form-control" required="required" ng-model="user_mobile" ng-minlength="stMin" ng-maxlength="stMax">
            </div>
            <span style="color:red;" class="mobile-error" ng-show="(donateForm.user_mobile.$error.number || donateForm.user_mobile.$error.required) && donateForm.user_mobile.$dirty">Please Enter Your Mobile Number</span>
    	<span style="color:red;" class="mobile-error" ng-show="donateForm.user_mobile.$error.minlength ||
                           donateForm.user_mobile.$error.maxlength">Please Enter Your Valid Mobile Number</span>
    </div>
    
    
    
    
    
    
    </div>       
           
           
           
      <div class="row">
          
          
    
      	 <div class="form-group has-feedback col-md-12 col-12 col-sm-12 col-lg-12">
    <label for="Donator Name">Address<span class="required">*</span></label>
		<div class="input-group ">
        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
        <textarea name="user_address" ng-model="user_address" class="form-control" required>
			</textarea>
		</div>
		<span style="color:red;" class="country-error" ng-show="donateForm.user_address.$dirty && donateForm.user_address.$error.required">Please Enter Your Address</span>
	</div>    

      </div>     
           
           
      <div class="row">
      	    
      <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
      	    <label for="Donator Name">City<span class="required">*</span></label>
        	<div class="input-group ">
            	<span class="input-group-addon"><i class="fa fa-flag"></i></span>
            	<input type="text" name="user_city" class="form-control" required="required" ng-model="user_city" ng-minlength="2" ng-maxlength="50" ng-pattern="/^[A-Za-z ]{2,50}$/">
            </div>
            <span style="color:red;" class="name-error" ng-show="donateForm.user_city.$dirty && donateForm.user_city.$error.required">Please Enter Your City Name</span>
    		<span style="color:red" class="name-error" ng-show="donateForm.user_city.$error.pattern">Invalid. Ex : Chennai</span>
    </div>
    
    <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
      	    <label for="Donator Name">State<span class="required">*</span></label>
        	<div class="input-group ">
            	<span class="input-group-addon"><i class="fa fa-flag"></i></span>
            	<input type="text" name="user_state" class="form-control" required="required" ng-model="user_state" ng-minlength="2" ng-maxlength="50" ng-pattern="/^[A-Za-z ]{2,50}$/">
            </div>
            <span style="color:red;" class="name-error" ng-show="donateForm.user_state.$dirty && donateForm.user_state.$error.required">Please Enter Your State Name</span>
    		<span style="color:red" class="name-error" ng-show="donateForm.user_state.$error.pattern">Invalid. Ex : California</span>
    </div>
    
    </div>
    
    
    
    <div class="row">
      	    
      <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
      	    <label for="Donator Name">Country<span class="required">*</span></label>
        	<div class="input-group ">
            	<span class="input-group-addon"><i class="fa fa-flag"></i></span>
            	<select name="user_country" ng-model="user_country" ng-init="user_country = 'India'" class="form-control" required ng-change="setCurrency()">
        
        <option value="">Please Select</option>
        <?php
            foreach($metaDetails->currencyCodeList() as $key => $value){
                echo "<option value='$key'>$key</option>";
            }
            ?>
                
        </select>
            </div>
            <span style="color:red;" class="name-error" ng-show="donateForm.user_country.$dirty && donateForm.user_country.$error.required">Please Enter Your Country Name</span>
    		<span style="color:red" class="name-error" ng-show="donateForm.user_country.$error.pattern">Invalid. Ex : United States</span>
    </div>
    
    <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
      	    <label for="Donator Name">Zip Code<span class="required">*</span></label>
        	<div class="input-group ">
            	<span class="input-group-addon"><i class="fa fa-flag"></i></span>
            	<input type="text" name="user_zip" class="form-control" required="required" ng-model="user_zip" ng-minlength="2" ng-maxlength="50" ng-pattern="/^[0-9]{4,8}$/">
            </div>
            <span style="color:red;" class="name-error" ng-show="donateForm.user_zip.$dirty && donateForm.user_zip.$error.required">Please Enter Your City Name</span>
    		<span style="color:red" class="name-error" ng-show="donateForm.user_zip.$error.pattern">Invalid. Ex : Chennai</span>
    </div>
    
    </div>
    
      <div class="row">
      
      	    <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
      	    <label for="Donator Name">Date of Birth</label>
          
          <!-- Datepicker as text field -->         
          <div class="input-group date" data-date-format="dd.mm.yyyy">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            <input type="date" name="user_dob" class="form-control" ng-model="user_dob">
            
          </div>
          
            
    </div>
      
<div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
        	<label for="Donator Name">Supporting Towards<span class="required">*</span></label>
		<div class="input-group ">
        <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
        <select name="user_donate" ng-model="user_donate" ng-init="stateChnaged('24')" class="form-control" required>
        
        <option value="">Please Select</option>
        <?php
            foreach($metaDetails->supportTowardsList() as $key => $value){
                $setVal = $key."|".$value;
                echo "<option value='$setVal'>$value</option>";
            }
            ?>
                
        </select>
		</div>
		<span style="color:red;" class="country-error" ng-show="donateForm.user_donate.$dirty && donateForm.user_donate.$error.required">Please Choose Anyone from the above category</span>
	</div> 
      </div>     
           
        <div class="row">
        	
       <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
        	<label for="Donator Name">Currency<span class="required">*</span></label>
		<div class="input-group ">
        <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
        <select name="user_currency" ng-model="user_currency" ng-init="user_currency = 'INR'" class="form-control" required>
        
        <option value="">Please Select</option>
        <?php
            foreach($metaDetails->currencyCodeList() as $key => $value){
                $setVal = explode("-",$value);
                echo "<option value='$setVal[0]'>$value</option>";
            }
            ?>
                
        </select>
		</div>
		<span style="color:red;" class="country-error" ng-show="donateForm.user_currency.$dirty && donateForm.user_currency.$error.required">Please Choose Anyone from the above currency</span>
	</div> 
       
       <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
       	<label for="Donator Name">Amount<span class="required">*</span></label>
        	<div class="input-group ">
            	<span class="input-group-addon"><i class="fa fa-money"></i></span>
            	<input type="number" name="user_amount" class="form-control" required="required" ng-model="user_amount" ng-change="currencyConverter()">
            </div>
            <span style="color:red;" class="mobile-error" ng-show="(donateForm.user_amount.$error.number || donateForm.user_amount.$error.required) && donateForm.user_amount.$dirty">Please Enter the Valid Amount</span>
    	
    </div>
       
        </div>   
           
        <div class="row">
			<div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6 ">
			    
			    <label ng-if="inr">{{user_currency +" "+ user_amount + " = " + "INR " + inr}}</label>
        	<div class="input-group ">
            	
            	<input type="hidden" hidden readonly name="user_inr" class="form-control" ng-model="user_inr" ng-value="inr">
            </div>
			    
			</div>
    <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6 ">
    	<center><button type="submit" name="donate_now" ng-disabled="donateForm.$invalid"  class="btn btn-primary">Donate Now</button></center>
    </div>
    
    </div>   
           
           
            
            </form>
            
        </div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mtct-payment-left-side">
      <center>
          <img src="https://www.motherteresacharities.org/external/images/logoM.png"  class="mtct-payment-logo">

       </center>
       
       
        <center><img src="https://www.motherteresacharities.org/external/images/motherteresa.png" alt="Mother Terasa" >
        <div style="height: 24px;"></div>
        
        <div class="mtct-payment-tax-details">
        <div style="border:1px solid #0d2366;padding:2%;margin:0% 5%">
        <h3>Donations are excempted u/s.80G of the Income Tax Act, 1961. vide order No. DIT (E) No. 2(16) / 98 - 99 dt. 01.05.2009. PAN No : AABTM0430B</h3>
        </div>
        <div style="height:20px"></div>
        <h3 style="text-decoration:underline">Contact Us:</h3>
			<h3><span class="fa fa-envelope"></span>&nbsp;&nbsp;mtct1997@gmail.com</h3>
			<h3><span class="fa fa-envelope"></span>&nbsp;&nbsp;mtct1997@yahoo.co.in</h3>
			<h3><span class="fa fa-phone"></span>&nbsp;&nbsp;+914423743883,23742699 +918939300227</h3>
			<h3><span class="fa fa-globe"></span>&nbsp;&nbsp;<a href="http://mtct.info/">www.mtct.info</a></h3>
			<h3><span class="fa fa-globe"></span>&nbsp;&nbsp;<a href="http://www.motherteresacharities.org">www.motherteresacharities.org</a></h3>
 
        </div>
        </center>
    </div>
    </div>
    </div>
    </section>
<?php include_once("../master/footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular.js"></script>
<script type="text/javascript">
	
	
var admin = angular.module("mtct",[]);
  
  admin.controller("mtctDonate",function($scope,$http){
	  
	 $scope.stMin = 5;
	 $scope.stMax = 15;
	 var patt=/^[\w-]+(\.[\w-]+)*@([a-z0-9-]+(\.[a-z0-9-]+)*?\.[a-z]{2,6}|(\d{1,3}\.){3}\d{1,3})(:\d{4})?$/;
	 
	 
	 $scope.user_currency = "INR";
	 $scope.todays_rate = {};
	 $scope.inr = 0;
	 
	 $scope.init = () => {
	     console.log($scope.user_currency);
	     
	     const api_key = "44fa7577f77d875e0c830eb3";
	     
	     let old_url = "https://open.er-api.com/v6/latest/";
	     
	     let latest_url = "https://v6.exchangerate-api.com/v6/"+api_key+"/latest/";
	     
	     if($scope.user_currency != ""){
                    $http({
                      method: 'GET',
                      url: latest_url+$scope.user_currency,
                    }).then(function successCallback(response) {
                        console.log(response);
                        if(response.status == 200 ){
                            $scope.todays_rate = response.data.conversion_rates;
                            
                        }
                        else{
                            $scope.inr = "";
                        }
                      }, function errorCallback(response) {
                        console.log(response);
                        $scope.inr = "";
                      });
                }
                else{
                    console.log("Currency is mandatory");
                }
	     
	 }
	 
	 $scope.setCurrency = () => {
	      console.log($scope.user_country);
	     $http({
                      method: 'GET',
                      url: "currencyList.php?country="+$scope.user_country,
                    }).then(function successCallback(response) {
                        console.log(response);
                        if(response.status == 200 ){
                            $scope.getCurrency1 = response.data.split("-");
                            $scope.user_currency = $scope.getCurrency1[0];
                           
                        }
                        else{
                            $scope.user_currency = "INR";
                        }
                      }, function errorCallback(response) {
                        console.log(response);
                        $scope.user_currency = "INR";
                      });
	 }
	 
	 $scope.currencyConverter = () => {
	     console.log($scope.user_currency);
	     console.log($scope.todays_rate);
	     if($scope.user_currency != ""){
	        $scope.user_selected_currency_amount = $scope.todays_rate[$scope.user_currency];
	        $scope.inr = ($scope.user_amount * (1/$scope.user_selected_currency_amount)).toFixed(2);
	    }
	    else{
	        $scope.inr = 0;
	    }
	 }
	 
	 
	 
	 
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
