<?php include_once("../master/header.php"); ?>
<style>
    .comitee {
        margin-left: 10px;
        margin-top: 1rem;
        box-shadow: 11px 4px 30px -7px rgba(144, 166, 173, 0.6);
        -webkit-box-shadow: 11px 4px 30px -7px rgba(144, 166, 173, 0.6);
        -moz-box-shadow: 11px 4px 30px -7px rgba(144, 166, 173, 0.6);
        padding-bottom: 1rem;
        padding-top: 1rem;
        /* height: 95vh;
        overflow: auto; */
        position: sticky;
        top: 15%;
    }

    .comitee p {
        font-size: 22px;
    }

    .comitee .state p {
        font-size: 18px;
        margin-bottom: 0;
        margin-top: 2rem;
        font-weight: 600;
    }

    .comitee .state hr {
        margin-top: 0;
    }

    .comitee .state .state-option {
        display: flex;
        flex-direction: column;
    }

    .comitee .state .state-option input[type="checkbox"] {
        margin-left: 1rem;
        margin-block: 7px;
        cursor: pointer;
    }

    .comitee .state .state-option label {
        cursor: pointer;
    }

    .comitee .state .state-option label:hover {
        color: rgb(9, 95, 134);
    }

    .comitee-data {
        /* margin-top: 3rem; */
        /* height: 87vh; */
        /* overflow: auto; */
    }

    .comitee-head {
        margin-top: 1rem;
        text-align: center;
        font-weight: 600;
        font-size: 23px;
    }

    .comitee-data .comitee-data-card {
        box-shadow: 2px 2px 19px -1px rgba(144, 166, 173, 0.6);
        -webkit-box-shadow: 2px 2px 19px -1px rgba(144, 166, 173, 0.6);
        -moz-box-shadow: 2px 2px 19px -1px rgba(144, 166, 173, 0.6);
        padding: 1rem;
        border-radius: 1rem;
        margin: 0.5rem;
    }

    .comitee-data .comitee-data-card:hover {
        box-shadow: none;
        border: 1px solid rgb(101, 203, 221);
        background-color: rgb(216, 250, 255);
    }

    .comitee-data .comitee-data-card .comitee-img {
        display: flex;
        justify-content: center;
    }

    .comitee-data .comitee-data-card .comitee-img img {
        height: 7rem;
        border-radius: 1rem;
    }

    .comitee-data .comitee-data-card .data .name {
        color: rgb(22, 116, 160);
        font-size: 18px;
        font-weight: 700;
        margin-top: 1rem;
        margin-bottom: 0;
        text-align: center;
    }

    .comitee-data .comitee-data-card .data .position {
        color: rgb(73, 73, 73);
        font-size: 16px;
        font-weight: 600;
        text-align: center;
    }

    .comitee-data .comitee-data-card .data .address p {
        margin: 0;
        font-size: 15px;
    }

    .comitee-data .comitee-data-card-main {
        display: none;
        padding-top: 5rem;
    }
    .comitee-data .comitee-data-card-main:first-child{
        padding-top:0;
    }

    .comitee-data .comitee-data-card-main.active {
        display: block;
    }

    .comitee-sub-head {
        color: #1674a0;
        font-weight: 500;
        font-size: 17px;
        margin-top: 3rem;
    }

    .comitee .list .list-title {
        background-color: #1674a0;
        margin-inline: 1rem;
        text-align: center;
        color: #ffffff;
        margin-top: 2rem;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 d-none d-lg-block" id="option-pannel">
            <div class="comitee">
                <div class="text-right mr-3">
                    <button class="btn btn-danger d-lg-none mb-1 px-3" onclick="setOption()">X</button>
                </div>
                <div class="list">
                    <p class="list-title">State List</p>
                    <div class="state">
                        <hr>
                        <div class="state-option">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-tamilnadu" value="tamilnadu-data" checked>
                                <label class="form-check-label" for="checkbox-tamilnadu">Tamilnadu</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-puduchery" value="puduchery-data">
                                <label class="form-check-label" for="checkbox-puduchery">Puduchery</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-andhra-pradesh" value="andhra-pradesh-data">
                                <label class="form-check-label" for="checkbox-andhra-pradesh">Andhra Pradesh</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-karnataka" value="karnataka-data">
                                <label class="form-check-label" for="checkbox-karnataka">Karnataka</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-kerala" value="kerala-data">
                                <label class="form-check-label" for="checkbox-kerala">Kerala</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-telangana" value="telangana-data">
                                <label class="form-check-label" for="checkbox-telangana">Telangana</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-delhi" value="delhi-data">
                                <label class="form-check-label" for="checkbox-delhi">Delhi</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-maharastra" value="maharastra-data">
                                <label class="form-check-label" for="checkbox-maharastra">Maharastra</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-andaman-and-nicobar-islands" value="andaman-and-nicobar-islands-data">
                                <label class="form-check-label" for="checkbox-andaman-and-nicobar-islands">Andaman
                                    and Nicobar Islands</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-bihar" value="bihar-data">
                                <label class="form-check-label" for="checkbox-bihar">Bihar</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-gujarat" value="gujarat-data">
                                <label class="form-check-label" for="checkbox-gujarat">Gujarat</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-jarkhand" value="jarkhand-data">
                                <label class="form-check-label" for="checkbox-jarkhand">Jarkhand</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-madhya-pradesh" value="madhya-pradesh-data">
                                <label class="form-check-label" for="checkbox-madhya-pradesh">Madhya Pradesh</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-odisha" value="odisha-data">
                                <label class="form-check-label" for="checkbox-odisha">Odisha</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-rajasthan" value="rajasthan-data">
                                <label class="form-check-label" for="checkbox-rajasthan">Rajasthan</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-uttar-pradesh" value="uttar-pradesh-data">
                                <label class="form-check-label" for="checkbox-uttar-pradesh">Uttar Pradesh</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" onchange="changeData(this)" id="checkbox-west-bengal" value="west-bengal-data">
                                <label class="form-check-label" for="checkbox-west-bengal">West Bengal</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 d-lg-block" id="content-pannel">
            <p class="comitee-head pt-3">State Commitee</p>
            <button class="btn btn-sm btn-primary d-lg-none mb-1" onclick="setOption()">Options</button>
            <div class="px-lg-3 px-3 comitee-data">


                <div class="comitee-data-card-main active" id="tamilnadu-data">
                    <p class="comitee-sub-head mb-0"> Tamilnadu</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/tvp.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. T.V. Pandiarajan</p>
                                    <p class="position">STATE PRESIDENT</p>
                                    <div class="address">
                                        <p>18A, Ellaiamman Kovil Street,</p>

                                        <p>West Mambalam, Chennai- 600 033</p>
                                        <p>Ph: 9841190050, 8667716341</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/st.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.I.Stephen</p>
                                    <p class="position">STATE GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>32/1, Sadaiappan Street,</p>

                                        <p>Mandeveli, Chennai-600 028</p>
                                        <p>Ph: 9952049026</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/vivek.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.S. Vivekanandan</p>
                                    <p class="position">STATE TREASURER</p>
                                    <div class="address">
                                        <p>Ambal nagar, Egattuthangal</p>

                                        <p>Chennai-600 032</p>
                                        <p>Cell: 9841302342</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Saravanan.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. R. Saravanan</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>No. 13/5, M.H. Colony,</p>

                                        <p>Aminjikarai, Chennai - 600 029,</p>
                                        <p>Cell: 9171373625</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/arb.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.A.Robert Bruce</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>AP118, AF Block, I Street,</p>

                                        <p>Anna Nagar, Chennai- 600 040</p>
                                        <p>PH: 9789993569</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/asan.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. K.M. Asan Sheik</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>Royapetttai, Chennai-600 014</p>

                                        <p>Chennai-600 032</p>
                                        <p>Cell: 9444458715</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/god.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.D. Godwin Arul Singh</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>3B, &#39;Indra Foundation&#39; Sante Grand,</p>

                                        <p>Santhome Nedunsalai, Santhome, Chennai- 600 004</p>
                                        <p>Cell: 8754448899</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/ram.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Kayilai S. Ramamurthy</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>Harur Taluk,</p>

                                        <p>Dharamapuri District-636903</p>
                                        <p>Cell: 9965444045</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Dr.Ruby.R.Manoharan.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Dr.Ruby.R.Manoharan</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>M/s. Ruby Builders,</p>
                                        <p>247/B, Velachery Main Road,</p>

                                        <p>Selaiyur, Chennai-600 073</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/sik.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.S. Sikkanthar</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>12/10, Techers Colony, 4th Street</p>

                                        <p>Nanganallur, Chennai-600 061</p>
                                        <p>Cell:9677228669</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mrs. G. Shelin</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>SrivaikundamTaluk,</p>

                                        <p>Thootukudi District-628 809</p>
                                        <p>Cell:9488609891</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Sivaji.jpeg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Sivaji Nathan</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>Mambalam Main Road,</p>

                                        <p>T. Nagar, Chennai-600 017</p>
                                        <p>PH: 9444487557</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.A.S.P.Sivasundaram</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>No.137, Harivapatty,</p>

                                        <p>Madurai-4,</p>
                                        <p>PH: 9445407474</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/S.Rajendran.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. S. Rajendran</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>Opp. Indian Bank, Arur Taluk &amp; Post,</p>

                                        <p>Dharmapuri District - 636 903</p>
                                        <p>Cell: 9443981683</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. SindhuBaskar</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>1st Floor, Royapettah High Road,</p>

                                        <p>Chennai - 600 014</p>
                                        <p>Cell: 9444902038</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Barnabas sahayaraj.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. A. Barnabas Sahayaraj</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>38, Door.No.6, 18th west cross st,</p>

                                        <p>MKB Nagar, Chennai-600 039</p>
                                        <p>Cell: 9840889879</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/P.T.Rani.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Ms.P.T.Rani</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>LIC Nagar 5th Main Road,</p>

                                        <p>Madipakkam, Chennai - 600 091</p>
                                        <p>Cell: 9444303917</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. C. Charles</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>II Street, Ayanavaram,</p>

                                        <p>Chennai- 600 023</p>
                                        <p>Cell: 9941697266</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mrs. B. Kanniga,M.A.</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>Maduranthakam-603 306</p>

                                        <p>Kancheepuram District</p>
                                        <p>Cell: 9790168820</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Richard Rajesekaran.jpeg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.T.N.Richard Rajasekar</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>T.K.M. Road, Vallam,</p>

                                        <p>Chengalpet District-603 002</p>
                                        <p>Cell: 9360247991</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.Sathyaseelan</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>Zamin Pallavaram</p>

                                        <p>Chennai - 600 043</p>
                                        <p>Cell : 9444247024</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Nallaarivazhagan.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. P. Nalla Arivazhagan</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>8, NSK Street, VOC Nagar,</p>

                                        <p>Pammal, Chennai-600 075</p>
                                        <p>Cell: 9841616979</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mrs.K.Y.Kumudhini</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>7A, Arumbakkam Road,</p>

                                        <p>Saligramam, Chennai - 600 093</p>
                                        <p>Cell: 9444561986</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. A.V. Nagarajan</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>Haritha Enclave, CTO Colony,</p>

                                        <p>West Tambaram, Chennai-600 045</p>
                                        <p>Cell: 9443809788, 9043067298</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Dr. George Bernadshaw</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>15/37, J.J.Khan Street,</p>

                                        <p>Royapettah,Chennai- 600 014</p>
                                        <p>Cell: 9884320690</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/kamlamurugan.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Ms. K.R. Kamala Murugan</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>Jegajeevanram Nagar</p>

                                        <p>Selaiyur, Chennai- 600 073</p>
                                        <p>Cell: 9790837739</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/SelvaRamalingam.jpeg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. R. Selva Ramalingam</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>Moolapathai, Kachupalli Post,</p>

                                        <p>Edapadi, Salem- 637102</p>
                                        <p>Cell: 8050195385</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. D.Lurduraj</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>Near ATC Nagar, Azhagapuram,</p>

                                        <p>Vithur, Chennai- 600 103</p>
                                        <p>Cell: 8220360839</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mrs.S. Idhaya Deepa</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>Ishwarya Garden 3rd Street,</p>

                                        <p>Medavakkam, Chennai- 600 100</p>
                                        <p>Cell: 9841619946</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Dr. M. Manohar Doss</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>H.68/1, Korattur Housing Board,</p>

                                        <p>Korattur, Chennai - 600 080</p>
                                        <p>Cell: 7550078032, 9444440032,</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. E. Anbaras</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>No.16/44, Kanni Amman koilStreet,</p>

                                        <p>Lakshmipuram, Chennai-600 099</p>
                                        <p>Cell: 9941697266</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. G. Ravi Dev Kumar</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>Puliyanthoppu, P.B.Post,</p>

                                        <p>Chennai - 600 012</p>
                                        <p>Cell: 9841838421</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Chockaslingam.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.S.Chockalingam</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>Pandamangalam Via,Paramathivelur Taluk,</p>

                                        <p>Namakkal District</p>
                                        <p>Cell: 9842469506</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. M.Antony</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>Moors Road, Thousand Lights</p>

                                        <p>Chennai-600 006</p>
                                        <p>Cell: 9952919922, 7299509090</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. M.C. Raghu</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>20, Suvasthik Apts,Chellammal Street,</p>

                                        <p>Shenoy Nagar, Chennai- 600 030</p>
                                        <p>Cell: 9380242878</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. P. Shanmugavel</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>10/16, 7th Trust Cross Street,</p>

                                        <p>Mandavelipakkam, Chennai-600 028</p>
                                        <p>Cell: 9444682535</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/pr.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. M. Prince Devasagayam</p>
                                    <p class="position">State Vice President</p>
                                    <div class="address">
                                        <p>6, 2nd Main Road,North Sriram Nagar,</p>

                                        <p>West Tambaram,Chennai-600 045</p>
                                        <p>Cell: 9841552618</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/tb.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Thanga baskar,BBA</p>
                                    <p class="position">STATE DEPUTY GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>29/89 Iyyappa Apartments</p>

                                        <p>Virugambakkam, Chennai-600 092</p>
                                        <p>Cell: 9940581195</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/mur.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Podi Lion. Murugesan</p>
                                    <p class="position">STATE DEPUTY GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>North Street, Podinayakanoor</p>

                                        <p>Theni District - 625513</p>
                                        <p>Cell: 9842556612, 9042442111</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. R. Venkatesan,BA,BL</p>
                                    <p class="position">STATE DEPUTY GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>103, A.K.G. 50 ft. Road</p>

                                        <p>Cellur, Madurai - 625 020</p>
                                        <p>Cell: 09443703561</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Andal.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Ms. G. Andal</p>
                                    <p class="position">STATE DEPUTY GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>Shenoy Nagar</p>

                                        <p>Chennai- 600 030</p>
                                        <p>Cell: 7200094440</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. K. Arunachalam</p>
                                    <p class="position">STATE DEPUTY GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>Arun Agro</p>

                                        <p>Morappur - 635305</p>
                                        <p>Cell: 9626293829</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Lion Lenin.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. E. Lion Lenin</p>
                                    <p class="position">STATE DEPUTY GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>No. 19/40, Sheik Mohideen Subhedhar Street</p>

                                        <p>Strahans Road, Chennai - 600 012</p>
                                        <p>Cell:8838690014 / 9087707780</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. S. Surgunaraj Rajadurai</p>
                                    <p class="position">STATE DEPUTY GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>5/140, 2nd Street, Thirperumal Nagar,</p>

                                        <p>Kollapakkam, Chennai-600 122</p>
                                        <p>Ph: 9841256123</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Shanmugasundaram.jpeg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Dr. Shanmuga Sundaram</p>
                                    <p class="position">STATE DEPUTY GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>Governer Thoppu, Spining Mill Road,</p>

                                        <p>Uthangari Post &amp; Taluk,Krishnagiri-635 207</p>
                                        <p>Ph: 9941404000</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mrs.AliceManohari</p>
                                    <p class="position">STATE DEPUTY GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>No.13, G.S.Nagar,</p>

                                        <p>Ramapuram, Chennai - 600 089</p>
                                        <p>Ph: 9444902038</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Karathe Selvam</p>
                                    <p class="position">STATE DEPUTY GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>R/15, Pushpha Nagar,</p>

                                        <p>Nungambakkam, Chennai- 600 034</p>
                                        <p>PH: 9440138294</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Er. Y. Cycilraj</p>
                                    <p class="position">STATE DEPUTY GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>N.No.11/1, N.No.5/1, Pari Streeet,</p>

                                        <p>Choolaimedu,Chennai- 600094</p>
                                        <p>PH: 9444084312</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. A. Edwin Bennet</p>
                                    <p class="position">STATE DEPUTY GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>5/3, Venugopalswamy Koil Street,</p>

                                        <p>Perambur, Chennai- 600 011</p>
                                        <p>PH: 7811844444</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.C. Sathish Prabhu</p>
                                    <p class="position">STATE DEPUTY GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>49, Pillayar Koil Street,</p>

                                        <p>Saidapet, Chennai- 600 025</p>
                                        <p>PH: 7010749472</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.S. Jeyachandran</p>
                                    <p class="position">STATE DEPUTY GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>10/18, 2nd cross Street,</p>

                                        <p>Baby Nagar, Velechery, Chennai-42</p>
                                        <p>PH: 7418360401</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/ti.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.C. Dilip</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>Vinayakapuram, Ambatur</p>

                                        <p>Chennai-600 053</p>
                                        <p>Cell: 7010040970, 9941962100</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/ks.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. P. KalyanaSundaram</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>Kottayur Post, ThuraiyoorTaluk</p>

                                        <p>Trichy District</p>
                                        <p>Cell: 8870790411</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/js.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.O Justin Song</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>Post- 629 178</p>

                                        <p>Kanyakumari District</p>
                                        <p>Cell: 7598183169</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Selvaraj.M.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Selvaraj</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>C/1, Arunavya Apartment</p>

                                        <p>T.Nagar, Chennai- 600 017</p>
                                        <p>Cell: 9840681788</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/c.sugumar.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. C. Sugumar</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>234/B, Market VedhiHarur Post</p>

                                        <p>Dharmapuri District - 636903</p>
                                        <p>PH: 9894613486</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Bharathi.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Ms. S. Bharathi</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>M.M Road, Pachalam,</p>

                                        <p>Kochi - 682 012, Kerala</p>
                                        <p>Cell: 9037940879</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Afroze Ahamed.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.A.V.Afroze Ahammed</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>45/6, Kattur Sadaiappan Street</p>

                                        <p>Perimedu, Chennai - 600 003</p>
                                        <p>Cell: 9952046386</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Ms.K.Amala</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>Karungal, Karungal Post</p>

                                        <p>Kanyakumari Jilla-629 157</p>
                                        <p>Cell: 9786364705</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Jeyaseelan.p.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. P. Jayaseelan</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>Thodukulam, kanchirkodu Post,</p>

                                        <p>Kanyakumari District-629 155</p>
                                        <p>Cell: 9442394779</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Dr. D.Kirubakaran</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>Accelvadi Post, ArurVattam</p>

                                        <p>Dharmapuri District-636 809</p>
                                        <p>Cell: 9842906411</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Amalraj</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>ManaliThakkalai</p>

                                        <p>Kanyakumari District</p>
                                        <p>Cell: 9443352078</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Dr.N. Rhohini</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>PonamalleKundu Post</p>
                                        <p>Kamatchipuram (via)</p>

                                        <p>Theni District- 625520</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/S. Johnson.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. S. Johnson</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>1st Block, DMH. Road,</p>

                                        <p>Perambur, Chennai - 600 011</p>
                                        <p>Cell: 9884288117</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/V. Arumugam.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.V. Arumugam</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>Ambasamudram Tk,</p>

                                        <p>Tirunelveli District</p>
                                        <p>Cell: 8220602588</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/T.S. Arulraj.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. T. S. Arulraj</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>Santhome, Mylapore,</p>

                                        <p>Chennai- 600 004</p>
                                        <p>Cell: 9600191012</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Kavitha Gandhi.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Ms. Kavitha Gandhi</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>Periyar Nagar, S.M.Nagar Post,</p>

                                        <p>Chennai-600 062</p>
                                        <p>Cell: 9080428205</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Jeyaseelan.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. A. Jeyaseelan</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>Masthangori Street,</p>

                                        <p>Adambakkam, Chennai-600 088</p>
                                        <p>Cell: 9840430086</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Nagavalli.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mrs. M. Nagavalli</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>194/B, MPM Street,</p>

                                        <p>Vyasarpadi, Chennai-39</p>
                                        <p>Cell: 8838290208</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Ravichandran.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. R. Ravichandran</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>Muthamil Nagar, Kodungaiyur,</p>

                                        <p>Chennai- 600 110</p>
                                        <p>Cell: 8838036550</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Shakir Ahamed.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.V.Shakir Ahammed,B.Com.,LLB.,</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>12/23, Iyyam Perumal Street,</p>

                                        <p>Royapettah, Chennai- 600 014</p>
                                        <p>Cell: 9940300137</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. C. Herbert</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>Central School Road,Gill Nagar,</p>

                                        <p>Choolaimedu,Chennai - 600 094</p>
                                        <p>Cell: 9789899009</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. A. Nanjil Micheal</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>13/19, Sahaya Matha Street,</p>

                                        <p>Kanyakumari District- 629 702</p>
                                        <p>Cell: 9843910430</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.Babu (a) Agamadulla</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>60, Ahavanai majit street,</p>

                                        <p>Dharapuram, Tiruppur District - 638 656</p>
                                        <p>Cell: 9786319640</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.V.Rathinam</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>16, Indra Gandhi Nagar,</p>

                                        <p>Aminjikarai, Chennai-29</p>
                                        <p>Cell: 9445010467</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. S. Johnson</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>S.M.S.Flat, B4, Ashok Nagar,</p>

                                        <p>West Saidapet, Chennai - 600 068</p>
                                        <p>Cell: 9080401519</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. R. Richard Regan</p>
                                    <p class="position">STATE SECRETARY</p>
                                    <div class="address">
                                        <p>26. Old. No.8A, 2n Cross Bajanai Koil Street</p>

                                        <p>Villivakkam, Chennai- 600 049</p>
                                        <p>Cell: 9940150760</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Muthu Ramalingam.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.M. Muthu Ramalingam</p>
                                    <p class="position">STATE LEGAL ADVISOR</p>
                                    <div class="address">
                                        <p>66, 1/115, New Vellalar Street,</p>

                                        <p>Kodambakkam, Chennai-600 024</p>
                                        <p>Cell: 9444300323</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Dr. M. Manohar Doss</p>
                                    <p class="position">STATE LEGAL ADVISOR</p>
                                    <div class="address">
                                        <p>H.68/1, Korattur Housing Board,</p>

                                        <p>Korattur, Chennai - 600 080</p>
                                        <p>Cell: 7550078032, 9444440032</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.D. Yesa, B.A., BL.,</p>
                                    <p class="position">STATE LEGAL ADVISOR</p>
                                    <div class="address">
                                        <p>F3, Plot No.5016, Ram Nagar North 4th Street,</p>

                                        <p>Madipakkam, Chennai- 600 091</p>
                                        <p>Cell: 9840888560</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Dr.V.Nagachandra</p>
                                    <p class="position">STATE LEGAL ADVISOR</p>
                                    <div class="address">
                                        <p>½A, Thiruveethi Amman Koil 2nd Cross Street</p>

                                        <p>Thandalam, Chennai-600 077</p>
                                        <p>Cell: 9841725382</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. B. Ravi</p>
                                    <p class="position">STATE EXECUTIVE COMMITTEE MEMBER</p>
                                    <div class="address">
                                        <p>Uthangarai Post &amp;Taluk,</p>

                                        <p>Krishnagiri District</p>
                                        <p>Cell: 8526382305</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. A. Lazer</p>
                                    <p class="position">STATE EXECUTIVE COMMITTEE MEMBER</p>
                                    <div class="address">
                                        <p>Mr. A. Lazer</p>

                                        <p>171/ M.T.H. Road, Villivakkam,</p>
                                        <p>Chennai-600 049</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.K.Kondaldhasan</p>
                                    <p class="position">STATE EXECUTIVE COMMITTEE MEMBER</p>
                                    <div class="address">
                                        <p>138, Singanna chetty street,</p>

                                        <p>Chinthadripet, Chennai- 600 002,</p>
                                        <p>Cell: 9445977984</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. P. Jerry</p>
                                    <p class="position">STATE EXECUTIVE COMMITTEE MEMBER</p>
                                    <div class="address">
                                        <p>No. 45, School Road,</p>

                                        <p>Chetpet, Chennai - 600 031</p>
                                        <p>Cell: 9884241324</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. S. Sintha Gyanaraj</p>
                                    <p class="position">STATE EXECUTIVE COMMITTEE MEMBER</p>
                                    <div class="address">
                                        <p>Selvanagar Extn.</p>

                                        <p>Injambakkam, Chennai- 600 115</p>
                                        <p>Cell: 9944309625</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="comitee-data-card-main" id="puduchery-data">
                    <p class="comitee-sub-head mb-0"> Puduchery</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. S.Kamalakannan</p>
                                    <p class="position">PRESIDENT</p>
                                    <div class="address">
                                        <p>ThulukanathammanNagar,</p>

                                        <p>Puducherry-605 004</p>
                                        <p>Cell: 9362424294</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. M.R.Susairaj</p>
                                    <p class="position">VICE PRESIDENT</p>
                                    <div class="address">
                                        <p>Ariankuppam &amp; Post,</p>

                                        <p>Puducherry-605 007</p>
                                        <p>Cell: 9655151584</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.S. Sundaravadivelu,</p>
                                    <p class="position">GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>1, BharathimStreet</p>

                                        <p>Uthiravalinipettai, Vallianoor</p>
                                        <p>Puducherry-605 110</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. K. Prakash ,</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>Vice President</p>

                                        <p>19, Asokan Street, Nethaji Nagar</p>
                                        <p>Cell: 9786484808</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.G.Pradeepkumar</p>
                                    <p class="position">Vice President,</p>
                                    <div class="address">
                                        <p>No.45, Vannier Street,Veerampattinam,</p>

                                        <p>Ariyankuppam, Puducherry-605007</p>
                                        <p>Cell: 9629662286</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.H.Murali</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>No.17, Nehru Street,Bhavani Nagar,</p>

                                        <p>Veerampattinam, Puducherry - 605007</p>
                                        <p>Cell: 9944980875</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.B.Gunaseelan</p>
                                    <p class="position">Secretary</p>
                                    <div class="address">
                                        <p>Veerampattinam, Ariyankuppam</p>

                                        <p>Puducherry-605 007</p>
                                        <p>Cell: 9003634817</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. N. Vinoth kumar</p>
                                    <p class="position">Executive Member</p>
                                    <div class="address">
                                        <p>No.63, Solai Gounder Street</p>

                                        <p>Ariyankuppam, Puducherry-605007</p>
                                        <p>Cell: 9786323103</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. P. Barathi</p>
                                    <p class="position">Executive Member</p>
                                    <div class="address">
                                        <p>14, Sridhar Nagar, Ariyankuppam,</p>

                                        <p>Puducherry - 605007</p>
                                        <p>Cell: 9442721474</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. T. Radhakrishnan</p>
                                    <p class="position">Executive Member</p>
                                    <div class="address">
                                        <p>Veerampattinam</p>

                                        <p>Puducherry-605 007</p>
                                        <p>Cell: 8754981105</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Saran Raj</p>
                                    <p class="position">Executive Member</p>
                                    <div class="address">
                                        <p>Executive Member</p>
                                        <p>1G, Droupathi Amman Koil Street</p>

                                        <p>Ariyankuppam, Puducherry - 605007</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="comitee-data-card-main" id="andhra-pradesh-data">
                    <p class="comitee-sub-head mb-0"> Andhra Pradesh</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. N. Anand Babu</p>
                                    <p class="position">PRESIDENT</p>
                                    <div class="address">
                                        <p>Rajiv Colony, Pulivendula Road,</p>

                                        <p>Kadapa District, Andhra Pradesh</p>
                                        <p>Cell: 9676815838</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Annamm.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mrs. A. Annamma</p>
                                    <p class="position">VICE PRESIDENT</p>
                                    <div class="address">
                                        <p>Akkayapalli, Kadappa,</p>

                                        <p>Andhra Pradesh State</p>
                                        <p>Cell:9848796547</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. N. Noone Prasad</p>
                                    <p class="position">VICE PRESIDENT</p>
                                    <div class="address">
                                        <p>SPSR Nellore District</p>

                                        <p>Andhra Pradesh - 524 227</p>
                                        <p>Cell: 9441123448</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="comitee-data-card-main" id="karnataka-data">
                    <p class="comitee-sub-head mb-0"> Karnataka</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. T.E. Govindaraj</p>
                                    <p class="position">PRESIDENT</p>
                                    <div class="address">
                                        <p>Panchamukhi, Ganapathi Temple</p>

                                        <p>Bangalore-560 033</p>
                                        <p>Cell: 9342155033</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. D. Sendeel Kumar,</p>
                                    <p class="position">GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>2nd Cross, Malappa Layout</p>

                                        <p>Babusapalya, Bangalore - 560 043</p>
                                        <p>Cell: 7760505269</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Smt.M. Shakila Mahesh,</p>
                                    <p class="position">TREASURER</p>
                                    <div class="address">
                                        <p>1st Block, H.B.R. Layout</p>

                                        <p>Kalyanagar, Bangalore-560 033</p>
                                        <p>Cell: 8497802127</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. D. Sunder Rajan</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>No.23, Bahujan Bhavana</p>
                                        <p>Cantonment, ShivajiNagar</p>

                                        <p>Bangalore-560 051</p>
                                        <p>Tel: 25362777</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri .E. Jagadish ,</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>No.1227, Goruca, 19th Main,</p>
                                        <p>43rdcross, 5th Block</p>

                                        <p>H.B.R. Layout, Bangalore-560 043</p>
                                        <p>Cell: 9611140545</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Smt. M.K. Mayura Kumar</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>302, Fortitude&#39;s Elina,</p>
                                        <p>Bikasupura,Uttarahalli Hobli</p>

                                        <p>Bangalore - 560 060</p>
                                        <p>Cell: 9008488433</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Smt. D. Mohan Kumari</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>38, 3rd Cross, Lakshmi Nagar</p>
                                        <p>Basaveshwara Nagar,</p>

                                        <p>Bangalore - 560 0479</p>
                                        <p>Cell: 9916223366</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. N. Nagarajan ,</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>No.46, 3rd cross,</p>
                                        <p>Coxtown, Jeevanahalli</p>

                                        <p>Bangalore -560 005</p>
                                        <p>Cell: 9538445588</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Smt. S. Rebecca Shanu</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>GI, Sona Venky Harshi Apts,</p>
                                        <p>2nd Cross, Malappa Layout</p>

                                        <p>Babusapalya, Bangalore - 560 043</p>
                                        <p>Cell: 9739635512</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Smt. B. Selvi</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>329/1, Opp to Jayalakshmi School</p>
                                        <p>R.S. Palya, M.S Nagar,</p>

                                        <p>Bangalore - 560 033</p>
                                        <p>Cell: 7676466312</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Smt.D.V. Sudha Chitra Lekha,</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>No.58, 2nd cross,</p>
                                        <p>Muthappa Block, Ganga Nagar</p>

                                        <p>Bangalore-560 032</p>
                                        <p>Cell: 9980324637</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/K.G.Vilop.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. K.G. Vilop</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>16, 22nd Cross, Krishna Layout,</p>
                                        <p>Hulimavu, Bannerugatta Road,</p>

                                        <p>Bengaluru - 560076</p>
                                        <p>Cell: 9620504282</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. D. Sunder Rajan</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>No.324, 324, 2nd Floor,</p>
                                        <p>3rd D Main, Ombr Layout,</p>

                                        <p>Bangalore - 560 043</p>
                                        <p>Cell: 9844582046</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Shivraj.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. N.B. Shivraj</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>825, 2nd A Cross 1st Block,</p>
                                        <p>HRBR Layout ,Kalyan Nagar,</p>

                                        <p>Bangalore</p>
                                        <p>Cell: 09449567294</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Andrea_Alphonso.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Ms. Andrea Alphonso</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>29, 6th Cross, Anjaneya Temple</p>
                                        <p>29, 6th Cross, Anjaneya Temple</p>

                                        <p>Street, Bangalore- 560047</p>
                                        <p>Cell: 9740366499</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. C. Sudindra Kumar</p>
                                    <p class="position">Secretary</p>
                                    <div class="address">
                                        <p>No.9/1, 2nd B Cross</p>
                                        <p>Manorayana Palya, R.T.Nagar Post,</p>

                                        <p>Bangalore - 560 032</p>
                                        <p>Cell: 7829846555</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Saravanan2.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. T.Saravanan</p>
                                    <p class="position">Secretary</p>
                                    <div class="address">
                                        <p>351, 2nd Floor,</p>
                                        <p>3rd E main Road, OMBR Layout</p>

                                        <p>Bangalore- 560043</p>
                                        <p>Cell: 9902135160</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. O. Chikkanna</p>
                                    <p class="position">Advisor</p>
                                    <div class="address">
                                        <p>9/1, 2nd B Cross</p>
                                        <p>Gopallappa Layout, Manorayana palya</p>

                                        <p>R.T. Nagar, Bangalore - 560 032</p>
                                        <p>Cell: 9880069518</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. M. Gopi</p>
                                    <p class="position">Advisor</p>
                                    <div class="address">
                                        <p>#320, 3 &#39;C&#39; Main</p>
                                        <p>OMBR Layout, Banaswadi</p>

                                        <p>Bangalore - 560 033,</p>
                                        <p>Cell: 7829846555</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="comitee-data-card-main" id="kerala-data">
                    <p class="comitee-sub-head mb-0"> Kerala</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Charles</p>
                                    <p class="position">PRESIDENT</p>
                                    <div class="address">
                                        <p>Chelembra (Via)- 673634</p>

                                        <p>Malappusam, Kerala State</p>
                                        <p>Cell: 9605183939</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. A. Thiagarajan</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>Chunkapara Junction</p>
                                        <p>Pathan Amthitta District,</p>

                                        <p>Kerala State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. K. Wilson</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>Kaliakkavilai via,</p>

                                        <p>Kanyakumari District</p>
                                        <p>Cell: 09442368095</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="comitee-data-card-main" id="telangana-data">
                    <p class="comitee-sub-head mb-0"> Telangana</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Chitanyakumar.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">A.P.K. Chaitanya Kumar</p>
                                    <p class="position">PRESIDENT</p>
                                    <div class="address">
                                        <p>Kawadiguda, Hyderabad-500 080</p>

                                        <p>Telangana State</p>
                                        <p>PH:+919701772233</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Veddepally-Rajeshwar.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">V. Vaddepally Rajeshwar</p>
                                    <p class="position">VICE PRESIDENT</p>
                                    <div class="address">
                                        <p>Sithaphalmandi, Secundrabad-500 080</p>

                                        <p>Andhra Pradesh State</p>
                                        <p>PH: +919849245645</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Veera-Bhadri-Reddy-Gade.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">V. Veera Bhadri Reddy Gade</p>
                                    <p class="position">TREASURER</p>
                                    <div class="address">
                                        <p>Inkollu MD Prakasam District</p>

                                        <p>Andhra Pradesh-523 167</p>
                                        <p>PH.9746026119</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="comitee-data-card-main" id="delhi-data">
                    <p class="comitee-sub-head mb-0"> Delhi</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Yesudian Paul</p>
                                    <p class="position">PRESIDENT</p>
                                    <div class="address">
                                        <p>Dilsad Garden, Delhi -110095</p>

                                        <p>Cell: 9212733613</p>
                                        <p>Ph: 011-22119719</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. Paul Angels</p>
                                    <p class="position">VICE PRESIDENT</p>
                                    <div class="address">
                                        <p>Baba Harak Singh Marg</p>

                                        <p>New Delhi-110001</p>
                                        <p>PH: 09910606572</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. V. S. Chauhan (Advocate)</p>
                                    <p class="position">VICE PRESIDENT</p>
                                    <div class="address">
                                        <p>33- Indra prastha Extension</p>

                                        <p>Delhi -110 092</p>
                                        <p>Cell: 9810019408</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. Abraham Mathew</p>
                                    <p class="position">General Secretary</p>
                                    <div class="address">
                                        <p>P-13/C-2, Dilshad Garden,</p>

                                        <p>Delhi -110095</p>
                                        <p>Cell: 9899658844</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. Mohid. Ahsan</p>
                                    <p class="position">VICE PRESIDENT</p>
                                    <div class="address">
                                        <p>D-53/G2-Dilshad Colony</p>

                                        <p>Delhi-110095</p>
                                        <p>PH: 9818663520</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="comitee-data-card-main" id="maharastra-data">
                    <p class="comitee-sub-head mb-0"> Maharastra</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Arun Ramachandra Walve</p>
                                    <p class="position">GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>&#39;B&#39; Wing, Flat No.101</p>
                                        <p>Deonar Municipal Colony</p>

                                        <p>Mumbai, Maharastra State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. S. Victor</p>
                                    <p class="position">SECRETARY</p>
                                    <div class="address">
                                        <p>Raghul Co.op Housing Society,</p>
                                        <p>22, Station Road, Kalva</p>

                                        <p>Thane District, Maharastra State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. Kumar Fernandes</p>
                                    <p class="position">TREASURER</p>
                                    <div class="address">
                                        <p>Stall No.13, Opp. Dadar Head Post Office</p>

                                        <p>Dadur East, Mumbai- 400 014</p>
                                        <p>Cell: 9321114744, 9869354870</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Dr. Asmita Ashok Shewale</p>
                                    <p class="position">VICE PRESIDENT</p>
                                    <div class="address">
                                        <p>Govandi Station Road,</p>

                                        <p>Deonar, Govandi (East), Mumbai-400 088</p>
                                        <p>PH: 9820089316</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. John Kennedy</p>
                                    <p class="position">VICE PRESIDENT</p>
                                    <div class="address">
                                        <p>C.G.S. Colony, Sector VI</p>

                                        <p>Antop Hill, Bombay -37</p>
                                        <p>PH: 09321292053</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. Vilas Raghunath Dalvi</p>
                                    <p class="position">VICE PRESIDENT</p>
                                    <div class="address">
                                        <p>B-92/9, Govt. Colony,</p>

                                        <p>Bandra (E) Mumbai-400 051</p>
                                        <p>PH: 9967442453/02226553025</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="comitee-data-card-main" id="andaman-and-nicobar-islands-data">
                    <p class="comitee-sub-head mb-0"> Andaman and Nicobar Islands</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. R. K. Karthick, B.Com.,BL</p>
                                    <p class="position">PRESIDENT</p>
                                    <div class="address">
                                        <p>33, Sistya Nagar, Dignabad</p>

                                        <p>Abidin Village, Portblair</p>
                                        <p>PH: 03192232927</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. P. B. Mohankumar</p>
                                    <p class="position">GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>Sri Kannan Traders, P.Box.No,.502,</p>

                                        <p>Junghlighat, Portblair -744104</p>
                                        <p>PH: 9474211389</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri.V. Selvarajan</p>
                                    <p class="position">TREASURER</p>
                                    <div class="address">
                                        <p>Dilanipur, Portblair,</p>

                                        <p>Haddo Post - 744102</p>
                                        <p>PH: 9474201213</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Dr.V.Shanmuugam,MBBS,M.D.,DC.</p>
                                    <p class="position">VICE PRESIDENT</p>
                                    <div class="address">
                                        <p>Near Indian Overseas Bank</p>

                                        <p>Dilanipur, Portblair-744102</p>
                                        <p>PH: 0319-231275, 231883</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Dr.N.Rajavel,MBA.,M.Com.,Ph.D</p>
                                    <p class="position">VICE PRESIDENT</p>
                                    <div class="address">
                                        <p>HOD, JN Govt College,</p>

                                        <p>Portblair-744104</p>
                                        <p>PH; 03192-329852</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri.T. Paul pushparaj</p>
                                    <p class="position">VICE PRESIDENT</p>
                                    <div class="address">
                                        <p>Near TCI Building, Junglighat</p>

                                        <p>Junglighat, Portblair</p>
                                        <p>Ph: 9434290000, 0319-2232844</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri.Gladstone R.Rajeshkumar</p>
                                    <p class="position">VICE PRESIDENT</p>
                                    <div class="address">
                                        <p>VICE PRESIDENT</p>
                                        <p>First IOB Building,</p>

                                        <p>Dilanipur, Portblair-744102</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri.P.Sasikumar</p>
                                    <p class="position">VICE PRESIDENT</p>
                                    <div class="address">
                                        <p>Dairy Farm,Portblair-744103</p>

                                        <p>Andaman &amp; Nicobar Island - Pin -744101</p>
                                        <p>PH: 9474225665</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. B. Udayachandran</p>
                                    <p class="position">SECRETARY</p>
                                    <div class="address">
                                        <p>Abetin Bazar, Portblair</p>

                                        <p>Andaman &amp; Nicobar Island - Pin -744101</p>
                                        <p>PH: 9434262677, 9933252811</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr.M.Gopi</p>
                                    <p class="position">SECRETARY</p>
                                    <div class="address">
                                        <p>Opp.Chinmaya Mission</p>

                                        <p>Policeline, Portblair-744106</p>
                                        <p>PH: 9933222097</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri.B.Thirumaran</p>
                                    <p class="position">SECRETARY</p>
                                    <div class="address">
                                        <p>quarters</p>

                                        <p>Portblair-744101</p>
                                        <p>PH: 9474226199</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mrs.T.Pushpanjali</p>
                                    <p class="position">SECRETARY</p>
                                    <div class="address">
                                        <p>Office of the Superintendent,</p>

                                        <p>Engineer,Construction circle I,</p>
                                        <p>IAPWD, Portblair</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mrs. Jothi</p>
                                    <p class="position">SECRETARY</p>
                                    <div class="address">
                                        <p>New Pharagoan</p>

                                        <p>Portblair-744103</p>
                                        <p>PH: 9434263662</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. Peer Mohammed</p>
                                    <p class="position">SECRETARY</p>
                                    <div class="address">
                                        <p>Portblair -744104</p>

                                        <p>PH: 03192-211488</p>
                                        <p>Cell: 9933262421</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. S.N.N. Gregory</p>
                                    <p class="position">SECRETARY</p>
                                    <div class="address">
                                        <p>Vani Jewellery,Aberden Bazar,</p>

                                        <p>Port Blair</p>
                                        <p>PH:03192237447,9434281926</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="comitee-data-card-main" id="bihar-data">
                    <p class="comitee-sub-head mb-0"> Bihar</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Barunkumar Jha</p>
                                    <p class="position">PRESIDENT</p>
                                    <div class="address">
                                        <p>Laxmi sagar, Darbhanga</p>

                                        <p>Bihar State</p>
                                        <p>Cell: 9771418457</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="comitee-data-card-main" id="gujarat-data">
                    <p class="comitee-sub-head mb-0"> Gujarat</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/Rajeek.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Rajeek Milton parmar</p>
                                    <p class="position">PRESIDENT</p>
                                    <div class="address">
                                        <p>2, Tapaswi Soc, Cadila Road,</p>
                                        <p>Ghodasar, Maninagar, Ahmedabad</p>

                                        <p>Gujarat-380050</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="comitee-data-card-main" id="jarkhand-data">
                    <p class="comitee-sub-head mb-0"> Jarkhand</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri.Harmith Singh</p>
                                    <p class="position">PRESIDENT</p>
                                    <div class="address">
                                        <p>P.O- Nirsa Pincode-828205</p>

                                        <p>Danbad, Jarkhand State</p>
                                        <p>PH: 08797441600</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Ms. Bobby Kour</p>
                                    <p class="position">GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>Near High School, P.O- Nirsa</p>

                                        <p>Pincode-828205,Danbad District, Jharkhand</p>
                                        <p>Cell: 07679337574</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri.Inderjit Singh</p>
                                    <p class="position">TREASURER</p>
                                    <div class="address">
                                        <p>Nirsa , Bhamal Hariajam-828205</p>
                                        <p>Pin-828205, Danbad District</p>

                                        <p>Danbad District, Jarkhand State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="comitee-data-card-main" id="madhya-pradesh-data">
                    <p class="comitee-sub-head mb-0"> Madhya Pradesh</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. Atul David</p>
                                    <p class="position">PRESIDENT</p>
                                    <div class="address">
                                        <p>Ch-6, MR 10 Road, Sukaliya</p>

                                        <p>Indore, Madya Pradesh</p>
                                        <p>Cell:09329512050</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="comitee-data-card-main" id="odisha-data">
                    <p class="comitee-sub-head mb-0"> Odisha</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/BirenkumarNaik.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Shri. Biren Kumar Nair</p>
                                    <p class="position">State General Secretary</p>
                                    <div class="address">
                                        <p>At Post - Podagarh, Via - Rengali Dam Site</p>

                                        <p>Dist - Angul, Pincode -759105 , Odisha State</p>
                                        <p>Cell:09937509718</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="comitee-data-card-main" id="rajasthan-data">
                    <p class="comitee-sub-head mb-0"> Rajasthan</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Ms.Chandni Khandelwal</p>
                                    <p class="position">President</p>
                                    <div class="address">
                                        <p>2D-142, Housing Board, Akara Bhatta, Aburoad,</p>

                                        <p>Sirohi, Rajasthan- 2307026</p>
                                        <p>Cell:6375150715,</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="comitee-data-card-main" id="uttar-pradesh-data">
                    <p class="comitee-sub-head mb-0"> Uttar Pradesh</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Ms. Neha Mishra</p>
                                    <p class="position">PRESIDENT</p>
                                    <div class="address">
                                        <p>Gonda District,</p>

                                        <p>Uttar Pradesh - 271713</p>
                                        <p>Cell:09721437455</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Alok Srivastava</p>
                                    <p class="position">GENERAL SECRETARY</p>
                                    <div class="address">
                                        <p>A-1407/6, Indira Nagar</p>

                                        <p>Lucknow, Uttar Pradesh State</p>
                                        <p>Cell: 09984622900</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Rahul Srivastava</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>A-1407/6, Indra Nagar,</p>
                                        <p>Lucknow,</p>

                                        <p>Uttar Pradesh State,</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Vishal Mishra</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>Chinhat</p>
                                        <p>Lucknow,</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Ms. Nidhi Rastogi</p>
                                    <p class="position">Vice President</p>
                                    <div class="address">
                                        <p>H.No-4, Venayak Niwas Colony</p>
                                        <p>Gandhi Nagar, Brailly</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Ms. Nidhi Pandey</p>
                                    <p class="position">SECRETARY</p>
                                    <div class="address">
                                        <p>Nishant gang,</p>
                                        <p>Lucknow,</p>

                                        <p>Uttar Pradesh State,</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Deepak Pandey</p>
                                    <p class="position">SECRETARY</p>
                                    <div class="address">
                                        <p>Sanjay Gandhipuram Nagar</p>
                                        <p>Lucknow,</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Subham Srivastava</p>
                                    <p class="position">SECRETARY</p>
                                    <div class="address">
                                        <p>Aasiyana</p>
                                        <p>Lucknow</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Ms. Anjali Chaudhri</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Nishant gang,</p>
                                        <p>Lucknow,</p>

                                        <p>Uttar Pradesh State,</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Ms.Gauri Pandey</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Nishant gang</p>
                                        <p>Lucknow,</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Ms. Richa Singh</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Nishant gang</p>
                                        <p>Lucknow</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Dr. Smiriti Singh</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Nishant gang</p>
                                        <p>Lucknow</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Parveen Partima Jha</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Alambag</p>
                                        <p>Lucknow</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Abhay Gupta</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Triveni Nagar</p>
                                        <p>Lucknow</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Rajesh Chaudhri</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Kalyanpur,</p>
                                        <p>Lucknow</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Deepak Pandey</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Sanjay Gandhipuram Nagar</p>
                                        <p>Lucknow</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Rakesh Yadav</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Vikash Nagar</p>
                                        <p>Lucknow</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Awdesh kumar</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Amarpali Markert</p>
                                        <p>Lucknow</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Parvesh Yadave</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Chinhat</p>
                                        <p>Lucknow</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Rakesh Pandey</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Sanjay Gandhipuram</p>
                                        <p>Lucknow</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Bhanu kumar</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Papermill colony</p>
                                        <p>Lucknow</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Anu Pandey</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Indira Nagar</p>
                                        <p>Lucknow</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Pardeep Kumar</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Indira Nagar</p>
                                        <p>Lucknow</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Umesh Chand</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Mr. Umesh Chand</p>
                                        <p>C-15 Sakkerpur Lakshminagar,</p>

                                        <p>Delhi</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Sandeep Srivastava</p>
                                    <p class="position">Executive Committee</p>
                                    <div class="address">
                                        <p>Husain gang</p>
                                        <p>Lucknow</p>

                                        <p>Uttar Pradesh State</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="comitee-data-card-main" id="west-bengal-data">
                    <p class="comitee-sub-head mb-0"> West Bengal</p>
                    <div class="row">

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Avhishek Singh</p>
                                    <p class="position">President</p>
                                    <div class="address">
                                        <p>Near Electricity Office, Darjeeling,</p>

                                        <p>West Bengal - 73422</p>
                                        <p>Cell:9717886106</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. J.T. Amirtha Singh</p>
                                    <p class="position">President</p>
                                    <div class="address">
                                        <p>5, Russel Street,</p>

                                        <p>Kolkatta - 700 071</p>
                                        <p>Cell: 9830028806</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 d-flex">
                            <div class="comitee-data-card w-100">
                                <div class="comitee-img">
                                    <img src="<?= $base_url ?>/img/OBearer/sc/none.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="data">
                                    <p class="name">Mr. Sekar Sukla</p>
                                    <p class="position">President</p>
                                    <div class="address">
                                        <p>17, Camac Street</p>

                                        <p>Kolkatta - 700 017</p>
                                        <p>Cell: 9163717777</p>
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
    setOption = () => {
        const option_pannel = document.getElementById("option-pannel");
        const content_pannel = document.getElementById("content-pannel");
        option_pannel.classList.toggle("d-none");
        content_pannel.classList.toggle("d-none");
    }
    //To ensure that at least one checkbox is checked.
    var number_of_checked = 1;
    changeData = (element) => {
        if (number_of_checked > 0) {
            if (element.checked) {
                number_of_checked++;
            } else {
                number_of_checked--;
            }
        }
        if (number_of_checked > 0) {
            const data_element = document.getElementById(element.value);
            data_element.classList.toggle("active");
            // Scroll to the element
            data_element.scrollIntoView({
                behavior: 'smooth'
            });
        } else {
            element.checked = true;
            number_of_checked++;
        }
    }
</script>
<?php include_once("../master/footer.php"); ?>