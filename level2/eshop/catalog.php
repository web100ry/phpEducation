<?php
	// запуск сессии
	session_start();
	// подключение библиотек
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";
?>
<html>
<head>
	<title>Каталог товаров</title>
</head>
<body>
<p>Товарів в <a href="basket.php">корзині</a>:<?=$count?></p>
<?php
/*
ЗАДАНИЕ 1
- Выведите в этом месте строку "Товаров в корзине: "
	и текущее количество товаров в корзине для
	данного пользователя
- Слово "корзине" оформите в виде гиперссылки на
	документ basket.php
*/
?>
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>Автор</th>
	<th>Название</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>В корзину</th>
</tr>
<?php
$goods=selectAll($connection);
//print_r($goods);
foreach ($goods as $item){
    ?>
    <tr>
        <td><?=$item["author"]?></td>
        <td><?=$item["title"]?></td>
        <td><?=$item["pubyear"]?></td>
        <td><?=$item["price"]?></td>
        <td><a href="add2basket.php?id=<?=$item["id"]?>">В корзину</a></td>

    </tr>
    <?php
}

?>
</table>
</body>
</html>