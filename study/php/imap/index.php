<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>IMAP</h1>
		<form action="/" method="post">
			Щёлкните по картинке:
			<input type="IMAGE" name='imap' src="w-R65OM3tXw.jpg">
		</form>
		<br>
		<br>
		<br>
		<br>
		<br>
		<?php 
			if (isset($_REQUEST["imap_y"])) {
				echo "Координаты по которым вы нажали: <br>".$_REQUEST["imap_x"]."<br>".$_REQUEST['imap_y'];
			}
		 ?>
	</center>
</body>
</html>