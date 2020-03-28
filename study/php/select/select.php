<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Ваш выбор фруктов:</h1>
		<?php 
			foreach ($_REQUEST ['Food'] as $value) {
				echo $value."<br>";
			}
		 ?>
	</center>
</body>
</html>