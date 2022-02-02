<?php
 include 'connection.php';

 $query = "SELECT * FROM events
            WHERE id IN
            (SELECT MIN(id) FROM events GROUP BY event_key)";

 $result = mysqli_query($con,$query);
 $data = "";
 while($row = mysqli_fetch_assoc($result)){

    $x = $row['event_image'];
    $ex = explode(',',$x);
    // print_r($ex);
    for($i=0;$i<1;$i++){


     $data .=' 	<li class="pl-3 pr-3 images__slider no__outline filter">
                <img src="../admin/img/events_images/'. $ex[$i] .'" alt="">
                <div class="name"><h5 class="w-100 text-center m-0 p-0">'. $row["event_name"] .'</h5></div> 
                   </li>
';

    }
 }

echo $data;

?>