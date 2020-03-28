<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Использование списков</h1>
		<form action="select.php" method="post">
			Выберите любимые фрукты:
			<br><br>
			<select name="Food[]" multiple>
				<option>Апельсин</option>
				<option>Груша</option>
				<option>Яблоко</option>
				<option>Персик</option>
			</select>
			<br><br>
			<input type="submit" value="ok">
		</form>
	</center>
</body>
</html>