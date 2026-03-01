<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $rid=$_POST['c1'];
   $amenities=$_POST['c2'];
   $st=$_POST['c3'];
   $id=$_POST['c4'];
   $uid=$_SESSION['uid'];

   $information="";
   $result = mysqli_query($con, "SELECT * FROM room_information  WHERE   rooms_suites_idrooms_suites='$rid' && information='$amenities' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $information=$row['information'];   
  }



  if($st==1){

    if($information==""){

      $sql = "INSERT INTO room_information (information,rooms_suites_idrooms_suites) VALUES ('$amenities','$rid')";

        if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
        }
        room_amenities_list($con,$rid);
    }else{
        echo '0';
    }
   
   

  }else{
    
    $sql = "UPDATE  room_information SET information='$amenities' WHERE   idroom_information='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
    room_amenities_list($con,$rid);
  }
  
 



?>