<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/sitemap.css">
    <link rel="stylesheet" href="./css/media.css">
    <script src="./js/spec.js"></script>
    <title>Карта сайта</title>
    <link rel="icon" href="./img/logomini.png" type="image/png">
</head>
<body>
    <!-- навигация с адаптацией -->

    <nav class="menu">
        <div class="menu-icon">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
            <ul class="menu-list">
                <li><a href="{{route ('services')}}">Услуги</a></li>
                <li><a href="{{ route('news') }}">Новости и акции</a></li>
                <li><a href="{{ route('blog') }}">Блог</a></li>
                <li><a href="{{ route('ourclinics') }}">О клиниках</a></li>
                <li><a href="/specialists">Наши специалисты</a></li>
                <li><a href="{{ route('contacts') }}">Контакты и адреса</a></li>
            </ul>
    </nav>

    <header>
        <!-- нулевой секшен -->

        <div class="sectionshd">
            <section>
                <h2>9 клиник в Челябинске</h2>
            </section>
            <section>
                <h2>Работаем ежедневно с 8:00 до 21:00</h2>
            </section>
            <section>
            <h2><a href="tel:+7 (351) 779-42-76">+7 (351) 779-42-76 горячая линия</a></h2>
            </section>
        </div>

        <!-- навигация без адаптации -->

        <div class="nav-bar">
            <div class="logo">
                <a href="/" class="logo-link" id="logo-link">
                    <img src="./img/logo.png" alt="Logo" class="logo-img">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="{{route ('services')}}">Услуги</a></li>
                    <li><a href="{{ route('news') }}">Новости и акции</a></li>
                    <li><a href="{{ route('blog') }}">Блог</a></li>
                    <li><a href="{{ route('ourclinics') }}">О клиниках</a></li>
                    <li><a href="/specialists">Наши специалисты</a></li>
                    <li><a href="{{ route('contacts') }}">Контакты и адреса</a></li>
                </ul>
            </nav>
            <div class="cta">
                <button><a href="{{ route('record') }}">Записаться</a></button>
            </div>
        </div>
    </header>


    <main>
        <div class="mapname">
            <h1>Карта сайта</h1>
        </div>
        <div class="mapmain">
            <div class="mapmainleft">
                <div class="partname1">
                    <h2><a href="{{route('home')}}">Главная страница</a></h2>
                </div>
                <div class="partname2">
                    <h2><a href="{{route('services')}}">Услуги</a></h2>
                    <ul>
                        <li><a href="{{route('implantation')}}">Имплантация зубов</a></li>
                        <li><a href="{{route('dentalcare')}}">Лечение зубов</a></li>
                        <li><a href="{{route('oralhygiene')}}">Гигиена полости рта</a></li>
                        <li><a href="{{route('toothextraction')}}">Удаление зубов</a></li>
                        <li><a href="{{route('teethwhitening')}}">Отбеливание зубов</a></li>
                        <li><a href="{{route('gumtreatment')}}">Лечение десен</a></li>
                        <li><a href="{{route('braces')}}">Брекеты</a></li>
                        <li><a href="{{route('anesthesia')}}">Анестезия и наркоз при лечении</a></li>
                        <li><a href="{{route('veneers')}}">Виниры</a></li>
                        <li><a href="{{route('prosthetics')}}">Протезирование</a></li>
                        <li><a href="{{route('dentalcarechildren')}}">Лечение зубов у детей</a></li>
                        <li><a href="{{route('cons')}}">Консультация</a></li>
                    </ul>
                </div>
                <div class="partname1">
                    <h2><a href="{{route('news')}}">Новости и акции</a></h2>
                </div>
                <div class="partname1">
                    <h2><a href="{{route('blog')}}">Блог</a></h2>
                </div>
            </div>
            <div class="mapmainright">
                <div class="partname2">
                    <h2><a href="{{route('ourclinics')}}">О клиниках</a></h2>
                    <ul>
                        <li><a href="{{route('rdcoms80')}}">Адрес клиники:г. Челябинск, Комсомольский проспект, 80 (просмотр принимающих врачей)</a></li>
                        <li><a href="{{route('sitemap')}}">Адрес клиники:г. Челябинск, ул. Бр. Кашириных, 54г (Maxima)(просмотр принимающих врачей)</a></li>
                        <li><a href="{{route('sitemap')}}">Адрес клиники:г. Челябинск, ул. Бр. Кашириных, 54г (BabyDent)(просмотр принимающих врачей)</a></li>
                        <li><a href="{{route('sitemap')}}">Адрес клиники:г. Челябинск, ул. Энгельса, 43(просмотр принимающих врачей)</a></li>
                        <li><a href="{{route('sitemap')}}">Адрес клиники:г. Челябинск, пл. МОПРа, 9(просмотр принимающих врачей)</a></li>
                        <li><a href="{{route('sitemap')}}">Адрес клиники:г. Челябинск, ул. 40 лет Победы, 36(просмотр принимающих врачей)</a></li>
                        <li><a href="{{route('sitemap')}}">Адрес клиники:г. Челябинск, ул. Тарасова, 40(просмотр принимающих врачей)</a></li>
                        <li><a href="{{route('sitemap')}}">Адрес клиники:г. Челябинск, ул. Университетская Набережная, 52(просмотр принимающих врачей)</a></li>
                    </ul>
                </div>
                <div class="partname2">
                    <h2><a href="{{route('specialists')}}">Наши специалисты</a></h2>
                    <ul>
                        <li><a href="{{route('descriptionavd')}}">Авдеева Наталья Викторовна</a></li>
                        <li><a href="{{route('descayv')}}">Айвазова Екатерина Олеговна</a></li>
                        <li><a href="{{route('descalek')}}">Алексеева Наталья Игоревна</a></li>
                        <li><a href="{{route('descaleks')}}">Алексеева Татьяна Павлова</a></li>
                        <li><a href="{{route('descalesh')}}">Алешкин Константин Александрович</a></li>
                        <li><a href="{{route('descanik')}}">Аникина Наталья Алексеевна</a></li>
                        <li><a href="{{route('descatam')}}">Атамнчук Дарья Александровна</a></li>
                        <li><a href="{{route('descakh')}}">Ахмеджанова Эльмира Ильфатовна</a></li>
                        <li><a href="{{route('descbazar')}}">Базарова Оксана Анатольевна</a></li>
                        <li><a href="{{route('descbarysh')}}">Барышников Анатолий Иванович</a></li>
                        <li><a href="{{route('descbakh')}}">Бахаев Павел Николаевич</a></li>
                        <li><a href="{{route('descbein')}}">Бейнарович Станислав Викторович</a></li>
                        <li><a href="{{route('descberej')}}">Бережная Елена Сергеевна</a></li>
                        <li><a href="{{route('descbob')}}">Бобылев Артем Вячеславович</a></li>
                        <li><a href="{{route('descbred')}}">Бреднева Юлия Евгеньевна</a></li>
                        <li><a href="{{route('descbuim')}}">Буймистрова Инга Геннадьевна</a></li>
                    </ul>
                </div>
                <div class="partname2">
                    <h2><a href="{{route('contacts')}}">Контакты и адреса</a></h2>
                    <ul>
                        <li><a href="{{route('contacts')}}">Наши адреса</a></li>
                    </ul>
                </div>
                <div class="partname2">
                    <h2><a href=""><a href="{{route('record')}}">Записаться на прием</a></h2>
                    <ul>
                        <li><a href="{{route('oformlenie')}}">Оформление записи</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

