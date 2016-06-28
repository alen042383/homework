<?php
function ShowStar($iCount, $sWhat = "*")
{
	if ($iCount <= 0)
	{
		echo "iCount > 0 please";
		return;
	}
	if ($iCount > 20)
	{
		echo "iCount <= 20 please";
		return;
	}
	
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;
	}
	echo $result;
}
//這次將條件值分隔出來 假如前面成立後面程式才會繼續執行
$iHowMany = 2;
ShowStar($iHowMany);
?>