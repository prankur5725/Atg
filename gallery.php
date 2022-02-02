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
    <link rel="stylesheet" href="./css/gallery.css">

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
    .slider_nav{
        width:100%;
        padding:0 10px;
        position:absolute;
        top:50%;
        left:0;
        display:flex;
        justify-content:space-between;
    }
    .name p{
        font-weight:550;
        font-size:18px;
    }
ul.nav{
  flex-wrap: nowrap;
}
.filter{
  text-align:center;
  /* position:relative !important; */
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
                    <!-- <div class="wrap "> -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist" style="overflow-x: scroll;">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="project-tab" data-toggle="tab" href="#project" role="tab" aria-controls="profile" aria-selected="false">Projects</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="events-tab" data-toggle="tab" href="#events" role="tab" aria-controls="events" aria-selected="false">Events</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="technology-tab" data-toggle="tab" href="#technology" role="tab" aria-controls="technology" aria-selected="false">Our Technology</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <section class="overflow-hidden position-relative">
                    		<!--<div class="container">-->
                    			<div class="bg__grub--slider p-3">
                    				<div class="row pt-5 pb-5 pl-4">
                    					<!--<div class="col-md-5 col-lg-4 pb-5 text-center text-md-left pb-md-0 my-auto">-->
                    					<!--	<h3 class="sans-bold mb-3">Projects/Events Intro. Slider</h3>-->
                    					<!--	<p>These are some recent Projects done by ATG tuff, here we also provide information</p>-->
                    
                    			
                    
                    					<!--</div>-->
                    					<div class="col-md-9 col-lg-10 my-auto">
                    
                                							<ul class="ul__list--inline slider__offset" id="ajax">
                    
                                              <?php
                    
                    
                                                  $query = "SELECT * FROM events";
                    
                                                  $result = mysqli_query($con,$query);
                                                  $data = "";
                                                  while($row = mysqli_fetch_assoc($result)){
                    
                                                      $x = $row['event_image'];
                                                      $ex = explode(',',$x);
                                                      // print_r($ex);
                                                      foreach($ex as $key=>$value){
                                                      ?>
                                                        <li class="pl-3 pr-3 images__slider no__outline ">
                                                          <img src="../admin/img/events_images/<?= $value ?>" alt="">
                                                        </li>
                                                      
                                                        <?php
                                                      }
                                                  }
                    
                                                 
                                                  ?>
                    							
                                              </ul>
                    
                    					</div>
                    				</div>
                    			</div>
                    				<div class="slider_nav slider__arrow">
            							<div class="arrow__left pointer mr-3 "><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            							<div class="arrow__right pointer"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
            						</div>
                    		<!--</div>-->
                    	</section>
                    </div>
                      <div class="tab-pane fade" id="project" role="tabpanel" aria-labelledby="project-tab"> <div class="row pl-lg-4 pr-lg-4">
                                            
                                            <?php
                                            $q = mysqli_query($con,"select * from events where event_key='project'");
                                            while($r = mysqli_fetch_assoc($q))
                                            {
                                           
                                            $x = $r['event_image'];
                                            $ex = explode(',',$x);
                                            // print_r($ex);
                                            for($i=0;$i<1;$i++){
                                              ?>
                                             
                                            <div class="col-sm-3 filter <?= $r['event_key'] ?>">
                                            <a href="expanded.php?id=<?= $r['id'] ?>">
                                                <img  src="../admin/img/events_images/<?= $ex[$i] ?>" height="200px" width="250px">
                                                </a>
                                             <div class="name"><p class=" m-0 pb-0"><?= $r['event_name'] ?></p></div> 
                                            </div>
                                           
                                               <?php
                                            }
                                            ?>
                                            
                                            <?php
                                            }
                                            ?>
                                            
                                           
                                            </div></div>
                      <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab"> <div class="row pl-lg-4 pr-lg-4">
                                            
                                            <?php
                                            $q = mysqli_query($con,"select * from events where event_key='event'");
                                            while($r = mysqli_fetch_assoc($q))
                                            {
                                           
                                            $x = $r['event_image'];
                                            $ex = explode(',',$x);
                                            // print_r($ex);
                                            for($i=0;$i<1;$i++){
                                              ?>
                                             
                                            <div class="col-sm-3 filter <?= $r['event_key'] ?>">
                                            <a href="expanded.php?id=<?= $r['id'] ?>">
                                                <img  src="../admin/img/events_images/<?= $ex[$i] ?>" height="200px" width="250px">
                                                </a>
                                             <div class="name"><p class="  m-0 pb-0"><?= $r['event_name'] ?></p></div> 
                                            </div>
                                           
                                               <?php
                                            }
                                            ?>
                                            
                                            <?php
                                            }
                                            ?>
                                            
                                           
                                            </div></div>
                      <div class="tab-pane fade" id="technology" role="tabpanel" aria-labelledby="technology-tab"> <div class="row pl-lg-4 pr-lg-4">
                                            
                                            <?php
                                            $q = mysqli_query($con,"select * from events where event_key='technology'");
                                            while($r = mysqli_fetch_assoc($q))
                                            {
                                           
                                            $x = $r['event_image'];
                                            $ex = explode(',',$x);
                                            // print_r($ex);
                                            for($i=0;$i<1;$i++){
                                              ?>
                                             
                                            <div class="col-sm-3 filter <?= $r['event_key'] ?>">
                                            <a href="expanded.php?id=<?= $r['id'] ?>">
                                                <img  src="../admin/img/events_images/<?= $ex[$i] ?>" height="200px" width="250px">
                                                </a>
                                             <div class="name"><p class=" m-0 pb-0"><?= $r['event_name'] ?></p></div> 
                                            </div>
                                           
                                               <?php
                                            }
                                            ?>
                                            
                                            <?php
                                            }
                                            ?>
                                            
                                           
                                            </div></div>
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
 <script src="./js/gallery.js"></script>

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