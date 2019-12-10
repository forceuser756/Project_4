<?php

// This is the search page

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
	
	<h2>Search</h2>
	
	<form action="" method="post">
		<input type="text" name="search">
		<br><br>
		<input type="submit" name="submit">
	</form>
		
	<?php

		if(isset($_POST['submit'])) {
			
			$search_value=$_POST["search"];
		
			$_SESSION["lastsearch"] = $search_value;
		
			include 'connection.php';
			
			$sql="select * from games where Title like '%$search_value%'"; // games, Title
			
			$res=$connection->query($sql);
			
			while($row=$res->fetch_assoc()){
            echo '<br><br>Game:  '.$row["Title"].'<br>Year:  '.$row["Year"].'<br>Developer:  '.$row["Developer"].'<br>Publisher:  '.$row["Publisher"].'<br>Region:  '.$row["Region"].'<br>Genre:  '.$row["Genre"];
			}
		
		}
		
	?>
	
</body>
</html>