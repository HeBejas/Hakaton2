<?php
echo '<script>
                $(".modal_close").click(function(){
                    $("#edit_modal").css("display", "none");
                    location.reload();
                });
            </script>';
include("../../connect.php");
$query = "SELECT * from drive WHERE id_drive='$_POST[id]'";
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
			<div class="modal" id="mde">
				<form id="drive_edit">
					<div class="modal_flex">
						<h2>Изменение</h2>
					</div>
					<div id="modal_inputs">
						<input type="hidden" id="hmde" value="'.$row["id_drive"].'">
						<div class="modal_inp">
							<label for="name_drive" class="modal_lbl">Название</label>
							<input type="text" name="name_drive" id="emodal_namec" minlength="3" value="'.$row["name_drive"].'">
						</div>
						<div class="modal_inp">
							<label for="desc_drive" class="modal_lbl">Описание</label>
							<textarea type="text" name="desc_drive" id="emodal_descc" class="desc" minlength="3" rows="10">'.$row["desc_drive"].'</textarea>
						</div>
						<div class="modal_inp">
							<label for="price_drive" class="modal_lbl">Цена</label>
							<input type="text" name="price_drive" id="emodal_pricec" minlength="3" value="'.$row["price_drive"].'">
						</div>
						<div class="modal_inp">
							<label for="pic_drive" class="modal_lbl">Ссылка на картинку (URL)</label>
							<input type="text" name="pic_drive" id="emodal_picc" minlength="3" value="'.$row["pic_drive"].'">
						</div>
						<div class="modal_flex">
							<button type="submit" class="default_button" id="dedit_btn">Изменить</button>
							<div class="default_button modal_close">Закрыть</div>
						</div>
					</div>
					<div class="modal_flex" id="dedit_verify"></div>
				</form>
			</div>';
		}
	}
	$link->close();
?>
<script>
	$(".modal_close").click(function(){
		$("#edit_modal").css("display", "none");
	});
	$("#drive_edit").submit(function(event){
		event.preventDefault();
		$("#mde").load("category/edit/dedit_res.php", {id: $("#hmde").val(), name: $("#emodal_namec").val(), desc: $("#emodal_descc").val(), price: $("#emodal_pricec").val(), pic: $("#emodal_picc").val()
		});
	});
</script>