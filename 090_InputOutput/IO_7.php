<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");//fopen(" "."r")r=read w=write  
while (!feof($f))//feof  end of file
{
	$line = fgets($f);//從檔案讀一行出來
	$sData .= Trim($line) . "<br>";//將值串接出去再換行
}
fclose($f);
echo $sData;

?>
