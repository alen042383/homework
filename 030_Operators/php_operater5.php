<?php
  $x = 1;
 // $y = $x++;
 $y = $x;
 $x++;
  echo "x = $x, y = $y";
  echo "<br>";

  $x = 1;
  //$y = ++$x;
  $x++;
  $y = $x;
  echo "x = $x, y = $y"; //++寫前面先做 ++寫後面後來做
?>
