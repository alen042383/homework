<?php
$showStr = "Genius is|one/percent inspiration and ninety-nine percent perspiration.";
$s = strtok($showStr, " ");//切割字串當字串遇到" "時就切割
while ($s != "")//當字串裡不等於空值時 do while()
{
   echo $s. "*" . "<br>";
   $s = strtok(" .|/");//當字串裡遇到".|"時就跳過
   
   
   // 如果這麼寫，程式會沒完沒了...
   // $s = strtok($showStr, " ");
}
?>