<?php
  function title() {
    $i = 0;
    $list = scandir('./data');
    while($i < count($list)) {
      if($list[$i] != '.') {
        if($list[$i] != '..') {
          echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
        }
      }
      $i++;
    }
  }

  function text() {
    if(isset($_GET['id'])){
      echo $_GET['id'];
    } else {
      echo 'Welcome';
    }
  }

  function description() {
    if(isset($_GET['id'])){
      echo file_get_contents("data/".$_GET['id']);
    } else {
      echo 'text';
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
        text();
      ?>
    </title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
      function basic() {
        print("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
      }

      basic();
     ?>

    <h2>
      <?php
        title();
       ?>
    </h2>
    <h3>
      <?php
        text();
       ?>
    </h3>

    <?php
      description();
     ?>

    <h2>parameter &amp; argument</h2>
    <?php
      function sum($left, $right) {
        print($left+$right);
        print("<br />");
      }
      sum(2, 4);
      sum(5, 5);
     ?>
  </body>
</html>
