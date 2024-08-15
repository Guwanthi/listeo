<?php
session_start();
date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

//include '../model/DB.php';
//include '../model/function.php';

 $name=$_POST['c1']; 
 //$email=$_POST['c2'];
 $email=$_POST['c2'];
 $country= explode("/",$_POST['c3']); 
 $rdate=$_POST['c4'];
 $message=$_POST['c5'];
 $mtype=$_POST['c6'];
 $contact1=$_POST['c7'];
 $contact2=$_POST['c8'];
 $ddate=$_POST['c8'];

 // Store the IP address
$vis_ip = getVisIPAddr();
  
// Display the IP address
$ip = $vis_ip;

// Use JSON encoded string and converts
// it into a PHP variable
$ipdat = @json_decode(file_get_contents(
    "http://www.geoplugin.net/json.gp?ip=" . $ip));
   
  $sender_country= $ipdat->geoplugin_countryName;
   $sender_city= $ipdat->geoplugin_city;

 
 $to = "info@toursforsrilanka.com";
$subject = "Customer Inquiry - ".$mtype;

$message = "
<html>
<head>
 <title>Customer Inquiry - ".$mtype."</title>
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
		<th>".$$country[1]."</th>
	</tr>

	<tr>
		<th>Arrivel Date:</th>
		<th>".$rdate."</th>
	</tr>

	<tr>
		<th>Departure Date:</th>
		<th>".$ddate."</th>
	</tr>

	<tr>
		<th>Email:</th>
		<th>".$email."</th>
	</tr>
	<tr>
		<th>Contact No:</th>
		<th>".$contact1."</th>
	</tr>
	<tr>
		<th>Whatsapp No:</th>
		<th>".$contact1."</th>
	</tr>
	<tr>
		<th>Sender Details</th>
		<th>IP:".$vis_ip."<br/>
		    Country:".$sender_country."<br/>
		    City:".$sender_city."<br/></th>
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
$headers .= 'Cc: toursforsrilanka@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

?>