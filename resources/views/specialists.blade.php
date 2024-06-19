<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/specc.css">
    <link rel="stylesheet" href="./css/media.css">
    <script src="./js/spec.js"></script>
    <title>Специалисты</title>
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
        <div class="specmain">

            <!-- левая колонка -->
            <div class="specpart">
                <h1>О нас</h1>
            </div>

            <!-- правая колонка -->
            <div class="spc">
                <div class="imgspc">
                    <img src="./img/sostav.png" alt="">
                </div>

                <div class="discriptionspec">
                    <h3>О нас</h3>
                    <p> "Добро пожаловать в нашу стоматологическую клинику, где ваша улыбка — наш приоритет. Мы предлагаем высококачественны стоматологические услуги, основанные на передовых технологиях и индивидуальном подходе к каждому пациенту. Наша команда состоит из опытных специалистов, готовых решать самые сложные задачи связанные со здоровьем вашей улыбки. Мы стремимся к вашему комфорту и уверенности, предлагая широкий спектр услуг от профилактики до решения эстетических и функциональных проблем. В клинике мы используем самые современные методы лечения и диагностики, чтобы обеспечить нашим пациентам лучшие результаты. Наше оборудование соответствует самым высоким стандартам качества и безопасности, чтобы вы могли быть уверены в надежности наших процедур. Приходите к нам и дайте нам заботиться о вашей улыбке — вместе мы сделаем вашу улыбку яркой и здоровой!"</p>
                </div>

                <div class="opisanie">
                    <div class="spctwo">
                    <h2>Специалисты</h2>
                    </div>
                </div>

                <div class="cardochki">
                    <div class="cardsp">
                        <div class="card-content">
                            <div class="avatars">
                                <div class="avatar">
                                    <img src="./img/avd.jpg" alt="">
                                </div>
                                <div class="experience">Стаж: <span>23</span> года</div>
                            </div>
                            <div class="details">
                                <p>Врач</p>
                                <h1><a href="{{ route('descriptionavd') }}" class="animated-link">Авдеева Наталья Викторовна</a></h1>
                                <p>Специализация</p>
                                <h2>ведущий стоматолог-терапевт, эндонист</h2>
                            </div>
                        </div>
                    </div>
                    <div class="cardsp">
                        <div class="card-content">
                            <div class="avatars">
                                <div class="avatar">
                                    <img src="./img/ayv.jpg" alt="">
                                </div>
                                <div class="experience">Стаж: <span>7</span> лет</div>
                            </div>
                            <div class="details">
                                <p>Врач</p>
                                <h1><a href="{{ route('descayv') }}" class="animated-link">Айвазова Екатерина Олеговна</a></h1>
                                <p>Специализация</p>
                                <h2>стоматолог-терапевт</h2>
                            </div>
                        </div>
                    </div>
                    <div class="cardsp">
                        <div class="card-content">
                            <div class="avatars">
                                <div class="avatar">
                                    <img src="./img/alek.jpg" alt="">
                                </div>
                                <div class="experience">Стаж: <span>14</span> лет</div>
                            </div>
                            <div class="details">
                                <p>Врач</p>
                                <h1><a href="{{ route('descalek') }}" class="animated-link">Алексеева Наталья Игоревна</a></h1>
                                <p>Специализация</p>
                                <h2>зубной врач</h2>
                            </div>
                        </div>
                    </div>
                    <div class="cardsp">
                        <div class="card-content">
                            <div class="avatars">
                                <div class="avatar">
                                    <img src="./img/aleks.jpg" alt="">
                                </div>
                                <div class="experience">Стаж: <span>38</span> лет</div>
                            </div>
                            <div class="details">
                                <p>Врач</p>
                                <h1><a href="{{ route('descaleks') }}" class="animated-link">Алексеева Татьяна Павлова</a></h1>
                                <p>Специализация</p>
                                <h2>стоматолог-терапевт</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="card">
                        <div class="card-content">
                            <div class="avatars">
                                <div class="avatar">
                                    <img src="./img/alesh.jpg" alt="">
                                </div>
                                <div class="experience">Стаж: <span>2</span> года</div>
                            </div>
                            <div class="details">
                                <p>Врач</p>
                                <h1><a href="{{ route('descalesh') }}" class="animated-link">Алешкин Константин Александрович</a></h1>
                                <p>Специализация</p>
                                <h2>стоматолог-хирург</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="avatars">
                                <div class="avatar">
                                    <img src="./img/anik.jpg" alt="">
                                </div>
                                <div class="experience">Стаж: <span></span></div>
                            </div>
                            <div class="details">
                                <p>Врач</p>
                                <h1><a href="{{ route('descanik') }}" class="animated-link">Аникина Наталья Алексеевна</a></h1>
                                <p>Специализация</p>
                                <h2>гигиенист стоматологический</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="avatars">
                                <div class="avatar">
                                    <img src="./img/Atam.jpg" alt="">
                                </div>
                                <div class="experience">Стаж: <span></span></div>
                            </div>
                            <div class="details">
                                <p>Врач</p>
                                <h1><a href="{{ route('descatam') }}" class="animated-link">Атамнчук Дарья Александровна</a></h1>
                                <p>Специализация</p>
                                <h2>стоматолог-терапевт</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="avatars">
                                <div class="avatar">
                                    <img src="./img/Akh.jpg" alt="">
                                </div>
                                <div class="experience">Стаж: <span>3</span> года</div>
                            </div>
                            <div class="details">
                                <p>Врач</p>
                                <h1><a href="{{ route('descakh') }}" class="animated-link">Ахмеджанова Эльмира Ильфатовна</a></h1>
                                <p>Специализация</p>
                                <h2>детский ортодонт</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="avatars">
                                <div class="avatar">
                                    <img src="./img/bazar.jpg" alt="">
                                </div>
                                <div class="experience">Стаж: <span>30</span> лет</div>
                            </div>
                            <div class="details">
                                <p>Врач</p>
                                <h1><a href="{{ route('descbazar') }}" class="animated-link">Базарова Оксана Анатольевна</a></h1>
                                <p>Специализация</p>
                                <h2>детский врач-стоматолог</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="avatars">
                                <div class="avatar">
                                    <img src="./img/barysh.jpg" alt="">
                                </div>
                                <div class="experience">Стаж: <span>4</span> года</div>
                            </div>
                            <div class="details">
                                <p>Врач</p>
                                <h1><a href="{{ route('descbarysh') }}" class="animated-link">Барышников Анатолий Иванович</a></h1>
                                <p>Специализация</p>
                                <h2>стоматолог-ортопед</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="avatars">
                                <div class="avatar">
                                    <img src="./img/bakh.jpg" alt="">
                                </div>
                                <div class="experience">Стаж: <span>8</span> лет</div>
                            </div>
                            <div class="details">
                                <p>Врач</p>
                                <h1><a href="{{ route('descbakh') }}" class="animated-link">Бахаев Павел Николаевич</a></h1>
                                <p>Специализация</p>
                                <h2>стоматолог-ортопед</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="avatars">
                                <div class="avatar">
                                    <img src="./img/bein.jpg" alt="">
                                </div>
                                <div class="experience">Стаж: <span>15</span> лет</div>
                            </div>
                            <div class="details">
                                <p>Врач</p>
                                <h1><a href="{{ route('descbein') }}" class="animated-link">Бейнарович Станислав Викторович</a></h1>
                                <p>Специализация</p>
                                <h2>стоматолог-ортопед</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="avatars">
                                <div class="avatar">
                                    <img src="./img/berej.jpg" alt="">
                                </div>
                                <div class="experience">Стаж: <span>29</span> лет</div>
                            </div>
                            <div class="details">
                                <p>Врач</p>
                                <h1><a href="{{ route('descberej') }}" class="animated-link">Бережная Елена Сергеевна</a></h1>
                                <p>Специализация</p>
                                <h2>cтоматолог-хирург, хирург-имплантолог, главный врач клиники, член медсовета сети клиник "СТОМПРАКТИКА.РФ"</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="avatars">
                                <div class="avatar">
                                    <img src="./img/bob.jpg" alt="">
                                </div>
                                <div class="experience">Стаж: <span>7</span> лет</div>
                            </div>
                            <div class="details">
                                <p>Врач</p>
                                <h1><a href="{{ route('descbob') }}" class="animated-link">Бобылев Артем Вячеславович</a></h1>
                                <p>Специализация</p>
                                <h2>стоматолог-хирург, хирург-имплантолог</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="avatars">
                                <div class="avatar">
                                    <img src="./img/bred.jpg" alt="">
                                </div>
                                <div class="experience">Стаж: <span>4</span> года</div>
                            </div>
                            <div class="details">
                                <p>Врач</p>
                                <h1><a href="{{ route('descbred') }}" class="animated-link">Бреднева Юлия Евгеньевна</a></h1>
                                <p>Специализация</p>
                                <h2>детский врач-стоматолог</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="avatars">
                                <div class="avatar">
                                    <img src="./img/buim.jpg" alt="">
                                </div>
                                <div class="experience">Стаж: <span>7</span> лет</div>
                            </div>
                            <div class="details">
                                <p>Врач</p>
                                <h1><a href="{{ route('descbuim') }}" class="animated-link">Буймистрова Инга Геннадьевна</a></h1>
                                <p>Специализация</p>
                                <h2>стоматолог-терапевт</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spcbtnshow">
                    <button id="showMoreBtn">Больше</button>
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
