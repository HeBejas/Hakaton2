<style>  
 .header_wrapper{
    justify-content: center;
} 
.header_mobile{
    display:none;
}
@media (max-width: 1180px) {
    .header_mobile{
        display:flex;
    }
    .header_burger{
        display:block;
    }
    .header_wrapper{
        display: flex;
        position: absolute;
    }
    header{
        margin-top: 20px;
        width: 90%;
        border-radius: 30px;
    }
    .drop_container{
        display: none;
    }
    #investors{
        display: none; 
    }
    .icons{
        display:none;
    }
    #header_phone{
        display:none;
    }
    nav{
        height:60px;
    }
    .header_logo img{
        height: 100px;
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
  height: 38px;
  width: 40px;
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
.header_burger input[type="checkbox"]:checked ~ .hamburger-lines .line1 {
  transform: rotate(45deg);
}
.header_burger input[type="checkbox"]:checked ~ .hamburger-lines .line2 {
  transform: scaleY(0);
}
.header_burger input[type="checkbox"]:checked ~ .hamburger-lines .line3 {
  transform: rotate(-45deg);
}
.header_burger-items {
  display: none;
}
.header_burger {
  height: 100%;
  position: relative;
  width: 100%;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  top: 28px;
}
    
}

</style>
<div class="header_wrapper">
<header>
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
                <a href="#tel" id="header_phone" class="hover">+7 (901) 865 87-55</a>
            </div>
            <div class="header_mobile">
                <div class="header_burger"> 

                <input class="checkbox" type="checkbox"/>
                    <div class="hamburger-lines">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                    </div>
                    <div class="header_burger-menu">
                        <div class="header_burger-items">
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="tours.php">Путешествия</a></li>
                            <li><a href="about.php">О Нас</a></li>
                        </div>  
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
</div>



<script>
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
</script>