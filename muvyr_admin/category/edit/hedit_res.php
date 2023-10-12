<?php

	include("../../connect.php");
    if(empty($_POST['name']) || empty($_POST['people']) || empty($_POST['desc']) || empty($_POST['price']) || empty($_POST['pic']) || empty($_POST['pic2']))
    {
        echo 'Заполнены не все значения
        <div class="default_button modal_close">Закрыть</div>';
        die();
    }

    $query = "UPDATE house SET name_house = '$_POST[name]', people_house = '$_POST[people]' , desc_house = '$_POST[desc]', price_house = '$_POST[price]', pic_house = '$_POST[pic]', pic2_house = '$_POST[pic2]' WHERE id_house = '$_POST[id]' ";
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
                    $("#edit_modal").css("display", "none");
                    location.reload();
                });
            </script>
        ';
    }
?>