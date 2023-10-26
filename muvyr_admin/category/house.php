<div class="default_button" id="h_create">Добавить домик</div>

<div id="create_modal" class="modal_background">
	<div class="modal" id="mhc">
		<form id="house_create">
			<div class="modal_flex">
				<h2>Создание</h2>
			</div>
			<div id="modal_inputs">
				<div class="modal_inp">
					<label for="name_house" class="modal_lbl">Название домика</label>
					<input type="text" name="name_house" id="modal_namec" minlength="3">
				</div>
				<div class="modal_inp">
					<label for="people_house" class="modal_lbl">Кол-во людей</label>
					<input type="text" name="people_house" id="modal_peoplec" minlength="1">
				</div>
				<div class="modal_inp">
					<label for="desc_house" class="modal_lbl">Описание домика</label>
					<textarea type="text" name="desc_house" id="modal_descc" class="desc" minlength="3" rows="10"></textarea>
				</div>
				<div class="modal_inp">
					<label for="price_house" class="modal_lbl">Цена</label>
					<input type="text" name="price_house" id="modal_pricec" minlength="1">
				</div>
				<div class="modal_inp">
					<label for="pic_house" class="modal_lbl">Ссылка на картинку (URL)</label>
					<input type="text" name="pic_house" id="modal_picc" minlength="3">
				</div>
				<div class="modal_inp">
					<label for="pic2_house" class="modal_lbl">Ссылка на дополнительную картинку (URL)</label>
					<input type="text" name="pic2_house" id="modal_pic2c" minlength="3">
				</div>
				<div class="modal_flex">
					<button type="submit" class="default_button" id="hcreate_btn">Создать</button>
					<div class="default_button modal_close">Закрыть</div>
				</div>
			</div>
			<div class="modal_flex" id="hcreate_verify"></div>
		</form>
	</div>
</div>
<div id="delete_modal" class="modal_background">
	<div class="modal" id="mhd">
		<form id="house_delete">
			<div class="modal_flex">
				<h2>Вы уверены, что хотите удалить?</h2>
			</div>
			<input type="hidden" id="hmhd">
			<div class="modal_flex">
				<button type="submit" class="default_button" id="hdelete_btn">Да, удалить</button>
				<div class="default_button modal_close">Нет, закрыть</div>
			</div>
		</form>
	</div>
</div>
<div id="edit_modal" class="modal_background">
</div>
<?php
	include("../connect.php");
	$query="SELECT * FROM house";
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
			<table border="1" id="house_table">
				<thead>
					<tr>
						<th>№</th>
						<th>Название домика</th>
						<th>Кол-во людей</th>
						<th>Описание домика</th>
						<th>Цена</th>
						<th>Картинка</th>
						<th>Дополнительная картинка</th>
						<th>Действия</th>
					</tr>
				</thead>
				<tbody>';
			foreach ($data as $row) {
				echo '
				<tr>
					<td>'.$row['id_house'].'</td>
					<td>'.$row['name_house'].'</td>
					<td>'.$row['people_house'].'</td>
					<td>'.$row['desc_house'].'</td>
					<td>'.$row['price_house'].'</td>
					<td class="img_box"><img src="'.$row['pic_house'].'"></td>
					<td class="img_box"><img src="'.$row['pic2_house'].'"></td>
					<td>
						<div class="default_button h_edit" id="he'.$row['id_house'].'">Изменить</div>
						<div class="default_button h_delete" id="hd'.$row['id_house'].'">Удалить</div>
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
	tableh = new DataTable('#house_table', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/ru.json',
    },
	});
	$("#h_create").click(function(){
		$("#create_modal").css("display", "flex");
	});

	$(".h_delete").click(function(){
		$("#delete_modal").css("display", "flex");
		var del_id0 = $(this).attr("id");
		var del_id = del_id0.substring(2, del_id0.length);
		$("#hmhd").val(del_id);
	});

	$(".h_edit").click(function(){
			var ed_id0 = $(this).attr("id");
			var ed_id = ed_id0.substring(2, ed_id0.length);
			$("#edit_modal").load("category/edit/hedit.php", {id: ed_id});
			$("#edit_modal").css("display", "flex");
	});

	$(".modal_close").click(function(){
		$("#create_modal").css("display", "none");
		$("#delete_modal").css("display", "none");
	});

	$("#house_create").submit(function(event){
		event.preventDefault();
		$("#mhc").load("category/create/hcreate.php", {name: $("#modal_namec").val(), people: $("#modal_peoplec").val(), desc: $("#modal_descc").val(), price: $("#modal_pricec").val(), pic: $("#modal_picc").val(), pic2: $("#modal_pic2c").val()
		});
	});

	$("#house_delete").submit(function(event){
		event.preventDefault();
		$("#mhd").load("category/delete/hdelete.php", {id: $("#hmhd").val()});
	});
</script>