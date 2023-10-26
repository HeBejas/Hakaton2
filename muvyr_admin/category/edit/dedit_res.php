<?php
    echo '<script>
                $(".modal_close").click(function(){
                    $("#edit_modal").css("display", "none");
                    location.reload();
                });
            </script>';
	include("../../connect.php");
    if(empty($_POST['name']) || empty($_POST['desc']) || empty($_POST['price']) || empty($_POST['pic']))
    {
        echo 'Заполнены не все значения
        <div class="default_button modal_close">Закрыть</div>';
        die();
    }
    $name = htmlspecialchars($_POST["name"]);
    $desc = htmlspecialchars($_POST["desc"]);
    $price = htmlspecialchars($_POST["price"]);
    $pic = htmlspecialchars($_POST["pic"]);
    $query = "UPDATE drive SET name_drive = '$name', desc_drive = '$desc', price_drive = '$price', pic_drive = '$pic' WHERE id_drive = '$_POST[id]' ";
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
        ';
    }
    $link->close();
?>