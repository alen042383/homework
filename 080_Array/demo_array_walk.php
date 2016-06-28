<?php
$result = '';
function glue ($val)
{
	global $result;
	$result .= $val;
}
$array = array ('a', 'b', 'c', 'd');
array_walk ($array, 'glue');
echo $result;//先將result設為空值 再將result=val 用array_walk將每個函數傳入 就會顯示array裡的字串
?>