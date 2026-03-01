<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $un=$_POST['c1'];
   $lpw=$_POST['c2'];
   $npw=$_POST['c3'];
   $elpw=my_encrypt2($lpw);
   $enpw=my_encrypt2($npw);
 
   $uid=$_SESSION['uid'];


   $result = mysqli_query($con, "SELECT * FROM user  WHERE   	iduser='$uid' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $password    = $row['password'];
                                $user_name   = $row[' email'];
  }

   if($password==$elpw){

   	$sql = "UPDATE  user SET   email='$un',password='$enpw' WHERE   iduser='$uid' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
     echo '1';
   }else{
   	echo '0';
   }


    



?>