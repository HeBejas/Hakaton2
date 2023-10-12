<?php
	session_start();
?>
<section id="login">
	<form id="login_form">
		<div id="login_title" class="login_flex">
			<h2>Авторизация</h2>
		</div>
		<div id="login_inputs">
			<div class="login_inp">
				<label for="login" class="login_lbl">Логин</label>
				<input type="text" name="login" id="login_login" minlength="3">
			</div>
			<div class="login_inp">
				<label for="password" class="login_lbl">Пароль</label>
				<input type="password" name="password" id="login_password" minlength="3">
			</div>
			<div class="login_flex">
				<button type="submit" id="login_btn">Войти</button>
			</div>
		</div>
		<div class="login_flex" id="login_verify"></div>
	</form>
</section>

<script>
	$("#login_form").submit(function(event){
		event.preventDefault();
		$("#login_verify").load("adminverify.php", {login: $("#login_login").val(), password: $("#login_password").val()
		});
		console.log($("#login_login").val());
	});

</script>
