<?php
	// запуск сессии
	session_start();
	// подключение библиотек
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";
?>
<html>
<head>
	<title>Корзина пользователя</title>
</head>
<body>
<?php
	/*
	 * TODO
	ЗАДАНИЕ 1
	- Проверьте, есть ли товары в корзине пользователя
	- Если товаров нет, выводите строку "Корзина пуста!"

	*/
?>
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>N п/п</th>
	<th>Автор</th>
	<th>Название</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>Количество</th>
	<th>Удалить</th>
</tr>
<?php
$books=myBasket($connection);
$i=1;
$sum=0;
foreach ($books as $item) {
    ?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $item["author"] ?></td>
        <td><?= $item["title"] ?></td>
        <td><?= $item["pubyear"] ?></td>
        <td><?= $item["price"] ?></td>
        <td><?= $item["quantity"] ?></td>
        <td><a href="delete_from_basket.php?id=<?= $item["id"] ?>">DELETE</a></td>
    </tr>


    <?php

    $i++;
    $sum += $item["price"]*$item["quantity"];

}


?>
</table>

<p>Всего товаров в корзине на сумму:
<?php
echo $sum;

?>
руб.

<div align="center">
	<input type="button" value="Оформить заказ!"
                      onClick="location.href='orderform.php'">
</div>

</body>
</html>







