<?php

include('include/connection.php');

 if(!empty($_GET['id']))
 {
     $uid = $_GET['id'];
 }

$sel1 = mysqli_query($con,"select * from products where id='$uid'");
$row1 = mysqli_fetch_assoc($sel1);

?> 
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./lib/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="./lib/css/animate.css">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="./lib/css/aos.css">
    <!-- nice-select css -->
    <link rel="stylesheet" href="./lib/css/nice-select.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="./lib/css/magnific-popup.css">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="./lib/css/slick.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="./lib/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="./css/main.style.css">

    <link rel="stylesheet" href="./css/nav.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 


    <title><?= $row1['pname'] ?> | | ATG TUFF</title>

    <style>

     #txt{ 
        padding-top: 55px;
   
     }
    
     .col-sm-12{
      padding-left: 0px;
      padding-right: 0px;
     }
     .bg{
       background:url('../admin/img/products_images/<?= $row1['pimage'] ?>');
     }
     @media only screen and (min-width:800px){
      .details-text{
       margin-left:-35px !important;
     }
     }
  </style>
    
<style>
       #scroll {
            position:fixed;
            left:20px;
            bottom:20px;
            cursor:pointer;
            width:40px;
            height:40px;
            background-color:#3498db;
            text-indent:-9999px;
            display:none;
            -webkit-border-radius:60px;
            -moz-border-radius:60px;
            border-radius:60px
        }
        #scroll span {
            position:absolute;
            top:50%;
            left:50%;
            margin-left:-8px;
            margin-top:-12px;
            height:0;
            width:0;
            border:8px solid transparent;
            border-bottom-color:#ffffff;
        }
        #scroll:hover {
            background-color:#e74c3c;
            opacity:1;filter:"alpha(opacity=100)";
            -ms-filter:"alpha(opacity=100)";
        }
       
    </style>
     <style>
  
/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
    </style>
</head>
<body >

   <a href="#" title="Back to top" id="scroll" style="display: none;"><span></span></a>
    
        <!-- Nvabar Strat  -->

         <?php
         include('include/header.php');
         ?>
        
        <!-- Nvabar end  -->

      <!-- Details section start -->
    <section class="details mb-4">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" data-aos="fade-right" data-aos-duration="3000">
                <div class="location" style="padding-top: 0px;" >
                    <img class="zoom"  src='../admin/img/products_images/<?= $row1['pimage'] ?>' width="100%" height="370px;">
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row" id="txt">
                <div class="col-sm-12">
                    <h2 style="letter-spacing: 3px;font-weight: bold;color: black;text-transform:uppercase;"><?= $row1['pname'] ?></h2>
                    <p style="font-weight: bold;"><?= $row1['pcontent'] ?></p> 
                </div>
        </div>
        <div class="row" id="txt">
                <div class="col-sm-12">
                   <h4 style="font-weight: bold;"><?= $row1['heading'] ?></h4>
                   <p><?= $row1['pcontent1'] ?></p>
                </div>
                <!-- <div class="col-sm-12" style="padding-bottom:20px;">-->
                <!--        <img src="../admin/img/products_images/<?= $row1['image1'] ?>" width="100%" height="230px;">                         -->
                <!--</div> -->
               
        </div>
        
      </div>
      <div class="container-fluid mt-5 mb-3 pl-4">
          <div class="row bg" >
                <div class="col-sm-12 col-md-6 col-lg-6 pb-4 bg-light">
                    <div class="details-text" data-aos="fade-right" data-aos-duration="3000">
                        <h2><span>For more about ATG TUFF Glass:</span></h2>
                        <h3><b id="bol">Download our latest brochure</b></h3>
                        <p class="mb-4"style="margin-left: 10px;" >Find out more about ATG Glass </p>
                        <a href="./book/ATGTUFF_brouchure@2020_redesigned.pdf" download id="btn1" class="btn-custom mt-4" style="margin-left: 10px;"><i class="fa fa-file-pdf"></i>&nbsp; Download our Brochure</a>
                    </div>
                </div>     
          </div>
        </div>
        
        
        <div class="container">
           <div class="row mb-4 pb-5 mt-5"><h3 class="w-100 text-center"> <span class="atgserv_spn">Our Channel Partner</span> </h3></div>
           <section class="customer-logos slider">
                <?php
          $dataS = mysqli_query($con,"select * from channel_partner");
          while($finalS = mysqli_fetch_assoc($dataS))
          { ?>
           <div class="slide"><img src="admin/img/our_partner/<?php echo $finalS['img'] ?>" height="130px"></div>
          <?php } ?>
           </section>
        </div>
        
        
        
        <div class="container">
        <div class="row" id="txt">
                <div class="col-sm-12">
                   <h4 style="font-weight: bold;color: black;">Contact ATG and see the quality for yourself</h4>
                   <p>Let us know your requirements and our expert team will suggest the best glass services and glass product solutions to suit. They will also talk you through our custom glass cutting and glass edge polishing service options to complement your
                   <?php if($_GET['id'] == 1){ ?>
                   CLEAR toughened glass
                   <?php }elseif($_GET['id'] == 2){ ?>
                     REFLECTIVE toughened glass
                   <?php }elseif($_GET['id'] == 3){ ?>
                     TINTED toughened glass
                   <?php }elseif($_GET['id'] == 4){ ?>
                     INSULATED toughened glass
                    <?php }elseif($_GET['id'] == 5){ ?>
                     LAMINATED toughened glass
                   <?php } ?>
                   
                    products.
                   
                   
                   </p>
                   
                </div>
        </div>
      </div>
    </div>

    </section>

      <!-- Details section end -->

   



<?php include('include/footer.php')  ?>












 <!-- jquery plugins here-->
 <script src="./lib/js/jquery-1.12.1.min.js"></script>
 <!-- popper js -->
 <script src="./lib/js/popper.min.js"></script>
 <!-- bootstrap js -->
 <script src="./lib/js/bootstrap.min.js"></script>
 <!-- magnific js -->
 <script src="./lib/js/jquery.magnific-popup.min.js"></script>
 <!-- carousel js -->
 <script src="./lib/js/owl.carousel.min.js"></script>
 <script src="./lib/js/slick.min.js"></script>

 <!-- easing js -->
 <script src="./lib/js/jquery.easing.min.js"></script>
 <!--masonry js-->
 <script src="./lib/js/masonry.pkgd.min.js"></script>
 <script src="./lib/js/masonry.pkgd.js"></script>
 <!--form validation js-->
 <script src="./lib/js/jquery.nice-select.min.js"></script>
  <script src="./lib/js/aos.js"></script>
  <script src="./lib/js/jquery.ajaxchimp.min.js"></script>
  <script src="./lib/js/jquery.form.js"></script>
  <script src="./lib/js/jquery.validate.min.js"></script>
  <script src="./lib/js/mail-script.js"></script>
 <!-- counter js -->
 <script src="./lib/js/jquery.counterup.min.js"></script>
 <script src="./lib/js/waypoints.min.js"></script>
 <script src="./js/main.custom.js"></script>
 
<script>
    
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 1500); 
        return false; 
    }); 
     $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplaySpeed: 1500,
        autoplay: true,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
</body>
</html>