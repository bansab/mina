<?php
include_once 'db-inc.php';

$patientName = $_POST['pname'];
$patientAge = $_POST['page'];
$patientNum = $_POST['pnum'];
//echo "$patientNum";
if(isset($_POST['doc'])){
	//echo "selected doctor is ".$_POST['doc'];
}
$doctor = $_POST['doc'];
if($_POST['doc']=="Javed"){
	$docId=1;
}
elseif ($_POST['doc']=="Ameen") {
	$docId=2;
}
//echo $docId;
//echo $_POST['time'];
$dat = $_POST['time'];

$sqlStatement = "INSERT INTO patients (ptName, ptAge, docId, dat, phoneNumber) values ('$patientName', '$patientAge', '$docId', '$dat', '$patientNum')";
if(mysqli_query($dbConnection, $sqlStatement)){
	//echo "success";
}
else{
//echo "Error: " . $sqlStatement . "<br>" . mysqli_error($dbConnection);
}

mysqli_close($dbConnection);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://localhost/webdev/mina/mina.css">
	<script src="mina.js"></script>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #fff2e9;
  font-size: 30px;
}

ol{
  margin: 20;
  padding: 50;
  overflow: hidden;
  background-color: #fff2e9;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #fff;
}

h1{
  text-align: center;
}

h3{
  text-align: center;
}

div.container {
  text-align: center;
}

ol.myul {
  display: inline-block;
  text-align: left;
  font-size: 40;
  padding: 30px 30px;
  list-style-type: square;
}

h2{
background-color: #fff2e6;
  text-align:center;
}

</style>
</head>
<body>
<h1>
Mina Health Care
</h1>
<div class="menu">
<ul>
<li><a href="index.html" style="text-decoration: none;">Home</a></li>
<li style="float:center;"><a href="appointment.php" style="text-decoration: none;">Appointments</a></li>
<li style="float:right;"><a href="login.php" style="text-decoration: none;">Login | Register </a></li>
</ul>
</div>
<h2>Appointment booked!</h2>
<h3> if any changes, our representative will get back to you on the given number. <br> Thank you!</h3>
</body>
</html>