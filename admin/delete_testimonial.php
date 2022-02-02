<?php
include('include/connection.php');

 if(!empty($_GET['id']))
    {
        $tid = $_GET['id'];
    }
    
  if(mysqli_query($con,"delete from testimonials where id='$tid'"))
  {
   ?>
   <script>window.location.replace("testimonial_slider.php");</script>
   <?php
  }
  
  

?>