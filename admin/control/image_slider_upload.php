<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");
session_start();

include '../model/DB.php';
include '../model/function.php';

 $uid=$_SESSION['uid'];
 //$ch_vs=$_POST['ch_vs'];


    $arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg', 'image/webp'];
 
  if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
      echo "false";
      return;
  }
 
  if (!file_exists('../slider')) {
      mkdir('../slider', 0777);
  }
  $url='../slider/' . time() . '_' . $_FILES['file']['name'];
  move_uploaded_file($_FILES['file']['tmp_name'],$url);

   $url='slider/' . time() . '_' . $_FILES['file']['name'];

   $sql = "INSERT INTO slider (url,img_video_statues,user_iduser) VALUES ('$url','1','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }




 	

?>