<?php include_once("../master/header.php"); ?>
<div class="container">
    <div class="memb-form px-4 my-5">
        <div class="row ">
            <div class="col-lg-5 col-md-9 col-12 d-none d-lg-block">
                <div class="logo-card mt-3 p-3">
                    <img src="<?= $base_url ?>img/logo.png" alt="logo" class="img-fluid">
                </div>
                <div class="text-center mt-5">
                    <img src="<?= $base_url ?>img/mother_teresa.png" alt="" class="img-fluid">
                </div>
                <p class="text-primary text-center mt-5">Contact Us:</p>
                <div class="row ml-5 ml-lg-0 no-gutters">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-9">
                        <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; mtct1997@gmail.com</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; +914423743883, +918939300227</p>
                        <a href="www.mtct.info">
                            <p>&nbsp;<i class="fa fa-globe" aria-hidden="true"></i>&nbsp; www.mtct.info</p>
                        </a>
                        <a href="www.motherteresatrust.org">
                            <p>&nbsp;<i class="fa fa-globe" aria-hidden="true"></i>&nbsp; www.motherteresatrust.org</p>
                        </a>
                        <a href="www.motherteresacharities.org">
                            <p>&nbsp;<i class="fa fa-globe" aria-hidden="true"></i>&nbsp; www.motherteresacharities.org</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-3 col-12">
                <h2 class="text-center my-3">Membership <span class="cus-color1"></span>Form</h2>
                <form action="">
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <label for="Name">Name</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="Email">Email</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" aria-label="Email" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="Phone/Mobile">Phone/Mobile</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                    <input type="number" class="form-control" aria-label="Phone/Mobile" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="City">City</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-flag" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" aria-label="City" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="Address">Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                    <textarea class="form-control" aria-label="Address"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="Gender">Gender</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa fa-handshake-o" aria-hidden="true"></i></span>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>SELECT</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="DateofBirth">Date of Birth</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    <input type="date" class="form-control" aria-label="DateofBirth" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="BloodGroup">Blood Group</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa fa-handshake-o" aria-hidden="true"></i></span>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>SELECT</option>
                                        <option value="1">O +ve</option>
                                        <option value="2">O -ve</option>
                                        <option value="3">A +ve</option>
                                        <option value="3">A -ve</option>
                                        <option value="3">B +ve</option>
                                        <option value="3">B -ve</option>
                                        <option value="3">AB +ve</option>
                                        <option value="3">AB -ve</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="Profession">Profession</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-flag" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" aria-label="Profession" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label for="">Have you ever been a volunteer with any social organization ?</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa fa-handshake-o" aria-hidden="true"></i></span>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>SELECT</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="">Why do you want to participate with MTF ?</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right mr-5 p-4">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-md-9 col-12 d-block d-lg-none">
            <div class="text-center mt-5">
                <img src="<?= $base_url ?>img/mother_teresa.png" alt="" class="img-fluid">
            </div>
            <p class="text-primary text-center mt-5">Contact Us:</p>
            <div class="row ml-5 ml-lg-0 no-gutters">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; mtct1997@gmail.com</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; +914423743883, +918939300227</p>
                    <a href="www.mtct.info">
                        <p>&nbsp;<i class="fa fa-globe" aria-hidden="true"></i>&nbsp; www.mtct.info</p>
                    </a>
                    <a href="www.motherteresatrust.org">
                        <p>&nbsp;<i class="fa fa-globe" aria-hidden="true"></i>&nbsp; www.motherteresatrust.org</p>
                    </a>
                    <a href="www.motherteresacharities.org">
                        <p>&nbsp;<i class="fa fa-globe" aria-hidden="true"></i>&nbsp; www.motherteresacharities.org</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once("../master/footer.php"); ?>