<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");
$APPLICATION["title"] = "Заказы";
$APPLICATION["styles"][] = "/src/assets/styles/css/orders.css";
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
$APPLICATION["scripts"][] = "/src/assets/js/orders.js";
?>

<?php
$order_cost = 449;
$order_count = 2;
$order_discount = 30
?>

<div class="container-1440">
	<div class="orders-top">
		<h1 class="main__title">Мои заказы</h1>
		<nav class="orders-condition">
			<ul class="orders-condition-list">
				<li class="orders-condition__item"><a href="#" class="orders-condition__link active">все(<?php echo $order_all ?>)</a></li>
				<li class="orders-condition__item"><a href="#" class="orders-condition__link">в сборке(<?php echo $order_assembly ?>)</a></li>
				<li class="orders-condition__item"><a href="#" class="orders-condition__link">собран(<?php echo $order_assembled ?>)</a></li>
				<li class="orders-condition__item"><a href="#" class="orders-condition__link">в пути(<?php echo $order_way ?>)</a></li>
				<li class="orders-condition__item"><a href="#" class="orders-condition__link">доставленный(<?php echo $order_delivered ?>)</a></li>
			</ul>
		</nav>
		<div class="order-search">
			<input type="text" placeholder="Поиск" class="order-search__input">
			<button class="orser-search__btn">По дате</button>
		</div>
	</div>
	<div class="orders-bottom">
		<ul class="orders-list">
			<li class="orders__item">
				<div class="orders-grid header">
					<div class="content-wrapper">
						<div class="info-block">
							<h2 class="info-block__value">
								Заказ №:
							</h2>
							<h2 class="info-block__key">
								<?php echo $order_id ?>
							</h2>
						</div>
						<div class="info-block">
							<h2 class="info-block__value">
								Время заказа:
							</h2>
							<h2 class="info-block__key">
								<?php echo $order_date ?>
							</h2>
						</div>
					</div>
					<div class="content-wrapper">
						<div class="info-block">
							<h2 class="info-block__value">
								Статус заказа:
							</h2>
							<h2 class="info-block__key">
								<?php echo $order_condition ?>
							</h2>
						</div>
						<button class="more">Подробнее</button>
					</div>
					<div class="content-wrapper">
						<h2 class="cost-value">Стоимость:
						</h2>
						<h2 class="cost-key"> <?php echo $order_cost ?></h2>
					</div>
				</div>
				<div class="arrow-open orders-grid">
					<button>
						<svg width="32" height="23" viewBox="0 0 32 23" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M3.88961 0.766186L15.2417 14.5687L15.6236 15.0331L16.0106 14.5729L27.6093 0.776971L30.6026 4.33729L15.6278 22.1487L0.662586 4.34861L3.88961 0.766186Z" fill="#5D3030" stroke="black" />
						</svg>
					</button>
				</div>
				<div class="order__item-bottom">
					<div class="order__item-bottom2">
						<div class="column-information orders-grid order-description">
							<div class="content-wrapper ">
								<h4 class="column-information__title">описание товара</h4>
							</div>
							<div class=" content-wrapper order-calculation">
								<h4 class="order-calculation__item content-wrapper column-information__title">Цена за шт</h4>
								<h4 class="order-calculation__item content-wrapper column-information__title">Количество</h4>
								<h4 class="order-calculation__item content-wrapper column-information__title">Скидка</h4>
							</div>
							<div class="content-wrapper">
								<h4 class="column-information__title">Итоговая цена</h4>
							</div>
						</div>
						<div class="orders-grid column-information order__item">
							<div class="content-wrapper order-item">
								<svg height="40" width="40" classname="mark">
									<circle cx="20" cy="20" r="18" stroke="#CE9473" stroke-width="1" fill="#fff" class="mark__border" />
									<circle cx="20" cy="20" r="8" fill="#fff" class="mark__content" />
								</svg>
								<div class="item-img">
									<img src="" alt="item">
								</div>
								<h4 class="orders-item__title">
									Тут будет название заказа
								</h4>
							</div>
							<div class=" content-wrapper">
								<div class=" content-wrapper order-calculation">
									<h4 class="order-calculation__item content-wrapper column-information__title"><?php echo $order_cost ?> руб</h4>
									<h4 class="order-calculation__item content-wrapper column-information__title"><?php echo $order_count ?> шт</h4>
									<h4 class="order-calculation__item content-wrapper column-information__title"><?php echo $order_discount ?><button class="more order-calculation__btn">Подробнее</button></h4>
								</div>
							</div>
							<div class="content-wrapper">
								<h4 class="column-information__title"><?php echo (($order_cost - $order_cost * ($order_discount / 100)) * $order_count) ?> руб</h4>
							</div>
						</div>

						<div class="orders-grid footer">
							<div class="content-wrapper">
								<div class="info-block">
									<h2 class="info-block__value">
										Самовывоз:
									</h2>
									<h2 class="info-block__key">
										<? echo $order_adress ?>
									</h2>
								</div>
							</div>
							<div class="content-wrapper">
								<div class="info-block">
									<h2 class="info-block__value">
										способ оплаты:
									</h2>
									<h2 class="info-block__key">
										<? echo $order_payment_method ?>
									</h2>
								</div>
							</div>
							<div class="content-wrapper">
								<div class="info-block">
									<h2 class="info-block__key">
										<? echo $order_status_payment ?>
									</h2>
								</div>
							</div>
						</div>

					</div>
				</div>
			</li>
			<li class="orders__item">
				<div class="orders-grid header">
					<div class="content-wrapper">
						<div class="info-block">
							<h2 class="info-block__value">
								Заказ №:
							</h2>
							<h2 class="info-block__key">
								<?php echo $order_id ?>
							</h2>
						</div>
						<div class="info-block">
							<h2 class="info-block__value">
								Время заказа:
							</h2>
							<h2 class="info-block__key">
								<?php echo $order_date ?>
							</h2>
						</div>
					</div>
					<div class="content-wrapper">
						<div class="info-block">
							<h2 class="info-block__value">
								Статус заказа:
							</h2>
							<h2 class="info-block__key">
								<?php echo $order_condition ?>
							</h2>
						</div>
						<button class="more">Подробнее</button>
					</div>
					<div class="content-wrapper">
						<h2 class="cost-value">Стоимость:
						</h2>
						<h2 class="cost-key"> <?php echo $order_cost ?></h2>
					</div>
				</div>
				<div class="arrow-open orders-grid">
					<button>
						<svg width="32" height="23" viewBox="0 0 32 23" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M3.88961 0.766186L15.2417 14.5687L15.6236 15.0331L16.0106 14.5729L27.6093 0.776971L30.6026 4.33729L15.6278 22.1487L0.662586 4.34861L3.88961 0.766186Z" fill="#5D3030" stroke="black" />
						</svg>
					</button>
				</div>
				<div class="order__item-bottom">
					<div class="order__item-bottom2">
						<div class="column-information orders-grid order-description">
							<div class="content-wrapper ">
								<h4 class="column-information__title">описание товара</h4>
							</div>
							<div class=" content-wrapper order-calculation">
								<h4 class="order-calculation__item content-wrapper column-information__title">Цена за шт</h4>
								<h4 class="order-calculation__item content-wrapper column-information__title">Количество</h4>
								<h4 class="order-calculation__item content-wrapper column-information__title">Скидка</h4>
							</div>
							<div class="content-wrapper">
								<h4 class="column-information__title">Итоговая цена</h4>
							</div>
						</div>
						<div class="orders-grid column-information order__item">
							<div class="content-wrapper order-item">
								<svg height="40" width="40" classname="mark">
									<circle cx="20" cy="20" r="18" stroke="#CE9473" stroke-width="1" fill="#fff" class="mark__border" />
									<circle cx="20" cy="20" r="8" fill="#fff" class="mark__content" />
								</svg>
								<div class="item-img">
									<img src="" alt="item">
								</div>
								<h4 class="orders-item__title">
									Тут будет название заказа
								</h4>
							</div>
							<div class=" content-wrapper">
								<div class=" content-wrapper order-calculation">
									<h4 class="order-calculation__item content-wrapper column-information__title"><?php echo $order_cost ?> руб</h4>
									<h4 class="order-calculation__item content-wrapper column-information__title"><?php echo $order_count ?> шт</h4>
									<h4 class="order-calculation__item content-wrapper column-information__title"><?php echo $order_discount ?><button class="more order-calculation__btn">Подробнее</button></h4>
								</div>
							</div>
							<div class="content-wrapper">
								<h4 class="column-information__title"><?php echo (($order_cost - $order_cost * ($order_discount / 100)) * $order_count) ?> руб</h4>
							</div>
						</div>

						<div class="orders-grid footer">
							<div class="content-wrapper">
								<div class="info-block">
									<h2 class="info-block__value">
										Самовывоз:
									</h2>
									<h2 class="info-block__key">
										<? echo $order_adress ?>
									</h2>
								</div>
							</div>
							<div class="content-wrapper">
								<div class="info-block">
									<h2 class="info-block__value">
										способ оплаты:
									</h2>
									<h2 class="info-block__key">
										<? echo $order_payment_method ?>
									</h2>
								</div>
							</div>
							<div class="content-wrapper">
								<div class="info-block">
									<h2 class="info-block__key">
										<? echo $order_status_payment ?>
									</h2>
								</div>
							</div>
						</div>

					</div>
				</div>
			</li>
		</ul>
	</div>
</div>



<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/footer.php");
?>