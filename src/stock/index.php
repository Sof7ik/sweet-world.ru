<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");

	$APPLICATION["title"] = "Подборки";

	$APPLICATION["styles"][] = "/src/assets/styles/css/stock.css";


	require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
?>
    <div class="container-1440">
        <p class="topic">Акции</p>

        <div class="set">
            <img src="\site\upload\images\пд1.png" >
            <p>НАБОР-СЮРПРИЗ ОТ SWEETWORLD</p>
            <div class="more-detailed">
            <ul>
                <li>подарок-сюрприз с крутыми сладостями внутри</li>
            </ul>
            <input type="button" value="ПОДРОБНЕЕ">
            
        </div>

        <div class="gift">
            <p>ВАМ ПОДАРОК!</p>
            <ul>
                <li>дарим 20% скидки при первом заказе</li>
            </ul>
            <div class="form-group">
                <textarea id="email" cols="30" rows="10" placeholder="Напишите ваш email"></textarea>
                <input type="button" value="ПОЛУЧИТЬ ПРОМОКОД">
            </div>
        </div>
    </div>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/src/footer.php");
?>