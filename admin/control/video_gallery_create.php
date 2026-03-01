<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $vurl=$_POST['c1'];
   $st=$_POST['c2'];
   $id=$_POST['c3'];
   $uid=$_SESSION['uid'];

  if($st==1){

   
   $sql = "INSERT INTO video_gallery (vurl,user_iduser) VALUES ('$vurl','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }


 echo '1';

  }else{
   
   
    $sql = "UPDATE  video_gallery SET vurl='$vurl'  WHERE   id_video_gallery  ='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

  

 echo '1';
  }
  
 



?>