<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");
session_start();

include '../model/DB.php';
include '../model/function.php';

$uid=$_SESSION['uid'];
$img_alt=$_POST['img_alt'];

$arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];
 
	if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
  		echo "false";
  		return;
	}
 
	if (!file_exists('../gallery_img')) {
  		mkdir('../gallery_img', 0777);
	}
	$url='../gallery_img/' . time() . '_' . $_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'],$url);

 	$url='gallery_img/' . time() . '_' . $_FILES['file']['name'];

 	 $sql = "INSERT INTO gallery (image_url,gallery_type_idgallery_type,img_alt,user_iduser)VALUES ('$url','$gtid','$img_alt','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }


 

?>