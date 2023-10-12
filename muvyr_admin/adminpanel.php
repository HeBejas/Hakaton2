<?php
	session_start();
	if ($_SESSION['check']!='allowaccess')
	{
		echo"Авторизуйтесь для входа в личный кабинет";
		die();
	};
?>
<!DOCTYPE html>
<html>
<head>
	<title>Личный кабинет</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="adminpanel.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
	<main>
		<section id="sidebar">
			<?php
				include("sidebar.php")
			?>
		</section>
		<section id="admincontent">
			Выберите категорию
		</section>
	</main>
</body>
</html>