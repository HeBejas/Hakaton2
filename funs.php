<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Развлечения</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/funs.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <script src="assets/js/jquery.js"></script>
</head>
<body>
    <?include 'include/header.php'?>
    <div class="container mt">
        <div class="page_content">
            <h2>Развлечения</h2>
            <div class="information_block">В деревне Мувыр можно наслаждаться природой, прогуляться по лесу до висячего моста, прокатиться на лодке, рыбачить, организовать барбекю, устроить пикник в беседке или под открытым небом и многое другое</div>
            <div class="prokat_catalog">
                <?php
                    include("include/connect.php");
                    $query="SELECT * FROM drive";
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
                            $count=1;
                            foreach ($data as $row) {
                                if($count == 1){
                                echo'
                                    <div class="prokat_block wow animate__animated animate__fadeInUp">
                                        <div class="fun_img_container">
                                            <img src="'.$row["pic_drive"].'">
                                        </div>
                                        <div class="prokat_name">'.$row["name_drive"].'</div>
                                        <div class="prokat_desc">'.$row["desc_drive"].'</div>
                                        <div class="prokat_priсe_block">'.$row["price_drive"].'</div>
                                    </div>
                                ';}
                                else if($count == 2){
                                echo'
                                    <div class="prokat_block wow animate__animated animate__fadeInUp"  data-wow-delay="0.2s">
                                        <div class="fun_img_container">
                                            <img src="'.$row["pic_drive"].'">
                                        </div>
                                        <div class="prokat_name">'.$row["name_drive"].'</div>
                                        <div class="prokat_desc">'.$row["desc_drive"].'</div>
                                        <div class="prokat_priсe_block">'.$row["price_drive"].'</div>
                                    </div>
                                ';}
                                else if($count == 3){
                                echo'
                                    <div class="prokat_block wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                                        <div class="fun_img_container">
                                            <img src="'.$row["pic_drive"].'">
                                        </div>
                                        <div class="prokat_name">'.$row["name_drive"].'</div>
                                        <div class="prokat_desc">'.$row["desc_drive"].'</div>
                                        <div class="prokat_priсe_block">'.$row["price_drive"].'</div>
                                    </div>
                                ';
                                $count = 0;}
                                $count++;
                            }
                        }
                    }
                    $link->close();
                ?>
            </div>
        </div>
    </div>
    <?include 'include/footer.php'?>
    <script>
        $("#funs").addClass("active_header_btn")
    </script>
    <script src="assets/js/wow.min.js"></script>
    <script>
    $(document).ready(() => {
        new WOW().init();
    })
    </script>
</body>
</html>