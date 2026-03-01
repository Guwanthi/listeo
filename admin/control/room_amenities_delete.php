<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

   
   $id=$_POST['c1'];
   $rid=$_POST['c2'];

 

      $sql = "DELETE FROM  room_information  WHERE  idroom_information='$id' ";
      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }

   
    room_amenities_list($con,$rid);

    
    



?>