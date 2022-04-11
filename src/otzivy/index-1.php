<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");

	$APPLICATION["title"] = "Отзывы о нас";

	$APPLICATION["styles"][] = "/src/assets/styles/css/reviews-1.css";
	$APPLICATION["scripts"][] = "/src/assets/js/reviews.js";

	require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
?>

	<div class="container-1440">
		<h1 class="heading-1 main__title">
			Отзывы о нас
		</h1>

		<section class="reviews-total-stat-wrapper">
			<section class="statistic-reviews-wrapper">
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
					<li class="reviews__review reviews__review--first has-answer">
<!--						<img src="/site/upload/images/split1.svg" class="reviews__split" id="split-1" alt="">-->
<!--						<img src="/site/upload/images/split2.svg" class="reviews__split" id="split-2" alt="">-->
<!--						<img src="/site/upload/images/split1.svg" class="reviews__split" id="split-3" alt="">-->
						<div class="reviews__review-wrapper reviews__review-wrapper--first">
							<div class="reviews__user">
								<img src="" alt="" class="reviews__userpic">

								<div class="reviews__user-info">
									<p class="reviews__user-name reviews__text--bold">
										Уважаемый человек
									</p>
									<div class="reviews__user-stats">
										<img src="/site/upload/images/stars.svg" alt="" class="reviews__stars">
										<p class="reviews__user-bought reviews__text--translucent">321 покупка</p>
									</div>
								</div>
							</div>
							<p class="reviews__text">
								<span class="reviews__text--bold">Достоинства:</span>
								Заказ пришёл вовремя
							</p>

							<p class="reviews__text">
								<span class="reviews__text--bold">Недостатки:</span>
								Оплата онлайн
							</p>

							<p class="reviews__text ">
								<span class="reviews__text--bold">Комментарий:</span>
								Нравится оплата по карте через терминал.
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
									<p class="reviews__user-name reviews__text--bold">
										SWEET WORLD
									</p>
									<p class="reviews__answer-ago reviews__text--bold reviews__text--translucent">
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

							<div class="reviews__answer-regards">
								<p class="answer-regards__text reviews__text--bold">
									С уважением, Савватий
									<br>
									Старший специалист...
								</p>
							</div>
						</div>
					</li>

					<li class="reviews__review">
						<!--						<img src="/site/upload/images/split1.svg" class="reviews__split" id="split-1" alt="">-->
						<!--						<img src="/site/upload/images/split2.svg" class="reviews__split" id="split-2" alt="">-->
						<!--						<img src="/site/upload/images/split1.svg" class="reviews__split" id="split-3" alt="">-->
						<div class="reviews__review-wrapper">
							<div class="reviews__user">
								<img src="" alt="" class="reviews__userpic">

								<div class="reviews__user-info">
									<p class="reviews__user-name reviews__text--bold">
										Уважаемый человек
									</p>
									<div class="reviews__user-stats">
										<img src="/site/upload/images/stars.svg" alt="" class="reviews__stars">
										<p class="reviews__user-bought reviews__text--translucent">321 покупка</p>
									</div>
								</div>
							</div>

							<p class="reviews__text">
								<span class="reviews__text--bold">Достоинства:</span>
								Заказ пришёл вовремя
							</p>

							<p class="reviews__text">
								<span class="reviews__text--bold">Недостатки:</span>
								Оплата онлайн
							</p>

							<p class="reviews__text ">
								<span class="reviews__text--bold">Комментарий:</span>
								Нравится оплата по карте через терминал.
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

					<li class="reviews__review has-answer">
						<!--						<img src="/site/upload/images/split1.svg" class="reviews__split" id="split-1" alt="">-->
						<!--						<img src="/site/upload/images/split2.svg" class="reviews__split" id="split-2" alt="">-->
						<!--						<img src="/site/upload/images/split1.svg" class="reviews__split" id="split-3" alt="">-->
						<div class="reviews__review-wrapper">
							<div class="reviews__user">
								<img src="" alt="" class="reviews__userpic">

								<div class="reviews__user-info">
									<p class="reviews__user-name reviews__text--bold">
										Уважаемый человек
									</p>
									<div class="reviews__user-stats">
										<img src="/site/upload/images/stars.svg" alt="" class="reviews__stars">
										<p class="reviews__user-bought reviews__text--translucent">321 покупка</p>
									</div>
								</div>
							</div>

							<p class="reviews__text">
								<span class="reviews__text--bold">Достоинства:</span>
								Заказ пришёл вовремя
							</p>

							<p class="reviews__text">
								<span class="reviews__text--bold">Недостатки:</span>
								Оплата онлайн
							</p>

							<p class="reviews__text ">
								<span class="reviews__text--bold">Комментарий:</span>
								Нравится оплата по карте через терминал.
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
									<p class="reviews__user-name reviews__text--bold">
										SWEET WORLD
									</p>
									<p class="reviews__answer-ago reviews__text--bold reviews__text--translucent">
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

							<div class="reviews__answer-regards">
								<p class="answer-regards__text reviews__text--bold">
									С уважением, Савватий
									<br>
									Старший специалист...
								</p>
							</div>
						</div>
					</li>

					<li class="reviews__review">
						<!--						<img src="/site/upload/images/split1.svg" class="reviews__split" id="split-1" alt="">-->
						<!--						<img src="/site/upload/images/split2.svg" class="reviews__split" id="split-2" alt="">-->
						<!--						<img src="/site/upload/images/split1.svg" class="reviews__split" id="split-3" alt="">-->
						<div class="reviews__review-wrapper">
							<div class="reviews__user">
								<img src="" alt="" class="reviews__userpic">

								<div class="reviews__user-info">
									<p class="reviews__user-name reviews__text--bold">
										Уважаемый человек
									</p>
									<div class="reviews__user-stats">
										<img src="/site/upload/images/stars.svg" alt="" class="reviews__stars">
										<p class="reviews__user-bought reviews__text--translucent">321 покупка</p>
									</div>
								</div>
							</div>

							<p class="reviews__text">
								<span class="reviews__text--bold">Достоинства:</span>
								Заказ пришёл вовремя
							</p>

							<p class="reviews__text">
								<span class="reviews__text--bold">Недостатки:</span>
								Оплата онлайн
							</p>

							<p class="reviews__text ">
								<span class="reviews__text--bold">Комментарий:</span>
								Нравится оплата по карте через терминал.
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
			</section>

			<section class="total-statistic">
				<a href="" class="send-review-btn">
					<span>Оставить отзыв</span>
				</a>

				<div class="range-statistic-wrapper">
					<h2 class="percent-buy-again">
						89% покупателей
						<br>
						купили бы здесь снова
					</h2>

					<div class="ranges-list">
						<div class="range-item">
							<div class="range-item__title-score-wrapper">
								<p class="range-item__title">
									Скорость обработки заказа
								</p>

								<p class="range-item__score-value">5</p>
							</div>

							<div class="range-wrapper">
								<div class="range-value"></div>
							</div>
						</div>

						<div class="range-item">
							<div class="range-item__title-score-wrapper">
								<p class="range-item__title">
									Качество доставки или выдачи товара
								</p>

								<p class="range-item__score-value">4.3</p>
							</div>

							<div class="range-wrapper">
								<div class="range-value"></div>
							</div>
						</div>

						<div class="range-item">
							<div class="range-item__title-score-wrapper">
								<p class="range-item__title">
									Общение
								</p>

								<p class="range-item__score-value">2.8</p>
							</div>

							<div class="range-wrapper">
								<div class="range-value"></div>
							</div>
						</div>

						<div class="range-item">
							<div class="range-item__title-score-wrapper">
								<p class="range-item__title">
									Соответствие товара описанию
								</p>

								<p class="range-item__score-value">2</p>
							</div>

							<div class="range-wrapper">
								<div class="range-value"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>
	</div>

<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/footer.php");
?>