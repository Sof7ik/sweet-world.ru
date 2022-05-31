<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");

$APPLICATION["title"] = "Доставка и самовывоз";

$APPLICATION["styles"][] = "/src/assets/styles/css/delivery.css";
$APPLICATION["scripts"][] = "/src/assets/js/delivery.js";

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
?>

	<div class="container-1440">
            <h1 class="heading-1 main__heading">
				<?=$APPLICATION["title"]?>
			</h1>

            <div class="main__toggler">
                <button class="main__button toggleDel main__button--active" onclick="toggleDelivery()">Доставка</button>
                <button class="main__button togglePick " onclick="togglePickup()">Самовывоз</button>
            </div>

            <div class="main__delivery delivery">
                <div class="delivery__container container">
                    <h2 class="container__heading">Экспесс доставка за 2 часа</h2>
                    <div class="container__content">
                        <div class="container__text-wrapper">
                            <p class="container__text">
                                Быстрая доставка - лучшее решение если забыл про днюху духа.
                                Доставка по городу с помощью сервисов Яндекс.Такси, Ситимобил и др.
                            </p>
                        </div>
                        <ul class="container__list">
                            <li class="container__item">
                                <p class="container__text">Добавь товары в корзину, а при оформлении заказа выбери «Экспресс-доставку за 2 часа»  </p>
                            </li>
                            <li class="container__item">
                                <p class="container__text">Укажи адрес доставки и оплати заказ онлайн или электронными деньгами.</p>
                            </li>
                            <li class="container__item">
                                <p class="container__text">Ожидай доставку в течение 2 часов!</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="delivery__container container container--standart">
                    <h2 class="container__heading">Стандартная доставка</h2>
                    <div class="container__content">
                        <div class="container__text-wrapper">
                            <p class="container__text">
                                Стандартная доставка — максимально безопасна как для клиентов, так и курьеров.
                                Мы доставим сладости даже на дачу.
                            </p>
                        </div>
                        <ul class="container__list">
                            <li class="container__item">
                                <p class="container__text">Оформи заказ на сайте или в приложении, выбрав доставку.</p>
                            </li>
                            <li class="container__item">
                                <p class="container__text">Стоимость доставки будет зависеть от суммы заказа и выбора дополнительных опций.</p>
                            </li>
                            <li class="container__item">
                                <p class="container__text">Оплати заказ на сайте или при получении. Наслаждайся новой техникой!</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="table__wrapper">
                    <table class="delivery__table">
                        <tr class="top">
                            <td>География</td>
                            <td>Интервал доставки</td>
                            <td>Доставка СДЭК<br>(2-3 дня)</td>
                            <td>Почта России<br>(7-10 дней)</td>
                            <td class="last">Доставка сладостей общей стоимостью более 9990 руб.</td>
                        </tr>
                        <tr>
                            <td>Москва (+10 км от МКАД)</td>
                            <td>09:00-22:00</td>
                            <td>799 руб.</td>
                            <td>149 руб.</td>
                            <td class="last">149 руб.</td>
                        </tr>
                        <tr>
                            <td>Московская область (11-150 км от МКАД)</td>
                            <td>09:00-22:00</td>
                            <td>899 руб.</td>
                            <td>199 руб.</td>
                            <td class="last">199 руб.</td>
                        </tr>
                        <tr>
                            <td>Санкт-Петербург</td>
                            <td>09:00-22:00</td>
                            <td>899 руб.</td>
                            <td>199 руб.</td>
                            <td class="last">199 руб.</td>
                        </tr>
                        <tr>
                            <td>Владивосток</td>
                            <td>09:00-22:00</td>
                            <td>999 руб.</td>
                            <td>249 руб.</td>
                            <td class="last">249 руб.</td>
                        </tr>
                        <tr class="empty"><td><td></td><td></td><td></td><td class="last"></td></tr>
                        <tr class="empty"><td><td></td><td></td><td></td><td class="last"></td></tr>
                        <tr class="last empty"><td><td></td><td></td><td></td><td class="last"></td></tr>
                    </table>
                </div>
                <p class="delivery__footnote">
                    *Указаны сроки доставки без учета дней на создание и сборку заказа. Время на создание и сборку
					индивидуально и сообщается во время обсуждения заказа вместе с вами
                </p>
            </div>
            <div class="main__pickup pickup pickup--hidden">
                <div class="delivery__container container container">
                    <h2 class="container__heading">Самовывоз</h2>
                    <div class="container__content container__content--column">
                        <div class="container__text-wrapper">
                            <p class="container__text">
                                Покупайте на сайте и забирайте заказ прямо со склада
                            </p>
                        </div>
                        <ul class="container__list container__list--column">
                            <li class="container__item">
                                <p class="container__text">Выбери товар на сайте или в приложении, оформи заказ с самовывозом из магазина.</p>
                            </li>
                            <li class="container__item">
                                <p class="container__text">Приходи за своим заказом после получения SMS.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="delivery__container container container">
                    <h2 class="container__heading">Получение заказа в пункте выдачи</h2>
                    <div class="container__content container__content--column">
                        <div class="container__text-wrapper">
                            <p class="container__text">
                                Получи заказ в пункте выдачи рядом с домом по пути в магазин или на почту!
                            </p>
                        </div>
                        <ul class="container__list container__list--column">
                            <li class="container__item">
                                <p class="container__text">Оформи заказ стоимостью от 500 р. (после применения всех скидок) на сайте или в приложении, выбрав самовывоз из пункта выдачи.</p>
                            </li>
                            <li class="container__item">
                                <p class="container__text">Забери заказ по дороге в отделении «Почты России», в магазине «Пятерочка» или «Перекресток».</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <h3 class="pickup__heading">
                    Пункты самовывоза
                </h3>
                <div class="main__toggler">
                    <button class="main__button">Список</button>
                    <button class="main__button main__button--active">Карта</button>
                </div>
                <img src="../../site/upload/images/map.jpg" class="pickup__map" alt="">
            </div>
        </div>
<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/footer.php");
?>