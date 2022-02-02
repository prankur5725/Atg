<?php
include('include/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, 
maximum-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/x-image" href="favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./lib/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="./lib/css/animate.css"> 
    
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <!--<link rel="icon" type="image/jpg" href="fevicon1.jpg">-->
    
    <!-- AOS CSS -->
    <link rel="stylesheet" href="./lib/css/aos.css">
    <!-- nice-select css -->
    <link rel="stylesheet" href="./lib/css/nice-select.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="./lib/css/magnific-popup.css">
    <!-- Slick Slider CSS -->
      <link rel="stylesheet" href="./lib/css/slick.css">
    <link rel="stylesheet" href="./lib/css/slick-theme.css">
    <link rel="stylesheet" href="./lib/css/owl.carousel.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="./lib/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="./css/main.style.css">

    <link rel="stylesheet" href="./css/nav.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 
    <title>Home | | ATG TUFF</title>
    
    
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
        
        
        
         @media (max-width:991.98px) {
             .padding {
                 padding: 1.5rem
             }
         }
        
         @media (max-width:767.98px) {
             .padding {
                 padding: 1rem
             }
         }
        
         .padding {
             padding: 5rem
         }
        
         .card {
             position: relative;
             display: flex;
             width: 350px;
             flex-direction: column;
             min-width: 0;
             word-wrap: break-word;
             background-color: #fff;
             background-clip: border-box;
             border: 1px solid #d2d2dc;
             border-radius: 11px;
             -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
             -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
             box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
         }
        
         .card .card-body {
             padding: 1rem 1rem
         }
        
         .card-body {
             flex: 1 1 auto;
             padding: 1.25rem
         }
        
         p {
             font-size: 0.875rem;
             margin-bottom: .5rem;
             line-height: 1.5rem
         }
        
         h4 {
             line-height: .2 !important
         }
        
         .profile {
             margin-top: 16px;
             margin-left: 11px
         }
        
         .profile-pic {
             width: 58px
         }
        
         .cust-name {
             font-size: 18px
         }
        
         .cust-profession {
             font-size: 10px
         }
        
         .items {
             width: 90%;
             margin: 0px auto;
             margin-top: 100px
         }
        
         .slick-slide {
             margin: 10px
         }
         
        
        #quoteImg{
            width:20%;
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
<body>

<a href="#" title="Back to top" id="scroll" style="display: none;"><span></span></a>
<?php  include ('include/header.php');  ?>
         




    <section class="hero">
        <!-- Nvabar Strat  -->

         
        
        <!-- Nvabar end  -->

        <!-- carousel start -->

        <header>
          <div class="owl-carousel owl-theme">
              <?php
              $sel1 = mysqli_query($con,"select * from main_slider");
              while($row1 = mysqli_fetch_assoc($sel1))
              {
             ?>
             <div class="item">
              <img src="../admin/img/main_slider/<?= $row1['img'] ?>" alt="images not found">
              <div class="cover">
                <div class="container">
                  <div class="header-content">
                    <div class="line"></div>
                    <h2><?= $row1['first_line'] ?></h2>
                    <h1><?= $row1['second_line'] ?></h1>
                    <h4><?= $row1['third_line'] ?></h4>
                    <h4><a href="<?= $row1['redirect_page'] ?>" class="btn btn-danger">Know More</a></h4>
                  </div>
                </div>
              </div>
            </div>
             <?php
              }
              ?>
            
           
          </div>
        </header>


    <!-- carousel end -->
    </section>
    <marquee class="bg-danger" style="color:white;" onMouseOver="this.stop()" onMouseOut="this.start()">Jobs Available !!! <a href="career.php" style="color:yellow;">Click here</a></marquee>
      <!-- Details section start -->
    <section class="details mt-5 mb-4">

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-right" data-aos-duration="3000">
                <div class="details-text">
                    <h2><span>Aggarwal Toughened and Safety Glass:</span> FAST, CONVENIENT AND SAFE !</h2>
                    <p>Based in India, Punjab, Aggarwal Toughened and Safety Glass is among the leading bespoke glass manufacturers and glass suppliers in Punjab. All of our custom glass services are completed in-house by our skilled and experienced team of glass processors and master craftsmen. This allows us to offer the very best quality products and services to our customers, both commercial and domestic, and to meet their exact specifications.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 " data-aos="fade-right" data-aos-duration="3000">
                <div class="details-img" >
                    <img src="./img/details_img.jpg" alt="" height="100%" width="100%" style="padding-top:25px;">
                </div>
            </div>
        </div>
    </div>

    </section>
  
  
  
  
  <!-- Services Section Start -->
 
    <section class="services pt-5 pb-5">
        <div class="container ">
            <div class="row mb-3">
                <h1 class="w-100 text-center text-light"><span class="atgserv_spn" style="font-weight:bold">SERVICES WE OFFER</span></h1>
            </div>
            <div class="row">
                
                 <div class="col-sm-4 col-md-4 col-lg-4 mt-4">
                     <a href="glass_products.php" style="text-decoration:none;" title="Glass Products">
                    <div class="atgserv">
                        <img src="img/bal.jpg" alt="no img" height="200px" width="100%">
                    </div><br>
                    <div>
                        <h4 style="color:white;">
                            Glass Products
                        </h4>
                    </div>
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 mt-4">
                     <a href="glass_processing.php" style="text-decoration:none;">
                    <div class="atgserv">
                        <img src="img/edge.jpg" alt="no img" height="200px" width="100%" title="Glass Processing">
                    </div><br>
                    <div>
                        <h4 style="color:white;">
                            Glass Processing
                        </h4>
                    </div>
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 mt-4">
                     <a href="product_details.php?id=1" style="text-decoration:none;">
                    <div class="atgserv">
                        <img src="img/toughend.jpg" alt="no img" height="200px" width="100%" title="Glass Toughening">
                    </div><br>
                    <div>
                        <h4 style="color:white;">
                            Glass Toughening
                        </h4>
                    </div>
                    </a>
                </div>
                
                
            </div>
            
        </div>
    </section>

      <!-- Services Section End -->



<!--Our Partner start-->

 <div class="container  mb-5">
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

<!--Our Partner end-->



<!-- Broucher Download start-->


  <section class=" pt-5 pb-5 broucher ">

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8 mb-4" data-aos="fade-right" data-aos-duration="3000">
                <div class="details-text">
                    <h2><span>For more about ATG Glass:</span> Download our latest brochure</h2>
                    <p class="mb-4">Find out more about ATG Glass  and the wide variety of products and services we offer, from glass cutting and  to balustrades and glass splashbacks. Please download our latest brochure by using the link below</p>
                    <a href="./book/ATGTUFF_brouchure@2020_redesigned.pdf" class="btn-custom mt-4" download><i class="fa fa-file-pdf" ></i> Download our brochure</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 " data-aos="fade-right" data-aos-duration="3000">
                <div class="details d-flex justify-content-center align-items-center">
                    <img src="./img/search.jpg" alt="" height="375px" width="295px">
                </div>
            </div>
        </div>
    </div>

    </section>

<!-- Broucher Download end-->


<!--testomonial start-->

 <div class="container mt-5">
   <div class="row "><h3 class="w-100 text-center"> <span class="atgserv_spn">Testimonials</span> </h3></div>
   <div class="items mb-5">
          
         <?php
          $data = mysqli_query($con,"select * from testimonials");
          while($final = mysqli_fetch_assoc($data))
          { ?>
         
         <div class="card mb-4">
        <div class="card-body">
            <h4 class="card-title"><i class="fas fa-quote-left"></i></h4>
            <div class="template-demo">
                <p><?= $final['content'] ?></p>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-10">
                    <div class="float-right">
                        <h4 style='font-size:10px;'>- <?= $final['name'] ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
         <?php } ?>
    
    </div>
</div>


    <!--testomonial end-->





<!-- Why Choose us start-->

<section class="why_us mt-5 pt-3 pb-4">
<div class="container ">
  <div class="row mb-4 pb-3"><h3 class="w-100 text-center"> <span class="atgserv_spn">Why Choose Us</span> </h3></div>
  <div class="row mt-5" style='padding:inherit;'>
   <div class="col-lg-6 p-3 d-lg-flex justify-content-lg-end">
      <div class="why_us_wrap mr-lg-5">
        <div class="row  mt-sm-2 mt-lg-2">
          <div class="why_icon"><i class="fa fa-check-square-o"></i></div>
          <div class="why_text">Quick turnaround</div>
        
        </div>
        <div class="row  mt-sm-2 mt-lg-4">
          <div class="why_icon"><i class="fa fa-check-square-o"></i></div>
          <div class="why_text">  In-house production</div>

        </div>
        <div class="row mt-sm-2 mt-lg-4">
          <div class="why_icon"><i class="fa fa-check-square-o"></i></div>
          <div class="why_text">  Bespoke to your requirements</div>

        </div>
     </div>
    </div>
    <div class="col-lg-6 p-3">
      <div class="why_us_wrap_right ml-lg-5 ml-sm-4">
        <div class="row  mt-2">
          <div class="why_icon"><i class="fa fa-check-square-o"></i></div>
          <div class="why_text">Extensive range of glass <br>  techniques</div>
        
        </div>
        <div class="row mt-2">
          <div class="why_icon"><i class="fa fa-check-square-o"></i></div>
          <div class="why_text">  Wide range of colours</div>
         
        </div>
        <div class="row mt-2">
          <div class="why_icon"><i class="fa fa-check-square-o"></i></div>
          <div class="why_text">    Wholesale and retail customer welcome</div>

     
        </div>
      </div>
    </div>
   
  </div>
</div>

</section>

<!-- Why Choose us end-->




  




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

 <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


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
    $('.items').slick({
    dots: true,
    infinite: true,
    speed: 800,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
    {
    breakpoint: 1024,
    settings: {
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    dots: true
    }
    },
    {
    breakpoint: 600,
    settings: {
    slidesToShow: 2,
    slidesToScroll: 2
    }
    },
    {
    breakpoint: 480,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1
    }
    }
    
    ]
    });
});
</script>


</body>
</html>