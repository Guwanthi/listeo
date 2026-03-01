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
   $gc_image_url=$_POST['c3'];
   $st=$_POST['c4'];
   $id=$_POST['c5'];
   $uid=$_SESSION['uid'];

  if($st==1){

   
   $sql = "INSERT INTO concept_type (concept_type_title,description,concept_type_url,user_iduser) VALUES ('$title','$des','$gc_image_url','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
    $image_url="";
    $result = mysqli_query($con, "SELECT * FROM concept_type  WHERE    idconcept_type='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['concept_type_url'];   
    }
    $sq='';
    if($image_url!=""){
      $sq=",concept_type_url='$gc_image_url' ";
      unlink("../".$image_url);
    } 

     
   
    $sql = "UPDATE  concept_type SET concept_type_title='$title',description='$des' $sq  WHERE   idconcept_type='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>