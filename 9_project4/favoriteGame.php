<?php
    session_start();
	$usernameDatabase = $_SESSION["loggedin"]; // Logged in session has username of logged in user, isn't "$username" because of overlap with "connection.php"
	$favoriteGame = $_POST["favoriteGameInput"]; // Takes input from form

    define('db_server', 'students.cah.ucf.edu');
    define('db_username', 'tr303872');
    define('db_password', 'digF0ssum!');
    define('db_database', 'tr303872');
    $conn = mysqli_connect(db_server, db_username, db_password, db_database);

    if($conn === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }

	$sql = "UPDATE userinfo; SET FavoriteGame='$favoriteGame' WHERE Username='$usernameDatabase'"; // Changes FavoriteGame value on table based on username

	mysqli_query($conn, $sql) or die;

	

?>
<h1 style="color:white;background-color: rgba(0, 0, 0, 0.5);text-align: center;font-family: Arial;font-size: 50px;">Your favorite game is: <?php echo $favoriteGame ?> Redirecting...</h1>
<meta http-equiv="refresh" content="5;url=userinfo.php" />
