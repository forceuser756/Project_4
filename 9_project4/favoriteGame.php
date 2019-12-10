<?php

	session_start();

	$usernameDatabase = $_SESSION["loggedin"]; // Logged in session has username of logged in user, isn't "$username" because of overlap with "connection.php"

	$favoriteGame = $_POST["favoriteGameInput"]; // Takes input from form
		
	include 'connection.php';
		
	$sql = "UPDATE userpass SET FavoriteGame='$favoriteGame' WHERE Username='$usernameDatabase'"; // Changes FavoriteGame value on table based on username
		
	mysqli_query($connection, $sql) or die;
	
	header("Location: profile.php"); // Takes user back to profile page
	
?>