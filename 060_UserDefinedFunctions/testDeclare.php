<?php

function DrawLine() {
	echo "<hr>";
}

register_tick_function("DrawLine");//指定function drawLine()

declare (ticks = 3) {
	echo "1<br>";
	echo "2<br>";
	echo "3<br>";
	echo "4<br>";
	echo "5<br>";
	echo "6<br>";
	echo "7<br>";
	echo "8<br>";
	echo "9<br>";
}
//設定delare每座三行時出現tick tickfunction就是echo<"hr"> 所以輸入三次就會畫一條線

/*
declare (ticks = 3) {
	for ($i = 1; $i <= 9; $i++) {
		echo "$i<br>";
	}
}
*/

?>