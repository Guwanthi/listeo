<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';



$arr_file_types = ['image/png', 'image/gif', 'image/jpg','image/jpeg','image/webp'];
 
	if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
  		echo "false";
  		return;
	}
 
	if (!file_exists('../services_img')) {
  		mkdir('../services_img', 0777);
	}
	$url='../services_img/' . time() . '_' . $_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'],$url);

 	echo $url='services_img/' . time() . '_' . $_FILES['file']['name'];

 	

?>