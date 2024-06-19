<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/implantation.css">
    <link rel="stylesheet" href="./css/media.css">
    <script src="./js/implantation.js"></script>
    <title>Гигиена полости рта</title>
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
                <li><a href="{{ route('specialists') }}">Наши специалисты</a></li>
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
                    <li><a href="{{ route('specialists') }}">Наши специалисты</a></li>
                    <li><a href="{{ route('contacts') }}">Контакты и адреса</a></li>
                </ul>
            </nav>
            <div class="cta">
                <button><a href="{{ route('record') }}">Записаться</a></button>
            </div>
        </div>
    </header>
    <main>
        <div class="implmain">

            <!-- левая колонка -->
            <div class="leftimpl">
                <h1>Гигиена<br>полости<br>рта</h1>
            </div>

            <!-- правая колонка -->
            <div class="rightimpl">
                <h2>Комплексная профилактика стоматологических заболеваний в рамках индивидуальных показаний у пациентов нашей сети клиник.</h2>
                <h3>Полный список наших услуг по данному направлению:</h3>
                <div class="nameuslug">
                    <div class="leftname">
                        <div class="cardname">
                            <a href="{{route('record')}}">
                                <p>Гигиена полости рта</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="mclr" id="tableprices">
                <h1>Цены</h1>
                <table>
                    <tr>
                        <td>Лечебно-профилактический комплекс гигиены «EMS Комфорт Плюс» </td>
                        <td>5 750 ₽</td>
                    </tr>
                    <tr>
                        <td>Урок гигиены "Базовый"</td>
                        <td>от 980 ₽</td>
                    </tr>
                    <tr>
                        <td>Обработка пародонтального кармана с помощью аппарата "Vector" в области одного зуба</td>
                        <td>от 1 690 ₽</td>
                    </tr>
                    <tr>
                        <td>Дополнительный спа-уход "Релакс" при гигиене</td>
                        <td>2 100 ₽</td>
                    </tr>
                    <tr>
                        <td>Профессиональная гигиена полости рта и зубов комплекс EMS GBT Prophylaxis Master</td>
                        <td>7 250 ₽</td>
                    </tr>
                    <tr>
                        <td>Профессиональная гигиена полости рта и зубов комплекс Профи White + кабинетное отбеливание Opalescence</td>
                        <td>11 750 ₽</td>
                    </tr>
                    <tr>
                        <td>Урок гигиены "Усиленный" – Айтоп</td>
                        <td>от 3 500 ₽</td>
                    </tr>
                    <tr>
                        <td>Лечебно-профилактический комплекс гигиены «EMS - Classic Comfort»</td>
                        <td>4 200 ₽</td>
                    </tr>
                </table>
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
