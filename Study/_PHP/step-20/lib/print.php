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

  function subtitle() {
    if(isset($_GET['id'])){
      echo $_GET['id'];
    } else {
      echo 'Welcome';
    }
  }

  function description() {
    if(isset($_GET['id'])) {
      echo file_get_contents("data/".$_GET['id']);
    } else {
      echo 'description';
    }
  }
?>
