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
        <div class="page_content">
            <h2>Экскурсии</h2>
            <div class="information_block">В деревне Мувыр можно наслаждаться природой, прогуляться по лесу до висячего моста, прокатиться на лодке, рыбачить, организовать барбекю, устроить пикник в беседке или под открытым небом и многое другое.</div>
            <div class="tour_wrapper"> 
                <div class="tour_catalog">
                    <div class="tour_position wow animate__animated animate__fadeInUp">
                        <img src="event1.PNG">
                        <div class="tour_position_desc">
                            <div class="tour_name">Название</div>
                            <div class="tour_desc">Описание</div>
                            <div class="tour_desc">500 руб</div>
                        </div>
                    </div>

                    <div class="tour_position wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <img src="event1.PNG">
                        <div class="tour_position_desc">
                            <div class="tour_name">Название</div>
                            <div class="tour_desc">Описание</div>
                            <div class="tour_desc">500 руб</div>
                        </div>
                    </div>

                    <div class="tour_position wow animate__animated animate__fadeInUp">
                        <img src="event1.PNG">
                        <div class="tour_position_desc">
                            <div class="tour_name">Название</div>
                            <div class="tour_desc">Описание</div>
                            <div class="tour_desc">500 руб</div>
                        </div>
                    </div>

                    <div class="tour_position wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <img src="event1.PNG">
                        <div class="tour_position_desc">
                            <div class="tour_name">Название</div>
                            <div class="tour_desc">Описание</div>
                            <div class="tour_desc">500 руб</div>
                        </div>
                    </div>

                    <div class="tour_position wow animate__animated animate__fadeInUp">
                        <img src="event1.PNG">
                        <div class="tour_position_desc">
                            <div class="tour_name">Название</div>
                            <div class="tour_desc">Описание</div>
                            <div class="tour_desc">500 руб</div>
                        </div>
                    </div>
                </div>
            </div>
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