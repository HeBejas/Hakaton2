<?php
	include("../connect.php");
	$query="SELECT `orders`.`id_orders`, `house`.`name_house`, `orders`.`name_orders`, `orders`.`phone_orders`, `orders`.`start_orders`, `orders`.`end_orders` FROM `orders` LEFT JOIN `house` ON `orders`.`id_house`=`house`.`id_house`";
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
			<table border="1">
				<thead>
					<tr>
						<th>№</th>
						<th>Домик</th>
						<th>ФИО покупателя</th>
						<th>Телефон</th>
						<th>Начало брони</th>
						<th>Конец брони</th>
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
					<td>'.$row['start_orders'].'</td>
					<td>'.$row['end_orders'].'</td>
				</tr>';
			}
			echo '</tbody>
			</table>';
		}
	}


?>