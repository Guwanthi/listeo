<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

  
   $des1=text_replace($_POST['c1']); 
   $des=addslashes($des1);

   $tipes="";
   $result = mysqli_query($con, "SELECT * FROM travel_tipes   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $tipes=$row['tipes'];   
    }

  
  if($tipes==""){

   
   $sql = "INSERT INTO travel_tipes (tipes) VALUES ('$des')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
   
   
    $sql = "UPDATE  travel_tipes SET tipes='$des' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>