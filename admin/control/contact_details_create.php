<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $contact1=$_POST['c1'];
   $contact2=$_POST['c2'];
   $address=$_POST['c3'];
   $email1=$_POST['c4'];
   $email2=$_POST['c5'];
   $contact3=$_POST['c6'];
   $uid=$_SESSION['uid'];

   $idconntact_details=0;
   $result = mysqli_query($con, "SELECT * FROM conntact_details   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idconntact_details  =$row['idconntact_details']; 
    }

  if($idconntact_details==0){

   
   $sql = "INSERT INTO conntact_details (contact1,contact2,address,email1,email2,user_iduser,contact3) VALUES ('$contact1','$contact2','$address','$email1','$email2','$uid','$contact3')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
    
   
    $sql = "UPDATE  conntact_details SET contact1='$contact1',contact2='$contact2',contact3='$contact3',address='$address',email1='$email1',email2='$email2' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '2';
  }
  
 



?>