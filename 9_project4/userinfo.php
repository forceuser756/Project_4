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
                <div class="subSection">
                    <h1>User Information</h1>
                    <h2><?php echo date("m/d/Y"); ?></h2>
                </div>
                <div class="subSection">
                    <?php $query=$mysqli->query("SELECT * FROM userinfo");
                    if ($result = $mysqli->query($query)){
                        while ($row = $result->fetch_assoc()) {
                            $username = $row["col2"];
                            $email = $row["col3"];

                            echo '<tr>
                                    <td>'.$username.'</td>
                                    <td>'.$email.'</td>
                                  </tr>';
                        }
                        $result->free();
                    }
                     ?>
                 </div>
                 </body>
                 </html>
