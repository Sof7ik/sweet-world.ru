<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");
$APPLICATION["title"] = "каталог";
$APPLICATION["styles"][] = "/src/assets/styles/css/catalog.css";
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
$APPLICATION["scripts"][] = "/src/assets/js/orders.js";
?>

<div class="container-1440">
    <div class="catalog-top">
        <h1 class="catalog__title">Каталог</h1>
        <ul class="catalog-options">
            <li class="catalog-options__item">
                <button class="catalog-options__button">Соритровать по</button>
            </li>
            <li class="catalog-options__item">
                <button class="catalog-options__button">без сортировки</button>
            </li>
            <li class="catalog-options__item with_2_button">
                <h2 class="catalog-options__subtitle">цена</h2>
                <button class="catalog-options__button with_2_button"><img src="../../site/upload/icons/arrow_up.svg" alt="arrow"></button>
                <button class="catalog-options__button with_2_button"><img src="../../site/upload/icons/arrow_down.svg" alt="arrow"></button>
            </li>
            <li class="catalog-options__item with_2_button">
                <h2 class="catalog-options__subtitle">популярность</h2>
                <button class="catalog-options__button with_2_button"><img src="../../site/upload/icons/arrow_up.svg" alt="arrow"></button>
                <button class="catalog-options__button with_2_button"><img src="../../site/upload/icons/arrow_down.svg" alt="arrow"></button>
            </li>
        </ul>
    </div>
    <div class="catalog-bottom">
        <div class="catalog-left">
            <h2 class="catalog-block__title">Категории</h2>
            <nav class="nav">
                <ul class="catalog-left-list">
                    <li class="catalog-left__item">
                        <a href = "./cookie/index.php" class="catalog-left__item__title">
                            печенье
                        </a>
                    </li>
                    <li class="catalog-left__item">
                        <a href = "./chocolate/index.php" class="catalog-left__item__title">
                            шоколад
                        </a>
                    </li>
                    <li class="catalog-left__item">
                        <a href = "#" class="catalog-left__item__title">
                            шонфеты
                        </a>
                    </li>
                    <li class="catalog-left__item">
                        <a href = "#" class="catalog-left__item__title">
                            мармелад
                        </a>
                    </li>
                    <li class="catalog-left__item">
                        <a href = "#" class="catalog-left__item__title">
                            леденцы
                        </a>
                    </li>
                    <li class="catalog-left__item">
                        <a href = "#" class="catalog-left__item__title">
                            вафли
                        </a>
                    </li>
                    <li class="catalog-left__item">
                        <a href = "#" class="catalog-left__item__title">
                            пирожные
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="catalog-right">
            <div class="catalog-right-block">
                <h2 class="catalog-block__title">Самое популярное</h2>
                <div class="courusel">
                    <div class="caurusel-block">
                        <ul class="catalog-right-block-list">
                            <li class="catalog-right-block-list">
                                <a href="#" class="catalog-right-block__item">
                                    <img src="" alt="" class="catalog-right-block__item__img">
                                    <h3 class="catalog-right-block__item__option">Цена:250</h3>
                                    <h3 class="catalog-right-block__item__option">Назвние</h3>
                                </a>
                            </li>
                            <li class="catalog-right-block-list">
                                <a href="#" class="catalog-right-block__item">
                                    <img src="" alt="" class="catalog-right-block__item__img">
                                    <h3 class="catalog-right-block__item__option">Цена:250</h3>
                                    <h3 class="catalog-right-block__item__option">Назвние</h3>
                                </a>
                            </li>
                            <li class="catalog-right-block-list">
                                <a href="#" class="catalog-right-block__item">
                                    <img src="" alt="" class="catalog-right-block__item__img">
                                    <h3 class="catalog-right-block__item__option">Цена:250</h3>
                                    <h3 class="catalog-right-block__item__option">Назвние</h3>
                                </a>
                            </li>
                            <li class="catalog-right-block-list">
                                <a href="#" class="catalog-right-block__item">
                                    <img src="" alt="" class="catalog-right-block__item__img">
                                    <h3 class="catalog-right-block__item__option">Цена:250</h3>
                                    <h3 class="catalog-right-block__item__option">Назвние</h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button class="arrow-right"><img src="../../site/upload/icons/arrow_right.svg" alt="arrow"></button>
                </div>
            </div>
            <div class="catalog-right-block">
                <h2 class="catalog-block__title">Страны</h2>
                <ul class="catalog-right-block-list">
                    <li class="catalog-right-block-list">
                        <a href="#" class="catalog-right-block__item">
                            <img src="../../site/upload/icons/Казахстан.svg" alt="" class="catalog-right-block__img">
                        </a>
                    </li>
                    <li class="catalog-right-block-list">
                        <a href="#" class="catalog-right-block__item">
                            <img src="../../site/upload/icons/китай.svg" alt="" class="catalog-right-block__img">
                        </a>
                    </li>
                    <li class="catalog-right-block-list">
                        <a href="#" class="catalog-right-block__item">
                            <img src="../../site/upload/icons/Турция.svg" alt="" class="catalog-right-block__img">
                        </a>
                    </li>
                    <li class="catalog-right-block-list">
                        <a href="#" class="catalog-right-block__item">
                            <img src="../../site/upload/icons/япония.svg" alt="" class="catalog-right-block__img">
                        </a>
                    </li>
                    <li class="catalog-right-block-list">
                        <a href="#" class="catalog-right-block__item">
                            <img src="../../site/upload/icons/Россия.svg" alt="" class="catalog-right-block__img">
                        </a>
                    </li>
                </ul>
                <ul class="catalog-right-block-list">
                    <li class="catalog-right-block-list">
                        <a href="#" class="catalog-right-block__item">
                            <img src="../../site/upload/icons/Казахстан.svg" alt="" class="catalog-right-block__img">
                        </a>
                    </li>
                    <li class="catalog-right-block-list">
                        <a href="#" class="catalog-right-block__item">
                            <img src="../../site/upload/icons/китай.svg" alt="" class="catalog-right-block__img">
                        </a>
                    </li>
                    <li class="catalog-right-block-list">
                        <a href="#" class="catalog-right-block__item">
                            <img src="../../site/upload/icons/Турция.svg" alt="" class="catalog-right-block__img">
                        </a>
                    </li>
                    <li class="catalog-right-block-list">
                        <a href="#" class="catalog-right-block__item">
                            <img src="../../site/upload/icons/япония.svg" alt="" class="catalog-right-block__img">
                        </a>
                    </li>
                    <li class="catalog-right-block-list">
                        <a href="#" class="catalog-right-block__item">
                            <img src="../../site/upload/icons/Россия.svg" alt="" class="catalog-right-block__img">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="catalog-right-block">
                <h2 class="catalog-block__title">Печенье</h2>
                <nav class="catalog-nav">
                    <ul class="catalog-right-block-options">
                        <li class="catalog-right-block-options__item"><a href="#" class="catalog-right-block-options__link">Овсяное</a></li>
                        <li class="catalog-right-block-options__item"><a href="#" class="catalog-right-block-options__link">Молочное</a></li>
                        <li class="catalog-right-block-options__item"><a href="#" class="catalog-right-block-options__link">Шоколадное</a></li>
                        <li class="catalog-right-block-options__item"><a href="#" class="catalog-right-block-options__link">Имбирное</a></li>
                        <li class="catalog-right-block-options__item"><a href="#" class="catalog-right-block-options__link">Пряники</a></li>
                        <li class="catalog-right-block-options__item"><a href="#" class="catalog-right-block-options__link">Имбирное</a></li>
                        <li class="catalog-right-block-options__item"><a href="#" class="catalog-right-block-options__link">Пряники</a></li>
                        <li class="catalog-right-block-options__item"><a href="#" class="catalog-right-block-options__link">Печенье</a></li>
                    </ul>
                </nav>
                <div class="courusel">
                    <div class="caurusel-block">
                        <ul class="catalog-right-block-list">
                            <li class="catalog-right-block-list">
                                <a href="#" class="catalog-right-block__item">
                                    <img src="" alt="" class="catalog-right-block__item__img">
                                    <h3 class="catalog-right-block__item__option">Цена:250</h3>
                                    <h3 class="catalog-right-block__item__option">Назвние</h3>
                                </a>
                            </li>
                            <li class="catalog-right-block-list">
                                <a href="#" class="catalog-right-block__item">
                                    <img src="" alt="" class="catalog-right-block__item__img">
                                    <h3 class="catalog-right-block__item__option">Цена:250</h3>
                                    <h3 class="catalog-right-block__item__option">Назвние</h3>
                                </a>
                            </li>
                            <li class="catalog-right-block-list">
                                <a href="#" class="catalog-right-block__item">
                                    <img src="" alt="" class="catalog-right-block__item__img">
                                    <h3 class="catalog-right-block__item__option">Цена:250</h3>
                                    <h3 class="catalog-right-block__item__option">Назвние</h3>
                                </a>
                            </li>
                            <li class="catalog-right-block-list">
                                <a href="#" class="catalog-right-block__item">
                                    <img src="" alt="" class="catalog-right-block__item__img">
                                    <h3 class="catalog-right-block__item__option">Цена:250</h3>
                                    <h3 class="catalog-right-block__item__option">Назвние</h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button class="arrow-right"><img src="../../site/upload/icons/arrow_right.svg" alt="arrow"></button>
                </div>

            </div>
            <div class="catalog-right-block">
                <h2 class="catalog-block__title">Печенье</h2>
                <nav class="catalog-nav">
                    <ul class="catalog-right-block-options">
                        <li class="catalog-right-block-options__item"><a href="#" class="catalog-right-block-options__link">Батончику</a></li>
                        <li class="catalog-right-block-options__item"><a href="#" class="catalog-right-block-options__link">Драже</a></li>
                        <li class="catalog-right-block-options__item"><a href="#" class="catalog-right-block-options__link">Фигурный</a></li>
                        <li class="catalog-right-block-options__item"><a href="#" class="catalog-right-block-options__link">Молочный</a></li>
                        <li class="catalog-right-block-options__item"><a href="#" class="catalog-right-block-options__link">Горький</a></li>
                        <li class="catalog-right-block-options__item"><a href="#" class="catalog-right-block-options__link">Белый</a></li>
                    </ul>
                </nav>
                <div class="courusel">
                    <div class="caurusel-block">
                        <ul class="catalog-right-block-list">
                            <li class="catalog-right-block-list">
                                <a href="#" class="catalog-right-block__item">
                                    <img src="" alt="" class="catalog-right-block__item__img">
                                    <h3 class="catalog-right-block__item__option">Цена:250</h3>
                                    <h3 class="catalog-right-block__item__option">Назвние</h3>
                                </a>
                            </li>
                            <li class="catalog-right-block-list">
                                <a href="#" class="catalog-right-block__item">
                                    <img src="" alt="" class="catalog-right-block__item__img">
                                    <h3 class="catalog-right-block__item__option">Цена:250</h3>
                                    <h3 class="catalog-right-block__item__option">Назвние</h3>
                                </a>
                            </li>
                            <li class="catalog-right-block-list">
                                <a href="#" class="catalog-right-block__item">
                                    <img src="" alt="" class="catalog-right-block__item__img">
                                    <h3 class="catalog-right-block__item__option">Цена:250</h3>
                                    <h3 class="catalog-right-block__item__option">Назвние</h3>
                                </a>
                            </li>
                            <li class="catalog-right-block-list">
                                <a href="#" class="catalog-right-block__item">
                                    <img src="" alt="" class="catalog-right-block__item__img">
                                    <h3 class="catalog-right-block__item__option">Цена:250</h3>
                                    <h3 class="catalog-right-block__item__option">Назвние</h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button class="arrow-right"><img src="../../site/upload/icons/arrow_right.svg" alt="arrow"></button>
                </div>

            </div>
        </div>

    </div>

</div>
<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/footer.php");
$APPLICATION["scripts"][] = "/src/assets/js/orders.js";
?>