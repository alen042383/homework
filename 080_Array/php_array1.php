<?php
$bloodType[] = 'A';//將字串存入陣列
$bloodType[] = 'B';
$bloodType[] = 'AB';
$bloodType[] = 'O';

for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br />";//利用for迴圈將陣列排列顯示
}
?>