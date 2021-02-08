<?php
$servername = "localhost:3308";
$database = "supermarket";
$username = "root";
$password = "tharusha123";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($conn);
?>