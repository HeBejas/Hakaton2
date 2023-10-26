<div id="sidebar_pic">
	<img src="logo.png">
</div>
<div id="sidebar_options">
	<!-- <div class="sidebar_option" id="opt1">
		Безопасность
	</div>  НЕ ДОРАБОТАНО --> 
	<div class="sidebar_option" id="opt2">
		Брони
	</div>
	<div class="sidebar_option" id="opt3">
		Экскурсии
	</div>
	<div class="sidebar_option" id="opt4">
		Домики
	</div>
	<div class="sidebar_option" id="opt5f">
		Развлечения
	</div>
	<div class="sidebar_option" id="opt6">
		Молочная продукция
	</div>
	<div class="sidebar_option" id="opt7">
		Адреса магазинов
	</div>
	<div class="sidebar_option" id="opt8">
		Мероприятия
	</div>
	<div class="sidebar_option" id="opt9">
		Проекты
	</div>
</div>

<script>
	$(".sidebar_option").click(function(){
		$(".sidebar_option").removeClass("active");
		$(this).addClass("active");
	});
	$("#opt1").click(function(){
		$("#admincontent").load("category/personal_data.php");
	});
	$("#opt2").click(function(){
		$("#admincontent").load("category/orders.php");
	});
	$("#opt3").click(function(){
		$("#admincontent").load("category/tours.php");
	});
	$("#opt4").click(function(){
		$("#admincontent").load("category/house.php");
	});
	$("#opt5f").click(function(){
		$("#admincontent").load("category/drive.php");
	});
	$("#opt6").click(function(){
		$("#admincontent").load("category/milk.php");
	});
	$("#opt7").click(function(){
		$("#admincontent").load("category/address.php");
	});
	$("#opt8").click(function(){
		$("#admincontent").load("category/event.php");
	});
	$("#opt9").click(function(){
		$("#admincontent").load("category/project.php");
	});
</script>