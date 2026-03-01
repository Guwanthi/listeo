<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $name=$_POST['c1'];
   $contact=$_POST['c2'];
   $email=$_POST['c3'];
 
   $uid=$_SESSION['uid'];

    $sql = "UPDATE  user SET  name='$name',contact_no='$contact',email='$email' WHERE   iduser='$uid' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }



?>