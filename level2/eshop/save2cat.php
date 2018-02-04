<?php
	// подключение библиотек
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";
//отримання та фільтрація з форми
$author = clearData($_POST["author"]);
$title = clearData($_POST["title"]);
$pubyear = clearData($_POST["pubyear"],"i");
$price=$_POST["price"]*1;
//echo "test";
//save($author,$title,$pubyear,$price);
save($author,$title,$pubyear,$price,$connection);
header("Location: add2cat.php");
	/*
	ЗАДАНИЕ 1
	- Получите и отфильтруйте данные из формы
	
	ЗАДАНИЕ 2
	- Вызовите функцию save() для сохранения нового товара в БД
	
	ЗАДАНИЕ 3
	- Переадресуйте пользователя на страницу добавления нового товара (add2cat.php)
	*/
?>