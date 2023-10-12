<?php
include("../../connect.php");
$query = "SELECT * from event WHERE id_event='$_POST[id]'";
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
			<div class="modal" id="mee">
				<form id="event_edit">
					<div class="modal_flex">
						<h2>Изменение</h2>
					</div>
					<div id="modal_inputs">
						<input type="hidden" id="hmee" value="'.$row["id_event"].'">
						<div class="modal_inp">
							<label for="name_event" class="modal_lbl">Название мероприятия</label>
							<input type="text" name="name_event" id="emodal_namec" minlength="3" value="'.$row["name_event"].'">
						</div>
						<div class="modal_inp">
							<label for="desc_event" class="modal_lbl">Описание мероприятия</label>
							<textarea type="text" name="desc_event" id="emodal_descc" class="desc" minlength="3" rows="10">'.$row["desc_event"].'</textarea>
						</div>
						<div class="modal_inp">
							<label for="time_event" class="modal_lbl">Продолжительность мероприятия</label>
							<input type="text" name="time_event" id="emodal_timec" minlength="3" value="'.$row["time_event"].'">
						</div>
						<div class="modal_inp">
							<label for="pic_event" class="modal_lbl">Ссылка на картинку (URL)</label>
							<input type="text" name="pic_event" id="emodal_picc" minlength="3" value="'.$row["pic_event"].'">
						</div>
						<div class="modal_flex">
							<button type="submit" class="default_button" id="eedit_btn">Изменить</button>
							<div class="default_button modal_close">Закрыть</div>
						</div>
					</div>
					<div class="modal_flex" id="eedit_verify"></div>
				</form>
			</div>';
		}
	}
?>
<script>
	$(".modal_close").click(function(){
		$("#edit_modal").css("display", "none");
	});
	$("#event_edit").submit(function(event){
		event.preventDefault();
		$("#mee").load("category/edit/eedit_res.php", {id: $("#hmee").val(), name: $("#emodal_namec").val(), desc: $("#emodal_descc").val(), time: $("#emodal_timec").val(), pic: $("#emodal_picc").val()
		});
	});
</script>