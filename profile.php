<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <!-- Профиль -->

    <form>
        <img src="<?= $_SESSION['user'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

</body>
</html>