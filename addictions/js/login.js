/*
==========================================================
LOGIN
==========================================================
*/

const loginForm = document.getElementById("loginForm");
const passwordInput = document.getElementById("password");
const togglePassword = document.getElementById("togglePassword");

/*
==========================================================
SHOW PASSWORD
==========================================================
*/

togglePassword.addEventListener("click", () => {

    if (passwordInput.type === "password") {

        passwordInput.type = "text";
        togglePassword.innerHTML = "🙈";

    } else {

        passwordInput.type = "password";
        togglePassword.innerHTML = "👁";

    }

});

/*
==========================================================
INPUT EFFECTS
==========================================================
*/

document.querySelectorAll("input").forEach(input => {

    input.addEventListener("focus", () => {

        input.parentElement.classList.add("focused");

    });

    input.addEventListener("blur", () => {

        input.parentElement.classList.remove("focused");

    });

});

/*
==========================================================
LOGIN
==========================================================
*/

loginForm.addEventListener("submit", async function (e) {

    e.preventDefault();

    const button = document.querySelector(".login-btn");

    button.disabled = true;
    button.innerHTML = "Входим...";

    const formData = new FormData(loginForm);

    try {

        /*
        ==========================================================
        BACKEND
        ==========================================================

        Позже здесь просто появится настоящий login.php

        Сейчас фронт уже полностью готов.
        */

        const response = await fetch("/api/login.php", {

            method: "POST",
            body: formData

        });

        const result = await response.json();

        if (result.status === "ok") {

            button.innerHTML = "✓ Успешно";

            setTimeout(() => {

                window.location.href = "/feed/";

            }, 700);

        } else {

            throw new Error(result.message);

        }

    } catch (error) {

        button.disabled = false;

        button.innerHTML = "Войти";

        showToast(
            error.message || "Ошибка авторизации"
        );

    }

});

/*
==========================================================
TOAST
==========================================================
*/

function showToast(text) {

    let toast = document.querySelector(".toast");

    if (toast)
        toast.remove();

    toast = document.createElement("div");

    toast.className = "toast";

    toast.innerHTML = text;

    document.body.appendChild(toast);

    requestAnimationFrame(() => {

        toast.classList.add("show");

    });

    setTimeout(() => {

        toast.classList.remove("show");

        setTimeout(() => {

            toast.remove();

        }, 300);

    }, 2500);

}

/*
==========================================================
ENTER ANIMATION
==========================================================
*/

window.addEventListener("load", () => {

    document.body.classList.add("loaded");

});