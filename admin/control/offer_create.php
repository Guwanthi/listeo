<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

session_start();

   $off_name=$_POST['c1'];
   $off_price=$_POST['c2'];
   $off_title=$_POST['c3'];
   //$offdescription=$_POST['c4'];
   $des1=text_replace($_POST['c4']); 
   $offdescription=addslashes($des1);
   $offer_image_url1=$_POST['c5'];
   $offer_image_url2=$_POST['c6'];
   $st=$_POST['c7'];
   $id=$_POST['c8'];
   $uid=$_SESSION['uid'];

  if($st==1){

   
   $sql = "INSERT INTO packages (package_name,price,package_title,package_description,package_slider_url, insid_url,user_iduser) VALUES ('$off_name','$off_price','$off_title','$offdescription','$offer_image_url1','$offer_image_url2','$uid')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }

 echo '1';

  }else{
    $image_url=""; $image_url2="";
    $result = mysqli_query($con, "SELECT * FROM packages  WHERE  idpackages='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['package_slider_url']; 
                                $image_url2=$row['insid_url'];    
    }
    $sq='';
    if($offer_image_url1!=""){
      $sq=",package_slider_url='$offer_image_url1' ";
      unlink("../".$image_url);
    } 

    if($offer_image_url2!=""){
      $sq.=",insid_url='$offer_image_url2' ";
      unlink("../".$image_url2);
    } 
   
    $sql = "UPDATE  packages SET package_name='$off_name',price='$off_price',package_title='$off_title',package_description='$offdescription' $sq  WHERE   idpackages='$id' ";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
     }
 echo '1';
  }
  
 



?>