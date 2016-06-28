<?php
  //$d = strtotime("2012-09-10");//strotime將數值轉為時間戳
   $d = strtotime("2012-09-10 -3 days");//由於strotime轉為間戳，-3 days可以減掉三天
  // $d = strtotime("2012-09-10 +1 month");//由於strotime轉為間戳，-3 days可以減掉三天
  echo $d;//呼叫d
  echo "<br>";
  echo date("Y-m-d", $d);
?>
