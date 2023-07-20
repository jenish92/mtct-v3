<?php 
$root = getenv("DOCUMENT_ROOT");
require $root.'/v3.1/master/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mother Therasa Charitable Trust</title>
  <meta charset="utf-8">
  <meta name="description" content="<?php echo $meta_description; ?>">
  <meta name="keywords" content="<?php echo $meta_keywords; ?>">
  <meta name="author" content="Mother Teresa Charity Trust">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $meta_title; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link href="<?=$base_url?>lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?=$base_url?>css/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=$base_url?>css/owl.theme.default.css" rel="stylesheet">
  <link href="<?=$base_url?>css/style.css" rel="stylesheet">
    <link href="<?=$base_url?>css/mtct.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="<?=$base_url?>img/favicon.ico">

  
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?=$base_url?>lib/wow/wow.min.js"></script>
    <script src="<?=$base_url?>lib/easing/easing.min.js"></script>
    <script src="<?=$base_url?>lib/waypoints/waypoints.min.js"></script>
  <script src="<?=$base_url?>js/owl.carousel.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->

<style>
  #header-logo{
    position: sticky !important;
    top: 0;
    z-index: 100;
    background-color: #fff;
  }
  #logo-img{
    width: 100%;
    transition: width 0.3s ease-in-out;
  }
</style>
<script>
  window.addEventListener('scroll', function() {
  const navbar = document.getElementById('header-logo');
  const image = document.getElementById('logo-img');
  
  if (window.pageYOffset === 0) {
    // When scrolled to top, set image width to a larger value
    image.style.width = '100%'; // Change the image width to your desired value
  } else {
    // When scrolled down, reset image width to the initial value
    image.style.width = '50%'; // Initial image width
  }
});

</script>
 
  <script>
    $(document).ready(function(){
        window.onscroll = function() {myFunction()};
        var header = document.getElementById("header-logo");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  // if (window.pageYOffset > sticky) {
  //     header.classList.add("sticky");
  // } else {
  //   header.classList.remove("sticky");
  // }
}
        
        $('section#recent-works .tab .nav-tabs li').click(function(){
            if($('section#recent-works .tab .nav-tabs li').hasClass("active")){
              $(this).siblings().removeClass('active');
            }else{
              $(this).addClass('active');
            }
        });
      
        $('#ham-icon').click(function(){
            $('.main-menu-tab').slideToggle(1000);
        });

        $('ul.menu-ul-tab li').click(function(){
            $(this).addClass("active-menu");
            $(this).html("<span id='close'>x<span>");
        });

        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');

    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
    });

    return false;
  });


        const items = document.querySelectorAll(".accordion a");

        function toggleAccordion(){
          this.classList.toggle('active');
          this.nextElementSibling.classList.toggle('active');
        }

        items.forEach(item => item.addEventListener('click', toggleAccordion));
      
        $('.owl-carousel.current-info').owlCarousel({
          loop:true,
          autoplay:true,
          margin:10,
          nav:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:3
              }
          }
      })


        $('.owl-carousel.testi-info').owlCarousel({
          loop:true,
          autoplay:true,
          margin:10,
          nav:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:2
              }
          }
      })

          $('.owl-carousel').owlCarousel({
          loop:true,
          autoplay:true,
          margin:10,
          nav:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1
              }
          }
      })
        
        
        

    });
      
document.addEventListener("DOMContentLoaded", function() {
            var left_content = document.querySelectorAll(".left-content");
            var right_content = document.querySelectorAll(".right-content");
            var bottom_content = document.querySelectorAll(".bottom-content");
            var top_content = document.querySelectorAll(".top-content");
            
            left_content.forEach(function(caption) {
                caption.classList.add("animate__animated", "animate__fadeInLeft");
            });
    
            right_content.forEach(function(caption) {
                caption.classList.add("animate__animated", "animate__fadeInRight");
            });
    
            top_content.forEach(function(caption) {
                caption.classList.add("animate__animated", "animate__fadeInTop");
            });
    
            bottom_content.forEach(function(caption) {
                caption.classList.add("animate__animated", "animate__fadeInBottomRight");
            });
        });

