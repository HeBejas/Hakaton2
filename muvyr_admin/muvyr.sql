-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 12 2023 г., 12:17
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `muvyr`
--

-- --------------------------------------------------------

--
-- Структура таблицы `address`
--

CREATE TABLE `address` (
  `id_address` int NOT NULL,
  `name_address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `address`
--

INSERT INTO `address` (`id_address`, `name_address`) VALUES
(1, 'г. Ижевск, ул. 9 января, 213, магазин\r\n«Погода в доме»'),
(2, 'г Ижевск, ул. 9 Января, д.259\r\n'),
(3, 'г Ижевск, ул. Автозаводская, д. 50\r\n'),
(4, 'г Ижевск, ул. Дзержинского, д. 48А\r\n'),
(5, 'г Ижевск, ул. Молодежная, д. 96'),
(6, 'г. Ижевск, ул. Молодежная, д. 101\r\n'),
(7, 'г. Ижевск, ул. Молодежная, д.79В'),
(8, 'г. Ижевск, ул. Сабурова, 27а\r\n'),
(9, 'г Ижевск, ул. Ленина, 120А'),
(10, 'г Ижевск, ул. 40 лет Победы, д. 72'),
(11, 'г Ижевск, ул. 40 лет Победы, д. 52'),
(12, 'г Ижевск, ул. Ворошилова, д. 53\r\n'),
(13, 'д. Хохряки, ул. Трактовая,д. 1. '),
(14, 'г.Ижевск, ул.Ракетная, 24, м-н\r\n«Карамель»\r\n'),
(15, 'г Ижевск, ул. Максима Горького, 149'),
(16, 'г. Ижевск, ул. Карла Маркса, д.393\r\n'),
(17, 'г. Ижевск, ул. Холмогорова, 24А'),
(18, 'г. Ижевск, ул. Гагарина, д. 49Б, ТЦ\r\n«Московский»'),
(19, 'г Ижевск, ул. Героя России Ильфата\r\nЗакирова, д.21\r\n'),
(20, 'г. Ижевск, ул. Клубная, д.27'),
(21, 'г. Ижевск, ул. Выставочная, д. 3Б'),
(22, 'г. Ижевск, ул. Школьная, д.44А'),
(23, 'г. Ижевск, ул. Майская, д.9А\r\n'),
(24, 'г. Ижевск, ул. Карла Либкнехта, 51\r\n'),
(25, 'г. Ижевск, ул. Клубная, 50'),
(26, 'г. Ижевск, ул. 8ая Подлесная, 48'),
(27, 'г. Ижевск, ул. Карла Либкнехта, 10'),
(28, 'г. Ижевск, ул. Ордженикидзе, 36А'),
(29, 'г. Ижевск, ул. Ордженикидзе, 40\r\n'),
(30, 'г. Ижевск, ул. Удмуртская, 304'),
(31, 'г. Ижевск, ул. Барышникова, 9'),
(32, 'г. Ижевск, ул. Пугачева, 43\r\n'),
(33, 'г. Ижевск, ул. Молодежная, 74'),
(34, 'г. Ижевск, ул. Дзержинского, 30'),
(35, 'г. Ижевск, ул. Ленина, 166А'),
(36, 'г. Ижевск, ул. Азина, 152'),
(37, 'г. Ижевск, ул. Репина, 215');

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `login_admin` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password_admin` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id_admin`, `login_admin`, `password_admin`) VALUES
(1, 'admin', '$2y$10$nY51fuiOCCJu5VMbsymnaOGr5sHseS4rLt8hYlQ22lp0ZhRxP6orC');

-- --------------------------------------------------------

--
-- Структура таблицы `drive`
--

CREATE TABLE `drive` (
  `id_drive` int NOT NULL,
  `name_drive` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `desc_drive` text NOT NULL,
  `price_drive` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pic_drive` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `drive`
--

INSERT INTO `drive` (`id_drive`, `name_drive`, `desc_drive`, `price_drive`, `pic_drive`) VALUES
(2, 'Лодка', 'Вметимость одной лодки: 3 взрослых, 1 ребёнок.', '400 руб - 30 мин', 'https://static.tildacdn.com/tild3331-6464-4238-b934-353736643037/Screenshot_20230611-.jpg'),
(4, 'Прокат велосипедов', 'Прокат велосипедов', '150 руб - 30 мин., 250 руб -1 час., 1000 руб - сутки', 'https://static.tildacdn.com/tild3063-3938-4463-b761-656430626635/b036r3OXf0E.jpg'),
(5, 'Прокат электромобилей', 'Возраст: от 1 до 8 лет, до 45 кг.', '150 руб - 5 мин., 200 руб - 10 мин.', 'https://static.tildacdn.com/tild3532-3830-4962-b662-343065336262/Screenshot_20230611-.jpg'),
(6, 'Батут', 'Маленький батут (на территории базы отдыха) - не более 80 кг\nБольшой батут (на катке) - до 100 кг', '150 руб - 10 мин.', 'https://static.tildacdn.com/tild3063-6663-4338-b036-303761623533/Screenshot_20230611-.jpg'),
(7, 'Верёвочный парк', 'Мувыр давно мечтал о таком парке для детей. Теперь благодаря КРСТ этот объект появился. Это первый веревочный парк в Игринском районе и отличное место для активного отдыха и полезного времяпровождения.', 'Бесплатно', 'https://static.tildacdn.com/tild3634-3361-4537-b938-663334316230/Screenshot_20230611-.jpg'),
(8, 'Троллей 30м', 'Троллей - это специальный канатный спуск, по которому посетитель спускается на блок-ролике под тяжестью собственного веса.\nВозраст: 5+, до 80 кг.', '100 руб - 1 час', 'https://static.tildacdn.com/tild6638-3063-4537-b136-303437313732/photo.jpg'),
(9, 'Детская площадка', 'Детская площадка', 'Бесплатно', 'https://static.tildacdn.com/tild6337-6439-4535-b766-343830613561/_.jpg'),
(10, 'Баня на дровах', '(каждый последующий час +500 руб.)\nВеник берёзовый - 200 руб./шт.\nБаня рассчитана на 8-10 чел.', '1500 руб - 2 часа', 'https://static.tildacdn.com/tild6432-6632-4334-b361-613431656134/__.jpg'),
(11, 'Рыбалка', 'Рыба, которую можно поймать: щука, карась, сорожка, линь', 'Бесплатно', 'https://static.tildacdn.com/tild3965-3333-4334-a235-323466336338/Screenshot_20230616-.jpg'),
(12, 'Катание на лошадях', 'Катание на пони: 100 руб - 35 мин.\nКатание верхом: 500 руб - 35 мин.', 'Цены различаются', 'https://static.tildacdn.com/tild6231-3832-4235-b038-343233303065/yAxFckiyj3Q.jpg'),
(13, 'SUP борд', ' - это скольжение по воде при помощи доски и весла. Научиться этому процессу сможет абсолютно каждый, независимо от возраста и спортивной подготовки. ', '500 руб - 1 час/1 чел.', 'https://static.tildacdn.com/tild6335-3964-4637-b030-646564323333/Screenshot_20230612-.jpg'),
(14, 'Висячий мост', 'Подвесной мост через речку Лоза – еще одна причина посетить это интересное место', 'Бесплатно', 'https://static.tildacdn.com/tild3532-6466-4162-b538-383832313537/JY3PwdYiTbU.jpg'),
(15, 'Аренда беседок', 'Аренда беседок', '100 руб - 30 мин', 'https://static.tildacdn.com/tild3866-3036-4864-a165-316538643639/Screenshot_20230611-.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `event`
--

CREATE TABLE `event` (
  `id_event` int NOT NULL,
  `name_event` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `desc_event` text NOT NULL,
  `time_event` varchar(20) NOT NULL,
  `pic_event` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `event`
--

INSERT INTO `event` (`id_event`, `name_event`, `desc_event`, `time_event`, `pic_event`) VALUES
(2, 'Масленница', 'Отмечаем масленницу в Мувыре', '20.02-31.03', 'https://img.magput.ru/pics/large/8b852a94-6cf3-4270-80a5-d4fc9cd1d1df.jpg'),
(3, 'Фестиваль возрождённых деревень', 'Фестиваль возрожденных деревень - это площадка, где представлены все\nсферы жизни деревни - быт, культура, работа. В рамках фестиваля будут\nпредставлены тематические площадки, секции, экскурсии:\n«Быт»\n- жилой дом, усадьба - устройство дома, архитектура, интерьер, печь, наличники,\nмебель;\n- животное и хозяйственное подворье.\n«Культура»\n- народный костюм;\n- декоративно-прикладное искусство, ремесла;\n- исполнительское мастерство (танец, пение, сказительство, музыкальные\nинструменты, театр/сказки);\n- обряды;\n- народные игры;\n- физическая культура (спортивные игры).\n«Работа»\n- земледелие, обработка земли;\n- растениеводство;\n- пчеловодство;\n- молочная ферма;\n- ремесленные мастерские (деревообработка, кузнечное дело, ткачество,\nгончарное дело);\n- механизация, ИТ (трактора, дроны и тд);\n- конный транспорт;\n- рыбалка.', '10.06-10.07', 'https://visitudmurtia.org/upload/iblock/ac7/3ptg1331vhxb59d9mmybpalos1gpi5os.jpg'),
(4, 'Новый Год', 'Отмечаем Новый Год в Мувыре', '30.12-03.01', 'https://www.holiday.by/files/byblog/71ccf020953010c87799462189d3443a-thumb-780x1500.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `house`
--

CREATE TABLE `house` (
  `id_house` int NOT NULL,
  `name_house` varchar(25) NOT NULL,
  `people_house` varchar(20) NOT NULL,
  `desc_house` text NOT NULL,
  `price_house` varchar(10) NOT NULL,
  `pic_house` text NOT NULL,
  `pic2_house` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `house`
--

INSERT INTO `house` (`id_house`, `name_house`, `people_house`, `desc_house`, `price_house`, `pic_house`, `pic2_house`) VALUES
(1, 'Домик №1', '1', 'Заезд: после 14:00. Выезд: до 12:00\nТуалет, умывальник на улице', '3300', 'https://static.tildacdn.com/tild6230-3336-4631-b130-663237353466/Screenshot_20230527-.jpg', 'https://static.tildacdn.com/tild3664-6633-4262-b737-616166346639/Screenshot_20230527-.jpg'),
(3, 'Домик №2', '1-4', 'Семейный, 4 спальных места Туалет, умывальник на улице', '3300', 'https://static.tildacdn.com/tild3465-6536-4733-b565-376332633238/Screenshot_20230527-.jpg', 'https://static.tildacdn.com/tild6132-3934-4565-b964-303363303831/Screenshot_20230527-.jpg'),
(4, 'Домик №3', '1-4', 'Семейный, 4 спальных места Туалет, умывальник на улице', '3300', 'https://static.tildacdn.com/tild3462-3362-4733-b732-646330343462/Screenshot_20230527-.jpg', 'https://static.tildacdn.com/tild3430-6236-4332-b566-343766353866/Screenshot_20230527-.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `milk`
--

CREATE TABLE `milk` (
  `id_milk` int NOT NULL,
  `name_milk` varchar(25) NOT NULL,
  `desc_milk` text NOT NULL,
  `pic_milk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `milk`
--

INSERT INTO `milk` (`id_milk`, `name_milk`, `desc_milk`, `pic_milk`) VALUES
(2, 'Сметана', 'Сметана', 'https://igramoloko.ru/gallery_gen/ca486fb257e33075815815b7037affb6_550x412_fit.png'),
(3, 'Кефир', 'Кефир 2,5%', 'https://sun9-70.userapi.com/impg/WzeYayG1Qr2jMDY0uCXMRawK5pPg1Hk08Qx6VA/ocF2h2GiFEs.jpg?size=1080x1305&quality=96&sign=b438d134ed2092a6602c8e02dd6c99b8&type=album'),
(4, 'Молоко', 'Молоко цельное', 'https://sun9-30.userapi.com/impg/wJlIGFNC-o8WKDtMWw-ihicZV5SgmVuxT5gZIg/dp3r7sv8EH0.jpg?size=1080x1470&quality=96&sign=3d465a0f2ee1aa009c9b764464880086&type=album'),
(5, 'Йогурт клубничный', 'Йогурт фруктовый со вкусом клубники', 'https://sun9-79.userapi.com/impg/8mHyL_hskCYIJPy-pIm-8dD_QO6AVHuCj2K5sQ/rxf_4kzRxEc.jpg?size=1080x1123&quality=96&sign=c768343a4c8517d3cfd77ecb4bd84e39&type=album'),
(6, 'Йогурт ананасовый', 'Йогурт фруктовый со вкусом ананаса', 'https://sun9-16.userapi.com/impg/x2d38R-lOUIOe9Aw1dXVwWDy7GxxdSuw1m06Iw/O-f1MkVvefU.jpg?size=1080x1208&quality=96&sign=f596984426bc71bab7d7c48f2edaa6df&type=album'),
(7, 'Творог', 'Творог 5%', 'https://sun9-80.userapi.com/impg/2JVRcrq5wj2myP88acMCyP9UYhjn66yAXuQ-pw/BZtPQSfR0Ls.jpg?size=1080x1335&quality=96&sign=0d602a24d0867cb5082c4ef644d0358a&type=album'),
(8, 'Cыр \"Мувырский\"', 'Мувырский сыр', 'https://sun9-6.userapi.com/impg/86duwRksJ6zRrD0gZfo41Jd2ZKmeeBJbahM9Xw/lODdwMN4NDg.jpg?size=900x600&quality=95&sign=da50f1d3736843551dc20af3baecbcd9&type=album');

-- --------------------------------------------------------

--
-- Структура таблицы `orders_house`
--

CREATE TABLE `orders_house` (
  `id_orders` int NOT NULL,
  `id_house` int NOT NULL,
  `name_orders` varchar(200) NOT NULL,
  `phone_orders` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders_house`
--

INSERT INTO `orders_house` (`id_orders`, `id_house`, `name_orders`, `phone_orders`) VALUES
(1, 1, 'asdasdasd', '7965326594'),
(2, 4, 'кононенко', '123234141234123');

-- --------------------------------------------------------

--
-- Структура таблицы `orders_marry`
--

CREATE TABLE `orders_marry` (
  `id_orders` int NOT NULL,
  `name_orders` varchar(100) NOT NULL,
  `phone_orders` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

CREATE TABLE `project` (
  `id_project` int NOT NULL,
  `name_project` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `desc_project` text NOT NULL,
  `pic_project` text NOT NULL,
  `status_project` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`id_project`, `name_project`, `desc_project`, `pic_project`, `status_project`) VALUES
(2, 'Восстановление ГЭС', 'Проект \"Восстановление ГЭС в Мувыре\" – это амбициозная инициатива по восстановлению и модернизации гидроэлектростанции (ГЭС) в Мувыре, которая была выведена из строя несколько десятилетий назад. Этот проект призван привнести новую жизнь в регион, обеспечив эффективное производство электроэнергии и способствуя устойчивому развитию местной экономики.', 'https://cdn.discordapp.com/attachments/753213356986335365/1161763627586560041/hes.jpg?ex=65397bb1&is=652706b1&hm=a58913d9f3ee11734d94b6f552ee9b427f4be87a8d6ea2634dc8265b3e556391&', 'В процессе'),
(3, 'Строительство действующей мельницы', 'Проект \"Постройка действующей мельницы в Мувыре\" представляет собой амбициозное предприятие, направленное на создание функциональной и эффективной мельницы в возрождённой деревне Мувыр. Мельница будет заниматься переработкой зерна в муку и другие продукты, что предоставит значительные выгоды для местной экономики и обеспечит местных жителей качественными продуктами.', 'https://открываяудмуртию.рф/templates/yootheme/cache/2d/6ba85585cb8b4226866a03b9e98d06b7-2d8b3e7a.jpeg', 'В процессе');

-- --------------------------------------------------------

--
-- Структура таблицы `tours`
--

CREATE TABLE `tours` (
  `id_tour` int NOT NULL,
  `name_tour` varchar(100) NOT NULL,
  `desc_tour` text NOT NULL,
  `price_tour` varchar(10) NOT NULL,
  `pic_tour` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tours`
--

INSERT INTO `tours` (`id_tour`, `name_tour`, `desc_tour`, `price_tour`, `pic_tour`) VALUES
(1, 'Едем в деревню для детей', '\"Едем в деревню\" - это уникальная экскурсия, которая позволяет погрузиться в атмосферу жизни настоящей удмуртской деревни. Во время экскурсии вы посетите Деревню Мувыр, которая расположена в живописном уголке Удмуртии и узнаете о её истории, традициях и культуре', '1300', 'https://кемпингироссии.рф/upload/resize_cache/webp/iblock/982/1000_1000_12d6cabf6424949c22849ebf33c6a9817/9okut17u65hm71go412vn216hdggsonl.webp'),
(2, 'Едем в деревню для взрослых', '\"Едем в деревню\" - это уникальная экскурсия, которая позволяет погрузиться в атмосферу жизни настоящей удмуртской деревни. Во время экскурсии вы посетите Деревню Мувыр, которая расположена в живописном уголке Удмуртии и узнаете о её истории, традициях и культуре', '1500', 'https://открываяудмуртию.рф/templates/yootheme/cache/db/e0a74b2e671847448f5df757f45c00dd-db54b87a.jpeg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id_address`);

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Индексы таблицы `drive`
--
ALTER TABLE `drive`
  ADD PRIMARY KEY (`id_drive`);

--
-- Индексы таблицы `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Индексы таблицы `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id_house`);

--
-- Индексы таблицы `milk`
--
ALTER TABLE `milk`
  ADD PRIMARY KEY (`id_milk`);

--
-- Индексы таблицы `orders_house`
--
ALTER TABLE `orders_house`
  ADD PRIMARY KEY (`id_orders`),
  ADD KEY `id_house` (`id_house`);

--
-- Индексы таблицы `orders_marry`
--
ALTER TABLE `orders_marry`
  ADD PRIMARY KEY (`id_orders`);

--
-- Индексы таблицы `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Индексы таблицы `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id_tour`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `address`
--
ALTER TABLE `address`
  MODIFY `id_address` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `drive`
--
ALTER TABLE `drive`
  MODIFY `id_drive` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `house`
--
ALTER TABLE `house`
  MODIFY `id_house` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `milk`
--
ALTER TABLE `milk`
  MODIFY `id_milk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `orders_house`
--
ALTER TABLE `orders_house`
  MODIFY `id_orders` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders_marry`
--
ALTER TABLE `orders_marry`
  MODIFY `id_orders` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tours`
--
ALTER TABLE `tours`
  MODIFY `id_tour` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders_house`
--
ALTER TABLE `orders_house`
  ADD CONSTRAINT `orders_house_ibfk_1` FOREIGN KEY (`id_house`) REFERENCES `house` (`id_house`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
