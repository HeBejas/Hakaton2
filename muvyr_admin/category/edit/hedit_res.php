<?php
    echo '<script>
                $(".modal_close").click(function(){
                    $("#edit_modal").css("display", "none");
                    location.reload();
                });
            </script>';
	include("../../connect.php");
    if(empty($_POST['name']) || empty($_POST['people']) || empty($_POST['desc']) || empty($_POST['price']) || empty($_POST['pic']) || empty($_POST['pic2']))
    {
        echo 'Заполнены не все значения
        <div class="default_button modal_close">Закрыть</div>';
        die();
    }
    $name = htmlspecialchars($_POST["name"]);
    $people = htmlspecialchars($_POST["people"]);
    $desc = htmlspecialchars($_POST["desc"]);
    $price = htmlspecialchars($_POST["price"]);
    $pic = htmlspecialchars($_POST["pic"]);
    $pic2 = htmlspecialchars($_POST["pic2"]);
    $query = "UPDATE house SET name_house = '$name', people_house = '$people' , desc_house = '$desc', price_house = '$price', pic_house = '$pic', pic2_house = '$pic2' WHERE id_house = '$_POST[id]' ";
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