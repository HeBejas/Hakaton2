<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>История Мувыра</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/milk.css">
    <script src="assets/js/jquery.js"></script>
</head>
<body>
    <?include 'include/header.php'?>
    <div class="contsiner mt">
        <div class="page_content">
            <h2>Молочная продукция</h2>
            <img class="milk_main_img" src="assets/images/milkmain1.jpg">
            <div class="information_block" style="margin-top: 25px;">Мувырский молокозавод производит молочную продукцию, полученную из отборного молока своих коров, что гарантирует высокую степень качества на всех этапах производства</div>
            <div class="information_block" style="margin-top: 25px;">Ознакомьтесь с нашей продукцией</div>

            <div class="milk_prod_cat" style="margin-top: 25px;">
                <div class="milk_prod_pos" >
                    <img src="assets/images/milk1.png">
                    <div class="milk_prod_name">Сыр мягкий "Мувырский"</div>
                </div>
                <div class="milk_prod_pos">
                    <img src="assets/images/milk1.png">
                    <div class="milk_prod_name">Сыр мягкий "Мувырский"</div>
                </div>
                <div class="milk_prod_pos">
                    <img src="assets/images/milk1.png">
                    <div class="milk_prod_name">Сыр мягкий "Мувырский"</div>
                </div>
            </div>
            <h2 style="margin-top: 50px;">Покупать Здесь</h2>
            <div class="information_block">Адреса торговых точек в г. Ижевск где вы можете приобрести продукцию мувырского молокозавода</div>
            <div class="milk_shop_pos">г Ижевск, ул Азина, д. 4г. Ижевск</div>
            <div class="milk_shop_pos">г Ижевск, ул 9 Января, д.239г </div>

            <div class="milk_gallery" style="margin-top: 50px;">
                <div><img src="assets/images/gallery1.jpg"></div>
                <div><img src="assets/images/gallery2.jpg"></div>
                <div><img src="assets/images/gallery3.jpg"></div>
                <div><img src="assets/images/gallery4.jpg"></div>
            </div>
        </div>
    </div>
    <?include 'include/footer.php'?>
    <script>
        $("#milk").addClass("active_header_btn")
    </script>
</body>
</html>