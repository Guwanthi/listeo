<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $title=$_POST['c1'];
   $edate=$_POST['c2'];
   $des1=text_replace($_POST['c3']); 
   $des=addslashes($des1);
   $e_image_url=$_POST['c4'];
   $st=$_POST['c5'];
   $id=$_POST['c6'];
   $uid=$_SESSION['uid'];

  if($st==1){

   
   $sql = "INSERT INTO event (event_title,event_date,description,event_url,user_iduser) VALUES ('$title','$edate','$des','$e_image_url','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
    $image_url="";
    $result = mysqli_query($con, "SELECT * FROM event  WHERE     idevent='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['event_url'];   
    }
    $sq='';
    if($e_image_url!=""){
      $sq=",event_url='$e_image_url' ";
      unlink("../".$image_url);
    } 
   
    $sql = "UPDATE  event SET event_title='$title',event_date='$edate',description='$des' $sq  WHERE   idevent='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>