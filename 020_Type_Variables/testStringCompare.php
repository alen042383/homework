<?php

$x = "ABC";
$y = "AB";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";
//當ABC與AB比較時，ABC會大於AB

$x = "ABC";
$y = "BA";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";
//當ABC與BA比較時，由於B跟A比，所以BA會大於ABC

$x = "123";
$y = "12";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";
//當123與12比較時，123>12
$x = "123";
$y = "21";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";
//當123與21比較時，123>21	
//結論是英文字串會受到排列引響大小，而數值不會		
?>