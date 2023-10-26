<?php
echo '<script>
                $(".modal_close").click(function(){
                    $("#edit_modal").css("display", "none");
                    location.reload();
                });
            </script>';
include("../../connect.php");
$query = "SELECT * from house WHERE id_house='$_POST[id]'";
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
			<div class="modal" id="mhe">
				<form id="house_edit">
					<div class="modal_flex">
						<h2>Изменение</h2>
					</div>
					<div id="modal_inputs">
						<input type="hidden" id="hmhe" value="'.$row["id_house"].'">
						<div class="modal_inp">
							<label for="name_house" class="modal_lbl">Название домика</label>
							<input type="text" name="name_house" id="emodal_namec" minlength="3" value="'.$row["name_house"].'">
						</div>
						<div class="modal_inp">
							<label for="people_house" class="modal_lbl">Кол-во людей</label>
							<input type="text" name="people_house" id="emodal_peoplec" minlength="1" value="'.$row["people_house"].'">
						</div>
						<div class="modal_inp">
							<label for="desc_house" class="modal_lbl">Описание экскурсии</label>
							<textarea type="text" name="desc_house" id="emodal_descc" class="desc" minlength="3" rows="10">'.$row["desc_house"].'</textarea>
						</div>
						<div class="modal_inp">
							<label for="price_house" class="modal_lbl">Цена экскурсии</label>
							<input type="text" name="price_house" id="emodal_pricec" minlength="1" value="'.$row["price_house"].'">
						</div>
						<div class="modal_inp">
							<label for="pic_house" class="modal_lbl">Ссылка на картинку (URL)</label>
							<input type="text" name="pic_house" id="emodal_picc" minlength="3" value="'.$row["pic_house"].'">
						</div>
						<div class="modal_inp">
							<label for="pic2_house" class="modal_lbl">Ссылка на дополнительную картинку (URL)</label>
							<input type="text" name="pic_house" id="emodal_pic2c" minlength="3" value="'.$row["pic2_house"].'">
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
	$link->close();
?>
<script>
	$(".modal_close").click(function(){
		$("#edit_modal").css("display", "none");
	});
	$("#house_edit").submit(function(event){
		event.preventDefault();
		$("#mhe").load("category/edit/hedit_res.php", {id: $("#hmhe").val(), name: $("#emodal_namec").val(), people: $("#emodal_peoplec").val(), desc: $("#emodal_descc").val(), price: $("#emodal_pricec").val(), pic: $("#emodal_picc").val(), pic2: $("#emodal_pic2c").val()
		});
	});
</script>