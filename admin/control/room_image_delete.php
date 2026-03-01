<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

   
   $id=$_POST['c1'];

    
 $image_url=""; $rooms_suites_idrooms_suites=0;
      $result = mysqli_query($con, "SELECT * FROM room_slider WHERE   idroom_slider='$id'  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url  =$row['room_img_url'];
                                $rooms_suites_idrooms_suites  =$row['rooms_suites_idrooms_suites'];    
      }
   
      if($image_url!="" || $image_url!=null){
        unlink("../".$image_url);
      }

    

      $sql = "DELETE FROM  room_slider  WHERE  idroom_slider='$id' ";
      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }

   
    room_image_slider_view($con,$rooms_suites_idrooms_suites);

    
    



?>