<footer>
    <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
            <li class="social-icon__item"><a class="social-icon__link" href="https://t.me/stompraktika74">
                <img src="./img/telegram.svg" alt="telegram"></a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="https://www.youtube.com/@INo-yh5ib">
                <img src="./img/youtube.svg" alt="youtube"></a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="https://vk.com/stompraktika">
                <img src="./img/vk.svg" alt="vk"></a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="https://ok.ru/">
                <img src="./img/ok.svg" alt="ok"></a></li>
        </ul>
    <ul class="menus">
        <li class="menu__item"><a class="menu__link" href="{{ route('services') }}">Услуги</a></li>
        <li class="menu__item"><a class="menu__link" href="{{ route('news') }}">Новости</a></li>
        <li class="menu__item"><a class="menu__link" href="{{ route('blog') }}">Блог</a></li>
        <li class="menu__item"><a class="menu__link" href="{{ route('ourclinics') }}">Клиники</a></li>
        <li class="menu__item"><a class="menu__link" href="{{ route('contacts') }}">Контакты</a></li>
        <li class="menu__item"><a class="menu__link" href="{{ route('sitemap') }}">Все разделы сайта</a></li>
    </ul>
    <p>&copy;2024 Miruleana | All Rights Reserved</p>
</footer>
</body>
</html>
