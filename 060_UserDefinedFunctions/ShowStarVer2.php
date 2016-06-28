<?php
function ShowStar($iCount)
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= "*";
	}
	echo $result;
}
//呼叫副程式將自定義的數值代入
$iHowMany = 3;
ShowStar($iHowMany);
?>