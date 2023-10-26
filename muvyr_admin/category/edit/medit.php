<?php
echo '<script>
                $(".modal_close").click(function(){
                    $("#edit_modal").css("display", "none");
                    location.reload();
                });
            </script>';
include("../../connect.php");
$query = "SELECT * from milk WHERE id_milk='$_POST[id]'";
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
			<div class="modal" id="mme">
				<form id="milk_edit">
					<div class="modal_flex">
						<h2>Изменение</h2>
					</div>
					<div id="modal_inputs">
						<input type="hidden" id="hmme" value="'.$row["id_milk"].'">
						<div class="modal_inp">
							<label for="name_milk" class="modal_lbl">Название</label>
							<input type="text" name="name_milk" id="emodal_namec" minlength="3" value="'.$row["name_milk"].'">
						</div>
						<div class="modal_inp">
							<label for="desc_milk" class="modal_lbl">Описание продукции</label>
							<textarea type="text" name="desc_milk" id="emodal_descc" class="desc" minlength="3" rows="10">'.$row["desc_milk"].'</textarea>
						</div>
						<div class="modal_inp">
							<label for="pic_milk" class="modal_lbl">Ссылка на картинку (URL)</label>
							<input type="text" name="pic_milk" id="emodal_picc" minlength="3" value="'.$row["pic_milk"].'">
						</div>
						<div class="modal_flex">
							<button type="submit" class="default_button" id="medit_btn">Изменить</button>
							<div class="default_button modal_close">Закрыть</div>
						</div>
					</div>
					<div class="modal_flex" id="medit_verify"></div>
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
	$("#milk_edit").submit(function(event){
		event.preventDefault();
		$("#mme").load("category/edit/medit_res.php", {id: $("#hmme").val(), name: $("#emodal_namec").val(), desc: $("#emodal_descc").val(), pic: $("#emodal_picc").val()
		});
	});
</script>