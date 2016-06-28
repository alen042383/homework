<?php

$a = array('xxx', 'book' => '書籍', 'yyy', 'desk' => '書桌', 'pen' => '筆');
//利用=>的方式將字串給予指標
foreach ($a as $k => $s)
{
	 echo "$k = $s<br>";
}
//利用for迴圈將陣列的數值印出來
?>