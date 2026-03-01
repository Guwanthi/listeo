<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $type=$_POST['c1'];
   $name=$_POST['c2'];
   $h_image_url=$_POST['c3'];
   $st=$_POST['c4'];
   $id=$_POST['c5'];
   $uid=$_SESSION['uid'];

  if($st==1){

   
   $sql = "INSERT INTO hotels (hotel_type_idhotel_type,hotel_description,user_iduser) VALUES ('$type','$name','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

     $last_id = mysqli_insert_id($con); 

   $har= explode(",",$h_image_url);
  
   for ($i=0; $i < count($har); $i++) { 
    

      $sql = "INSERT INTO hotel_images (hotels_idhotels,hotel_url) VALUES ('$last_id','$har[$i]')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }


   }


 echo '1';

  }else{
    $image_url="";
    $result = mysqli_query($con, "SELECT * FROM hotels  WHERE     idhotels='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['hotel_url'];   
    }
    $sq='';
    if($h_image_url!=""){
      $sq=",hotel_url='$h_image_url' ";
      unlink("../".$image_url);
    } 
   
    $sql = "UPDATE  hotels SET hotel_type_idhotel_type='$type',hotel_description='$name' $sq  WHERE   idhotels='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

       $har= explode(",",$h_image_url);

    for ($i=0; $i < count($har); $i++) { 
    

      $sql = "INSERT INTO hotel_images (hotels_idhotels,hotel_url) VALUES ('$id','$har[$i]')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }


   } 


 echo '1';
  }
  
 



?>