<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/src/assets/php/db_connection.php";

//echo "<pre>";
//var_dump($link);
//echo "</pre>";

$arResult = array();

$query = "SELECT `id`, `name`, `price`, `old_price`, `preview_picture`, `detail_picture` FROM `products`";

$result = $link->query($query);

//echo "<pre>";
//var_dump($result);
//echo "</pre>";

$arResult["MAINPAGE_PRODUCTS"] = $result->fetch_all(MYSQLI_ASSOC);