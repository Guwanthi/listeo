<?php
session_start();
date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

include '../model/DB.php';

 $name=$_POST['c1']; 
 $email=$_POST['c2'];
 $country=$_POST['c3'];
 $message=$_POST['c4'];


 $sql = "INSERT INTO testimonial (name,email,country,review) VALUES ('$name','$email','$country','$message')";

     if (!mysqli_query($con,$sql)){
           die('Error: ' . mysqli_error($con));
      } 



 $to = "inquiry@tourswithjames.com";
$subject = "Customer testimonial";

$message = "
<html>
<head>
 <title>Customer Testimonial</title>
</head>
<body>

<table style='text-align: left;'>
	<tr>
		<th>Name:</th>
		<th>".$name."  </th>
	</tr>

	

	<tr>
		<th>Email:</th>
		<th>".$email."</th>
	</tr>

	<tr>
		<th>Country:</th>
		<th>".$country."</th>
	</tr>

</table>
<p>".$message."</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";
//$headers .= 'Cc: chami.7636@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

?>