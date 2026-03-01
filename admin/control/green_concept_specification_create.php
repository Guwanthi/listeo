<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $title=$_POST['c1'];
   $title2=$_POST['c2'];
   $gc_image_url=$_POST['c3'];
   $st=$_POST['c4'];
   $id=$_POST['c5'];
   $uid=$_SESSION['uid'];

  if($st==1){

   
   $sql = "INSERT INTO green_page_specification (specification,title,url,user_iduser) VALUES ('$title','$title2','$gc_image_url','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
    $url  ="";
    $result = mysqli_query($con, "SELECT * FROM green_page_specification  WHERE     idgreen_page_specification  ='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $url  =$row['url'];   
    }
    $sq='';
    if($wc_image_url!=""){
      $sq=",url ='$gc_image_url' ";
      unlink("../".$url  );
    } 
   
    $sql = "UPDATE  green_page_specification SET specification='$title',title='$title2' $sq  WHERE     idgreen_page_specification  ='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>