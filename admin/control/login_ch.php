
<?php
session_start();

date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");
include '../model/DB.php';
include '../model/function.php';




$un=$_POST['c1']; 
$pw1=$_POST['c2']; 
$pw=my_encrypt2($pw1);
 
 $username=""; $password=""; $iduser=0; $login_status=0; $email="";
  $result = mysqli_query($con, "SELECT * FROM user  WHERE     email='$un' &&  password='$pw' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $iduser   = $row['iduser'];
                                $username   = $row['email'];
                                $password   = $row['password'];
                                $login_status   = $row['login_status'];
                                $email   = $row['email'];
}
 
 $otp=rand(1000,10000); 

if($un==$username && $pw==$password &&  $login_status==1){
  $_SESSION['uid']=$iduser;
  $_SESSION['vid']=$otp;
// send_otp($email,$otp);
  echo '1';
}else if($login_status==0){
  echo '3';
}else{
  echo '0';
}


function send_otp($username,$otp){
  $to = $username;
$subject = 'Login Verification OTP Code ';
$message = '
<html>
<head>

</head>
<body>

<h3>Please use this OTP : '.$otp.' for your login </h3>
</body>
</html>

'; 

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@thetarahotels.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);


}
     
   
 

?>
