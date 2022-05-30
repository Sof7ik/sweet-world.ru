<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");

	$APPLICATION["title"] = "Подборки";

	$APPLICATION["styles"][] = "/src/assets/styles/css/blogstyle.css";


	require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
?>
    <div class="container-1440">
        
        <p class="main-heading">Блог</p>

        <div class="block">
            <div class="topic-and-product">
                <p class="topic">Статья</p>
                <p class="product">Пряник как часть культурного кода</p>
            </div>
            <div class="topic-product-like-button">
                <div class="image-and-info">
                    <img src="\site\upload\images\тульский пряник 1.png" class="image">
                    <p class="info">Предшественник тульского пряника известен с XIII столетия. В Европе сладость дарили на Рождество, а готовили из медового теста с миндалем, пряностями, цитроном и сахарной глазурью.
                        Первое письменное упоминание...</p>
                </div>
                <div class="like-and-button">
                    <div class="like">
                        <button>
                            <img src="\site\upload\icons\ant-heart.svg">
                        </button>
                    </div>
                    <div class="button">
                        <input type="button" value="Читать полностью">
                    </div>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="topic-and-product">
                <p class="topic">Статья</p>
                <p class="product">Лакрица</p>
            </div>
            <div class="topic-product-like-button">
                <div class="image-and-info">
                    <img src="\site\upload\images\лакрица 2.png" class="image">
                    <p class="info">Издревле люди использовали лакрицу как ценное лекарственное снадобье, доступное лишь единицам.  Почему этой сладости придавалось такое огромное значение? Зачем ее использовали в ритуальнх целях?Лишь недавно ученым удалось разгадать тайну лакричного безумия...</p>
                </div>
                <div class="like-and-button">
                    <div class="like">
                        <button>
                            <img src="\site\upload\icons\ant-heart.svg" class="icons">
                        </button>
                    </div>
                    <div class="button">
                        <input type="button" value="Читать полностью">
                    </div>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="topic-and-product">
                <p class="topic">Новость</p>
                <p class="product">У нас есть шоколад</p>
            </div>
            <div class="topic-product-like-button">
                <div class="image-and-info">
                    <img src="\site\upload\images\шоколад 2.png" class="image">
                    <p class="info">это текст про шоколад в котором рассказывается про шоколад...</p>
                </div>
                <div class="like-and-button">
                    <div class="like">
                        <button>
                            <img src="\site\upload\icons\ant-heart.svg" >
                        </button>
                    </div>
                    <div class="button">
                        <input type="button" value="Читать полностью">
                    </div>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="topic-and-product">
                <p class="topic">Новость</p>
                <p class="product">У нас есть шоколад</p>
            </div>
            <div class="topic-product-like-button">
                <div class="image-and-info">
                    <img src="\site\upload\images\шоколад 2.png" class="image">
                    <p class="info">это текст про шоколад в котором рассказывается про шоколад...</p>
                </div>
                <div class="like-and-button">
                    <div class="like">
                        <button>
                            <img src="\site\upload\icons\ant-heart.svg" >
                        </button>
                    </div>
                    <div class="button">
                        <input type="button" value="Читать полностью">
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-button">
            <input type="button" value="Другие статьи">
        </div>

    </div>
    
<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/src/footer.php");
?>