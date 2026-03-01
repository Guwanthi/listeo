<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $title=$_POST['c1'];
   //$des=$_POST['c2'];
   $des1=text_replace($_POST['c2']); 
   $des=addslashes($des1);
   $uid=$_SESSION['uid'];



    $idservices=0;
    $result = mysqli_query($con, "SELECT * FROM services  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idservices=$row['idservices'];   
    }
   

  if($idservices==0){

   
   $sql = "INSERT INTO services (service_title,description,user_iduser) VALUES ('$title','$des','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
   
    $sql = "UPDATE  services SET service_title='$title',description='$des'  ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>