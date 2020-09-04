<?php
  function title() {
    $i = 0;
    $list = scandir('./data');
    while($i < count($list)) {
      $title = htmlspecialchars($list[$i]);
      if($list[$i] != '.') {
        if($list[$i] != '..') {
          echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";
        }
      }
      $i++;
    }
  }

  function subtitle() {
    if(isset($_GET['id'])){
      echo htmlspecialchars($_GET['id']);
    } else {
      echo 'Welcome';
    }
  }

  function description() {
    if(isset($_GET['id'])) {
      $basename = basename($_GET['id']);
      echo htmlspecialchars(file_get_contents("data/".$basename));
    } else {
      echo 'description';
    }
  }
?>
