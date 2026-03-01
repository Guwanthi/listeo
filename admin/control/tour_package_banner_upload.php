<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");
session_start();

include '../model/DB.php';
include '../model/function.php';

 $uid=$_SESSION['uid'];
 $htid=$_SESSION['htid'];
 

 	$arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg', 'image/webp'];
 
	if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
  		echo "false";
  		return;
	}
 
	if (!file_exists('../tour_packages_img')) {
  		mkdir('../tour_packages_img', 0777);
	}
	$url='../tour_packages_img/' . time() . '_' . $_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'],$url);

 	 $url='tour_packages_img/' . time() . '_' . $_FILES['file']['name'];

 	 $sql = "UPDATE packages SET banner_url='$url' WHERE idpackages='$htid'";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }


 




 	

?>