<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<center>
		<h1>Чтение данных из текстового поля</h1>
		Ваше имя
		<?php
			echo $_REQUEST ["Name"]; 
		 ?>
		<form action="index.php">
			<input type="submit" value="back">
		</form>
	</center>
</body>
</html>