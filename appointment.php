<?php
include_once 'db-inc.php'

?>

<html>
<head><title>MINA HEALTH CARE</title>
<link rel="stylesheet" href="http://localhost/webdev/mina/mina.css">
<script src="mina.js"></script>
<style type="text/css">
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
</style>
</head>
<body>
<div>
<h1>Mina Health Care
</h1>
<div class="menu">
<ul>
<li><a href="index.html" style="text-decoration: none;">Home</a></li>
<li style="float:center;"><a href="appointment.php" style="text-decoration: none;">Appointments</a></li>
<li style="float:right;"><a href="login.php" style="text-decoration: none;">Login | Register </a></li>
</ul>
</div>
</div>
<div>
	
	<form action="submit.php" method="POST" onsubmit="submit.php">
		<h4>Enter Patient Name
		<input type="text" name="pname"></h4>
		<h4>Enter Patient Age
		<input type="text" name="page"></h4>
		<h4>Enter mobile number
		<input type="text" name="pnum"></h4>
		<h4>Select Doctor for consultation
		<input type="radio" name="doc" id="1" value="Javed"> 
		<label for="1">Dr. Javed Mohsin</label>
		<input type="radio" name="doc" id="2" value="Ameen">
		<label for="2">Dr. Ameen</label>
		</h4>
		<h4>Select the suitable time for appointment
		<input type="datetime-local" name="time"></h4>
		<input type="submit" value="submit">
	</form>
</div>
</body>
</html>`