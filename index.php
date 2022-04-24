<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");

$APPLICATION["title"] = "Главная страница";

$APPLICATION["styles"][] = "/src/assets/styles/css/mainpage.min.css";

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");

$catalog = [
	[
		"ID" => 1,
		"name" => "Пончик с шоколадной глазурью",
		"desc" => "Пончик с шоколадной начинкой очень вкусный, купите его, пожалуйста",
		"avatar" => "/site/upload/images/catalog/donut-1.png",
		"price" => "132"
	],
	[
		"ID" => 2,
		"name" => "Пончик с цветной посыпкой",
		"desc" => "Пончик с цветной посыпкой очень вкусный, купите его, пожалуйста",
		"avatar" => "",
		"price" => "131"
	],
	[
		"ID" => 3,
		"name" => "Конфеты Рот Фронт \"Батончики\"",
		"desc" => "Самые известные конфеты, которые Вы могли встретить на полках магазинов",
		"avatar" => "/site/upload/images/catalog/batonchik-1.jpg",
		"price" => "110"
	],
	[
		"ID" => 4,
		"name" => "Конфеты \"Эли\"",
		"desc" => "",
		"avatar" => "/site/upload/images/catalog/ela.jpg",
		"price" => "439"
	],
	[
		"ID" => 5,
		"name" => "Конфеты лимонные вкусные",
		"desc" => "Лимонные конфеты из детства, очень вкусно",
		"avatar" => "/site/upload/images/catalog/lastochka-1.jpg",
		"price" => "1399"
	],
	[
		"ID" => 6,
		"name" => "Конфеты ириски",
		"desc" => "Зубы сломаешь, вкусные конфеты",
		"avatar" => "/site/upload/images/catalog/iriski.jpg",
		"price" => "1000"
	],
	[
		"ID" => 4,
		"name" => "Конфеты \"Эли\"",
		"desc" => "",
		"avatar" => "/site/upload/images/catalog/ela.jpg",
		"price" => "439"
	],
	[
		"ID" => 5,
		"name" => "Конфеты лимонные вкусные",
		"desc" => "Лимонные конфеты из детства, очень вкусно",
		"avatar" => "/site/upload/images/catalog/lastochka-1.jpg",
		"price" => "1399"
	],
	[
		"ID" => 6,
		"name" => "Конфеты ириски",
		"desc" => "Зубы сломаешь, вкусные конфеты",
		"avatar" => "/site/upload/images/catalog/iriski.jpg",
		"price" => "1000"
	],];

$reviews = [
	[
		"author" => "Миронов Александр",
		"text" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit voluptates esse rem asperiores nostrum. Tempora doloribus eveniet quod, corporis hic, nobis similique amet soluta at quam nam autem repellat quasi!"
	],
	[
		"author" => "Дмитрий Александрович",
		"text" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit voluptates esse rem asperiores nostrum. Tempora doloribus eveniet quod, corporis hic, nobis similique amet soluta at quam nam autem repellat quasi! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam maiores, in ducimus voluptates qui corporis, cupiditate optio nulla molestiae inventore cum. Nihil velit reprehenderit maiores veniam consequuntur inventore autem ipsam!
		Necessitatibus, quaerat optio! Doloribus nihil voluptatibus impedit error atque blanditiis officia quaerat modi facere odio ratione, quasi, vel sunt, quisquam repudiandae. Iure architecto pariatur iusto obcaecati excepturi quaerat provident laborum."
	]

];

$partners = [
	[
		"img" => "/site/upload/images/partners/cow.png",
		"name" => "Коровка",
	],
	[
		"img" => "/site/upload/images/partners/babaevskiy.png",
		"name" => "Шоколад Бабаевский",
	],
	[
		"img" => "/site/upload/images/partners/vdohnoveniye.jpg",
		"name" => "Шоколад \"Вдохновение\"",
	],
	[
		"img" => "/site/upload/images/partners/alenka.png",
		"name" => "Алёнка",
	],
	[
		"img" => "/site/upload/images/partners/uzhural.png",
		"name" => "ЮжУралКондитер",
	],
	[
		"img" => "/site/upload/images/partners/dia-vesta.png",
		"name" => "Диа Веста",
	],
	[
		"img" => "/site/upload/images/partners/eco-botanika.png",
		"name" => "Эко ботаника",
	],
	[
		"img" => "/site/upload/images/partners/RotFront.png",
		"name" => "Рот Фронт",
	],
	[
		"img" => "/site/upload/images/partners/red-october.png",
		"name" => "Красный октябрь",
	],
	[
		"img" => "/site/upload/images/partners/krasnaya-polyana.png",
		"name" => "Красная поляна",
	],
	[
		"img" => "/site/upload/images/partners/ermolino.jpg",
		"name" => "Ермолино",
	],
	[
		"img" => "/site/upload/images/partners/sormovo.png",
		"name" => "Сормово",
	],
];
?>

