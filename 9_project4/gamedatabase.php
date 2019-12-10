<?php
require "loginValidation.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Nintendo 64 Database</title>
        <link href="styles/main.css" rel="stylesheet">
    </head>
    <body>
        <div class="content">
            <div class="header">
                <div class="main-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="gamedatabase.php">Games</a></li>
                    <li><a href="userinfo.php">Account Info</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </div>
            </div>
            <div class="background">

                    <h1>Nintendo 64 Database</h1>
                    <h2><?php echo date("m/d/Y"); ?></h2>



  <div class="form=signin">
      <p>Enter games that we may have missed, and they will appear at the bottom of the table!</p>
      <p>Just keep in mind, the image link cannot be longer than 255 characters.</p>
          <form method="post" action="gameValidation.php">
              <label for="title">Title:</label>
              <input name="title" id="title" type="text"/><br/><br/>
              <label for="year">Year:</label>
              <input name="year" id="year" type="text"/><br/><br/>
              <label for="publisher">Publisher:</label>
              <input name="publisher" id="publisher" type="text"/><br/><br/>
              <label for="genre">Genre:</label>
              <input name="genre" id="genre" type="text"/><br/><br/>
              <label for="image">Image Link:</label>
              <input name="image" id="image" type="text"/><br/><br/>
              <input name="submit" id="submit" type="submit" value="Insert Game"/><br/>
          </form>
      </div>

          <br />
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

            define('db_server', 'students.cah.ucf.edu');
            define('db_username', 'tr303872');
            define('db_password', 'digF0ssum!');
            define('db_database', 'tr303872');
            $conn = mysqli_connect(db_server, db_username, db_password, db_database);

            if($conn === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
            }

			$sql="select * from gameinfo where title like '%$search_value%'"; // games, Title

			$res=$conn->query($sql);

			while($row=$res->fetch_assoc()){
                echo "<table>";
                echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['publisher'] . "</td>";
                echo "<td>" . $row['genre'] . "</td>";
                echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
                echo "</tr>";
                echo "</table>";
			}

		}

	?>
</div>
</div>
</body>
</html>
