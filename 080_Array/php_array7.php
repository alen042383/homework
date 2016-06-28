<?php
header("content-type: text/html; charset=utf-8");

$season = array(
    'spring' => '春', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 
    
print_r($season);//讀出陣列裡的數值
echo "<hr>";
var_dump($season);//讀出陣列的path以及所有字串型態