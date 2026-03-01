<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $country=$_POST['c1'];
   $title=$_POST['c2'];
   $des1=text_replace($_POST['c3']); 
   $des=addslashes($des1);
   $d_image_url=$_POST['c4'];
   $st=$_POST['c5'];
   $id=$_POST['c6'];
   $uid=$_SESSION['uid'];
   $img_alt=$_POST['c7'];


  if($st==1){

   
   $sql = "INSERT INTO destinations (destinations_title,description,destinations_url,country_idcountry,user_iduser,img_alt) VALUES ('$title','$des','$d_image_url','$country','$uid','$img_alt')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
    $image_url="";
    $result = mysqli_query($con, "SELECT * FROM destinations  WHERE       iddestinations='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['destinations_url'];   
    }
    $sq='';
    if($d_image_url!=""){
      $sq=",destinations_url='$d_image_url' ";
      unlink("../".$image_url);
    } 
   
    $sql = "UPDATE  destinations SET destinations_title='$title',description='$des',country_idcountry='$country',img_alt='$img_alt' $sq  WHERE   iddestinations='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>