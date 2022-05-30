<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");
$APPLICATION["title"] = "Информация о товаре";
$APPLICATION["styles"][] = "/src/assets/styles/css/styles.css";
$APPLICATION["scripts"][] = "/src/assets/js/reviews.js";
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
?>


<div class="main product">

<!-- Информация о товаре -->
<section class="section__padding topline">
    <div class="wrapper">
        <h1 class="heading-1">НАЗВАНИЕ ТОВАРА (страна, гр)</h1>
        <div class="topline__items">
            <div class="topline__item photo">
                <picture class="topline__pic">
                    <img class="topline__img" src="../../site/upload/images/products/producе-104935306_xl.jpg" alt="Название продукта" />
                </picture>
            </div>
            <div class="topline__item info">
                <div class="info__action">
                    <p class="info__cost">9999 руб</p>
                    <div class="info__number">
                        <p class="info__minus">-</p>
                        <p class="info__count">2</p>
                        <p class="info__plus">+</p>
                    </div>
                    <div class="info__but">В корзину</div>
                </div>
                <p class="info__about">О товаре</p>
                <ul class="info__list">
                    <li class="info__data">Вес товара (г)</li>
                    <li class="info__data">Энергетическая ценность калории (на 100 гр.)</li>
                    <li class="info__data">Пищевая ценность белки</li>
                    <li class="info__data">Пищевая ценность жиры</li>
                    <li class="info__data">Пищевая ценность углеводы</li>
                    <li class="info__data">Срок годности</li>
                    <li class="info__data">Страна производства</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Вам может понравиться -->
<section class="section__padding maybelike">
    <div class="wrapper">
        <h2 class="heading-2">Вам может понравиться</h2>
        <div class="maybelike__items">
            <div class="maybelike__item product">
                <div class="product__box">
                    <picture class="product__pic">
                        <img class="product__img" src="../../site/upload/images/products/product-000001.png"
                            alt="Название продукта 1" />
                    </picture>
                </div>
                <div class="product__price">Цена</div>
                <div class="product__name">Название</div>
            </div>
            <div class="maybelike__item product">
                <div class="product__box">
                    <picture class="product__pic">
                        <img class="product__img" src="../../site/upload/images/products/product-000002.png"
                            alt="Название продукта 1" />
                    </picture>
                </div>
                <div class="product__price">Цена</div>
                <div class="product__name">Название</div>
            </div>
            <div class="maybelike__item product">
                <div class="product__box">
                    <picture class="product__pic">
                        <img class="product__img" src="../../site/upload/images/products/product-000003.png"
                            alt="Название продукта 1" />
                    </picture>
                </div>
                <div class="product__price">Цена</div>
                <div class="product__name">Название</div>
            </div>
            <div class="maybelike__item product">
                <div class="product__box">
                    <picture class="product__pic">
                        <img class="product__img" src="../../site/upload/images/products/product-000004.png"
                            alt="Название продукта 1" />
                    </picture>
                </div>
                <div class="product__price">Цена</div>
                <div class="product__name">Название</div>
            </div>
            <div class="maybelike__item arrow">
                <div class="arrow__box">
                    <div class="arrow__cir">
                        <div class="arrow__link" href="#"><span class="icon-chevron-right"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Отзывы о товаре -->
