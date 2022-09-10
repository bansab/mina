<?php

$dbServName='localhost';
$dbAdName='root';
$dbPwd='';
$dbName='mina';

$dbConnection=mysqli_connect($dbServName,$dbAdName,$dbPwd,$dbName);
if(!$dbConnection){
	die("connection failed:".mysqli_connect_error());
}
//echo "connected successfully";

?>