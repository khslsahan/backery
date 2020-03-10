<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="";
	$conn=mysqli_connect($servername,$username,$password,$database);
	if(!$conn)
		die('Connetion Failure'.mysqli_error($conn));
	else
		echo "connected";
?>