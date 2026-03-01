<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $kw=$_POST['c1'];
   
$kwords="";
     $result = mysqli_query($con, "SELECT * FROM keywords  WHERE    kwords='$kw' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $kwords=$row['kwords'];    
    }

    if($kwords==""){

      $sql = "INSERT INTO keywords (kwords) VALUES ('$kw')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      } 
       echo '1';
    }else{
       echo '0';
    }
   


?>