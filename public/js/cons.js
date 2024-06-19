document.addEventListener('DOMContentLoaded', function() {
    //  для меню
    var menuIcon = document.querySelector('.menu-icon');
    var menuList = document.querySelector('.menu-list');

    if (menuIcon && menuList) {
        menuIcon.addEventListener('click', function() {
            menuList.classList.toggle('active');
        });
    }



//            первый слайдер


    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");
    const cardsContainer = document.querySelector(".cards-container");
    const cards = document.querySelectorAll(".card");
    const cardWidth = 220; // ширина карточки
    const newPosition = -1750; //  значение позиции
    let currentIndex = 0; // текущий индекс карточки

    function showCards() {
        cardsContainer.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
    }

    nextBtn.addEventListener("click", function() {
        currentIndex = (currentIndex + 1) % cards.length;
        showCards();
    });

    prevBtn.addEventListener("click", function() {
        currentIndex = currentIndex === 0 ? cards.length - 1 : currentIndex - 1;
        showCards();
    });

    // первоначальное позиционирование карточек
    showCards();



//            второй слайдер

    const prevBtnus = document.querySelector(".prev-btnus");
    const nextBtnus = document.querySelector(".next-btnus");
    const cardsContainerus = document.querySelector(".cards-containerus");
    const cardsus = document.querySelectorAll(".cardus");
    const cardusWidth = 220; // ширина карточки
    const newsPosition = -1750; //  значение позиции
    let currentIndexus = 0; // текущий индекс карточки

    function showCardsus() {
        cardsContainerus.style.transform = `translateX(-${currentIndexus * cardusWidth}px)`;
    }

    nextBtnus.addEventListener("click", function() {
        currentIndexus = (currentIndexus + 1) % cards.length;
        showCardsus();
    });

    prevBtnus.addEventListener("click", function() {
        currentIndexus = currentIndexus === 0 ? cards.length - 1 : currentIndexus - 1;
        showCardsus();
    });

    // первоначальное позиционирование карточек
    showCardsus();

});
