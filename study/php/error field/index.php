<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Необязательное поле</h1>
			<?php 
				$errors=array();
				if (isset($_REQUEST["Name"])) {
					validate_data();
					if (count($errors)>0)
					{
						display_errors();
						display_form();
					}
					else
					{
						process_data();
					}
				}
				else
				{
					display_form();
				}

				function display_errors()
				{
					global $errors;
					foreach ($errors as $err) {
						echo $err."<br>";
					}
				}
				function validate_data()
				{
					global $errors;
					if ($_REQUEST["Name"]=="")
					{
						$errors[]="<font color='red'>Имя обязательно для ввода</font>";
					}
				}
				function process_data()
				{
					echo "Ваше имя ".$_REQUEST["Name"];
				}
				function display_form()
				{
					echo "<Form method='post' action=''>";
					echo "Введите ваше имя";
					echo "<br>";
					echo "<input name='Name' type='text'>";
					echo "<br><br>";
					echo "<input type='submit' value='ok'>";
					echo "</form>";
				}
			 ?>
	</center>
</body>
</html>