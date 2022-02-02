<?php 
session_start();

include('include/connection.php');

extract($_POST);

if(isset($sub))
{
    
        $fn = $_FILES['img']['name'];
	    $tmp = $_FILES['img']['tmp_name'];
	   
	    
	    $arr = explode('.',$fn);
	    $ext = strtolower(end($arr));
	    
	    if($ext == "jpg" || $ext == "jpeg" || $ext == "png")
	    {
	           
        	        $fnn = rand().'.'.$ext;
        	      
        	        
        	        if(mysqli_query($con,"insert into services (img,title,title_text,t_question,t_q_text,li_f,li_s,li_t,s_title,st_text,s_li_f,s_li_s,s_li_t) values('$fnn','$title','$title_text','$t_question','$t_q_text','$li_f','$li_s','$li_t','$s_title','$st_text','$s_li_f','$s_li_s','$s_li_t')"))
        	        {
        	              if(move_uploaded_file($tmp,"img/services_img/".$fnn) )
        	              {
        	                 echo "<script>alert('Service added successfully.')</script>";   
        	              }
        	              else
        	              {
        	                  echo "<script>alert('Service Image not uploaded in folder.')</script>";      
        	              }
        	        }
        	        else
        	        {
        	             echo "<script>alert('Service already exists.')</script>";
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
    <title>Add Service | ATG TUFF </title>
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
                                            <li><span class="bread-blod">Add Service</span>
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
                                <li class="active"><a href="#description">Service Information</a></li>
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
                                                                    <input name="img" type="file" class="form-control" required>
                                                                </div>
                                                                <div class="form-group col-lg-7">
                                                                    <input name="title" type="text" class="form-control" placeholder="Service Name" required>
                                                                </div>
                                                                <div class="form-group col-lg-7">
                                                                    <textarea placeholder="Content about Title" name="title_text" required></textarea>
                                                                </div>
                                                                <div class="form-group col-lg-7">
                                                                    <input placeholder="Question About Title" class="form-control" name="t_question" required>
                                                                </div>
                                                                <div class="form-group col-lg-7">
                                                                    <textarea placeholder="Text About Qustion" name="t_q_text" required></textarea>
                                                                </div>
                                                                
                                                                 <div class="form-group col-lg-7">
                                                                    <textarea placeholder="Top list item 1" name="li_f" ></textarea>
                                                                </div>
                                                                 <div class="form-group col-lg-7">
                                                                    <textarea placeholder="Top list item 2" name="li_s" ></textarea>
                                                                </div>
                                                                  <div class="form-group col-lg-7">
                                                                    <textarea placeholder="Top list item 3" name="li_t" ></textarea>
                                                                </div>
                                                                
                                                                  <div class="form-group col-lg-7">
                                                                    <input placeholder="Secondary Heading" class="form-control" name="s_title" required>
                                                                </div>
                                                                  <div class="form-group col-lg-7">
                                                                    <textarea placeholder="Secondary Heading Text" name="st_text" required></textarea>
                                                                </div>
                                                                  <div class="form-group col-lg-7">
                                                                    <textarea placeholder="Bottom list Item 1" name="s_li_f" ></textarea>
                                                                </div>
                                                                  <div class="form-group col-lg-7">
                                                                    <textarea placeholder="Bottom list Item 2" name="s_li_s" ></textarea>
                                                                </div>
                                                                  <div class="form-group col-lg-7">
                                                                    <textarea placeholder="Bottom list Item 3" name="s_li_t" ></textarea>
                                                                </div>
                                                                
                                                                <div class="form-group col-lg-12">
                                                                    <button type="submit" name="sub" class="btn btn-primary waves-effect waves-light">Add Service</button>
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