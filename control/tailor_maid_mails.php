<?php
session_start();
date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

//include '../model/DB.php';
//include '../model/function.php';
 
 $name=$_POST['c2'];
 $email=$_POST['c3'];
 $country=$_POST['c4'];
 $days=$_POST['c5'];
 $date1=$_POST['c6'];
 $date2=$_POST['c7']; 
 $adults=$_POST['c8'];
 $kids=$_POST['c9'];
 $infant=$_POST['c10'];
 $more_info=$_POST['c11'];
 
 

 $to = "info@ceylonnaturelandtours.com";
$subject = "Tailor Made Tour Request";

$message = "
<html>
<head>
 <title>Tailor Made Tour Request</title>
</head>
<body>
<h2>Tailor Made Tour Request</h2>
<table style='text-align: left;'>
	<tr>
		<th>Name</th>
		<th>".$name."</th>
	</tr>

	<tr>
		<th>Email</th>
		<th>".$email."</th>
	</tr>

	<tr>
		<th>Country</th>
		<th>".$country."</th>
	</tr>

	<tr>
		<th>Days</th>
		<th>".$days."</th>
	</tr>

	<tr>
		<th>Arrival</th>
		<th>".$date1."</th>
	</tr>

	<tr>
		<th>Departure</th>
		<th>".$date2."</th>
	</tr>

	<tr>
		<th>Adults</th>
		<th>".$adults."</th>
	</tr>

	<tr>
		<th>Kids below 12 years</th>
		<th>".$kids."</th>
	</tr>

	<tr>
		<th>Infant</th>
		<th>".$infant."</th>
	</tr>

	

	<tr>
		<th>More Info</th>
		<th>".$more_info."</th>
	</tr>





</table>
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