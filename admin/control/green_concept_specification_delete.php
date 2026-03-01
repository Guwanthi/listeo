<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

   
   $id=$_POST['c1'];
   

     $image_url="";
   $result = mysqli_query($con, "SELECT * FROM green_page_specification  WHERE     idgreen_page_specification  ='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url  =$row['url'];   
    }
   
    if($image_url!=""){
      unlink("../".$image_url);
    } 
 

   $sql = "DELETE FROM  green_page_specification  WHERE    idgreen_page_specification='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
    



?>