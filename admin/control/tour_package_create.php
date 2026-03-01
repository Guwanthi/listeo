<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $ptype=$_POST['c1'];
   $title=$_POST['c2'];
   $pdays=$_POST['c3'];
   $des1=text_replace($_POST['c4']); 
   $des=addslashes($des1);
   $p_image_url=$_POST['c5'];
   $st=$_POST['c6'];
   $id=$_POST['c7'];
   $uid=$_SESSION['uid'];
   $img_alt = $_POST['c8'];

  if($st==1){

   
   $sql = "INSERT INTO packages (package_title,days,package_description,package_type_idpackage_type,package_url,user_iduser,img_alt) VALUES ('$title','$pdays','$des','$ptype','$p_image_url','$uid','$img_alt')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
    $image_url="";
    $result = mysqli_query($con, "SELECT * FROM packages  WHERE   idpackages='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['package_url'];   
    }
    $sq='';
    if($p_image_url!=""){
      $sq=",package_url='$p_image_url' ";
      unlink("../".$image_url);
    } 
   
    $sql = "UPDATE  packages SET package_title='$title',days='$pdays',package_description='$des',img_alt='$img_alt' $sq  WHERE   idpackages='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>