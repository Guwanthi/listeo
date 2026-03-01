<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';



$arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];
 
	if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
  		echo "false";
  		return;
	}
 
	if (!file_exists('../banner_img')) {
  		mkdir('../banner_img', 0777);
	}
	$url='../banner_img/' . time() . '_' . $_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'],$url);

 	echo $url='banner_img/' . time() . '_' . $_FILES['file']['name'];

 	

?>