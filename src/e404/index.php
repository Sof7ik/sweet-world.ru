<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");
$APPLICATION["title"] = "Страницы не существует";
$APPLICATION["styles"][] = "/src/assets/styles/css/e404.css";
$APPLICATION["scripts"][] = "/src/assets/js/reviews.js";
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
?>
        <!-- Страницы не существует -->
        <section id="e404" class="err">
          <div class="err__box">
            <div class="wrapper">
              <div class="err__404">
                <p class="digit__4">4</p>
                <div class="digit__zero">
                  <picture class="zero__pic">
                    <source srcset="/site/upload/images/e404/zero.svg" type="image/svg+xml" />
                    <source srcset="/site/upload/images/e404/zero.webp" type="image/webp" />
                    <img class="zero__img" src="/site/upload/images/e404/zero.png" alt="Пончик в посыпке" />
                  </picture>
                </div>
                <p class="digit__4">4</p>
              </div>
              <div class="err__info">
                <p class="info__head">Эту страницу уже съели,<br />но сладости ещё остались</p>
                <p class="info__question">Начнёте поиск с главной?</p>
                <a class="info__linktoindex" href="index.html">Главная страница</a>
              </div>
            </div>
          </div>
        </section>
<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/footer.php");
?>
