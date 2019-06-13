<?php include 'lab8.php'; ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./style.css">
  <title>PowerBook</title>
</head>
<body>
  <header>
    Apple Computers
  </header>

  <nav>
      <a href="./ibook.php">iBook</a>
      <a href="./powerbook.php">PowerBook</a>
      <a href="./macbook-pro.php">MacBook Pro</a>
      <a href="./macbook-air.php">MacBook Air</a>
      <a href="./lab8table.php">История</a>
  </nav>

  <article>
    <?php
      $inp = file_get_contents('results.json');
      $tempArray = json_decode($inp);
      $count = array();
      foreach($tempArray as $item) {
        if (array_key_exists($item, $count)) {
          $count[$item] = $count[$item] + 1;
        } else {
          $count[$item] = 1;
        }
      }

      echo "<table>";
      foreach($count as $browser => $i) {

        echo "<tr>";
        echo "<td>".$browser."</td>";
        echo "<td>".$i."</td>";
        echo "</tr>";
      }
      echo "</table>";
    ?>
  </article>
</body>
</html>
