<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");

$APPLICATION["title"] = "Главная страница";

$APPLICATION["styles"][] = "/src/assets/styles/css/reviews.css";

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");


$catalog = [
		[
			"ID" => 1,
			"name" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
			"desc" => "dipisci beatae cumque, deleniti dolorum fugit iure libero, nisi odio omnis perferendis perspiciatis possimus quam quasi recusandae sit, soluta suscipit voluptate voluptatibus!",
			"avatar" => "",
		],
	[
		"ID" => 2,
		"name" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
		"desc" => "dipisci beatae cumque, deleniti dolorum fugit iure libero, nisi odio omnis perferendis perspiciatis possimus quam quasi recusandae sit, soluta suscipit voluptate voluptatibus!",
		"avatar" => "",
	],
	[
		"ID" => 3,
		"name" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
		"desc" => "dipisci beatae cumque, deleniti dolorum fugit iure libero, nisi odio omnis perferendis perspiciatis possimus quam quasi recusandae sit, soluta suscipit voluptate voluptatibus!",
		"avatar" => "",
	],
	[
		"ID" => 4,
		"name" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
		"desc" => "dipisci beatae cumque, deleniti dolorum fugit iure libero, nisi odio omnis perferendis perspiciatis possimus quam quasi recusandae sit, soluta suscipit voluptate voluptatibus!",
		"avatar" => "",
	],
	[
		"ID" => 5,
		"name" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
		"desc" => "dipisci beatae cumque, deleniti dolorum fugit iure libero, nisi odio omnis perferendis perspiciatis possimus quam quasi recusandae sit, soluta suscipit voluptate voluptatibus!",
		"avatar" => "",
	],
	[
		"ID" => 6,
		"name" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
		"desc" => "dipisci beatae cumque, deleniti dolorum fugit iure libero, nisi odio omnis perferendis perspiciatis possimus quam quasi recusandae sit, soluta suscipit voluptate voluptatibus!",
		"avatar" => "",
	],
	[
		"ID" => 7,
		"name" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
		"desc" => "dipisci beatae cumque, deleniti dolorum fugit iure libero, nisi odio omnis perferendis perspiciatis possimus quam quasi recusandae sit, soluta suscipit voluptate voluptatibus!",
		"avatar" => "",
	],


]
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

							<a href="/src/action/?ID=1" class="banner-action__read-action">Подробнее</a>
						</div>
                    </div>

                    <div class="swiper-slide action-item"
                         style="background-image: url('/site/upload/images/mainpage-slider/banner-choco.png');">
						<div class="inner-slider-content">
							<p class="banner-action__name">
								Акция! 3 по цене 2-ух!<br>
								Успейте по конца недели!
							</p>

							<a href="/src/action/?ID=1" class="banner-action__read-action">Подробнее</a>
						</div>
                    </div>

                    <div class="swiper-slide action-item"
                         style="background-image: url('/site/upload/images/mainpage-slider/banner-snakes.png');">
						<div class="inner-slider-content">
							<p class="banner-action__name">
								Акция! 3 по цене 2-ух!<br>
								Успейте по конца недели!
							</p>

							<a href="/src/action/?ID=1" class="banner-action__read-action">Подробнее</a>
						</div>
                    </div>

                    <div class="swiper-slide action-item"
                         style="background-image: url('/site/upload/images/mainpage-slider/banner-pecenki.png');">
						<div class="inner-slider-content">
							<p class="banner-action__name">
								Акция! 3 по цене 2-ух!<br>
								Успейте по конца недели!
							</p>

							<a href="/src/action/?ID=1" class="banner-action__read-action">Подробнее</a>
						</div>
                    </div>
                </div>
            
                <div class="swiper-pagination mainpage-top-slider__pagination"></div>
            </div>
	</section>


<!--<section class="mainpage-catalog">-->
<!--	<div class="container-1440">-->
<!--		<h2 class="heading-2 mainpage-catalog__title">Каталог сладостей</h2>-->
<!---->
<!--		<div class="mainpage-catalog__filter">-->
<!--			<a href="" class="mainpage-catalog__filter-button">Новинки</a>-->
<!--			<a href="" class="mainpage-catalog__filter-button">Акции</a>-->
<!--			<a href="" class="mainpage-catalog__filter-button">Популярное</a>-->
<!--		</div>-->
<!---->
<!--		<div class="mainpage-catalog__items-wrapper">-->
<!--			--><?php //foreach ($catalog as $item) {?>
<!--				<div class="mainpage-catalog__item">-->
<!--					<div class="mainpage-catalog__item-avatar">-->
<!--						<a href="">Подробнее</a>-->
<!---->
<!--						<div class="cart-buttons">-->
<!--							<button data-add-to-cart=""></button>-->
<!--							<button data-add-to-liked=""></button>-->
<!--						</div>-->
<!--					</div>-->
<!---->
<!--					<div class="mainpage-catalog__item-text">-->
<!--						<p class="mainpage-catalog__item-name">--><?//=$item["name"]?><!--</p>-->
<!--						<p class="mainpage-catalog__item-desc">--><?//=$item["desc"]?><!--</p>-->
<!--					</div>-->
<!--				</div>-->
<!--			--><?php //}?>
<!--		</div>v-->
<!--	</div>-->
<!--</section>-->

<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . "/src/footer.php");
?>