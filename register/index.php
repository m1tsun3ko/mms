<!DOCTYPE html>
<html lang="ru" data-theme="dark">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MMS • Регистрация</title>

    <link rel="stylesheet" href="../addictions/css/variables.css">
    <link rel="stylesheet" href="../addictions/css/themes.css">
    <link rel="stylesheet" href="../addictions/css/base.css">
    <link rel="stylesheet" href="../addictions/css/register.css">

</head>

<body>

<main class="register-page">

    <section class="register-card">

        <div class="logo">

            <div class="logo-circle">M</div>

            <h1>MMS</h1>

            <p>Создание нового аккаунта</p>

        </div>

        <form id="registerForm">

            <div class="row">

                <div class="input-group">

                    <label>Имя</label>

                    <input
                        type="text"
                        name="first_name"
                        maxlength="32"
                        autocomplete="given-name"
                        required>

                </div>

                <div class="input-group">

                    <label>Фамилия</label>

                    <input
                        type="text"
                        name="last_name"
                        maxlength="32"
                        autocomplete="family-name"
                        required>

                </div>

            </div>

            <div class="input-group">

                <label>Логин</label>

                <input
                    type="text"
                    name="username"
                    maxlength="32"
                    autocomplete="username"
                    required>

            </div>

            <div class="input-group">

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    autocomplete="email"
                    required>

            </div>

            <div class="input-group">

                <label>Пароль</label>

                <input
                    type="password"
                    name="password"
                    autocomplete="new-password"
                    required>

            </div>

            <div class="input-group">

                <label>Повторите пароль</label>

                <input
                    type="password"
                    name="password_repeat"
                    autocomplete="new-password"
                    required>

            </div>

            <label class="checkbox">

                <input
                    type="checkbox"
                    name="rules"
                    required>

                <span>
                    Я принимаю правила сайта
                </span>

            </label>

            <button
                type="submit"
                class="register-btn">

                Создать аккаунт

            </button>

        </form>

        <div class="bottom">

            <span>Уже зарегистрированы?</span>

            <a href="../login/">
                Войти
            </a>

        </div>

    </section>

</main>

<script src="../addictions/js/theme.js"></script>
<script src="../addictions/js/register.js"></script>

</body>
</html>