<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
      $coworkers = array('one', 'two', 'three', 'four');
      echo $coworkers[0].'<br />';
      echo $coworkers[2].'<br />';
      echo $coworkers[3].'<br />';
      var_dump(count($coworkers));
      array_push($coworkers, 'five');
      var_dump($coworkers);
     ?>
  </body>
</html>
