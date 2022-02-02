<?php

include('connection.php');

?>
<style>
      .navbar{
        background: white;
      }
      /*#mainTitle span{*/
      /*   background-color:red !important;*/
      /*}*/
    
  </style>

<!-- <section class="main_nav"> -->
          <nav class="navbar navbar-expand-lg navbar-light pt-0 pb-0" id="mainnav1" >
            <ul class="navbar-nav" id="nav1">
               <li class="nav-item" id="space"><a href="https://www.facebook.com/atgtuff/" title="Facebook" class="nav-link"><i class="fa fa-facebook"></i></a></li>
                <li class="nav-item" id="space"><a href="https://twitter.com/atgtuff1" title="Twitter" class="nav-link"><i class="fa fa-twitter"></i></a></li>
                <li class="nav-item" id="space"><a href="https://www.instagram.com/atg_tuff/" title="Instagram" class="nav-link"><i class="fa fa-instagram"></i></a></li>
                <!-- <li class="nav-item" id="space"><a href="#" class="nav-link"><i class="fa fa-pinterest-p"></i></a></li> -->
                <li class="nav-item mail-sm" id="space"><a href="mailto:sales@atgglasses.in" class="nav-link"><i class="fa fa-envelope"></i></a></li>
                <li class="nav-item " id="space"><a href="mailto:sales@atgglasses.in" id="right" class="nav-link"><i class="fa fa-envelope" style="padding-left:135px;">&nbsp;sales@atgglasses.in</i></a></li>
            </ul>
          </nav>
     <hr style="margin:0px 0px 0px 0px;">
      <nav class="navbar navbar-expand-lg navbar-light" id="mainnav">
          
           <?php
                  
              $data = mysqli_query($con,"select * from tbl_logo");
              while($row = mysqli_fetch_assoc($data))
              {
              ?>
                 <a class="navbar-brand" href="index"><img src="../admin/img/logo/<?= $row['logo'] ?>" height="70px;"> 
                     <span id="a">&nbsp;AGGARWAL TOUGHENED</span>
                     <span id="b">&nbsp;AND SAFETY GLASS</span>
                     <span id="c"><img src="/img/isi.svg" height="30px;">  BIS 2553: PART 1:2018 & ISO 9001:2015 CERTIFIED</span>
                 </a>
              <?php
              }
              
              ?>
          
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-5" id="nav">
            <li class="nav-item" id="li">
              <a class="nav-link" href="index">HOME </a>
            </li>
            <li class="nav-item dropdown"> 
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ABOUT
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="about">About Us</a>
                <a class="dropdown-item" href="gallery">Gallery</a>
                
                <!-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->
              </div>
            </li>
            <!--<li class="nav-item" id="li" >-->
            <!--  <a class="nav-link" href="#"></a>-->
            <!--</li>-->
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PRODUCTS
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php
                  
                  $sel = mysqli_query($con,"select * from products");
                  while($row = mysqli_fetch_assoc($sel))
                  {
                  ?>
                    <a class="dropdown-item" href="product_details.php?id=<?= $row['id'] ?>"><?= $row['pname'] ?></a>
                  <?php
                  }
                  
                  ?>
                
              
                <!-- <a class="dropdown-item" href="#"></a>  -->
               
              </div>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                GLASS PROCESSING
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!--<a class="dropdown-item" href="toughend_glass">Toughened Glass</a>-->
                 <?php
                  
                  $serv1 = mysqli_query($con,"select * from services");
                  while($serv_row1 = mysqli_fetch_assoc($serv1))
                  {
                  ?>
                    <a class="dropdown-item" href="service_details.php?id=<?= $serv_row1['id'] ?>"><?= $serv_row1['title'] ?></a>
                  <?php
                  }
                  
                  ?>
            
               
              </div>
            </li>
          
            <li class="nav-item" id="li" >
              <a class="nav-link" href="career">CAREER</a>
            </li>
            <li class="nav-item" id="li" >
              <a class="nav-link" href="brouchure">BROCHURE</a>
            </li>
            
            <li class="nav-item" id="li" >
              <a class="nav-link" href="contact">CONTACT</a>
            </li>
            
          </ul>

        
        </div>
      </nav>
      <!-- </section> -->