<?php
$sData = "908872526535442041985072568716";
$result = "01234567890";
$iLen = strlen($sData);
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);//取字串部分內容的取一個
	$result = $ch . str_replace($ch, "", $result);//把result某個值取代成空值

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);//從第0個取五個 和從第5個取5個
?>