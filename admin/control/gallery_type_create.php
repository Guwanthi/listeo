<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $g_type=$_POST['c1'];
   $st=$_POST['c3'];
   $id=$_POST['c2'];
   $uid=$_SESSION['uid'];

  if($st==1){
    $type="";
     $result = mysqli_query($con, "SELECT * FROM gallery_type  WHERE  type='$g_type' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $type=$row['type'];    
    }

    if($type==""){

      $sql = "INSERT INTO gallery_type (type) VALUES ('$g_type')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      } 
       echo '1';
    }else{
       echo '0';
    }
   
   



  }else{
   
    $sql = "UPDATE  gallery_type SET type='$g_type' WHERE   idgallery_type='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>