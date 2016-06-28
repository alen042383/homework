<?php
header("content-type: text/html; charset=utf-8");

$season = array('春', '夏', '秋', '冬'); 

echo "每年的四季分別為：";
foreach ($season as $value){//as代入 foreach=讓陣列的每一個讀取出來 有幾項跑幾次
	echo $value;
}

?>