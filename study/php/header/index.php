<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Использование "header" для перенаправления на другие страницы</h1>
		<form action="" method="post">
			<input type="submit" name="button" value="buttons">
			<input type="submit" name="button" value="comp">
			<input type="submit" name="button" value="hidden">
		</form>
	</center>
	<?php 
		$redirect="Location: ". $_REQUEST['button'].".php";
		echo header($redirect);
	 ?>
</body>
</html>