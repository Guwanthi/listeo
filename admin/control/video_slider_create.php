<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");
session_start();

include '../model/DB.php';
include '../model/function.php';

 $uid=$_SESSION['uid'];
 $url=$_POST['c1'];


   $idslider=0;
     $result = mysqli_query($con, "SELECT * FROM slider  ");
     while ($row = mysqli_fetch_array($result)) {
            $idslider=$row['idslider'];           
     }

     if($idslider==0){

     $sql = "INSERT INTO slider (url,img_video_statues,user_iduser) VALUES ('$url','2','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

     }else{

      $sql = "UPDATE  slider SET url='$url'  WHERE  img_video_statues='2' ";

      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }

     }




 	

?>