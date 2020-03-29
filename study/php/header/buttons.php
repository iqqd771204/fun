<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Кнопки</h1>
		<form action="" name="form1" method="post">
			<input type="submit"  name="Button" value="кнопка1">
			<input type="submit" name="Button" value="кнопка2">
			<input type="submit" name="Button" value="кнопка3">
		</form>
		<?php 
			//if (isset($_REQUEST["Button"])) {
				echo $_REQUEST["Button"], "<BR>";
			//}
		 ?>
	</center>
</body>
</html>