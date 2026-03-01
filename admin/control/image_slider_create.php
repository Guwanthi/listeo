<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $slider_title=$_POST['c1'];
   $slider_image_url=$_POST['c2'];
   $ch_gs=$_POST['c3'];
   $st=$_POST['c4'];
   $id=$_POST['c5'];
   $uid=$_SESSION['uid'];

  if($st==1){

   
   $sql = "INSERT INTO main_slider (slider_title,slider_url,user_iduser,is_main_slider) VALUES ('$slider_title','$slider_image_url','$uid','$ch_gs')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }



  }else{
    $slider_url="";
    $result = mysqli_query($con, "SELECT * FROM main_slider  WHERE    idmain_slider='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $slider_url=$row['slider_url'];   
    }
    $sq='';
    if($slider_image_url!=""){
      $sq=",slider_url='$slider_image_url' ";
      unlink("../".$slider_url);
    } 
   
    $sql = "UPDATE  main_slider SET slider_title='$slider_title',is_main_slider='$ch_gs' $sq  WHERE   idmain_slider='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>