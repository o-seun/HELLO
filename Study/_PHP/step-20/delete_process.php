<?php
  unlink('data/'.$_POST['id']);
  header('Location: /step-19/index.php');
?>
