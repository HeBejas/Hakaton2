<section class="welcome">
    <div class="welcome_title wow animate__animated animate__fadeInUpBig">
        Добро пожаловать в
        <p><span>Мувыр</span></p>
    </div>
</section>
<main>
    <div class="container margin_top">
        <div class="flex_space_between">
            <div class="text_box wow animate__animated animate__fadeIn">
                <div class="header">Экотуризм в Мувыре</div>
                <div class="text">В деревне Мувыр можно наслаждаться природой, прогуляться по лесу до висячего моста, прокатиться на лодке, рыбачить, организовать барбекю, устроить пикник в беседке или под открытым небом и многое другое</div>
            </div>
            <div class="tours_slider_box wow animate__animated animate__fadeInRight">
                <div id="tour_prev_arrow" class="arrow"><</div>
                <div class="track_box">
                    <div class="tours" id="tour_slider">
                        <?php
                            include("connect.php");
                            $query="SELECT * FROM tours";
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
                                    foreach ($data as $row) {
                                        echo'
                                            <div class="tour">
                                                <div class="box"><img src="'.$row["pic_tour"].'" alt="ивент"></div>
                                                <div class="tour_header">'.$row["name_tour"].'</div>
                                                <div class="tour_text">'.substr($row["desc_tour"], 0, 58)."...".'</div>
                                            </div>
                                        ';
                                    }
                                }
                            }

                        ?>
                    </div>
                </div>
                <div id="tour_next_arrow" class="arrow">></div>
            </div>
        </div>
        <div style="float: right; margin-top: 15px">
            <a href="tours.php" class="page_link">Все Экскурсии</a>
        </div>
    </div>
    <div class="container margin_top">
        <div class="wow animate__animated animate__fadeIn">
            <div class="header">Мероприятия</div>
            <div class="text">Мы предлагаем множество чудесных мероприятий</div>
        </div>
        <div class="event_slider_box">
            <div id="event_prev_arrow" class="arrow"><</div>
            <div class="event_track_box">
                <div class="events" id="event_slider">
                    <?php
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
                                    echo"Новых развлечений нет!";
                                }
                                else{
                                    foreach ($data as $row) {
                                        echo'
                                            <div class="event wow animate__animated animate__fadeInUp">
                                                <div class="box"><img src="'.$row["pic_event"].'" alt="ивент"></div>
                                                <div class="tour_header">'.$row["name_event"].'</div>
                                                <div class="tour_text">'.substr($row["desc_event"], 0, 60)."...".'</div>
                                            </div>
                                        ';
                                    }
                                }
                            }

                        ?>
                </div>
            </div>
            <div id="event_next_arrow" class="arrow">></div>
        </div>
        <div style="float: right; margin-top: 15px">
            <a href="events.php" class="page_link">Все Мероприятия</a>
        </div>
    </div>
    <div class="container margin_top">
        <div class="flex_space_between">
            <div class="wow animate__animated animate__fadeIn">
                <div class="header">Организация Свадеб</div>
                <div class="text">Мы предлагаем уникальную возможность создать незабываемое свадебное торжество в живописной деревне Мувыр. Наша команда профессионалов занимается всеми аспектами организации свадебного мероприятия, начиная от выбора идеального места для проведения церемонии и банкета до оформления и развлекательной программы</div>
                <div style="margin-top: 20px">
                    <a href="events.php" class="page_link">Все Мероприятия</a>
                </div>
            </div>
            <img src="assets/images/marry.jpg" alt="Свадьбы" class="marry_img wow animate__animated animate__zoomIn">
        </div>
    </div>
    <div class="container margin_top">
        <div class="wow animate__animated animate__fadeIn">
            <div class="header">Развлечения</div>
            <div class="text">Мы предлагаем большой спектр развлечений</div>
        </div>
        <div class="flex_space_between" style="margin-top: 20px;">
            <div class="fun_main_img_container wow animate__animated animate__slideInUp">
                <img src="assets/images/fun1.jpg" alt="Развлечение" class="fun_main_img">
            </div>
            <div class="fun_images">
                <div class="fun_img_container wow animate__animated animate__slideInUp" data-wow-delay="0.3s">
                    <img src="assets/images/fun2.jpg" alt="Развлечение" class="fun_img">
                </div>
                <div class="fun_img_container wow animate__animated animate__slideInUp" data-wow-delay="0.45s">
                    <img src="assets/images/fun3.jpg" alt="Развлечение" class="fun_img">
                </div>
            </div>
        </div>
        <div style="float: right; margin-top: 15px">
            <a href="funs.php" class="page_link">Развлечения</a>
        </div>
    </div>
    <div class="container margin_top">
        <div class="wow animate__animated animate__fadeIn">
            <div class="header">Гостевые Домики</div>
            <div class="text">
                <p>Мы предлагаем вам остановиться в наших</p>
                <p>уютных гостевых домиках</p>
            </div>
        </div>
        <div class="houses">
             <?php
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
                        foreach ($data as $row) {
                            echo'
                                <div class="house wow animate__animated animate__fadeInLeft">
                                    <div class="house_img_container">
                                        <img src="'.$row["pic_house"].'" alt="Домик">
                                    </div>
                                    <div class="house_title">'.$row["name_house"].'</div>
                                    <div class="house_desc">'.$row["people_house"].' чел., '.$row["price_house"].' р.</div>
                                </div>
                            ';
                        }
                    }
                }

            ?>
        </div>
        <div style="float: right; margin-top: 15px">
            <a href="houses.php" class="page_link">Бронировать</a>
        </div>
    </div>
    <div class="container margin_top">
        <div class="flex_space_between">
            <div class="milk_text wow animate__animated animate__fadeIn">
                <div class="header">Молочная Продукция</div>
                <div class="text">Молочная продукция, производящаяся в деревне Мувыр представляет широкий ассортимент свежих и натуральных молочных продуктов, созданных с любовью и заботой в нашей деревне. Мы гордимся высоким качеством нашей продукции, которая производится из свежего молока, полученного от местных коров. Наша команда экспертов следит за каждым этапом производства, чтобы обеспечить вам самые вкусные и полезные молочные продукты. От свежего молока до йогуртов, сыров и масла - мы предлагаем вам насладиться натуральными и питательными продуктами от нашей деревни Мувыр.</div>
                <div style="float: left; margin-top: 30px">
                    <a href="milk.php" class="page_link">Молочая продукция</a>
                </div>
            </div>
            <div class="milk_img_container wow animate__animated animate__zoomIn">
                <img src="assets/images/milk.jpg" alt="Молочная продукция" class="milk_img">
            </div>
        </div>
    </div>
    <div class="container margin_top">
        <div class="goals_title">Наши Цели</div>
        <div class="goals">
                <?php
                    $query="SELECT * FROM project";
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
                            foreach ($data as $row) {
                                echo'
                                    <div class="goal wow animate__animated animate__backInUp">
                                        <div class="goal_img_container">
                                            <img src="'.$row["pic_project"].'" alt="Фото проекта">
                                        </div>
                                        <div class="goal_text">
                                            <div class="goal_header">'.$row["name_project"].'</div>
                                            <div class="text">'.$row["desc_project"].'</div>
                                        </div>
                                    </div>
                                ';
                            }
                        }
                    }

                ?>
        </div>
        <div class="investors">Инвестируя в возрожденную деревню Мувыр, вы не только получите выгоду и прибыль, но и внесете значимый вклад в развитие этого прекрасного места. Мы гарантируем прозрачность, надежность и сотрудничество на взаимовыгодных условиях. </div>
    </div>
    <div class="container" style="margin-block: 30px;">
        <div class="flex_space_between">
            <div class="his_img_box">
                <img src="assets/images/his.png" alt="История">
            </div>
            <div class="his_text wow animate__animated animate__fadeIn">
                <div class="header">История Мувыра</div>
                <div class="text">В начале 1980-х родную деревню Корепанова, основанную в 1837-м, стёрли с лица земли. Дома снесли бульдозером, людей перебросили в соседние сёла. «Неперспективный» Мувыр перестал существовать в документах и на картах. А Александр никак не мог понять: зачем и кому это нужно? Он сидел на берегу реки, смотрел на поле, где ещё недавно кипела жизнь, и у него, молодого сильного мужчины, отслужившего срочную на границе с Китаем, опускались руки. Именно тогда он пообещал себе возродить малую родину.</div>
                <div style="margin-top: 20px">
                    <a href="history.php" class="page_link">Читать дальше</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="flex_space_between">
            <div class="wow animate__animated animate__fadeIn">
                <div class="header">Контакты</div>
                <div class="text">Деревня Мувыр расположена в Игринском районе Удмуртии, в двух часах езды от столицы региона — Ижевска. 
                    <br>Адрес:
                    Игринский район, д. Мувыр
                    <br>Телефон:
                    +7 (901) 865-87-55
                    <br>Вконтакте:
                    https://vk.com/weekendvmywer
                </div>
                <div style="margin-block: 20px">
                    <a href="contacts.php" class="page_link">Карта Мувыра</a>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    $(document).ready(function() {
        $("#tour_slider").slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: "#tour_prev_arrow",
            nextArrow: "#tour_next_arrow",
        });
        $("#event_slider").slick({
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: "#event_prev_arrow",
            nextArrow: "#event_next_arrow",
            responsive: [
                {
                breakpoint: 950,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
                },
            ],
        });
    });
</script>