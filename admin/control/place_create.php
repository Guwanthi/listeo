<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $title=$_POST['c1'];
   $img_alt=$_POST['c2'];
   //$des=$_POST['c3'];
   $des1=text_replace($_POST['c3']); 
   $des=addslashes($des1);
   $st_image_url=$_POST['c4'];
   $st=$_POST['c5'];
   $id=$_POST['c6'];
   $uid=$_SESSION['uid'];

  if($st==1){

   
   $sql = "INSERT INTO things_to_do (title,img_alt,description, img_url,user_iduser) VALUES ('$title','$img_alt','$des','$st_image_url','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
    $image_url="";
    $result = mysqli_query($con, "SELECT * FROM things_to_do  WHERE   id_things_to_do='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['img_url'];   
    }
    $sq='';
    if($st_image_url!=""){
      $sq=",img_url='$st_image_url' ";
      unlink("../".$image_url);
    } 
   
    $sql = "UPDATE  things_to_do SET title='$title',img_alt='$img_alt',description='$des' $sq  WHERE   id_things_to_do='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>