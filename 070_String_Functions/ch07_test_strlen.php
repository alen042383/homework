<?php
  header("content-type: text/html; charset=utf-8");
  $s = '許功蓋';
  echo $s."<br>";//輸出許功蓋
  echo strlen($s);//輸出utf-8編碼 一個中文字3bytes
?>