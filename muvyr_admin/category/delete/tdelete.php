<?php

	include("../../connect.php");
    $query = "DELETE FROM tours WHERE `tours`.`id_tour` = '$_POST[id]'";
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
                    $("#delete_modal").css("display", "none");
                    location.reload();
                });
            </script>
        ';
    }
?>