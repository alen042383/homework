<?php

echo MathTool::calcTotal(1, 2, 3, 4, 5);

class MathTool {
	static function calcTotal () {
		$args = func_get_args();//傳回包含函式的參數列表的陣列
		// var_dump($args);
		$total = 0;
		foreach ($args as $value) {
			$total += $value;
		}
		return $total;
	}
	//foreach將calctota裡的數字加總起來
}

?>
