<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cons.css">
    <script src="./js/cons.js"></script>
    <title>Консультация</title>
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
                <li><a href="/contacts">Контакты и адреса</a></li>
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
                    <li><a href="/contacts">Контакты и адреса</a></li>
                </ul>
            </nav>
            <div class="cta">
                <button><a href="{{ route('record') }}">Записаться</a></button>
            </div>
        </div>
    </header>

    <main>
        <div class="samiymainoviymain">
            <div class="mclr1">
                <!-- левая колонка -->
                <div class="consleft">
                    <div class="ssilochki">
                        <h1>Консультация</h1>
                        <a href="{{ route('oformlenie') }}">записаться на прием</a>
                        <a href="#tableprices">цена</a>
                    </div>
                </div>

                <!-- правая колонка -->
                <div class="consrightmain">
                    <div class="consright">
                        <div class="bbc">
                            <a href="/">&laquo; назад</a>
                        </div>
                        <div class="zapisspec">
                            <div class="zapis">
                                <p>Записаться на консультацию</p>
                            </div>
                            <div class="vrachicard">
                                <div class="vrachi">
                                    <div class="cards-container">
                                        <div class="card">
                                            <a href="{{route ('descriptionavd')}}">
                                                <p class="year">Авдеева Наталья Викторовна</p>
                                                <p class="course">стоматолог-терапевт, эндонист</p>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{route ('descayv')}}">
                                                <p class="year">Айвазова Екатерина Олеговна</p>
                                                <p class="course">стоматолог-терапевт</p>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{route ('descalek')}}">
                                                <p class="year">Алексеева Наталья Игоревна</p>
                                                <p class="course">зубной врач</p>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{route ('descalesh')}}">
                                                <p class="year">Алешкин Константин Александрович</p>
                                                <p class="course">стоматолог-хирург</p>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{route ('descanik')}}">
                                                <p class="year">Аникина Наталья Алексеевна</p>
                                                <p class="course">гигиенист стоматологический</p>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{route ('descatam')}}">
                                                <p class="year">Атамнчук Дарья Александровна</p>
                                                <p class="course">стоматолог-терапевт</p>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{route ('descakh')}}">
                                                <p class="year">Ахмеджанова Эльмира Ильфатовна</p>
                                                <p class="course">детский ортодонт</p>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{route ('descbazar')}}">
                                                <p class="year">Базарова Оксана Анатольевна</p>
                                                <p class="course">детский врач-стоматолог</p>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{route ('descbarysh')}}">
                                                <p class="year">Барышников Анатолий Иванович</p>
                                                <p class="course">стоматолог-ортопед</p>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{route ('descbakh')}}">
                                                <p class="year">Бахаев Павел Николаевич</p>
                                                <p class="course">стоматолог-ортопед</p>
                                            </a>
                                        </div>
                                    </div>
                                    <button class="prev-btn">&#10094;</button>
                                    <button class="next-btn">&#10095;</button>
                                </div>
                            </div>
                            <div class="opiscons">
                                <h1>Консультация</h1>
                                <p>Прием включает полное обследование полости рта, диагностику заболевания и выбор оптимального метода лечения. <br><br> Первичный стоматологический прием — это первоеобращение пациента к врачу с целью планового осмотра или устранения беспокоящей проблемы. В ходе консультации стоматолог определяет диагноз и причины, которые привели к болезни. На основе полученных данных он подбирает оптимальный метод лечения и сообщает стоимость предстоящей процедуры.</p>
                                <h2>Некоторые виды консультаций в нашей клинике</h2>
                                <h3>Консультация стоматолога-терапевта</h3>
                                <ol>
                                    <li><span>История болезни и симптомы:</span> Врач обсуждает с пациентом историю его заболеваний и текущие симптомы, которые могут быть связаны с устным здоровьем.</li>
                                    <li><span>Осмотр полости рта:</span> Врач осматривает полость рта пациента с использованием инструментов, таких как зеркало и зонд, чтобы оценить состояние зубов, десен, слизистой оболочки, языка и других тканей.</li>
                                    <li><span>Диагностические процедуры:</span> По результатам осмотра врач может назначить дополнительные диагностические процедуры, такие как рентгенография, чтобы получить более подробное представление о состоянии зубов и тканей.</li>
                                    <li><span>Формулирование диагноза:</span> На основе собранных данных врач делает диагноз, определяя любые проблемы или состояния, которые нуждаются в лечении или наблюдении.</li>
                                    <li><span>План лечения:</span> Врач разрабатывает индивидуальный план лечения для пациента, который может включать в себя процедуры по устранению кариеса, лечению десен, удалению зубов и другие мероприятия.</li>
                                    <li><span>Образовательные моменты:</span> Врач может предоставить советы по уходу за полостью рта, включая правильную технику чистки зубов, использование зубной нити, выбор подходящих продуктов для ухода и регулярные визиты к стоматологу.</li>
                                    <li><span>Ответы на вопросы пациента:</span> В ходе консультации пациент может задать вопросы о своем устном здоровье, на которые врач ответит и предоставит дополнительную информацию.</li>
                                </ol>
                                <p class="note"><span>Важно отметить</span>, что консультация стоматолога-терапевта может быть различной в зависимости от индивидуальных потребностей пациента и конкретной ситуации.</p>



                                <h3>Консультация ортодонта</h3>
                                <p><span>Консультация ортодонта</span> — это важный этап на пути к достижению здорового и привлекательного улыбки, и позволяет пациенту понять свои потребности и оптимальный путь лечения.</p>
                                <ol>
                                    <li><span>Оценка медицинской и стоматологической истории:</span> Ортодонт проводит обсуждение медицинской и стоматологической истории пациента, включая информацию о проблемах с зубами и прикусом, а также о любых других медицинских состояниях, которые могут оказать влияние на лечение.</li>
                                    <li><span>Осмотр полости рта:</span> Ортодонт проводит визуальный осмотр полости рта, включая зубы, десны, прикус и челюсти, чтобы определить характер и степень необходимого лечения.</li>
                                    <li><span>Диагностические тесты:</span> В зависимости от случая и необходимости, ортодонт может провести ряд дополнительных диагностических тестов, таких как рентгенография, оттиск зубов или фотографии лица и зубов.</li>
                                    <li><span>Формулирование плана лечения:</span> На основе проведенной оценки и диагностики ортодонт разрабатывает индивидуальный план лечения, который может включать в себя применение брекетов, съемных устройств, элайнеров (например, Invisalign) или других методов коррекции.</li>
                                    <li><span>Обсуждение ожиданий и вопросов пациента:</span> Во время консультации пациент может обсудить свои ожидания от лечения и задать вопросы о процессе, длительности лечения, затратах и других важных аспектах.</li>
                                    <li><span>План ухода:</span> Ортодонт может предложить рекомендации по уходу за брекетами или другими ортодонтическими устройствами, а также по уходу за полостью рта в целом во время лечения.</li>
                                </ol>






                                <h3>Консультация пародонтолога/гигиениста</h3>
                                <p><span>Консультация пародонтолога или гигиениста</span> важна для поддержания здоровья десен и предотвращения серьезных проблем, связанных с пародонтитом и другими заболеваниями пародонта.</p>
                                <ol>
                                    <li><span>Оценка состояния десен:</span> Врач проводит визуальный осмотр состояния десен и десневых тканей, чтобы определить наличие воспаления (гингивит), пародонтита или других проблем, таких как рецессия десен или образование карманов.</li>
                                    <li><span>Оценка состояния зубного налета и камня:</span> Гигиенист проводит оценку наличия зубного налета и камня на поверхности зубов, так как они могут быть причиной воспаления десен и других проблем.</li>
                                    <li><span>Диагностические процедуры:</span> Пародонтолог или гигиенист может провести дополнительные диагностические тесты, такие как измерение глубины карманов между зубами и деснами или рентгенографию, чтобы получить более детальную информацию о состоянии пародонтальных тканей.</li>
                                    <li><span>План лечения и профилактики:</span> На основе результатов оценки врач разрабатывает индивидуальный план лечения и профилактики, который может включать в себя регулярные профессиональные чистки зубов, удаление зубного налета и камня, лечение гингивита или пародонтита, а также рекомендации по домашнему уходу за полостью рта.</li>
                                    <li><span>Обучение пациента:</span> Пародонтолог или гигиенист может предоставить пациенту обучающие материалы и советы по уходу за полостью рта, включая правильную технику чистки зубов, использование зубной нити, выбор подходящих продуктов для ухода и регулярные визиты к стоматологу.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mclr" id="tableprices">
                <h1>Цены</h1>
                <table>
                    <tr>
                        <td>Повторная консультация врача-стоматолога</td>
                        <td>400 рублей</td>
                    </tr>
                    <tr>
                        <td>Консультация детского стоматолога (при наличии снимка на руках)</td>
                        <td>от 700 рублей</td>
                    </tr>
                    <tr>
                        <td>Консультация хирурга-имплантолога</td>
                        <td>от 700 рублей</td>
                    </tr>
                    <tr>
                        <td>Консультация стоматолога-терапевта</td>
                        <td>от 700 рублей</td>
                    </tr>
                    <tr>
                        <td>Консультация ортодонта</td>
                        <td>от 700 рублей</td>
                    </tr>
                    <tr>
                        <td>Консультация пародонтолога/гигиениста</td>
                        <td>от 700 рублей</td>
                    </tr>
                    <tr>
                        <td>Консультация хирурга-стоматолога</td>
                        <td>от 700 рублей</td>
                    </tr>
                    <tr>
                        <td>Консультация стоматолога-ортопеда</td>
                        <td>от 700 рублей</td>
                    </tr>
                    <tr>
                        <td>Консультация стоматолога в клинике Maxima</td>
                        <td>от 1050 рублей</td>
                    </tr>
                    <tr>
                        <td>Консультация по наркозу</td>
                        <td>1500 рублей</td>
                    </tr>
                    <tr>
                        <td>Диагностика + консультация детского стоматолога </td>
                        <td>1700 рублей</td>
                    </tr>
                    <tr>
                        <td>Консультация ортодонта по элайнерам и брекетам</td>
                        <td>от 2300 рублей</td>
                    </tr>
                </table>
            </div>
            <div class="ostusulg">
                <div class="opus">
                    <h1>Все врачи</h1>
                </div>
                <div class="osuslg">
                    <div class="uslg">
                        <div class="cards-containerus">
                            <div class="card">
                                <a href="{{route ('descriptionavd')}}">
                                    <p class="year">Авдеева Наталья Викторовна</p>
                                    <p class="course">стоматолог-терапевт, эндонист</p>
                                </a>
                            </div>
                            <div class="card">
                                <a href="{{route ('descayv')}}">
                                    <p class="year">Айвазова Екатерина Олеговна</p>
                                    <p class="course">стоматолог-терапевт</p>
                                </a>
                            </div>
                            <div class="card">
                                <a href="{{route ('descalek')}}">
                                    <p class="year">Алексеева Наталья Игоревна</p>
                                    <p class="course">зубной врач</p>
                                </a>
                            </div>
                            <div class="card">
                                <a href="{{route ('descalesh')}}">
                                    <p class="year">Алешкин Константин Александрович</p>
                                    <p class="course">стоматолог-хирург</p>
                                </a>
                            </div>
                            <div class="card">
                                <a href="{{route ('descanik')}}">
                                    <p class="year">Аникина Наталья Алексеевна</p>
                                    <p class="course">гигиенист стоматологический</p>
                                </a>
                            </div>
                            <div class="card">
                                <a href="{{route ('descatam')}}">
                                    <p class="year">Атамнчук Дарья Александровна</p>
                                    <p class="course">стоматолог-терапевт</p>
                                </a>
                            </div>
                            <div class="card">
                                <a href="{{route ('descakh')}}">
                                    <p class="year">Ахмеджанова Эльмира Ильфатовна</p>
                                    <p class="course">детский ортодонт</p>
                                </a>
                            </div>
                            <div class="card">
                                <a href="{{route ('descbazar')}}">
                                    <p class="year">Базарова Оксана Анатольевна</p>
                                    <p class="course">детский врач-стоматолог</p>
                                </a>
                            </div>
                            <div class="card">
                                <a href="{{route ('descbarysh')}}">
                                    <p class="year">Барышников Анатолий Иванович</p>
                                    <p class="course">стоматолог-ортопед</p>
                                </a>
                            </div>
                            <div class="card">
                                <a href="{{route ('descbakh')}}">
                                    <p class="year">Бахаев Павел Николаевич</p>
                                    <p class="course">стоматолог-ортопед</p>
                                </a>
                            </div>
                        </div>
                        <button class="prev-btnus">&#10094;</button>
                        <button class="next-btnus">&#10095;</button>
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
