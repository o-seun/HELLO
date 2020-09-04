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

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
        subtitle();
      ?>
    </title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>

    <h2>
      <?php
        title();
       ?>
    </h2>

    <h2>
      <?php
        subtitle();
      ?>
    </h2>

    <h3>
      <?php
        description();
      ?>
    </h3>

    <br />
    <a href="create.php">create</a>

    <?php
      if(isset($_GET['id'])) { ?>
        <a href="update.php?id=<?=$_GET['id'] ?>">update</a>
    <?php } ?>

    <form action="update_process.php" method="post">
      <input type="hidden" name="old_title" value="<?=$_GET['id']?>" />
      <p>
        <input type="text" name="title" placeholder="Title" value="<?php subtitle(); ?>">
      </p>
      <p>
        <textarea name="description" placeholder="Description"><?php description(); ?></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
  </body>
</html>
