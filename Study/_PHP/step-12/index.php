<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php?">LIST</a></h1>
    <?php
      $list = scandir('./data');
      $i = 0;
      while($i < count($list)) {
        if($list[$i] != '.') {
          if($list[$i] != '..') {
            echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
          }
        }
        $i++;
      }
     ?>

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
