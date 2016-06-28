<?php
$a = 20;
function myfunction($b) {
	//print "a=$a<br>";
	$a = 30;
	//print "a=$a<br>";
	global $a, $c;
	//print "a=$a<br>";
	return $c = ($b + $a);
}
print myfunction(40) + $c;
//global是全域變數,當function進行時在function裡面雖然a=30但由於在下列a被設為全域變數a=20
//myfunction(40)=40+20,$c=($b+$a)=40+20
?>