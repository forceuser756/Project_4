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
                    <h1>Nintendo 64 Database</h1>
                    <h2><?php echo date("m/d/Y"); ?></h2>
                </div>
                <div class="subSection">
  <p>Listed below are all games from the Nintendo 64</p>
  <div class="form=signin">
      <form method="post" action="accountValidation.php">
  <table>
    <tr>
      <th>Game</th>
      <th>Publisher</th>
      <th>Image</th>
      <th>Favorites</th>
    </tr>
    <tr>
      <td>007: The World Is Not Enough</td>
      <td>Electronic Arts</td>
      <td><img src="https://images.launchbox-app.com/b2e94fbd-9b03-4b3a-b5be-3a497fc56ada.jpg" width=200></td>
    </tr>
    <tr>
      <td>1080º Snowboarding</td>
      <td>Nintendo</td>
      <td><img src="https://images.launchbox-app.com/baa77dac-dfdc-47d9-bcf6-32c32113ade8.jpg" width=200></td>
    </tr>
    <tr>
      <td>40 Winks</td>
      <td>Eurocom</td>
      <td><img src="https://images.launchbox-app.com/96977e70-0f18-45d3-8298-8f42df3e4b8b.jpg" width=200></td>
    </tr>
  </table>
