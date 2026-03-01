<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

   
   $hiid=$_POST['c1'];
   $hid=$_POST['c2'];
   

    $image_url="";
    $result3 = mysqli_query($con, "SELECT * FROM hotel_images WHERE   idhotel_images  ='$hiid'   ");
                            while ($row = mysqli_fetch_array($result3)) {
                                $image_url=$row['hotel_url'];
    }


   
    if($image_url!=""){
      unlink("../".$image_url);
    } 
 

   $sql = "DELETE FROM  hotel_images  WHERE   idhotel_images  ='$hiid' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

     $result3 = mysqli_query($con, "SELECT * FROM hotel_images WHERE hotels_idhotels='$hid'   ");
                                            while ($row = mysqli_fetch_array($result3)) {
                                                $idhotel_images=$row['idhotel_images'];   
                                                $image_url=$row['hotel_url'];
                                    

                                     echo' <div class="col-xl-4 col-lg-4 " style="float: left;" >
                                        <div class="alert alert-info alert-dismissible fade show" style="padding: 0px;">
                                            <div class="media" style="padding: 0px;">
                                                <div class="media-body">
                                                <img class="d-block w-100"  src="'.$image_url.'"  style="width: 100%;">
                                                 <button type="button"  class="btn btn-sm btn-danger " data-target="#hi_delete_model" data-toggle="modal" onclick="hotel_image_delete_for('.$idhotel_images.','.$hid.');">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';

                                            } 
    



?>