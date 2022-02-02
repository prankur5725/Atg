<?php
include('include/connection.php');

 if(!empty($_GET['id']) && !empty($_GET['name']))
    {
        $tid = $_GET['id'];
        $oimg = $_GET['name'];
    }
    
  if(mysqli_query($con,"delete from main_slider where id='$tid'"))
  {
      unlink("img/main_slider/".$oimg);
   ?>
   <script>window.location.replace("add-slider.php");</script>
   <?php
  }
  
  

?>