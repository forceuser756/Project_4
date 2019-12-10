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
	
</body>
</html>