<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Использование паролей</h1>
		<form action="/" method="post">
			Введите пароль:
			<input type="password" name="password">
			<br><br>
			<input type="submit" value="ok">
		</form>
		<?php 
			if (isset($_REQUEST["password"])) {
				echo "Ваш пароль - ".$_REQUEST['password'];
			}
		 ?>
	</center>
</body>
</html>