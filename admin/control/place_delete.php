<?php

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';
include '../model/function.php';

   
   $id=$_POST['c1'];

   
      $image_url="";  
    $result = mysqli_query($con, "SELECT * FROM things_to_do  WHERE id_things_to_do='$id' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['img_url'];
                                
    }
   
      if($image_url!="" || $image_url!=null){
        unlink("../".$image_url);
      }

    



      $sql = "DELETE FROM  things_to_do  WHERE  id_things_to_do='$id' ";
      if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      }
    
     

     

   

    
    



?>