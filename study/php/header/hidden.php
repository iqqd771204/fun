<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Использование скрытого поля</h1>
		<form action="" method="post">
			Нажмите кнопку для отображения скрытых данных
			<input type="hidden" name="hidden" value="Секрет!">
			<br><br>
			<input type="submit" value="ok">
		</form>
		<?php 
			if (isset($_REQUEST['hidden'])){
				echo $_REQUEST['hidden'];
			}
		 ?>
	</center>
</body>
</html>