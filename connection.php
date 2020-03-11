<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="bakery";
	$conn=mysqli_connect($servername,$username,$password,$database);
	if(!$conn)
		die('Connetion Failure'.mysqli_error($conn));
?>
