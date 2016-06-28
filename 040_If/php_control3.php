<?php
	$score = 95;
	if ($score >=60 && $score < 70) {
		echo 'D';
	} elseif ($score>=70 && $score<80) {
		echo 'C';
	} elseif ($score>=80 && $score<90) {
		echo 'B';		
	} elseif ($score>=90 && $score<=100) {
		echo 'A';		
	} else {
		echo 'Fail';
	}
	//分數95 在90~100之間 所以會顯示A
?>