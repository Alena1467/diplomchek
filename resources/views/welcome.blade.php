<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/welc.css">
    <link rel="stylesheet" href="./css/media.css">
    <script src="./js/script.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
    <title>Стомпрактика.РФ</title>
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
            <li><a href="#usluges">Услуги</a></li>
            <li><a href="{{ route('news') }}">Новости и акции</a></li>
            <li><a href="{{ route('blog') }}">Блог</a></li>
            <li><a href="{{ route('ourclinics') }}">О клиниках</a></li>
            <li><a href="#specialsss">Наши специалисты</a></li>
            <li><a href="#addrreess">Контакты и адреса</a></li>
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
                <a href="#" class="logo-link" id="logo-link">
                    <img src="./img/logo.png" alt="Logo" class="logo-img">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="#usluges">Услуги</a></li>
                    <li><a href="{{ route('news') }}">Новости и акции</a></li>
                    <li><a href="{{ route('blog') }}">Блог</a></li>
                    <li><a href="{{ route('ourclinics') }}">О клиниках</a></li>
                    <li><a href="#specialsss">Наши специалисты</a></li>
                    <li><a href="#addrreess">Контакты и адреса</a></li>
                </ul>
            </nav>
            <div class="cta">
                <button><a href="{{ route('record') }}">Записаться</a></button>
            </div>
        </div>
    </header>


    <main>
        <!-- первый секшен -->
        <div class="introduction">
            <div class="discription">
                <h1>Стомпрактика всегда рядом с Вами &#x2661;</h1>
                <div class="record-cta">
                    <button><a href="{{ route('record') }}">Записаться</a></button>
                </div>
                <div class="social">
                    <a href="https://t.me/stompraktika74">
                        <img class="tg" src="./img/telegram.svg" alt="telegram">
                    </a>
                    <a href="https://www.youtube.com/@INo-yh5ib">
                        <img src="./img/youtube.svg" alt="youtube">
                    </a>
                    <a href="https://vk.com/stompraktika">
                        <img src="./img/vk.svg" alt="vk">
                    </a>
                    <a href="https://ok.ru/">
                        <img src="./img/ok.svg" alt="ok">
                    </a>
                </div>
            </div>
            <div class="bigtooth">
                <img src="./img/tooth.png" alt="tooth">
            <div class="phonenum">
                <h3><a href="tel:+7 (351) 779-42-76">8 (351) 779-42-76</a></h3>
            </div>
            </div>
            <div>
                <img src="" alt="">
            </div>
        </div>

        <!-- второй секшен -->

        <div class="historycomp">
            <h1 id="hisser">ИСТОРИЯ КОМПАНИИ</h1>
        </div>

        <!-- третий секшен -->

        <div class="history">
            <h3>Вот уже 35 лет мы неизменно дарим нашим пациентам здоровье и уход.
            Мы помогли более 100 000 пациентам обрести здоровую и красивую улыбку
            За последние годы «СтомпрактикаРФ» завоевала репутацию одной из ведущих стоматологических клиник в городе.

            Наша команда не только лечит стоматологические заболевания, но и уделяет особое внимание уходу. Мы верим, что здоровые зубы имеют общее состояние здоровья.</h3>
        </div>

        <!-- четвертый секшен -->

        <div class="choice">
            <h1>ПОЧЕМУ СТОИТ ВЫБРАТЬ НАС</h1>
        </div>

        <!-- пятый секшен -->

        <div class="choicewhat">
            <div class="cardw">
                <h2>Гарантированное качество</h2>
                <div class="card1w">
                    <img src="./img/group1.svg" alt="">
                    <p>Наши стоматологи имеют высокую квалификацию и опыт подтвержденные сертификатами и наградами.</p>
                </div>
            </div>
            <div class="cardw">
                <h2>Индивидуальный подход</h2>
                <div class="card1w">
                    <img src="./img/group2.svg" alt="">
                    <p>Мы понимаем, что каждый пациент уникален, и поэтому разрабатываем персонализированные планы лечения, чтобы выполнить их требования.</p>
                </div>
            </div>
            <div class="cardw">
                <h2>Большой опыт</h2>
                <div class="card1w">
                    <img src="./img/group3.svg" alt="">
                    <p>Более 90 квалифицированных врачей, напротяжении 35 лет, помогают пациентам приобрести  здоровую и красивую улыбку.</p>
                </div>
            </div>
            <div class="cardw">
                <h2>Комплексные услуги</h2>
                <div class="card1w">
                    <img src="./img/group4.svg" alt="">
                    <p>Мы предлагаем широкий спектр стоматологических услуг, от профилактики до сложных реставрационных работ, все под одной крышей.</p>
                </div>
            </div>
            <div class="cardw">
                <h2>Комфортное лечение</h2>
                <div class="card1w">
                    <img src="./img/group5.svg" alt="">
                    <p>У нас теплая и гостеприимная атмосфера, чтобы наши пациенты чувствовали себя комфортно и расслабленно во время лечения.</p>
                </div>
            </div>
            <div class="cardw">
                <h2>Новейшие технологии</h2>
                <div class="card1w">
                    <img src="./img/group6.svg" alt="">
                    <p>Мы инвестируем в новейшие стоматологические технологии, чтобы обеспечить нашим пациентам  доступ к самым передовым методам лечения.</p>
                </div>
            </div>
            <div class="cardw">
                <h2>Запись на прием онлайн</h2>
                <div class="card1w">
                    <img src="./img/group7.svg" alt="">
                    <p>Запись на прием в онлайн режиме позволяет избежать ожиданий в очереди </p>
                </div>
            </div>
            <div class="cardw">
                <h2>Разумные цены</h2>
                <div class="card1w">
                    <img src="./img/group8.svg" alt="">
                    <p>Мы хотим сделать наши услуги доступными для всех, учитывая качество и выполнение работы. Также вы можете оплатить различными способами оплаты.</p>
                </div>
            </div>
            <div class="cardw">
                <h2>Сострадание и забота</h2>
                <div class="card1w">
                    <img src="./img/group9.svg" alt="">
                    <p>Наша команда по-настоящему  заботится о наших пациентах и ​берет на себя уникальный опыт каждого из них.</p>
                </div>
            </div>
        </div>

        <div class="uslugi">
            <h1 id="usluges">НАШИ УСЛУГИ</h1>
        </div>

        <!-- шестой секшен -->


        <div class="services">
            <a href="{{ route('implantation')}}">
                <img src="./img/card1.png" alt="">
            </a>
            <a href="{{ route('dentalcare')}}">
                <img src="./img/card2.png" alt="">
            </a>
            <a href="{{ route('oralhygiene')}}">
                <img src="./img/card3.png" alt="">
            </a>
            <a href="{{ route('toothextraction')}}">
                <img src="./img/card4.png" alt="">
            </a>
            <a href="{{ route('teethwhitening')}}">
                <img src="./img/card5.png" alt="">
            </a>
            <a href="{{ route('gumtreatment')}}">
                <img src="./img/card6.png" alt="">
            </a>
            <a href="{{ route('braces')}}">
                <img src="./img/card7.png" alt="">
            </a>
            <a href="{{ route('anesthesia')}}">
                <img src="./img/card8.png" alt="">
            </a>
            <a href="{{ route('veneers')}}">
                <img src="./img/card9.png" alt="">
            </a>
            <a href="{{ route('prosthetics')}}">
                <img src="/img/card10.png" alt="">
            </a>
            <a href="{{ route('dentalcarechildren')}}">
                <img src="/img/card11.png" alt="">
            </a>
            <a href="{{ route('cons') }}">
                <img src="/img/card12.png" alt="">
            </a>
        </div>

        <!-- седьмой секшен -->

        <div class="specialists">
            <h1 id="specialsss">НАШИ СПЕЦИАЛИСТЫ</h1>
        </div>

        <!-- восьмой секшен -->

        <div class="ourspecmain">
            <div class="ourspec">
                <div class="spec">
                    <img src="./img/avd.jpg" alt="">
                    <h2>Авдеева Наталья Викторовна</h2>
                    <h3>Стоматолог-терапевт, эндонист</h3>
                    <p>Стаж: 23 года</p>
                    <button class="btnspec"><a href="{{ route('descriptionavd') }}">Подробнее</a></button>
                </div>
                <div class="spec">
                    <img src="./img/ayv.jpg" alt="">
                    <h2>Айвазова Екатерина Олеговна</h2>
                    <h3>Стоматолог-терапевт</h3>
                    <p>Стаж: 7 лет</p>
                    <button class="btnspec"><a href="{{ route('descayv') }}">Подробнее</a></button>
                </div>
                <div class="spec">
                    <img src="./img/alek.jpg" alt="">
                    <h2>Алексеева Наталья Игоревна</h2>
                    <h3>Зубной врач</h3>
                    <p>Стаж: 14 лет</p>
                    <button class="btnspec"><a href="{{ route('descalek') }}">Подробнее</a></button>
                </div>
                <div class="spec">
                    <img src="./img/Atam.jpg" alt="">
                    <h2>Атаманчук Дарья Александровна</h2>
                    <h3>Стоматолог-терапевт</h3>
                    <p> </p>
                    <button class="btnspec"><a href="{{ route('descatam') }}">Подробнее</a></button>
                </div>
                <div class="spec">
                    <img src="./img/Akh.jpg" alt="">
                    <h2>Ахмеджанова Эльмира Ильфатовна</h2>
                    <h3>Детский ортодонт</h3>
                    <p>Стаж: 3 года</p>
                    <button class="btnspec"><a href="{{ route('descakh') }}">Подробнее</a></button>
                </div>
            </div>
            <a href="{{ route('specialists') }}"><button class="morebtn">Подробнее...</button></a>
        </div>

        <!-- девятый секшен -->

        <div class="address">
            <h1 id="addrreess">АДРЕСА</h1>
        </div>

        <!-- десятый секшен -->

        <div class="ouraddress">
            <div class="cardaddress">
                <a href="{{ route('ourclinics') }}">
                    <img src="./img/1add.jpg" alt="">
                    <div class="textaddress">
                        <h2>Комсомольский пр-т, 80</h2>
                    </div>
                </a>
            </div>
            <div class="cardaddress">
                <a href="ourclinics#kashmax">
                    <img src="./img/2add.jpg" alt="">
                    <div class="textaddress">
                        <h2>ул. Братьев Кашириных, 54г (Maxima)</h2>
                    </div>
                </a>
            </div>
            <div class="cardaddress">
                <a href="ourclinics#kashmax2">
                    <img src="./img/3add.jpg" alt="">
                    <div class="textaddress">
                        <h2>ул. Братьев Кашириных, 54г (BabyDent)</h2>
                    </div>
                </a>
            </div>
            <div class="cardaddress">
                <a href="ourclinics#eng">
                    <img src="./img/4add.jpg" alt="">
                    <div class="textaddress">
                        <h2>ул. Энгельса, 43</h2>
                    </div>
                </a>
            </div>
            <div class="cardaddress">
                <a href="ourclinics#mopr">
                    <img src="./img/5add.jpg" alt="">
                    <div class="textaddress">
                        <h2>пл. МОПРа, 9</h2>
                    </div>
                </a>
            </div>
            <div class="cardaddress">
                <a href="ourclinics#pobed">
                    <img src="./img/6add.jpg" alt="">
                    <div class="textaddress">
                        <h2>ул. 40 лет Победы, 36</h2>
                    </div>
                </a>
            </div>
            <div class="cardaddress">
                <a href="ourclinics#taras">
                    <img src="./img/7add.jpg" alt="">
                    <div class="textaddress">
                        <h2>ул. Тарасова, 40</h2>
                    </div>
                </a>
            </div>
            <div class="cardaddress">
                <a href="ourclinics#naber">
                    <img src="./img/8add.jpg" alt="">
                    <div class="textaddress">
                        <h2>ул. Университетская Набережная, 52</h2>
                    </div>
                </a>
            </div>
            <div class="cardaddress">
                <a href="ourclinics#okt">
                    <img src="./img/9add.jpg" alt="">
                    <div class="textaddress">
                        <h2>ул. 40-летия Октября, 15</h2>
                    </div>
                </a>
            </div>
            <div class="addpodrobnee">
                <a href="{{ route ('ourclinics')}}">
                <a href="{{ route('contacts') }}">смотреть на карте</a>
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
