document.addEventListener('DOMContentLoaded', function() {
    //  для меню
    var menuIcon = document.querySelector('.menu-icon');
    var menuList = document.querySelector('.menu-list');

    if (menuIcon && menuList) {
        menuIcon.addEventListener('click', function() {
            menuList.classList.toggle('active');
        });
    }

    var modal = document.getElementById("myModal");
    // Получить кнопку, которая открывает модальное окно
    var btn = document.getElementById("openModalBtn");
    // Получить элемент <span>, который закрывает модальное окно
    var span = document.getElementsByClassName("close")[0];
    // Когда пользователь нажимает на кнопку, открывается модальное окно
    btn.onclick = function() {
        console.log("Button clicked");  // Отладочный вывод
        modal.style.display = "block";
    }
    // Когда пользователь нажимает на <span> (x), закрывается модальное окно
    span.onclick = function() {
        modal.style.display = "none";
    }
    // Когда пользователь нажимает в любом месте за пределами модального окна, оно закрывается
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


// для формы

    var recordButton = document.getElementById('recordButton');
    var popupContainer = document.getElementById('popupContainer');
    var popupForm = document.getElementById('popupForm');
    var closeBtn = document.querySelector('.close-btn'); // Выбираем крестик для закрытия

    if (recordButton) {
    recordButton.addEventListener('click', function(event) {
    popupContainer.style.display = 'flex'; // Показываем контейнер всплывающего окна
    });
    }

    if (popupForm) {
    popupForm.addEventListener('submit', function(event) {
    // Здесь не нужно предотвращать отправку формы
    popupContainer.style.display = 'none'; // Закрываем окно после отправки формы
    });
    }

    if (closeBtn) {
    closeBtn.addEventListener('click', function() {
    popupContainer.style.display = 'none'; // Закрываем окно при клике на крестик
    });
    }

    // Валидация ввода для поля номера телефона
    document.getElementById('phone').addEventListener('input', function(event) {
        let input = event.target;
        let value = input.value.replace(/\D/g, ''); // Удалить все, кроме цифр
        let formattedValue = '+7(';

        if (value.length > 1) {
        formattedValue += value.substring(1, 4);
        }
        if (value.length >= 5) {
        formattedValue += ') ' + value.substring(4, 7);
        }
        if (value.length >= 8) {
        formattedValue += '-' + value.substring(7, 9);
        }
        if (value.length >= 10) {
        formattedValue += '-' + value.substring(9, 11);
        }

        input.value = formattedValue;
    });

    // Валидация ввода для поля ФИО
        var fioInput = document.getElementById('fio');
        fioInput.addEventListener('input', function(event) {
        var value = fioInput.value;
        var filteredValue = value.replace(/[^а-яА-ЯёЁ\s]/g, ''); // Оставляем только буквы и пробелы
        fioInput.value = filteredValue;
    });



});

    let slideIndex = 1;
    /* Вызываем функцию, которая реализована ниже: */
    showSlides(slideIndex);
    /* Увеличиваем индекс на 1 — показываем следующий слайд: */
    function nextSlide() {
        showSlides(slideIndex += 1);
    }
    /* Уменьшаем индекс на 1 — показываем предыдущий слайд: */
    function previousSlide() {
        showSlides(slideIndex -= 1);
    }
    /* Устанавливаем текущий слайд: */
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    /* Функция перелистывания: */
    function showSlides(n) {
        /* Обращаемся к элементам с названием класса "item", то есть к картинкам: */
        let slides = document.getElementsByClassName("item");

        /* Проверяем количество слайдов: */
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }

        /* Проходим по каждому слайду в цикле for: */
        for (let slide of slides) {
            slide.style.display = "none";
        }
        /* Делаем элемент блочным: */
        slides[slideIndex - 1].style.display = "block";
    }
