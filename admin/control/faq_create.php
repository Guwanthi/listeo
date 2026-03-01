<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $qst=$_POST['c1'];
   //$ans=$_POST['c2'];
   $des1=text_replace($_POST['c2']); 
   $ans=addslashes($des1);
   $st=$_POST['c3'];
   $id=$_POST['c4'];
   $uid=$_SESSION['uid'];

  if($st==1){
    $idfaq=0;
     $result = mysqli_query($con, "SELECT * FROM faq  WHERE  question='$qst' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idfaq=$row['idfaq'];    
    }

    if($idfaq==0){

      $sql = "INSERT INTO faq (question,answers) VALUES ('$qst','$ans')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      } 
       echo '1';
    }else{
       echo '0';
    }
   
   



  }else{
   
   
    $sql = "UPDATE  faq SET question='$qst',answers='$ans'  WHERE   idfaq='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>