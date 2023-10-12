<?php

	include("connect.php");
    if(empty($_POST['house']) || empty($_POST['name']) || empty($_POST['phone']))
    {
        echo 'Заполнены не все значения';
        die();
    }

    $query = "INSERT INTO orders (id_house, name_orders, phone_orders) VALUES ('$_POST[house]', '$_POST[name]', '$_POST[phone]')";
    $link = mysqli_connect($host, $user, $password, $db_name); 
    $result = mysqli_query($link, $query);
    if($result == false) {
        die('Произошла ошибка при выполнении запроса '); 
    }
    else {
        echo'
            Ваша заявка оставлена! Вам позвонят в ближайшее время
        ';
    }
?>