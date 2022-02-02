<?php
include('include/connection.php');

extract($_POST);

if(isset($sub))
{
    
    $to = 'sales@atgglasses.in';

    $subject = 'Message From '.$name; 
    
    $headers = "From: " . strip_tags($email) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
     $message = 'Dear Admin,<br><b>'.ucwords($name).'</b> has sent a message. <br> Name: '.$name.' <br> Contact : '.$mobile.' <br> E-mail : '.$email.' <br> Message : '.$msg.' ';
    
    mail($to, $subject, $message, $headers);
    
    
    
    if(mysqli_query($con,"insert into contact (name,email,contact,message) values('$name','$email','$mobile','$msg')"))
    {
    ?>
    <script>alert('Message successfully sent.');</script>
    <?php
    }
    else
    {
    ?>
    <script>alert('Something wrong.');</script>
    <?php
    }
}



$sel = mysqli_query($con,"select * from contact_page");
$arr = mysqli_fetch_assoc($sel);



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

   
    <title>Contact Us | | ATG TUFF</title>

    <style>

     #txt{
        padding-top: 60px;
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
    <section class="details mt-5 mb-4">

    <div class="container">
        <div class="row">
            <div class="col-sm-12" data-aos="fade-right" data-aos-duration="3000">
                <div class="location" style="padding-top: 5px;" >
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2240.8647119570887!2d74.95997617868966!3d30.17319276523093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39172d317a37cddf%3A0x92112c6c3e6018f7!2sAggarwal%20Toughened%20%26%20safety%20glass!5e0!3m2!1sen!2sin!4v1586151605277!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
                </div>
            </div>
        </div>
        <div class="row" id="txt">
                <div class="col-sm-6">
                  <div>
                    <h3 style="font-weight: bold;padding-bottom: 10px;">CONTACT US</h3>
                  </div>
                  
                  <div>
                    <p><?= $arr['p1'] ?><p>
                  </div>

                  <!--<div>-->
                  <!--  <h5 style="font-weight: bold;padding-bottom: 10px;">Get Directions</h5>-->
                  <!--</div>-->

                  <div>
                    <p><?= $arr['p2'] ?></p>
                  </div>
                  
                  <!-- <div>-->
                  <!--  <h6 style="font-weight: bold;">Compony Number : <?= $arr['p3'] ?></h6>-->
                  <!--</div> -->

                  <div>
                    <p style="padding-top: 40px;"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;<?= $arr['p4'] ?></p>
                  </div>

                  <div style="padding-top: 15px;">
                    <p><i class="fas fa-envelope"></i>&nbsp;&nbsp;<?= $arr['p5'] ?></p>
                  </div>

                  <div style="padding-top: 25px;">
                    <p><i class="fas fa-phone"></i>&nbsp;&nbsp;<?= $arr['p6'] ?></p>
                  </div>

                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <form action="" method="post" id='contactForm'>
                      <div class="form-group">
                        <label for="name"><i class="fas fa-user"></i>&nbsp;Name:</label>
                        <input type="text" class="form-control" name="name" required>
                      </div>
                      <div class="form-group">
                        <label for="email"><i class="fas fa-envelope"></i>&nbsp;Email address:</label>
                        <input type="email" class="form-control" name="email" required>
                      </div>
                      <div class="form-group">
                        <label for="contact"><i class="fas fa-mobile"></i>&nbsp;Contact:</label>
                        <input type="number" class="form-control" name="mobile" required>
                      </div>
                      <div class="form-group">
                        <label for="pwd"><i class="fas fa-sticky-note"></i>&nbsp;Message:</label>
                        <textarea class="form-control" rows="5" name="msg" required></textarea>
                      </div>
                      <button type="submit" name="sub" class="btn btn-success">Submit</button>
                    </form>
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