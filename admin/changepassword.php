<?php   
session_start();

    include 'include/connection.php' ;
  
    include 'include/header.php' ;
    include 'include/sidebar.php';
    include 'include/navbar.php';
    include 'include/mobile-menu.php';
    
    
    extract($_POST);
    
    if(isset($change))
    {
        if($np == $cp)
        {
            $sq = mysqli_query($con,"select * from admin where email='".$_SESSION['email']."'");
            $arr = mysqli_fetch_assoc($sq);
            
             if ($op == $arr['password']) {
            // $np = $np;
            $sel = mysqli_query($con,"update admin set password='$np' where email='".$_SESSION['email']."'");
            $msg = "password changd sucessfully";
            
            }
            else {
            $msg = "old password incorrect";
            
            
            }
        }
        else
        {
            $msg = "new password and confirm password is incorrect";
        }
    }
    
    
   
?>
            

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
                                            <li><span class="bread-blod">Change Password</span>
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
        
        <div class="product-sales-area ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject"><b style="font-size:20px;letter-spacing:1px;">Change Password</b></span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-6" style="padding-top:15px;">
                                
                                <?php
                                if(!empty($msg))
                                {
                                ?>
                                 <script>alert('<?= $msg ?>');</script>
                                <?php
                                }
                                ?>
                               
                                <form method="post" id="myform" action >
                                  <div class="form-group">
                                    <label for="old password">Old Password</label>
                                    <input type="password" name="op" class="form-control">
                                  </div>
                                  <div class="form=group">
                                    <label for="new password">New Password</label>
                                    <input type="password" name="np" class="form-control" >
                                  </div><br>
                                  <div class="form=group">
                                    <label for="confirm password">Confirm Password</label>
                                    <input type="password" name="cp" class="form-control" >
                                  </div><br>
                                  <div class="form-group">
                                    <button type="submit" name="change" class="btn btn-primary" >submit</button>
                                  </div>
                                </form>
                            </div>
                            <div id="extra-area-chart" style="height: 340px;"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        
       <?php include 'include/footer.php' ?>
       
       