<?php include_once("master/header.php"); ?>
<style>
	.state-bg {
		border: 1px solid #6988ee;
		background-color: #fff;
		color: #0058A5;
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

	/* New Styles */
	.dist-list1 {
		text-align: center;
		font-weight: bold;
	}

	.dist-list {
		font-weight: 500;
		background-color: #6988ee !important;
		color: #fff;
	}

	.donors-head>td {
		background-color: #0058A5;
		color: #fff;
		text-align: center;
		font-size: 15px;
	}

	.donors-content>td {
		text-align: center;
		font-size: 15px;
	}

	@media only screen and (max-width: 767px) {
		.donors-head>td {
			font-size: 13px;
		}

		.donors-content>td {
			font-size: 13px;
		}
	}
</style>
<div class="container">
	<div class="flex-list my-3">
		<div class="li-title state-bg min">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">TamilNadu</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content active">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td class="dist-list1" colspan="4">DISTRICTS</td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Chennai</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> THEN BLAK </td>
						<td> B+ </td>
						<td> 8778208772 </td>
						<td> Ayanavaram </td>
					</tr>
					<tr class="donors-content">
						<td> MUKESH JAIN </td>
						<td> A1+ </td>
						<td> 9884736987 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> K.K.SUBRAMANIAN </td>
						<td> O+ </td>
						<td> 9941297486 </td>
						<td> ANNA NAGAR </td>
					</tr>
					<tr class="donors-content">
						<td> Vicky Vicky </td>
						<td> O+ </td>
						<td> 6381076312 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Dr.M.Abubacker </td>
						<td> B+ </td>
						<td> 9941063786 </td>
						<td> Arumbakkam </td>
					</tr>
					<tr class="donors-content">
						<td> Salahuddin </td>
						<td> A+ </td>
						<td> 9941089786 </td>
						<td> Arumbakkam </td>
					</tr>
					<tr class="donors-content">
						<td> Winston </td>
						<td> A1- </td>
						<td> 7904243569 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Harini </td>
						<td> O+ </td>
						<td> 9952088237 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> V. ShanmugaNathan </td>
						<td> A+ </td>
						<td> 8489659655 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Arvind Mahadevan </td>
						<td> A+ </td>
						<td> 9940235417 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> KALIDASS </td>
						<td> A+ </td>
						<td> 9943948951 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Murali </td>
						<td> A+ </td>
						<td> 7299399392 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Manikandan </td>
						<td> A+ </td>
						<td> 9566420317 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Syed </td>
						<td> A+ </td>
						<td> 9551457239 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> M.jagadeesanvb </td>
						<td> A+ </td>
						<td> 7845662500 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> VIJAYAKUMAR VK </td>
						<td> A+ </td>
						<td> 8124041591 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Selvaganesh </td>
						<td> A+ </td>
						<td> 9940187708 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Abhijith </td>
						<td> A+ </td>
						<td> 9841199568 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> P. Sadhana </td>
						<td> B+ </td>
						<td> 9444211231 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Nandhini.k </td>
						<td> B+ </td>
						<td> 8110093402 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Manoj </td>
						<td> O+ </td>
						<td> 8056368157 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Priya N </td>
						<td> B+ </td>
						<td> 8680913679 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Priyanka </td>
						<td> O+ </td>
						<td> 9789810913 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Vijay </td>
						<td> B+ </td>
						<td> 8344941363 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> S. Suresh </td>
						<td> O+ </td>
						<td> 9677029180 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Janakiraman.c </td>
						<td> A1+ </td>
						<td> 9383333000 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Rubanraja </td>
						<td> O+ </td>
						<td> 9788031053 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Prithika Rani M </td>
						<td> B+ </td>
						<td> 9790825796 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Divya V </td>
						<td> O+ </td>
						<td> 9994311211 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Chandran </td>
						<td> O+ </td>
						<td> 9791198280 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> CHIRANJEEVI B </td>
						<td> B+ </td>
						<td> 9952022035 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Balachandra </td>
						<td> B+ </td>
						<td> 9840112839 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> G.P.Selvam </td>
						<td> B+ </td>
						<td> 9487367931 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Udaya Kumar.N </td>
						<td> AB+ </td>
						<td> 9003234112 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> J. Rajasankar </td>
						<td> A1B- </td>
						<td> 9444970138 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Purushothamen s </td>
						<td> B+ </td>
						<td> 9789963391 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Saffi </td>
						<td> O+ </td>
						<td> 9789963391 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Mani </td>
						<td> O+ </td>
						<td> 7401535415 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Sriram </td>
						<td> B+ </td>
						<td> 8056051072 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Ramesh </td>
						<td> B+ </td>
						<td> 9884727286 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Suresh </td>
						<td> B+ </td>
						<td> 8148916988 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> PRABHU </td>
						<td> O+ </td>
						<td> 9884641396 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Vijay </td>
						<td> AB- </td>
						<td> 9790954376 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Jai </td>
						<td> B- </td>
						<td> 9962361062</td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Raja </td>
						<td> A1+ </td>
						<td> 9789865312 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Abbas </td>
						<td> A1- </td>
						<td> 9551414146 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Rajalingam </td>
						<td> B+ </td>
						<td> 9626696882 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Sundar </td>
						<td> O+ </td>
						<td> 9941418736 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Yuvaraj </td>
						<td> AB+ </td>
						<td> 8124291412 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> jagir </td>
						<td> B+ </td>
						<td> 9042670928 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> suresh Kumar </td>
						<td> O+ </td>
						<td> 9840939939 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> aravind </td>
						<td> O+ </td>
						<td> 9176980878 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Senthilkumar </td>
						<td> B+ </td>
						<td> 9962688252. </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> praveen kumar </td>
						<td> B+ </td>
						<td> 9094314313 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> mohanraj </td>
						<td> B+ </td>
						<td> 9444464789 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> manikandan </td>
						<td> O+ </td>
						<td> 9791097653 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> C.prathap </td>
						<td> O+ </td>
						<td> 9940521093 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Isaianand </td>
						<td> O+ </td>
						<td> 7845548466 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Karthikeyan </td>
						<td> O+ </td>
						<td> 9884400371 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Daniel </td>
						<td> B+ </td>
						<td> 9003148805 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Sridhar </td>
						<td> O+ </td>
						<td> 9500119761 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> V.Mohan </td>
						<td> O+ </td>
						<td> 9940639557 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> v.karthick </td>
						<td> A1+ </td>
						<td> 9578828854 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> C.Rajkumar </td>
						<td> B+ </td>
						<td> 9790844373 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Ashok Kuma </td>
						<td> B+ </td>
						<td> 9791142469 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> M.KARUKKUVEL Raj </td>
						<td> B+ </td>
						<td> 9087425095 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> NARENDRAN </td>
						<td> A1B+ </td>
						<td> 9500148984 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> edwin </td>
						<td> O- </td>
						<td> 9791150119 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> siddiq </td>
						<td> O+ </td>
						<td> 9094666918 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> a.inba kumar</td>
						<td> O+ </td>
						<td> 9840301747 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> vignesh </td>
						<td> B+ </td>
						<td> 9884556995</td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> vogneshgiri </td>
						<td> B+ </td>
						<td> 9043677660 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> anbarasan </td>
						<td> O+ </td>
						<td> 9840862846 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> M.Vimal kumar</td>
						<td> O+ </td>
						<td> 9677279760 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Jeeva </td>
						<td> AB- </td>
						<td> 8056292339 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> sarath </td>
						<td> A+ </td>
						<td> 9551113240 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> vazir </td>
						<td> AB- </td>
						<td> 8754034986</td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Dinesh </td>
						<td> A1+ </td>
						<td> 8122288878 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Irfan </td>
						<td> A+ </td>
						<td> 9940980181 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Balakrish </td>
						<td> O+ </td>
						<td> 904790483 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Abrar </td>
						<td> A+ve </td>
						<td> 9043651613 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Mohamed halidh </td>
						<td> A1+ </td>
						<td> 8807980583 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Akbar </td>
						<td> A1B+ </td>
						<td> 9446479122 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> ASIK </td>
						<td> O+ </td>
						<td> 8015698773 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> uvais </td>
						<td> o+ </td>
						<td> 9698917403 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Akash </td>
						<td> B-ve </td>
						<td> 7092741996 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Elangovan. G </td>
						<td> o+ </td>
						<td> 7358434366 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Janarthan </td>
						<td> A+ </td>
						<td> 9940096675 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Harish Rajendran </td>
						<td> A+ </td>
						<td> 979080005 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Muthu </td>
						<td> O+ </td>
						<td> 8220439217 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Ishu </td>
						<td> A1B+ </td>
						<td> 9962852021 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Keerthana </td>
						<td> O+ </td>
						<td> 9962915416 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Prashanth </td>
						<td> O+ </td>
						<td> 9790755700 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Rinuvadhan </td>
						<td> o+ </td>
						<td> 9962393500 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> N.R.Pravin Raja </td>
						<td> B+ </td>
						<td> 8015601612</td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Siva.s</td>
						<td> B+ </td>
						<td> 8344331458 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Mahesh.V </td>
						<td> A1+ </td>
						<td> 8122522484 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> D vincent joy </td>
						<td> B+ </td>
						<td> 9629686460 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> gracia </td>
						<td> B+ </td>
						<td> 8220738766 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Raghuvaran </td>
						<td> O+ </td>
						<td> 9176107020 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> MANI </td>
						<td> O+ </td>
						<td> 7401535415 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> MUNISHWARAN </td>
						<td> O+ </td>
						<td> 9940257153 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> SRIRAM </td>
						<td> B+ </td>
						<td> 8056051072 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> RAMESH </td>
						<td> B+ </td>
						<td> 9884727286 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> SURESH </td>
						<td> B+ </td>
						<td> 8148916988 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> MURALI </td>
						<td> A+ </td>
						<td> 7299399392 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> PRABHU </td>
						<td> O+ </td>
						<td> 9884641396 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> VIJAY </td>
						<td> AB- </td>
						<td> 9790954376 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> JAI </td>
						<td> B- </td>
						<td> 99623610622 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> RAJA </td>
						<td> A1+ </td>
						<td> 9789865312 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> KALIDASS </td>
						<td> A+ </td>
						<td> 9943948951 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> ABBAS </td>
						<td> A1- </td>
						<td> 9551414146 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> RAJALINGAM </td>
						<td> B+ </td>
						<td> 9626696882 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> SUNDAR </td>
						<td> O+ </td>
						<td> 9941418736 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> YUVARAJ </td>
						<td> AB+ </td>
						<td> 8124291412 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> JAGIR </td>
						<td> B+ </td>
						<td> 9042670928 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> SURESH KUMAR </td>
						<td> O+ </td>
						<td> 9840939939 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> ARAVIND </td>
						<td> O+ </td>
						<td> 9176980878 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> AMNIKANDAN </td>
						<td> A+ </td>
						<td> 9566420317 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> SENTHIL KUMAR </td>
						<td> B+ </td>
						<td> 9962688252 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> PRAVEEN KUMAR </td>
						<td> B+ </td>
						<td> 9094314313 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> MOHANRAJ</td>
						<td> B+ </td>
						<td> 9444464789 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> MANIKANDAN</td>
						<td> 0+ </td>
						<td> 9791097653 </td>
						<td> Chennai </td>
					</tr>
					<tr class="donors-content">
						<td> Suresh Turkani </td>
						<td> AB+ </td>
						<td> 7022531444 </td>
						<td> Thiruvanmiyur, Chennai </td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Ariyalur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Coimbatore</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> ABDUL JAFFER H</td>
						<td> B+ </td>
						<td> 9345718424 </td>
						<td> COIMBATORE </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Cuddalore</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Dharmapuri</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Dindigul</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Erode</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Satheeskumar </td>
						<td> B- </td>
						<td> 7092444101 </td>
						<td> Punjaipauliampatti </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Kanchipuram</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> P. Sadhana </td>
						<td> B+ </td>
						<td> 9444211231 </td>
						<td> kancheepuram </td>
					</tr>
					<tr class="donors-content">
						<td> Balachandra </td>
						<td> B+ </td>
						<td> 9840112839 </td>
						<td> kancheepuram </td>
					</tr>
					<tr class="donors-content">
						<td> SUNDARARASAN </td>
						<td> A1- </td>
						<td> 9003604436 </td>
						<td> kancheepuram </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Kanyakumari</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Karur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Krishnagiri</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Madurai</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Pavithra </td>
						<td> B+ </td>
						<td> 9566647558 </td>
						<td> Madurai </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Nagapattinam</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Nilgiris</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Namakkal</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> ARUNKUAMR G </td>
						<td> B- </td>
						<td> 9626457732 </td>
						<td> NAMAKKAL </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Perambalur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Pudukkottai</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Ramanathapuram</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Salem</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> s.vijaya kumar </td>
						<td> O+ </td>
						<td> 9629446658 </td>
						<td> salem </td>
					</tr>
					<tr class="donors-content">
						<td> R.suresh </td>
						<td> O+ </td>
						<td> 8754657703 </td>
						<td> salem </td>
					</tr>
					<tr class="donors-content">
						<td> TAMIZHAZHAGAN M </td>
						<td> B- </td>
						<td> 8675787941, 8526074970 </td>
						<td> salem </td>
					</tr>
					<tr class="donors-content">
						<td> VARADHARAJ V T </td>
						<td> A1+ </td>
						<td> 8015172603 </td>
						<td> salem </td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Sivaganga</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Tirupur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Tiruchirappalli</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Theni</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Tirunelveli</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Thanjavur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Thoothukudi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Thiruvallur</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Nandhini.k </td>
						<td> B+ </td>
						<td> 8110093402 </td>
						<td> Tiruvallur </td>
					</tr>
					<tr class="donors-content">
						<td> Gowtham </td>
						<td> AB+</td>
						<td> 9841111500 </td>
						<td> Tiruvallur </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Tiruvarur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Tiruvannamalai</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Vellore</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> G JAGADEESH </td>
						<td> O- </td>
						<td> 9655547187 </td>
						<td> vellore </td>
					</tr>
					<tr class="donors-content">
						<td> Ravi </td>
						<td> AB+ </td>
						<td> 8903201780 </td>
						<td> vellore </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Viluppuram</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td class="dist-list" colspan="4">Virudhunagar</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> S. Ilango </td>
						<td> AB+ </td>
						<td> 9442027318 </td>
						<td> Srivilliputtur </td>
					</tr>
					<tr class="donors-content">
						<td> Elangovan </td>
						<td> A1B+ </td>
						<td> 9543233649 </td>
						<td> Villupuram </td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Puducherry</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Karaikal</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mahe</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Pondicherry</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Tharani </td>
						<td> B+ </td>
						<td> 97866717180 </td>
						<td> Puducherry </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Yanam</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Andhra Pradesh</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Anantapur</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Sai Srujana </td>
						<td> O+ </td>
						<td> 9550951449 </td>
						<td> Anatapur </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Chittoor</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">East Godavari</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> NETHI KIRAN </td>
						<td> O+ </td>
						<td> 7382133270 </td>
						<td> KAKINADA </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Guntur</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Rajni </td>
						<td> B+ </td>
						<td> 7388823830 </td>
						<td> Guntur, Andhara Pradesh </td>
					</tr>
					<tr class="donors-content">
						<td> Bollimuntha Valianindra gopala Krishna </td>
						<td> O+ </td>
						<td> 8096800503 </td>
						<td> Athota,Guntur </td>
					</tr>

					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kadapa</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Krishna</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Nageswararao </td>
						<td> O+ </td>
						<td> 9392118369 </td>
						<td> Vijayawada </td>
					</tr>
					<tr class="donors-content">
						<td> Nitin Raviteja Kavuri </td>
						<td> O+ </td>
						<td> 8985151338 </td>
						<td> Vijayawada </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kurnool</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Dhamodhar </td>
						<td> O- </td>
						<td> 9550917390 </td>
						<td> Kurnool </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Nellore</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Prakasam</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Srikakulam</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Visakhapatnam</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> NATTAM GOWRI RAKESH </td>
						<td> B- </td>
						<td> 8500648354 </td>
						<td> Visakhapatnam </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Vizianagaram</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">West Godavari</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> CHALLA MANI BABU </td>
						<td> O+ </td>
						<td> 9491397389 </td>
						<td> NARSAPURAM </td>
					</tr>
					<tr class="donors-content">
						<td> shahin </td>
						<td> B+ </td>
						<td> 9985959636 </td>
						<td> bhimavaram </td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Karnataka</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Bagalkot</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bellary</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Belgaum</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bangalore Rural</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bangalore Urban</td>
					</tr>

					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>

					<tr class="donors-content">
						<td> Arunkumar Madheswaran </td>
						<td> A+ </td>
						<td> 9566416222 </td>
						<td> Bangalore </td>
					</tr>
					<tr class="donors-content">
						<td> Neeraja </td>
						<td> O+ </td>
						<td> 7411852869 </td>
						<td> Marathalli </td>
					</tr>
					<tr class="donors-content">
						<td> Amit Yadav </td>
						<td> O+ </td>
						<td> 7879183435 </td>
						<td> Bangalore </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Bidar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Chamarajnagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Chikkaballapur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Chikkamagaluru</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Chitradurga</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Dakshina Kannada</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Davanagere</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dharwad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Gadag</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Mallu Payappagoudra </td>
						<td> O+ </td>
						<td> 8497814977 </td>
						<td> Naregal, Gadag district </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Hassan</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Haveri</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Gulbarga</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kodagu</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kolar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Koppal</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Mandya</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mysore</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Raichur</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Shivappa </td>
						<td> B+ </td>
						<td> 9071695944 </td>
						<td> Raichur </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Ramanagara</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Shimoga</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Tumkur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Udupi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Uttara Kannada</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Vijayapura</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Yadgir</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Kerala</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Alappuzha</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ernakulam</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Idukki</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kannur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kasaragod</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kollam</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kottayam</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kozhikode</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> abhilash KC </td>
						<td> O+ </td>
						<td> 9387945484 </td>
						<td> calicut </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Malappuram</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Palakkad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Pathanamthitta</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Thrissur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Thiruvananthapuram</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Prajit Ravindran </td>
						<td> O+ </td>
						<td> 9496186999 </td>
						<td> palkulangara - trivandrum </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Wayanad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Telangana</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Adilabad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Hyderabad</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Aisha </td>
						<td> O+ </td>
						<td> 8686677087 </td>
						<td> Mallapur </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Jagtial</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Prakash Bishnoi </td>
						<td> O+ </td>
						<td> 7568643282 </td>
						<td> Korutla </td>
					</tr>

					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Karimnagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Khammam</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mahbubnagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Medak</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Nalgonda</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Nizamabad</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Vennela </td>
						<td> O+ </td>
						<td> 8106834830 </td>
						<td> bodhan </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ranga Reddy</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Warangal</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Delhi</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Central Delhi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">East Delhi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">New Delhi</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Gaurav </td>
						<td> O+ </td>
						<td> 9953048333 </td>
						<td> Delhi </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">North Delhi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">North East Delhi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">North West Delhi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Shahdara</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">South Delhi</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> priyanka kumari </td>
						<td> B- </td>
						<td> 9971536087 </td>
						<td> NEW DELHI </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">South East Delhi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">South West Delhi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">West Delhi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Maharashtra</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Ahmednagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Akola</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Amravati</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Aurangabad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Beed</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bhandara</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Buldhana</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Chandrapur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dhule</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Gadchiroli</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Gondia</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Hingoli</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jalgaon</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jalna</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kolhapur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Latur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mumbai City</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Anoop </td>
						<td> O+ </td>
						<td> 8419972100 </td>
						<td> Mumbai </td>
					</tr>
					<tr class="donors-content">
						<td> Viswanathan V </td>
						<td> A+ </td>
						<td> 9004823845 </td>
						<td> Mumbai </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mumbai suburban </td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Nanded</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Nandurbar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Nagpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Nashik</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Osmanabad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Palghar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Parbhani</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Pune</td>
					</tr>

					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> SANKALP </td>
						<td> O+ </td>
						<td> 9545538285 </td>
						<td> pune </td>
					</tr>
					<tr class="donors-content">
						<td> Amol </td>
						<td> AB+ </td>
						<td> +917350787793 </td>
						<td> Alandi </td>
					</tr>
					<tr class="donors-content">
						<td> Sagar Shivaji Gangarde </td>
						<td> AB+ </td>
						<td> 9765458803 </td>
						<td> Alandi </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Raigad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ratnagiri</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sangli</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Satara</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Sindhudurg</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Solapur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Thane</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Wardha</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Washim</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Yavatmal</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Goa</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">North Goa</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> monica fernandes </td>
						<td> AB+ </td>
						<td> 7030225451 </td>
						<td> bardez, calangute </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">South Goa</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Andaman and Nicobar Islands</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">

					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">North and Middle Andaman</td>
					</tr>

					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">South Andaman</td>
					</tr>

					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Nicobar</td>
					</tr>

					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<!--<tr class="donors-head"> <td> NAME </td> <td> BLOOD GROUP </td> <td> MOBILE </td> <td> CITY </td> </tr>!-->


				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Arunachal Pradesh</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Anjaw</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Changlang</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dibang Valley</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">East Kameng</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">East Siang</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kra Daadi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kurung Kumey</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Lohit</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Longding</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Lower Dibang Valley</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Lower Subansiri</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Namsai</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Papum Pare</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Tawang</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Tirap</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Upper Siang</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Upper Subansiri</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">West Kameng</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">West Siang</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Siang</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Assam</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Barpeta</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bongaigaon</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Cachar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Darrang</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dhemaji</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dhubri</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dibrugarh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Goalpara</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Golaghat</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Hailakandi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Jorhat</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Karbi Anglong</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Karimganj</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kokrajhar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Lakhimpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Morigaon</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Nagaon</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Nalbari</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dima Hasao</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sivasagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Sonitpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Tinsukia</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kamrup</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kamrup Metropolitan</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Baksa</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Udalguri</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Chirang</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">West Karbi Anglong</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Biswanath</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Hojai</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Charaideo</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">South Salmara-Mankachar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">East Kamrup</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">South Kamrup</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>




				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Bihar</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Araria</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Arwal</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Aurangabad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Banka</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Begusarai</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bhagalpur</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Uttam Debnath </td>
						<td> AB+ </td>
						<td> 8986432791 </td>
						<td> Bhagalpur </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bhojpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Buxar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Darbhanga</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">East Champaran</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Gaya</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Gopalganj</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jamui</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jehanabad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Khagaria</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kishanganj</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kaimur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Katihar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Lakhisarai</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Madhubani</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Munger</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Madhepura</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Muzaffarpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Nalanda</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Nawada</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Patna</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Purnia</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Rohtas</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Saharsa</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Samastipur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Sheohar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sheikhpura</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Saran</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sitamarhi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Supaul</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Siwan</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Vaishali</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">West Champaran</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Chandigarh</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Chandigarh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Chhatisgarh</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Balod</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Baloda Bazar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Balrampur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bastar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bemetara</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bijapur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bilaspur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dantewada</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dhamtari</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Durg</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> RUCHI TRIPATHI </td>
						<td> B+ </td>
						<td> 9584664468 </td>
						<td> Bhilai </td>
					</tr>
					<tr class="donors-content">
						<td> Abhishek singh </td>
						<td> O+ </td>
						<td> 7587321232 </td>
						<td> Bhilai </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Gariaband</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Janjgir-Champa</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kabirdham </td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kanker</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kondagaon</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Korba</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Koriya</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mahasamund</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mungeli</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Narayanpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Raigarh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Raipur</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Dr Imraan </td>
						<td> B- </td>
						<td> 9329522202 </td>
						<td> Raipur </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Rajnandgaon</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sukma</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Surajpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Surguja</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Dadra & Nagar Haveli</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Dadra and Nagar Haveli</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Daman & Diu</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Daman</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Diu</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Gujarat</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Ahmedabad</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Vishal Patel </td>
						<td> B+ </td>
						<td> 9033900342 </td>
						<td> Ahmedabad </td>
					</tr>
					<tr class="donors-content">
						<td> Utsav Parikh </td>
						<td> B+ </td>
						<td> 9925234743 </td>
						<td> Ahmedabad </td>
					</tr>
					<tr class="donors-content">
						<td> Purvam Gandhi </td>
						<td> B+ </td>
						<td> 8511123371 </td>
						<td> Ahmedabad </td>
					</tr>
					<tr class="donors-content">
						<td> Ashwin Shrivastava </td>
						<td> O+ </td>
						<td> 7874110050 </td>
						<td> Ahmedabad </td>
					</tr>
					<tr class="donors-content">
						<td> ANUJMISHRA </td>
						<td> B+ </td>
						<td> 9726670771 </td>
						<td> Ahmedabad </td>
					</tr>
					<tr class="donors-content">
						<td> Falguni Chauhan </td>
						<td> O+ </td>
						<td> 7777916805 </td>
						<td> Ahmedabad </td>
					</tr>



					<tr>
						<td colspan="4" class="dist-list">Amreli</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Anand</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Aravalli</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Banaskantha</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bharuch</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bhavnagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Botad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Chhota Udaipur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dahod</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Dang</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Devbhoomi Dwarka</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Gandhinagar</td>
					</tr>

					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Shivangi vyas </td>
						<td> A- </td>
						<td> 09409048276 </td>
						<td> Gandhinagar </td>
					</tr>
					<tr class="donors-content">
						<td> Vraj Shah </td>
						<td> B- </td>
						<td> 8511876725 </td>
						<td> Gandhinagar </td>
					</tr>
					<tr class="donors-content">
						<td> Nikhil Tayal </td>
						<td> AB+ </td>
						<td> 7048546242 </td>
						<td> Gandhinagar </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Gir Somnath</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jamnagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Junagadh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kheda</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kutch</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mahisagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mehsana</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Morbi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Narmada</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Navsari</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Panchmahal</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Patan</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Porbandar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Rajkot</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sabarkantha</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Surat</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> V Rajeshwari </td>
						<td> A- </td>
						<td> 9979943250 </td>
						<td> SURAT </td>
					</tr>
					<tr class="donors-content">
						<td> Rajni Verma </td>
						<td> B+ </td>
						<td> 9725094776 </td>
						<td> SURAT Gujarat</td>
					</tr>
					<tr class="donors-content">
						<td> VICKYVO </td>
						<td> AB+ </td>
						<td> 7405252844 </td>
						<td> katargam SURAT</td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Surendranagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Tapi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Vadodara</td>
					</tr>

					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Harit Shah </td>
						<td> O- </td>
						<td> 8128393574 </td>
						<td> Vadodara </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Valsad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Haryana</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Ambala</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bhiwani</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Faridabad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Fatehabad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Gurgaon</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Hissar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jhajjar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jind</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kaithal</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Karnal</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kurukshetra</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Mahendragarh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mewat</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Palwal</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Panchkula</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Panipat</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Rewari</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Rohtak</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sirsa</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sonipat</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Karnal</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Yamuna Nagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Himachal Pradesh</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Bilaspur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Chamba</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Hamirpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kangra</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kinnaur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kullu</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Lahaul and Spiti</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mandi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Shimla</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sirmaur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Solan</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Una</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Jammu & Kashmir</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Anantnag</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bandipora</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Baramulla</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Badgam</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Doda</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ganderbal</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jammu</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kargil</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kathua</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kishtwar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Kulgam</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kupwara</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Leh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Poonch</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Javaid Iqbal </td>
						<td>A1+ </td>
						<td> 9906375549 </td>
						<td> Mendhar </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Pulwama</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Rajouri</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ramban</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Reasi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Samba</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Shopian</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


					<tr>
						<td colspan="4" class="dist-list">Srinagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Udhampur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Jharkhand</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Bokaro</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Chatra</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Deoghar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dhanbad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dumka</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">East Singhbhum</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Syed Zeeshanul Haque </td>
						<td> B+ </td>
						<td> 7858088687 </td>
						<td> Jamshedpur </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Garhwa</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Giridih</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Godda</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Gumla</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Hazaribag</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jamtara</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Khunti</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Koderma</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Latehar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Lohardaga</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Pakur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Palamu</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ramgarh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ranchi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


					<tr>
						<td colspan="4" class="dist-list">Sahibganj</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Seraikela Kharsawan</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Simdega</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">West Singhbhum</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Lakshadweep</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Lakshadweep</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Madhya Pradesh</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Agar Malwa</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Alirajpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Anuppur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ashok Nagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Balaghat</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Barwani</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Betul</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bhind</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bhopal</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Burhanpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Chhatarpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Chhindwara</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Damoh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Datia</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dewas</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dhar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dindori</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Guna</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Gwalior</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Harda</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Hoshangabad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Indore</td>
					</tr>

					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Pooja Thakur </td>
						<td> B+ </td>
						<td> 09685041850 </td>
						<td> indore </td>
					</tr>
					<tr class="donors-content">
						<td> MATHAN KUMAR V </td>
						<td> A+ </td>
						<td> +91 8939774476 </td>
						<td> indore </td>
					</tr>
					<tr class="donors-content">
						<td> Abhinav V Sagar </td>
						<td> A+ </td>
						<td> 9739170977 </td>
						<td> indore </td>
					</tr>
					<tr class="donors-content">
						<td> Patturaja Selvaraj </td>
						<td> B+ </td>
						<td> 9755580845 </td>
						<td> indore </td>
					</tr>
					<tr class="donors-content">
						<td> Avik Gugalia </td>
						<td> B+ </td>
						<td> 9755092828 </td>
						<td> indore </td>
					</tr>
					<tr class="donors-content">
						<td> Amulya Madem </td>
						<td> A+ </td>
						<td> 7569016382 </td>
						<td> indore </td>
					</tr>
					<tr class="donors-content">
						<td> Ashutosh Gupta </td>
						<td> O+ </td>
						<td> 9163562605 </td>
						<td> indore </td>
					</tr>
					<tr class="donors-content">
						<td> Gautham.A </td>
						<td> B+ </td>
						<td> 7024143735 </td>
						<td> indore </td>
					</tr>


					<tr>
						<td colspan="4" class="dist-list">Jabalpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jhabua</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Katni</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Khandwa (East Nimar)</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Khargone (West Nimar)</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mandla</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mandsaur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Morena</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Narsinghpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Neemuch</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Panna</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Raisen</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Rajgarh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ratlam</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Rewa</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Satna</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sehore</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Seoni</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Shahdol</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Shajapur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sheopur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Shivpuri</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sidhi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Singrauli</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Tikamgarh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ujjain</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Umaria</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Vidisha</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Manipur</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Bishnupur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Churachandpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Chandel</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Imphal East</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Senapati</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Tamenglong</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Thoubal</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ukhrul</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Imphal West</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Meghalaya</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">East Garo Hills</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">East Khasi Hills</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">East Jaintia Hills</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">North Garo Hills</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ri Bhoi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">South Garo Hills</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">South West Garo Hills</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">South West Khasi Hills</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">West Jaintia Hills</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">West Garo Hills</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">West Khasi Hills</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Mizoram</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Aizawl</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Champhai</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kolasib</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Lawngtlai</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Lunglei</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mamit</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Saiha</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Serchhip</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Nagaland</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Dimapur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kiphire</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kohima</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Longleng</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mokokchung</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mon</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Peren</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Phek</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Tuensang</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Wokha</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Zunheboto</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Odisha (Orissa)</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Angul</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Boudh (Bauda)</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bhadrak</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Balangir</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bargarh (Baragarh)</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Balasore</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Cuttack</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Debagarh (Deogarh)</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dhenkanal</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ganjam</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Gajapati</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Jharsuguda</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jajpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jagatsinghpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Khordha</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kendujhar (Keonjhar)</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kalahandi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kandhamal</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Koraput</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kendrapara</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Malkangiri</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mayurbhanj</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Nabarangpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Nuapada</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Nayagarh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Puri</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Rayagada</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sambalpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Subarnapur (Sonepur)</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sundargarh</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> METHEDIUS KERKETTA </td>
						<td> B+ </td>
						<td> 9178369747 </td>
						<td> ROURKELA </td>
					</tr>
					<tr class="donors-content">
						<td> Gopeeshree Krushna Mohanta </td>
						<td> A+ </td>
						<td> 9658635533 </td>
						<td> ROURKELA </td>
					</tr>

				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Punjab</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Amritsar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Barnala</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bathinda</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Firozpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Faridkot</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Fatehgarh Sahib</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Fazilka</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Gurdaspur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Hoshiarpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kapurthala</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ludhiana</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Mansa</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Moga</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sri Muktsar Sahib</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Pathankot</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Patiala</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Rupnagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sahibzada Ajit Singh Nagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sangrur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Shahid Bhagat Singh Nagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Tarn Taran</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Rajasthan</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Ajmer</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Alwar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bikaner</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Barmer</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Banswara</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bharatpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Baran</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bundi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bhilwara</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Churu</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Chittorgarh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Dausa</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dholpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dungapur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ganganagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Hanumangarh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jhunjhunu</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jalore</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jodhpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jaipur</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> oindrila </td>
						<td> O+ </td>
						<td> 7877080539 </td>
						<td> Jaipur </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jaisalmer</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Jhalawar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Karauli</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Rishikesh Meena </td>
						<td> A- </td>
						<td> 9897756711 </td>
						<td> Sapotra </td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kota</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Nagaur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Pali</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Pratapgarh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Rajsamand</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sikar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sawai Madhopur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sirohi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Tonk</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Udaipur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Sikkim</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">East Sikkim</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">North Sikkim</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">South Sikkim </td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">West Sikkim</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Tripura</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Dhalai</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Gomati</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Khowai</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">North Tripura</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sepahijala</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">South Tripura</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Unokoti</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">West Tripura</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Uttar Pradesh</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Agra</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> WASEEM Uddin </td>
						<td> A+ </td>
						<td> 9319146903 </td>
						<td> Agra </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Aligarh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Allahabad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ambedkar Nagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Amethi (Chhatrapati Shahuji Maharaj Nagar)</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Amroha (Jyotiba Phule Nagar)</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Auraiya</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Azamgarh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bagpat</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bahraich</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ballia</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Balrampur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Banda</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Barabanki</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bareilly</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Basti</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bijnor</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Budaun</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Bulandshahr</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Dolly sharma </td>
						<td> A2B+ </td>
						<td> 7983550642 </td>
						<td> Bulandshahr </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Chandauli</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Chitrakoot</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Deoria</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Etah</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Etawah</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Faizabad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Farrukhabad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Fatehpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Firozabad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Gautam Buddh Nagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ghaziabad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Ghazipur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Gonda</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


					<tr>
						<td colspan="4" class="dist-list">Gorakhpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Hamirpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Hapur (Panchsheel Nagar)</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Hardoi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Hathras (Mahamaya Nagar)</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jalaun</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jaunpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jhansi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kannauj</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kanpur Dehat (Ramabai Nagar)</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kanpur Nagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kasganj (Kanshi Ram Nagar)</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Kaushambi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kushinagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Lakhimpur Kheri</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Lalitpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Lucknow</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> SEWA SHRI DR PRATYUSH SHASHTRI </td>
						<td> A+ </td>
						<td> 9990266266 </td>
						<td> LUCKNOW-226010 </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Maharajganj</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mahoba</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mainpuri</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mathura</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mau</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Meerut</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Mirzapur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Moradabad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Muzaffarnagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Pilibhit</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Pratapgarh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Raebareli</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Rampur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Saharanpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sambhal (Bheem Nagar)</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Sant Kabir Nagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sant Ravidas Nagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Shahjahanpur</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Prathmesh Garg </td>
						<td> AB+ </td>
						<td> 9675762947 </td>
						<td> Saharanpur </td>
					</tr>
					<tr class="donors-content">
						<td> Amit Kumar </td>
						<td> O+ </td>
						<td> +919235977695 </td>
						<td> Tilhar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Shamli</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Siddharthnagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sitapur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sonbhadra</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Sultanpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Unnao</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Varanasi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>


				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">Uttarakhand</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Almora</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bageshwar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Chamoli</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Champawat</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Dehradun</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Gurpreet singh rayat </td>
						<td> A+ </td>
						<td> 9997519768 </td>
						<td> dehradun </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Haridwar</td>
					</tr>
					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Anil kumar k </td>
						<td> O+ </td>
						<td> 8554021608 </td>
						<td> roorkee </td>
					</tr>
					<tr class="donors-content">
						<td> Arpit Aggarwal </td>
						<td> A+ </td>
						<td> 8126794181 </td>
						<td> roorkee </td>
					</tr>
					<tr class="donors-content">
						<td> Rahul tandon </td>
						<td> O+ </td>
						<td> 7060467118 </td>
						<td> roorkee </td>
					</tr>
					<tr class="donors-content">
						<td> SAURAV GOYAL </td>
						<td> B+ </td>
						<td> 7060467068 </td>
						<td> roorkee </td>
					</tr>
					<tr class="donors-content">
						<td> Mudit Kapoor </td>
						<td> B+ </td>
						<td> 9029436505 </td>
						<td> roorkee </td>
					</tr>
					<tr class="donors-content">
						<td> Dhruvi Jain </td>
						<td> B+ </td>
						<td> 8057925524 </td>
						<td> roorkee </td>
					</tr>
					<tr class="donors-content">
						<td> Mrinmoy Sinha </td>
						<td> B+ </td>
						<td> 9557854872 </td>
						<td> roorkee </td>
					</tr>
					<tr class="donors-content">
						<td> Gururaj MV </td>
						<td> B+ </td>
						<td> 8088044426 </td>
						<td> roorkee </td>
					</tr>
					<tr class="donors-content">
						<td> Qazi Inaam </td>
						<td> A+ </td>
						<td> 970825124 </td>
						<td> roorkee </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Nainital</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Pauri Garhwal</td>
					</tr>

					<tr class="donors-head">
						<td> NAME </td>
						<td> BLOOD GROUP </td>
						<td> MOBILE </td>
						<td> CITY </td>
					</tr>
					<tr class="donors-content">
						<td> Somraj Bishnoi </td>
						<td> B+ </td>
						<td> 7037547848 </td>
						<td> srinagar garhwal </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Pithoragarh</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Rudraprayag</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Tehri Garhwal</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Udham Singh Nagar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Uttarkashi</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

				</table>
			</div>
		</div>
	</div>
	<div class="flex-list my-3">
		<div class="li-title state-bg">
			<div class="d-flex justify-content-between align-items-center">
				<p class=" ml-3 mt-2 h6 font-weight-bold">West Bengal</p>
				<p class="h4 me-4 mr-4  symp"></p>
			</div>
		</div>
		<div class="li-content">
			<div class="table-responsive">
				<table class="table table-bordered table-sm shadow">
					<tr>
						<td colspan="4" class="dist-list1">DISTRICTS</td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Alipurduar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bankura</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Bardhaman</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Birbhum</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Cooch Behar</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Dakshin Dinajpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Darjeeling</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Hooghly</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Howrah</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Jalpaiguri</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Kolkata</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Maldah</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Murshidabad</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>

					<tr>
						<td colspan="4" class="dist-list">Nadia</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">North 24 Parganas</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Paschim Medinipur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Purba Medinipur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Purulia</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">South 24 Parganas</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
					<tr>
						<td colspan="4" class="dist-list">Uttar Dinajpur</td>
					</tr>
					<tr class="donors-content no-donors">
						<td colspan="4"> </td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<script>
	const listElement = document.querySelectorAll('.flex-list');
	listElement.forEach(element => {
		const titleElement = element.getElementsByClassName('li-title');
		const contenteElement = element.getElementsByClassName('li-content');
		titleElement[0].addEventListener('click', function() {
			contenteElement[0].classList.toggle('active');
			this.classList.toggle('min');
		});
	});
</script>
<?php include_once("master/footer.php"); ?>