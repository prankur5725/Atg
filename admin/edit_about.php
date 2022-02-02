<?php  session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>About Page | ATG TUFF</title>
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
     $aid = $_GET['id'];
     $aimg = $_GET['img'];
     
     
 }
 
 
 extract($_POST);
 
 if(isset($add))
 {
     
     $fn = $_FILES['att']['name'];
     $tmp = $_FILES['att']['tmp_name'];
     
     
     if(empty($fn))
     {
          if(mysqli_query($con,"update about_page set about_us='$about',p1='$p1',li_1='$li1',li_2='$li2',li_3='$li3',p2='$p2',p3='$p3',p4='$p4' where id='$aid'"))
             {
            ?>
            <script>alert('Data updated successfully')</script>
            <script>window.location.replace("about_page.php");</script>
            <?php
             }
             else
             {
            ?>
            <script>alert("something wrong");</script>
            <?php
             }
     }
     else
     {
         $arr = explode('.',$fn);
         $ext = strtolower(end($arr));
         
         if($ext == "jpg" || $ext == "jpeg" || $ext == "png")
     {
         $fnn = rand().'.'.$ext;
         
         if(mysqli_query($con,"update about_page set image='$fnn',about_us='$about',p1='$p1',li_1='$li1',li_2='$li2',li_3='$li3',p2='$p2',p3='$p3',p4='$p4' where id='$aid'"))
             {
                 move_uploaded_file($tmp,"img/about_page/".$fnn);
                 unlink("img/about_page/".$aimg);
            ?>
            <script>alert('Data updated successfully')</script>
            <script>window.location.replace("about_page.php");</script>
            <?php
             }
             else
             {
            ?>
            <script>alert("something wrong");</script>
            <?php
             }
         
     }
     else
     {
    ?>
     <script>alert("Only jpg,jpeg or png file allowed.");</script>
    <?php
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
                                            <li><span class="bread-blod">Edit About Page</span>
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
                                <li class="active"><a href="#description">About Page Information</a></li>
                              
                            </ul>
                            <div style="margin-top:15px;">
                               <?php
                               
                               $q3 = mysqli_query($con,"select * from about_page where id='$aid'");
                               $r3 = mysqli_fetch_assoc($q3);
                               
                               ?>
                                <form action="" method="post" enctype="multipart/form-data">
                                     <h3 style="margin-bottom:15px;padding-left:20px;">Edit Content</h3>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="about" placeholder="About us" value="<?= $r3['about_us'] ?>" class="form-control " required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="p1" placeholder="Paragraph 1" value="<?= $r3['p1'] ?>" class="form-control " required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="li1" placeholder="list item 1" value="<?= $r3['li_1'] ?>" class="form-control " required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="li2" placeholder="list item 2" value="<?= $r3['li_2'] ?>" class="form-control " required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="li3" placeholder="list item 3" value="<?= $r3['li_3'] ?>" class="form-control " required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="p2" placeholder="Paragraph 2" value="<?= $r3['p2'] ?>" class="form-control " required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="p3" placeholder="Paragraph 3" value="<?= $r3['p3'] ?>" class="form-control " required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="p4" placeholder="Paragraph 4" value="<?= $r3['p4'] ?>" class="form-control " required>
                                    </div><br>
                                    <div class="form-group col-lg-5">
                                        <img src="img/about_page/<?= $r3['image'] ?>">
                                    </div>
                                    <div class="form-group col-lg-5">
                                        <input type="file" name="att" class="form-control ">
                                    </div>
                                    <div class="form-group col-lg-5">
                                            <button type="submit" name="add" class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div id="myTabContent" class="tab-content custom-product-edit">

                                <div class="container-fluid">
                                    
                                </div>
        
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php include 'include/footer.php' ?>