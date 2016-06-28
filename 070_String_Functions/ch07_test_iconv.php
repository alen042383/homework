<?php
  // header("content-type: text/html; charset=utf-8");
  header("content-type: text/html; charset=big5");
  $s = "許功蓋";
  echo strlen($s), ", ";//9  // 一個中文是9bytes 
  echo strlen(iconv("UTF-8", "big5", $s));//6//將類型轉成big5 一個是2bytes
  echo "<HR>";
  echo iconv("UTF-8", "big5", $s);//由於將utf-8轉持BIG 5 所以可以輸出許功蓋
?>
