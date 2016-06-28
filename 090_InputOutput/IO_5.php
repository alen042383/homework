<?php
header("content-type: text/html; charset=utf-8");//設定網頁格式以及編碼格式
	$contents = file_get_contents('data.txt');//將檔案加進來
	echo (str_replace("\r\n", "<br />", $contents));//將換行的地以<br />來換行
?>