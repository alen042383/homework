<?php
function ShowStar($iCount, $sWhat = "*")
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;
	}
	echo $result;
	
}
//呼叫副程式可以將自定義的圖形代入程式中
$iHowMany = 2;
ShowStar($iHowMany,"@");
?>