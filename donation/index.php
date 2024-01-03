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
<div class="container payment-menu-box" id="menu">
  <div class="d-flex justify-content-around my-2 ">
    <div class="d-flex justify-content-center active tabButton border payment-menu w-100 p-2 align-items-center" data-tab="tab1">
      <img src="https://cdn-icons-png.flaticon.com/512/6963/6963703.png" alt="img" class="img-fluid payment-icon">
      <p class="h6 d-none d-lg-block">Credit / Debit Cards</p>
    </div>
    <div class="d-flex justify-content-center tabButton w-100 border payment-menu align-items-center" data-tab="tab2">
      <img src="https://cdn-icons-png.flaticon.com/512/2655/2655001.png" alt="img" class="img-fluid payment-icon">
      <p class="h6 d-none d-lg-block">Net banking</p>
    </div>
    <div class="d-flex justify-content-center tabButton w-100 border payment-menu align-items-center" data-tab="tab3">
      <img src="https://w7.pngwing.com/pngs/667/120/png-transparent-google-pay-2020-hd-logo.png" alt="img" class="img-fluid payment-icon">
      <p class="h6 d-none d-lg-block">UPI / GPay</p>
    </div>
    <div class="d-flex justify-content-center tabButton w-100 border payment-menu align-items-center" data-tab="tab4">
      <img src="https://cdn4.iconfinder.com/data/icons/cashless-society-5/64/debit-card-payment-international-credit-512.png" alt="img" class="img-fluid payment-icon">
      <p class="h6 d-none d-lg-block">International Payments</p>
    </div>
  </div>
