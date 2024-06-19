document.addEventListener('DOMContentLoaded', function() {
    // для меню
        var menuIcon = document.querySelector('.menu-icon');
        var menuList = document.querySelector('.menu-list');

        if (menuIcon && menuList) {
            menuIcon.addEventListener('click', function() {
                menuList.classList.toggle('active');
            });
        }





        document.querySelectorAll('.payment-buttons button').forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('payment-method').value = this.getAttribute('data-payment-method');
                document.querySelectorAll('.payment-buttons button').forEach(btn => btn.classList.remove('selected'));
                this.classList.add('selected');
            });
        });

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

        document.getElementById('appointment-form').addEventListener('submit', function(event) {
            var form = this;
            var valid = form.checkValidity();

            if (!valid) {
                event.preventDefault();
                alert('Пожалуйста, заполните все обязательные поля правильно.');
            }
        });

        // Скрипт для управления модальным окном
        var modal = document.getElementById("myModal");
        var span = document.getElementsByClassName("close")[0];

        if (modal) {
            modal.style.display = "block";

            span.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }


});
