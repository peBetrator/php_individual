<?php
	$servername = $_SERVER['SERVER_NAME'];
	$username = "root";
	$password = "";
	$db_name = "news";
	
	$conn = mysqli_connect($servername, $username, $password, $db_name);
	if (!$conn)
		die("No connection: " . mysqli_connect_error());
?>