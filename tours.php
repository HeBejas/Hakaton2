<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Экскурсии</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/tours.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <script src="assets/js/jquery.js"></script>
</head>
<body>
    <?include 'include/header.php'?>
    <div class="container mt">
        <div class="header">Экскурсии</div>
        <div class="tours_catalog">
            <?php
                include("connect.php");
                $query="SELECT * FROM tours";
                $link = mysqli_connect($host, $user, $password, $db_name); 
                $result = mysqli_query($link, $query);
                if($result == false) {
                    die("Произошла ошибка при выполнении запроса "); 
                }

                else {
                    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                    if(empty($data))
                    {
                        echo"Новых туров нет!";
                    }
                    else{
                        foreach ($data as $row) {
                            echo'
                                <div class="t_tour wow animate__animated animate__fadeInUp">
                                    <div class="t_tour_img_container">
                                        <img src="'.$row["pic_tour"].'" alt="Фото домика">
                                    </div>
                                    <div class="t_title">'.$row["name_tour"].'</div>
                                    <div class="t_price_number">'.$row["price_tour"].' руб.</div>
                                    <div class="t_desc">
                                        '.$row["desc_tour"].'
                                    </div>
                                </div>
                            ';
                        }
                    }
                }

            ?>
        </div>
    </div>
    <?include 'include/footer.php'?>
    <script>
        $("#tours").addClass("active_header_btn")
    </script>
    <script src="assets/js/wow.min.js"></script>
    <script>
    $(document).ready(() => {
        new WOW().init();
    })
    </script>
</body>
</html>