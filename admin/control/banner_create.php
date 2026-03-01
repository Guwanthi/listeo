<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $pid=$_POST['c1'];
   $btitle=$_POST['c2'];
   $banner_image_url=$_POST['c3'];
   $st=$_POST['c4'];
   $id=$_POST['c5'];
   $uid=$_SESSION['uid'];

  if($st==1){
    $banner_title="";
     $result = mysqli_query($con, "SELECT * FROM page_banner  WHERE  banner_type_idbanner_type='$pid' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $banner_title=$row['banner_title'];    
    }

    if($banner_title==""){

      $sql = "INSERT INTO page_banner (banner_title,banner_url,banner_type_idbanner_type,user_iduser) VALUES ('$btitle','$banner_image_url','$pid','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      } 
       echo '1';
    }else{
       echo '0';
    }
   
   



  }else{
    $image_url=""; 
    $result = mysqli_query($con, "SELECT * FROM page_banner  WHERE  idpage_banner='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['banner_url'];    
    }
    $sq='';
    if($banner_image_url!=""){
      $sq=",banner_url='$banner_image_url' ";
      unlink("../".$image_url);
    } 

 
   
    $sql = "UPDATE  page_banner SET banner_title='$btitle' $sq  WHERE   idpage_banner='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>