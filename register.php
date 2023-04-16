<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
    <header>
		<nav>
			<ul>
				<li><a href='courses.html'>Курсы</a></li>
				<li><a href='index.html'>Главная</a></li>
				<li><a href='reg.html' class='active-link'>Аккаунт</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<div class='wrapper'>
			<h1 class='center-h1'>Пройдите регистрацию<br>для полного доступа к сайту.</h1>
			<ul class='reg-ul'>
				<input type='text' placeholder='Логин' class='center-in'>
				<input type='text' placeholder='Пароль' class='center-in'>
				<li><button class='center-btn'>Регистрация</button></li>
			</ul>
			<p class='pol'>Создавая аккаунт, Вы подписываете <a href='#'>пользовательское соглашение</a>.</p>
		</div>
	</main>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>