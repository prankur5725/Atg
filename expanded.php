<?php
if(!empty($_GET['id'])){
    include('include/connection.php');
    $pe_id = $_GET['id'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./lib/css/bootstrap.min.css">
   
    <!-- nice-select css -->
    <link rel="stylesheet" href="./lib/css/nice-select.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="./lib/css/magnific-popup.css">
    <!-- Slick Slider CSS -->
 
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="./lib/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="./css/main.style.css">

    <link rel="stylesheet" href="./css/nav.css"> 

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Projects or events | | ATG TUFF</title>

    <style>

    #gallery{ 
       font-weight: bold;
       font-size: 27px;
       font-family: arial;
      

    }
    
    .col-sm-3{
      padding-top: 13px;
      position:relative !important;
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


         $q = mysqli_query($con,"select * from events where id=".$pe_id);
         $r = mysqli_fetch_assoc($q);
         ?>
        
        <!-- Nvabar end  -->

  
      <!-- Details section start -->
    <section class="details mt-5 mb-4">

    <div class="container">
        <div class="row">
            <div class="col-sm-12" >
                <div class="location" style="padding-top: 20px;" >
                      <?php
                        
                        if(empty($r['event_desc']))
                        {
                        ?>
                        <div class="container pt-4"> <div class="row">  <span id="gallery" class="text-info"><i class="far fa-images"></i>&nbsp;<label style="text-transform:uppercase;color:"><?= $r["event_name"] ?></label>&nbsp;images :</span>  </div>
                         </div>
                        <?php
                        }
                        else
                        {
                        ?>
                        <div>
                      <span id="gallery" class="text-info "><i class="fa fa-sliders-h"></i>&nbsp;<label style="text-transform:uppercase;color:"><?= $r["event_name"] ?></label>&nbsp;description :</span>  
                      <p class="mt-3 mb-3 ml-lg-5 mr-lg-5 ml-md-5 mr-md-5 pt-4"><b><?= $r['event_desc'] ?></b></p>                  
                    </div>
              
                   <div class="container pt-4"> <div class="row">  <span id="gallery" class="text-info"><i class="far fa-images"></i>&nbsp;<label style="text-transform:uppercase;color:"><?= $r["event_name"] ?></label>&nbsp;images :</span>  </div>
                   </div>
                        <?php
                        }
                        
                        ?>
                    
                      
                        <div class="row mt-5 pl-lg-5 pr-lg-5 galleries">
                      
                        <?php
                      
                        
                       
                        $x = $r['event_image'];
                        $ex = explode(',',$x);
                        // print_r($ex);
                        foreach($ex as $K=>$v){
                          ?>
                         
                        <div class="col-sm-3 d-flex justify-content-center align-items-center filter <?= $r['event_key'] ?> ">
                            <a href="../admin/img/events_images/<?= $v ?>" target="_blank">
                            <img src="../admin/img/events_images/<?= $v ?>" height="200px" width="250px">
                            </a>
                         
                        </div>
                       
                        
                        
                        <?php
                        }
                        ?>
                        
                       
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

<script>
  $(document).ready(function(){
    $('.galleries').magnificPopup({
       type : 'image',
       delegate : 'a',
       gallery : {
        enabled : true
       }
    })
  })
</script>
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
   $(document).on('click', 'ul li', function(){
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