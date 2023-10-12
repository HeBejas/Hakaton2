<?php
echo '<script>
                $(".modal_close").click(function(){
                    $("#edit_modal").css("display", "none");
                    location.reload();
                });
            </script>';
include("../../connect.php");
$query = "SELECT * from address WHERE id_address='$_POST[id]'";
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
			<div class="modal" id="mae">
				<form id="address_edit">
					<div class="modal_flex">
						<h2>Изменение</h2>
					</div>
					<div id="modal_inputs">
						<input type="hidden" id="hmae" value="'.$row["id_address"].'">
						<div class="modal_inp">
							<label for="name_address" class="modal_lbl">Адрес</label>
							<input type="text" name="name_address" id="emodal_namec" minlength="3" value="'.$row["name_address"].'">
						</div>
						<div class="modal_flex">
							<button type="submit" class="default_button" id="aedit_btn">Изменить</button>
							<div class="default_button modal_close">Закрыть</div>
						</div>
					</div>
					<div class="modal_flex" id="aedit_verify"></div>
				</form>
			</div>';
		}
	}
?>
<script>
	$(".modal_close").click(function(){
		$("#edit_modal").css("display", "none");
	});
	$("#address_edit").submit(function(event){
		event.preventDefault();
		$("#mae").load("category/edit/aedit_res.php", {id: $("#hmae").val(), name: $("#emodal_namec").val(), desc: $("#emodal_descc").val(), pic: $("#emodal_picc").val()
		});
	});
</script>