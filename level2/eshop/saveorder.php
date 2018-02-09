<?php
	// запуск сессии
	session_start();
	// подключение библиотек
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";

	$n = clearData($_POST["name"],"sf");
	$e = clearData($_POST["email"],"sf");
	$p = clearData($_POST["phone"],"sf");
	$a = clearData($_POST["address"],"sf");
	$c = session_id();
	$dt=time();
	$order = "$n|$e|$p|$a|$c|$dt\n";
	file_put_contents(ORDERS_LOG,$order,FILE_APPEND);

resave($dt, $connection);

?>
<html>
<head>
	<title>Сохранение данных заказа</title>
</head>
<body>
	<p>Ваш заказ принят.</p>
	<p><a href="catalog.php">Каталог товаров</a></p>
</body>
</html>