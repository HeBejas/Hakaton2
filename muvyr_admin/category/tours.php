<div class="default_button" id="t_create">Создать экскурсию</div>
<div id="create_modal" class="modal_background">
	<div class="modal" id="mtc">
		<form id="tours_create" enctype="multipart/form-data">
			<div class="modal_flex">
				<h2>Создание</h2>
			</div>
			<div id="modal_inputs">
				<div class="modal_inp">
					<label for="name_tour" class="modal_lbl">Название экскурсии</label>
					<input type="text" name="name_tour" id="modal_namec" minlength="3">
				</div>
				<div class="modal_inp">
					<label for="desc_tour" class="modal_lbl">Описание экскурсии</label>
					<textarea type="text" name="desc_tour" id="modal_descc" class="desc" minlength="3" rows="10"></textarea>
				</div>
				<div class="modal_inp">
					<label for="price_tour" class="modal_lbl">Цена экскурсии</label>
					<input type="text" name="price_tour" id="modal_pricec" minlength="3">
				</div>
				<div class="modal_inp">
					<label for="pic_tour" class="modal_lbl">Ссылка на картинку (URL)</label>
					<input type="text" name="pic_tour" id="modal_picc" minlength="3">
				</div>
				<div class="modal_flex">
					<button type="submit" class="default_button" id="tcreate_btn">Создать</button>
					<div class="default_button modal_close">Закрыть</div>
				</div>
			</div>
			<div class="modal_flex" id="tcreate_verify"></div>
		</form>
	</div>
</div>
<div id="delete_modal" class="modal_background">
	<div class="modal" id="mtd">
		<form id="tours_delete" enctype="multipart/form-data">
			<div class="modal_flex">
				<h2>Вы уверены, что хотите удалить?</h2>
			</div>
			<input type="hidden" id="hmtd">
			<div class="modal_flex">
				<button type="submit" class="default_button" id="tdelete_btn">Да, удалить</button>
				<div class="default_button modal_close">Нет, закрыть</div>
			</div>
		</form>
	</div>
</div>
<div id="edit_modal" class="modal_background">
</div>
<?php
	include("../connect.php");
	$query="SELECT * FROM tours";
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
			<table border="1" id="tours_table">
				<thead>
					<tr>
						<th>№</th>
						<th>Название экскурсии</th>
						<th>Описание экскурсии</th>
						<th>Цена экскурсии</th>
						<th>Картинка</th>
						<th>Действие</th>
					</tr>
				</thead>
				<tbody>';
			foreach ($data as $row) {
				echo '
				<tr>
					<td>'.$row['id_tour'].'</td>
					<td id="n'.$row['id_tour'].'">'.$row['name_tour'].'</td>
					<td id="d'.$row['id_tour'].'">'.$row['desc_tour'].'</td>
					<td id="pr'.$row['id_tour'].'">'.$row['price_tour'].'</td>
					<td class="img_box" id="pi'.$row['id_tour'].'"><img src="'.$row['pic_tour'].'"></td>
					<td>
					<div class="default_button t_edit" id="te'.$row['id_tour'].'">Изменить</div>
					<div class="default_button t_delete" id="td'.$row['id_tour'].'">Удалить</div>
					</td>
				</tr>';
			}
			echo '</tbody>
			</table>';
		}
	}
?>

<script>
	tablet = new DataTable('#tours_table', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/ru.json',
    },
	});
	$("#t_create").click(function(){
		$("#create_modal").css("display", "flex");
	});

	$(".t_delete").click(function(){
		$("#delete_modal").css("display", "flex");
		var del_id0 = $(this).attr("id");
		var del_id = del_id0.substring(2, del_id0.length);
		$("#hmtd").val(del_id);
	});

	$(".t_edit").click(function(){
			var ed_id0 = $(this).attr("id");
			var ed_id = ed_id0.substring(2, ed_id0.length);
			console.log("123");
			$("#edit_modal").load("category/edit/tedit.php", {id: ed_id});
			$("#edit_modal").css("display", "flex");
			console.log("456");
	});

	$(".modal_close").click(function(){
		$("#create_modal").css("display", "none");
		$("#delete_modal").css("display", "none");
	});

	$("#tours_create").submit(function(event){
		event.preventDefault();
		$("#mtc").load("category/create/tcreate.php", {name: $("#modal_namec").val(), desc: $("#modal_descc").val(), price: $("#modal_pricec").val(), pic: $("#modal_picc").val()
		});
	});

	$("#tours_delete").submit(function(event){
		event.preventDefault();
		$("#mtd").load("category/delete/tdelete.php", {id: $("#hmtd").val()});
	});
</script>