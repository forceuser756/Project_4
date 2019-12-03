<?php

	include "connection.php";

	$connection = mysqli_connect("$server", "$username", "$password", "$databaseName") or die('Error');
	
	/*
	
	$sql = "CREATE TABLE games (

		ID INT(20) NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(ID),
		Title VARCHAR(50) NOT NULL,
		Year VARCHAR(50) NOT NULL,
		Developer VARCHAR(50) NOT NULL,
		Publisher VARCHAR(50) NOT NULL,
		Region VARCHAR(50) NOT NULL,
		Genre VARCHAR(50) NOT NULL
		
	)";
	
	*/
	
	// $sql = "INSERT INTO games (Title, Year, Developer, Publisher, Region, Genre) VALUES ('Super Mario 64', '1996', 'Nintendo', 'Nintendo', 'JP, NA, PAL', 'Action/Adventure/3D Platformer')";
	
	$array = array();
	
	$array[0] = "Mario Golf"; // Title
	$array[1] = "1999"; // Year
	$array[2] = "Angel Studios"; // Developer
	$array[3] = "Nintendo"; // Publisher
	$array[4] = "NA, PAL"; // Region
	$array[5] = "Sports/Baseball"; // Genre
	
	$sql = "INSERT INTO games (Title, Year, Developer, Publisher, Region, Genre) VALUES ('$array[0]', '$array[1]', '$array[2]', '$array[3]', '$array[4]', '$array[5]')";
	
	mysqli_query($connection, $sql) or die(mysql_error());

?>