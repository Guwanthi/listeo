<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $name=$_POST['c1'];
   $country=$_POST['c2'];
   $des1=text_replace($_POST['c3']); 
   $des=addslashes($des1);
   $cr_image_url=$_POST['c4'];
   $st=$_POST['c5'];
   $id=$_POST['c6'];
   $uid=$_SESSION['uid'];
   

  if($st==1){

   
   $sql = "INSERT INTO testimonial (name,country,review,customer_url) VALUES ('$name','$country','$des','$cr_image_url')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
    $image_url="";
    $result = mysqli_query($con, "SELECT * FROM testimonial  WHERE    idtestimonial='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['customer_url'];   
    }
    $sq='';
    if($cr_image_url!=""){
      $sq=",customer_url='$cr_image_url' ";
      unlink("../".$image_url);
    } 
   
    $sql = "UPDATE  testimonial SET review='$des',name='$name',country='$country' $sq  WHERE   idtestimonial='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>