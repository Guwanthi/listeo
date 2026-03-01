<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

   
   $id=$_POST['c1'];

   
    
      $sql = "DELETE FROM  video_gallery  WHERE   id_video_gallery='$id' ";
      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }

     

   

    
    



?>