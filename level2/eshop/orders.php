<?php
	// запуск сессии
	session_start();
	// подключение библиотек
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";
?>
<html>
<head>
	<title>Поступившие заказы</title>
</head>
<body>
<h2>Поступившие заказы:</h2>
<?php

$orders=getOrders($connection);

foreach ($orders as $order){


?>
<hr>
<p><b>Заказчик</b>: <?=$order["name"];?></p>
<p><b>Email</b>: <?=$order["email"];?> </p>
<p><b>Телефон</b>: <?=$order["phone"];?> </p>
<p><b>Адрес доставки</b>: <?=$order["address"];?> </p>
<p><b>Дата размещения заказа</b>: <?=date("d-m-y H:i:s",$order["dt"]);?> </p>
<table border="1" cellpadding="5" cellspacing="0" width="90%">
    <tr>
        <th>N п/п</th>
        <th>Автор</th>
        <th>Название</th>
        <th>Год издания</th>
        <th>Цена, руб.</th>
        <th>Количество</th>
    </tr>

    <?php
  //  var_dump($order["goods"]);
    $i = 1;
    $sum = 0;
foreach ($order["goods"] as $book) {

        ?>

        <tr>
            <th><?=$i;?></th>
            <th><?=$book["author"];?></th>
            <th><?=$book["title"];?></th>
            <th><?=$book["pubyear"];?></th>
            <th><?=$book["price"];?></th>
            <th><?=$book["quantity"];?></th>
        </tr>

        <?php
  $i++;
  $sum+=$book["price"]*$book["quantity"];
}

    ?>


</table>

<p>Всего товаров в заказе на сумму: <?=$sum?> руб.

    <?php
    }
?>
</body>
</html>