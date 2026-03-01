<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $type=$_POST['c1'];
   

     $sql = "UPDATE  slider SET is_main_slider='0'  ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

     $sql = "UPDATE  slider SET is_main_slider='1'  WHERE   img_video_statues='$type' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 



?>