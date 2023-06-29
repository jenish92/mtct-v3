<?php include_once("../master/header.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .text-justify {
        text-align: justify;
    }

    .state-bg {
        background-color: #0058A5;
    }

    .li-title {
        cursor: pointer;
    }

    .li-content {
        position: relative;
        height: 0;
        overflow: hidden;
        transition: 0.5s;
    }

    .li-content.active {
        height: auto;
    }

    .flex-list .symp::before {
        content: '+';
    }

    .flex-list .li-title.min .symp::before {
        content: '-';
    }

    .second-li-title,
    .third-li-title {
        cursor: pointer;
    }

    .second-li-title .symp::before,
    .third-li-title .symp::before {
        content: '+';
    }

    .second-li-title.min .symp::before,
    .third-li-title.min .symp::before {
        content: '-';
    }

    .third-li-content,
    .second-li-content {
        height: 0;
        overflow: hidden;
    }

    .third-li-content.active,
    .second-li-content.active {
        height: auto;
    }

    .third-li-content p {
        font-size: 0.9rem;
        line-height: 0.7rem;
    }

    .third-li-content img {
        height: 6rem;
    }
</style>
<div class="container">
    <p class="mt-5 p-2 mx-0 mx-md-5 h5 font-weight-bold natc-main text-center">DISTRICT COMMITTEE</p>
    <div class="mt-5">
        <!-- First list -->
        <div class="flex-list my-3 shadow">
            <div class="li-title state-bg">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="text-white ml-3 mt-2 h5 font-weight-bold">Tamil Nadu</p>
                    <p class="h4 mr-4 text-white symp"></p>
                </div>
            </div>
            <div class="li-content">
                <div class="p-lg-4">
                    <!-- Second List -->
                    <div class="second-list py-1">
                        <div class="second-li-title bg-warning d-flex justify-content-between align-items-center">
                            <div class="fs-6 pl-2 p-1 text-white"><i class="fa-solid fa-location-dot"></i> Tiruvallur</div>
                            <p class="h4 mr-4 text-white symp"></p>
                        </div>
                        <div class="second-li-content px-3">
                            <!-- Third List -->
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        District Committee</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. M.S.G.Arul Kumar</p>
                                                    <p class="text-primary font-weight-bold">President</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>51/98, Jothi</p>
                                                    <p>Ramalingam Street,</p>
                                                    <p>Vyasarpadi Chennai-600 039</p>
                                                    <p>Cell: 9940372937</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr.G. Ponnurangam</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>19/1, Palaiya Kinaru Street</p>
                                                    <p>Thiruvetriyur, Chennai- 600 019</p>
                                                    <p>Cell: 8608038093</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. V.L. Nathan</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/V.L.Nathan.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>No. 742, Chennai</p>
                                                    <p>Tirupathi Main Road,</p>
                                                    <p>Gandhinagar</p>
                                                    <p>Patabiram, Chennai-600 072</p>
                                                    <p>Cell: 9380974765</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr.A. Arokiaraj</p>
                                                    <p class="text-primary font-weight-bold">General Secretary</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>13/7, Ramanujam Street</p>
                                                    <p>T.S.R.Nagar,</p>
                                                    <p>Thiruvetriyur, Chennai- 600 019</p>
                                                    <p>Cell: 9840416894</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. C.S. Senthil</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>No. 81/36, West</p>
                                                    <p>Madha Street</p>
                                                    <p>Kalidipet, Chennai-19</p>
                                                    <p>Cell: 9940229494</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. D.I. David</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/D.I.David.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>No. 9/10, Mandipudhu</p>
                                                    <p>Nagar, Chennai-103</p>
                                                    <p>Cell: 893930582,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. V. Gopal</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>Rama Reddy Pallayam,</p>
                                                    <p>Minjur, Ponneri Taluk,</p>
                                                    <p>Tiruvallur District</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. K. Pandiyan</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>No. 201/85,Varadharajan Street,</p>
                                                    <p>Sathumanagar, Chennai-600 019</p>
                                                    <p>Cell: 9444908612</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. K. Natarajan</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/Natarajan.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>A/10, Abusis Street,</p>
                                                    <p>Tiruchinass Kuppam,</p>
                                                    <p>Chennai-600 019</p>
                                                    <p>Cell: 9940378937</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. C. Venkatraman</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>No. 14, Mettu Street,</p>
                                                    <p>Kaladipet Chennai-600019</p>
                                                    <p>Cell: 9444157752</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mrs. Geetha</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>No. 162/3, Papaneeswar</p>
                                                    <p>Koil Street,</p>
                                                    <p>Pazaverkadu, Ponneri Taluk,</p>
                                                    <p>Tiruvallur District</p>
                                                    <p>Cell: 9942744191</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. G. Krishnamurthi</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>No.262A, Anjum Main Road,</p>
                                                    <p>Pattabiram, Chennai-600 072,</p>
                                                    <p>Cell: 9283769650,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr.S.Anandharaj</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/Anandaraj.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>No. 9/4, 52nd Street,</p>
                                                    <p>Netaji Nagar, Beach Road,</p>
                                                    <p>Chennai - 600 057,</p>
                                                    <p>Cell: 9840693232,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. M. Mohankumar</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>13/4, New.No.43,</p>
                                                    <p>Egavalli Amman Kovil Street,</p>
                                                    <p>Thiruvetriyur, Chennai- 600 019.</p>
                                                    <p>Cell: 9677226136</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        South</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. G. Jeyapual</p>
                                                    <p class="text-primary font-weight-bold">President</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>10, Nethaji Street,</p>
                                                    <p>73, Kelambakkam Post,</p>
                                                    <p>Tiruvallur Taluk & District - 602 025,</p>
                                                    <p>Cell: 9500124069,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. N. Ramraj</p>
                                                    <p class="text-primary font-weight-bold">General Secretary</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>34/11, Welcome Colony,</p>
                                                    <p>Anna Nagar West Extn,</p>
                                                    <p>Chennai- 600 101</p>
                                                    <p>Cell: 9841481949,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. P. Kumar</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>243, 'A'Block, 6th Street,</p>
                                                    <p>New Kanniamman Nagar,</p>
                                                    <p>Veerapuram, Avadi,</p>
                                                    <p>Chennai- 600 055</p>
                                                    <p>Cell: 9841488240</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr.M. Elumalai</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>3/27, Dharmaraja Koil Street,</p>
                                                    <p>Karambakkam, Porur,</p>
                                                    <p>Chennai - 600 116</p>
                                                    <p>Cell: 9500124069</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        North</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. A. Muruganantham</p>
                                                    <p class="text-primary font-weight-bold">President</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/Muruganantham.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>274, M.G.R.Nagar, Nehru Street, </p>
                                                    <p>Perumalpattu, Thiruvallur District,</p>
                                                    <p>Cell: 9456481071</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        Mathavaram</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. S. Gnanavel</p>
                                                    <p class="text-primary font-weight-bold">President</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>2071, C Block, 4th Street, </p>
                                                    <p>New Kanniamman Nagar,</p>
                                                    <p>Veerapuram, Avadi,</p>
                                                    <p>Chennai- 600 055</p>
                                                    <p>Cell: 9176709563</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. S. Prabhu</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/Prabhu.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>2756, 16th Street,</p>
                                                    <p>New Kanniamman Nagar,</p>
                                                    <p>Veerapuram, Avadi,</p>
                                                    <p>Moorai, Chennai - 600 055</p>
                                                    <p>Cell: 8428219509</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. S. Mallinathan</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>2458, 24th Street,</p>
                                                    <p>C Block, New Kanniamman Nagar,</p>
                                                    <p>Veerapuram, Moorai,</p>
                                                    <p>Avadi, Chennai-600 055</p>
                                                    <p>Cell: 9791574641</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        Avadi</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <p class="p-3 border border-1 border-dark h2 text-primary">Kanniamman Nagar</p>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr.K.Nagaraj</p>
                                                    <p class="text-primary font-weight-bold">President</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/Natarajan.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>2370, C Block, 11th Street </p>
                                                    <p>New Kanniamman Nagar,</p>
                                                    <p>Veerapuram, Avadi,</p>
                                                    <p>Chennai- 600 055</p>
                                                    <p>Cell: 9176934769</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. Ramajeyam</p>
                                                    <p class="text-primary font-weight-bold">Treasurer</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>Flat No. 1978 C Block,</p>
                                                    <p>19th Street,</p>
                                                    <p>New Kanniamman Nagar,</p>
                                                    <p>Veerapuram, Moorai Village,</p>
                                                    <p>Avadi, Chennai- 600 055</p>
                                                    <p>Cell: 9382700495</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">S. Mahalakshmi</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/Mahalakshmi.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>No.2, Market Street,</p>
                                                    <p>C.T.H.Road,</p>
                                                    <p>Pattabiram, Chennai- 600 072,</p>
                                                    <p>Cell: 8056233936</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. K. Varadhakumar</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>Flat No.2528, D Block,</p>
                                                    <p>13th st, New Kanniamman Nagar,</p>
                                                    <p>Veerapuram, Moorai Village,</p>
                                                    <p>Avadi, Chennai- 600 055</p>
                                                    <p>Cell: 9677273504</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. D. Batric Paramanandham</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>Flat 1828 C Block, 17th Street,</p>
                                                    <p>New Kanniamman Nagar,</p>
                                                    <p>Veerapuram, Moorai Village,</p>
                                                    <p>Avadi, Chennai- 600 055</p>
                                                    <p>Cell: 9789813160</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        Thiruverkadu</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-8">
                                                    <p class="text-danger font-weight-bold">Mr. V. Paulraj</p>
                                                    <p class="text-primary font-weight-bold">Thiruverkadu Nagara Thalaivar</p>
                                                </div>
                                                <div class="col-4">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12">
                                                    <p>73/1, Mahalakshmi Nagar 1st Street,</p>
                                                    <p>Thiruverkadu, Chennai- 600 077</p>
                                                    <p>Cell: 9710357624, 9677401829</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="second-list py-1">
                        <div class="second-li-title bg-warning d-flex justify-content-between align-items-center">
                            <div class="fs-6 pl-2 p-1 text-white"><i class="fa-solid fa-location-dot"></i> Chennai - South</div>
                            <p class="h4 mr-4 text-white symp"></p>
                        </div>
                        <div class="second-li-content px-3">
                            <!-- Third List -->
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        District Committee</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. N. Alphe</p>
                                                    <p class="text-primary font-weight-bold">President</p>
                                                    <p class="mt-4">9, Happy Home,Subburayanagar</p>
                                                    <p>Main Road,</p>
                                                    <p>Kodambakkam, Chennai-600 024</p>
                                                    <p>PH: 9841283434</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. A.G. Mani</p>
                                                    <p class="text-primary font-weight-bold">General Secretary</p>
                                                    <p class="mt-4">13/35, Dharmapuram 2nd Street,</p>
                                                    <p>T.Nagar, Chennai- 600 017</p>
                                                    <p>Cell: 9789935405</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mrs.ES.Vanithaa Subramaniyan</p>
                                                    <p class="text-primary font-weight-bold">Treasurer</p>
                                                    <p class="mt-4">No. 10/21, II nd Street</p>
                                                    <p>Dharmapuram, T. Nagar</p>
                                                    <p>Chennai-600 017</p>
                                                    <p>PH: 9940549966</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. D.R. Radhakrishnan</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">13, V block, Vengatapuram,Little</p>
                                                    <p>Mount,</p>
                                                    <p>Saidapet,Chennai - 600 015</p>
                                                    <p>Cell: 8608038466, 9499948617</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. K. Anbu</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">62/93, 8th Street,Kamaraj colony,</p>
                                                    <p>Kodambakkam, Chennai- 600 024</p>
                                                    <p>Cell: 6383741706</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">P. Immanual</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">10/926, Sri Varshini Flats,</p>
                                                    <p>Ishwarya Garden 3rd Street,</p>
                                                    <p>Medavakkam, Chennai- 600 100</p>
                                                    <p>Cell: 9790810583</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.K.M. Ravichandran</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">1113/3, Azhagiri Street,</p>
                                                    <p>M.G.R. Nagar, Chennai- 600 078</p>
                                                    <p>PH: 9444423656</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. S. Anbumozhi</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">8, Ganesapuram 2nd Street</p>
                                                    <p>Teynampet, Chennai- 600 018</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.R. Suvakin Chakravarthi</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">48, New.No.14,</p>
                                                    <p>Mandavelipakkam, Chennai- 600 026</p>
                                                    <p>Cell: 9543486565</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. P. Sundar</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">34, Santrangapani Street,</p>
                                                    <p>G.R.Tank Road, Chennai-600 017</p>
                                                    <p>Cell: 9941644217</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. K. Annamalai</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">11, Thiruveethi Amman koil street,</p>
                                                    <p>Kazhikundram, Tharamani Post,</p>
                                                    <p>Chennai - 600 113</p>
                                                    <p>PH: 9600646484, 9444226011</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. T. Babu</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">67D, III Cross Street</p>
                                                    <p>Vijayanagar, Velacheri</p>
                                                    <p>Chennai-600042</p>
                                                    <p>PH: 9840963994, 9840463795</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. T. Isaac</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">28, Swarnapuri Nagar,</p>
                                                    <p>Sendurpuram, Kattupakkam,</p>
                                                    <p>Chennai-600 056</p>
                                                    <p>Cell:9444412331</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. Y. Cycil Raj</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">N.No.11/1, Old No.5/1,</p>
                                                    <p>Paari Street, Choolaimedu,</p>
                                                    <p>Chennai- 600 094</p>
                                                    <p>Cell:9444084312,7824014262</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. Adolf Edwin</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">33.32, Kasthuribai Colony</p>
                                                    <p>A-Block, Kannigapuram</p>
                                                    <p>Chennai-600 012</p>
                                                    <p>Cell: 9381552008</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. C. Thangamani</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No.54, Flat.No.1064</p>
                                                    <p>Munusamy Salai, K.K.Nagar</p>
                                                    <p>Chennai- 600 078</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.M.K.Selvam</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">16/2, Brindavanam Street</p>
                                                    <p>West Mambalam, Chennai- 600 083</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. R. Murali</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No. 25, I Block,</p>
                                                    <p>M.K. Rathna Nagar</p>
                                                    <p>Thousand light, Chennai-600 006</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. P. Dhana Sekar</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                    <p class="mt-4">554, Sudhanthira Nagar</p>
                                                    <p>Moors Road, Thousand light</p>
                                                    <p>Chennai-600 006</p>
                                                    <p>PH: 9962291432</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. K. Venkatesan</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                    <p class="mt-4">S/o. Kuppusamy</p>
                                                    <p>No.132, Sudhanthira Nagar</p>
                                                    <p>Moors Road, Thousand lights</p>
                                                    <p>Chennai-600 006</p>
                                                    <p>PH: 9884667667</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. V. Loganathan</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                    <p class="mt-4">No.114, II floor, B Block</p>
                                                    <p>Sudhanthira Nagar, Moors Road</p>
                                                    <p>Thousand Lights, Chennai- 600 006</p>
                                                    <p>PH: 9840504778</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.S.Kamal, B.A</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                    <p class="mt-4">No.414, Sudhathira Nagar</p>
                                                    <p>Moors Road, Thousand light</p>
                                                    <p>Chennai-600 006</p>
                                                    <p>PH: 9380901669</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. P.Sundar</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                    <p class="mt-4">34, Santrangapani Street</p>
                                                    <p>G.R.Tank Road, Chennai - 17</p>
                                                    <p>Cell: 9941644217</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. R. Asokan</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                    <p class="mt-4">22/17A, Avvai Nagar,</p>
                                                    <p>Koyembedu, Virugambakkam,</p>
                                                    <p>Chennai- 600 092</p>
                                                    <p>PH: 7598853760</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. Elumalai</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                    <p class="mt-4">15A, Anna Qrts,</p>
                                                    <p>M.G.R.Nagar, Chennai-600 078,</p>
                                                    <p>PH: 9176489242</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. G. Elumalai</p>
                                                    <p class="text-primary font-weight-bold">secretary</p>
                                                    <p class="mt-4">15A, Anna Nagar Qrts,</p>
                                                    <p>M.G.R. Nagar, Chennai-600078</p>
                                                    <p>PH: 9176489242</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.B. Sugumaran</p>
                                                    <p class="text-primary font-weight-bold">Treasurer</p>
                                                    <p class="mt-4">19/4, Balu Madhali Street,</p>
                                                    <p>T.Nagar, Chennai- 600 017</p>
                                                    <p>PH: 9841041826</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        T-Nagar</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.R.Raju</p>
                                                    <p class="text-primary font-weight-bold">President</p>
                                                    <p class="mt-4">235/28, Dharmapuram 5th Street</p>
                                                    <p>T.Nagar, Chennai - 600 017</p>
                                                    <p>Cell: 9710375124</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.A.G.Mani</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">13, Dharmapuram 2nd Street</p>
                                                    <p>T.Nagar, Chennai - 600 017</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.M.Egambaram</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">235/28, Dharmapuram 5th Street</p>
                                                    <p>T.Nagar, Chennai - 600 017</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.G.Palani</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">33/63, Dharmapuram 5th Street</p>
                                                    <p>T.Nagar, Chennai - 600 017</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. Loganathan</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">Dharmapuram 2nd street</p>
                                                    <p>T.Nagar, Chennai - 600 017</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. P.TC.Kumar</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">Dharmapuram 2nd street</p>
                                                    <p>T.Nagar, Chennai - 600 017</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. C.T. Seeranidhas</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">31/16, Seeranipuram,</p>
                                                    <p>T.Nagar, Chennai - 600 017</p>
                                                    <p>Cell: 9790842165</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.M.AnnaDurai</p>
                                                    <p class="text-primary font-weight-bold">Joint secretary</p>
                                                    <p class="mt-4">98, Dharmapuram 4th Street</p>
                                                    <p>NorthT.Nagar, Chennai - 600 017</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.P.Karthikeyan</p>
                                                    <p class="text-primary font-weight-bold">Joint secretary</p>
                                                    <p class="mt-4">70, Dharmapuram 3rd Street</p>
                                                    <p>T.Nagar, Chennai - 600 017</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms.Kalavathy</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">No.3, 28th street</p>
                                                    <p>T.Nagar, Chennai-600 017</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms.M.Thilagam</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">235/28, Dharmapuram 5th Street</p>
                                                    <p>T.Nagar, Chennai - 600 017</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.Palaym (a) Raja</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">235/28, Dharmapuram 5thStreet</p>
                                                    <p>T.Nagar, Chennai - 600 017</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        T.Nagar, R.K.Puram Zone</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-12 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. C.R. Selvam</p>
                                                    <p class="text-primary font-weight-bold">117 Zone President</p>
                                                    <p class="mt-4">3, N Block, Ramakathpuram,</p>
                                                    <p>T.Nagar, Chennai- 600 017</p>
                                                    <p>Cell: 9941485839</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        Alanthur Zone</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-12 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.P. John Justin</p>
                                                    <p class="text-primary font-weight-bold">Alanthur Zone President</p>
                                                    <p class="mt-4">43/B2, Varun Nivas,Telephone Colony 2nd Main Road,</p>
                                                    <p>Adambakkam, Chennai- 600 088</p>
                                                    <p>Cell: 9444121499</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        Virugambakkam Zone</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-12 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. A. Anjalai</p>
                                                    <p class="text-primary font-weight-bold">Virugambakkam Zone President</p>
                                                    <p class="mt-4">15A, Anna Qrts,</p>
                                                    <p>M.G. R. Nagar, Chennai - 600 078</p>
                                                    <p>Cell: 9176489242</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="second-list py-1">
                        <div class="second-li-title bg-warning d-flex justify-content-between align-items-center">
                            <div class="fs-6 pl-2 p-1 text-white"><i class="fa-solid fa-location-dot"></i> Chennai - North</div>
                            <p class="h4 mr-4 text-white symp"></p>
                        </div>
                        <div class="second-li-content px-3">
                            <!-- Third List -->
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        District Committee</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. P.A.K.Md. Sulaiman</p>
                                                    <p class="text-primary font-weight-bold">President</p>
                                                    <p class="mt-4">13, Amberson Street,</p>
                                                    <p>Broadway, Chennai- 600 108</p>
                                                    <p>PH: 9841073994</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.V.Prince Clement Vijayakumar</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">74, Ritherdon Road, Vepery,</p>
                                                    <p>Chennai- 600 007</p>
                                                    <p>PH: 9884455337</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.A. Arokiaraj</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">13/7, Ramanujam Street,</p>
                                                    <p>T.S.R. Nagar, Thiruvetriyur,</p>
                                                    <p>Chennai- 600 019</p>
                                                    <p>PH: 9840416894</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. J. Susairaj</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">70/48, West Mada Street,</p>
                                                    <p>Kaladipet, Thiruvetriyur,</p>
                                                    <p>Chennai-600 019</p>
                                                    <p>Cell: 8838953382</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mrs. C.E.Maheswari</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No.71, Brickline 5th Lane,</p>
                                                    <p>Ottery, Chennai-12</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.M.Singaraj</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">15, Vinayagar Koil Street,</p>
                                                    <p>Erukencherry, Chennai-118</p>
                                                    <p>Cell: 8124951947</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. T. Nallamuthu</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">33, Bala Arunachalam Street</p>
                                                    <p>Old Washermenpet,</p>
                                                    <p>Chennai - 600021</p>
                                                    <p>PH: 25957561 (Off) 25962256</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.A. Pandurangam</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">6/26, 7th Main Road,</p>
                                                    <p>Kannadasan Nagar,</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/Pandurangan.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.N. Dhanapal</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">36/33, Jeyaprakash Street,</p>
                                                    <p>G.K.M. Colony,</p>
                                                    <p>Chennai- 600 082</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. M. Samuel</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">24/12, Ambethkar nagar 2nd street,</p>
                                                    <p>Korrukupet, Chennai- 600 021</p>
                                                    <p>Cell: 9176148515</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. L. Samraj</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No.7/7, E Type, Sidco Nagar,</p>
                                                    <p>Villiwakkam, Chennai- 600 049</p>
                                                    <p>Cell: 9380635132</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. D. Jesudoss</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">21/3-B, 5th Cross Street,</p>
                                                    <p>R.V.Nagar, Anna Nagar East,</p>
                                                    <p>Chennai- 600 102</p>
                                                    <p>Cell: 9514758754</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.A. Arokia raj</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">13/7, Ramanujam Street,</p>
                                                    <p>T.S.R. Nagar, Thiruvetriyur,</p>
                                                    <p>Chennai- 600 019</p>
                                                    <p>Cell: 9840416894</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms.V. Kanimozhi</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">2/127, 43th street,</p>
                                                    <p>Muthamil Nagar, Kodungaiyur,</p>
                                                    <p>Chennai - 600 118</p>
                                                    <p>Cell: 9283657993, 9840240145</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. M. B. Gopal</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">No.41, 32nd Jeevanandam Street</p>
                                                    <p>G.K. M. Colony, Chennai-82</p>
                                                    <p>PH: 9941209326</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. S. Jayaraj</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">S/o. K.P. Sudalaimani Naidu,</p>
                                                    <p>No.32, Vivekananda Street,</p>
                                                    <p>Lakshmipuram, Chennai - 600 099</p>
                                                    <p>Cell: 9444471789</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. M.N. Suresh Kumar</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">No.49, S.S Puram Block,</p>
                                                    <p>11th Street, Ottery,</p>
                                                    <p>Chennai- 600 012</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mrs. Sarala</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">No.227/2, North Colony,</p>
                                                    <p>I.C.F, Chennai - 600 038</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mrs. Revathi</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">No. 355 L Block,</p>
                                                    <p>I.C.F, Chennai - 600 038</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mrs. Komathy</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">No.353, L Block</p>
                                                    <p>Gandhi Nagar,</p>
                                                    <p>Chennai-600 038</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. K. Sridhar</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">No.1, S.R.P Kovil,</p>
                                                    <p>Thiru.Vi. Ka Nagar,</p>
                                                    <p>Chennai - 600 083</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. M. Babu</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">6A, Sivaparvathinagar,</p>
                                                    <p>Ellaiamman Koil Street,</p>
                                                    <p>Kolathur, Chennai-600 099</p>
                                                    <p>PH: 9380419141, 25507266</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        Harbour Zone</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. E. James</p>
                                                    <p class="text-primary font-weight-bold">Chennai, Harbour Zone 57th</p>
                                                    <p class="text-primary font-weight-bold">Ward President</p>
                                                    <p class="mt-4">48, 'P' Block, Kalyanapuram,</p>
                                                    <p>Elephant Gate, Chennai-600 003</p>
                                                    <p>Cell: 9551550911</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.M.Sankar</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No.14, Amberson Street,</p>
                                                    <p>Chennai - 600 108</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. N. Nagappan</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No.30, Amberson Street</p>
                                                    <p>Chennai - 108</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. Pandurangan</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No.9, Amberson Street,</p>
                                                    <p>Chennai-108</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/Pandurangan.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.K.Devakumar</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No.7, Amberson Street,</p>
                                                    <p>Chennai - 108</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.D. Ravi</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No.12, Stinger Street,</p>
                                                    <p>Chennai - 108</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. A Rajendran</p>
                                                    <p class="text-primary font-weight-bold">Joint secretary</p>
                                                    <p class="mt-4">29, Stinger Street,</p>
                                                    <p>Chennai - 108</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. M.Velmurugan</p>
                                                    <p class="text-primary font-weight-bold">Joint secretary</p>
                                                    <p class="mt-4">12, Amberson Road,</p>
                                                    <p>Chennai - 108</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. P. Suresh</p>
                                                    <p class="text-primary font-weight-bold">Joint secretary</p>
                                                    <p class="mt-4">No.14, Amberson Street,</p>
                                                    <p>Chennai - 108</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        R.K.Nagar Zone</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. K. Gyanaraj</p>
                                                    <p class="text-primary font-weight-bold">President</p>
                                                    <p class="mt-4">11, Bharathi Nagar,</p>
                                                    <p>11th Street, Korrukupettai,</p>
                                                    <p>Chennai - 600 021</p>
                                                    <p>Cell: 9551550911</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. S. Raghuvaran</p>
                                                    <p class="text-primary font-weight-bold">Treasurer</p>
                                                    <p class="mt-4">13/7, Madurai Muthu street,</p>
                                                    <p>Korrupettai, Chennai - 600 021</p>
                                                    <p>Cell: 8825499149</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. L.Yeasudhas</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">93, Ajis Nagar,</p>
                                                    <p>Amman Koil Street,</p>
                                                    <p>Tondiarpet, Chennai - 600 091</p>
                                                    <p>Cell: 8124577423</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. R. Abraham</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">16/24, Madurai Muthu Street,</p>
                                                    <p>Korrukupettai, Chennai - 600 021</p>
                                                    <p>Cell: 7299192063</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        74th ward</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. R. Gideon</p>
                                                    <p class="text-primary font-weight-bold">74th Ward President</p>
                                                    <p class="mt-4">187, G Book, SVM Nagar,</p>
                                                    <p>Otteri, Chennai- 600 012</p>
                                                    <p>Cell: 7448392007</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. R. Prabhakaran</p>
                                                    <p class="text-primary font-weight-bold">74th ward Vice President</p>
                                                    <p class="mt-4">38/2, Ponnan</p>
                                                    <p>Street,Purasiawakkam,</p>
                                                    <p>Vepery, Chennai- 600 007</p>
                                                    <p>Cell: 8428015766</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. V. Pughazhendi</p>
                                                    <p class="text-primary font-weight-bold">74th ward Vice President</p>
                                                    <p class="mt-4">23, Lockma Nagar,</p>
                                                    <p>Kilpauk Nagar,Chennai- 600 010</p>
                                                    <p>Cell: 8610404263</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. E. Deepan</p>
                                                    <p class="text-primary font-weight-bold">74th ward Vice President</p>
                                                    <p class="mt-4">817, U Block, SVM BNagar,</p>
                                                    <p>Ottery, Chennai- 600 012</p>
                                                    <p>Cell: 7299354835</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.P. Lokesh</p>
                                                    <p class="text-primary font-weight-bold">74th Ward Secretary</p>
                                                    <p class="mt-4">H Block, SVM Nagar,</p>
                                                    <p>Otteri, Chennai-12</p>
                                                    <p>Cell: 9789928155</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. S. Jaikumar</p>
                                                    <p class="text-primary font-weight-bold">74th Ward Secretary</p>
                                                    <p class="mt-4">157, Sanniyasi Street,</p>
                                                    <p>Dharsamagan, Chennai- 600 010</p>
                                                    <p>Cell: 6374170703</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. S. Shoban Babu</p>
                                                    <p class="text-primary font-weight-bold">74th Ward Secretary</p>
                                                    <p class="mt-4">32/4, Nallaiya Naidu Street,</p>
                                                    <p>Nammalvarpettai,Chennai- 600 012</p>
                                                    <p>Cell: 6382172274</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. C. Vignesh</p>
                                                    <p class="text-primary font-weight-bold">74th Ward Secretary</p>
                                                    <p class="mt-4">30, Ponnan Street,</p>
                                                    <p>Vepery, Chennai- 600 007</p>
                                                    <p>Cell: 7550161511</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. N. Sanjai</p>
                                                    <p class="text-primary font-weight-bold">74th Ward Secretary</p>
                                                    <p class="mt-4">38/2, Ponnan</p>
                                                    <p>Street,Puraisaiwalkkam,</p>
                                                    <p>Vepery, Chennai- 600 007</p>
                                                    <p>Cell: 9344359956</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. N Jack Maxwell</p>
                                                    <p class="text-primary font-weight-bold">74th Ward Treasurer</p>
                                                    <p class="mt-4">95/162, Lockma Nagar,</p>
                                                    <p>Kilpauk, Chennai-600 010</p>
                                                    <p>Cell: 7092499020</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        Kolathur Zone</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. A. Anand Alex</p>
                                                    <p class="text-primary font-weight-bold">President</p>
                                                    <p class="mt-4">23, Sirivallar main Road,</p>
                                                    <p>Flat -10, Maria Towers,</p>
                                                    <p>Perambur, Chennai - 600 017</p>
                                                    <p>Cell: 7904559974</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. Nellai S.Vijayakumar</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No.46, 31st MA.PO.C.Street,</p>
                                                    <p>G.K.M. Colony, Chennai-600 082</p>
                                                    <p>Cell: 9444463758</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">S. Parthipan</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No.52 /27, Jegannathan Street,</p>
                                                    <p>Agaram, Chennai-82</p>
                                                    <p>Cell: 9710699696</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">R.M. Suresh kumar</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">No. 18A, Oikarrai Street,</p>
                                                    <p>Jegannathan Street,</p>
                                                    <p>Kolathur Chennai-600 099</p>
                                                    <p>Cell: 9840340540</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">M. Thangavel Uma</p>
                                                    <p class="text-primary font-weight-bold">Joint secretary</p>
                                                    <p class="mt-4">No.7/6, Unnamali Amman Street,</p>
                                                    <p>Kolathur, Chennai-600 099</p>
                                                    <p>Cell: 9841488595</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        Chinthatripet Zone</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. Loganathan (a) Sahayanathan</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">85/34, Samipandaram Street,</p>
                                                    <p>Flat -10, Maria Towers,</p>
                                                    <p>Chinthathripet, Chennai - 600002</p>
                                                    <p>Cell: 7299844557, 9445644972</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. L. Jayasundari</p>
                                                    <p class="text-primary font-weight-bold">Joint Secretary</p>
                                                    <p class="mt-4">1/83/34, Samipandaram Street,</p>
                                                    <p>Chinthathripet, Chennai - 600 002</p>
                                                    <p>Cell: 9176261353</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms.M.Amalorpavamary (a) Devi</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">11/6, New Balakrishnan Street,</p>
                                                    <p>Chinthathripet, Chennai - 600 002</p>
                                                    <p>Cell: 9042790103</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. Iruthayamary</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">15/72, West Coovam river,</p>
                                                    <p>Chinthathripet, Chennai - 600 002</p>
                                                    <p>Cell: 9840313286</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        Chepauk Zone</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-12 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. A. Arokiadoss</p>
                                                    <p class="text-primary font-weight-bold">Chepauk Zone President</p>
                                                    <p class="mt-4">36/458, Mangapathy Nayakan Street,</p>
                                                    <p>Chinthadripet, Chennai - 600 002</p>
                                                    <p>Cell: 9940240932</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        Thiruvetriyur Zone</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. L.Gomathy</p>
                                                    <p class="text-primary font-weight-bold">President</p>
                                                    <p class="mt-4">43, 13/4, Egavalli Amman Kovil</p>
                                                    <p>Street,</p>
                                                    <p>Thiruvetriyur, Chennai- 600 019</p>
                                                    <p>Cell: 7358436360</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. Jebamani</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">74, First Street,Vadakar</p>
                                                    <p>Palayam Nagar,</p>
                                                    <p>Thiruvetriyur, Chennai-600 019</p>
                                                    <p>Cell: 9884989458</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. V. Shoba Mary</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">13/7, Ramanujam Street,</p>
                                                    <p>Thiruvetriyur, Chennai-600 019</p>
                                                    <p>Cell: 8608614053</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. M. Sasikala</p>
                                                    <p class="text-primary font-weight-bold">Joint Secretary</p>
                                                    <p class="mt-4">13/4, 43, Egavalli Amman Kovil</p>
                                                    <p>Street,</p>
                                                    <p>Thiruvetriyur, Chennai- 600 019</p>
                                                    <p>Cell: 9840431812</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. Jeyamani</p>
                                                    <p class="text-primary font-weight-bold">Joint Secretary</p>
                                                    <p class="mt-4">61/23, Bharathiyar Nagar</p>
                                                    <p>First Street,</p>
                                                    <p>Ennore, Chennai-600 057</p>
                                                    <p>Cell: 860827301</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. Shanthi</p>
                                                    <p class="text-primary font-weight-bold">Joint Secretary</p>
                                                    <p class="mt-4">93C/12, T.S. Gopal Nagar,</p>
                                                    <p>Thiruvetriyur, Chennai- 600 019</p>
                                                    <p>Cell: 90094404935</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. Sudha</p>
                                                    <p class="text-primary font-weight-bold">Treasurer</p>
                                                    <p class="mt-4">204/44C, Egavalli Amman Kovil</p>
                                                    <p>Street,</p>
                                                    <p>Thiruvetriyur, Chennai- 600 019</p>
                                                    <p>Cell: 8122555551</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. L.Vijayalakshmi</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">204/44C, Egavalli Amman Kovil</p>
                                                    <p>Street,</p>
                                                    <p>Thiruvetriyur, Chennai- 600 019</p>
                                                    <p>Cell: 9790661587</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. V. Rajeswari</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">12A/13, K.R. Ramasamy Nagar</p>
                                                    <p>1st Street,</p>
                                                    <p>Thiruvetriyur, Chennai- 600 019</p>
                                                    <p>Cell: 9840250458</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. P. Amsa</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">13/6, Egavalli Amman</p>
                                                    <p>Kovil Street,</p>
                                                    <p>Thiruvetriyur, Chennai- 600 019</p>
                                                    <p>Cell: 9840431812</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms.S. Sujatha</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">13/7, Ramanujam Street,</p>
                                                    <p>T.S. R. Nagar, Chennai -600 019</p>
                                                    <p>Cell: 9176781603</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. G. Kanchana</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">124/16, Egavalli Amman </p>
                                                    <p>Kovil Street,</p>
                                                    <p>Thiruvetriyur, Chennai- 600 019</p>
                                                    <p>Cell: 9941580028</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. N. Kotteswari</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">12/7, Avvvai Nagar,Amsa</p>
                                                    <p>Thottam4th Street,</p>
                                                    <p>Thiruvetriyur, Chennai- 600 019</p>
                                                    <p>Cell: 9176832927</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. B. Jacintha Mary</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">13/7, Ramnujam Street,</p>
                                                    <p>T.S.R. Nagar,</p>
                                                    <p>Thiruvetriyur, Chennai- 600 019</p>
                                                    <p>Cell: 9789090321</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        62nd ward</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-6 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. V. Magizhvanan</p>
                                                    <p class="text-primary font-weight-bold">President</p>
                                                    <p class="mt-4">1E, New Balakrishnan Street,</p>
                                                    <p>Chintadridet, Chennai - 600 002</p>
                                                    <p>Cell: 9600140545</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. S. Ari Paulraj</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">9, Rex Street,</p>
                                                    <p>Chintadripet, Chennai - 600 002</p>
                                                    <p>Cell: 9840326386</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        Triplicane Zone</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-12 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.K.Balaji</p>
                                                    <p class="text-primary font-weight-bold">Triplicane Zone President</p>
                                                    <p class="mt-4">49, GajapathyStreet,Munusamy Nagar,</p>
                                                    <p>Triplicane, Chennai-600 005</p>
                                                    <p>Cell: 9094154746</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="second-list py-1">
                        <div class="second-li-title bg-warning d-flex justify-content-between align-items-center">
                            <div class="fs-6 pl-2 p-1 text-white"><i class="fa-solid fa-location-dot"></i> Chennai - Central</div>
                            <p class="h4 mr-4 text-white symp"></p>
                        </div>
                        <div class="second-li-content px-3">
                            <!-- Third List -->
                            <div class="third-list p-1 my-lg-1">
                                <div class="bg-primary third-li-title d-flex justify-content-between align-items-center">
                                    <p class="text-start h6 text-white"><i class="fa-solid px-2 fa-arrow-right"></i>
                                        District Committee</p>
                                    <p class="h4 mr-4 text-white symp"></p>
                                </div>
                                <div class="third-li-content">
                                    <div class="row">
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. D. Mariadass</p>
                                                    <p class="text-primary font-weight-bold">President</p>
                                                    <p class="mt-4">No. 3/2, Madha Koil Street,</p>
                                                    <p>M.H.Colony, Aminjikarai,</p>
                                                    <p>Chennai-600 029</p>
                                                    <p>Mobile: 9841639528</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Dr. M. Abubuccker</p>
                                                    <p class="text-primary font-weight-bold">General Secretary</p>
                                                    <p class="mt-4">20/21, Quiadamillet Street,</p>
                                                    <p>Azad Nagar, Aminjikarai,</p>
                                                    <p>Chennai- 600 029</p>
                                                    <p>Cell: 9941063786</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.E.Iyyasamy</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No. 2, Canal Bank Road,</p>
                                                    <p>West Namachivayapuram,</p>
                                                    <p>Choolaimedu, Chennai-600 094</p>
                                                    <p>Cell: 9884042462</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. R. Mari</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">6, Manjakollai Street,</p>
                                                    <p>Aminjikarai, Chennai- 600 029</p>
                                                    <p>Cell: 9445011124</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. G. Raja</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">20/45, Perumal Street,</p>
                                                    <p>Egmore, Chennai- 600 008</p>
                                                    <p>Cell: 9382714692</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mrs. K.Sivasankari</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">Subiksha Flats Door.No.G2,</p>
                                                    <p>Flat No. 45,Ammerjohn Street,</p>
                                                    <p>Choolaimedu, Chennai-94</p>
                                                    <p>Cell: 9025867342</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. Devashanmugam</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">Malar News Mart,</p>
                                                    <p>No. 61C/17-3C, Vellalar Street,</p>
                                                    <p>Ayanavaram, Chennai-600 023</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. P. Immanual</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">10/926, Sri Varshini Flats,</p>
                                                    <p>Ishwarya Garden 3rd Street,</p>
                                                    <p>Medavakkam, Chennai-600 100</p>
                                                    <p>Cell: 9790810589</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.K. Ramachandran</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">3/44, Dr. RadhaKrishnan Nagar</p>
                                                    <p>4th Street,Choolaimedu,</p>
                                                    <p>Chennai-600 094</p>
                                                    <p>Cell: 9840733963</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. N. Elyasingh</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No. 17, C.K. Naidu Street,</p>
                                                    <p>Ayanavaram, Chennai-600 023</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. M. Srinivasan</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">New No.8/ O.No.32,</p>
                                                    <p>Brindavan 3rd Street,</p>
                                                    <p>Chetpet, Chennai- 600 031</p>
                                                    <p>Cell: 9840592730</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mrs. Sivasankari</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">Ambika Apartments</p>
                                                    <p>Door No. G2 Flat No.45,</p>
                                                    <p>Ameerjohn Street, Choolaimedu,</p>
                                                    <p>Chennai-600 094</p>
                                                    <p>Cell: 9025867342</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. S. Ascar Ali</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No.18, Amman Koil Street,</p>
                                                    <p>M.H. Colony, Chennai- 600 029</p>
                                                    <p>Cell: 9710041382</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/Ascar Ali.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.Purasai Shanmugam</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">Malar News Mart,</p>
                                                    <p>61C/17-3C, Vellala Street,</p>
                                                    <p>Ayanavaram, Chennai- 600 023</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. V. Soundararajan</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">21, I Block, MMDA Colony,</p>
                                                    <p>Arumbakkam, Chennai-106</p>
                                                    <p>PH: 9962199146</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.M.Murali</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No.1/3,</p>
                                                    <p>Thiruvengadapuram 2nd Street,</p>
                                                    <p>Choolaimedu, Chennai- 600 094</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. Rajupillai</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">46, Vada Agaram 1st Street,</p>
                                                    <p>Choolaimedu, Chennai- 600 094</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. M. Prabhakaran</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No.175/129, West</p>
                                                    <p>Namachivayapuram,</p>
                                                    <p>Choolaimedu, Chennai-600 094</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. P. Bhuvaneswari</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No.31, Bajanai Koil Street,</p>
                                                    <p>Choolaimedu, Chennai- 600 094</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Ms. P.Clara</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">No.3/242, Gandhi Street,</p>
                                                    <p>Annai Indira Nagar,</p>
                                                    <p>Shanmugapuram, Chennai- 600 099</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. P. Arumugam</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">16, Jills Street, 1st Floor,</p>
                                                    <p>Chennai- 600 001</p>
                                                    <p>Cell: 9094077757</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. E. Anitha</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">4/2, Parijathambal Street,</p>
                                                    <p>Arumbakkam, Chennai - 600 106</p>
                                                    <p>Cell: 9884790482</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. S. Christian</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">11/47, 3 rd Street,</p>
                                                    <p>Dr. Radha Krishna Nagar,</p>
                                                    <p>Choolaimedu, Chennai-600 094</p>
                                                    <p>Cell: 7395951199</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mrs. S. Bhuvaneswari</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">2/20, Sakthi Nagar 1st Street,</p>
                                                    <p>Choolaimedu, Chennai-600 094</p>
                                                    <p>Cell: 9943292055</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mrs. V. Kalaiselvi</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">641, Rajipillai Thottam</p>
                                                    <p>T.Nagar, Chennai- 600 017</p>
                                                    <p>Cell: 7305307931</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mrs. R. Devishree</p>
                                                    <p class="text-primary font-weight-bold">Vice President</p>
                                                    <p class="mt-4">X/25, Gangaigaraipuram</p>
                                                    <p>T.Nagar, Chennai-600 017</p>
                                                    <p>Cell: 8667422393</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mrs. E. Jothi</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">E/19, Dr. Thomas Road,</p>
                                                    <p>T. Nagar, Chennai-600017</p>
                                                    <p>Cell: 9791163907</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. R. Vinoth</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">212/16, Indra Gandhi Nagar</p>
                                                    <p>1st Street,</p>
                                                    <p>Aminjikarai, Chennai- 600 029</p>
                                                    <p>Cell: 7358678090</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. Jeevagan</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">3/2, Thandaran lane,</p>
                                                    <p>Azhagappa Main Road,</p>
                                                    <p>Purasaiwalkkam,</p>
                                                    <p>Chennai-600 084</p>
                                                    <p>Cell: 9600050291</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.J.Jeyaprasant</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">33/33, 3rd Street,</p>
                                                    <p>Indira Gandhi Nagar,</p>
                                                    <p>Aminjikarai, Chennai- 600 029</p>
                                                    <p>Cell: 9941482811</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/Jeyaprasanth.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. A. Sagayanathan</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">85/34,Samipandaram street,</p>
                                                    <p>Chinthatripet, Chennai- 600 002</p>
                                                    <p>Cell: 7299844557, 9445644972</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. T. Suman</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">10, M.H.Colony 2nd Cross</p>
                                                    <p>Street,</p>
                                                    <p>Chinthadripet, Aminjikarai,Ch-29</p>
                                                    <p>Cell: 9841904727</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. R. Asokan</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">22/17A, Avvai Nagar,</p>
                                                    <p>Koyambedu,</p>
                                                    <p>Virugambakkam, Chennai-600 092</p>
                                                    <p>Cell: 7598853760</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. R. Sampath</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">2, Karunanidehi Nagar,</p>
                                                    <p>West Namachivayapuram,Chennai-94</p>
                                                    <p>Cell: 9444496394</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. Seerani T. Dhas</p>
                                                    <p class="text-primary font-weight-bold">Secretary</p>
                                                    <p class="mt-4">31/16, Seearanipuram,</p>
                                                    <p>T. Nagar, Chennai-600 017</p>
                                                    <p>Cell: 9790842165</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.G.B.Francis</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">No.10, Madha Kovil Street,</p>
                                                    <p>Muthirulandy Colony,</p>
                                                    <p>Aminjikarai, Chennai-600 029</p>
                                                    <p>Mobile: 9444417111</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.S.Ayyadurai Nadar</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">No. 1, Ayyavu Street,</p>
                                                    <p>Ayyavu Naidu Colony,</p>
                                                    <p>Aminjikarai, Chennai - 600 029</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.A.Mandra Kumar</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">34/33, 3rd Street,</p>
                                                    <p>Indira Gandhi Nagar,</p>
                                                    <p>Aminjikarai, Chennai- 600 029</p>
                                                    <p>Cell: 9043689253</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/Mantra kumar.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.G.Sundaramurthy</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">No.16/33,</p>
                                                    <p>Thiruvalluvarpuram 1st Street,</p>
                                                    <p>Choolaimedu, Chennai - 600 094</p>
                                                    <p>Cell: 9840787725</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr.B.Gnana Prakasam</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">No.11, Vada Agaram Street,</p>
                                                    <p>Choolaimedu, Chennai- 600 094</p>
                                                    <p>PH: 23744741</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 border border-1 border-dark p-3">
                                            <div class="row no-gutters">
                                                <div class="col-9">
                                                    <p class="text-danger font-weight-bold">Mr. K. Dhanasekaran</p>
                                                    <p class="text-primary font-weight-bold">Committee Member</p>
                                                    <p class="mt-4">1/42, Dr. Radhakrishnan Nagar</p>
                                                    <p>4th Street,Choolaimedu,</p>
                                                    <p>Chennai- 600 094</p>
                                                    <p>Cell: 8056268851</p>
                                                </div>
                                                <div class="col-3">
                                                    <img src="<?= $base_url ?>/img/OBearer/dc/none.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const listElement = document.querySelectorAll('.flex-list');
    const secondList = document.querySelectorAll('.second-list');
    const thirdList = document.querySelectorAll('.third-list');
    listElement.forEach(element => {
        const titleElement = element.getElementsByClassName('li-title');
        const contenteElement = element.getElementsByClassName('li-content');
        titleElement[0].addEventListener('click', function() {
            contenteElement[0].classList.toggle('active');
            this.classList.toggle('min');
        });
    });
    secondList.forEach(element => {
        const secondTitle = element.getElementsByClassName('second-li-title');
        const secondContent = element.getElementsByClassName('second-li-content');
        secondTitle[0].addEventListener('click', () => {
            secondContent[0].classList.toggle('active');
            secondTitle[0].classList.toggle('min');
        })
    })
    thirdList.forEach(element => {
        const thirdTitle = element.getElementsByClassName('third-li-title');
        const thirdContent = element.getElementsByClassName('third-li-content');
        thirdTitle[0].addEventListener('click', () => {
            thirdContent[0].classList.toggle('active');
            thirdTitle[0].classList.toggle('min');
        })
    })
</script>
<?php include_once("../master/footer.php"); ?>