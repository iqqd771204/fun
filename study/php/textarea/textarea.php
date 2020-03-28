<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Чтение многострочного поля</h1>
		Вашими лучшими друзьями являются:
		<?php
			echo "<br>".str_replace("\r\n", '<br>', $_REQUEST["Friends"]); 
		 ?>
		<form action="index.html">
			<input type="submit" value="back">
		</form>
	</center>
</body>
</html>