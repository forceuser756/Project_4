<?php

// This is the login page

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
	
	<?php
	
	if(!isset($_SESSION["loggedin"])) {
	
		echo '
		<h2>Login</h2>
		<form action="loginValidation.php" method="post">
			<span>Username:</span>
			<br>
			<input type="text" name="loginUsername">
			<br><br>
			<span>Password:</span>
			<br>
			<input type="text" name="loginPassword">
			<br><br>
			<input type="submit">
		</form>';
	} else {
		echo '<br>You are logged in.';
	}
	
	?>
		
</body>
</html>