<section class="section__padding feedback">
    <div class="wrapper">
        <h2 class="heading-2">Отзывы о товаре</h2>
        <div class="feedback__items">
            <div class="feedback__item left">
                <div class="left__box box">
                    <span class="box__rating">4,6</span>
                    <div class="box__star">
                        <i class="icon-star-solid"></i>
                        <i class="icon-star-solid"></i>
                        <i class="icon-star-solid"></i>
                        <i class="icon-star-solid"></i>
                        <i class="icon-star-half"></i>
                    </div>
                    <span class="box__number">128 отзывов</span>
                </div>
                <div class="left__sort sort">
                    <div class="sort__reason">Сортировать:</div>
                    <div class="sort__bydate">по дате</div>
                    <div class="sort__eval sort__active">по оценке</div>
                    <div class="sort__utility">по полезности</div>
                    <div class="sort__photo">
                        с фото (50)
                    </div>
                </div>
                <div class="left__photos photos">
                    <h3 class="photos__head">Фотографии покупателей</h3>
                    <div class="photos__items">
                        <div class="photos__item photo">
                            <picture class="photo__pic">
                                <img class="photo__img" src="../../site/upload/images/beedback/feedback-img-765431.jpg" alt="конфеты" />
                            </picture>
                        </div>
                        <div class="photos__item photo">
                            <picture class="photo__pic">
                                <img class="photo__img" src="../../site/upload/images/beedback/feedback-img-765432.jpg" alt="конфеты" />
                            </picture>
                        </div>
                        <div class="photos__item photo">
                            <picture class="photo__pic">
                                <img class="photo__img" src="../../site/upload/images/beedback/feedback-img-765433.jpg" alt="конфеты" />
                            </picture>
                        </div>
                        <div class="photos__item photo">
                            <picture class="photo__pic">
                                <img class="photo__img" src="../../site/upload/images/beedback/feedback-img-765434.jpg" alt="конфеты" />
                            </picture>
                        </div>
                        <div class="photos__item arrow">
                            <div class="arrow__box">
                                <div class="arrow__cir"><span class="icon-arrow-right"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left__people people">
                    <div class="people__items">
                        <div class="people__item card">
                            <div class="card__user buyer">
                                <picture class="buyer__pic">
                                    <img class="buyer__img" src="../../site/upload/images/users/user-ru929ru930342.jpg" alt="user photo" />
                                </picture>
                                <div class="buyer__info">
                                    <p class="buyer__name">Покупатель</p>
                                    <p class="buyer__stars">
                                        <i class="icon-star-solid "></i>
                                        <i class="icon-star-solid "></i>
                                        <i class="icon-star-solid "></i>
                                        <i class="icon-star-solid "></i>
                                        <i class="icon-star-empty "></i>
                                    </p> 
                                </div>
                            </div>
                            <p class="card__dignity"><b>Достоинства</b>: Вкусные конфеты, красиво упаковано</p>
                            <p class="card__limitations"><b>Недостатки</b>: Нет</p>
                            <p class="card__comment"><b>Комментарий</b>: Что-то про товар и всё такое</p>
                            <div class="card__photo photo">
                                <div class="photo__item">
                                    <picture class="photo__pic">
                                        <img class="photo__img" src="../../site/upload/images/beedback/feedback-img-765431.jpg" alt="конфеты" />
                                    </picture>
                                </div>
                                <div class="photo__item">
                                    <picture class="photo__pic">
                                        <img class="photo__img" src="../../site/upload/images/beedback/feedback-img-765432.jpg" alt="конфеты" />
                                    </picture>
                                </div>
                                <div class="photo__item">
                                    <picture class="photo__pic">
                                        <img class="photo__img" src="../../site/upload/images/beedback/feedback-img-765433.jpg" alt="конфеты" />
                                    </picture>
                                </div>
                                <div class="photo__item">
                                    <picture class="photo__pic">
                                        <img class="photo__img" src="../../site/upload/images/beedback/feedback-img-765431.jpg" alt="конфеты" />
                                    </picture>
                                </div>
                            </div>
                            <div class="card__footer">
                                <p class="card__but">Полезно</p>
                                <p class="card__old">1 д. назад</p>
                            </div>
                        </div>
                        <div class="people__item card">
                            <div class="card__user buyer">
                                <picture class="buyer__pic">
                                    <img class="buyer__img" src="../../site/upload/images/users/user-ru929ru930342.jpg" alt="user photo" />
                                </picture>
                                <div class="buyer__info">
                                    <p class="buyer__name">Покупатель</p>
                                    <p class="buyer__stars">
                                        <i class="icon-star-solid "></i>
                                        <i class="icon-star-solid "></i>
                                        <i class="icon-star-solid "></i>
                                        <i class="icon-star-solid "></i>
                                        <i class="icon-star-solid "></i>
                                    </p> 
                                </div>
                            </div>
                            <p class="card__dignity"><b>Достоинства</b>: Вкусные конфеты, красиво упаковано</p>
                            <p class="card__limitations"><b>Недостатки</b>: Нет</p>
                            <p class="card__comment"><b>Комментарий</b>: Что-то про товар и всё такое</p>
                            <div class="card__photo photo">
                                <div class="photo__item">
                                    <picture class="photo__pic">
                                        <img class="photo__img" src="../../site/upload/images/beedback/feedback-img-765432.jpg" alt="конфеты" />
                                    </picture>
                                </div>
                                <div class="photo__item">
                                    <picture class="photo__pic">
                                        <img class="photo__img" src="../../site/upload/images/beedback/feedback-img-765433.jpg" alt="конфеты" />
                                    </picture>
                                </div>
                                <div class="photo__item">
                                    <picture class="photo__pic">
                                        <img class="photo__img" src="../../site/upload/images/beedback/feedback-img-765431.jpg" alt="конфеты" />
                                    </picture>
                                </div>
                            </div>
                            <div class="card__footer">
                                <p class="card__but" style="display: none;">Полезно</p>
                                <p class="card__old">1 д. назад</p>
                            </div>
                        </div>
                        <div class="people__item card">
                            <div class="card__user buyer">
                                <picture class="buyer__pic">
                                    <img class="buyer__img" src="../../site/upload/images/users/user-ru929ru930342.jpg" alt="user photo" />
                                </picture>
                                <div class="buyer__info">
                                    <p class="buyer__name">Покупатель</p>
                                    <p class="buyer__stars">
                                        <i class="icon-star-solid "></i>
                                        <i class="icon-star-solid "></i>
                                        <i class="icon-star-solid "></i>
                                        <i class="icon-star-solid "></i>
                                        <i class="icon-star-empty "></i>
                                    </p> 
                                </div>
                            </div>
                            <p class="card__dignity"><b>Достоинства</b>: Вкусные конфеты, красиво упаковано</p>
                            <p class="card__limitations"><b>Недостатки</b>: Нет</p>
                            <p class="card__comment"><b>Комментарий</b>: Что-то про товар и всё такое</p>
                            <div class="card__photo photo">
                                <div class="photo__item">
                                    <picture class="photo__pic">
                                        <img class="photo__img" src="../../site/upload/images/beedback/feedback-img-765431.jpg" alt="конфеты" />
                                    </picture>
                                </div>
                                <div class="photo__item">
                                    <picture class="photo__pic">
                                        <img class="photo__img" src="../../site/upload/images/beedback/feedback-img-765432.jpg" alt="конфеты" />
                                    </picture>
                                </div>
                                <div class="photo__item">
                                    <picture class="photo__pic">
                                        <img class="photo__img" src="../../site/upload/images/beedback/feedback-img-765433.jpg" alt="конфеты" />
                                    </picture>
                                </div>
                            </div>
                            <div class="card__footer">
                                <p class="card__but" style="display: none;">Полезно</p>
                                <p class="card__old">1 д. назад</p>
                            </div>
                        </div>
                    </div>
                    <div class="people__pagination pagination">
                        <ul class="pagination__box">
                            <li class="pagination__but">Назад</li>
                            <li class="pagination__but">...</li>
                            <li class="pagination__but">3</li>
                            <li class="pagination__but active">4</li>
                            <li class="pagination__but">5</li>
                            <li class="pagination__but">...</li>
                            <li class="pagination__but">Вперед</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="feedback__item right">
                <div class="right__but">Оставить отзыв</div>
                <div class="right__rating rating">
                    <p class="rating__head">На основании 123 отзывов</p>
                    <div class="rating__table">
                        <p class="rating__line">
                            <span class="rating__score">5</span>
                            <span class="rating__bar"><span class="rating__progres" style="width: 89%"></span></span>
                            <span class="rating__percent">89%</span>
                        </p>
                        <p class="rating__line">
                            <span class="rating__score">4</span>
                            <span class="rating__bar"><span class="rating__progres" style="width: 5%"></span></span>
                            <span class="rating__percent">5%</span>
                        </p>
                        <p class="rating__line">
                            <span class="rating__score">3</span>
                            <span class="rating__bar"><span class="rating__progres" style="width: 3%"></span></span>
                            <span class="rating__percent">3%</span>
                        </p>
                        <p class="rating__line">
                            <span class="rating__score">2</span>
                            <span class="rating__bar"><span class="rating__progres" style="width: 1%"></span></span>
                            <span class="rating__percent">1%</span>
                        </p>
                        <p class="rating__line">
                            <span class="rating__score">1</span>
                            <span class="rating__bar"><span class="rating__progres" style="width: 2%"></span></span>
                            <span class="rating__percent">2%</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

</div>

<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/footer.php");
?>
