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
 $country=  explode("/",$_POST['c3']);
 $comments=$_POST['c4'];
 $pno=$_POST['c5'];
 $adate=$_POST['c6'];
 $ddate=$_POST['c7'];



 function getVisIpAddr() {
      
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
  
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
$subject = "Customer Inquiry ";

$comments = "
<html>
<head>
 <title>Customer Inquiry </title>
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
		<th>".$country[1]."</th>
	</tr>

	<tr>
		<th>Contact No:</th>
		<th>+".$pno."</th>
	</tr>

	<tr>
		<th>Arrivel Date::</th>
		<th>".$adate."</th>
	</tr>

	<tr>
		<th>Departure Date:</th>
		<th>".$ddate."</th>
	</tr>

	<tr>
		<th>Sender Details</th>
		<th>IP:".$vis_ip."<br/>
		    Country:".$sender_country."<br/>
		    City:".$sender_city."<br/></th>
	</tr>
	

</table>
<p>".$comments."</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";
$headers .= 'Cc: toursforsrilanka@gmail.com' . "\r\n";

mail($to,$subject,$comments,$headers);

?>