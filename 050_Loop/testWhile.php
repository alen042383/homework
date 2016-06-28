<?php
$iSum = 0;
$i = 1;
while ($i <= 10)
{
	$iSum += $i;
	$i += 1;
}
echo $iSum;

echo "<hr>";

$iSum = 0;
$i = 0;
while ($i < 10)
{
	$i++;
	$iSum += $i;	
}
echo $iSum
//兩種寫法不同 但是出來的結果一樣 
?>