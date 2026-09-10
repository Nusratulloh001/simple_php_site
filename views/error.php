<?php

$pageTitle = "Error - Портфолио";

require __DIR__ . "/includes/header.php" ;
?>
    <h1>404 - Not Found</h1>
    <p>К сожалению, запрашиваемая страница <code><?= htmlspecialchars($_SERVER['REQUEST_URI'] ?? '') ?></code> не существует.</p>
    <p><a href="/">Вернуться на главную</a></p>
<?php require __DIR__ . "/includes/footer.php" ?>