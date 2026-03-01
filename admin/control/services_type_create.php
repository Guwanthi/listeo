<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $title=$_POST['c1'];
   $st_image_url=$_POST['c2'];
   $st=$_POST['c3'];
   $id=$_POST['c4'];
   $uid=$_SESSION['uid'];
   $surl=$_POST['c5'];

  if($st==1){

   
   $sql = "INSERT INTO services (services_title,services_url,user_iduser,surl) VALUES ('$title','$st_image_url','$uid','$surl')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
    $image_url="";
    $result = mysqli_query($con, "SELECT * FROM services  WHERE     idservices='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['services_url'];   
    }
    $sq='';
    if($st_image_url!=""){
      $sq=",services_url='$st_image_url' ";
      unlink("../".$image_url);
    } 
   
    $sql = "UPDATE  services SET services_title='$title',surl='$surl' $sq  WHERE   idservices='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>