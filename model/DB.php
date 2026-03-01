<?php

if($_SERVER['HTTP_HOST']=="localhost"){
        $con=  mysqli_connect("localhost","root","","listeo","3306");  
 }else{
          $con=  mysqli_connect("localhost","cerffqux_root","{UP86z,P7c$*","cerffqux_nature_land_admin","3306");   
 }


if (mysqli_connect_errno()) {
    
    echo "fail to connect to my sql" . mysqli_connect_error();
    
} else {
   
}


?>
