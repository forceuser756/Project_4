<?php

// This is the connection file for project 4

$server = "students.cah.ucf.edu";
$username = "ca631855";
$password = "Abcdef1@";
$databaseName = "ca631855";

$connection = mysqli_connect("$server", "$username", "$password", "$databaseName") or die('Error');

?>