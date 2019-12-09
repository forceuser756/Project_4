<?php
require "connection.php";

$username = $_POST['username'];
$password = sha1($_POST['password']);
$email = $_POST['email'];
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';


$error_message = "";

if(isset($_POST['email'])) {
  $email = ($_POST['email']);
}
function error($error) {

    echo "There seems to be errors with your submission.";
    echo $error."<br /><br />";
    echo "Please fill out the form again.<br /><br />";
    die();
  }

  if(!isset($_POST['username']) ||
      !isset($_POST['password']) ||
       !isset($_POST['email'])) {
      error('There seems to be errors with your submission.');
  }


if(!preg_match($email_exp,$email)) {
  $error_message .= 'Input your email address again please.<br />';
}

if(strlen($error_message) > 0) {
  error($error_message);
}

$sql ="INSERT INTO userinfo (username, password, email) VALUES ('$username', '$password', '$email')";
if (mysqli_query($conn, $sql)){
  echo "User Created and Entered Into Database";
}
else{
  echo "Failed to Create User in Database";
}

mysqli_close($conn);
?>
<h1 style="color:white;background-color: rgba(0, 0, 0, 0.5);text-align: center;font-family: Arial;font-size: 50px;">You have successfully created an account, <?php echo $username ?>. You will be redirected to the homepage in 5 seconds.</h1>
<meta http-equiv="refresh" content="5;url=index.php" />
