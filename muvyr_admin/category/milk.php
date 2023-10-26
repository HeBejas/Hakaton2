<div class="default_button" id="m_create">Создать позицию</div>
<div id="create_modal" class="modal_background">
	<div class="modal" id="mmc">
		<form id="milk_create">
			<div class="modal_flex">
				<h2>Создание</h2>
			</div>
			<div id="modal_inputs">
				<div class="modal_inp">
					<label for="name_milk" class="modal_lbl">Название</label>
					<input type="text" name="name_milk" id="modal_namec" minlength="3">
				</div>
				<div class="modal_inp">
					<label for="desc_milk" class="modal_lbl">Описание</label>
					<textarea type="text" name="desc_milk" id="modal_descc" class="desc" minlength="3" rows="10"></textarea>
				</div>
				<div class="modal_inp">
					<label for="pic_milk" class="modal_lbl">Ссылка на картинку (URL)</label>
					<input type="text" name="pic_milk" id="modal_picc" minlength="3">
				</div>
				<div class="modal_flex">
					<button type="submit" class="default_button" id="mcreate_btn">Создать</button>
					<div class="default_button modal_close">Закрыть</div>
				</div>
			</div>
			<div class="modal_flex" id="mcreate_verify"></div>
		</form>
	</div>
</div>
<div id="delete_modal" class="modal_background">
	<div class="modal" id="mmd">
		<form id="milk_delete">
			<div class="modal_flex">
				<h2>Вы уверены, что хотите удалить?</h2>
			</div>
			<input type="hidden" id="hmmd">
			<div class="modal_flex">
				<button type="submit" class="default_button" id="mdelete_btn">Да, удалить</button>
				<div class="default_button modal_close">Нет, закрыть</div>
			</div>
		</form>
	</div>
</div>
<div id="edit_modal" class="modal_background">
</div>
<?php
	include("../connect.php");
	$query="SELECT * FROM milk";
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
			<table border="1" id="milk_table">
				<thead>
					<tr>
						<th>№</th>
						<th>Название продукции</th>
						<th>Описание продукции</th>
						<th>Картинка продукта</th>
						<th>Действия</th>
					</tr>
				</thead>
				<tbody>';
			foreach ($data as $row) {
				echo '
				<tr>
					<td>'.$row['id_milk'].'</td>
					<td>'.$row['name_milk'].'</td>
					<td>'.$row['desc_milk'].'</td>
					<td class="img_box"><img src="'.$row['pic_milk'].'"></td>
					<td>
						<div class="default_button m_edit" id="me'.$row['id_milk'].'">Изменить</div>
						<div class="default_button m_delete" id="md'.$row['id_milk'].'">Удалить</div>
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
	tablem = new DataTable('#milk_table', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/ru.json',
    },
	});
	$("#m_create").click(function(){
		$("#create_modal").css("display", "flex");
	});

	$(".m_delete").click(function(){
		$("#delete_modal").css("display", "flex");
		var del_id0 = $(this).attr("id");
		var del_id = del_id0.substring(2, del_id0.length);
		$("#hmmd").val(del_id);
	});

	$(".m_edit").click(function(){
			var ed_id0 = $(this).attr("id");
			var ed_id = ed_id0.substring(2, ed_id0.length);
			$("#edit_modal").load("category/edit/medit.php", {id: ed_id});
			$("#edit_modal").css("display", "flex");
	});

	$(".modal_close").click(function(){
		$("#create_modal").css("display", "none");
		$("#delete_modal").css("display", "none");
	});

	$("#milk_create").submit(function(event){
		event.preventDefault();
		$("#mmc").load("category/create/mcreate.php", {name: $("#modal_namec").val(), desc: $("#modal_descc").val(), pic: $("#modal_picc").val()
		});
	});

	$("#milk_delete").submit(function(event){
		event.preventDefault();
		$("#mmd").load("category/delete/mdelete.php", {id: $("#hmmd").val()});
	});
</script>