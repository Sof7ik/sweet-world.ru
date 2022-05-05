<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");
$APPLICATION["title"] = "О нас";
$APPLICATION["styles"][] = "/src/assets/styles/css/o-nas.css";
$APPLICATION["scripts"][] = "/src/assets/js/reviews.js";
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
?>


        <section class="container-1440">
            <div>
                <h1 class="heading-1">О нас</h1>
            </div>
        </section>

        <!-- приветствие -->
        <section class="about-us__welcome">
            <div class="container-1440">
                <div class="welcome__items">
                    <div class="welcome__item">
                        <h2 class="item__head">Добро пожаловать на SWEETWORLD</h2>
                        <p class="item__text">Наша главная задача, чтобы покупка сладостей...</p>
                        <p class="item__text">SWEETWORLD - международная компания...</p>
                    </div>
                    <div class="welcome__item">
                        <picture class="item__pic">
                            <source srcset="../../site/upload/images/o-nas/shoko.webp" type="image/webp">
                            <source srcset="../../site/upload/images/o-nas/shoko.png" type="image/png">
                            <img class="item__img" src="../../site/upload/images/o-nas/shoko.jpg" alt="Темный шоколад, корица, ваниль, сладости">
                        </picture>
                    </div>
                </div>
            </div>
        </section>

        <!-- статистика -->
        <section class="about-us__statistic">
            <div class="container-1440">
                <ul class="statistic__items">
                    <li class="statistic__item">
                        <p class="item__text">
                            <span class="item__header">20&nbsp;тыс+</span>
                            <span class="item__desc">брендов на сайте</span>
                        </p>
                    </li>
                    <li class="statistic__item">
                        <p class="item__text">
                            <span class="item__header">480&nbsp;тыс+</span>
                            <span class="item__desc">заказов в день</span>
                        </p>
                    </li>
                    <li class="statistic__item">
                        <p class="item__text">
                            <span class="item__header">1,5&nbsp;млн+</span>
                            <span class="item__desc">посетителей в месяц</span>
                        </p>
                    </li>
                    <li class="statistic__item">
                        <p class="item__text">
                            <span class="item__header">10&nbsp;млн+</span>
                            <span class="item__desc">товаров на складе</span>
                        </p>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Наши преимущества -->
        <section class="about-us__plus">
            <div class="container-1440">
                <h2 class="plus__head">Наши преимущества</h2>
                <ul class="plus__items">
                    <li class="plus__item">
                        <div class="item__box">
                            <div class="box__ico">
                                <p class="ico__head">Быстрая и бесплатная доставка</p>
                                <picture class="ico__pic">
                                    <source srcset="../../site/upload/images/o-nas/fast-truck.svg" type="image/svg+xml">
                                    <source srcset="../../site/upload/images/o-nas/fast-truck.webp" type="image/webp">
                                    <img class="ico__img" src="../../site/upload/images/o-nas/fast-truck.png" alt="Мчащийся грузовик">
                                </picture>
                            </div>
                            <p class="box__text">
                                <span class="text__head">Более 70%</span>
                                <span class="text__desc">доставляется в течение недели</span>
                            </p>
                        </div>
                    </li>
                    <li class="plus__item">
                        <div class="item__box">
                            <div class="box__ico">
                                <p class="ico__head">Скидки и бонусы</p>
                                <picture class="ico__pic">
                                    <source srcset="../../site/upload/images/o-nas/percents.svg" type="image/svg+xml">
                                    <source srcset="../../site/upload/images/o-nas/percents.webp" type="image/webp">
                                    <img class="ico__img img_200x200" src="../../site/upload/images/o-nas/percents.png" alt="Проценты">
                                </picture>
                            </div>
                            <p class="box__text">
                                <span class="text__head">До 50%</span>
                                <span class="text__desc">скидки постоянным покупателям</span>
                            </p>
                        </div>
                    </li>
                    <li class="plus__item">
                        <div class="item__box">
                            <div class="box__ico">
                                <p class="ico__head">Скидки и бонусы</p>
                                <picture class="ico__pic">
                                    <source srcset="../../site/upload/images/o-nas/percents.svg" type="image/svg+xml">
                                    <source srcset="../../site/upload/images/o-nas/percents.webp" type="image/webp">
                                    <img class="ico__img img_200x200" src="../../site/upload/images/o-nas/percents.png" alt="Проценты">
                                </picture>
                            </div>
                            <p class="box__text">
                                <span class="text__head">До 50%</span>
                                <span class="text__desc">скидки постоянным покупателям</span>
                            </p>
                        </div>
                    </li>
                    <li class="plus__item">
                        <div class="item__box">
                            <div class="box__ico">
                                <p class="ico__head">Скидки и бонусы</p>
                                <picture class="ico__pic">
                                    <source srcset="../../site/upload/images/o-nas/percents.svg" type="image/svg+xml">
                                    <source srcset="../../site/upload/images/o-nas/percents.webp" type="image/webp">
                                    <img class="ico__img img_200x200" src="../../site/upload/images/o-nas/percents.png" alt="Проценты">
                                </picture>
                            </div>
                            <p class="box__text">
                                <span class="text__head">До 50%</span>
                                <span class="text__desc">скидки постоянным покупателям</span>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Наши награды -->
        <section class="about-us__awards">
            <div class="container-1440">
                <h2 class="awards__head">Наши награды</h2>
            </div>
        </section>

        <!-- Где можно нас найти -->
        <section class="about-us__location">
            <div class="container-1440">
                <h2 class="location__head">Где можно нас найти</h2>
                <div class="location__map">
                    <iframe class="map__iframe" src="https://yandex.ru/map-widget/v1/?um=constructor%3A3d51f2b5c65681d29e26c37d48534e088fe0de75c4ec1a447cd3f1b2ca6f5ca9&amp;source=constructor" frameborder="0"></iframe>
                </div>
            </div>
        </section>

<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/footer.php");
?>
