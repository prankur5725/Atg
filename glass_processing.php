<?php
include('include/connection.php');


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


    <title>Glass Processing | | ATG TUFF</title>

    <style>
     .col-sm-12{
      padding-left: 0px;
      padding-right: 0px;
     }
     
     #txt{
        padding-top: 60px;
     }
     .bg{
       background:url('img/process.jpg');
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
                    <img src="img/process.jpg" width="100%" height="370px;">
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row" id="txt">
                <div class="col-sm-12">
                   <h2 style="font-weight: bold;letter-spacing:4px;">GLASS PROCESSING</h2>
                   <div>
                     <p style="padding-bottom: 20px;font-weight:bold;">A leading glass processing company with a high level of technical expertise and industry know-how, ATG TUFF has the capacity to serve small requirements from domestic customers as well as bulk orders from the professional sector. With our top-of-the-range glass processing machinery providing us with multiple sheet size and width (4mm to 19mm glass) options, there really is no job too big or small for ATG TUFF.</p>
                     
                       
                   </div>
                </div>
                <div class="col-sm-12">
                   <h2 style="font-weight: bold;font-size: 24px;">Expert glass processing</h2>
                   <div>
                     <p style="padding-bottom: 20px;">All of our premium glass processing services are carried out in-house at our specially-built Bathinda plant using cutting-edge technology operated by the best team who we have nurtured as the business has grown. Eminent glass processing with a fast turnaround at its core, the ATG TUFF team specializes in:</p>
                     
                       
                   </div>
                </div>
                
                <div class="col-sm-12">
                    <div class="row">
                        <?php
                        $sel333 = mysqli_query($con,"select * from services");
                        while($row333 = mysqli_fetch_assoc($sel333))
                        {
                        ?>
                        <div class="col-sm-4 col-md-4 col-lg-4 mt-4">
                             <a href="service_details.php?id=<?= $row333['id'] ?>" style="color:black;text-decoration:none;" title="<?= $row333['title'] ?>">
                            <div class="atgserv">
                                <img src="../admin/img/services_img/<?= $row333['img'] ?>" alt="no img" height="200px" width="400px;">
                            </div>
                            <div style="margin-top:9px;">
                                <h5 style="text-transform:uppercase;font-weight:bold;">
                                    <?= $row333['title'] ?>
                                </h5>
                            </div>
                            </a>
                        </div>
                        <?php
                        }
                        ?>
                         
                        
                        
                    </div>
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
                        <a href="" id="btn1" class="btn-custom mt-4" style="margin-left: 10px;"><i class="fa fa-file-pdf"></i>&nbsp; Download our Brouchure</a>
                    </div>
                </div>     
          </div>
        </div>
        <div class="container">
        <div class="row" style="padding-top: 40px;">
          <div class="col-sm-12">
              <h2 style="font-weight: bold;font-size: 24px;">Eminent glass products</h2>
          

              <p style="padding-bottom: 15px;">Our glass processing experts can create batch quantity or individual one-off bespoke cut, shaped and colored pieces to suit your needs exactly. Consisting of carefully selected craftsmen, our team is far from run-of-the mill and are also adept at using the more traditional techniques and machinery to hand-cut glass products in whatever shape you require – intricacies and all.</p>

             
          </div>
          
                <div class="col-sm-12">
                   <h4 style="font-weight: bold;color: black;">Contact ATG and see the quality for yourself</h4>
                   <p>Let us know your requirements and our expert team will suggest the best glass services and glass product solutions to suit. They will also talk you though our custom glass cutting and glass edge polishing service options to complement your CLEAR toughened glass products.</p>
                   
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