<?php
require "connection.php";

$game = $_POST['game'];
$publisher = $_POST['publisher'];
$image = $_POST['image'];


$sql ="INSERT INTO games (name, publisher, image) VALUES ('$game', '$publisher', '$image')";
if (mysqli_query($conn, $sql)){
  echo "Game Created and Entered Into Database";
}
else{
  echo "Failed to Create Game in Database";
}

mysqli_close($conn);
?>
<h1 style="color:white;background-color: rgba(0, 0, 0, 0.5);text-align: center;font-family: Arial;font-size: 50px;">You have successfully created <?php echo $game ?> in the database. This page will update in 5 seconds.</h1>
<meta http-equiv="refresh" content="5;url=gamedatabase.php" />
