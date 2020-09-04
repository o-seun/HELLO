<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php?">LIST</a></h1>
    <ul>
      <li><a href="index.php?id=html">NUM1</a></li>
      <li><a href="index.php?id=css">NUM2</a></li>
      <li><a href="index.php?id=javascript">NUM3</a></li>
    </ul>

    <h2>
      <?php
        if(isset($_GET['id'])){
          echo $_GET['id'];
        } else {
          echo 'Welcome';
        }
       ?>
    </h2>

    <?php
      if(isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
      } else {
        echo 'text';
      }
     ?>
  </body>
</html>
