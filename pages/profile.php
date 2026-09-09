<?php
require __DIR__ . "/includes/session.php";

$pageTitle = "Профиль - Портфолио";
$user = $_SESSION['user'];

if (!isLoggedIn('user')) {
    header('Location: /pages/login.php');
    exit;
}

require __DIR__ . "/includes/header.php" ?>
    <main>
        <h1>Профиль пользователя</h1>
        <section>
            <p><strong>Имя пользователя:</strong> <?= htmlspecialchars($user['userName']) ?? 'Developer' ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?? 'dev@example.com' ?></p>
            <p><strong>Роль:</strong> <?= htmlspecialchars($user['role']) ?? 'Администратор' ?></p>
        </section>

        <hr>

        <section>
            <h3>Управление аккаунтом</h3>
            <button type="button">Сменить пароль</button>
            <button type="button">Редактировать данные</button>
        </section>
    </main>
<?php require __DIR__ . "/includes/footer.php" ?>