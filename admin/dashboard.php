<?php   
  
    session_start();
  
    if(empty($_SESSION['email']))
    {
        header('location:index.php');
    }
   
    include 'include/header.php' ;
    include 'include/sidebar.php';
    include 'include/navbar.php';
    include 'include/mobile-menu.php';
    include 'include/connection.php';
    
    
    
   
?>
  
            
           <div>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
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
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
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
        <div class="analytics-sparkle-area" style="margin-bottom:250px;">
            <div class="container-fluid">
                <div class="row">
                    <a href="all_products.php">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Total Products :</h5>
                                <hr>
                                <h2><span class="counter text-success">
                                    <?php
                                    
                                    $sel6 = mysqli_query($con,"select COUNT(id) as total from products");
                                    $arr = mysqli_fetch_assoc($sel6);
                                    echo $arr['total'];
                                    
                                    ?>
                                </span></h2>
                                
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="all_services.php">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Total Services :</h5>
                                <hr>
                                <h2><span class="counter text-warning">
                                    <?php
                                    
                                    $sel11 = mysqli_query($con,"select COUNT(id) as total from services");
                                    $arr11 = mysqli_fetch_assoc($sel11);
                                    echo $arr11['total'];
                                    
                                    ?>
                                </span></h2>
                                
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="user_msg.php">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                       <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Total User Messages :</h5>
                                <hr>
                                <h2><span class="counter text-info">
                                    <?php
                                    
                                    $sel1 = mysqli_query($con,"select COUNT(id) as total from contact");
                                    $arr1 = mysqli_fetch_assoc($sel1);
                                    echo $arr1['total'];
                                    
                                    ?>
                                </span></h2>
                                
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="career_req.php">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                       <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Total Career Requests :</h5>
                                <hr>
                                <h2><span class="counter text-danger">
                                    <?php
                                    
                                    $sel2 = mysqli_query($con,"select COUNT(id) as total from career");
                                    $arr2 = mysqli_fetch_assoc($sel2);
                                    echo $arr2['total'];
                                    
                                    ?>
                                </span></h2>
                                
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        
        
       <?php include 'include/footer.php' ?>