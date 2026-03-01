<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $title=$_POST['c1'];
   //$des=$_POST['c2'];
   $des1=text_replace($_POST['c2']); 
   $des=addslashes($des1);
   $st_image_url=$_POST['c3'];
   $st=$_POST['c4'];
   $id=$_POST['c5'];
   $img_alt=$_POST['c6'];
   $uid=$_SESSION['uid'];

  if($st==1){

   
   $sql = "INSERT INTO blog (title,designation,blog_url,user_iduser,date,time,img_alt) VALUES ('$title','$des','$st_image_url','$uid','$date','$time','$img_alt')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
    $image_url="";
    $result = mysqli_query($con, "SELECT * FROM blog  WHERE  idblog='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['blog_url'];   
    }
    $sq='';
    if($st_image_url!=""){
      $sq=",blog_url='$st_image_url' ";
      unlink("../".$image_url);
    } 
   
    $sql = "UPDATE  blog SET title='$title',designation='$des',img_alt='$img_alt' $sq  WHERE   idblog='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>