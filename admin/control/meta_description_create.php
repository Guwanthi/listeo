<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $pid=$_POST['c1'];
   $mdescription=$_POST['c2'];
   $st=$_POST['c3'];
   $id=$_POST['c4'];
   $uid=$_SESSION['uid'];

  if($st==1){

    $idmeta_description=0;
    $result = mysqli_query($con, "SELECT * FROM meta_description  WHERE  banner_type_idbanner_type='$pid' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idmeta_description=$row['idmeta_description'];   
    }

    if($idmeta_description==0){

      $sql = "INSERT INTO meta_description (mdescription,banner_type_idbanner_type) VALUES ('$mdescription','$pid')";

      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }
       echo '1';
    }else{
       echo '0';
    }
  



  }else{
    
    $sql = "UPDATE  meta_description SET mdescription='$mdescription'  WHERE   idmeta_description='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>