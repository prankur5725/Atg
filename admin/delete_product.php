<?php
include('include/connection.php');

 if(!empty($_GET['id']) && !empty($_GET['img']) && !empty($_GET['img1']))
    {
        $tid = $_GET['id'];
        $img = $_GET['img'];
        $img = $_GET['img1'];
    }
    
  if(mysqli_query($con,"delete from products where id='$tid'"))
  {
      unlink("img/products_images/".$img);
      unlink("img/products_images/".$img1);
   ?>
   <script>alert('Product deleted successfully')</script>
   <script>window.location.replace("all_products.php");</script>
   <?php
  }
  
  

?>