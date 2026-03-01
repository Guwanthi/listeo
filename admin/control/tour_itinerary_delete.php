<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

   
   $id=$_POST['c1'];
   

    $image_url=""; $tpid=0;
    $result = mysqli_query($con, "SELECT * FROM itinerary  WHERE     iditinerary='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['itinerary_url'];
                                $tpid=$row['packages_idpackages'];      
    }
   
    if($image_url!=""){
      unlink("../".$image_url);
    } 
 

   $sql = "DELETE FROM  itinerary  WHERE  iditinerary='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
    
    tour_package_itinerary_list($con,$tpid);


?>