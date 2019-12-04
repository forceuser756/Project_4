<?php
require "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="styles/main.css" rel="stylesheet">
    </head>
    <body>
        <div class="content">
            <div class="header">
                <div class="main-nav">
                    <li><a href="login.php">Login</a></li>
                    <li><a href="accountCreate.php">Create Account</a></li>
                </div>
            </div>
            <div class="background">
                <div class="subSection">
                    <h1>Login</h1>
                </div>
            <div class="subSection">
                    <form action="" method="post">
                        <input type="text" name="username" id="username" placeholder="enter username"/>
                        <br>
                        <input type="text" name="password" id="password" placeholder="enter password"/>
                        <br>
                        <input type="submit" name="login" id="login" value="login"/>
                    </form>
            </div>
        </div>
    </body>
</html>
