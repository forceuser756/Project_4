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
                <h1>Create Account</h1>
                <div class="subSection">
                        <form method="post" action="accountValidation.php">
                            <label for="username">Username:</label>
                            <input name="username" id="username" type="text"/><br/>
                            <label for="password">Password:</label>
                            <input name="password" id="password" type="text"/><br/>
                            <label for="email">Email:</label>
                            <input name="email" id="email" type="text"/><br/>
                            <input name="submit" id="submit" type="submit" value="Create Account"/><br/>
                        </form>
                </div>
            </div>
        </div>
            </body>
        </html>
