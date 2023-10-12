<?php
echo '<script>
                $(".modal_close").click(function(){
                    $("#edit_modal").css("display", "none");
                    location.reload();
                });
            </script>';
include("../../connect.php");
$query = "SELECT * from tours WHERE id_tour='$_POST[id]'";
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
			<div class="modal" id="mte">
				<form id="tours_edit" enctype="multipart/form-data">
					<div class="modal_flex">
						<h2>Изменение</h2>
					</div>
					<div id="modal_inputs">
						<input type="hidden" id="hmte" value="'.$row["id_tour"].'">
						<div class="modal_inp">
							<label for="name_tour" class="modal_lbl">Название экскурсии</label>
							<input type="text" name="name_tour" id="emodal_namec" minlength="3" value="'.$row["name_tour"].'">
						</div>
						<div class="modal_inp">
							<label for="desc_tour" class="modal_lbl">Описание экскурсии</label>
							<textarea type="text" name="desc_tour" id="emodal_descc" class="desc" minlength="3" rows="10">'.$row["desc_tour"].'</textarea>
						</div>
						<div class="modal_inp">
							<label for="price_tour" class="modal_lbl">Цена экскурсии</label>
							<input type="text" name="price_tour" id="emodal_pricec" minlength="3" value="'.$row["price_tour"].'">
						</div>
						<div class="modal_inp">
							<label for="pic_tour" class="modal_lbl">Ссылка на картинку (URL)</label>
							<input type="text" name="pic_tour" id="emodal_picc" minlength="3" value="'.$row["pic_tour"].'">
						</div>
						<div class="modal_flex">
							<button type="submit" class="default_button" id="tedit_btn">Изменить</button>
							<div class="default_button modal_close">Закрыть</div>
						</div>
					</div>
					<div class="modal_flex" id="tedit_verify"></div>
				</form>
			</div>';
		}
	}
?>
<script>
	$(".modal_close").click(function(){
		$("#edit_modal").css("display", "none");
	});
	$("#tours_edit").submit(function(event){
		event.preventDefault();
		$("#mte").load("category/edit/tedit_res.php", {id: $("#hmte").val(), name: $("#emodal_namec").val(), desc: $("#emodal_descc").val(), price: $("#emodal_pricec").val(), pic: $("#emodal_picc").val()
		});
	});
</script>