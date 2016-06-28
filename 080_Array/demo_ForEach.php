<?php

$a = array('1', '2');
foreach ($a as $k => $x)
{
	$x = '3';
}

foreach ($a as $k => $x)
{
	echo "$k => $x <br>";
}
//由於array裡有1和2所以在foreach的迴圈裡加上x=3不會引響
?>