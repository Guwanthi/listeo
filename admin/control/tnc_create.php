<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

  
   $des1=text_replace($_POST['c1']); 
   $des=addslashes($des1);

   $conditions="";
   $result = mysqli_query($con, "SELECT * FROM tnc   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $conditions=$row['conditions'];   
    }

  
  if($conditions==""){

   
   $sql = "INSERT INTO tnc (conditions) VALUES ('$des')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
   
   
    $sql = "UPDATE  tnc SET conditions='$des' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>