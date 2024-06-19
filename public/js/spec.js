document.addEventListener('DOMContentLoaded', function() {
// для меню
    var menuIcon = document.querySelector('.menu-icon');
    var menuList = document.querySelector('.menu-list');

    if (menuIcon && menuList) {
        menuIcon.addEventListener('click', function() {
            menuList.classList.toggle('active');
        });
    }


    //карточки

    const showMoreBtn = document.getElementById("showMoreBtn");
    const cards = document.querySelectorAll(".card");
    const initialCardCount = 4; // количество карточек, которые отображаются изначально

    let isExpanded = false;

    showMoreBtn.addEventListener("click", function() {
        isExpanded = !isExpanded;

        if (isExpanded) {
            showMoreBtn.textContent = "Скрыть";
        // добавляем класс карточкам, чтобы показать все карточки
            cards.forEach(card => {
            card.classList.add('show');
            });
        } else {
            showMoreBtn.textContent = "Больше";
        // удаляем класс у карточек, которые были показаны после нажатия "Больше"
            cards.forEach(card => {
                card.classList.remove('show');
            });
        }
    });


});
