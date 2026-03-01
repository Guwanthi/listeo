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
   $bid=$_POST['c6'];
   $uid=$_SESSION['uid'];
  $img_alt=$_POST['c7'];

  if($st==1){

   
   $sql = "INSERT INTO blog_details ( blog_idblog,section_title,details,bd_url,bc_img_alt) VALUES ('$bid','$title','$des','$st_image_url','$img_alt')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
    $image_url="";
    $result = mysqli_query($con, "SELECT * FROM blog_details  WHERE  idblog_details='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['bd_url'];   
    }
    $sq='';
    if($st_image_url!=""){
      $sq=",bd_url='$st_image_url' ";
      unlink("../".$image_url);
    } 
   
    $sql = "UPDATE  blog_details SET section_title='$title',details='$des',bc_img_alt='$img_alt' $sq  WHERE   idblog_details='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>