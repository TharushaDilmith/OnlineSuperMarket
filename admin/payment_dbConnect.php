<?php



//connect to the data base
$db = new mysqli("localhost:3308","root","tharusha123","supermarket");

//display connection error

if($db->connect_errno)
{
	printf("Database connection error : %s\n", $db->connect_errno);
	exit();
}
?>