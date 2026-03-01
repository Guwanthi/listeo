<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");
session_start();
include '../model/DB.php';
include '../model/function.php';
$uid=$_SESSION['uid'];


$arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg', 'image/webp'];
 
	if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
  		echo "false";
  		return;
	}
 
	if (!file_exists('../about')) {
  		mkdir('../about', 0777);
	}
	$url='../about/' . time() . '_' . $_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'],$url);

 	$url='about/' . time() . '_' . $_FILES['file']['name'];


 	 $idabout=0; $about_img="";
    $result = mysqli_query($con, "SELECT * FROM about  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idabout=$row['idabout'];
                                 $about_img=$row['about_img2'];      
    }

    if($idabout==0){

    	 $sql = "INSERT INTO about (about_img2, user_iduser)VALUES ('$url','$uid')";

     	if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     	}

    }else{

    if($about_img!=""){
   
      unlink("../".$img_url1);
    } 

    	 $sql = "UPDATE  about SET about_img2='$url'  ";

     	if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     	}

    }

 	
?>