<section class="mainpage-top-slider-wrapper">
	<div class="swiper mainpage-top-slider">
			<div class="swiper-wrapper">
				<div class="swiper-slide action-item"
						style='background-image: url("/site/upload/images/mainpage-slider/baanner image.png");'>

					<div class="inner-slider-content">
						<p class="banner-action__name">
							Акция! 3 по цене 2-ух!<br>
							Успейте по конца недели!
						</p>

						<a href="/src/action/?ID=1" class="btn banner-action__read-action">Подробнее</a>
					</div>
				</div>

				<div class="swiper-slide action-item"
						style="background-image: url('/site/upload/images/mainpage-slider/banner-choco.png');">
					<div class="inner-slider-content">
						<p class="banner-action__name">
							Акция! 3 по цене 2-ух!<br>
							Успейте по конца недели!
						</p>

						<a href="/src/action/?ID=1" class="btn banner-action__read-action">Подробнее</a>
					</div>
				</div>

				<div class="swiper-slide action-item"
						style="background-image: url('/site/upload/images/mainpage-slider/banner-snakes.png');">
					<div class="inner-slider-content">
						<p class="banner-action__name">
							Акция! 3 по цене 2-ух!<br>
							Успейте по конца недели!
						</p>

						<a href="/src/action/?ID=1" class="btn banner-action__read-action">Подробнее</a>
					</div>
				</div>

				<div class="swiper-slide action-item"
						style="background-image: url('/site/upload/images/mainpage-slider/banner-pecenki.png');">
					<div class="inner-slider-content">
						<p class="banner-action__name">
							Акция! 3 по цене 2-ух!<br>
							Успейте по конца недели!
						</p>

						<a href="/src/action/?ID=1" class="btn banner-action__read-action">Подробнее</a>
					</div>
				</div>
			</div>

			<div class="swiper-pagination mainpage-top-slider__pagination"></div>
		</div>
</section>

