<?php  session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>All Services | ATG TUFF</title>
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
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="index.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">All Services</span>
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
                        <div class="product-status-wrap drp-lst">
                            <h4>All Services List</h4>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Service Image</th>
                                        <th>Service name</th>
                                        <th>Service Main Text</th>
                                        <th>Service Question Title</th>
                                        <th>Service Question Text</th>
                                        <th>Top List Item 1</th>
                                        <th>Top List Item 2</th>
                                        <th>Top List Item 3</th>
                                        <th>Secondary Title</th>
                                        <th>Secondary Title Text</th>
                                        <th>Secondary List Item 1</th>
                                        <th>Secondary List Item 2</th>
                                        <th>Secondary List Item 3</th>
                                        <th>Action</th>
                                    </tr>
                                    
                                    
                                    <?php
                                    
                                        $q ="select * from services";
                                        
                                        $run = mysqli_query($con,$q);
                                        
                                        if($run){
                                            $counter = 1;
                                            while($result = mysqli_fetch_assoc($run)){
                                                ?>
                                                
                                                
                                                 <tr>
                                                    <td><?= $counter ?></td>
                                                    <td><img src="img/services_img/<?= $result['img'] ?>" height="40px" width="40px" ></td>
                                                    <td><?= $result['title'] ?></td>
                                                    <td><textarea cols="40" rows="3"><?= $result['title_text'] ?></textarea></td>
                                                    <td><textarea cols="40" rows="3"><?= $result['t_question'] ?></textarea></td>
                                                    <td><textarea cols="40" rows="3"><?= $result['t_q_text'] ?></textarea></td>
                                                    <td><textarea cols="40" rows="3"><?= $result['li_f'] ?></textarea></td>
                                                    <td><textarea cols="40" rows="3"><?= $result['li_s'] ?></textarea></td>
                                                    <td><textarea cols="40" rows="3"><?= $result['li_t'] ?></textarea></td>
                                                    <td><textarea cols="40" rows="3"><?= $result['s_title'] ?></textarea></td>
                                                    <td><textarea cols="40" rows="3"><?= $result['st_text'] ?></textarea></td>
                                                    <td><textarea cols="40" rows="3"><?= $result['s_li_f'] ?></textarea></td>
                                                    <td><textarea cols="40" rows="3"><?= $result['s_li_s'] ?></textarea></td>
                                                    <td><textarea cols="40" rows="3"><?= $result['s_li_t'] ?></textarea></td>
                                                   
                                                    
                                                    <td>
                                                        <a href="edit_service.php?id=<?= $result['id'] ?>&&img=<?= $result['img'] ?>"><button data-toggle="tooltip" type="submit" title="Edit Product" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                                        
                                                        <a href="delete_service.php?id=<?= $result['id'] ?>&&img=<?= $result['img'] ?>"><button data-toggle="tooltip" title="Delete product" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
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
        </div>
      <?php include 'include/footer.php' ?>