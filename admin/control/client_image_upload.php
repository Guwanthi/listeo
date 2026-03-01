<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");
session_start();
include '../model/DB.php';
include '../model/function.php';
$uid=$_SESSION['uid'];

$img_alt = $_POST['img_alt'];


$arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg','image/webp'];
 
	if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
  		echo "false";
  		return;
	}
 
	if (!file_exists('../client_img')) {
  		mkdir('../client_img', 0777);
	}
	$url='../client_img/' . time() . '_' . $_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'],$url);

 	 $url='client_img/' . time() . '_' . $_FILES['file']['name'];

 	 $sql = "INSERT INTO clients (client_url,img_alt,user_iduser)VALUES ('$url','$img_alt','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }


 	

?>