<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гостевые Домики</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/houses.css">
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/slick/slick.min.js"></script>
</head>
<body>
    <?include 'include/header.php'?>
    <div class="container mt">
        <div class="header">Гостевые домики</div>
        <div class="houses_catalog">
            <?php
                include("connect.php");
                $query="SELECT * FROM house";
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
                            if($count%2 == 0) {
                            echo'
                                <div class="h_house wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                                    <div class="h_house_img_container">
                                        <img src="'.$row["pic_house"].'" alt="Фото домика" second_image="'.$row["pic2_house"].'">
                                    </div>
                                    <div class="h_title">'.$row["name_house"].'</div>
                                    <div class="h_price_number">'.$row["people_house"].' чел., '.$row["price_house"].'р.</div>
                                    <div class="h_desc">
                                        '.$row["desc_house"].'
                                    </div>
                                    <div class="h_btn" id="'.$row["id_house"].'">Бронировать</div>
                                </div>
                            ';}
                            else{
                                echo'
                                <div class="h_house wow animate__animated animate__fadeInUp">
                                    <div class="h_house_img_container">
                                        <img src="'.$row["pic_house"].'" alt="Фото домика" second_image="'.$row["pic2_house"].'">
                                    </div>
                                    <div class="h_title">'.$row["name_house"].'</div>
                                    <div class="h_price_number">'.$row["people_house"].' чел., '.$row["price_house"].'р.</div>
                                    <div class="h_desc">
                                        '.$row["desc_house"].'
                                    </div>
                                    <div class="h_btn" id="'.$row["id_house"].'">Бронировать</div>
                                </div>
                            ';}
                            $count++;
                        }
                    }
                }

            ?>
        </div>
        <div class="modal_bachdrop" id="modal_backdrop">
            <div class="modal">
                <div class="modal_close">✖</div>
                <div class="flex_space_between">
                    <div class="house_slider_box">
                        <div class="house_slider_track_box">
                            <div class="house_slider_1">
                                <div>
                                    <div class="house_img_box1">
                                        <img src="" alt="Фото со свадьбы" class="first_img">
                                    </div>
                                </div>
                                <div>
                                    <div class="house_img_box1">
                                        <img src="" alt="Фото со свадьбы" class="second_img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="house_slider_track_box">
                            <div class="house_slider_2">
                                <div>
                                    <div class="house_img_box2">
                                        <img src="" alt="Фото со свадьбы" class="first_img">
                                    </div>
                                </div>
                                <div>
                                    <div class="house_img_box2">
                                        <img src="" alt="Фото со свадьбы" class="second_img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h_modal_text">
                        <div class="h_title" id="title"></div>
                        <div class="h_price_number" id="price_number"></div>
                        <div class="h_desc" id="desc"></div>
                        <form>
                            <div class="input_wrapper">
                                <label for="name">ФИО</label>
                                <input type="text" id="name" maxlenght="255">
                            </div>
                            <div class="input_wrapper">
                                <label for="tel">Телефон</label>
                                <input type="text" id="tel" maxlenght="255">
                            </div>
                        </form>
                        <div class="h_btn" id="1">Оплатить</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?include 'include/footer.php'?>
    <script>
        $("#houses").addClass("active_header_btn")
        $(".house_slider_1").slick({
            swipe: false,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.house_slider_2',
        });
        $(".house_slider_2").slick({
            infinite: false,
            slidesToShow: 2,
            slidesToScroll: 1,
            asNavFor: '.house_slider_1',
            centerMode: true,
            focusOnSelect: true,
        });
        $(".h_btn").click(function() {
            var title = $(this).parent().find(".h_title").html();
            var pn = $(this).parent().find(".h_price_number").html();
            var desc = $(this).parent().find(".h_desc").html();
            var img1 = $(this).parent().find("img").attr("src");
            var img2 = $(this).parent().find("img").attr("second_image");
            console.log(img1, img2)
            $("#title").html(title);
            $("#price_number").html(pn);
            $("#desc").html(desc);
            $(".first_img").attr("src", img1);
            $(".second_img").attr("src", img2);
            $("#modal_backdrop").css({
                opacity: 1,
                "z-index": 1000,
            });
        });
        $("#modal_backdrop").click(function(event) {
            if(event.target.id == "modal_backdrop") {
                $(this).css({
                    opacity: 0,
                    "z-index": -1,
                });
            }
        })
        $(".modal_close").click(() => {
            $("#modal_backdrop").css({
                opacity: 0,
                "z-index": -1,
            });
        });
    </script>
    <script src="assets/js/wow.min.js"></script>
    <script>
    $(document).ready(() => {
        new WOW().init();
    })
    </script>
</body>
</html>