<?php

define("DB_HOST", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "qwerty");
define("DB_NAME", "eshop");
define(ORDERS_LOG,"orders.log"); //файл с личными данными пользователей
$count=0; //количество товаров в корзине пользователя
$connection = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die(mysqli_error($connection));
mysqli_select_db($connection,'eshop') or die(mysqli_error($connection));
	/*
	 * TODO

	ЗАДАНИЕ 2
	- Выполните SQL-оператор на выборку количества товаров в корзине данного пользователя
	- Получите результат и сохраните его в значении переменной $count	
	*/
?>