<div class="default_button" id="d_create">Создать позицию</div>
<div id="create_modal" class="modal_background">
	<div class="modal" id="mdc">
		<form id="drive_create">
			<div class="modal_flex">
				<h2>Создание</h2>
			</div>
			<div id="modal_inputs">
				<div class="modal_inp">
					<label for="name_drive" class="modal_lbl">Название</label>
					<input type="text" name="name_drive" id="modal_namec" minlength="3">
				</div>
				<div class="modal_inp">
					<label for="desc_drive" class="modal_lbl">Описание</label>
					<textarea type="text" name="desc_drive" id="modal_descc" class="desc" minlength="3" rows="10"></textarea>
				</div>
				<div class="modal_inp">
					<label for="price_drive" class="modal_lbl">Цена</label>
					<input type="text" name="price_drive" id="modal_pricec" minlength="1">
				</div>
				<div class="modal_inp">
					<label for="pic_drive" class="modal_lbl">Ссылка на картинку (URL)</label>
					<input type="text" name="pic_drive" id="modal_picc" minlength="3">
				</div>
				<div class="modal_flex">
					<button type="submit" class="default_button" id="dcreate_btn">Создать</button>
					<div class="default_button modal_close">Закрыть</div>
				</div>
			</div>
			<div class="modal_flex" id="dcreate_verify"></div>
		</form>
	</div>
</div>
<div id="delete_modal" class="modal_background">
	<div class="modal" id="mdd">
		<form id="drive_delete">
			<div class="modal_flex">
				<h2>Вы уверены, что хотите удалить?</h2>
			</div>
			<input type="hidden" id="hmdd">
			<div class="modal_flex">
				<button type="submit" class="default_button" id="ddelete_btn">Да, удалить</button>
				<div class="default_button modal_close">Нет, закрыть</div>
			</div>
		</form>
	</div>
</div>
<div id="edit_modal" class="modal_background">
</div>
<?php
	include("../connect.php");
	$query="SELECT * FROM drive";
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
			<table border="1" id="drive_table">
				<thead>
					<tr>
						<th>№</th>
						<th>Название</th>
						<th>Описание</th>
						<th>Цена</th>
						<th>Картинка</th>
						<th>Действия</th>
					</tr>
				</thead>
				<tbody>';
			foreach ($data as $row) {
				echo '
				<tr>
					<td>'.$row['id_drive'].'</td>
					<td>'.$row['name_drive'].'</td>
					<td>'.$row['desc_drive'].'</td>
					<td>'.$row['price_drive'].'</td>
					<td class="img_box"><img src="'.$row['pic_drive'].'"></td>
					<td>
						<div class="default_button d_edit" id="de'.$row['id_drive'].'">Изменить</div>
						<div class="default_button d_delete" id="dd'.$row['id_drive'].'">Удалить</div>
					</td>
				</tr>';
			}
			echo '</tbody>
			</table>';
		}
	}
?>
<script>
	tabled = new DataTable('#drive_table', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/ru.json',
    },
	});
	$("#d_create").click(function(){
		$("#create_modal").css("display", "flex");
	});

	$(".d_delete").click(function(){
		$("#delete_modal").css("display", "flex");
		var del_id0 = $(this).attr("id");
		var del_id = del_id0.substring(2, del_id0.length);
		$("#hmdd").val(del_id);
	});

	$(".d_edit").click(function(){
			var ed_id0 = $(this).attr("id");
			var ed_id = ed_id0.substring(2, ed_id0.length);
			$("#edit_modal").load("category/edit/dedit.php", {id: ed_id});
			$("#edit_modal").css("display", "flex");
	});

	$(".modal_close").click(function(){
		$("#create_modal").css("display", "none");
		$("#delete_modal").css("display", "none");
	});

	$("#drive_create").submit(function(event){
		event.preventDefault();
		$("#mdc").load("category/create/dcreate.php", {name: $("#modal_namec").val(), desc: $("#modal_descc").val(), price: $("#modal_pricec").val(), pic: $("#modal_picc").val()
		});
	});

	$("#drive_delete").submit(function(event){
		event.preventDefault();
		$("#mdd").load("category/delete/ddelete.php", {id: $("#hmdd").val()});
	});
</script>