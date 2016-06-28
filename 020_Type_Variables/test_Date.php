<?php
  $x = getdate(); //getdate日期時間轉為陣列
  echo gettype($x), "<br>"; //gettype可得到型態

  $x = date('Y-m-d H:i:s');//標準php時間日期格式
  echo $x, "<br>","<hr>";// 呼叫x
  echo gettype($x), "<br>";//gettype可得到型態

  $x = gmdate('Y-m-d H:i:s');//gmdate 抓取格林威治標準時間
  echo $x, "<br>","<hr>";//呼叫x
  
  $x = strtotime(gmdate('Y-m-d H:i:s'));//gmdate 抓取格林威治標準時間再將strtotime將數值轉為時間戳
  echo $x, "<br>";//呼叫x 
  echo gettype($x), "<br>";//gettype可得到型態

?>