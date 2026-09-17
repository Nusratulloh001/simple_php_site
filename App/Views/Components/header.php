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
            
                <!-- PHP code. if (inSession()) -->
            
                <a href="/login">Вход</a> |
                <a href="/register">Регистрация</a> |

                <!-- PHP code -->

                <a href="/logout">Выход</a> |
                <a href="/profile">Профиль</a>
                
                <!-- PHP code  -->

                <a href="/poligon">Полигин</a>
        </nav>
    </header>