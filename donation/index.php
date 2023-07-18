<?php
include_once("../master/header.php");
$donation_for = $metaDetails->DonationList();
?>
<style>
  .list-group .list-img {
    height: 3rem;
  }

  .donation-list a {
    border-top-right-radius: 10px !important;
  }

  .donation-list .active {
    background-color: #0058A5 !important;
  }

  .donation-list-content {
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-left: 5px solid #0058A5;
    box-shadow: 0 0 0 1px rgba(128, 128, 128, 0.3);
  }

  .razorpay-iframe {
    width: 100%;
    height: 80rem;
  }
</style>
<div class="container-fluid">
  <div class="row mt-5">
    <div class="col-lg-3">
      <div class="list-group donation-list" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="first-list" data-toggle="list" href="#first" role="tab" aria-controls="home">
          <div class="d-flex justify-content-between my-1 align-items-center">
            <img src="https://cdn-icons-png.flaticon.com/512/6963/6963703.png" alt="img" class="img-fluid list-img">
            <p class="h6">Credit / Debit Cards</p>
          </div>
        </a>
        <a class="list-group-item list-group-item-action" id="second-list" data-toggle="list" href="#second" role="tab" aria-controls="profile">
          <div class="d-flex justify-content-between my-1 align-items-center">
            <img src="https://cdn-icons-png.flaticon.com/512/2655/2655001.png" alt="img" class="img-fluid list-img">
            <p class="h6">Net banking</p>
          </div>
        </a>
        <a class="list-group-item list-group-item-action" id="third-list" data-toggle="list" href="#third" role="tab" aria-controls="messages">
          <div class="d-flex justify-content-between my-1 align-items-center">
            <img src="https://w7.pngwing.com/pngs/667/120/png-transparent-google-pay-2020-hd-logo.png" alt="img" class="img-fluid list-img">
            <p class="h6">UPI / GPay</p>
          </div>
        </a>
        <a class="list-group-item list-group-item-action" id="fourth-list" data-toggle="list" href="#fourth" role="tab" aria-controls="settings">
          <div class="d-flex justify-content-between my-1 align-items-center">
            <img src="https://cdn4.iconfinder.com/data/icons/cashless-society-5/64/debit-card-payment-international-credit-512.png" alt="img" class="img-fluid list-img">
            <p class="h6">International Payments</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-9">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-list">
          <div class="donation-list-content p-3">
            <iframe class="razorpay-iframe" src="https://rzp.io/l/mother-teresa" runat="server" visible="true"></iframe>
          </div>
        </div>
        <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-list">
          <div class="donation-list-content p-3">
            <section class="mtct-container ng-scope mt-5" ng-app="mtct" ng-controller="mtctDonate" style="padding: 0px 0;">
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
        </div>
        <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-list">
          <div class="donation-list-content p-3">
            <p class="h4 text-primary">UPI / GPay</p>
            <img src="http://localhost/mtct-v3/img/payment/GPay.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="tab-pane fade" id="fourth" role="tabpanel" aria-labelledby="fourth-list">
          <div class="donation-list-content p-3">
            <iframe class="razorpay-iframe" src="https://rzp.io/l/K3TZjyy" runat="server" visible="true"></iframe>
          </div>
        </div>
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
</script>