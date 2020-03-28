<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Загрузка файлов на сервер</h1>
		<form action="/" enctype="multipart/form-data" method="post">
			Выберите файл для загрузки:
			<input type="file" name="userfile">
			<br><br>
			<input type="submit" value="загрузить">
		</form>

	<?php 
		if (isset($_FILES['userfile']['name'])) {
			$handle=fopen($_FILES['userfile']['tmp_name'], "r");
			while (!feof($handle)) {
				$text=fgets($handle);
				echo $text."<br>";
			}
			fclose($handle);
		}

	 ?>
	</center>
</body>
</html>