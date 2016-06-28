<?php
  $d = mktime(13, 30, 0, 9, 10, 2012);//mktime可以將數值依照格式創造時間
  echo $d;
  echo "<br>";
  echo date("Y-m-d H:i:s", $d);
?>
