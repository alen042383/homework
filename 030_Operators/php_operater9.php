<?php

$x = 100;
$y = &$x;//x的記憶體指向y,&指標

$y = 200;
echo "x = $x </br>";

unset($x);//unset()就是將x的數值清除
echo "x = $x </br>";

?>