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

                    <h1>User Information</h1>
                    <h2><?php echo date("m/d/Y"); ?></h2>
                    <?php
                    define('db_server', 'students.cah.ucf.edu');
                    define('db_username', 'tr303872');
                    define('db_password', 'digF0ssum!');
                    define('db_database', 'tr303872');
                    $conn = mysqli_connect(db_server, db_username, db_password, db_database);

                        echo '<p>Hello, '.$_SESSION["username"].'.</p>'; // Displays username which is stored in a session upon logging in
			            echo '<br><br>';
                        echo '<p>Your last search was: '.$_SESSION["lastsearch"].'</p>';  // Displays last search which is stored in a session from search page
			            echo '<br><br>';

                        $usernameDatabase = $_SESSION["loggedin"]; // This is just the username of the user

		                $sql = "SELECT FavoriteGame FROM userinfo WHERE username='$usernameDatabase'"; // Finds favorite game from table
		                $result = mysqli_query($conn, $sql) or die;

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
                </div>
            </div>
                 </body>
                 </html>
