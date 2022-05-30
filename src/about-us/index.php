<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");

	$APPLICATION["title"] = "Отзывы о нас";

	$APPLICATION["styles"][] = "/src/assets/styles/css/reviews-1.css";
	$APPLICATION["scripts"][] = "/src/assets/js/reviews.js";

	require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
?>

        <div>
            <h1>О нас</h1>
        </div>
        <div>

        </div>

<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/footer.php");
?>
