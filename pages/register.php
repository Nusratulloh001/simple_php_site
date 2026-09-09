<?php

require __DIR__ . "/includes/session.php";

$pageTitle = "Регистрация - Портфолио";

require __DIR__ . "/includes/header.php" ?>
    <main>
        <h1>Регистрация нового пользователя</h1>
        <form action="register.php" method="POST">
            <div>
                <label for="username">Имя пользователя:</label><br>
                <input type="text" id="username" name="username" required>
            </div>
            <br>
            <div>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required>
            </div>
            <br>
            <div>
                <label for="password">Пароль:</label><br>
                <input type="password" id="password" name="password" required>
            </div>
            <br>
            <div>
                <label for="password_confirm">Подтверждение пароля:</label><br>
                <input type="password" id="password_confirm" name="password_confirm" required>
            </div>
            <br>
            <button type="submit">Зарегистрироваться</button>
        </form>
        <p>Уже зарегистрированы? <a href="/pages/login.php">Войти</a></p>
    </main>
<?php require __DIR__ . "/includes/footer.php" ?>