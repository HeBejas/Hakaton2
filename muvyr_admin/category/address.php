<div class="default_button" id="a_create">Добавить адрес</div>
<div id="create_modal" class="modal_background">
	<div class="modal" id="mac">
		<form id="address_create">
			<div class="modal_flex">
				<h2>Создание</h2>
			</div>
			<div id="modal_inputs">
				<div class="modal_inp">
					<label for="name_address" class="modal_lbl">Адрес</label>
					<input type="text" name="name_address" id="modal_namec" minlength="3">
				</div>
				<div class="modal_flex">
					<button type="submit" class="default_button" id="acreate_btn">Создать</button>
					<div class="default_button modal_close">Закрыть</div>
				</div>
			</div>
			<div class="modal_flex" id="acreate_verify"></div>
		</form>
	</div>
</div>
<div id="delete_modal" class="modal_background">
	<div class="modal" id="mad">
		<form id="address_delete">
			<div class="modal_flex">
				<h2>Вы уверены, что хотите удалить?</h2>
			</div>
			<input type="hidden" id="hmad">
			<div class="modal_flex">
				<button type="submit" class="default_button" id="adelete_btn">Да, удалить</button>
				<div class="default_button modal_close">Нет, закрыть</div>
			</div>
		</form>
	</div>
</div>
<div id="edit_modal" class="modal_background">
</div>
<?php
	include("../connect.php");
	$query="SELECT * FROM address";
	$link = mysqli_connect($host, $user, $password, $db_name); 
    $result = mysqli_query($link, $query);
    if($result == false) {
        die("Произошла ошибка при выполнении запроса " . $query); 
    }

    else {
    	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    	if(empty($data))
        {
            echo"Записей в таблице нет!";
        }
        else{
	    	echo '
			<table border="1" id="address_table">
				<thead>
					<tr>
						<th>№</th>
						<th>Адрес</th>
						<th>Действия</th>
					</tr>
				</thead>
				<tbody>';
			foreach ($data as $row) {
				echo '
				<tr>
					<td>'.$row['id_address'].'</td>
					<td>'.$row['name_address'].'</td>
					<td>
						<div class="default_button a_edit" id="ae'.$row['id_address'].'">Изменить</div>
						<div class="default_button a_delete" id="ad'.$row['id_address'].'">Удалить</div>
					</td>
				</tr>';
			}
			echo '</tbody>
			</table>';
		}
	}
	$link->close();
?>
<script>
		tablea = new DataTable('#address_table', {
	    language: {
	        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/ru.json',
	    },
		});
	$("#a_create").click(function(){
		$("#create_modal").css("display", "flex");
	});

	$(".a_delete").click(function(){
		$("#delete_modal").css("display", "flex");
		var del_id0 = $(this).attr("id");
		var del_id = del_id0.substring(2, del_id0.length);
		$("#hmad").val(del_id);
	});

	$(".a_edit").click(function(){
			var ed_id0 = $(this).attr("id");
			var ed_id = ed_id0.substring(2, ed_id0.length);
			$("#edit_modal").load("category/edit/aedit.php", {id: ed_id});
			$("#edit_modal").css("display", "flex");
	});

	$(".modal_close").click(function(){
		$("#create_modal").css("display", "none");
		$("#delete_modal").css("display", "none");
	});

	$("#address_create").submit(function(event){
		event.preventDefault();
		$("#mac").load("category/create/acreate.php", {name: $("#modal_namec").val(), desc: $("#modal_descc").val(), pic: $("#modal_picc").val()
		});
	});

	$("#address_delete").submit(function(event){
		event.preventDefault();
		$("#mad").load("category/delete/adelete.php", {id: $("#hmad").val()});
	});
</script>