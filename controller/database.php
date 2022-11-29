<?php
$username = "root";
$password = "";
$hostname = "localhost";

//connection to the database
$conn = mysqli_connect($hostname, $username, $password)
	or die("Unable to connect to MySQL");
// echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysqli_select_db($conn, "asm2")
	or die("Could not select asm2");
?>