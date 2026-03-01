<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $pl_name=$_POST['c1'];
   $pid=$_POST['c2'];
   $offer_inc_id=$_POST['c3'];
   $st=$_POST['c4'];
   $uid=$_SESSION['uid'];

  if($st==1){
    $includes="";
    $result = mysqli_query($con, "SELECT * FROM package_includes  WHERE  packages_idpackages='$pid' &&  includes='$pl_name' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $includes=$row['includes'];   
    }

    if($includes==""){

      $sql = "INSERT INTO package_includes (includes,packages_idpackages) VALUES ('$pl_name','$pid')";

      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }

      offer_include_list($con,$pid);

    }else{
      echo '0';
    }
 
  }else{
   
   
    $sql = "UPDATE  package_includes SET includes='$pl_name' WHERE   idpackage_includes='$offer_inc_id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

     offer_include_list($con,$pid);

  }
  
 



?>