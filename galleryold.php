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


    <title>Gallery | | ATG TUFF</title>

    <style>

    #gallery{ 
       font-weight: bold;
       font-size: 27px;
       font-family: arial;
       font-variant: small-caps; 
       letter-spacing: 1px;

    }
    
    .col-sm-3{
      padding-top: 13px;
      position:relative !important;
    }
    .name{
      position: absolute;
      bottom:20px;
      right:14px;
      background:white;
      padding:5px;
      border-radius:5px;
    }
    .active{
      background: white;
    }
    .wrap {
  overflow-x: auto !important;
  overflow-y: hidden !important;
  display: -webkit-box  !important;
  display: -moz-box  !important;
  scroll-behavior: smooth;
  padding-left:20px;
 
}
.wrap::-webkit-scrollbar { 
    display: none; 
}
ul.nav{
  flex-wrap: nowrap;
}
.filter{
    text-align:center;
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
            <div class="col-sm-12" >
                <div class="location" style="padding-top: 30px;" >
                    <div>
                      <span id="gallery" class="text-info"><i class="far fa-images"></i>&nbsp;Gallery</span>                    
                    </div>
                    <div class="pos-r">
                    <div class="wrap ">
                        
                 <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item waves-effect waves-light ">
                      <a class="nav-link  buttonN" data-filter="all" id="home-tab"  style="color:black;">Home</a>
                    </li>
                    <li class="nav-item waves-effect waves-light ok">
                      <a class="nav-link buttonN" href=""  data-filter="project" style="color:black;">Projects</a>
                    </li>
                     <li class="nav-item waves-effect waves-light ok">
                      <a class="nav-link buttonN" href=""  data-filter="event" style="color:black;">Events</a>
                    </li>
                     <li class="nav-item waves-effect waves-light ok">
                      <a class="nav-link buttonN" href=""  data-filter="technology" style="color:black;">Our Technology</a>
                    </li>
                   
                  </ul>
            
              </div>
              
              </div>
              <div class="tab-content galleries content" id="myTabContent">
                <div class="tab-pane fade active show" id="home" role="tabpanel" >
                        <!-- <h3 style="padding-top:10px;padding-left:12px;">All Images</h3> -->
                        <div class="row pl-lg-4 pr-lg-4">
                        
                        <?php
                        $q = mysqli_query($con,"select * from events");
                        while($r = mysqli_fetch_assoc($q))
                        {
                       
                        $x = $r['event_image'];
                        $ex = explode(',',$x);
                        // print_r($ex);
                        for($i=0;$i<1;$i++){
                          ?>
                         
                        <div class="col-sm-3 filter <?= $r['event_key'] ?>">
                        <a href="expanded.php?id=<?= $r['id'] ?>">
                            <img src="../admin/img/events_images/<?= $ex[$i] ?>" height="200px" width="250px">
                            </a>
                         <div class="name"><h5 class="w-100 text-center m-0 p-0"><?= $r['event_name'] ?></h5></div> 
                        </div>
                       
                           <?php
                        }
                        ?>
                        
                        <?php
                        }
                        ?>
                        
                       
                        </div>
                 </div>
                
                
              </div>
      
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


<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>-->
<script>

   
        $(".buttonN").click(function(){
            var name = $(this).attr("data-filter");
            if(name == 'all'){
                $(".filter").show("2000");

            }
            else{
                $(".filter").not("."+name).hide("2000");
                $(".filter").filter("."+name).show("2000");
               

            }
        return false
        });
       
   
</script>
 <script>
   $('li').click(function(){
     $(this).addClass('active').siblings().removeClass('active');
   })
     
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