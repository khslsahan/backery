<?php
	$servername="localhost";
	$username="root";
	$password="";
	$conn=mysqli_connect($servername,$username,$password);
	if(!$conn)
		die('Cannot connect'.mysqli_error($conn));



	$query="CREATE DATABASE IF NOT EXISTS Bakery";
	$db=mysqli_query($conn,$query) or die ('cannot create database'.mysqli_connect_error());
	mysqli_select_db($conn,"Bakery");
	$query="CREATE TABLE IF NOT EXISTS user
	(
		userid int NOT NULL AUTO_INCREMENT,
		fname varchar(30) NOT NULL,
		lname varchar(30) NOT NULL,
		email varchar(30) NOT NULL,
		contact_no varchar(10),
		password varchar(50) NOT NULL,
		role varchar(20) NOT NULL, PRIMARY KEY(userid)
	)";
	$tblusr=mysqli_query($conn,$query) or die ('cannot create table user'.mysqli_error($conn));
	$query="CREATE TABLE IF NOT EXISTS food
	(
		foodid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
		foodname varchar(30) NOT NULL,
		catogory varchar(30) NOT NULL,
		quantity int NOT NULL,
		price decimal NOT NULL
	)";
	$tblfood=mysqli_query($conn,$query) or die ('cannot create table food'.mysqli_error($conn));
	$query="CREATE TABLE IF NOT EXISTS outlet
	(
		outletid char(4) PRIMARY KEY,
		outletname varchar(30) NOT NULL
	)";
	$tblout=mysqli_query($conn,$query) or die ('cannot create table outlet'.mysqli_error($conn));
?>
