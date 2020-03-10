<?php
	$servername="localhost";
	$username="root";
	$password="";
	$conn=mysqli_connect($servername,$username,$password);
	if(!$conn)
		die('Cannot connect'.mysqli_error());
	$query="CREATE DATABASE Bakery";
	$db=mysqli_query($conn,$query) or die ('cannot create database'.mysqli_connect_error());
	mysqli_select_db($conn,"Bakery");
	$query="CREATE TABLE user
	(
		userid char(4) PRIMARY KEY,
		fname varchar(30) NOT NULL,
		lname varchar(30) NOT NULL,
		email varchar(30) NOT NULL,
		contact_no varchar(10),
		username varchar(30) NOT NULL,
		password varchar(40) NOT NULL,
		role varchar(20) NOT NULL
	)";
	$tblusr=mysqli_query($conn,$query) or die ('cannot create table user'.mysqli_error($conn));
	$query="CREATE TABLE food
	(
		foodid char(4) PRIMARY KEY,
		foodname varchar(30) NOT NULL,
		catogory varchar(30) NOT NULL,
		quantity int NOT NULL,
		price decimal NOT NULL
	)";
	$tblfood=mysqli_query($conn,$query) or die ('cannot create table food'.mysqli_error($conn));
	$query="CREATE TABLE outlet
	(
		outletid char(4) PRIMARY KEY,
		outletname varchar(30) NOT NULL
	)";
	$tblout=mysqli_query($conn,$query) or die ('cannot create table outlet'.mysqli_error($conn));
?>