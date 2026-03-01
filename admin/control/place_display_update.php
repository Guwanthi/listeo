<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $id=$_POST['c1'];
   $dh=$_POST['c2'];
   
   $uid=$_SESSION['uid'];

   $sql = "UPDATE  best_place SET is_display='$dh'  WHERE   idbest_place='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
  
 



?>