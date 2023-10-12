<?php
include("../../connect.php");
$query = "SELECT * from project WHERE id_project='$_POST[id]'";
$link = mysqli_connect($host, $user, $password, $db_name); 
$result = mysqli_query($link, $query);
if($result == false) {
    die("Произошла ошибка при выполнении запроса
    <div class='default_button modal_close'>Закрыть</div> "); 
}
else {
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	foreach ($data as $row) {
		echo'
			<div class="modal" id="mpe">
				<form id="project_edit">
					<div class="modal_flex">
						<h2>Изменение</h2>
					</div>
					<div id="modal_inputs">
						<input type="hidden" id="hmpe" value="'.$row["id_project"].'">
						<div class="modal_inp">
							<label for="name_project" class="modal_lbl">Название проекта</label>
							<input type="text" name="name_project" id="emodal_namec" minlength="3" value="'.$row["name_project"].'">
						</div>
						<div class="modal_inp">
							<label for="desc_project" class="modal_lbl">Описание проекта</label>
							<textarea type="text" name="desc_project" id="emodal_descc" class="desc" minlength="3" rows="10">'.$row["desc_project"].'</textarea>
						</div>
						<div class="modal_inp">
							<label for="status_project" class="modal_lbl">Статус проекта</label>
							<select id="emodal_statusc" minlength="3" value="'.$row["status_project"].'">';
							if($row["status_project"] == "Готов")
								{
								echo'
								<option selected>Готов</option>
								<option>В процессе</option>
								<option>Отменён</option>';
								}
							if($row["status_project"] == "В процессе")
								{
								echo'
								<option>Готов</option>
								<option selected>В процессе</option>
								<option>Отменён</option>';
								}
							if($row["status_project"] == "Отменён")
								{
								echo'
								<option>Готов</option>
								<option>В процессе</option>
								<option selected>Отменён</option>';
								}
							echo '</select>
						</div>
						<div class="modal_inp">
							<label for="pic_project" class="modal_lbl">Ссылка на картинку (URL)</label>
							<input type="text" name="pic_project" id="emodal_picc" minlength="3" value="'.$row["pic_project"].'">
						</div>
						<div class="modal_flex">
							<button type="submit" class="default_button" id="pedit_btn">Изменить</button>
							<div class="default_button modal_close">Закрыть</div>
						</div>
					</div>
					<div class="modal_flex" id="pedit_verify"></div>
				</form>
			</div>';
		}
	}
?>
<script>
	$(".modal_close").click(function(){
		$("#edit_modal").css("display", "none");
	});
	$("#project_edit").submit(function(event){
		event.preventDefault();
		$("#mpe").load("category/edit/pedit_res.php", {id: $("#hmpe").val(), name: $("#emodal_namec").val(), desc: $("#emodal_descc").val(), status: $("#emodal_statusc").val(), pic: $("#emodal_picc").val()
		});
	});
</script>