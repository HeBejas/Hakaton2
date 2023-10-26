<?php
	echo '<script>
                $(".modal_close").click(function(){
                    $("#create_modal").css("display", "none");
                    location.reload();
                });
            </script>';
	include("../../connect.php");
    if(empty($_POST['name']) || empty($_POST['desc']) || empty($_POST['pic']))
    {
        echo 'Заполнены не все значения
        <div class="default_button modal_close">Закрыть</div>';
        die();
    }
    $name = htmlspecialchars($_POST["name"]);
    $desc = htmlspecialchars($_POST["desc"]);
    $pic = htmlspecialchars($_POST["pic"]);
    $query = "INSERT INTO milk(name_milk, desc_milk, pic_milk) VALUES ('$name', '$desc', '$pic')";
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