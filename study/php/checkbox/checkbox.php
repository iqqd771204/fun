<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		if (isset($_REQUEST['check1'])) {
			echo "Вы нажани \"да\"";
		}elseif (isset($_REQUEST['check2'])) {
			echo $_REQUEST["check2"];
		}
	 ?>
	 <br><br>
	 <form action="index.php" method="post">
	 	<input type="submit" value="ok">
	 </form>
</body>
</html>