<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

   
   $piid=$_POST['c1'];
   $pid=$_POST['c2'];
 
    

      $sql = "DELETE FROM  package_includes  WHERE  idpackage_includes='$piid' ";
      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }


    offer_include_list($con,$pid);

    
    



?>