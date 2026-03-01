<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

   
   $id=$_POST['c1'];

   
      
    $result = mysqli_query($con, "SELECT * FROM gallery  WHERE  gallery_type_idgallery_type='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['image_url'];

      if($image_url!="" || $image_url!=null){
        unlink("../".$image_url);
      }                  
                                
    }
   
     

    


      $sql = "DELETE FROM  gallery_type  WHERE  idgallery_type='$id' ";
      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }
    
     

     

   

    
    



?>