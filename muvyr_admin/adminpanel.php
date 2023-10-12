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
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body>
	<main>
		<div id="sidebar_all">
			<section id="sidebar">
				<?php
					include("sidebar.php")
				?>
			</section>
			<div id="burger">
				свернуть/развернуть
			</div>
		</div>
		<section id="admincontent">
			Выберите категорию
		</section>
	</main>
</body>
<script>
	check = true;
	$("#burger").click(function(){
		if(check)
		{
			$("#sidebar_all").css({"transform" : "translateX(-20vw)"})
			check=false;
		}
		else
		{
			$("#sidebar_all").css({"transform" : "translateX(0vw)"})
			check=true;
		}
	});
</script>

</html>