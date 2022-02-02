<?php

include('include/connection.php');

include('PHPMailer/src/PHPMailer.php');

extract($_POST);

if(isset($sub))
{
    
    
    $fn = $_FILES['att']['name'];
    $tmp = $_FILES['att']['tmp_name'];
    
    $arr = explode('.',$fn);
    $ext = strtolower(end($arr));
    
    if($ext == "docx" || $ext == "doc" || $ext == "pdf")
    {
        $fnn = rand().'.'.$ext;
        
        if(mysqli_query($con,"insert into career (name,email,contact,resume,message) values ('$name','$email','$mobile','$fnn','$msg')"))
        {
            move_uploaded_file($tmp,"resume/".$fnn);
           
           
            $q ="select * from career order by id desc";
                                                            
            $run = mysqli_query($con,$q);
            $result = mysqli_fetch_assoc($run);
            
            ini_set('display_errors',1);
            error_reporting(E_ALL);
            
            $to = 'hr@atgglasses.in';
            
            // $to = 'hr@atgglasses.co.in';
            
            $subject = 'Career request from '.$name;
            
            $headers = "From: " . strip_tags($email) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            
             
             
             if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
                $url = "https";
            }else{
                $url = "http";
            }
                
            $url .= "://";
            
            $base_url=$url.$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?');
            
            $cv = $base_url. "resume/".$result["resume"] ;
            
            
            $link =  "<a href='".$cv."'>View</a>";
            
            
            $message = 'Dear Admin,<br><b>'.ucwords($name).'</b> has sent a career request. Name: '.$name.' <br> Contact : '.$mobile.' <br> E-mail : '.$email.' <br> Attachment : '.$link.' <br> Message : '.$msg.' ';
            
            // echo "<pre>"; print_r($message);
            //  echo "<pre>"; print_r($result);die;
             
             
            mail($to, $subject, $message, $headers);
                    
            
        ?>
        <script>alert('Resume Sent.')</script>
        <?php
        }
        else
        {
        ?>
        <script>alert('Something wrong.')</script>
        <?php
        }
    }
    else
    {
    ?>
       <script>alert('only docx,doc,pdf file allowed.')</script>
    <?php
    }
}

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


    <title>Career | | ATG TUFF</title>

    <style>
      .col-sm-12{
      padding-left: 0px;
      padding-right: 0px;
     }
     

     #txt{
        padding-top: 60px;
       
     }
     #txt1{
        display:flex !important;
        justify-content: center !important;
        align-items:center !important;
        flex-direction:column !important;
        
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
                <div class="cimg location" style="padding-top: 0px;">
                    <img class="zoom"  src="img/career.jpg" width="100%" height="370px;">
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row" id="txt">
                     
                <div class="col-sm-6" id="txt1" style="letter-spacing: 2px;">
                     <div class="row">
                         <h4 class="autoText" style="font-size: 20px; color: red;">Jobs available...</h4>
                     </div>
                   Aggarwal Toughened And Safety Glass is designed to offer all employees a 
                    working environment in which they can find professional and personal 
                    fulfillment,effectively combining performance and well-being. 
                     Employees are supported by four key priorities: Professional Mobility, Team
                    Diversity, Employee Commitment and Development of Talent.
                    <br>
                    Contact us at Hr@atgglasses.in || 7277700506
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <form action="" method="post" enctype="multipart/form-data">
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
                        <label for="file"><i class="fas fa-file"></i>&nbsp;Resume:</label>
                        <input type="file" class="form-control" name="att" required>
                      </div>
                      <div class="form-group">
                        <label for="msg"><i class="fas fa-sticky-note"></i>&nbsp;Message:</label>
                        <textarea class="form-control" cols="3" name="msg" required></textarea>
                      </div>
                      <button type="submit" name="sub" class="btn btn-success">Submit</button>
                    </form>
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
    //  $(document).ready(function(){
    //      var txt = 'Jobs available...'.split(''),
    //         $h1 = $('.autoText'),
    //         len = txt.length,
    //         delay = 200,
    //         i = 0;
        
    //     setInterval(function() {
    //         $h1.append(txt[i++]);
    //         if (i > len) {
    //             $h1.empty();
    //             i = 0;
    //         }
    //     }, delay);
    //  })
 </script>
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