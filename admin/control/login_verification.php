
<?php
session_start();

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");
include '../model/DB.php';
include '../model/function.php';

$scode=$_SESSION['vid'];


$code=$_POST['c1']; 


if($code==$scode){
  unset($_SESSION['vid']);
  echo '1';
}else{
  echo '2';
}



 

?>
