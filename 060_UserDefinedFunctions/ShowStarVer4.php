<?php
function ShowStar($iCount, $sWhat = "*")
{
	if ($iCount > 0)
	{
		if ($iCount <= 20)
		{
			$result = "";
			for ($i = 1; $i <= $iCount; $i++)
			{
				$result .= $sWhat;
			}
			echo $result;
		}
		else 
			echo "iCount <= 20 please.";
	}
	else
	{
		echo "iCount > 0 please.";
	}
}//跟前面一樣是利用呼叫副程式的方式，但是這次有將條件值定義出來，範圍在0~20之間
$iHowMany = 21;
ShowStar($iHowMany);
?>