document.addEventListener('DOMContentLoaded', function() {
    // для меню
        var menuIcon = document.querySelector('.menu-icon');
        var menuList = document.querySelector('.menu-list');

        if (menuIcon && menuList) {
            menuIcon.addEventListener('click', function() {
                menuList.classList.toggle('active');
            });
        }
});

//всплывающее окно
function openPopup() {
    var popup = document.getElementById("popup");
    popup.classList.add("active");

    // Добавляем слушатель событий для клика на весь документ
    document.addEventListener("click", closePopupOutside);

    // Предотвращаем всплытие события клика от кнопки до всплывающего окна
    event.stopPropagation();
}

function closePopupOutside(event) {
    var popup = document.getElementById("popup");

    // Проверяем, открыто ли всплывающее окно
    if (popup.classList.contains("active")) {
        // Проверяем, было ли совершено нажатие вне области всплывающего окна
        if (!popup.contains(event.target)) {
            popup.classList.remove("active");

            // Удаляем слушатель событий после закрытия всплывающего окна
            document.removeEventListener("click", closePopupOutside);
        }
    }
}
