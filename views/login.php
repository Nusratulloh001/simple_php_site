<?php

require __DIR__ . "/includes/header.php";

?>
    <main>
        <h1>Вход в систему</h1>

        <?php if ($error) : ?>
            <p style="color: red"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        
        <form action="/login" method="POST">
            <div>
                <label for="email">Email или Логин:</label><br>
                <input type="text" id="email" name="login" value="<?= $_POST['login'] ?? '' ?>">
            </div>
            <br>
            <div>
                <label for="password">Пароль:</label><br>
                <input type="password" id="password" name="password" value="<?= $_POST['password'] ?? '' ?>">
            </div>
            <br>
            <button type="submit">Войти</button>
        </form>
        <p>Ещё нет аккаунта? <a href="/register">Зарегистрироваться</a></p>
    </main>
<?php require __DIR__ . "/includes/footer.php" ?>