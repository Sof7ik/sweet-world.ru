<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");

$APPLICATION["title"] = "Главная страница";

$APPLICATION["styles"][] = "/src/assets/styles/css/reviews.css";

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
?>

		<section class="mainpage-top-slider-wrapper">
            <div class="swiper mainpage-top-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide action-item"
                         style='background-image: url("/site/upload/images/mainpage-slider/baanner image.png");'>
                    </div>

                    <div class="swiper-slide action-item"
                         style="background-image: url('/site/upload/images/mainpage-slider/banner-choco.png');">
                    </div>

                    <div class="swiper-slide action-item"
                         style="background-image: url('/site/upload/images/mainpage-slider/banner-snakes.png');">
                    </div>

                    <div class="swiper-slide action-item"
                         style="background-image: url('/site/upload/images/mainpage-slider/banner-pecenki.png');">
                    </div>
                </div>
            
                <div class="swiper-pagination mainpage-top-slider__pagination"></div>

                <div class="mainpage-top-slider__content">
                    <h1 class="mainpage-top-slider__shop-name">Sweet World</h1>

                    <p class="mainpage-top-slider__shop-desc">
                        Мы самые крутые
                    </p>

                    <div class="mainpage-top-slider__search-catalog-wrapper">
                        <form action="/search/" method="POST" class="mainpage-top-slider__search">
                            <button type="submit" disabled class="mainpage-top-slider__search-loupe">
                                <svg width="216" height="216" viewBox="0 0 216 216" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M191.869 180.246L137.088 125.466C145.589 114.476 150.187 101.039 150.187 86.9062C150.187 69.9891 143.585 54.1266 131.646 42.1664C119.707 30.2062 103.802 23.625 86.9062 23.625C70.0102 23.625 54.1055 30.2273 42.1664 42.1664C30.2062 54.1055 23.625 69.9891 23.625 86.9062C23.625 103.802 30.2273 119.707 42.1664 131.646C54.1055 143.606 69.9891 150.187 86.9062 150.187C101.039 150.187 114.455 145.589 125.445 137.109L180.225 191.869C180.386 192.029 180.576 192.157 180.786 192.244C180.996 192.331 181.221 192.376 181.448 192.376C181.676 192.376 181.901 192.331 182.111 192.244C182.321 192.157 182.511 192.029 182.672 191.869L191.869 182.693C192.029 182.532 192.157 182.342 192.244 182.132C192.331 181.922 192.376 181.697 192.376 181.47C192.376 181.242 192.331 181.017 192.244 180.807C192.157 180.597 192.029 180.407 191.869 180.246V180.246ZM120.319 120.319C111.375 129.241 99.5203 134.156 86.9062 134.156C74.2922 134.156 62.4375 129.241 53.4937 120.319C44.5711 111.375 39.6562 99.5203 39.6562 86.9062C39.6562 74.2922 44.5711 62.4164 53.4937 53.4937C62.4375 44.5711 74.2922 39.6562 86.9062 39.6562C99.5203 39.6562 111.396 44.55 120.319 53.4937C129.241 62.4375 134.156 74.2922 134.156 86.9062C134.156 99.5203 129.241 111.396 120.319 120.319Z" fill="black"/>
                                </svg>
                            </button>
                            <input type="text" name="query" id="mainpage-slider-search">
                        </form>

                        <a href="/src/katalog/" class="mainpage-top-slider__catalog-btn">Каталог</a>
                    </div>
                </div>
            </div>
        </section>
	</main>

    <footer id="page-footer">
        <div class="container-1440">
            <p>&copy; <?=date("Y")?> Sweet World, интернет-магазин сладостей</p>
        </div>
    </footer>
</body>
</html>