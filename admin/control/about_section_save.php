<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $title=$_POST['c1'];
   $des1=text_replace($_POST['c2']); 
   $des=addslashes($des1);
   $uid=$_SESSION['uid'];


   $idabout=0;
    $result = mysqli_query($con, "SELECT * FROM about  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idabout=$row['idabout'];   
    }
   

  if($idabout==0){

   
     
   $sql = "INSERT INTO about (about_title,about_description,user_iduser) VALUES ('$title','$des','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

     echo '1';


  }else{
   
   
   $sql = "UPDATE  about SET about_title='$title',about_description='$des'  ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

       echo '1';
 
  }
  
 



?>