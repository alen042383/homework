<?php
	header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";//htmlspecialchars 將定義域的字符轉玩HTML
}

?> 