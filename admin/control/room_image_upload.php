<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

 $id=$_POST['rid'];

$arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];
 
	if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
  		echo "false";
  		return;
	}
 
	if (!file_exists('../room')) {
  		mkdir('../room', 0777);
	}
	$url='../room/' . time() . '_' . $_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'],$url);

 	$url='room/' . time() . '_' . $_FILES['file']['name'];

 	$sql = "INSERT INTO room_slider (room_img_url,rooms_suites_idrooms_suites)VALUES ('$url','$id')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

   room_image_slider_view($con,$id);

?>