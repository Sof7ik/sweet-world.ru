<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");

$APPLICATION["title"] = "Как с нами связаться";

$APPLICATION["styles"][] = "/src/assets/styles/css/contacts.min.css";

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
?>

<div class="container-1440">
	<h1 class="heading-1 main__heading">Наши контакты</h1>
	<div class="main__contacts contacts">
		<img src="/site/upload/images/map.jpg" alt="" class="contacts__map">
		<div class="contacts__information">
			<div class="contacts__contact">
				<img src="/site/upload/icons/friends.svg" alt="" class="contacts__icon">
				<p class="contacts__text">Неустроева Ольга</p>
			</div>
			<div class="contacts__contact">
				<img src="/site/upload/icons/marker.svg" alt="" class="contacts__icon">
				<p class="contacts__text">Ул. Большая Семеновская 25</p>
			</div>
			<div class="contacts__contact">
				<img src="/site/upload/icons/phone.svg" alt="" class="contacts__icon">
				<p class="contacts__text">+7 XXX XX-XX-XX</p>
			</div>
			<p class="contacts__text">Узнавайте о новинках сладкого мира раньше всех:</p>
			<div class="contacts__contact">
				<img src="/site/upload/icons/telegram.svg" alt="" class="contacts__icon">
				<a href="#" class="contacts__text">SWEET WORLD</a>
			</div>
			<div class="contacts__contact">
				<img src="/site/upload/icons/vk.svg" alt="" class="contacts__icon">
				<a href="#" class="contacts__text">SWEET WORLD</a>
			</div>
		</div>
	</div>
	<p class="contacts__text contacts__text--under">Обратиться со своими пожеланиями и вопросами вы можете через форму:</p>
	<form action="" class="main__call-back call-back">
		<div class="call-back__personal">
			<div class="call-back__input">
				<label class="call-back__label" for="name">Имя:</label>
				<input class="call-back__field" type="text" id="name">
			</div>
			<div class="call-back__input">
				<label class="call-back__label" for="mail">E-mail:</label>
				<input class="call-back__field" type="email" id="mail" name="email" autocomplete="email">
			</div>
		</div>
		<div class="call-back__input--message">
			<label class="call-back__label" for="">Ваше сообщение:</label>
			<input type="text" class="call-back__field call-back__field--message">
		</div>
		<button class="call-back__button">Отправить</button>
	</form>
</div>
<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/footer.php");
?>