<header>
    <div class="container">
        <nav>
            <div>
                <div class="drop_container">
                    <div class="drop_btn hover"><img src="assets/images/drop.svg" alt="Список">Услуги</div>
                    <div class="drop" style="display: none;">
                        <a href="" class="hover">Мероприятия</a>
                        <a href="" class="hover">Гостевые домики</a>
                        <a href="" class="hover">Развлечения</a>
                        <a href="#" class="hover">История</a>
                    </div>
                </div>
                <a href="#" class="hover">Инвесторам</a>
            </div>
            <div class="header_logo">
                <a href=""><img src="assets/images/logo.png" alt="Логотип"></a>
            </div>
            <div>
                <div class="icons">
                    <a href="https://instagram.com/muvyr.village?utm_medium=copy_link"><img src="assets/images/inst.svg" alt="Инстаграм"></a>
                    <a href="https://vk.com/weekendvmywer"><img src="assets/images/vk.svg" alt="ВК"></a>
                    <a href="https://t.me/discoverUdmurtia"><img src="assets/images/telegram.svg" alt="Телеграм"></a>
                </div>
                <a href="#tel" class="hover">+7 (901) 865 87-55</a>
            </div>
        </nav>
    </div>
</header>
<script>
    let i = false;
    $(".drop_btn").click(function() {
        if(i) {
            $(this).removeClass("drop_btn_active");
            $(".drop_btn img").attr("src", "assets/images/drop.svg");
            $(".drop").toggle("show");
            i = false;
        }
        else {
            $(this).addClass("drop_btn_active");
            $(".drop_btn img").attr("src", "assets/images/undrop.svg");
            $(".drop").toggle("show");
            i = true;
        }
        
    });
</script>