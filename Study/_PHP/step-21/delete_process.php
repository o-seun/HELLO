<?php
  unlink('data/'.basename($_POST['id']));
  header('Location: /step-19/index.php');
?>
