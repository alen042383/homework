<?php
if (isset ( $_POST ["btnOK"] )) {
	processFile ( $_FILES ["file1"] );
}//if判斷是否有按下確認 如果按下的畫執行processFile

function processFile($objFile) {
	if ($objFile ["error"] != 0) {
		echo "Upload Fail! ";//上傳失敗回傳訊息
		echo "<a href='javascript:window.history.back();'>Back</a>";//上傳失敗的返回超連結
		return;
	}
	
	$test = move_uploaded_file ( $objFile ["tmp_name"], "./" . $objFile ["name"] );
	if (! $test) {
		die ( "move_uploaded_file() faile" );
	}
	
	echo "File uploaded<br />";
	echo "File name: " . $objFile ["name"] . "<br />";
	echo "File type: " . $objFile ["type"] . "<br />";
	echo "File size: " . $objFile ["size"] . "<br />";
	//將上傳的資料回傳回來
	echo "--  Done --";
	exit ();

}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab - Upload file</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data" action=""> 
		1. Select a file：<input type="file" name="file1" /><br /> <input
			type="submit" name="btnOK" value="2. 送出資料" />
	</form>
</body>
</html>