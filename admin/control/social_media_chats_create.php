<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $whatsapp=$_POST['c1'];
   $messanger=$_POST['c2'];
   $telegram=$_POST['c3'];
   $line=$_POST['c4'];
   $other=$_POST['c5'];
   $uid=$_SESSION['uid'];

   $idsocial_chat=0;
   $result = mysqli_query($con, "SELECT * FROM social_chat   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idsocial_chat  =$row['idsocial_chat']; 
    }

  if($idsocial_chat==0){

   
   $sql = "INSERT INTO social_chat (whatsapp,messanger,telegram,line,other,user_iduser) VALUES ('$whatsapp','$messanger','$telegram','$line','$other','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
    
   
    $sql = "UPDATE  social_chat SET whatsapp='$whatsapp',messanger='$messanger',telegram='$telegram',line='$line',other='$other' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '2';
  }
  
 



?>