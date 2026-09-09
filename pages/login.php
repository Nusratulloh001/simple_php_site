<?php

require_once __DIR__ . "/includes/session.php";

$pageTitle = "Вход - Портфолио";
$error = null;


if (!isLoggedIn('user')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $login = trim($_POST['login']) ?? '';
    $password = trim($_POST['password']) ?? '';

    if ($login === 'admin' && $password === "secret") {
        $_SESSION['user'] = [
            'userName' => "Nusrat",
            'email' => 'admin@example.com',
            'role' => 'Administrator'
        ];
        unset($_POST);
        header("Location: /pages/profile.php");
        exit;
    } else {
        $error = 'Неверный логин или пароль!';
    }
}
}



require __DIR__ . "/includes/header.php" ?>
    <main>
        <h1>Вход в систему</h1>

        <?php if ($error) : ?>
            <p style="color: red"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        
        <form action="/pages/login.php" method="POST">
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
        <p>Ещё нет аккаунта? <a href="/pages/register.php">Зарегистрироваться</a></p>
    </main>
<?php require __DIR__ . "/includes/footer.php" ?>