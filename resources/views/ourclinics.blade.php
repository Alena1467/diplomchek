<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/ourclinics.css">
    <script src="./js/ourclinics.js"></script>
    <title>О клиниках</title>
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
                <li><a href="/ourclinics">О клиниках</a></li>
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
                    <li><a href="/ourclinics">О клиниках</a></li>
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
        <div class="ourclinmain">
            <h1>
                О клиниках
            </h1>
            <div class="ouraddress">
                <div class="cardaddress" id="kashmax">
                    <img src="./img/1add.jpg" alt="">
                    <div class="textaddress">
                        <div class="txad">
                            <section class="inf" >
                                <h2>Адрес клиники:</h2>
                                <p>г. Челябинск, Комсомольский проспект, 80</p>
                            </section>
                            <section class="inf">
                                <h2>Время работы:</h2>
                                <p>ПН-ВС с 08:00 до 21:00</p>
                            </section>
                            <section class="inf">
                                <h2>Единый контактный телефон:</h2>
                                <p>+7 (351) 779-45-17</p>
                            </section>
                        </div>
                        <div class="vrachissil">
                            <a href="{{ route ('rdcoms80')}}">Посмотреть принимающих врачей</a>
                        </div>
                    </div>
                </div>
                <div class="cardaddress" id="kashmax2">
                    <img src="./img/2add.jpg" alt="">
                    <div class="textaddress">
                        <div class="txad">
                            <section class="inf">
                                <h2>Адрес клиники:</h2>
                                <p>г. Челябинск, ул. Бр. Кашириных, 54г (Maxima)</p>
                            </section>
                            <section class="inf">
                                <h2>Время работы:</h2>
                                <p>ПН-ВС с 08:00 до 21:00</p>
                            </section>
                            <section class="inf">
                                <h2>Единый контактный телефон:</h2>
                                <p>+7 (351) 779-45-17</p>
                            </section>
                        </div>
                        <div class="vrachissil">
                            <a href="">Посмотреть принимающих врачей</a>
                        </div>
                    </div>
                </div>
                <div class="cardaddress" id="eng">
                    <img src="./img/3add.jpg" alt="">
                    <div class="textaddress">
                        <div class="txad">
                            <section class="inf">
                                <h2>Адрес клиники:</h2>
                                <p>г. Челябинск, ул. Бр. Кашириных, 54г (BabyDent)</p>
                            </section>
                            <section class="inf">
                                <h2>Время работы:</h2>
                                <p>ПН-ВС с 08:00 до 21:00</p>
                            </section>
                            <section class="inf">
                                <h2>Единый контактный телефон:</h2>
                                <p>+7 (351) 779-45-17</p>
                            </section>
                        </div>
                        <div class="vrachissil">
                            <a href="">Посмотреть принимающих врачей</a>
                        </div>
                    </div>
                </div>
                <div class="cardaddress" id="mopr">
                    <img src="./img/4add.jpg" alt="">
                    <div class="textaddress">
                        <div class="txad">
                            <section class="inf">
                                <h2>Адрес клиники:</h2>
                                <p>г. Челябинск, ул. Энгельса, 43</p>
                            </section>
                            <section class="inf">
                                <h2>Время работы:</h2>
                                <p>ПН-ВС с 08:00 до 21:00</p>
                            </section>
                            <section class="inf">
                                <h2>Единый контактный телефон:</h2>
                                <p>+7 (351) 779-48-05</p>
                            </section>
                        </div>
                        <div class="vrachissil">
                            <a href="">Посмотреть принимающих врачей</a>
                        </div>
                    </div>
                </div>
                <div class="cardaddress" id="pobed">
                    <img src="./img/5add.jpg" alt="">
                    <div class="textaddress">
                        <div class="txad">
                            <section class="inf">
                                <h2>Адрес клиники:</h2>
                                <p>г. Челябинск, пл. МОПРа, 9</p>
                            </section>
                            <section class="inf">
                                <h2>Время работы:</h2>
                                <p>ПН-ВС с 08:00 до 21:00</p>
                            </section>
                            <section class="inf">
                                <h2>Единый контактный телефон:</h2>
                                <p>+7 (351) 779-48-05</p>
                            </section>
                        </div>
                        <div class="vrachissil">
                            <a href="">Посмотреть принимающих врачей</a>
                        </div>
                    </div>
                </div>
                <div class="cardaddress" id="taras">
                    <img src="./img/6add.jpg" alt="">
                    <div class="textaddress">
                        <div class="txad">
                            <section class="inf">
                                <h2>Адрес клиники:</h2>
                                <p>г. Челябинск, ул. 40 лет Победы, 36</p>
                            </section>
                            <section class="inf">
                                <h2>Время работы:</h2>
                                <p>ПН-ВС с 08:00 до 21:00</p>
                            </section>
                            <section class="inf">
                                <h2>Единый контактный телефон:</h2>
                                <p>+7 (351) 779-48-05</p>
                            </section>
                        </div>
                        <div class="vrachissil">
                            <a href="">Посмотреть принимающих врачей</a>
                        </div>
                    </div>
                </div>
                <div class="cardaddress" id="naber">
                    <img src="./img/7add.jpg" alt="">
                    <div class="textaddress">
                        <div class="txad">
                            <section class="inf">
                                <h2>Адрес клиники:</h2>
                                <p>г. Челябинск, ул. Тарасова, 40</p>
                            </section>
                            <section class="inf">
                                <h2>Время работы:</h2>
                                <p>ПН-ВС с 08:00 до 21:00</p>
                            </section>
                            <section class="inf">
                                <h2>Единый контактный телефон:</h2>
                                <p>+7 (351) 779-48-05</p>
                            </section>
                        </div>
                        <div class="vrachissil">
                            <a href="">Посмотреть принимающих врачей</a>
                        </div>
                    </div>
                </div>
                <div class="cardaddress" id="okt">
                    <img src="./img/8add.jpg" alt="">
                    <div class="textaddress">
                        <div class="txad">
                            <section class="inf">
                                <h2>Адрес клиники:</h2>
                                <p>г. Челябинск, ул. Университетская Набережная, 52</p>
                            </section>
                            <section class="inf">
                                <h2>Время работы:</h2>
                                <p>ПН-ВС с 08:00 до 21:00</p>
                            </section>
                            <section class="inf">
                                <h2>Единый контактный телефон:</h2>
                                <p>+7 (351) 779-48-05</p>
                            </section>
                        </div>
                        <div class="vrachissil">
                            <a href="">Посмотреть принимающих врачей</a>
                        </div>
                    </div>
                </div>
                <div class="cardaddress" id="oktybr">
                    <img src="./img/9add.jpg" alt="">
                    <div class="textaddress">
                        <div class="txad">
                            <section class="inf">
                                <h2>Адрес клиники:</h2>
                                <p>г. Челябинск, ул. 40-летия Октября, 15</p>
                            </section>
                            <section class="inf">
                                <h2>Время работы:</h2>
                                <p>ПН-ВС с 08:00 до 21:00</p>
                            </section>
                            <section class="inf">
                                <h2>Единый контактный телефон:</h2>
                                <p>+7 (351) 779-48-05</p>
                            </section>
                        </div>
                        <div class="vrachissil">
                            <a href="">Посмотреть принимающих врачей</a>
                        </div>
                    </div>
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
