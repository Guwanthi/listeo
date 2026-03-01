<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

   
   $id=$_POST['c1'];
   

    $slider_url="";
    $result = mysqli_query($con, "SELECT * FROM slider  WHERE    idslider='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $slider_url=$row['url'];   
    }
   
    if($slider_url!=""){
      unlink("../".$slider_url);
    } 
 

   $sql = "DELETE FROM  slider  WHERE    idslider='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
    



?>