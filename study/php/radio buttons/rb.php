<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<?php 
			if (isset($_REQUEST["radio1"])) {
				echo $_REQUEST['radio1'];
			}else{
				echo "ничего не выбрано!";
			}
		 ?>
	</center>
</body>
</html>