<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/implantation.css">
    <link rel="stylesheet" href="./css/media.css">
    <script src="./js/implantation.js"></script>
    <title>Лечение зубов у детей</title>
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
                <li><a href="{{route ('news')}}">Новости и акции</a></li>
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
                    <li><a href="{{route ('news')}}">Новости и акции</a></li>
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
                <h1>Лечение зубов<br>у детей</h1>
            </div>

            <!-- правая колонка -->
            <div class="rightimpl">
                <h2>Безболезненное и максимально бережное лечение зубов у детей по новейшим методикам в комфортных для ребенка условиях. Можно использовать региональный маткапитал.</h2>
                <h3>Полный список наших услуг по данному направлению:</h3>
                <div class="nameuslug">
                    <div class="leftname">
                        <div class="cardname">
                            <a href="{{route('record')}}">
                                <p>Консультация детского стоматолога</p>
                            </a>
                        </div>
                        <div class="cardname">
                            <a href="{{route('record')}}">
                                <p>Лечение пульпита молочного зуба</p>
                            </a>
                        </div>
                        <div class="cardname">
                            <a href="{{route('record')}}">
                                <p>Экстренная помощь при травме зубов</p>
                            </a>
                        </div>
                        <div class="cardname">
                            <a href="{{route('record')}}">
                                <p>Лечение зубов с применением веселящего газа</p>
                            </a>
                        </div>
                    </div>
                    <div class="rightname">
                        <div class="cardname">
                            <a href="{{route('record')}}">
                                <p>Лечение кариеса молочных зубов</p>
                            </a>
                        </div>
                        <div class="cardname">
                            <a href="{{route('record')}}">
                                <p>Реставрация зубов у детей</p>
                            </a>
                        </div>
                        <div class="cardname">
                            <a href="{{route('record')}}">
                                <p>Консультация по наркозу</p>
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
                        <td>Поверхностный кариес молочного зуба (стадия белого пятна)</td>
                        <td>от 2 040 ₽</td>
                    </tr>
                    <tr>
                        <td>Лечение кариеса молочного зуба (серебрение)</td>
                        <td>от 1 900 ₽</td>
                    </tr>
                    <tr>
                        <td>Лечение кариеса молочных зубов Gradia direct, Harmonize по IV классу (центральный зуб)</td>
                        <td>от 7 480 ₽</td>
                    </tr>
                    <tr>
                        <td>Лечение пульпита молочного зуба методом витальной ампутации (Gradia)</td>
                        <td>от 9 860 ₽</td>
                    </tr>
                    <tr>
                        <td>Лечение пульпита молочного зуба методом витальной ампутации (одноканальный)</td>
                        <td>от 12 760 ₽</td>
                    </tr>
                    <tr>
                        <td>Лечение пульпита молочного зуба методом витальной экстирпации (многоканальный)</td>
                        <td>14 115 ₽</td>
                    </tr>
                    <tr>
                        <td>Лечение кариеса молочного зуба под коронку</td>
                        <td>от 9 720 ₽</td>
                    </tr>
                    <tr>
                        <td>Лечение кариеса постоянного зуба</td>
                        <td>от 6 685 ₽</td>
                    </tr>
                    <tr>
                        <td>Лечение стоматита</td>
                        <td>от 2 580 ₽</td>
                    </tr>
                    <tr>
                        <td>Профессиональная гигиена полости рта молочный прикус 0-6 лет (с реминерализующей терапией)</td>
                        <td>3 500 ₽</td>
                    </tr>
                    <tr>
                        <td>Профессиональная гигиена полости рта Профи 3-6 лет молочный прикус на аппарате EMS Prophylaxis Master</td>
                        <td>5 420 ₽</td>
                    </tr>
                    <tr>
                        <td>Профессиональная гигиена полости рта сменный прикус 7-14 лет (с реминерализующей терапией)</td>
                        <td>4 670 ₽</td>
                    </tr>
                    <tr>
                        <td>Профессиональная гигиена полости рта и зубов постоянный прикус 14-18 лет (с рем.терапией)</td>
                        <td>5 120 ₽</td>
                    </tr>
                    <tr>
                        <td>Профессиональная гигиена полости рта Профи 7-18 лет сменный/постояннный прикус на аппарате EMS Prophylaxis Master</td>
                        <td>6 420 ₽</td>
                    </tr>
                    <tr>
                        <td>Подрезание уздечки языка 0-3 месяцев</td>
                        <td>3 060 ₽</td>
                    </tr>
                    <tr>
                        <td>Подрезание уздечки языка от 1-5 лет под наркозом</td>
                        <td>9 250 ₽</td>
                    </tr>
                    <tr>
                        <td>Подрезание уздечки языка от 5 лет</td>
                        <td>от 4 960 ₽</td>
                    </tr>
                    <tr>
                        <td>Вестибулопластика нижней губы</td>
                        <td>11 220 ₽</td>
                    </tr>
                    <tr>
                        <td>Удаление молочного зуба простое</td>
                        <td>от 2 380 ₽</td>
                    </tr>
                    <tr>
                        <td>Удаление молочного зуба сложное</td>
                        <td>от 4 600 ₽</td>
                    </tr>
                    <tr>
                        <td>Эстетическая детская коронка с лечением</td>
                        <td>от 6 700 ₽</td>
                    </tr>
                    <tr>
                        <td>Профилактическая детская коронка на пролеченный зуб</td>
                        <td>от 4 600 ₽</td>
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
