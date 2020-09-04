<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>function</h1>
    <?php
      $str = "좌, 우익은 새의 양 날개와 같아서 세상을 끌고 가는 두  축이라 시대 상황에 따라 득세를 넘겨주고 받을 수 있다.
      그리고 시대가 바뀜에 따라 진보는 더 새로운 진보에게 밀려나기도 한다.
      그리고 보수는 대중의 지지를 잃지 않으려고 사회적 책임을 다하는 한편  끊임없는 자기혁신을 하면서 생명력을 유지해가고 있다.

      300년 역사를 자랑하는 영국의 경우 처럼.";
      echo $str;
     ?>

    <h2>strlen()</h2>
      <?php
        echo strlen($str);
      ?>

    <h2>nl2br</h2>
      <?php
        echo nl2br($str);
      ?>
  </body>
</html>
