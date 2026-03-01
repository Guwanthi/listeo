<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

   
   $id=$_POST['c1'];

     $idroom_booking=0;
    $result = mysqli_query($con, "SELECT * FROM room_booking WHERE  rooms_suites_idrooms_suites='$id'  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idroom_booking  =$row['idroom_booking'];   
    }


    if($idroom_booking==0){

      $image_url=""; $rooms_banner_url="";
      $result = mysqli_query($con, "SELECT * FROM rooms_suites WHERE  idrooms_suites='$id'  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url  =$row['room_url'];
                                $rooms_banner_url  =$row['rooms_banner_url'];    
      }
   
      if($image_url!="" || $image_url!=null){
        unlink("../".$image_url);
      }

      if($rooms_banner_url!="" || $rooms_banner_url!=null){
        unlink("../".$rooms_banner_url);
      } 
 

      $sql = "DELETE FROM  rooms_suites  WHERE  idrooms_suites='$id' ";
      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }

       $sql = "DELETE FROM  room_calander  WHERE  rooms_suites_idrooms_suites ='$id' ";
      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }

      $sql = "DELETE FROM  room_information  WHERE  rooms_suites_idrooms_suites ='$id' ";
      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }



      $result = mysqli_query($con, "SELECT * FROM room_slider WHERE  rooms_suites_idrooms_suites='$id'  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $room_img_url  =$row['room_img_url'];

                    if($room_img_url!=""){
                      unlink("../".$room_img_url);
                    }            
                                   
      }

      $sql = "DELETE FROM  room_slider  WHERE  rooms_suites_idrooms_suites ='$id' ";
      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }

      echo '1';

    }else{
      echo '0';
    }

   

    
    



?>