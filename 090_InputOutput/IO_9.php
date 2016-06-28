<?php
header("Content-Type: image/png");//宣告圖片

$filename = "cc.png";
$fileHandle = fopen($filename, "rb");//rb將檔案原封不動讀進來
echo fread($fileHandle, filesize($filename));
fclose($filename);

?>