<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $title=$_POST['c1'];
   $des1=text_replace($_POST['c2']); 
   $des=addslashes($des1);
   $wc_image_url=$_POST['c3'];
   $st=$_POST['c4'];
   $id=$_POST['c5'];
   $uid=$_SESSION['uid'];

  if($st==1){

   
   $sql = "INSERT INTO why_choose (title,description,image_url,user_iduser) VALUES ('$title','$des','$wc_image_url','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
    $image_url="";
    $result = mysqli_query($con, "SELECT * FROM why_choose  WHERE    idwhy_choose='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['image_url'];   
    }
    $sq='';
    if($wc_image_url!=""){
      $sq=",image_url='$wc_image_url' ";
      unlink("../".$image_url);
    } 
   
    $sql = "UPDATE  why_choose SET title='$title',description='$des' $sq  WHERE   idwhy_choose='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>