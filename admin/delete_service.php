<?php
include('include/connection.php');

 if(!empty($_GET['id']) && !empty($_GET['img']))
    {
        $tid = $_GET['id'];
        $img = $_GET['img'];
     
    }
    
  if(mysqli_query($con,"delete from services where id='$tid'"))
  {
      unlink("img/services_img/".$img);
   
   ?>
   <script>alert('Service deleted successfully')</script>
   <script>window.location.replace("all_services.php");</script>
   <?php
  }
  
  

?>