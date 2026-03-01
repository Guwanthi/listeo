<?php
error_reporting(E_ERROR | E_PARSE); ini_set('display_errors', '1'); 

//session_start();
 //unset($_SESSION['enum']); 
//session_unset(); 
//$cookie_name = "user";
//setcookie($cookie_name, "", time() - 10);
//setcookie("cenum", "", time() - 10);

session_start();

if (isset($_SESSION["uid"]))

session_destroy();



header("location:../login.9web");


header("Cache-Control: no-cache, must-revalidate");
header("Content-Type: application/xml; charset=utf-8");

ob_end_flush();
exit();

?>









?>
