<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $pl_name=$_POST['c1'];
   $pid=$_POST['c2'];
   $place_inc_id=$_POST['c3'];
   $st=$_POST['c4'];
   $uid=$_SESSION['uid'];

  if($st==1){
    $includes="";
    $result = mysqli_query($con, "SELECT * FROM place_includes  WHERE  best_place_idbest_place='$pid' && includes='$pl_name' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $includes=$row['includes'];   
    }

    if($includes==""){

      $sql = "INSERT INTO place_includes (includes,best_place_idbest_place) VALUES ('$pl_name','$pid')";

      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }

      place_include_list($con,$pid);

    }else{
      echo '0';
    }
 
  }else{
   
   
    $sql = "UPDATE  place_includes SET includes='$pl_name' WHERE   idplace_includes='$place_inc_id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

     place_include_list($con,$pid);

  }
  
 



?>