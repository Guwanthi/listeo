<?php
session_start();
date_default_timezone_set('Asia/Colombo');
$time=date("H:i:s", time());
$date=date("Y-m-d");

//include '../model/DB.php';
//include '../model/function.php';

 $name=$_POST['c1']; 
 $email=$_POST['c2'];
 $country=$_POST['c3'];
 $contact=$_POST['c4'];
 $adult=$_POST['c5'];
 $child=$_POST['c6'];
 $infant=$_POST['c7'];
 $pickup=$_POST['c8'];
 $plocation1=$_POST['c9'];
 $dlocation1=$_POST['c10'];
 $pdate1= $_POST['c11'];
 $ptime1=$_POST['c12'];
 $drop=$_POST['c13'];
 $plocation2= $_POST['c14'];
 $dlocation2= $_POST['c15'];
 $pdate2= $_POST['c16'];
 $ptime2=$_POST['c17'];
 $roundtour=$_POST['c18'];
 $plocation3=$_POST['c19'];
 $adate3= $_POST['c20'];
 $time3=$_POST['c21'];
 $ddate3=$_POST['c22'];
 $execution= $_POST['c23'];
 $plocation4= $_POST['c24'];
 $adate4= $_POST['c25'];
 $time4=$_POST['c26'];
 $ddate4=$_POST['c27'];
 $msg=$_POST['c28'];
 
 $p = "";
 $d = "";
 $r = "";
 $e = "";

 if($pickup==true){
     $p = "<tr>
		<th>Tour Information :Pick Up</th>
		<th>Pick Up Place : ".$plocation1." Drop Off Place : ".$dlocation1."  Date : ".$pdate1." Time : ".$ptime1."</th>
	</tr>";
 }

if($drop==true){
    $d = "<tr>
		<th>Tour Information :Drop Off</th>
		<th>Pick Up Place : ".$plocation2." Drop Off Place : ".$dlocation2."  Date : ".$pdate2." Time : ".$ptime2."</th>
	</tr>";
}

if($roundtour==true){
    $r = "<tr>
		<th>Tour Information : Round Tour</th>
		<th>Pick Up Place : ".$plocation3." Arrival Date : ".$adate3."  Time : ".$time3." Departure Date : ".$ddate3."</th>
	</tr>";
}

if($execution==true){
    $e = "<tr>
		<th>Tour Information : Execution</th>
		<th>Pick Up Place : ".$plocation4." Arrival Date : ".$adate4."  Time : ".$time4." Departure Date : ".$ddate4."</th>
	</tr>";
}

 // Store the IP address
//$vis_ip = getVisIPAddr();
  
// Display the IP address
//$ip = $vis_ip;

// Use JSON encoded string and converts
// it into a PHP variable
//$ipdat = @json_decode(file_get_contents(
  //  "http://www.geoplugin.net/json.gp?ip=" . $ip));
   
  //$sender_country= $ipdat->geoplugin_countryName;
  // $sender_city= $ipdat->geoplugin_city;

 
$to = "info@ceylonnaturelandtours.com";
$subject = "AIRPORT PICK ";

$message = "
<html>
<head>
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
		<th>Contact No:</th>
		<th>".$contact."</th>
	</tr>
	
	<tr>
		<th>Country:</th>
		<th>".$country."</th>
	</tr>

	<tr>
		<th>Personal:</th>
		<th>Adult : ".$adult." Child : ".$child."  Infant : ".$infant."</th>
	</tr>
	
	".$p."  ".$d."  ".$r."  ".$e."

</table>
<p>".$msg."</p>
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