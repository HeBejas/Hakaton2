<header id="desktop">
    <div class="container">
        <nav>
            <div>
                <div class="drop_container">
                    <div class="drop_btn hover"><img src="assets/images/drop.svg" alt="Список" style="margin-right: 20px">Услуги</div>
                    <div class="drop">
                        <a href="tours.php" class="hover" id="tours">Экскурсии</a>
                        <a href="events.php" class="hover" id="events">Мероприятия</a>
                        <a href="houses.php" class="hover" id="houses">Гостевые домики</a>
                        <a href="funs.php" class="hover" id="funs">Развлечения</a>
                        <a href="milk.php" class="hover" id="milk">Молочная продукция</a>
                        <a href="history.php" class="hover" id="history">История</a>
                    </div>
                </div>
                <a href="investors.php" class="hover" id="investors">Инвесторам</a>
            </div>
            <div class="header_logo">
                <a href="/mvr"><img src="assets/images/logo.png" alt="Логотип"></a>
            </div>
            <div>
                <div class="icons">
                    <a href="https://instagram.com/muvyr.village?utm_medium=copy_link"><img src="assets/images/inst.svg" alt="Инстаграм"></a>
                    <a href="https://vk.com/weekendvmywer"><img src="assets/images/vk.svg" alt="ВК"></a>
                    <a href="https://t.me/discoverUdmurtia"><img src="assets/images/telegram.svg" alt="Телеграм"></a>
                </div>
                <a href="tel:" class="hover">+7 (901) 865 87-55</a>
            </div>
        </nav>
    </div>
</header>
<header id="mobile">
    <div class="mobile_box">
        <div class="icons">
            <a href="https://instagram.com/muvyr.village?utm_medium=copy_link"><img src="assets/images/inst.svg" alt="Инстаграм"></a>
            <a href="https://vk.com/weekendvmywer"><img src="assets/images/vk.svg" alt="ВК"></a>
            <a href="https://t.me/discoverUdmurtia"><img src="assets/images/telegram.svg" alt="Телеграм"></a>
        </div>
        <div class="header_logo">
            <a href="/mvr"><img src="assets/images/logo.png" alt="Логотип"></a>
        </div>
        <div class="burger">
            <svg width="40" height="30" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect y="15.1852" width="30" height="4.81481" rx="2.40741" fill="white"/>
            <rect y="7.77783" width="30" height="4.81481" rx="2.40741" fill="white"/>
            <rect width="30" height="4.81481" rx="2.40741" fill="white"/>
            </svg>
        </div>
    </div>
</header>
<script>
    var prevScrollpos = $(window).scrollTop();
    let i = false;
    $(".drop_btn").click(function() {
        if(i) {
            $(this).removeClass("drop_btn_active");
            $(".drop_btn img").attr("src", "assets/images/drop.svg");
            $(".drop").css({
                "max-height": "0px",
                "padding-top": "0px",
            });
            i = false;
        }
        else {
            $(this).addClass("drop_btn_active");
            $(".drop_btn img").attr("src", "assets/images/undrop.svg");
            $(".drop").css({
                "max-height": "600px",
                "padding-top": "40px",
            });
            i = true;
        }
        
    });
    $(window).scroll(function() {
        var currentScrollPos = $(window).scrollTop();
        if (prevScrollpos > currentScrollPos) {
            $("#mobile").css("top", "0px");
        } else {
            $("#mobile").css("top", "-200px");
        }
        prevScrollpos = currentScrollPos;
    });
</script>