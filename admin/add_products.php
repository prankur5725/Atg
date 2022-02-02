<?php 
session_start();

include('include/connection.php');

extract($_POST);

if(isset($sub))
{
    
        $fn = $_FILES['att']['name'];
	    $tmp = $_FILES['att']['tmp_name'];
	    
	    $arr = explode('.',$fn);
	    $ext = strtolower(end($arr));
	    
	    
	    
	    $fn1 = $_FILES['att1']['name'];
	    $tmp1 = $_FILES['att1']['tmp_name'];
	    
	    $arr1 = explode('.',$fn1);
	    $ext1 = strtolower(end($arr1));
	    
	    if($ext == "jpg" || $ext == "jpeg" || $ext == "png")
	    {
	        
	          if($ext1 == "jpg" || $ext1 == "jpeg" || $ext1 == "png")
	         {
	             
        	        $fnn = rand().'.'.$ext;
        	        $fnn1 = rand().'.'.$ext1;
        	        
        	        if(mysqli_query($con,"insert into products (pname,pimage,pcontent,heading,pcontent1,image1) values('$pname','$fnn','$pcontent','$heading','$hcontent','$fnn1')"))
        	        {
        	              if(move_uploaded_file($tmp,"img/products_images/".$fnn) && move_uploaded_file($tmp1,"img/products_images/".$fnn1))
        	              {
        	                 echo "<script>alert('Product added successfully.')</script>";   
        	              }
        	              else
        	              {
        	                  echo "<script>alert('Product not uploaded in folder.')</script>";      
        	              }
        	        }
        	        else
        	        {
        	             echo "<script>alert('Product already exists.')</script>";
        	        }
	         }
	         else
	         {
	            echo "<script>alert('Only jpg,jpeg,png file allowed.')</script>";
	         }
	    }
	    else
	    {
	        echo "<script>alert('Only jpg,jpeg,png file allowed.')</script>";
	    }
	  
	    

}



?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Product | ATG TUFF </title>
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
  
  
 
?>
            
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Add Product</span>
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
                                <li class="active"><a href="#description">Products Information</a></li>
                                <!-- <li><a href="#reviews"> Account Information</a></li>
                                <li><a href="#INFORMATION">Social Information</a></li> -->
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="" method="post"  enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-5 col-sm-6 col-xs-12">
                                                                <div class="form-group col-lg-7">
                                                                    <label>Main image</label>
                                                                    <input name="att" type="file" class="form-control" required>
                                                                </div>
                                                                <div class="form-group col-lg-7">
                                                                    <input name="pname" type="text" class="form-control" placeholder="Product Name" required>
                                                                </div>
                                                                <div class="form-group col-lg-7">
                                                                    <textarea placeholder="Paragraph 1" name="pcontent" required></textarea>
                                                                </div>
                                                                <div class="form-group col-lg-7">
                                                                    <textarea placeholder="Heading" name="heading" required></textarea>
                                                                </div>
                                                                <div class="form-group col-lg-7">
                                                                    <textarea placeholder="Heading content" name="hcontent" required></textarea>
                                                                </div>
                                                                <div class="form-group col-lg-7">
                                                                    <label>inner image</label>
                                                                    <input name="att1" type="file" class="form-control" required>
                                                                </div>
                                                                <div class="form-group col-lg-12">
                                                                    <button type="submit" name="sub" class="btn btn-primary waves-effect waves-light">Add Product</button>
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