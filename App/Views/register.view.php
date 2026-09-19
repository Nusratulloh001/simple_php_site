<?php

require __DIR__ . "/Components/header.php" ?>
    <main>
        <h1>Регистрация нового пользователя</h1>

        <?php foreach ($errors as $error) : ?>
            <p style="color: red;"><?= $error ?>!</p>
        <?php endforeach; ?>

        <form action="/register" method="POST">
            <div>
                <label for="username">Имя пользователя:</label><br>
                <input type="text" id="username" name="username" value="<?= $_POST['username'] ?? '' ?>">
            </div>
            <br>
            <div>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" value="<?= $_POST['email'] ?? '' ?>">
            </div>
            <br>
            <div>
                <label for="password">Пароль:</label><br>
                <input type="password" id="password" name="password" value="<?= $_POST['password'] ?? '' ?>">
            </div>
            <br>
            <div>
                <label for="password_confirm">Подтверждение пароля:</label><br>
                <input type="password" id="password_confirm" name="password_confirm" value="<?= $_POST['password_confirm'] ?? '' ?>">
            </div>
            <br>
            <div>
                <label for="role">Ваш роль:</label><br>
                <select name="role" id="role">
                    <option value="user">Пользователь</option>
                    <option value="admin">Администратор</option>
                </select>
            </div>
            <br>
            <button type="submit">Зарегистрироваться</button>
        </form>
        <p>Уже зарегистрированы? <a href="/login">Войти</a></p>
    </main>
<?php require __DIR__ . "/Components/footer.php" ?>