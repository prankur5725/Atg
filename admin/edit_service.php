<?php  session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Edit Service | ATG TUFF</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ --> 
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css"> 
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS 
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<?php   
  
 
 
  if(empty($_SESSION['email']))
  {
      header('location:index.php');
  }
 
//   include 'include/header.php' ;
  include 'include/sidebar.php';
  include 'include/navbar.php';
  include 'include/mobile-menu.php';
  include 'include/connection.php';
 
 if(!empty($_GET['id']) && !empty($_GET['img']))
    {
        $tid = $_GET['id'];
        $img = $_GET['img'];
       
    }
  
 extract($_POST);
 
 if(isset($edit))
 {
     $fn = $_FILES['att']['name'];
     $tmp = $_FILES['att']['tmp_name'];
     
     
     
     if(empty($fn))
     {
         
         if(mysqli_query($con,"update services set title='$title', title_text='$title_text',t_question='$t_question',t_q_text='$t_q_text',li_f='$li_f',li_s='$li_s',li_t='$li_t',s_title='$s_title',st_text='$st_text',s_li_f='$s_li_f',s_li_s='$s_li_s',s_li_t='$s_li_t' where id='$tid' " ))
         {
             echo "<script>alert('Service updated successfully.')</script>";
         ?>
         <script>window.location.replace("all_services.php");</script>
         <?php
         }
         else
         {
             echo "<script>alert('Something Wrong.')</script>";
         }
     }
     else
     {
         $arr = explode('.',$fn);
	    $ext = strtolower(end($arr));
	    
	    
	    
	    if($ext == "jpg" || $ext == "jpeg" || $ext == "png")
	    {
            	        
        	        $fnn = rand().'.'.$ext;
        	        
        	        
        	        if(mysqli_query($con,"update services set img='$fnn',title='$title', title_text='$title_text',t_question='$t_question',t_q_text='$t_q_text',li_f='$li_f',li_s='$li_s',li_t='$li_t',s_title='$s_title',st_text='$st_text',s_li_f='$s_li_f',s_li_s='$s_li_s',s_li_t='$s_li_t' where id='$tid' "))
        	        {
        	              if(move_uploaded_file($tmp,"img/services_img/".$fnn))
        	              {
        	                  unlink("img/services_img/".$img);
        	                 echo "<script>alert('Service updated successfully.')</script>";   
        	              ?>
        	              <script>window.location.replace("all_services.php");</script>
        	              <?php
        	              }
        	              else
        	              {
        	                  echo "<script>alert('Service not uploaded in folder.')</script>";      
        	              }
        	        }
	        
	         
	    }
	    else
	    {
	        echo "<script>alert('Only jpg,jpeg,png file allowed.')</script>";
	    }
	  
	    
     }

    
 }
  

 
?>
            
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <!--<div class="breadcome-heading">-->
                                        <!--    <form role="search" class="sr-input-func">-->
                                        <!--        <input type="text" placeholder="Search..." class="search-int form-control">-->
                                        <!--        <a href="#"><i class="fa fa-search"></i></a>-->
                                        <!--    </form>-->
                                        <!--</div>-->
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="index.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Edit Service</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Edit Service</a></li>
                              
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <?php
                                                    
                                                    $sel = mysqli_query($con,"select * from services where id='$tid'");
                                                    $arr = mysqli_fetch_assoc($sel);
                                                    ?>
                                                    <form action="" method="post"  enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                                               <div class="form-group">
                                                                    <input type="text" placeholder="Name" name="title" value="<?= $arr['title'] ?>" class="form-control">
                                                                </div>
                                                               <div class="form-group">
                                                                    <textarea name="title_text" placeholder="Title Content"  class="form-control" rows="1" ><?= $arr['title_text'] ?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <img src="img/services_img/<?= $arr['img'] ?>" height="200px" width="200px">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="file" name="att" >
                                                                </div>
                                                                <div class="form-group">
                                                                   <input type="text" placeholder="Question" name="t_question" value="<?= $arr['t_question'] ?>" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="t_q_text" placeholder="About question text"  class="form-control" rows="1" ><?= $arr['t_q_text'] ?></textarea>
                                                                </div>
                                                                 <div class="form-group">
                                                                    <textarea name="li_f" placeholder="list item 1"  class="form-control" rows="1" ><?= $arr['li_f'] ?></textarea>
                                                                </div> 
                                                                <div class="form-group">
                                                                    <textarea name="li_s" placeholder="list item 2"  class="form-control" rows="1" ><?= $arr['li_s'] ?></textarea>
                                                                </div>
                                                                  <div class="form-group">
                                                                    <textarea name="li_t" placeholder="list item 3"  class="form-control" rows="1" ><?= $arr['li_t'] ?></textarea>
                                                                </div>
                                                                 <div class="form-group">
                                                                   <input type="text" placeholder="Secondary Title" name="s_title" value="<?= $arr['s_title'] ?>" class="form-control">
                                                                </div>
                                                                   <div class="form-group">
                                                                    <textarea name="st_text" placeholder="Secondary title text"  class="form-control" rows="1" ><?= $arr['st_text'] ?></textarea>
                                                                </div>
                                                                   <div class="form-group">
                                                                    <textarea name="s_li_f" placeholder="Bottom list item 1"  class="form-control" rows="1" ><?= $arr['s_li_f'] ?></textarea>
                                                                </div>
                                                                   <div class="form-group">
                                                                    <textarea name="s_li_s" placeholder="Bottom list item 2"  class="form-control" rows="1" ><?= $arr['s_li_s'] ?></textarea>
                                                                </div>
                                                                   <div class="form-group">
                                                                    <textarea name="s_li_t" placeholder="Bottom list item 3"  class="form-control" rows="1" ><?= $arr['s_li_t'] ?></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <button name="edit" type="submit" class="btn btn-primary waves-effect waves-light">Edit Service</button>
                                                                </div>
                                                               
                                                            
                                                            </div>
                                                           
                                                        </div>
                                                       
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
              
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php include 'include/footer.php' ?>