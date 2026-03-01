<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();


   $id=$_POST['c1'];
   $uid=$_SESSION['uid'];


    $sql = "UPDATE  event SET is_special='0'   ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

    $sql = "UPDATE  event SET is_special='1'  WHERE   idevent='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
  
 



?>