<div id="delete_modal" class="modal_background">
	<div class="modal" id="mod">
		<form id="orders_delete">
			<div class="modal_flex">
				<h2>Вы уверены, что хотите удалить?</h2>
			</div>
			<input type="hidden" id="hmod">
			<div class="modal_flex">
				<button type="submit" class="default_button" id="odelete_btn">Да, удалить</button>
				<div class="default_button modal_close">Нет, закрыть</div>
			</div>
		</form>
	</div>
</div>
<?php
	include("../connect.php");
	$query="SELECT `orders_house`.`id_orders`, `house`.`name_house`, `orders_house`.`name_orders`, `orders_house`.`phone_orders` FROM `orders_house` LEFT JOIN `house` ON `orders_house`.`id_house`=`house`.`id_house`";
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
			<table border="1" id="orders_table">
				<thead>
					<tr>
						<th>№</th>
						<th>Домик</th>
						<th>ФИО покупателя</th>
						<th>Телефон</th>
						<th>Действия</th>
					</tr>
				</thead>
				<tbody>';
			foreach ($data as $row) {
				echo '
				<tr>
					<td>'.$row['id_orders'].'</td>
					<td>'.$row['name_house'].'</td>
					<td>'.$row['name_orders'].'</td>
					<td>'.$row['phone_orders'].'</td>
					<td><div class="default_button o_delete" id="od'.$row['id_orders'].'">Удалить</div></td>
				</tr>';
			}
			echo '</tbody>
			</table>';
		}
	}
    $link->close();

?>
<script>
	tableo = new DataTable('#orders_table', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/ru.json',
    },
	});
	$(".o_delete").click(function(){
		$("#delete_modal").css("display", "flex");
		var del_id0 = $(this).attr("id");
		var del_id = del_id0.substring(2, del_id0.length);
		$("#hmod").val(del_id);
	});
	$("#milk_delete").submit(function(event){
		event.preventDefault();
		$("#mod").load("category/delete/odelete.php", {id: $("#hmod").val()});
	});
</script>