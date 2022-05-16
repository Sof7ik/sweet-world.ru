<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config.php");

$actionID = $_GET["ID"];

$APPLICATION["title"] = "Акция ".$actionID;

$APPLICATION["styles"][] = "";

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
?>
