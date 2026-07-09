<!DOCTYPE html>
<html lang="ru" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MMS • Вход</title>

    <link rel="stylesheet" href="../addictions/css/variables.css">
    <link rel="stylesheet" href="../addictions/css/themes.css">
    <link rel="stylesheet" href="../addictions/css/base.css">
    <link rel="stylesheet" href="../addictions/css/login.css">
</head>

<body>

<div class="background">
    <div class="blur blur-1"></div>
    <div class="blur blur-2"></div>
</div>

<main class="login-page">

    <section class="login-card">

        <div class="logo">

            <div class="logo-circle">
                M
            </div>

            <h1>MMS</h1>

            <p>
                Добро пожаловать обратно
            </p>

        </div>

        <form id="loginForm">

            <div class="input-group">

                <label>
                    Логин или Email
                </label>

                <input
                    type="text"
                    name="login"
                    autocomplete="username"
                    placeholder="Введите логин">

            </div>

            <div class="input-group">

                <label>
                    Пароль
                </label>

                <div class="password-box">

                    <input
                        id="password"
                        type="password"
                        name="password"
                        autocomplete="current-password"
                        placeholder="Введите пароль">

                    <button
                        type="button"
                        class="show-password"
                        id="togglePassword">

                        👁

                    </button>

                </div>

            </div>

            <div class="login-options">

                <label class="remember">

                    <input
                        type="checkbox"
                        name="remember">

                    <span>Запомнить меня</span>

                </label>

                <a href="#">
                    Забыли пароль?
                </a>

            </div>

            <button
                class="login-btn"
                type="submit">

                Войти

            </button>

        </form>

        <div class="divider">

            <span></span>

            <p>или</p>

            <span></span>

        </div>

        <a
            href="../register/"
            class="register-btn">

            Создать аккаунт

        </a>

        <div class="theme-switch">

            <button
                id="themeButton"
                type="button">

                🌙

            </button>

        </div>

    </section>

</main>

<script src="../addictions/js/theme.js"></script>
<script src="../addictions/js/login.js"></script>

</body>
</html>