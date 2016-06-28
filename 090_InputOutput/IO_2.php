<?php

$fileDir = dirname ( __FILE__ );//取得上層目錄完整路徑
$fileResource = opendir ( $fileDir );//取得目錄下的所有檔案

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<p>File list:</p>
	<ul>
	<?php while ($item = readdir($fileResource)) : ?>
		<li><?php echo $item; ?></li>
	<?php endwhile; ?>
	</ul>

<?php closedir($fileResource); ?>

</body>
</html>
<!--readdir讀取檔案 如果讀到檔案就會返回一個文件名-->