</div>
<div class="container-fluid" ng-app="mtct">
  <div class="tabContent" data-tab="tab1">
    <iframe class="razorpay-iframe" src="https://rzp.io/l/mother-teresa" runat="server" visible="true"></iframe>
  </div>
  <div class="tabContent" data-tab="tab2" style="display: none;">
    <section class="container ng-scope mt-5"  ng-controller="mtctDonate">
      <form action="worldline-confirmation.php" method="post" id="donateForm" name="donateForm" target="_parent" novalidate>
        <div class="row">
          <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-user"></i></span>
              </div>
              <input type="text" name="user_name" class="form-control" required="required" ng-model="user_name" placeholder="Donor Name" ng-minlength="3" ng-maxlength="50" ng-pattern="/^[A-Za-z ]{3,50}$/">
            </div>
            <span style="color:red;" class="name-error" ng-show="donateForm.user_name.$dirty && donateForm.user_name.$error.required">Please
              Enter Your Name</span>
            <span style="color:red" class="name-error" ng-show="donateForm.user_name.$error.pattern">Please Enter Your Valid
              Name</span>
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
            <span style="color:red;" class="mobile-error" ng-show="(donateForm.user_mobile.$error.number || donateForm.user_mobile.$error.required) && donateForm.user_mobile.$dirty">Please
              Enter Your Mobile Number</span>
            <span style="color:red;" class="mobile-error" ng-show="donateForm.user_mobile.$error.minlength ||
                                           donateForm.user_mobile.$error.maxlength">Please Enter Your Valid Mobile
              Number</span>
          </div>
          <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-flag"></i></span>
              </div>
              <input type="text" name="user_city" class="form-control" required="required" ng-model="user_city" ng-minlength="2" ng-maxlength="50" ng-pattern="/^[A-Za-z ]{2,50}$/" placeholder="Donor City">
            </div>
            <span style="color:red;" class="name-error" ng-show="donateForm.user_city.$dirty && donateForm.user_city.$error.required">Please
              Enter Your City Name</span>
            <span style="color:red" class="name-error" ng-show="donateForm.user_city.$error.pattern">Invalid. Ex : Chennai</span>
          </div>
        </div>
        <div class="row">
          <div class="form-group has-feedback col-md-12 col-12 col-sm-12 col-lg-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-map-marker"></i></span>
              </div>
              <textarea rows="3" name="user_address" ng-model="user_address" class="form-control" placeholder="Donor Address" required>
                            </textarea>
            </div>
            <span style="color:red;" class="country-error" ng-show="donateForm.user_address.$dirty && donateForm.user_address.$error.required">Please
              Enter Your Address</span>
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
                foreach ($donation_for as $key => $value) {
                  $setVal = $key . "|" . $value;
                  echo "<option value='$setVal'>$value</option>";
                }
                ?>
              </select>
            </div>
            <span style="color:red;" class="country-error" ng-show="donateForm.user_donate.$dirty && donateForm.user_donate.$error.required">Please
              Choose Anyone from the above category</span>
          </div>
          <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend text-center">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class=" text-center fa fa-inr"></i></span>
              </div>
              <input type="number" name="user_amount" class="form-control" required="required" ng-model="user_amount" placeholder="Amount">
            </div>
            <span style="color:red;" class="mobile-error" ng-show="(donateForm.user_amount.$error.number || donateForm.user_amount.$error.required) && donateForm.user_amount.$dirty">Please
              Enter the Valid Amount</span>
          </div>
        </div>
        <div class="row">
          <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6 "></div>
          <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6 ">
            <center><button type="submit" name="donate_now" ng-disabled="donateForm.$invalid" class="btn btn-primary">Donate
                Now</button></center>
          </div>
        </div>
      </form>
    </section>
  </div>
  <div class="tabContent" data-tab="tab3" style="display: none;">
    <p class="h4 text-primary text-center">UPI / GPay</p>
    <img src="<?=$base_url?>img/payment/GPay.jpg" alt="" class="img-fluid">
  </div>
  <div class="tabContent" data-tab="tab4" style="display: none;">
    
      <section class="container ng-scope mt-5"  ng-controller="mtctDonatePayU">
      <form action="payu-confirmation.php" method="post" id="donate_payu" name="donate_payu" target="_parent" novalidate>
                  
                     
           <div class="row">      
	
    <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
       	<label for="Donator Name">First Name<span class="required">*</span></label>
        	<div class="input-group mb-3">
            	<div class="input-group-prepend">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-user"></i></span>
              </div>
            	<input type="text" name="payu_first_name" class="form-control" required="required" ng-model="payu_first_name" ng-minlength="3" ng-maxlength="50" ng-pattern="/^[A-Za-z ]{3,50}$/" placeholder="Donor First Name">
            </div>
            <span style="color:red;" class="name-error" ng-show="donate_payu.payu_first_name.$dirty && donate_payu.payu_first_name.$error.required">Please Enter Your Name</span>
    		<span style="color:red" class="name-error" ng-show="donate_payu.payu_first_name.$error.pattern">Please Enter Your Valid Name</span>
    </div>
    
    <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
       	<label for="Donator Name">Last Name<span class="required">*</span></label>
        	<div class="input-group mb-3">
            	<div class="input-group-prepend">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-user"></i></span>
              </div>
            	<input type="text" name="payu_last_name" class="form-control" required="required" ng-model="payu_last_name" ng-minlength="1" ng-maxlength="50" ng-pattern="/^[A-Za-z ]{1,50}$/" placeholder="Donor Last Name">
            </div>
            <span style="color:red;" class="name-error" ng-show="donate_payu.payu_last_name.$dirty && donate_payu.payu_last_name.$error.required">Please Enter Your Name</span>
    		<span style="color:red" class="name-error" ng-show="donate_payu.payu_last_name.$error.pattern">Please Enter Your Valid Name</span>
    </div>
        
                                                        
	
	
    </div>
           
           
    <div class="row">
        
        <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
   		<label for="Donator Email">Email<span class="required">*</span></label>
    		<div class="input-group mb-3">
        	<div class="input-group-prepend">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-at"></i></span>
              </div>
        	<input class="form-control" type="text" id="email" name="payu_user_email" ng-blur="mailCheck(user_email,'S','availability','donate_payu','user_email')" ng-model="payu_user_email" noncapitalize required />
    		</div>
    		<div style="color: red" id="emailError">{{ availability }}</div>
	</div>
	
    	<div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
       	<label for="Donator Name">Phone/Mobile<span class="required">*</span></label>
        	<div class="input-group mb-3">
            	<div class="input-group-prepend">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-phone"></i></span>
              </div>
            	<input type="text" name="payu_user_mobile" class="form-control" required="required" ng-model="payu_user_mobile" ng-minlength="stMin" ng-maxlength="stMax">
            </div>
            <span style="color:red;" class="mobile-error" ng-show="(donate_payu.payu_user_mobile.$error.number || donate_payu.payu_user_mobile.$error.required) && donate_payu.payu_user_mobile.$dirty">Please Enter Your Mobile Number</span>
    	<span style="color:red;" class="mobile-error" ng-show="donate_payu.payu_user_mobile.$error.minlength ||
                           donate_payu.payu_user_mobile.$error.maxlength">Please Enter Your Valid Mobile Number</span>
    </div>
    
    
    
    
    
    
    </div>       
           
           
           
      <div class="row">
          
          
    
      	 <div class="form-group has-feedback col-md-12 col-12 col-sm-12 col-lg-12">
    <label for="Donator Name">Address<span class="required">*</span></label>
		<div class="input-group mb-3">
        <div class="input-group-prepend">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-map-marker"></i></span>
              </div>
        <textarea name="payu_user_address" ng-model="payu_user_address" class="form-control" required>
			</textarea>
		</div>
		<span style="color:red;" class="country-error" ng-show="donate_payu.payu_user_address.$dirty && donate_payu.payu_user_address.$error.required">Please Enter Your Address</span>
	</div>    

      </div>     
           
           
      <div class="row">
      	    
      <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
      	    <label for="Donator Name">City<span class="required">*</span></label>
        	<div class="input-group mb-3">
            	<div class="input-group-prepend">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-flag"></i></span>
              </div>
            	<input type="text" name="payu_user_city" class="form-control" required="required" ng-model="payu_user_city" ng-minlength="2" ng-maxlength="50" ng-pattern="/^[A-Za-z ]{2,50}$/">
            </div>
            <span style="color:red;" class="name-error" ng-show="donate_payu.payu_user_city.$dirty && donate_payu.payu_user_city.$error.required">Please Enter Your City Name</span>
    		<span style="color:red" class="name-error" ng-show="donate_payu.payu_user_city.$error.pattern">Invalid. Ex : Chennai</span>
    </div>
    
    <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
      	    <label for="Donator Name">State<span class="required">*</span></label>
        	<div class="input-group mb-3">
            	<div class="input-group-prepend">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-flag"></i></span>
              </div>
            	<input type="text" name="payu_user_state" class="form-control" required="required" ng-model="payu_user_state" ng-minlength="2" ng-maxlength="50" ng-pattern="/^[A-Za-z ]{2,50}$/">
            </div>
            <span style="color:red;" class="name-error" ng-show="donate_payu.payu_user_state.$dirty && donate_payu.payu_user_state.$error.required">Please Enter Your State Name</span>
    		<span style="color:red" class="name-error" ng-show="donate_payu.payu_user_state.$error.pattern">Invalid. Ex : California</span>
    </div>
    
    </div>
    
    
    
    <div class="row">
      	    
      <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
      	    <label for="Donator Name">Country<span class="required">*</span></label>
        	<div class="input-group mb-3">
            	<div class="input-group-prepend">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-flag"></i></span>
              </div>
            	<select name="payu_user_country" ng-model="payu_user_country" ng-init="payu_user_country = 'India'" class="form-control" required ng-change="setCurrency()">
        
        <option value="">Please Select</option>
        <?php 
            foreach($metaDetails->currencyCodeList() as $key => $value){
                echo "<option value='$key'>$key</option>";
            }
            ?>
                
        </select>
            </div>
            <span style="color:red;" class="name-error" ng-show="donate_payu.payu_user_country.$dirty && donate_payu.payu_user_country.$error.required">Please Enter Your Country Name</span>
    		<span style="color:red" class="name-error" ng-show="donate_payu.payu_user_country.$error.pattern">Invalid. Ex : United States</span>
    </div>
    
    <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
      	    <label for="Donator Name">Zip Code<span class="required">*</span></label>
        	<div class="input-group mb-3">
            	<div class="input-group-prepend">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-flag"></i></span>
              </div>
            	<input type="text" name="payu_user_zip" class="form-control" required="required" ng-model="payu_user_zip" ng-minlength="2" ng-maxlength="50" ng-pattern="/^[0-9]{4,8}$/">
            </div>
            <span style="color:red;" class="name-error" ng-show="donate_payu.payu_user_zip.$dirty && donate_payu.payu_user_zip.$error.required">Please Enter Your City Name</span>
    		<span style="color:red" class="name-error" ng-show="donate_payu.payu_user_zip.$error.pattern">Invalid. Ex : Chennai</span>
    </div>
    
    </div>
    
      <div class="row">
      
      	    <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
      	    <label for="Donator Name">Date of Birth</label>
          
          <!-- Datepicker as text field -->         
          <div class="input-group date mb-3" data-date-format="dd.mm.yyyy">
            <div class="input-group-prepend">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-calendar"></i></span>
              </div>
            <input type="date" name="payu_user_dob" class="form-control" ng-model="payu_user_dob">
            
          </div>
          
            
    </div>
      
