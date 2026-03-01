<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");
session_start();

include '../model/DB.php';
include '../model/function.php';

 $uid=$_SESSION['uid'];

$arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];
 
	if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
  		echo "false";
  		return;
	}
 
	if (!file_exists('../images')) {
  		mkdir('../images', 0777);
	}
	$url='../images/' . time() . '_' . $_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'],$url);

 	 $url='images/' . time() . '_' . $_FILES['file']['name'];
 	 $idlogo=0;
 	 $result = mysqli_query($con, "SELECT * FROM logo   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idlogo=$row['idlogo'];    
    }

    if($idlogo==0){
    	$sql = "INSERT INTO logo (logo_url) VALUES ('$url')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
    }else{

    $sql = "UPDATE  logo SET logo_url='$url' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

    }

 	 


 	

?>