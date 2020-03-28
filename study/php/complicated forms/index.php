<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Пример сложной формы</h1>
		<form action="/" method="post">
			Введите ваше имя:
			<input type="text" name="name">
			<br>
			<br>
			Выберите любимые фрукты:
			<select name="food[]" multiple="">
				<option>Апельсин</option>
				<option>Груша</option>
				<option>Яблоко</option>
				<option>Персик</option>
			</select>
			<br>
			<br>
			<input type="submit" value="ok">
		</form>
		<?php 
			foreach ($_REQUEST as $key => $value) {
				if (is_array($value)) {
					foreach ($value as $item) {
						echo $key."=>".$item."<br>";
					}
				}else{
					echo $key."=>".$value."<br>";
				}
			}
		 ?>
	</center>
</body>
</html>