<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php?">while</a></h1>

    <?php
      echo "1<br />";
      $i = 0;
      while($i<3) {
        echo '2<br />';
        $i++;
      }
      echo "3";
     ?>
  </body>
</html>
