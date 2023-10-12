<div id="sidebar_pic">
	<img src="logo.png">
</div>
<div id="sidebar_options">
	<!-- <div class="sidebar_option" id="opt1">
		Безопасность
	</div>  НЕ ДОРАБОТАНО --> 
	<div class="sidebar_option" id="opt2">
		Брони домиков
	</div>
	<div class="sidebar_option" id="opt3">
		Свадьбы
	</div>
	<div class="sidebar_option" id="opt4">
		Экскурсии
	</div>
	<div class="sidebar_option" id="opt5">
		Домики
	</div>
	<div class="sidebar_option" id="opt6">
		Прокат
	</div>
	<div class="sidebar_option" id="opt7">
		Молочная продукция
	</div>
	<div class="sidebar_option" id="opt8">
		Адреса магазинов
	</div>
	<div class="sidebar_option" id="opt9">
		Мероприятия
	</div>
	<div class="sidebar_option" id="opt10">
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
		$("#admincontent").load("category/wedding.php");
	});
	$("#opt4").click(function(){
		$("#admincontent").load("category/tours.php");
	});
	$("#opt5").click(function(){
		$("#admincontent").load("category/house.php");
	});
	$("#opt6").click(function(){
		$("#admincontent").load("category/drive.php");
	});
	$("#opt7").click(function(){
		$("#admincontent").load("category/milk.php");
	});
	$("#opt8").click(function(){
		$("#admincontent").load("category/address.php");
	});
	$("#opt9").click(function(){
		$("#admincontent").load("category/event.php");
	});
	$("#opt10").click(function(){
		$("#admincontent").load("category/project.php");
	});
</script>