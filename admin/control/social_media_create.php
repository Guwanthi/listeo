<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $facebook=$_POST['c1'];
   $twitter=$_POST['c2'];
   $instagram=$_POST['c3'];
   $youtube=$_POST['c4'];
   $tripadvisor=$_POST['c5'];
   $uid=$_SESSION['uid'];

   $idsocial_media=0;
   $result = mysqli_query($con, "SELECT * FROM social_media   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idsocial_media=$row['idsocial_media']; 
    }

  if($idsocial_media==0){

   
   $sql = "INSERT INTO social_media (facebook,twitter,instagram,youtube,tripadvisor,user_iduser) VALUES ('$facebook','$twitter','$instagram','$youtube','$tripadvisor','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
    
   
    $sql = "UPDATE  social_media SET facebook='$facebook',twitter='$twitter',instagram='$instagram',youtube='$youtube',tripadvisor='$tripadvisor' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '2';
  }
  
 



?>