<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>История Мувыра</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/investors.css">
    <script src="assets/js/jquery.js"></script>
</head>
<body>
    <?include 'include/header.php'?>
    <div class="container mt">
        <div class="goals_title">Наши Цели</div>
        <div class="goals">
                <?php
                    include("connect.php");
                    $query="SELECT * FROM project";
                    $link = mysqli_connect($host, $user, $password, $db_name); 
                    $result = mysqli_query($link, $query);
                    if($result == false) {
                        die("Произошла ошибка при выполнении запроса "); 
                    }

                    else {
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        if(empty($data))
                        {
                            echo"Новых развлечений нет!";
                        }
                        else{
                            foreach ($data as $row) {
                                echo'
                                    <div class="goal wow animate__animated animate__backInUp">
                                        <div class="goal_img_container">
                                            <img src="'.$row["pic_project"].'" alt="Фото проекта">
                                        </div>
                                        <div class="goal_text">
                                            <div class="goal_header">'.$row["name_project"].'</div>
                                            <div class="text">'.$row["desc_project"].'</div>
                                        </div>
                                    </div>
                                ';
                            }
                        }
                    }

                ?>
    </div>
        <div class="investors">Инвестируя в возрожденную деревню Мувыр, вы не только получите выгоду и прибыль, но и внесете значимый вклад в развитие этого прекрасного места. Мы гарантируем прозрачность, надежность и сотрудничество на взаимовыгодных условиях. </div>
    </div>
    <?include 'include/footer.php'?>
    <script>
        $("#investors").addClass("active_header_btn")
    </script>
</body>
</html>