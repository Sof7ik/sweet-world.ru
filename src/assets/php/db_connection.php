<?php
$user = "root";
$pass = "root";
$db_name = "sweet-world";
$host = "localhost";

$link = new mysqli($host, $user, $pass, $db_name, 3306);

if (!$link)
{
	echo "DB Connection error: ".mysqli::$error."; Error number: ".mysqli::$errno;
	exit();
}