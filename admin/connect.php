<?php
	 $connection = mysqli_connect('localhost:3308','root',"tharusha123",'supermarket');
	$bitNo = $_POST['bitno'];
	$itemName = $_POST['select_item'];

	$addBitPoint = $_POST['add_bit'];

	//Database Connection
	$query = "INSERT INTO bitpoints(bitNo,itemID,addBitPoint) VALUE('{$bitNo}','{$itemName}','{$addBitPoint }')";

	$query_run = mysqli_query($connection,$query);

?>