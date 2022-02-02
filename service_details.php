<?php
if(!empty($_GET['id'])){
    include 'include/connection.php';
    $serv_id = $_GET['id'];
}
    $serv_q=mysqli_query($con,"SELECT * FROM services WHERE id='".$serv_id."'");
    $serv_row= mysqli_fetch_assoc($serv_q);
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


    <title>Glass Sandblasting | | ATG TUFF</title>

    <style>

     #txt{
        padding-top: 45px;
        display:flex !important;
        justify-content: center !important;
        align-items:center !important;
     
     }
     .col-sm-12{
      padding-left: 0px;
      padding-right: 0px;
     }
     #img1{
       display:flex !important;
        justify-content: center !important;
        align-items:center !important;
        padding-top: 15px;
     }
     .bg{
       background:url('../admin/img/services_img/<?= $serv_row['img'] ?>');
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
                    <img class="zoom"  src="../admin/img/services_img/<?= $serv_row['img'] ?>" width="100%" height="370px;">
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row" id="txt">
                <div class="col-sm-12">
                    <h2 style="letter-spacing: 3px;font-weight: bold;color: black;text-transform:uppercase;"><?= $serv_row['title'] ?></h2>
                    <p style="font-weight: bold;"><?= $serv_row['title_text'] ?></p> 
                    
                </div>
        </div>
        <div class="row" id="txt">
                <div class="col-sm-12">
                    <h4 style="font-weight: bold;"><?= $serv_row['t_question'] ?></h4>
                    <p><?= $serv_row['t_q_text'] ?></p> 
                    <!--<p>Sandblasting is desirable for two reasons:</p>-->
                    <?php 
                     $f_li = $serv_row['li_f'];
                     $s_li = $serv_row['li_s'];
                     $t_li = $serv_row['li_t'];
                     
                     if($f_li != NULL && $s_li == NULL){
                         echo'
                            <ol style="padding-left: 30px;">
                             <li>'.$f_li.'</li>
                     
                            </ol>
                         
                         ';
                     }
                        if($f_li != NULL && $s_li != NULL && $t_li == NULL){
                         echo'
                            <ol style="padding-left: 30px;">
                             <li>'.$f_li.'</li>
                             <li>'.$s_li.'</li>
                     
                            </ol>
                         
                         ';
                     }
                        if($f_li != NULL && $s_li != NULL && $t_li != NULL){
                         echo'
                            <ol style="padding-left: 30px;">
                             <li>'.$f_li.'</li>
                             <li>'.$s_li.'</li>
                             <li>'.$t_li.'</li>
                     
                            </ol>
                         
                         ';
                     }
                    
                    ?>
                    
                    
                    <!--<ol style="padding-left: 30px;">-->
                    <!--  <li><?= $serv_row['li_f'] ?></li>-->
                    <!--  <li><?= $serv_row['li_s'] ?></li>-->
                    <!--  <li><?= $serv_row['li_t'] ?></li>-->
                    <!--</ol>-->
                    
                    
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
                        <a href="./book/ATGTUFF_brouchure@2020_redesigned.pdf" download id="btn1" class="btn-custom mt-4" style="margin-left: 10px;"><i class="fa fa-file-pdf"></i>&nbsp; Download our Brochure</a>
                    </div>
                </div>     
          </div>
        </div>
        <div class="container">
        <div class="row" id="txt">
                <div class="col-sm-12">
                   <h4 style="font-weight: bold;"><?= $serv_row['s_title'] ?></h4>
                   <p><?= $serv_row['st_text'] ?></p>
                   
                  <!--<p>“Block Print”, where the middle third of the glass is sandblasted leaving the top and bottom thirds of the glass clear, is often favoured for shower screens and partitions. Our <a href="about.php">glass processing experts</a> can mask the glass to create patterns such as stripes, lettering or designs supplied by you for something unique. We also have a selection of standard border designs to choose from should you need some inspiration.</p>-->
                  <!--<p>A RITEC ClearShield coating can be applied to most of our glass products, which is especially effective on sandblasted glass and frosted glass doors. ClearShield is a non-stick system that stops the build-up of dirty finger marks, watermarks and lime scale so your glass stays pristine.</p>-->
                   <?php 
                     $s_f_li = $serv_row['s_li_f'];
                     $s_s_li = $serv_row['s_li_s'];
                     $s_t_li = $serv_row['s_li_t'];
                     
                     if($s_f_li != NULL && $s_s_li == NULL){
                         echo'
                            <ol style="padding-left: 30px;">
                             <li>'.$s_f_li.'</li>
                     
                            </ol>
                         
                         ';
                     }
                        if($s_f_li != NULL && $s_s_li != NULL && $s_t_li == NULL){
                         echo'
                            <ol style="padding-left: 30px;">
                             <li>'.$s_f_li.'</li>
                             <li>'.$s_s_li.'</li>
                     
                            </ol>
                         
                         ';
                     }
                        if($s_f_li != NULL && $s_s_li != NULL && $s_t_li != NULL){
                         echo'
                            <ol style="padding-left: 30px;">
                             <li>'.$s_f_li.'</li>
                             <li>'.$s_s_li.'</li>
                             <li>'.$s_t_li.'</li>
                     
                            </ol>
                         
                         ';
                     }
                    
                    ?>
                </div>
        </div>
        
        <div class="row" id="txt">
                <div class="col-sm-12">
                    <h4 style="font-weight: bold;">Contact ATG TUFF and see the quality for yourself</h4>
                   <p>Whether you are an interior designer, developer or builder looking for glass products that meet the highest standards of quality and safety, look no further than ATG TUFF. <a href="contact.php">Contact us</a> for further information on our sandblasting and glass etching services.</p>
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
});
</script>
</body>
</html>