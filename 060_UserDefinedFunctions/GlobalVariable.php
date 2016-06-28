<?php
$a = 20;
function myFunction($b) {
	//echo "a = $a<br>";
	$a = 30;
	//echo "a = $a<br>";
	global $a, $c;
	//echo "a = $a<br>";
	return $c = ($b + $a);
}
// 請預測答案是多少? 答案=60
//global是全域變數,當function進行時在function裡面雖然a=30但由於在下列a被設為全域變數a=20
//myfunction(40)=40+20,$c=($b+$a)=40+20
echo myFunction(40) + $c;
?>