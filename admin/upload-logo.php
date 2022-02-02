<?php 
session_start();

include('include/connection.php');

extract($_POST);

if(isset($sub))
{
        $logoData = mysqli_query($con,"select * from tbl_logo");
        $logoArr = mysqli_fetch_assoc($logoData);
        $oldFile = $logoArr['logo'];
        // echo "<pre>";print_r($logoArr['logo']);die;
        $fn = $_FILES['logo']['name'];
        $tmp = $_FILES['logo']['tmp_name'];
        $size = $_FILES['logo']['size'];
    
        $arr = explode('.',$fn);
        $ext = strtolower(end($arr));
        
        
        //   echo "<pre>";print_r($size);die;
        if($size <= 60000){
            if($ext == "jpg" || $ext == "jpeg" || $ext == "png"){
             
             $fnn = "logo".'.'.$ext;
             
             if(count($logoArr) > 0){
                 if(mysqli_query($con,"update tbl_logo set logo='$fnn'"))
        	        {
        	            unlink('img/logo/'.$oldFile);
        	              if(move_uploaded_file($tmp,"img/logo/".$fnn))
        	              {
        	                 
        	                 echo "<script>alert('Logo updated successfully.')</script>";   
        	              }
        	              else
        	              {
        	                  echo "<script>alert('Error while udating Logo.')</script>";      
        	              }
        	        }
             }else{
                 if(mysqli_query($con,"insert into tbl_logo (logo) values('$fnn')"))
        	        {
        	              if(move_uploaded_file($tmp,"img/logo/".$fnn))
        	              {
        	                 echo "<script>alert('Logo added successfully.')</script>";   
        	              }
        	              else
        	              {
        	                  echo "<script>alert('Error while udating Logo.')</script>";      
        	              }
        	        }
             }
             
             
            }else{
                echo "<script>alert('Only jpg,jpeg,png file allowed.')</script>";
            }    
        }else{
            echo "<script>alert('Logo size should be max 60 kb.')</script>";
        }
        
        
     
}
        

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Upload Logo | ATG TUFF</title>
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
                                            <li><span class="bread-blod">Logo</span>
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
                                <li class="active"><a href="#">Upload Logo</a></li>
                              
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="product-status-wrap drp-lst">
                                                
                                               <form action="" method="post"  enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-5 col-sm-6 col-xs-12">
                                                            <div class="form-group col-lg-4">
                                                                <input name="logo" type="file" class="form-control" required>
                                                            </div>
                                                            
                                                            <?php   
                                                            
                                                            $logoData1 = mysqli_query($con,"select * from tbl_logo");
                                                            $logoArr1 = mysqli_fetch_assoc($logoData1);
                                                            
                                                            // print_r($logoArr1);die;
                                                            
                                                            if(!empty($logoArr1['logo'])){
                                                                ?>
                                                                
                                                                <div class="form-group col-lg-12">
                                                                    <img src='img/logo/<?= $logoArr1['logo'] ?>' />
                                                                </div>
                                                                
                                                                <?php
                                                            }
                                                            ?>
                                                            
                                                            
                                                            <div class="form-group col-lg-12">
                                                                <button type="submit" name="sub" class="btn btn-primary waves-effect waves-light">Upload</button>
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
      <?php include 'include/footer.php' ?>