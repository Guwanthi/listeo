<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $day=$_POST['c1'];
   $location=$_POST['c2'];
   $des1=text_replace($_POST['c3']); 
   $des=addslashes($des1);
   $p_image_url=$_POST['c4'];
   $st=$_POST['c5'];
   $id=$_POST['c6'];
   $tpid=$_POST['c7'];
   $uid=$_SESSION['uid'];
   $img_alt=$_POST['c8'];

  if($st==1){

   
   $sql = "INSERT INTO itinerary (place,day,itinerary_description,itinerary_url,packages_idpackages,img_alt) VALUES ('$location','$day','$des','$p_image_url','$tpid','$img_alt')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

    //tour_package_itinerary_list($con,$tpid);

  }else{
    $image_url="";
    $result = mysqli_query($con, "SELECT * FROM itinerary  WHERE   iditinerary='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['itinerary_url'];   
    }
    $sq='';
    if($p_image_url!=""){
      $sq=",itinerary_url='$p_image_url' ";
      unlink("../".$image_url);
    } 
   
    $sql = "UPDATE  itinerary SET place='$location',day='$day',itinerary_description='$des',img_alt='$img_alt' $sq  WHERE   iditinerary='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

     //tour_package_itinerary_list($con,$tpid);
  }
  
 



?>