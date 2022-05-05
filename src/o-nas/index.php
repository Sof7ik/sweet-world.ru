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
                <div class="about-us__welcome__items">
                    <div class="about-us__welcome__item">
                        <h2 class="about-us__welcome__head">Добро пожаловать на SWEETWORLD</h2>
                        <p class="about-us__welcome__text">Наша главная задача, чтобы покупка сладостей...</p>
                        <p class="about-us__welcome__text">SWEETWORLD - международная компания...</p>
                    </div>
                    <div class="about-us__welcome__item">
                        <picture class="about-us__welcome__pic">
                            <source srcset="../../site/upload/images/o-nas/shoko.webp" type="image/webp">
                            <source srcset="../../site/upload/images/o-nas/shoko.png" type="image/png">
                            <img class="about-us__welcome__img" src="../../site/upload/images/o-nas/shoko.jpg" alt="Темный шоколад, корица, ваниль, сладости">
                        </picture>
                    </div>
                </div>
            </div>
        </section>

        <!-- статистика -->
        <section class="about-us__statistic">
            <div class="container-1440">
                <ul class="about-us__statistic__items">
                    <li class="about-us__statistic__item">
                        <p class="about-us__statistic__text">
                            <span class="about-us__statistic__header">20&nbsp;тыс+</span>
                            <span class="about-us__statistic__desc">брендов на сайте</span>
                        </p>
                    </li>
                    <li class="about-us__statistic__item">
                        <p class="about-us__statistic__text">
                            <span class="about-us__statistic__header">480&nbsp;тыс+</span>
                            <span class="about-us__statistic__desc">заказов в день</span>
                        </p>
                    </li>
                    <li class="about-us__statistic__item">
                        <p class="about-us__statistic__text">
                            <span class="about-us__statistic__header">1,5&nbsp;млн+</span>
                            <span class="about-us__statistic__desc">посетителей в месяц</span>
                        </p>
                    </li>
                    <li class="about-us__statistic__item">
                        <p class="about-us__statistic__text">
                            <span class="about-us__statistic__header">10&nbsp;млн+</span>
                            <span class="about-us__statistic__desc">товаров на складе</span>
                        </p>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Наши преимущества -->
        <section class="about-us__plus">
            <div class="container-1440">
                <h2 class="about-us__plus__head">Наши преимущества</h2>
                <ul class="about-us__plus__items">
                    <li class="about-us__plus__item">
                        <div class="about-us__plus__box">
                            <div class="about-us__plus__ico">
                                <p class="about-us__plus__ico__head">Быстрая и бесплатная доставка</p>
                                <picture class="about-us__plus__ico__pic">
                                    <source srcset="../../site/upload/images/o-nas/fast-truck.svg" type="image/svg+xml">
                                    <source srcset="../../site/upload/images/o-nas/fast-truck.webp" type="image/webp">
                                    <img class="about-us__plus__ico__img" src="../../site/upload/images/o-nas/fast-truck.png" alt="Мчащийся грузовик">
                                </picture>
                            </div>
                            <p class="about-us__plus__text">
                                <span class="about-us__plus__text__head">Более 70%</span>
                                <span class="about-us__plus__text__desc">доставляется в течение недели</span>
                            </p>
                        </div>
                    </li>
                    <li class="about-us__plus__item">
                        <div class="about-us__plus__box">
                            <div class="about-us__plus__ico">
                                <p class="about-us__plus__ico__head">Скидки и бонусы</p>
                                <picture class="about-us__plus__ico__pic">
                                    <source srcset="../../site/upload/images/o-nas/percents.svg" type="image/svg+xml">
                                    <source srcset="../../site/upload/images/o-nas/percents.webp" type="image/webp">
                                    <img class="about-us__plus__ico__img img_200x200" src="../../site/upload/images/o-nas/percents.png" alt="Проценты">
                                </picture>
                            </div>
                            <p class="about-us__plus__text">
                                <span class="about-us__plus__text__head">До 50%</span>
                                <span class="about-us__plus__text__desc">скидки постоянным покупателям</span>
                            </p>
                        </div>
                    </li>
                    <li class="about-us__plus__item">
                        <div class="about-us__plus__box">
                            <div class="about-us__plus__ico">
                                <p class="about-us__plus__ico__head">Скидки и бонусы</p>
                                <picture class="about-us__plus__ico__pic">
                                    <source srcset="../../site/upload/images/o-nas/percents.svg" type="image/svg+xml">
                                    <source srcset="../../site/upload/images/o-nas/percents.webp" type="image/webp">
                                    <img class="about-us__plus__ico__img img_200x200" src="../../site/upload/images/o-nas/percents.png" alt="Проценты">
                                </picture>
                            </div>
                            <p class="about-us__plus__text">
                                <span class="about-us__plus__text__head">До 50%</span>
                                <span class="about-us__plus__text__desc">скидки постоянным покупателям</span>
                            </p>
                        </div>
                    </li>
                    <li class="about-us__plus__item">
                        <div class="about-us__plus__box">
                            <div class="about-us__plus__ico">
                                <p class="about-us__plus__ico__head">Скидки и бонусы</p>
                                <picture class="about-us__plus__ico__pic">
                                    <source srcset="../../site/upload/images/o-nas/percents.svg" type="image/svg+xml">
                                    <source srcset="../../site/upload/images/o-nas/percents.webp" type="image/webp">
                                    <img class="about-us__plus__ico__img img_200x200" src="../../site/upload/images/o-nas/percents.png" alt="Проценты">
                                </picture>
                            </div>
                            <p class="about-us__plus__text">
                                <span class="about-us__plus__text__head">До 50%</span>
                                <span class="about-us__plus__text__desc">скидки постоянным покупателям</span>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Наши награды -->
        <section class="about-us__awards">
            <div class="container-1440">
                <h2 class="about-us__awards__head">Наши награды</h2>
            </div>
        </section>

        <!-- Где можно нас найти -->
        <section class="about-us__location">
            <div class="container-1440">
                <h2 class="about-us__location__head">Где можно нас найти</h2>
                <div class="abou-us__location__map">
                    <iframe class="about-us__location__map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A3d51f2b5c65681d29e26c37d48534e088fe0de75c4ec1a447cd3f1b2ca6f5ca9&amp;source=constructor" frameborder="0"></iframe>
                </div>
            </div>
        </section>

<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/footer.php");
?>
