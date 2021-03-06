<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");

	$APPLICATION["title"] = "Отзывы о нас";

	$APPLICATION["styles"][] = "/src/assets/styles/css/reviews.min.css";

	require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
?>
	<h1 class="main__title">
		Отзывы о нас
	</h1>

	<div class="main__statistic statistic">
		<div class="statistic__wrapper">
			<div class="statistic__rating">
				<div class="statistic__rating-mark">
					<p class="statistic__rating-value">
						4,3
					</p>
					<img src="/site/upload/images/stars.svg" alt="звездочки" class="statistic__rating-stars">
				</div>
				<p class="statistic__rating-text">
					Рейтинг за 3 месяца
				</p>
			</div>
			<div class="statistic__rating">
				<p class="statistic__rating-value">
					4,354 отзывов
				</p>
				<p class="statistic__rating-text">
					Рейтинг за 3 месяца
				</p>
			</div>
		</div>
	</div>
	<div class="main__sort sort">
		<h2 class="sort__heading">Отзывы</h2>
		<ul class="sort__list">
			<li class="sort__text">Сортировать:</li>
			<li class="sort__item">по дате</li>
			<li class="sort__item">по оценке</li>
			<li class="sort__item">по полезности</li>
		</ul>
	</div>
	<ul class="main__reviews reviews">
		<li class="reviews__review reviews__review--first">
			<img src="/site/upload/images/split1.svg" class="reviews__split" id="split-1" alt="">
			<img src="/site/upload/images/split2.svg" class="reviews__split" id="split-2" alt="">
			<img src="/site/upload/images/split1.svg" class="reviews__split" id="split-3" alt="">
			<div class="reviews__review-wrapper reviews__review-wrapper--first">
				<div class="reviews__user">
					<img src="" alt="" class="reviews__userpic">
					<div class="reviews__user-info">
						<p class="reviews__text reviews__text--bold">
							Уважаемый человек
						</p>
						<div class="reviews__user-stats">
							<img src="/site/upload/images/stars.svg" alt="" class="reviews__stars">
							<p class="reviews__text reviews__text--translucent">321 покупка</p>
						</div>
					</div>
				</div>
				<p class="reviews__text reviews__text--bold">Достоинства:</p>
				<p class="reviews__text">Заказ пришёл вовремя</p>
				<p class="reviews__text reviews__text--bold">Недостатки:</p>
				<p class="reviews__text">Оплата онлайн</p>
				<p class="reviews__text reviews__text--bold">Комментарий:</p>
				<p class="reviews__text">Нравится оплата по карте через терминал.
					В последнее время все заказы - оплата онлайн и самовывоз. Поэтому перестала заказывать.
				</p>
				<ul class="reviews__gallery">
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
				</ul>
				<div class="reviews__bottom">
					<p class="reviews__text reviews__text--bold">
						2 ответа
					</p>
					<p class="reviews__text reviews__text--translucent">
						3ч. назад
					</p>
				</div>
			</div>
		</li>
		<li class="reviews__answer">
			<div class="reviews__review-wrapper reviews__review-wrapper--answer">
				<div class="reviews__user">
					<img src="" alt="" class="reviews__userpic">
					<div class="reviews__user-info">
						<p class="reviews__text reviews__text--bold">
							SWEET WORLD
						</p>
						<p class="reviews__text reviews__text--bold reviews__text--translucent">
							1ч. назад
						</p>
					</div>
				</div>
				<p class="reviews__text reviews__text--bold">
					Здравствуйте!
				</p>
				<p class="reviews__text">
					Спасибо, что написали нам!
				</p>
				<p class="reviews__text">
					Если вкусно остальное не важно! Ценим обратную связь и рады,
					что покупать вам понравилось.
					Пусть новые покупки будут приятными, а день — хорошим!
				</p>
				<p class="reviews__text">
					С уважением, Савватий
				</p>
				<p class="reviews__text reviews__text--translucent">
					Старший специалист
				</p>
			</div>
		</li>
		<li class="reviews__review" id="post-3">
			<div class="reviews__review-wrapper">
				<div class="reviews__user">
					<img src="" alt="" class="reviews__userpic">
					<div class="reviews__user-info">
						<p class="reviews__text reviews__text--bold">
							Уважаемый человек
						</p>
						<div class="reviews__user-stats">
							<img src="../site/upload/images/stars.svg" alt="" class="reviews__stars">
							<p class="reviews__text reviews__text--translucent">321 покупка</p>
						</div>
					</div>
				</div>
				<p class="reviews__text reviews__text--bold">Достоинства:</p>
				<p class="reviews__text">Заказ пришёл вовремя</p>
				<p class="reviews__text reviews__text--bold">Недостатки:</p>
				<p class="reviews__text">Оплата онлайн</p>
				<p class="reviews__text reviews__text--bold">Комментарий:</p>
				<p class="reviews__text">Нравится оплата по карте через терминал.
					В последнее время все заказы - оплата онлайн и самовывоз. Поэтому перестала заказывать.
				</p>
				<ul class="reviews__gallery">
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
				</ul>
				<div class="reviews__bottom">
					<p class="reviews__text reviews__text--bold">
						2 ответа
					</p>
					<p class="reviews__text reviews__text--translucent">
						3ч. назад
					</p>
				</div>
			</div>
		</li>
		<li class="reviews__review" id="post-4">
			<img src="/site/upload/images/split1.svg" class="reviews__split" id="split-1" alt="">
			<img src="/site/upload/images/split2.svg" class="reviews__split" id="split-2" alt="">
			<img src="/site/upload/images/split1.svg" class="reviews__split" id="split-3" alt="">
			<div class="reviews__review-wrapper">
				<div class="reviews__user">
					<img src="" alt="" class="reviews__userpic">
					<div class="reviews__user-info">
						<p class="reviews__text reviews__text--bold">
							Уважаемый человек
						</p>
						<div class="reviews__user-stats">
							<img src="/site/upload/images/stars.svg" alt="" class="reviews__stars">
							<p class="reviews__text reviews__text--translucent">321 покупка</p>
						</div>
					</div>
				</div>
				<p class="reviews__text reviews__text--bold">Достоинства:</p>
				<p class="reviews__text">Заказ пришёл вовремя</p>
				<p class="reviews__text reviews__text--bold">Недостатки:</p>
				<p class="reviews__text">Оплата онлайн</p>
				<p class="reviews__text reviews__text--bold">Комментарий:</p>
				<p class="reviews__text">Нравится оплата по карте через терминал.
					В последнее время все заказы - оплата онлайн и самовывоз. Поэтому перестала заказывать.
				</p>
				<ul class="reviews__gallery">
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
				</ul>
				<div class="reviews__bottom">
					<p class="reviews__text reviews__text--bold">
						2 ответа
					</p>
					<p class="reviews__text reviews__text--translucent">
						3ч. назад
					</p>
				</div>
			</div>
		</li>
		<li class="reviews__answer" id="post-5">
			<div class="reviews__review-wrapper reviews__review-wrapper--answer">
				<div class="reviews__user">
					<img src="" alt="" class="reviews__userpic">
					<div class="reviews__user-info">
						<p class="reviews__text reviews__text--bold">
							SWEET WORLD
						</p>
						<p class="reviews__text reviews__text--bold reviews__text--translucent">
							1ч. назад
						</p>
					</div>
				</div>
				<p class="reviews__text reviews__text--bold">
					Здравствуйте!
				</p>
				<p class="reviews__text">
					Спасибо, что написали нам!
				</p>
				<p class="reviews__text">
					Если вкусно остальное не важно! Ценим обратную связь и рады,
					что покупать вам понравилось.
					Пусть новые покупки будут приятными, а день — хорошим!
				</p>
				<p class="reviews__text">
					С уважением, Савватий
				</p>
				<p class="reviews__text reviews__text--translucent">
					Старший специалист
				</p>
			</div>
		</li>
		<li class="reviews__review" id="post-6">
			<div class="reviews__review-wrapper">
				<div class="reviews__user">
					<img src="" alt="" class="reviews__userpic">
					<div class="reviews__user-info">
						<p class="reviews__text reviews__text--bold">
							Уважаемый человек
						</p>
						<div class="reviews__user-stats">
							<img src="../site/upload/images/stars.svg" alt="" class="reviews__stars">
							<p class="reviews__text reviews__text--translucent">321 покупка</p>
						</div>
					</div>
				</div>
				<p class="reviews__text reviews__text--bold">Достоинства:</p>
				<p class="reviews__text">Заказ пришёл вовремя</p>
				<p class="reviews__text reviews__text--bold">Недостатки:</p>
				<p class="reviews__text">Оплата онлайн</p>
				<p class="reviews__text reviews__text--bold">Комментарий:</p>
				<p class="reviews__text">Нравится оплата по карте через терминал.
					В последнее время все заказы - оплата онлайн и самовывоз. Поэтому перестала заказывать.
				</p>
				<ul class="reviews__gallery">
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
					<li class="reviews__item"><img src="" class="reviews__image" alt=""></li>
				</ul>
				<div class="reviews__bottom">
					<p class="reviews__text reviews__text--bold">
						2 ответа
					</p>
					<p class="reviews__text reviews__text--translucent">
						3ч. назад
					</p>
				</div>
			</div>
		</li>
	</ul>
</main>

		<footer id="page-footer">
			<div class="container-1440">
				<p>&copy; <?=date("Y")?> Sweet World, интернет-магазин сладостей</p>
			</div>
		</footer>

	</body>
</html>
