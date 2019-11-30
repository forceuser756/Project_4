<?php

session_start();

$loginUsername = $_POST["loginUsername"];

$loginPassword = $_POST["loginPassword"];

$passwordEncrypted = sha1($loginPassword);

include 'connection.php';

$query = mysqli_query($connection, "SELECT * FROM userpass WHERE Password='$passwordEncrypted' AND Username='$loginUsername'");

$rows = mysqli_num_rows($query);

if($rows == 1) {
		
	$_SESSION["loggedin"] = "This is a test.";
	
	if(isset($_SESSION["notloggedin"])) {
		unset($_SESSION["notloggedin"]);
	}
	
	header("Location: index.php");
	
} else {
	
	$_SESSION["notloggedin"] = "This is also a test.";
	
	if(isset($_SESSION["loggedin"])) {
		unset($_SESSION["loggedin"]);
	}
	
	header("Location: index.php");
	
}

mysqli_close($connection);

?>