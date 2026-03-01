<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

   
   $img_alt=$_POST['c1'];
   $id=$_POST['c2'];

      $sql = "UPDATE package_slider SET  ps_img_alt='$img_alt' WHERE  idpackage_slider='$id' ";
      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }

     

   

    
    



?>