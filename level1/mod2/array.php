<?php

define(AAA,100);//КОНСТАНТА!!!
define (PI,3.14);

echo AAA*PI;

$cars['bmw'] = array (
    "model" => 'X5',
	"speed" => 120,
	"doors" => 5,
	"year" => '2006'
);
$cars['toyota'] = array (
    "model" => 'Carina',
    "speed" => 130,
    "doors" => 4,
    "year" => '2007'
);
$cars['opel'] = array (
    "model" => 'Corsa',
    "speed" => 140,
    "doors" => 5,
    "year" => '2007'
);


/*
ЗАДАНИЕ 1
- Создайте массив $bmw с ячейками:
	"model"
	"speed"
	"doors"
	"year"
- Заполните ячейки значениями: "X5", 120, 5, "2006"	
- Создайте массивы $toyota и $opel аналогичные массиву $bmw.
- Заполните массив $toyota значениями: "Carina", 130, 4, "2007"
- Заполните массив $opel значениями: "Corsa", 140, 5, "2007"		
*/
?>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Массивы</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Массивы</h1>
    <?= "BMW - model: {$cars[bmw][model]} - speed: {$cars[bmw][speed]} - doors: {$cars[bmw][doors]} - year: {$cars[bmw][year]} <br>";?>
    <?= "TOYOTA - model: {$cars[toyota][model]} - speed: {$cars[toyota][speed]} - doors: {$cars[toyota][doors]} - year: {$cars[toyota][year]} <br>";?>
    <?= "OPEL - model: {$cars[opel][model]} - speed: {$cars[opel][speed]} - doors: {$cars[opel][doors]} - year: {$cars[opel][year]} <br>";?>
	<?
    /*
	ЗАДАНИЕ 2
	- Выведите значения всех трёх массивов в виде: name - model - speed - doors -year,  например: bmw - 120 - 5 - 2006
	*/
?>
</body>
</html>