<section class="page-section mainpage-catalog">
	<div class="container-1440">
		<h2 class="heading-2 mainpage-catalog__title">Каталог сладостей</h2>

		<div class="mainpage-catalog__filter">
			<a href="" class="mainpage-catalog__filter-button">Новинки</a>
			<a href="" class="mainpage-catalog__filter-button">Акции</a>
			<a href="" class="mainpage-catalog__filter-button">Популярное</a>
		</div>

		<div class="mainpage-catalog__items-wrapper">
			<?php foreach ($catalog as $item) {?>
				<div class="mainpage-catalog__item">
					<div class="mainpage-catalog__item-avatar" style="background-image: url('<?=$item["avatar"]?>')">
						<a href="" class="mainpage-catalog__item-detail-link">Подробнее</a>

						<div class="cart-buttons">
							<button data-add-to-cart="" class="mainpage-catalog__item-add-button mainpage-catalog__item-to-cart">
								<svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M214.502 163.137H76.0948L83.0442 148.982L198.511 148.773C202.416 148.773 205.763 145.984 206.46 142.126L222.451 52.6203C222.869 50.2729 222.242 47.8557 220.708 46.0195C219.95 45.1159 219.004 44.388 217.936 43.8863C216.869 43.3846 215.705 43.1212 214.525 43.1143L67.6347 42.6262L66.3796 36.7227C65.5894 32.9574 62.196 30.2148 58.3378 30.2148H22.4286C20.2526 30.2148 18.1658 31.0792 16.6272 32.6179C15.0885 34.1565 14.2241 36.2434 14.2241 38.4193C14.2241 40.5953 15.0885 42.6821 16.6272 44.2208C18.1658 45.7594 20.2526 46.6238 22.4286 46.6238H51.6905L57.1757 72.7016L70.6794 138.082L53.2942 166.461C52.3914 167.679 51.8476 169.126 51.7244 170.638C51.6012 172.149 51.9034 173.665 52.597 175.014C53.9915 177.78 56.8038 179.523 59.9183 179.523H74.5144C71.4027 183.656 69.7219 188.69 69.7265 193.863C69.7265 207.018 80.4179 217.71 93.5729 217.71C106.728 217.71 117.419 207.018 117.419 193.863C117.419 188.68 115.7 183.637 112.632 179.523H150.075C146.963 183.656 145.282 188.69 145.287 193.863C145.287 207.018 155.978 217.71 169.133 217.71C182.288 217.71 192.98 207.018 192.98 193.863C192.98 188.68 191.26 183.637 188.192 179.523H214.525C219.034 179.523 222.73 175.85 222.73 171.318C222.716 169.144 221.844 167.064 220.302 165.532C218.761 163.999 216.676 163.138 214.502 163.137V163.137ZM71.0513 58.8027L204.88 59.2443L191.771 132.643L86.6468 132.829L71.0513 58.8027ZM93.5729 201.208C89.5288 201.208 86.2284 197.907 86.2284 193.863C86.2284 189.819 89.5288 186.519 93.5729 186.519C97.6171 186.519 100.917 189.819 100.917 193.863C100.917 195.811 100.144 197.679 98.7663 199.056C97.3889 200.434 95.5208 201.208 93.5729 201.208V201.208ZM169.133 201.208C165.089 201.208 161.789 197.907 161.789 193.863C161.789 189.819 165.089 186.519 169.133 186.519C173.177 186.519 176.478 189.819 176.478 193.863C176.478 195.811 175.704 197.679 174.327 199.056C172.949 200.434 171.081 201.208 169.133 201.208V201.208Z" fill="black"/>
								</svg>
							</button>
							<button data-add-to-liked="" class="mainpage-catalog__item-add-button mainpage-catalog__item-to-liked">
								<svg width="250" height="250" viewBox="0 0 250 250" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M225.342 69.2382C222.069 61.661 217.351 54.7946 211.45 49.0234C205.545 43.2349 198.583 38.635 190.942 35.4736C183.019 32.1824 174.522 30.4978 165.942 30.5175C153.906 30.5175 142.163 33.8134 131.958 40.039C129.517 41.5282 127.197 43.164 125 44.9462C122.803 43.164 120.483 41.5282 118.042 40.039C107.837 33.8134 96.0937 30.5175 84.0576 30.5175C75.3906 30.5175 66.9922 32.1777 59.0576 35.4736C51.3916 38.6474 44.4824 43.2128 38.5498 49.0234C32.6415 54.7881 27.9218 61.6561 24.6582 69.2382C21.2646 77.1239 19.5312 85.498 19.5312 94.1161C19.5312 102.246 21.1914 110.718 24.4873 119.336C27.2461 126.538 31.2012 134.009 36.2549 141.553C44.2627 153.491 55.2734 165.942 68.9453 178.564C91.6016 199.487 114.038 213.94 114.99 214.526L120.776 218.237C123.34 219.873 126.636 219.873 129.199 218.237L134.985 214.526C135.938 213.916 158.35 199.487 181.03 178.564C194.702 165.942 205.713 153.491 213.721 141.553C218.774 134.009 222.754 126.538 225.488 119.336C228.784 110.718 230.444 102.246 230.444 94.1161C230.469 85.498 228.735 77.1239 225.342 69.2382V69.2382ZM125 198.926C125 198.926 38.0859 143.237 38.0859 94.1161C38.0859 69.2382 58.667 49.0722 84.0576 49.0722C101.904 49.0722 117.383 59.0331 125 73.5839C132.617 59.0331 148.096 49.0722 165.942 49.0722C191.333 49.0722 211.914 69.2382 211.914 94.1161C211.914 143.237 125 198.926 125 198.926Z" fill="black"/>
									</svg>
							</button>
						</div>
					</div>

					<div class="mainpage-catalog__item-text">
						<p class="mainpage-catalog__item-price"><?=$item["price"]?> &#8381;</p>
						<p class="mainpage-catalog__item-name"><?=$item["name"]?></p>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</section>

<div class="page-section advantages-wrapper yellow-wrapper">
	<div class="container-1440">
		<section class="our-advantages">
			<h2 class="heading-2 backgrounded-title advantages-title">Наши преимущества</h2>

			<div class="advantages-list">
				<div class="advantages-list__advantage-item">
					<p class="advantage-item__number">
						1
					</p>

					<p class="advantage-item__text">
						Постоянные скидки, акции и новые предложения
					</p>
				</div>

				<div class="advantages-list__advantage-item">
					<p class="advantage-item__number">
						2
					</p>

					<p class="advantage-item__text">
						Огромный ассортимент, подобранный специально под Ваши предпочтения
					</p>
				</div>

				<div class="advantages-list__advantage-item">
					<p class="advantage-item__number">
						3
					</p>

					<p class="advantage-item__text">
						Круглосуточно готовы ответить на ваши вопросы и помочь Вам выбрать то, что Вы хотите
					</p>
				</div>
			</div>
		</section>

		<section class="page-section about-us">
			<h2 class="heading-2 backgrounded-title about-us-title">О нас</h2>

			<div class="about-us__content">
				<p class="about-us__text">
					Сидя в компании друзей или семьи вам резко захотелось скрасить вечер сладким? Завтра идти на день рождения, а вы не успели купить подарок? Без повода хотите порадовать своих близких? Мы с радостью готовы Вам помочь!<br><br>
					Попробуйте сладости с быстрой доставкой из нашего магазина, насладитесь волной вкусов и почувствуйте кусочек дружной атмосферы нашего коллектива!
				</p>

				<!-- <div class="about-us__image"
					style="background-image: url('/site/upload/images/about-us/mainpage-about-us.jpg')"></div> -->

				<img class="about-us__image" src="/site/upload/images/about-us/mainpage-about-us.jpg" alt="кондитер">
			</div>
		</section>

		<section class="page-section reviews">
			<h2 class="heading-2 backgrounded-title reviews-title">Отзывы</h2>

			<div class="mainpage-reviews-list">
				<?php for($i=0; $i<8; $i++) {
					$k = ($i % 2 == 0) ? 0 : 1;
					?>
					<div class="mainpage-reviews__review">
						<p class="review-item__name"><?=$reviews[$k]["author"]?></p>

						<div class="review-item__text-wrapper">
							<p class=review-item__text><?=$reviews[$k]["text"]?></p>
						</div>
					</div>
				<?php }?>
			</div>

			<a href="/src/otzivy/index-1.php" class="btn watch-all-reviews">Читать все отзывы</a>
		</section>
	</div>
</div>

<section class="page-section mainpage-contacts">
	<div class="container-1440">
		<h2 class="heading-2 mainpage-contacts-title">Контакты</h2>

		<div class="mainpage-contacts__content">
			<div class="mainpage-contacts__map-wrapper">
				<img src="/site/upload/images/map.jpg" alt="карта">
			</div>

			<div class="mainpage-contacts__contacts-text">
				<address class="contacts-text__item address"><?=$APPLICATION["location"]?></address>
				<a href="tel:<?=$APPLICATION["phone_number"]?>" class="contacts-text__item phone-number">
					<?=$APPLICATION["phone_number"]?>
				</a>

				<a href="https://maps.yandex.ru" target="_blank" class="btn iconed contacts-ymaps-btn">
					<svg width="127" height="127" viewBox="0 0 127 127" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M86.8365 7.9375H70.9615C55.0865 7.9375 38.9337 19.8438 38.9337 46.1169C38.6018 52.2067 39.961 58.2696 42.8608 63.6349C45.7605 69.0002 50.088 73.4588 55.3644 76.5175L35.719 111.641C35.2688 112.404 35.0312 113.275 35.0312 114.161C35.0312 115.048 35.2688 115.918 35.719 116.681C36.1264 117.38 36.7038 117.965 37.3976 118.382C38.0915 118.798 38.8792 119.032 39.6878 119.063H49.57C50.5726 119.111 51.5663 118.852 52.4175 118.32C53.2688 117.788 53.937 117.009 54.3325 116.086L72.5491 80.3672H73.8984V114.578C73.9029 115.189 74.0313 115.793 74.2758 116.354C74.5203 116.914 74.8759 117.419 75.321 117.838C75.7661 118.257 76.2915 118.582 76.8656 118.792C77.4396 119.003 78.0504 119.095 78.6609 119.063H87.3128C88.4787 119.106 89.6149 118.689 90.4762 117.902C91.3375 117.115 91.8548 116.021 91.9165 114.856V12.7794C91.9324 12.1591 91.8258 11.5418 91.603 10.9627C91.3802 10.3837 91.0454 9.85419 90.6179 9.40454C90.1904 8.95489 89.6784 8.59389 89.1113 8.34217C88.5442 8.09045 87.9331 7.95294 87.3128 7.9375H86.8365ZM74.2159 64.6113H71.8744C62.7462 64.6113 57.3487 57.1897 57.3487 44.7675C57.3487 29.2894 64.2147 23.7728 70.6044 23.7728H74.335L74.2159 64.6113Z" fill="#D61E3B"/>
					</svg>
					<span>Открыть на большой карте</span>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="page-section partners">
	<div class="container-1440">
		<h2 class="heading-2 partners-title">Партнёры</h2>

		<div class="mainpage-partners-list">
			<?php foreach($partners as $partner) {?>
				<div class="mainpage-partners-list__partner-item">
					<img src="<?=$partner["img"]?>" alt="<?=$partner["name"]?>">
				</div>
			<?php }?>
		</div>
	</div>
</section>

<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . "/src/footer.php");
?>