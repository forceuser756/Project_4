<?php

$server = "students.cah.ucf.edu";
$username = "ca631855";
$password = "Abcdef1@";
$databaseName = "ca631855";

$connection = mysqli_connect("$server", "$username", "$password", "$databaseName") or die('Error');

$sql = "CREATE TABLE userpass (

		ID INT(20) NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(ID),
		Username VARCHAR(50) NOT NULL,
		Password VARCHAR(50) NOT NULL,
		Email VARCHAR(100) NOT NULL
		
	)";
	
mysqli_query($connection, $sql) or die(mysql_error());

?>