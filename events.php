<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мероприятия</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/events.css">
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/slick/slick.min.js"></script>
</head>
<body>
    <?include 'include/header.php'?>
    <div class="container mt">
        <div class="header">Мероприятия</div>
        <div class="events_catalog">
           <?php
                include("include/connect.php");
                $query="SELECT * FROM event";
                $link = mysqli_connect($host, $user, $password, $db_name); 
                $result = mysqli_query($link, $query);
                if($result == false) {
                    die("Произошла ошибка при выполнении запроса "); 
                }

                else {
                    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                    if(empty($data))
                    {
                        echo"Новых мероприятий нет!";
                    }
                    else{
                        foreach ($data as $row) {
                            echo'
                                <div class="e_event wow animate__animated animate__fadeInUp">
                                    <div class="e_event_img_container">
                                        <img src="'.$row["pic_event"].'" alt="Фото домика" second_image="assets/images/event2.jpg">
                                    </div>
                                    <div class="e_title">'.$row["name_event"].'</div>
                                    <div class="e_price_number">'.$row["time_event"].'</div>
                                    <div class="e_desc">
                                        '.$row["desc_event"].'
                                    </div>
                                </div>                            ';
                        }
                    }
                }
                $link->close();
            ?>
        </div>
    </div>
    <div class="container">
        <div class="page_content">
            <h2>Проведение свадеб</h2>
            <div class="information_block">Деревня Мувыре - прекрасное место для организации свадебных торжеств в живописной деревенской атмосфере. Расположенная в окружении природы, эта уникальная локация предлагает прекрасные возможности для создания незабываемой свадебной церемонии и веселого приема</div>
            <div class="marry_slider_box wow animate__animated animate__fadeInUp">
                <div class="marry_slider_track_box">
                    <div class="marry_slider_1">
                        <div>
                            <div class="marry_img_box1">
                                <img src="assets/images/marry1.jpg" alt="Фото со свадьбы">
                            </div>
                        </div>
                        <div>
                            <div class="marry_img_box1">
                                <img src="assets/images/marry2.jpg" alt="Фото со свадьбы">
                            </div>
                        </div>
                        <div>
                            <div class="marry_img_box1">
                                <img src="assets/images/marry3.jpg" alt="Фото со свадьбы">
                            </div>
                        </div>
                        <div>
                            <div class="marry_img_box1">
                                <img src="assets/images/marry4.jpg" alt="Фото со свадьбы">
                            </div>
                        </div>
                        <div>
                            <div class="marry_img_box1">
                                <img src="assets/images/marry5.jpg" alt="Фото со свадьбы">
                            </div>
                        </div>
                        <div>
                            <div class="marry_img_box1">
                                <img src="assets/images/marry6.jpg" alt="Фото со свадьбы">
                            </div>
                        </div>
                        <div>
                            <div class="marry_img_box1">
                                <img src="assets/images/marry7.jpg" alt="Фото со свадьбы">
                            </div>
                        </div>
                        <div>
                            <div class="marry_img_box1">
                                <img src="assets/images/marry8.jpg" alt="Фото со свадьбы">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="marry_slider_track_box">
                    <div class="marry_slider_2">
                        <div>
                            <div class="marry_img_box2">
                                <img src="assets/images/marry1.jpg" alt="Фото со свадьбы">
                            </div>
                        </div>
                        <div>
                            <div class="marry_img_box2">
                                <img src="assets/images/marry2.jpg" alt="Фото со свадьбы">
                            </div>
                        </div>
                        <div>
                            <div class="marry_img_box2">
                                <img src="assets/images/marry3.jpg" alt="Фото со свадьбы">
                            </div>
                        </div>
                        <div>
                            <div class="marry_img_box2">
                                <img src="assets/images/marry4.jpg" alt="Фото со свадьбы">
                            </div>
                        </div>
                        <div>
                            <div class="marry_img_box2">
                                <img src="assets/images/marry5.jpg" alt="Фото со свадьбы">
                            </div>
                        </div>
                        <div>
                            <div class="marry_img_box2">
                                <img src="assets/images/marry6.jpg" alt="Фото со свадьбы">
                            </div>
                        </div>
                        <div>
                            <div class="marry_img_box2">
                                <img src="assets/images/marry7.jpg" alt="Фото со свадьбы">
                            </div>
                        </div>
                        <div>
                            <div class="marry_img_box2">
                                <img src="assets/images/marry8.jpg" alt="Фото со свадьбы">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="information_block">
                <p>Организация свадьбы в Мувыре, выездные регистрации в деревне:</p>
                <p>Вы можете договорится по телефону <span class="tel">+7 (901) 865 87-55</span> или оставить заявку</p>
                <div class="e_btn">Оставить заявку</div>
            </div>
        </div>
    </div>
    <div class="modal_bachdrop" id="modal_backdrop">
        <div class="modal">
            <div class="modal_close">✖</div>
            <div class="e_modal_text">
                <div class="e_title" id="title">Оставить заявку на проведение свадьбы</div>
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
                <div class="e_btn" id="e_buy">Оставить заявку</div>
            </div>
        </div>
    </div>
    <?include 'include/footer.php'?>
    <script>
        $("#events").addClass("active_header_btn");
        $(".marry_slider_1").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.marry_slider_2',
        });
        $(".marry_slider_2").slick({
            arrows: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.marry_slider_1',
            centerMode: true,
            focusOnSelect: true,
            responsive: [
                {
                breakpoint: 650,
                settings: {
                    slidesToShow: 3,
                }
                },
                {
                breakpoint: 550,
                settings: {
                    slidesToShow: 2,
                }
                },
            ],
        });
        $(".e_btn").click(function() {
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