<?php

	// This adds a favorite game column to username/password table
	
	/* 
	
	connection.php:
	
	$server = "students.cah.ucf.edu";
	$username = "ca631855";
	$password = "Abcdef1@";
	$databaseName = "ca631855";

	$connection = mysqli_connect("$server", "$username", "$password", "$databaseName") or die('Error');
	
	*/

	session_start();
	
	include "connection.php";
	
	$usernameDatabase = $_SESSION["loggedin"];
			
	$sql = "ALTER TABLE userpass ADD FavoriteGame VARCHAR(50)";
	
	$result = mysqli_query($connection, $sql) or die;
	
?>