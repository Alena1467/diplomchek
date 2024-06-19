<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/descriptionavd.css">
    <link rel="stylesheet" href="./css/media.css">
    <script src="./js/descriptionavd.js"></script>
    <title>Бережная Елена Сергеевна</title>
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
        <!-- левая колонка -->
        <div class="procheedisc">
            <div class="discr">
                <div class="avatar">
                    <img src="./img/berej.jpg" alt="Avatar">
                </div>
                <div class="rec">
                    <p>Ближайшая дата приема 01.07.2024</p>
                    <button class="recbtnvr" id="recordButton">Записаться</button>
                    <div id="popupContainer" style="display: none;">
                        <div id="popup">
                            <span class="close-btn">&times;</span>
                            <p>Запишитесь на консультацию к Елене Сергеевне</p>
                            <form id="popupForm">
                                <label for="name">Представьтесь, пожалуйста</label>
                                <input type="text" id="name" name="name"><br><br>
                                <label for="email">Ваш контактный телефон</label>
                                <input type="email" id="email" name="email"><br><br>
                                <input type="checkbox" id="consent" name="consent">
                                <label for="consent">Выражаю согласие на обработку моих персональных данных</label>
                                <button type="submit">Запись на консультацию</button>
                            </form>
                        </div>
                    </div>
                    <button class="link-button" id="openModalBtn">Оставить отзыв</button>
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <form action="{{ route('descberej') }}" method="POST" class="form_push">
                                @csrf
                                <input type="text" name="user_name" class="un-form" placeholder="Введите имя">
                                <input type="text" name="review" class="rev-form" placeholder="Введите отзыв">
                                <input type="hidden" name="doctor" id="doctor" value="13">
                                <input type="submit" class="submit-push" value="Отправить">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- правая колонка -->
        <div class="maindiscription">
            <div class="mainds">
                <div class="bb">
                    <a href="{{ route('specialists') }}" class="back">
                    &laquo; назад
                    </a>
                </div>
                <div class="opisvracha">
                    <h1>Бережная Елена Сергеевна</h1>
                    <h2>Стоматолог-хирург-имплантолог, стоматолог-хирург. Стаж 29 лет</h2>
                    <p>Ведущий специалист в области хирургической стоматологии и имплантологии. Выполняет все виды стоматологических операций, достигает идеального результата даже в сложных клинических ситуациях. Специализируется на сложном имплантологическом лечении пациентов.
                    <br>
                    <br>
                    Елена Сергеевна — главный врач клиники «Стомпрактика» на ул. 40 лет Победы, 36. Руководитель медицинского совета ГК «Стомпрактика», стоматолог-хирург, имплантолог, врач высшей категории, профессионал в области имплантологии и хирургической стоматологии.
                    <br>
                    <br>
                    Елена Бережная специализируется на операциях по имплантации и на операциях по восстановлению костной ткани. Награждена Стоматологической ассоциацией России золотым знаком «Заслуженный работник». Преподаватель кафедры хирургической стоматологии Южно-Уральского государственного медицинского университета. Провела более 10 000 хирургических операций.</p>
                    <ul class="start-without-marker">
                        <li>Образование:</li>
                        <li>27.06.1988 Архангельский государственный медицинский институт. Стоматология, врач-стоматолог.</li>
                        <li>01.07.1989 Донецкий медицинский институт. Стоматолог-терапевт.</li>
                        <li>17.03.2020 ФГБОУ ВО "Южно-Уральский государственный медицинский университет" МЗ РФ г. Челябинск. Стоматология хирургическая.</li>
                        <li>30.12.2022 АНО ЦДПО "УНИВЕРСУМ". Контроль и экспертиза качества и безопасности медицинской деятельности.</li>
                    </ul>
                    <ul class="sw-marker">
                        <li>Где принимает:</li>
                        <li>г. Челябинск, ул. 40 лет Победы, 36</li>
                    </ul>
                    <ul class="sw-marker">
                        <li>Услуги, за которыми вы можете обратиться к Наталье Авдеевой:</li>
                        <li>Имплантация зубов</li>
                        <li>Консультация по имплантации зубов</li>
                        <li>Одномоментная имплантация зубов</li>
                        <li>Имплантация зубов Snucone</li>
                        <li>Имплантация зубов по системе AnyRidge</li>
                        <li>Имплантация зубов по системе Straumann</li>
                        <li>Удаление зубов</li>
                        <li>Консультация хирурга-стоматолога</li>
                        <li>Удаление зуба мудрости</li>
                    </ul>
                </div>
                <div class="container">
                    @if($reviewDate->isEmpty())
                        <p>Нет отзывов для отображения.</p>
                    @else
                        @foreach($reviewDate as $review)
                            <p>Имя пользователя: {{ $review->user_name }}</p>
                            <p>Отзыв: {{ $review->review }}</p>
                            <p>Дата создания: {{ $review->created_at}}</p>
                            <form action="{{ route('descberej') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id_review" value="{{ $review->id_review }}">
                                <button type="submit">Удалить</button>
                            </form>
                            <hr>
                        @endforeach
                    @endif
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
