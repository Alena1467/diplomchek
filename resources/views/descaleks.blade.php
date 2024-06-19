<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/descriptionavd.css">
    <link rel="stylesheet" href="./css/media.css">
    <script src="./js/descriptionavd.js"></script>
    <title>Алексеева Татьяна Павловна</title>
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
                    <img src="./img/aleks.jpg" alt="Avatar">
                </div>
                <div class="rec">
                    <p>Ближайшая дата приема 05.07.2024</p>
                    <button class="recbtnvr" id="recordButton">Записаться</button>
                    <div id="popupContainer" style="display: none;">
                        <div id="popup">
                            <span class="close-btn">&times;</span>
                            <p>Запишитесь на консультацию к Татьяне Алексеевой</p>
                            <form method="POST" action="{{ route('submit-record4') }}" class="formchto">
                                @csrf
                                <div class="form-fio">
                                    <input type="text" id="fio" name="fio" placeholder="ФИО" required>
                                </div>
                                <div class="form-phone-date">
                                    <input type="tel" id="phone" name="phone" placeholder="+7(999) 999-99-99" pattern="\+7\(\d{3}\) \d{3}-\d{2}-\d{2}" required>
                                </div>
                                <input type="checkbox" id="consent" name="consent" required>
                                <label for="consent" class="galka">Выражаю согласие на обработку моих персональных данных</label>
                                <input type="hidden" name="doctor" id="doctor" value="4">
                                <button class="zapisnak" type="submit">Запись на консультацию</button>
                            </form>
                        </div>
                    </div>
                    <button class="link-button" id="openModalBtn">Оставить отзыв</button>
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <form action="{{ route('descaleks') }}" method="POST" class="form_push">
                                @csrf
                                <input type="text" name="user_name" class="un-form" placeholder="Введите имя">
                                <input type="text" name="review" class="rev-form" placeholder="Введите отзыв">
                                <input type="hidden" name="doctor" id="doctor" value="4">
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
                    <h1>Алексеева Татьяна Павловна</h1>
                    <h2>Стоматолог-терапевт. Стаж 38 лет</h2>
                    <p>Алексеева Татьяна Павловна – высококвалифицированный специалист в области терапевтической стоматологии с опытом работы более 30 лет, 10 из которых — в нашей клинике. Провела более 15 000 терапевтических лечений, имеет звание «Заслуженный работник» Стоматологической ассоциации России.
                    <br>
                    <br>
                    В нашей клинике Татьяна Павловна проводит реставрацию фронтальных и боковых зубов, эндодонтическое лечение зубов, лечение кариеса, профессиональную гигиену полости рта. Специализируется на лечении с применением американских материалов.
                    <br>
                    <br>
                    Татьяна Павловна внимательно относится к каждому пациенту, в ходе лечения рассказывает свои дальнейшие шаги. Такой подход позволяет снизить до минимума страх перед лечением и полностью довериться врачу.</p>
                    <ul class="start-without-marker">
                        <li>Образование:</li>
                        <li>01.01.1986 Челябинское медицинское училище. Зубной врач. Номер диплома: ЗТ-I № 403166.</li>
                        <li>28.12.2020 АНО ДПО "Центральный многопрофильный институт". Стоматология.</li>
                    </ul>
                    <ul class="sw-marker">
                        <li>Где принимает:</li>
                        <li>г. Челябинск, ул. Тарасова, 40</li>
                    </ul>
                    <ul class="sw-marker">
                        <li>Услуги, за которыми вы можете обратиться к Наталье Авдеевой:</li>
                        <li>Лечение зубов</li>
                        <li>Консультация стоматолога-терапевта</li>
                        <li>Лечение цифровыми пломбами (вкладками)</li>
                        <li>Лечение кариеса</li>
                        <li>Лечение пульпита</li>
                        <li>Лечение периодонтита</li>
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
                            <form action="{{ route('descaleks') }}" method="POST">
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
        </ul>ы
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
