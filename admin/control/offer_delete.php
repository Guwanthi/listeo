<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

   
   $id=$_POST['c1'];

   
      $image_url="";  $insid_url="";
      $result = mysqli_query($con, "SELECT * FROM packages  WHERE  idpackages='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['package_slider_url'];
                                $insid_url=$row['insid_url'];
                                
    }
   
      if($image_url!="" || $image_url!=null){
        unlink("../".$image_url);
      }

      if($insid_url!="" || $insid_url!=null){
        unlink("../".$insid_url);
      }

    

      $sql = "DELETE FROM  package_includes  WHERE  packages_idpackages='$id' ";
      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }


      $sql = "DELETE FROM  packages  WHERE  idpackages='$id' ";
      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }
    
     

     

   

    
    



?>