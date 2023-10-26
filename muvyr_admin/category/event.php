<div class="default_button" id="e_create">Создать мероприятие</div>
<div id="create_modal" class="modal_background">
	<div class="modal" id="mec">
		<form id="event_create">
			<div class="modal_flex">
				<h2>Создание</h2>
			</div>
			<div id="modal_inputs">
				<div class="modal_inp">
					<label for="name_event" class="modal_lbl">Название мероприятия</label>
					<input type="text" name="name_event" id="modal_namec" minlength="3">
				</div>
				<div class="modal_inp">
					<label for="desc_event" class="modal_lbl">Описание мероприятия</label>
					<textarea type="text" name="desc_event" id="modal_descc" class="desc" minlength="3" rows="10"></textarea>
				</div>
				<div class="modal_inp">
					<label for="time_event" class="modal_lbl">Продолжительность мероприятия</label>
					<input type="text" name="time_event" id="modal_timec" minlength="1">
				</div>
				<div class="modal_inp">
					<label for="pic_event" class="modal_lbl">Ссылка на картинку (URL)</label>
					<input type="text" name="pic_event" id="modal_picc" minlength="3">
				</div>
				<div class="modal_flex">
					<button type="submit" class="default_button" id="ecreate_btn">Создать</button>
					<div class="default_button modal_close">Закрыть</div>
				</div>
			</div>
			<div class="modal_flex" id="ecreate_verify"></div>
		</form>
	</div>
</div>
<div id="delete_modal" class="modal_background">
	<div class="modal" id="med">
		<form id="event_delete">
			<div class="modal_flex">
				<h2>Вы уверены, что хотите удалить?</h2>
			</div>
			<input type="hidden" id="hmed">
			<div class="modal_flex">
				<button type="submit" class="default_button" id="edelete_btn">Да, удалить</button>
				<div class="default_button modal_close">Нет, закрыть</div>
			</div>
		</form>
	</div>
</div>
<div id="edit_modal" class="modal_background">
</div>
<?php
	include("../connect.php");
	$query="SELECT * FROM event";
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
			<table border="1" id="event_table">
				<thead>
					<tr>
						<th>№</th>
						<th>Название мероприятия</th>
						<th>Описание мероприятия</th>
						<th>Продолжительность мероприятия</th>
						<th>Картинка мероприятия</th>
						<th>Действия</th>
					</tr>
				</thead>
				<tbody>';
			foreach ($data as $row) {
				echo '
				<tr>
					<td>'.$row['id_event'].'</td>
					<td>'.$row['name_event'].'</td>
					<td>'.$row['desc_event'].'</td>
					<td>'.$row['time_event'].'</td>
					<td class="img_box"><img src="'.$row['pic_event'].'"></td>
					<td>
						<div class="default_button e_edit" id="ee'.$row['id_event'].'">Изменить</div>
						<div class="default_button e_delete" id="ed'.$row['id_event'].'">Удалить</div>
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
	tablee = new DataTable('#event_table', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/ru.json',
    },
	});
	$("#e_create").click(function(){
		$("#create_modal").css("display", "flex");
	});

	$(".e_delete").click(function(){
		$("#delete_modal").css("display", "flex");
		var del_id0 = $(this).attr("id");
		var del_id = del_id0.substring(2, del_id0.length);
		$("#hmed").val(del_id);
	});

	$(".e_edit").click(function(){
			var ed_id0 = $(this).attr("id");
			var ed_id = ed_id0.substring(2, ed_id0.length);
			$("#edit_modal").load("category/edit/eedit.php", {id: ed_id});
			$("#edit_modal").css("display", "flex");
	});

	$(".modal_close").click(function(){
		$("#create_modal").css("display", "none");
		$("#delete_modal").css("display", "none");
	});

	$("#event_create").submit(function(event){
		event.preventDefault();
		$("#mec").load("category/create/ecreate.php", {name: $("#modal_namec").val(), desc: $("#modal_descc").val(), time: $("#modal_timec").val(), pic: $("#modal_picc").val()
		});
	});

	$("#event_delete").submit(function(event){
		event.preventDefault();
		$("#med").load("category/delete/edelete.php", {id: $("#hmed").val()});
	});
</script>