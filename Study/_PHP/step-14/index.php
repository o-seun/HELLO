<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>

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

    <h2>parameter &amp; argument</h2>
    <?php
      function sum($left, $right) {
        print($left+$right);
        print("<br />");
      }
      sum(2, 4);
      sum(5, 5);
    ?>

    <h2>return</h2>
    <?php
      function sum2($left, $right) {
        return $left+$right;
      }
      print(sum2(2, 5));
      file_put_contents('result.txt', sum2(2, 5));
      // email('ok@ok.net', sum2(2, 5));
      // upload('ok.net', sum2(2, 5));
    ?>
  </body>
</html>
