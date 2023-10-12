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
    <div class="container mobile_box">
        <div class="icons">
            <a href="https://instagram.com/muvyr.village?utm_medium=copy_link"><img src="assets/images/inst.svg" alt="Инстаграм"></a>
            <a href="https://vk.com/weekendvmywer"><img src="assets/images/vk.svg" alt="ВК"></a>
            <a href="https://t.me/discoverUdmurtia"><img src="assets/images/telegram.svg" alt="Телеграм"></a>
        </div>
        <div class="header_logo">
            <a href="/mvr"><img src="assets/images/logo.png" alt="Логотип"></a>
        </div>
        <div class="header_burger"> 

            <!-- <svg width="40" height="30" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect id="palka1" y="15.1852" width="30" height="4.81481" rx="2.40741" fill="white"/>
            <rect id="palka2" y="7.77783" width="30" height="4.81481" rx="2.40741" fill="white"/>
            <rect id="palka3" width="30" height="4.81481" rx="2.40741" fill="white"/>
            </svg> -->
            <div class="hamburger-lines">
                <span id="palka1" class="line line1"></span>
                <span id="palka2" class="line line2"></span>
                <span id="palka3" class="line line3"></span>
            </div>
        </div>
        <div class="header_burger_menu">
            <a href="tours.php" class="hover" id="tours">Экскурсии</a>
            <a href="events.php" class="hover" id="events">Мероприятия</a>
            <a href="houses.php" class="hover" id="houses">Гостевые домики</a>
            <a href="funs.php" class="hover" id="funs">Развлечения</a>
            <a href="milk.php" class="hover" id="milk">Молочная продукция</a>
            <a href="history.php" class="hover" id="history">История</a>
        </div>
        <div class="header_burger_menu_back">
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
    let clicked = false;
    $(".header_burger").click(function() {
        if(!clicked){
            clicked = true;
            $("#palka1").css({
                "rotate": "45deg",
                "padding-top": "5px",
                // "top": "30px"
                "top": "29px",
                // "left": "10px"
                "margin-left": "2px",
                "margin-top": "-1.2px"
            });
            $("#palka2").css({
                "opacity": "0",
                "transition": "0.5s  ease-in-out;"
            });
            $("#palka3").css({
                "rotate": "-45deg",

            });
            $(".header_burger_menu").css({
                "margin-top": "450px",
            });
            $(".header_burger_menu_back").css({
                "height": "380px",
            });
            
        }
        else{
            clicked = false;
            $("#palka1").css({
                "rotate": "0deg",
                "padding-top": "0",
                "top": "32px",
                // "left": "10px"

            });
            $("#palka2").css({
                "opacity": "1",
                "transition": "2s  ease-in-out;"
                
            });
            $("#palka3").css({
                "rotate": "0deg",
            });
            $(".header_burger_menu").css({
                "margin-top": "-750px",
            });
            $(".header_burger_menu_back").css({
                "height": "0",
            });
           
        }
        console.log(clicked)
        
    });
</script>

<style>
.header_burger_menu a{
    font-size: 22px;
    font-weight: bold;
    text-decoration: none;
    color: #fff;
    margin: 0px 10px;
    padding: 10px;
    border-radius: 15px;
    cursor: pointer;
    transition: all .3s;
    color: var(--color-black);
    margin: 5px 5px;
}
.header_burger_menu a:hover{
    background: var(--color-yellow);
}

.header_burger_menu_back{
    text-align: center;
    width: 45%;
    position: absolute;
    display: flex;
    background: #ebebeb;
    justify-content: center;
    top: 70px;
    height: 0;
    border-radius: 30px;
    right: 35px;
    z-index: -101;
    transition: 1s;
}
.header_burger_menu{
    position: absolute;
    display: flex;
    flex-direction: column;
    width: 90%;
    align-items: end;
    z-index: -100;
    transform:1s;
    margin-top: -750px;
}
#palka1{
    transition:0.5s   ease-in-out;
    width:40px;
    position: absolute;
    
}

#palka2{
    transition:0.5s  ease-in-out;
    width:40px;
    position: absolute;
    top: 45px;
}

#palka3{
    transition:0.5s   ease-in-out;
    width:40px;
    position: absolute;
    top: 58px;
}
.header_burger .checkbox {
  position: absolute;
  display: none;
  height: 100%;
  width: 100px;
  top: 0px;
  right: 0px;
  z-index: 5;
  opacity: 0;
  cursor: pointer;
  z-index: 1001;
}
.header_burger .hamburger-lines {
  display: block;
  height: 35px;
  width: 45px;
  top: 35px;
  right: 20px;
  z-index: 2;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  margin-right: 5%;
  z-index: 1000;
}
.header_burger .hamburger-lines .line {
  display: block;
  height: 8px;
  width: 100%;
  border-radius: 10px;
  background: white;
}
.header_burger .hamburger-lines .line1 {
  transform-origin: 0% 74%;
  transition: transform 0.4s ease-in-out;
}
.header_burger .hamburger-lines .line2 {
  transition: transform 0.2s ease-in-out;
}
.header_burger .hamburger-lines .line3 {
  transform-origin: 0% 0%;
  transition: transform 0.4s ease-in-out;
}

.header_burger {
  position: relative;
  height: 100%;
  position: relative;
  width: 100%;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  cursor: pointer;
}
@media (max-width: 680px){
    .header_burger_menu a{
        width: 100px;
    }
    /* .header_burger_menu_back{
        height: 425px;
    }
    .header_burger_menu{
        margin-top: 490px;
    } */
    .header_burger_menu a {
        font-size: 20px;
        margin: 2px 15px;
    }
    .header_burger_menu{
        text-align: end;
    }
    
}
</style>