<?php include_once("./master/header.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?= $base_url ?>css/lightbox/lightbox.css">
<style>
    .lb-cancel {
        background: url("<?= $base_url ?>img/gallery/lightbox/loading.gif") no-repeat;
    }

    .lb-nav a.lb-prev {
        background: url("<?= $base_url ?>img/gallery/lightbox/prev.png") left 48% no-repeat;
    }

    .lb-nav a.lb-next {
        background: url("<?= $base_url ?>img/gallery/lightbox/next.png") right 48% no-repeat;
    }

    .lb-data .lb-close {
        background: url("<?= $base_url ?>img/gallery/lightbox/close.png") top right no-repeat;
    }

    .gallery-img {
        position: relative;
    }

    .gallery-content {
        opacity: 0;
        position: absolute;
        top: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: 0.5s;
        background-color: rgb(48, 75, 230, 0.8);
        height: 100%;
        width: 100%;
    }

    .gallery-img:hover .gallery-content {
        opacity: 1;
    }

    .gallery-img:hover .gallery-content p {
        font-size: 14px;
        color: #fff;
        text-align: center;
    }
</style>
<div class="container-fluid">
    <p class="h3 my-3 text-center">Photo - Gallery</p>
    <div class="d-flex text-danger justify-content-center">
        <p class="mx-md-1">2020-2021</p>
        <p class="mx-md-1">|</p>
        <a href="https://drive.google.com/drive/folders/1TKU2NnVRvy21t3_UUyVqX23oA3lXAVFj?usp=sharing">
            <p class="mx-md-1">2019</p>
        </a>
        <p class="mx-1">|</p>
        <a href="https://drive.google.com/drive/folders/1dJJMhZ2Lm3ft6t9cvQr_JXETkqY4ePmj?usp=sharing">
            <p class="mx-md-1">2018</p>
        </a>
        <p class="mx-md-1">|</p>
        <a href="https://drive.google.com/open?id=0B-F-4VbKgi2QZXFQYVYyQUplSFk">
            <p class="mx-md-1">2017</p>
        </a>
        <p class="mx-md-1">|</p>
        <a href="https://drive.google.com/drive/folders/0B-F-4VbKgi2QZXFQYVYyQUplSFk?usp=sharing">
            <p class="mx-md-1">More >></p>
        </a>
    </div>
    <div class="row my-3">
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Christmas2022.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">On behalf of Nobel Laureate Mother Teresa Charitable Trust, CHRISTMAS & NEW YEAR 2022 Celebrations organized at our office Founder Dr.G.K.Dhas, Presided. . .</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Christmas2022.jpg" data-lightbox="models" data-title="Image 1">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Poor-Feeding.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">On behalf of MTCT, Bed Sheets, Sarees, Lungis and Food packets were distributed to the poor men, women and children at Head office, Chennai. . . . . . . .</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Poor-Feeding.jpg" data-lightbox="models" data-title="Image 2">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/IOC.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Indian Oil Corporation sponsored CSR Project implementation at Andhra Pradesh, MTCT handing over 100 Medical Oxygen cylinders . . . . . . .</p>
                    <a href="<?= $base_url ?>img/gallery/photos/IOC.jpg" data-lightbox="models" data-title="Image 3">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Heavy Rain-1.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Tamil Nadu witnesses heavy rainfall. Several districts have been affected by the heavy downpour . . . . . . .</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Heavy Rain-1.jpg" data-lightbox="models" data-title="Image 4">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Neyoor.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa Forum, Kanyakumari Office bearers handed over 100 sets of PPE Kits to the Medical Superintendent of CSI Medical Mission Hospital, Neyoor. . . . . . .</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Neyoor.jpg" data-lightbox="models" data-title="Image 5">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Padalam.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa Forum, Chengalpat members celebrated the 111th Birthday of Mother Teresa on 25.09.2021 at Pulipurakoil village, Padur, Chengalpat. . . . . . .</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Padalam.jpg" data-lightbox="models" data-title="Image 6">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Karungal-MTF.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa’s 111th Birthday was celebrated in Kanyakumari in a humanitarian way food packet, groceries, fruits and Vegetables donated . . . . . .</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Karungal-MTF.jpg" data-lightbox="models" data-title="Image 7">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/DELEGATES.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa Forum – Delegates meet for the last Quater of 2021 was conducted on 14.09.2021 at Head office, Chennai. . . . . .</p>
                    <a href="<?= $base_url ?>img/gallery/photos/DELEGATES.jpg" data-lightbox="models" data-title="Image 8">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Thiruvallur.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa’s 111th Birthday was celebrated in a purposeful manner at Naravarrikuppam area near Chennai. . . . .</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Thiruvallur.jpg" data-lightbox="models" data-title="Image 9">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/mother24thremembrance.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa's 24th year of remembrance at Chennai. Mr. Mano Thankaraj,S.Peter Alphonse, and others participated. Dr.GK.Dhas Managing Trustee presided. . . .</p>
                    <a href="<?= $base_url ?>img/gallery/photos/mother24thremembrance.jpg" data-lightbox="models" data-title="Image 10">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Motherteresa24thdeath.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa's 24th year of remembrance at Chennai. Mr. Mano Thankaraj,S.Peter Alphonse, and others participated. Dr.GK.Dhas Managing Trustee presided. . . .</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Motherteresa24thdeath.jpg" data-lightbox="models" data-title="Image 11">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Namakkal-BD.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">On behalf of MTF, Mother Teresa’s 111th birthday was celebrated in Namakkal. COVID Safety materials & food packets were distributed to the poor people. . . .....</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Namakkal-BD.jpg" data-lightbox="models" data-title="Image 12">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/dharmapuri.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">On behalf of Mother Teresa Forum Dharmapuri East District Mother Teresa’s 111th Birthday was celebrated at Harur, Dharmapuri District. . . .....</p>
                    <a href="<?= $base_url ?>img/gallery/photos/dharmapuri.jpg" data-lightbox="models" data-title="Image 13">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Egmore_BD.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa Charitable Trust jointly with Greater Chennai Corporation conducted a massive COVID 19 Vaccination drive at Choolaimedu ,Chennai. . . .....</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Egmore_BD.jpg" data-lightbox="models" data-title="Image 14">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/COVID19 - Vaccine.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa Charitable Trust jointly with Greater Chennai Corporation conducted a massive COVID 19 Vaccination drive at Choolaimedu ,Chennai. . . .....</p>
                    <a href="<?= $base_url ?>img/gallery/photos/COVID19 - Vaccine.jpg" data-lightbox="models" data-title="Image 15">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Karnool.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT jointly with M/S. Medopharm, Company supported Physically challenged people with food and groceries who lost their livelihood due to Covid-19....</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Karnool.jpg" data-lightbox="models" data-title="Image 16">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Delegates Meet.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT jointly with M/S. Medopharm, Company supported Physically challenged people with food and groceries who lost their livelihood due to Covid-19....</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Delegates Meet.jpg" data-lightbox="models" data-title="Image 17">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Melphorm1.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT jointly with M/S. Medopharm, Company supported Physically challenged people with food and groceries who lost their livelihood due to Covid-19....</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Melphorm1.jpg" data-lightbox="models" data-title="Image 18">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Kancheepuram.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTF Volunteers has taken the initiative of Teaching spoken English and Yoga to the young children of the Tribal villages of Kancheepuram....</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Kancheepuram.jpg" data-lightbox="models" data-title="Image 19">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Melphorm.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT jointly with M/S. Medopharm, supported Physically challenged people with food and groceries who lost their livelihood due to Covid-19....</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Melphorm.jpg" data-lightbox="models" data-title="Image 20">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Santhome.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa Auto Drivers Welfare Association, Santhome Unit members were given Grocery bags and mask....</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Santhome.jpg" data-lightbox="models" data-title="Image 21">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona-Erode.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa Forum, Erode, Rice bags were distributed to Covid-19 Lockdown victims of Ganapathy palayam colony, Erode...</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona-Erode.jpg" data-lightbox="models" data-title="Image 22">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona-activities1.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">The program was headed by Mr. Vijay Vasanth M.P and Mr. GK Dhas , Managing Trustee,MTCT ...</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona-activities1.jpg" data-lightbox="models" data-title="Image 23">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona-activities.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa Charitable Trust Organized a huge Welfare Assistance program on 16.06.2021 at Chennai, for the corona lockdown victims. Around 1000 bags of groceries...</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona-activities.jpg" data-lightbox="models" data-title="Image 24">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Thiruvallur.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTF,Kolathur Zonal Committee members distributed food packs, water bottles, groceries and Covid 19 safety materials to the poor people living along the streets in Red hills Area</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Thiruvallur.jpg" data-lightbox="models" data-title="Image 25">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Mambakkam.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa Charitable Trust jointly with Dow chemical Int.Ltd has designed and developed a New Play Area for the kinder garden Students of St.helen's Girls School.</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Mambakkam.jpg" data-lightbox="models" data-title="Image 26">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Kumari_Tailoring.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa Charitable Trust unit of Mother Teresa Forum, Tailoring Center in Kanyakumari.</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Kumari_Tailoring.jpg" data-lightbox="models" data-title="Image 27">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/tailoring_new.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa Charitable Trust unit of Mother Teresa Forum, Tailoring Centers.</p>
                    <a href="<?= $base_url ?>img/gallery/photos/tailoring_new.jpg" data-lightbox="models" data-title="Image 28">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Erode_Tailoring.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa Forum, Erode District Free Tailoring Center was inagurated on 1.1.2021.</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Erode_Tailoring.jpg" data-lightbox="models" data-title="Image 29">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Tailoring-Mask.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Women at our free tailoring center sewing FACE MASKS to aid those working in informal sector, the demand for which has multiplied in view of coronavirus pandemic.</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Tailoring-Mask.jpg" data-lightbox="models" data-title="Image 30">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/MTCT-Covid19-Activities.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTF were supplied rice, groceries, Vegetables to Students families of Govt school, Nagercoil, kanyakumari</p>
                    <a href="<?= $base_url ?>img/gallery/photos/MTCT-Covid19-Activities.jpg" data-lightbox="models" data-title="Image 31">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Mother_death.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT marked tha 24th death Anniversary of Mother Teresa at Head Office Chennai,Volinteers & lot of general public participated.</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Mother_death.jpg" data-lightbox="models" data-title="Image 32">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Mother-teresa-24thdeath-KK.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">24th death Anniversary of Mother Teresa</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Mother-teresa-24thdeath-KK.jpg" data-lightbox="models" data-title="Image 33">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/MTCT-Karungal.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa Forum - execution wing of MTCT celebrated the 110th Birthday of Mother Teresa at Karungal</p>
                    <a href="<?= $base_url ?>img/gallery/photos/MTCT-Karungal.jpg" data-lightbox="models" data-title="Image 34">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Mother_BD_110.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">110th Birthday of Mother Teresa was celebrated at our office . Managing Trusstee G.K.Dhas and off-bearers participated.</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Mother_BD_110.jpg" data-lightbox="models" data-title="Image 35">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/MTCT-110_Aminjikarai.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother Teresa Forum execution wing of MTCT celebrated 110th Birthday of Mother Teresa at Aminjikarai</p>
                    <a href="<?= $base_url ?>img/gallery/photos/MTCT-110_Aminjikarai.jpg" data-lightbox="models" data-title="Image 36">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Autouniform.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother teresa Charitable Trust distributed Kakki Uniform sets to all the auto drivers (500+) involved in the association</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Autouniform.jpg" data-lightbox="models" data-title="Image 37">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Manolaya_home-mtct.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT office bearers distributed rice, groceries and Vegetables in Manolaya Home-Rehabilitation centre, kanyakumari</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Manolaya_home-mtct.jpg" data-lightbox="models" data-title="Image 38">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Nagercoil.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTF were supplied rice, groceries, Vegetables to Students families of Govt school, Nagercoil, kanyakumari</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Nagercoil.jpg" data-lightbox="models" data-title="Image 39">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/KANYAKUMARI.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTF unit of MTCT were supplied rice, groceries, Vegetables to lockdown victims families kanavoor,Manalivaikal, kanyakumari</p>
                    <a href="<?= $base_url ?>img/gallery/photos/KANYAKUMARI.jpg" data-lightbox="models" data-title="Image 40">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Home.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTF unit of MTCT rice, groceries, Vegetables to UNITY HOME -Home for the mentally challenged women, kanyakumari</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Home.jpg" data-lightbox="models" data-title="Image 41">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Kanya.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">Mother teresa Forum unit of MTCT rice, groceries, Vegetables were distributed to Covid victims kanyakumari</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Kanya.jpg" data-lightbox="models" data-title="Image 42">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/cororna_ Melmedalam.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTF unit of MTCT rice, groceries, fruits were distributed to 160 Students families of Udayamarthandam, kanyakumari</p>
                    <a href="<?= $base_url ?>img/gallery/photos/cororna_ Melmedalam.jpg" data-lightbox="models" data-title="Image 43">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/corona_inayam.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTF unit of MTCT were supplied rice, vegetables, fruits to Corona lock down victims at Inayam, kanyakumari dist</p>
                    <a href="<?= $base_url ?>img/gallery/photos/corona_inayam.jpg" data-lightbox="models" data-title="Image 44">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Iranipuram.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTF unit of MTCT kanyakumari office bearers distributed rice,groceries and vegetables in Irenipuram Municipality</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Iranipuram.jpg" data-lightbox="models" data-title="Image 45">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Padmanabapuram.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT office bearers supply to corona lock down victims - students families of Midlam & Devicode, kanyakumari</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Padmanabapuram.jpg" data-lightbox="models" data-title="Image 46">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Devicode.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT office bearers supply to corona lock down victims - students families of Midlam & Devicode, kanyakumari</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Devicode.jpg" data-lightbox="models" data-title="Image 47">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Colachel.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT office bearers supply of Rice,groceries to COVID-19, 300 victim's families in colachel, kanyakumari</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Colachel.jpg" data-lightbox="models" data-title="Image 48">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Kallakurichi.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT office bearers supply of Rice,groceries, egg, water bottle, to 100 Narikuravars in Ulunthurpet, Kallakurichi</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Kallakurichi.jpg" data-lightbox="models" data-title="Image 49">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Kanyakumari_6.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT office bearers distributed Rice,groceries and vegetables to corona lock down victims in Kollamcode, Kanyakumari (around 200 families)</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Kanyakumari_6.jpg" data-lightbox="models" data-title="Image 50">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Kanyakumari_5.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT office bearers distributed Rice, provisions to Providence Home at Vellimalai, Kanyakumari</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Kanyakumari_5.jpg" data-lightbox="models" data-title="Image 51">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_KKNagar.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT office bearers supply of Rice,groceries to COVID-19, 300 victim's families in K.K.Nagar, Chennai</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_KKNagar.jpg" data-lightbox="models" data-title="Image 52">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Egmore.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT Volunteers Distributing Essential commodities to the poor affected by COVID-19 crisis in Chennai city</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Egmore.jpg" data-lightbox="models" data-title="Image 53">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Kanyakumari_7.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT office bearers distributed Rice, groceries and Vegetables at Thundathuvilai, Karungal, Kanyakumari</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Kanyakumari_7.jpg" data-lightbox="models" data-title="Image 54">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Kanyakumari_3.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT office bearers distributed Rice, groceries and Vegetables to an Old age Home at Mekkamandapam,K K dist</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Kanyakumari_3.jpg" data-lightbox="models" data-title="Image 55">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Kanyakumari_2.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT office bearers supply of Rice,groceries to COVID-19, 200 victim's families in colachel, kanyakumari, Kanyakumari</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Kanyakumari_2.jpg" data-lightbox="models" data-title="Image 56">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Manthaiveli.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT office bearers supply of Rice,groceries, Vegetables to COVID-19, 300 victim's families in Manthaiveli, Chennai</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Manthaiveli.jpg" data-lightbox="models" data-title="Image 57">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Mahabalipuram.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT office bearers supply of Rice,groceries to COVID-19, 100 victim's families in Mahabalipuram</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Mahabalipuram.jpg" data-lightbox="models" data-title="Image 58">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Kanyakumari.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT office bearers supply of Rice,groceries to COVID-19, 300 victim's families in Kanyakumari</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Kanyakumari.jpg" data-lightbox="models" data-title="Image 59">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_chennai.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT office bearers supply of Rice,groceries and vegetables to COVID-19, victim's families in Chennai</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_chennai.jpg" data-lightbox="models" data-title="Image 60">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Chengalpet.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT office bearers supply of Rice,groceries and vegetables to COVID-19, victim's families in Chengalpet</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Chengalpet.jpg" data-lightbox="models" data-title="Image 61">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Corona_Auto Egmore.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT Volunteers Distributing Essential commodities to the poor affected by COVID-19 crisis in Chennai city</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Corona_Auto Egmore.jpg" data-lightbox="models" data-title="Image 62">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Auto_Stand_manthaveli.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT unit of Mother Teresa Auto Drivers Welfare Association inaugurated a new auto stand at Mandaveli</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Auto_Stand_manthaveli.jpg" data-lightbox="models" data-title="Image 63">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Helen_School_Renovation.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT jointly with DOW CHEMICALS PVT Ltd renovated rest rooms at St.Helen's Girls Primary School,Chennai</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Helen_School_Renovation.jpg" data-lightbox="models" data-title="Image 64">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Dow_Kinder_garden.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">New colourful classroom for the toddlers of the Kinder Garden Section at St.Helen's Girls Primary School,Chennai</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Dow_Kinder_garden.jpg" data-lightbox="models" data-title="Image 65">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery-img">
                <img src="<?= $base_url ?>img/gallery/photos/Helen_School.jpg" alt="" class="img-fluid shadow">
                <div class="gallery-content">
                    <p class="p-2">MTCT jointly with DOW CHEMICALS PVT Ltd renovated rest rooms at St.Helen's Girls Primary School,Chennai</p>
                    <a href="<?= $base_url ?>img/gallery/photos/Helen_School.jpg" data-lightbox="models" data-title="Image 66">
                        <p><i class="fas fa-eye mx-2"></i>View</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= $base_url ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?= $base_url ?>js/lightbox/lightbox-plus-jquery.js"></script>
<?php include_once("./master/footer.php"); ?>