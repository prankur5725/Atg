<?php 
session_start();

include('include/connection.php');

extract($_POST);

if(isset($sub))
{
    $file = '';
    $tmp = '';
    $data = '';
    
    foreach($_FILES['att']['name'] as $key=>$val)
    {
        $file = $_FILES['att']['name'][$key];
	    $tmp = $_FILES['att']['tmp_name'][$key];
	    move_uploaded_file($tmp,"img/events_images/".$file);
	    $data .=$file.",";
	  
	   
    }
    $arr = explode(',', $data);
    
    $data = array_pop($arr);
    
    $arr1 = implode(',', $arr);
    
    $data1 = $arr1;
	  
	if (mysqli_query($con,"insert into events (event_name,event_image,event_key,event_desc) values('$ename','$data1','$event_key','$event_desc')"))
	    {
	        
		  echo "<script>alert('Event added successfully')</script>";   
		}
		else
		{
		    echo "<script>alert('Something wrong..')</script>";   
		}
	


}
if(!empty($_GET['id'])){
    $query = mysqli_query($con,"Select * from events where id='".$_GET['id']."'");
   
    $row = mysqli_fetch_assoc($query);
    
    
    $f_img = $row['event_image'];
    $list = explode(',',$f_img);
    foreach($list as $Key=>$s_img)
    {
      unlink("img/events_images/".$s_img);
         
    }
    $delete=mysqli_query($con,"DELETE FROM events WHERE id='".$_GET['id']."'");
    if($delete){
        echo"<script>var con=confirm('Event has been deleted successfully'); if(con){ window.location.href='add-event.php';}
        else{window.location.href='add-event.php'}</script>";
    }
    
}


?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Events</title>
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
                                            <!--<form role="search" class="sr-input-func">-->
                                            <!--    <input type="text" placeholder="Search..." class="search-int form-control">-->
                                            <!--    <a href="#"><i class="fa fa-search"></i></a>-->
                                            <!--</form>-->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Manage Events</span>
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
                                <li class="active"><a href="#description">Event Information</a></li>
                               
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="" method="post"  enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="ename" type="text" class="form-control" placeholder="Event Name" required>
                                                                </div>
                                                            
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                    <input name="att[]" type="file" class="form-control" multiple required>
                                                                </div>
                                                            
                                                            </div>
                                                             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                    <select name="event_key"  class="form-control" required>
                                                                       <option disabled selected>Select Type </option>
                                                                       <option value="event">Event</option>
                                                                       <option value="project">Project</option>
                                                                       <option value="technology">Our Technology</option>
                                                                    </select>
                                                                </div>
                                                            
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-6 col-xs-12">
                                                                <textarea class="form-control" placeholder="Description" name="event_desc"></textarea>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <div class="payment-adress">
                                                                    <button type="submit" name="sub" class="btn btn-primary waves-effect waves-light">Add Event/Project</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-status mg-b-15 mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Events List</h4>
                            <!-- <div class="add-product">
                                <a href="add-department.html">Add Departments</a>
                            </div> -->
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Event Name</th>
                                        <th>Type</th>
                                        <th>Event Images</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                    
                                    $q = mysqli_query($con,"select * from events");
                                    $sn =1;
                                    
                                    while($r = mysqli_fetch_assoc($q))
                                    {
                                    ?>
                                     <tr>
                                        <td><?= $sn; ?></td>
                                        <td><?= $r['event_name'] ?></td>
                                        <td style="  text-transform: capitalize;"><?= $r['event_key'] ?></td>
                                         <td style=""> 
                                        <?php  
                                         $x = $r['event_image'];
                                        $ex = explode(',',$x);
                                        foreach($ex as $K=>$v)
                                        {
                                            ?>
                        
                                               <div style="height:40px;width:40px; display:inline-block; margin-right:15px;">
                                               
                                                    <img src="img/events_images/<?= $v ?>" class="img-fluid">
                                                
                                                </div>
                                       <?php
                                        }
                                         ?> </td>
                                       
                                           
                                            
                                           <td style="overflow:hidden; width:120px;">
                                            <?= $r['event_desc'] ?>
                                           </td>
                                        <td>
                                            <a  href="edit-event.php?id=<?= $r['id'] ?>"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                           <a  href="add-event.php?id=<?= $r['id'] ?>"> <button data-toggle="tooltip" name="remove"  title="Remove Event" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                        </td>
                                    </tr>
                                    <?php
                                    $sn++;
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
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <form id="acount-infor" action="#" class="acount-infor">
                                                            <div class="devit-card-custom">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="phoneno" type="number" class="form-control" placeholder="Phone">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="confarmpassword" type="password" class="form-control" placeholder="Confirm Password">
                                                                </div>
                                                                <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
												<div class="row">
													<div class="col-lg-12">
														<div class="devit-card-custom">
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Facebook URL">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Twitter URL">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Google Plus">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Linkedin URL">
															</div>
															<button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
            </div>
        </div>
      <?php include 'include/footer.php' ?>