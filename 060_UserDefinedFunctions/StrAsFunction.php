<?php

function test($i) {
	return $i + 1;
}

// $x = 1;
// echo test($x);

$x = 2;
$p = "test";//把P當成指標呼叫方式
echo $p($x);

?>