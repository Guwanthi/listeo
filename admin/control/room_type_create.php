<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $rt_type=$_POST['c1'];
   $rt_specialties=$_POST['c2'];
   $rt_size=$_POST['c3'];
   $rt_view=$_POST['c4'];
   $rt_qty=$_POST['c5'];
   $rt_adults=$_POST['c6'];
   $rt_children=$_POST['c7'];
   //$rtdescription=$_POST['c8'];
   $des1=text_replace($_POST['c8']); 
   $rtdescription=addslashes($des1);
   $rt_image_url=$_POST['c9'];
   $st=$_POST['c10'];
   $id=$_POST['c11'];
   $price=$_POST['c12'];
   $uid=$_SESSION['uid'];

   $room_type="";
   $result = mysqli_query($con, "SELECT * FROM rooms_suites  WHERE      room_type='$rt_type' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $room_type=$row['room_type'];   
  }



  if($st==1){

    if($room_type==""){

      $sql = "INSERT INTO rooms_suites (room_type,room_special,room_size,room_view,rooms_count,adults,childern,rooms_description,room_url,user_iduser,dafault_price) VALUES ('$rt_type','$rt_specialties','$rt_size','$rt_view','$rt_qty','$rt_adults','$rt_children','$rtdescription','$rt_image_url','$uid','$price')";

        if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
        }
        echo '1';
    }else{
        echo '0';
    }
   
   

  }else{
    $image_url="";
    $result = mysqli_query($con, "SELECT * FROM rooms_suites  WHERE   idrooms_suites='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['room_url'];   
    }
    $sq='';
    if($rt_image_url!=""){
      $sq=",room_url='$rt_image_url' ";
      unlink("../".$image_url);
    } 
   
    $sql = "UPDATE  rooms_suites SET room_type='$rt_type',room_special='$rt_specialties',room_size='$rt_size',room_view='$rt_view',rooms_count='$rt_qty',adults='$rt_adults',childern='$rt_children',rooms_description='$rtdescription',dafault_price='$price' $sq  WHERE   idrooms_suites='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
    echo '1';
  }
  
 



?>