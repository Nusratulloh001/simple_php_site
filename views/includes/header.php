<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/sources/css/style.css">
    <title><?php echo $pageTitle ?? 'Портфолио' ?></title>
</head>
<body>
    <header>
        <nav>
            <a href="/">Главная</a> |
            <a href="/about">О нас</a> |
            <?php if (!isset($_SESSION['user'])) : ?>
                <a href="/login">Вход</a> |
                <a href="/register">Регистрация</a> |
            <?php else: ?>
                <a href="/logout">Выход</a> |
                <a href="/profile">Профиль</a>
            <?php endif; ?>
                <a href="/poligon">Полигин</a>
        </nav>
    </header>