<div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
        	<label for="Donator Name">Supporting Towards<span class="required">*</span></label>
		<div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-handshake-o"></i></span>
              </div>
        <select name="payu_user_donate" ng-model="payu_user_donate" ng-init="stateChnaged('24')" class="form-control" required>
        
        <option value="">Please Select</option>
        <?php
            foreach ($donation_for as $key => $value) {
                  $setVal = $key . "|" . $value;
                  echo "<option value='$setVal'>$value</option>";
                }
            ?>
                
        </select>
		</div>
		<span style="color:red;" class="country-error" ng-show="donate_payu.payu_user_donate.$dirty && donate_payu.payu_user_donate.$error.required">Please Choose Anyone from the above category</span>
	</div> 
      </div>     
           
        <div class="row">
        	
       <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
        	<label for="Donator Name">Currency<span class="required">*</span></label>
		<div class="input-group mb-3">
        <div class="input-group-prepend">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-handshake-o"></i></span>
              </div>
        <select name="payu_user_currency" ng-model="payu_user_currency" ng-init="user_currency = 'INR'" class="form-control" required>
        
        <option value="">Please Select</option>
        <?php
            foreach($metaDetails->currencyCodeList() as $key => $value){
                $setVal = explode("-",$value);
                echo "<option value='$setVal[0]'>$value</option>";
            }
            ?>
                
        </select>
		</div>
		<span style="color:red;" class="country-error" ng-show="donate_payu.payu_user_currency.$dirty && donate_payu.payu_user_currency.$error.required">Please Choose Anyone from the above currency</span>
	</div> 
       
       <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6">
       	<label for="Donator Name">Amount<span class="required">*</span></label>
        	<div class="input-group mb-3">
            	<div class="input-group-prepend">
                <span class="input-group-text text-center justify-content-center" id="basic-addon1"><i class="fa fa-money"></i></span>
              </div>
            	<input type="number" name="payu_user_amount" class="form-control" required="required" ng-model="payu_user_amount" ng-change="currencyConverter()">
            </div>
            <span style="color:red;" class="mobile-error" ng-show="(donate_payu.payu_user_amount.$error.number || donate_payu.payu_user_amount.$error.required) && donate_payu.payu_user_amount.$dirty">Please Enter the Valid Amount</span>
    	
    </div>
       
        </div>   
           
        <div class="row">
			<div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6 ">
			    
			    <label ng-if="inr">{{user_currency +" "+ user_amount + " = " + "INR " + inr}}</label>
        	<div class="input-group mb-3">
            	
            	<input type="hidden" hidden readonly name="payu_user_inr" class="form-control" ng-model="payu_user_inr" ng-value="inr">
            </div>
			    
			</div>
    <div class="form-group has-feedback col-md-6 col-12 col-sm-12 col-lg-6 ">
    	<center><button type="submit" name="payu_donate_now" ng-disabled="donate_payu.$invalid"  class="btn btn-primary">Donate Now</button></center>
    </div>
    
    </div>   
           
          
          
      </form>
      
      </section>
  </div>

