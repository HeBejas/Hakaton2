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
            <div class="t_tour wow animate__animated animate__fadeInUp">
                <div class="t_tour_img_container">
                    <img src="assets/images/tour1.jpg" alt="Фото домика" second_image="assets/images/tour2.jpg">
                </div>
                <div class="t_title">Домик 1</div>
                <div class="t_price_number">4 чел., 3300р.</div>
                <div class="t_desc">
                    <p>Туалет, умывальник на улице</p>
                    <p>Есть костровая зона, в которой можно приготовить еду в летнее время. Мангал, котел, казан можно взять в аренду.</p>
                </div>
                <div class="t_btn" id="1">Бронировать</div>
            </div>
            <div class="t_tour wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                <div class="t_tour_img_container">
                    <img src="assets/images/tour1.jpg" alt="Фото домика" second_image="assets/images/tour2.jpg">
                </div>
                <div class="t_title">Домик 1</div>
                <div class="t_price_number">4 чел., 3300р.</div>
                <div class="t_desc">
                    <p>Туалет, умывальник на улице</p>
                    <p>Есть костровая зона, в которой можно приготовить еду в летнее время. Мангал, котел, казан можно взять в аренду.</p>
                </div>
                <div class="t_btn" id="1">Бронировать</div>
            </div>
            <div class="t_tour wow animate__animated animate__fadeInUp">
                <div class="t_tour_img_container">
                    <img src="assets/images/tour1.jpg" alt="Фото домика" second_image="assets/images/tour2.jpg">
                </div>
                <div class="t_title">Домик 1</div>
                <div class="t_price_number">4 чел., 3300р.</div>
                <div class="t_desc">
                    <p>Туалет, умывальник на улице</p>
                    <p>Есть костровая зона, в которой можно приготовить еду в летнее время. Мангал, котел, казан можно взять в аренду.</p>
                </div>
                <div class="t_btn" id="1">Бронировать</div>
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