<?php

// This is the profile page

session_start();

?>

<html>
<head>

<style>

	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}

	li {
		float: left;
	}

	li a {
		display: block;
		color: black;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	li a:hover {
		background-color: #111;
		color: white;
	}
	
</style>

</head>

<body>

<h1>Nintendo 64 Games</h1>
<hr>

	<div style="width:100%; border: 1px solid black">
		<ul>
			<li><a href="index.php">Login</a></li>
			<li><a href="accountCreation.php">Account Creation</a></li>
			<li><a href="search.php">Search</a></li>
			<li><a href="profile.php">Profile</a></li>
		</ul>
	</div>
	
	<h2>Profile</h2>
	
	<?php
	
		error_reporting(0); // Prevents notice from showing up
	
		if(isset($_SESSION["loggedin"])) {
			echo 'Hello, '.$_SESSION["loggedin"].'.'; // Displays username which is stored in a session upon logging in
			echo '<br><br>';
		}
	
		if(isset($_SESSION["lastsearch"])) {
			echo 'Your last search was '.$_SESSION["lastsearch"].'.';  // Displays last search which is stored in a session from search page
			echo '<br><br>';
		}
	
		/*
		
		if(isset($_SESSION["loggedin"])) {
		echo "
		<form action='favoriteGame.php' method='post'>
			<p>What's your favorite game?</p>
			<input type='text' name='favoriteGameInput'>
			<br><br>
			<input type='submit' name='submit'>
		</form>";
		}
	
		*/
		
		include "connection.php";
	
		$usernameDatabase = $_SESSION["loggedin"]; // This is just the username of the user
	
		$sql = "SELECT FavoriteGame FROM userpass WHERE Username='$usernameDatabase'"; // Finds favorite game from table
		$result = mysqli_query($connection, $sql) or die;
		
		$row = mysqli_fetch_array($result);
		
		$x = 0;
		
		if (!is_null($row['FavoriteGame'])) { // Have to use a loop to display value from table idk why
			while($row && $x <= 0) { // Prevents this from infinite loading and crashing the page
				echo 'Your favorite game is '.$row['FavoriteGame'].'.'; // Print a single column data
				$x++; // Prevents this from infinite loading and crashing the page
			}} else { // This is what is shown if value is Null which is the default because I did not use NOT NULL when making the table on test3.php
				echo "
				<form action='favoriteGame.php' method='post'>
					<p>What's your favorite game?</p>
					<input type='text' name='favoriteGameInput'>
					<br><br>
					<input type='submit' name='submit'>
				</form>";
			}
	
	?>
	
</body>
</html>