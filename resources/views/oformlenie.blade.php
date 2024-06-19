<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/oformlenie.css">
    <script src="./js/oformlenie.js"></script>
    <title>Запись</title>
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
        <div class="mrec">
            <!-- левая колонка -->
            <div class="lrec">
                <h1>Оформление <br> записи</h1>
            </div>

            <!-- правая колонка -->
            <div class="rrec">
                <div class="form-container">
                    @if(session('success'))
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <p>{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif
                    <form id="appointment-form" method="POST" action="/submit-feedback">
                        @csrf
                        <div class="form-fio">
                            <input type="text" id="fio" name="fio" placeholder="ФИО" required>
                        </div>
                        <div class="form-phone-date">
                            <input type="tel" id="phone" name="phone" placeholder="+7(999) 999-99-99" pattern="\+7\(\d{3}\) \d{3}-\d{2}-\d{2}" required>
                            <input type="datetime-local" id="datetime" name="datetime" placeholder="выберите желаемую дату и время приема" required>
                        </div>
                        <div class="form-problem">
                            <textarea id="problem" name="problem" rows="4" placeholder="Кратко опишите проблему" maxlength="450" required></textarea>
                        </div>
                        <div class="form-address">
                            <select id="address" name="address_id" required>
                                <option value="">Выберите адрес</option>
                                @foreach($centers as $center)
                                    <option value="{{ $center->id_centers }}">{{ $center->address }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="payment-options">
                            <h2>Выберите способ оплаты после приёма</h2>
                            <div class="payment-buttons">
                                <button type="button" data-payment-method="credit-card">Оплата банковской картой</button>
                                <button type="button" data-payment-method="QR-code">Оплата по QR-коду</button>
                                <button type="button" data-payment-method="cash">Оплата наличными</button>
                                <button type="button" data-payment-method="transfer">Оплата переводом</button>
                            </div>
                            <input type="hidden" id="payment-method" name="payment_method" required>
                            <button type="submit" id="confirm-button">Подтвердить</button>
                        </div>
                    </form>
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
