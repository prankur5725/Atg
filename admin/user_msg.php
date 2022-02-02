<?php  session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User Messages | ATG TUFF</title>
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
 
 
 if(!empty($_GET['id']))
 {
     $did = $_GET['id'];
     
     if(mysqli_query($con,"delete from contact where id='$did'"))
     {
     ?>
     <script>alert('Message Deleted successfully')</script>
     <script>window.location.replace("user_msg.php");</script>
     <?php
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
                                            <li><span class="bread-blod">User messages</span>
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
                                <li class="active"><a href="#description">User Message Information</a></li>
                              
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="product-status-wrap drp-lst">
                                                <h4>All User message List</h4>
                                                <!-- <div class="add-product">
                                                    <a href="add-department.html">Add Departments</a>
                                                </div> -->
                                                <div class="asset-inner">
                                                    <table>
                                                        <tr>
                                                            <th>S.No</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Contact</th>
                                                            <th>Message</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        
                                                        
                                                        <?php
                                                        
                                                            $q ="select * from contact";
                                                            
                                                            $run = mysqli_query($con,$q);
                                                            
                                                            if($run){
                                                                $counter = 1;
                                                                while($result = mysqli_fetch_assoc($run)){
                                                                    ?>
                                                                    
                                                                    
                                                                     <tr>
                                                                        <td><?= $counter ?></td>
                                                                        <td><?= $result['name'] ?></td>
                                                                        <td><?= $result['email'] ?></td>
                                                                        <td><?= $result['contact'] ?></td>
                                                                       <td><textarea><?= $result['message'] ?></textarea></td>
                                                                        <td>
                                                                            <a href="?id=<?= $result['id'] ?>">
                                                                            <button data-toggle="tooltip" title="Delete" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                    
                                                                    
                                                                    <?php
                                                                    $counter++;
                                                                }
                                                                
                                                                
                                                            }
                                                            else{
                                                                echo"<script>alert('fetch query error !');</script>";
                                                            }
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        ?>
                                                       
                                                       
                                                    </table>
                                                </div>
                                                <!--<div class="custom-pagination">-->
                                                <!--    <nav aria-label="Page navigation example">-->
                                                <!--        <ul class="pagination">-->
                                                <!--            <li class="page-item"><a class="page-link" href="#">Previous</a></li>-->
                                                <!--            <li class="page-item"><a class="page-link" href="#">1</a></li>-->
                                                <!--            <li class="page-item"><a class="page-link" href="#">2</a></li>-->
                                                <!--            <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                                                <!--            <li class="page-item"><a class="page-link" href="#">Next</a></li>-->
                                                <!--        </ul>-->
                                                <!--    </nav>-->
                                                <!--</div>-->
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