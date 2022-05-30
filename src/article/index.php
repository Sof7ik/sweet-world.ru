<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");

	$APPLICATION["title"] = "Подборки";

	$APPLICATION["styles"][] = "/src/assets/styles/css/article.css";


	require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
?>
    <div class="container-1440">
        <div class="topic">
            <div class="topic-1">
                <h1><strong>Крупнейшие в мире шоколадные компании.</strong></h1>
                <div class="topic-2">
                    <p>Автор статьи: Добродушный Добрый Добрыч</p>
                    <p>06.06.2016</p>
                </div>
            </div>
        </div>
            <div class="under-topic">
                <p>Вкусности к чаю - отличная идея! Но если не желания стоять у плиты, можно их приобрести в магазинах. Поэтому мы подготовили для вас топ самых крутых компаний сладостей. </p>
            </div>
            <div class="company">
                <div class="heading">
                    <p>1 место: Mars Inc</p>
                </div>
                <div class="heading-im">
                    <img src="/" alt="Company" class="images">
                    <p class="main-text"><strong>Mars Inc</strong> - гигантская транснациональная корпорация. Однако в этом списке мы акцентируем внимание на Mars Wrigley Confectionery, подразделении Mars Inc. , отвечающем за все их кондитерские изделия и жевательную резинку. Кондитерская фабрика Mars Wrigley - это корпорация, которая выпускает ряд самых известных и любимых конфет и шоколадных батончиков Америки. В их число входят батончики Snickers, Twix, Skittles, M&Ms, Milky Wayи (конечно же) Mars.</p>
            </div>
            </div>

            <div class="company">
                <div class="heading">
                    <p>2 место: Ferrero Group</p>
                </div>
                <div class="heading-im"><p class="main-text"><strong> Ferrero Group</strong> - эта итальянская компания, в отличие от предыдущего гиганта, производит исключительно шоколад и кондитерские изделия. Ferrero в первую очередь ассоциируется с одним из своих основополагающих продуктов - Nutella. Именно Ferrero приписывают изобретение этой шоколадной пасты из лесных орехов. Вы также можете узнать эту марку по шоколадкам Ferrero Rocher (которые содержат Nutella), по линейке Kinder или по конфетам Tic Tac.</p>
                    <img src="/" alt="Company" class="images">
                </div>
            </div>

            <div class="company">
                <div class="heading">
                    <p>3 место: Mondelez International</p>
                </div>
                <div class="heading-im">
                    <img src="/" alt="Company" class="images">
                    <p class="main-text"><strong>Mondelez International</strong>  - транснациональная корпорация, производящая кондитерские изделия, а также продукты питания и напитки. Она является владельцем нескольких шоколадных брендов, в том числе Toblerone, Cadbury, Milka и других. Вы также можете знать её по таким популярным продуктам, как Oreo и Chips Ahoy. Mondelez - это по-настоящему международная компания, работающая более чем в ста шестидесяти странах мира.</p>
                </div>
            </div>            

            <p class="text">...
                Ну что? Нашли в топе свой любимый бренд?
                ...
            </p>

            <div class="poducts-in-the-article">

                <p class="heading-products">Товары в статье</p>

                <div class="products">

                    <div class="product">
                        <img src="/" class="picture">
                        <br>
                        <a href="/"> lalala</a>
                    </div>
                    <div class="product">
                        <img src="/" class="picture">
                        <br>
                        <a href="/"> lalala</a>
                    </div>
                    <div class="product">
                        <img src="/" class="picture">
                        <br>
                        <a href="/"> lalala</a>
                    </div>
                    <div class="product">
                        <img src="/" class="picture">
                        <br>
                        <a href="/"> lalala</a>
                    </div>
                    <div class="product">
                        <img src="/" class="picture">
                        <br>
                        <a href="/">lalala</a>
                    </div>
                    <div class="product">
                        <img src="/" class="picture">
                        <br>
                        <a href="/"> lalala</a>
                    </div>
                </div>

            </div>    

            <div class="botton">
                <input type="button" value="Другие статьи">
            </div>
        
    </div>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/src/footer.php");
?>