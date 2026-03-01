<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

   
   $id=$_POST['c1'];
    
    $result3 = mysqli_query($con, "SELECT * FROM hotel_images WHERE hotels_idhotels='$id'   ");
                            while ($row = mysqli_fetch_array($result3)) {
                                $image_url=$row['hotel_url'];
                  if($image_url!=""){
                      unlink("../".$image_url);
                  }     

    }   

   $sql = "DELETE FROM  hotel_images  WHERE  hotels_idhotels='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

    $sql = "DELETE FROM  hotels  WHERE  idhotels='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     } 

     
    



?>