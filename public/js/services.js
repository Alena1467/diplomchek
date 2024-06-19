document.addEventListener('DOMContentLoaded', function() {
    // для меню
    var menuIcon = document.querySelector('.menu-icon');
    var menuList = document.querySelector('.menu-list');

    if (menuIcon && menuList) {
        menuIcon.addEventListener('click', function() {
            menuList.classList.toggle('active');
        });
    }

    const servicesContainer = document.querySelector('.services1');
    const serviceLinks = servicesContainer.querySelectorAll('a');
    serviceLinks.forEach(link => {
        link.addEventListener('mouseenter', () => {
            serviceLinks.forEach(otherLink => {
                if (otherLink !== link) {
                    otherLink.classList.add('blur');
                }
            });
        });

        link.addEventListener('mouseleave', () => {
            serviceLinks.forEach(otherLink => {
                otherLink.classList.remove('blur');
            });
        });
    });
});
