<?php
$f = fopen("pick3.txt", "r");//用fopen的方式把檔案讀出來 read
while (!feof($f))
{
	$line = fgets($f);//將每一列的文字列出來
	echo "$line<br>";//
}
fclose($f);
echo "--End--";//在最後一列之前顯示--END--
?>