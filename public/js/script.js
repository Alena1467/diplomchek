document.addEventListener('DOMContentLoaded', function() {
    // для меню
    var menuIcon = document.querySelector('.menu-icon');
    var menuList = document.querySelector('.menu-list');

    if (menuIcon && menuList) {
        menuIcon.addEventListener('click', function() {
            menuList.classList.toggle('active');
        });
    }

    // для перемещения к верху страницы
    const logoLink = document.getElementById('logo-link');
    if (logoLink) {
        logoLink.addEventListener('click', function(event) {
            // отменяем действие по умолчанию, чтобы предотвратить переход по ссылке
            event.preventDefault();

            // получаем высоту элемента для плавного перемещения
            const targetPosition = 0;
            const startPosition = window.pageYOffset;
            const distance = targetPosition - startPosition;
            const duration = 1000; // длительность анимации в миллисекундах

            // запускаем анимацию
            let start = null;
            function step(timestamp) {
                if (!start) start = timestamp;
                const progress = timestamp - start;
                window.scrollTo(0, easeInOutQuad(progress, startPosition, distance, duration));
                if (progress < duration) {
                    window.requestAnimationFrame(step);
                }
            }
            window.requestAnimationFrame(step);
        });
    }

    // Функция для расчета значения скролла с плавным изменением скорости (ease-in-out)
    function easeInOutQuad(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    }

});
