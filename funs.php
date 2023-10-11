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
                <div class="prokat_block wow animate__animated animate__fadeInUp">
                    <div class="fun_img_container">
                        <img src="assets/images/fun2.jpg">
                    </div>
                    <div class="prokat_name">Лодка</div>
                    <div class="prokat_desc">30 мин Вместимость одной лодки 3 взрослых 1 ребёнок</div>
                    <div class="prokat_priсe_block"> От <span class="prokat_priсe"> 400 </span> За человека</div>
                </div>
                <div class="prokat_block wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="fun_img_container">
                        <img src="assets/images/fun2.jpg">
                    </div>
                    <div class="prokat_name">Лодка</div>
                    <div class="prokat_desc">30 мин Вместимость одной лодки 3 взрослых 1 ребёнок</div>
                    <div class="prokat_priсe_block"> От <div class="prokat_priсe"> 400 </div> За человека</div>
                </div>
                <div class="prokat_block wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                    <div class="fun_img_container">
                        <img src="assets/images/fun2.jpg">
                    </div>
                    <div class="prokat_name">Лодка</div>
                    <div class="prokat_desc">30 мин Вместимость одной лодки 3 взрослых 1 ребёнок</div>
                    <div class="prokat_priсe_block"> От <div class="prokat_priсe"> 400 </div> За человека</div>
                </div>
                <div class="prokat_block wow animate__animated animate__fadeInUp">
                    <div class="fun_img_container">
                        <img src="assets/images/fun2.jpg">
                    </div>
                    <div class="prokat_name">Лодка</div>
                    <div class="prokat_desc">30 мин Вместимость одной лодки 3 взрослых 1 ребёнок</div>
                    <div class="prokat_priсe_block"> От <div class="prokat_priсe"> 400 </div> За человека</div>
                </div>
                <div class="prokat_block wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="fun_img_container">
                        <img src="assets/images/fun2.jpg">
                    </div>
                    <div class="prokat_name">Лодка</div>
                    <div class="prokat_desc">30 мин Вместимость одной лодки 3 взрослых 1 ребёнок</div>
                    <div class="prokat_priсe_block"> От <div class="prokat_priсe"> 400 </div> За человека</div>
                </div>
                <div class="prokat_block wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                    <div class="fun_img_container">
                        <img src="assets/images/fun2.jpg">
                    </div>
                    <div class="prokat_name">Лодка</div>
                    <div class="prokat_desc">30 мин Вместимость одной лодки 3 взрослых 1 ребёнок</div>
                    <div class="prokat_priсe_block"> От <div class="prokat_priсe"> 400 </div> За человека</div>
                </div>
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