</div>

<script>
  // Get references to the tab buttons and content elements
  const tabButtons = document.querySelectorAll('.tabButton');
  const tabContents = document.querySelectorAll('.tabContent');

  // Add a click event listener to each tab button
  tabButtons.forEach(button => {
    button.addEventListener('click', () => {
      const selectedTab = button.getAttribute('data-tab');
      // Toggle the display property of the content elements based on the selected tab
      tabContents.forEach(content => {
        if (content.getAttribute('data-tab') === selectedTab) {
          content.style.display = 'block';
        } else {
          content.style.display = 'none';
        }
      });
      tabButtons.forEach(tabButton => {
        if (tabButton === button) {
          tabButton.classList.add('active');
        } else {
          tabButton.classList.remove('active');
        }
      });
    });
  });
</script>

<!-- <script>
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
</script> -->
</div>
</section>


</div>
<?php include_once("../master/footer.php"); ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular.js"></script>
<script type="text/javascript">
  var admin = angular.module("mtct", []);

  admin.controller("mtctDonate", function($scope, $http) {

    $scope.stMin = 5;
    $scope.stMax = 15;
    var patt = /^[\w-]+(\.[\w-]+)*@([a-z0-9-]+(\.[a-z0-9-]+)*?\.[a-z]{2,6}|(\d{1,3}\.){3}\d{1,3})(:\d{4})?$/;

    var date = new Date();
    var day = ('0' + date.getDate()).slice(-2)
    var month = ('0' + (date.getMonth() + 1)).slice(-2);
    var year = date.getFullYear();
    $scope.dob_max = year + "-" + month + "-" + day;


    $scope.mailCheck = function(pg_mail, proc, response_msg, formName, fiedName) {
      if (!pg_mail) {
        $scope[response_msg] = "Please Fillup the Field";
        $scope[formName][fiedName].$setValidity(fiedName, false);
      } else if (pg_mail.match(patt)) {

        $scope[formName][fiedName].$setValidity(fiedName, true);
        $scope[response_msg] = "";

      } else {

        $scope[response_msg] = "Invalid Email";
        $scope[formName][fiedName].$setValidity(fiedName, false);
      }
    };
      
      
      
      

  });
    
  
  admin.controller("mtctDonatePayU",function($scope,$http){
	  
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