<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "line1\nline2\nLine3\n";
$dataArray = explode("\n", $sData);//將字串拆解成陣列
$f = fopen("data2.txt", "w");
foreach ($dataArray as $line) {
	fputs($f, $line . "\n", strlen($line) + 1);
}
fclose($f);
echo "-- Done --"

?>
