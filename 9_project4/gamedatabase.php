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

  <div class="form=signin">
      <p>Enter games that we may have missed, and they will appear at the bottom of the table!</p>
      <p>Just keep in mind, the image link cannot be longer than 255 characters.</p>
          <form method="post" action="gameValidation.php">
              <label for="game">Game:</label>
              <input name="game" id="game" type="text"/><br/><br/>
              <label for="publisher">Publisher:</label>
              <input name="publisher" id="publisher" type="text"/><br/><br/>
              <label for="image">Image Link:</label>
              <input name="image" id="image" type="text"/><br/><br/>
              <input name="submit" id="submit" type="submit" value="Insert Game"/><br/>
          </form>
          <br />
    <p>Listed below are all games from the Nintendo 64, plus any you may have added!</p>
  <table>
    <tr>
      <th>Game</th>
      <th>Publisher</th>
      <th>Image</th>
      <th>Favorites</th>
    </tr>
    <tr>
      <?php
      define('db_server', 'students.cah.ucf.edu');
      define('db_username', 'tr303872');
      define('db_password', 'digF0ssum!');
      define('db_database', 'tr303872');
      $conn = mysqli_connect(db_server, db_username, db_password, db_database);

      if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
      }



      $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 1");
      while($row = mysqli_fetch_array($result))
      //$idList = mysqli_query($conn, "SELECT COUNT(*) ID total from games");

      {
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['publisher'] . "</td>";
          echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
      }
      ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 2");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 3");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
      <?php
      $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 4");
      while($row = mysqli_fetch_array($result))
      {
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['publisher'] . "</td>";
          echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
      }
      ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 5");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 6");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 7");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 8");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
      <?php
      $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 9");
      while($row = mysqli_fetch_array($result))
      {
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['publisher'] . "</td>";
          echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
      }
      ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 10");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 11");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 12");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 13");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
      <?php
      $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 14");
      while($row = mysqli_fetch_array($result))
      {
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['publisher'] . "</td>";
          echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
      }
      ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 15");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 16");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 17");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 18");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
      <?php
      $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 19");
      while($row = mysqli_fetch_array($result))
      {
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['publisher'] . "</td>";
          echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
      }
      ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 20");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 21");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 22");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 23");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
      <?php
      $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 24");
      while($row = mysqli_fetch_array($result))
      {
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['publisher'] . "</td>";
          echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
      }
      ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 25");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 26");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 27");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 28");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
      <?php
      $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 29");
      while($row = mysqli_fetch_array($result))
      {
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['publisher'] . "</td>";
          echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
      }
      ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 30");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 31");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 32");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 33");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
      <?php
      $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 34");
      while($row = mysqli_fetch_array($result))
      {
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['publisher'] . "</td>";
          echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
      }
      ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 35");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 36");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 37");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 38");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
      <?php
      $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 39");
      while($row = mysqli_fetch_array($result))
      {
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['publisher'] . "</td>";
          echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
      }
      ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 40");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM games WHERE ID = 41");
        while($row = mysqli_fetch_array($result))
        {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . "<img src=" . $row['image'] . " width=200>" . "</td>";
        }
        ?>
    </tr>
  </table>
