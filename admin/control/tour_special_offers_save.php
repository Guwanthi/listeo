<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $des1=text_replace($_POST['c1']); 
   $idescription=addslashes($des1);
   $id=$_POST['c2'];
   
   $uid=$_SESSION['uid'];

    $sql = "UPDATE  packages SET special_offers='$idescription' WHERE idpackages='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }


?>