// Get the header

  </script>
</head>
<body>

<header>

  <div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="top-barleft">
                <ul>
                  <li><a href="tel:+91-8939300227"><i class="fa fa-mobile" aria-hidden="true"></i>+91-8939300227</a></li>
                  <li><a href="tel:+91-44-2374 3883"><i class="fa fa-phone" aria-hidden="true"></i>+91-44-2374 3883, 2374 2699</a></li>
                   <li><a href="mailto:mtct1997[at]gmail[dot]com"><i class="fa fa-envelope-o" aria-hidden="true"></i>mtct1997[at]gmail[dot]com</a></li>
                   <li>
                  <span><a href="<?=$base_url?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                  <span><a href="<?=$base_url?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                   <span><a href="<?=$base_url?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></span><span><a href="<?=$base_url?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></span>
                  <span><a href="<?=$base_url?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></span>
                   <span><a href="<?=$base_url?>"><i class="fa fa-btc" aria-hidden="true"></i></a></span>
                   <span><a href="<?=$base_url?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a></span>
                  <span><a href="<?=$base_url?>"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
                   <span><a href="<?=$base_url?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a></span>
</li>
                </ul>
              </div>
            </div>
            
        </div>
    </div>
    
    <!-- <div id="ham-icon">
      <div class="in-ham">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div> -->
  </div>
  </header>
  <section class="header-logo" id="header-logo">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="logo">
            <a href="<?=$base_url?>"><img src="<?=$base_url?>img/logo.png" id="logo-img" alt="logo" class="img-fluid"></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="donate-right">
            <a href="" class="btn donate1">Online Donation</a>
            <a href="" class="btn bank">Thro Bank</a>
          </div>
        </div>
      </div>
      
    </div>
    <div id="menu_area" class="menu-area">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-dark navbar-expand-lg mainmenu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="<?=$base_url?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">home</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a href="<?=$base_url?>genesis.php">Genesis</a></li>
                              <li><a href="<?=$base_url?>accreditation.php">Accreditation</a></li>
                              <li><a href="<?=$base_url?>archives.php">Archives</a></li>
                              <li><a href="<?=$base_url?>govtregister.php">Government Registration</a></li>
                              <li><a href="<?=$base_url?>credential.php">Credentials</a></li>
                              <li><a href="<?=$base_url?>philontropic_support.php">PHILONTROPIC SUPPORT</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="<?=$base_url?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="<?=$base_url?>about-us/trust-board.php">trust board</a></li>
                            <li><a href="<?=$base_url?>about-us/advisory-board.php">advisory board</a></li>
                            <li><a href="<?=$base_url?>about-us/governing-board.php">governing board</a></li>
                            <li><a href="<?=$base_url?>about-us/awards.php">awards</a></li>
                            <li><a href="<?=$base_url?>documents/Organizational-Structure.pdf">Organisation Chart</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="<?=$base_url?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="<?=$base_url?>photo-gallery.php">Photos</a></li>
                                <li><a href="<?=$base_url?>video-gallery.php">videos</a></li>
                                
                                </ul>
                            </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="<?=$base_url?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Execution Wings</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="<?=$base_url?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mother Teresa Forum</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="<?=$base_url?>execution-wings/Mother_Teresa_Forum.php"> BECOME A MEMBER </a></li>
                                <li><a href="<?=$base_url?>execution-wings/member.php"> ONLINE MEMBERSHIP </a></li>
                                <li><a href="<?=$base_url?>documents/MFF.pdf"> OFFLINE MEMBERSHIP </a></li>
                                <li><a href="<?=$base_url?>execution-wings/national-committee.php"> NATIONAL COMMITEE </a></li>
                                <li><a href="<?=$base_url?>execution-wings/state-committee.php"> STATE COMMITEES </a></li>
                                <li><a href="<?=$base_url?>district-committee.php"> DISTRICT COMMITEES </a></li>
                                <li><a href="<?=$base_url?>other-country.php"> OTHER COUNTRY REP </a></li>
                                <li><a href="<?=$base_url?>documents/officebarers.pdf"> Office Bearer Form </a></li>
                                <li><a href="<?=$base_url?>documents/Bye-Laws.pdf">  BY LAW - ENGISH </a></li>
                                <li><a href="<?=$base_url?>documents/Bye-Laws-t.pdf">  BY LAW - TAMIL </a></li>
                                
                                
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="<?=$base_url?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mother Teresa Labour Assn.</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               
                                <li><a href="<?=$base_url?>auto-state-committee.php"> STATE COMMITEES </a></li>
                                <li><a href="<?=$base_url?>autod.php"> DISTRICT COMMITEES </a></li>
                                <li><a href="<?=$base_url?>autob.php"> Branches </a></li>
                                <li><a href="<?=$base_url?>documents/officebarers.pdf"> Office Bearer Form </a></li>
                                <li><a href="<?=$base_url?>documents/ByLaws-auto.pdf"> ByLaws </a></li>
                                
                                
                                
                                </ul>
                            </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="<?=$base_url?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Project</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="<?=$base_url?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Goal</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="<?=$base_url?>save-child.php"> Save a Child   </a></li>
                                <li><a href="<?=$base_url?>health.php"> Health and Hygiene </a></li>
                                <li><a href="<?=$base_url?>women.php"> Women Empowerment </a></li>
                                <li><a href="<?=$base_url?>chronically.php"> Chronically Ill</a></li>
                                <li><a href="<?=$base_url?>handicapped.php"> Handicapped </a></li>
                                <li><a href="<?=$base_url?>education.php"> Education </a></li>
                                <li><a href="<?=$base_url?>youth.php"> Youth Empowerment </a></li>
                                <li><a href="<?=$base_url?>human.php">  Human Rights </a></li>
                                <li><a href="<?=$base_url?>natural.php">  Natural Calamities </a></li> 
                                <li><a href="<?=$base_url?>housing.php">  Housing the Poor </a></li>
                                <li><a href="<?=$base_url?>poor.php">  Poor Feeding </a></li>
                                <li><a href="<?=$base_url?>old.php">  Old Age Persons</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="<?=$base_url?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Current Project</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               
                                <li><a href="<?=$base_url?>tailoring.php"> Free Tailoring Center </a></li>
                                <li><a href="<?=$base_url?>computer.php">  Free Computer Center</a></li>
                                <li><a href="<?=$base_url?>tution.php">  Free Tution Center </a></li>
                                <li><a href="<?=$base_url?>ambulance.php">  Free Ambualance Service </a></li>
                                        
                                
                                </ul>
                            </li>
                            <li><a href="<?=$base_url?>monthly-activities.php"> Monthly Activities </a></li>
                            <li><a href="<?=$base_url?>documents/MTCT-Annual-Report.pdf"> Brochure </a></li>
                            </ul>
                        </li>
<!--                        <li><a href="<?=$base_url?>"> "COVID-19 / OMICRON Relief" </a></li>-->
                        <li><a href="<?=$base_url?>helps/medical-helps.php"> Medical help </a></li>
                        <li><a href="<?=$base_url?>helps/education-helps.php"> Educational Help </a></li>
                         <li class="dropdown">
                            <a class="dropdown-toggle" href="<?=$base_url?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Donate</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a href="<?=$base_url?>donation/">Online Donation</a></li>
                              <li><a href="<?=$base_url?>offline-donate.php">Through Bank</a></li>
                              <li><a href="<?=$base_url?>blood-donation.php">Blood Donor Registration</a></li>
                              <li><a href="<?=$base_url?>donors-search.php">Blood Donors Search</a></li>
                            </ul>
                        </li>
                        <li><a href="<?=$base_url?>contact.php"> Contact Us   </a></li>
                        <li><a href="<?=$base_url?>general_help.php">General Help </a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
  </section>
  