<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/implantation.css">
    <link rel="stylesheet" href="./css/media.css">
    <script src="./js/implantation.js"></script>
    <title>Протезирование зубов</title>
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
                <h1>Протезирование<br>зубов</h1>
            </div>

            <!-- правая колонка -->
            <div class="rightimpl">
                <h2>Эстетическое восстановление зубов в любых клинических случаях - от протезирования одного зуба до полного восстановления целостности зубного ряда.</h2>
                <h3>Полный список наших услуг по данному направлению:</h3>
                <div class="nameuslug">
                    <div class="leftname">
                        <div class="cardname">
                            <a href="{{route('record')}}">
                                <p>Протезирование зубов. Коронки</p>
                            </a>
                        </div>
                        <div class="cardname">
                            <a href="{{route('record')}}">
                                <p>Консультация стоматолога-ортопеда</p>
                            </a>
                        </div>
                    </div>
                    <div class="rightname">
                        <div class="cardname">
                            <a href="{{route('record')}}">
                                <p>Протезирование "Все на четырех"</p>
                            </a>
                        </div>
                        <div class="cardname">
                            <a href="{{route('record')}}">
                                <p>Консультация по протезированию зубов</p>
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
                        <td>Полный съемный протез</td>
                        <td>от 49 600 ₽</td>
                    </tr>
                    <tr>
                        <td>Частично-съемный протез (4 – 9 зубов)</td>
                        <td>от 24 700 ₽</td>
                    </tr>
                    <tr>
                        <td>Косметический (пластинчатый) протез (от 1 – 3 зубов)</td>
                        <td>от 10 200 ₽</td>
                    </tr>
                    <tr>
                        <td>Восстановление зуба вкладкой, виниром CEREC</td>
                        <td>от 19 100 ₽</td>
                    </tr>
                    <tr>
                        <td>Винир E-MAX</td>
                        <td>от 28 700 ₽</td>
                    </tr>
                    <tr>
                        <td>Металлокерамическая коронка</td>
                        <td>от 14 200 ₽</td>
                    </tr>
                    <tr>
                        <td>Каппа от бруксизма</td>
                        <td>от 11 150 ₽</td>
                    </tr>
                    <tr>
                        <td>Коронка из диоксида циркония</td>
                        <td>от 23 500 ₽</td>
                    </tr>
                    <tr>
                        <td>Несъемное протезирование на 4-х имплантах. Ортопедический этап. Постоянный протез</td>
                        <td>от 100 000 ₽</td>
                    </tr>
                    <tr>
                        <td>Несъемное протезирование на 4-х имплантах. Хирургический этап. Импланты + адаптационный протез</td>
                        <td>от 136 700 ₽</td>
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