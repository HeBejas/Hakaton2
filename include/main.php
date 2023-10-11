<section class="welcome">
    <div class="welcome_title">
        Добро пожаловать в
        <p><span>Мувыр</span></p>
    </div>
</section>
<main>
    <div class="container margin_top">
        <div class="flex_space_between">
            <div class="text_box">
                <div class="header">Экотуризм в Мувыре</div>
                <div class="text">В деревне Мувыр можно наслаждаться природой, прогуляться по лесу до висячего моста, прокатиться на лодке, рыбачить, организовать барбекю, устроить пикник в беседке или под открытым небом и многое другое</div>
            </div>
            <div class="tours_slider_box">
                <div id="tour_prev_arrow" class="arrow"><</div>
                <div class="track_box">
                    <div class="tours" id="tour_slider">
                        <div class="tour">
                            <img src="assets/images/event.png" alt="ивент">
                            <div class="tour_header">Висячий мост</div>
                            <div class="tour_text">Подвесной мост через речку Лоза – еще одна причина посетить это интересное место</div>
                        </div>
                        <div class="tour">
                            <img src="assets/images/event.png" alt="ивент">
                            <div class="tour_header">Висячий мост</div>
                            <div class="tour_text">Подвесной мост через речку Лоза – еще одна причина посетить это интересное место</div>
                        </div>
                    </div>
                </div>
                <div id="tour_next_arrow" class="arrow">></div>
            </div>
        </div>
    </div>
    <div class="container margin_top">
        <div>
            <div class="header">Мепориятия</div>
            <div class="text">Мы предлагаем множество чудесных мероприятий</div>
        </div>
        <div class="event_slider_box">
            <div id="event_prev_arrow" class="arrow"><</div>
            <div class="event_track_box">
                <div class="events" id="event_slider">
                    <div class="event">
                        <img src="assets/images/event.png" alt="ивент">
                        <div class="tour_header">Висячий мост</div>
                        <div class="tour_text">Подвесной мост через речку Лоза – еще одна причина посетить это интересное место</div>
                    </div>
                    <div class="event">
                        <img src="assets/images/event.png" alt="ивент">
                        <div class="tour_header">Висячий мост</div>
                        <div class="tour_text">Подвесной мост через речку Лоза – еще одна причина посетить это интересное место</div>
                    </div>
                    <div class="event">
                        <img src="assets/images/event.png" alt="ивент">
                        <div class="tour_header">Висячий мост</div>
                        <div class="tour_text">Подвесной мост через речку Лоза – еще одна причина посетить это интересное место</div>
                    </div>
                    <div class="event">
                        <img src="assets/images/event.png" alt="ивент">
                        <div class="tour_header">Висячий мост</div>
                        <div class="tour_text">Подвесной мост через речку Лоза – еще одна причина посетить это интересное место</div>
                    </div>
                </div>
            </div>
            <div id="event_next_arrow" class="arrow">></div>
        </div>
    </div>
</main>
<script>
    $(document).ready(function() {
        $("#tour_slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: "#tour_prev_arrow",
            nextArrow: "#tour_next_arrow",
        });
        $("#event_slider").slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: "#event_prev_arrow",
            nextArrow: "#event_next_arrow",
        });
    })
    
</script>