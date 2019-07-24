<?php
// mySQL

$username = getenv('DB_USER');
$password = getenv('DB_KEY');
$servername = "localhost";
$dbname = "advanxhealth";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn){
	die("Connection failed: " . mysqli_connection_error());
}
?>