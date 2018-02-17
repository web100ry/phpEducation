<?php

$users = $gbook->getAll();
echo "Всього записів: " . count($users);
//echo var_dump($users);
foreach ($users as $key => $user) {
    $id = $user["id"];
    $n = $user["name"];
    $e = $user["email"];
    $m = nl2br($user["msg"]);
    $ip = $user["ip"];
    $dt = date("d-m-Y H:i:s", $user["dt"] * 1);
    ?>
    <hr>
    <p>
        <a href="mailto:<?= $e ?>"><?= $n ?></a> from [<?= $ip ?>] @ <?= $dt ?>
        <br><?= $m ?>
    </p>
    <p align="right"><a href="gbook.php?d=<?= $id ?>">DELETE</a></p>
    <?php
}

/* ЗАДАНИЕ 2
- После вызова метода getAll проверьте, был ли запрос успешным?
- Если НЕТ, то присвойте переменной $errMsg строковое значение "Произошла ошибка при выводе записей"
*/

?>