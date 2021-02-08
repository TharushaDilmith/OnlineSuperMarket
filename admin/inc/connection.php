<?php 

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'supermarket'; 

	$connection = mysqli_connect('localhost:3308', 'root', 'tharusha123', 'supermarket');

	// Checking the connection
	if (mysqli_connect_errno()) {
		die('Database connection failed ' . mysqli_connect_error());
	}

?>