/*
==================================================
REGISTER
==================================================
*/

const registerForm = document.getElementById("registerForm");

registerForm.addEventListener("submit", async (e) => {

    e.preventDefault();

    const password = registerForm.password.value.trim();
    const repeat = registerForm.password_repeat.value.trim();

    if (password !== repeat) {

        alert("Пароли не совпадают.");

        return;

    }

    const button = document.querySelector(".register-btn");

    button.disabled = true;
    button.textContent = "Создание...";

    const formData = new FormData(registerForm);

    try {

        /*
        ==============================================
        Будущий backend

        POST /api/register.php

        Сейчас только заготовка.
        ==============================================
        */

        const response = await fetch("/api/register.php", {

            method: "POST",

            body: formData

        });

        const data = await response.json();

        if (data.status === "ok") {

            window.location.href = "../login/";

            return;

        }

        alert(data.message);

    }

    catch (error) {

        console.error(error);

        alert("Ошибка соединения с сервером.");

    }

    finally {

        button.disabled = false;

        button.textContent = "Создать аккаунт";

    }

});