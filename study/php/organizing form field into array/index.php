<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Использование текстовых полей</h1>
		<form action="" method="post">
			Введите ваше имя: <input type="text" name="textdata[name]">
			Ваш любимый цвет: <input type="text" name="textdata[color]">
			<br>
			<br>
			<input type="submit" value="OK">
		</form>

		<?php 
			if (isset($_REQUEST['textdata'])) {
				$text=$_REQUEST['textdata'];
				echo "Вас зовут ".$text['name']." и ваш любимый цвет - ".$text['color'];
			}
		 ?>
	</center>
</body>
</html>