<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>LIST</h1>
    <ul>
      <li><a href="index.php?id=NUM1">NUM1</a></li>
      <li><a href="index.php?id=NUM2">NUM2</a></li>
      <li><a href="index.php?id=NUM3">NUM3</a></li>
    </ul>

    <h2>
      <?php
        echo $_GET['id'];
       ?>
    </h2>
  </body>
</html>
