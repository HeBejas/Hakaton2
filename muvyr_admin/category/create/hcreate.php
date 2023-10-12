<?php

	include("../../connect.php");
    if(empty($_POST['name']) || empty($_POST['people']) || empty($_POST['desc']) || empty($_POST['price']) || empty($_POST['pic']) || empty($_POST['pic2']))
    {
        echo 'Заполнены не все значения
        <div class="default_button modal_close">Закрыть</div>';
        die();
    }

    $query = "INSERT INTO house(name_house, people_house, desc_house, price_house, pic_house, pic2_house) VALUES ('$_POST[name]', '$_POST[people]', '$_POST[desc]', '$_POST[price]', '$_POST[pic]', '$_POST[pic2]')";
    $link = mysqli_connect($host, $user, $password, $db_name); 
    $result = mysqli_query($link, $query);
    if($result == false) {
        die('Произошла ошибка при выполнении запроса 
            <div class="default_button modal_close">Закрыть</div>'); 
    }
    else {
        echo'
            Операция выполнена! 
            <div class="default_button modal_close">Закрыть</div>
            <script>
                $(".modal_close").click(function(){
                    $("#create_modal").css("display", "none");
                    location.reload();
                });
            </script>
        ';
    }
?>