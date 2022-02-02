<?php
include('include/connection.php');

$sel3 = mysqli_query($con,"select * from about_page");

$row3 = mysqli_fetch_assoc($sel3);
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


    <title>About Us | | ATG TUFF</title>

    <style>
     .col-sm-12{
      padding-left: 0px;
      padding-right: 0px;
     }
     
     #txt{
        padding-top: 60px;
     }
     .bg{
       background:url('../admin/img/about_page/<?= $row3['image'] ?>');
     }
     #txt1{
        display:flex !important;
        justify-content: center !important;
        align-items:center !important;
     }
        
   @media only screen and (max-width:600px){

    img{
        max-width: 380px;
    }
    
    #txt1{
       align-items: flex-start !important;
       margin-bottom: 40px;
    }
    .navbar{
        min-width: 400px;
    }
    .right{
        left: 20px;
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
                <div class="cimg" style="padding-top: 0px;">
                    <img src="../admin/img/about_page/<?= $row3['image'] ?>" width="100%" height="370px;">
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row" id="txt">
                <div class="col-sm-12">
                   <h2 style="font-weight: bold;">About Us</h2>
                   <div>
                     <p style="letter-spacing: 1px;padding-bottom: 20px;padding-top: 20px;"><?= $row3['about_us'] ?></p>
                       
                   </div>
                </div>
                
                <div class="col-sm-6">
                    <img src="img/about1.jpg">
                </div>
                <div class="col-sm-6" >
                  <p style="letter-spacing: 1px;padding-top: 40px;"><?= $row3['p1'] ?></p>

                  <ul style="padding-left: 60px;">
                    <li><?= $row3['li_1'] ?></li>
                    <li><?= $row3['li_2'] ?></li>
                    <li><?= $row3['li_3'] ?></li>
                  </ul>
                </div>

                
        </div>
      </div>
        <div class="container-fluid mt-5 mb-3 pl-4">
          <div class="row bg" >
                <div class="col-sm-12 col-md-6 col-lg-6 pb-4 bg-light">
                    <div class="details-text" data-aos="fade-right" data-aos-duration="3000">
                        <h2><span>For more about ATG TUFF Glass:</span></h2>
                        <h3><b id="bol">Download our latest brochure</b></h3>
                        <p class="mb-4"style="margin-left: 10px;" >Find out more about ATG Glass </p>
                        <a href="./book/ATGTUFF_brouchure@2020_redesigned.pdf" id="btn1" download class="btn-custom mt-4" style="margin-left: 10px;"><i class="fa fa-file-pdf"></i>&nbsp; Download our Brochure</a>
                    </div>
                </div>     
          </div>
        </div>
        <div class="container">
        <div class="row" style="padding-top: 40px;">
          <div class="col-sm-12">
              <h2 style="font-weight: bold;font-size: 24px;padding-bottom: 15px;">Why choose ATG ?</h2>
          
              <p style="padding-bottom: 15px;"><?= $row3['p2'] ?></p>

              <p style="padding-bottom: 15px;"><?= $row3['p3'] ?></p>

              <p style="padding-bottom: 15px;"><?= $row3['p4'] ?></p>
          </div>
        </div>
      </div>
    </div>

    </section>

      <!-- Details section end -->

   

<?php

include('include/footer.php');

?>















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
});
</script>
</body>
</html>