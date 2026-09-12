<?php

require __DIR__ . "/../classes/DB.php";

$email = '';
$password = '';
$errors = [] ;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Не валидный email";
        }
        if (empty($email)) {
            $errors[] = 'Поля email не должно быт пустым';
        }
        if (empty($password)) {
            $errors[] = 'Поля пароля не должно быт пустым';
        }
        if (mb_strlen($password) > 0 && mb_strlen($password) < 6) {
            $errors[] = 'Парол дольжен содержать не менее 6 символов';
        }
    }
}


?>
<?php if (count($errors) > 0) : ?>
    <?php foreach ($errors as $error) : ?>
        <p style="margin-top: 20px; color: red;"><?= $error ?></p>
    <?php endforeach; ?>
<?php else : ?>
    <p style="color: green;">Successfuly</p>
<?php endif; ?>
<div style="margin-top: 20px;">
    <form action="/poligon" method="POST">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $email ?>">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="<?= $password ?>">
        <button>Send</button>
    </form>
</div>