<?php
  file_put_contents('data/'.$_POST['title'], $_POST['description']);
  header('Location: /step-17/index.php?id='.$_POST['title']);
?>
