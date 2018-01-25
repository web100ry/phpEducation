<?php
	/*
	ЗАДАНИЕ 1
	- Создайте строковую переменную $now
	- Создайте строковую переменную $birthday
	- Присвойте переменной $now значение метки времени актуальной даты(сегодня)
	- Присвойте переменной $birthday значение метки времени Вашего дня рождения
	*/
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Использование функций даты и времени</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
	<h1>Использование функций даты и времени</h1>
	<?php
    $date1=getdate();
    echo "<pre>";
    print_r($date1);
    echo "</pre>";
echo "$date1[weekday], $date1[mday] $date1[month] $date1[year] <BR> time: $date1[hours]:$date1[minutes]<br>";

$now=time();
$birthday=mktime(0,0,0,3,11,1974);
echo 'Я живу: ';
echo $now-$birthday;

/*
	ЗАДАНИЕ 2
	- Выведите фразу "До моего дня рождения осталось "
	- Выведите количество секунд оставшееся до Вашего дня рождения
	- Закончите фразу " секунд"
	*/
	echo "<br>";
	echo date("m-d-Y H:i:s",1999999999 );
    echo "<br>".time();
    $sd=mktime(0,0,0,2,3,1974);
    $sd=mktime(0,0,0,2,3,1974);
    ?>
<br>
<?php
echo 'Powered by PHP '.PHP_VERSION.' by '.PHP_OS.'<br>';
print_r($GLOBALS);
?>
</body>
</html>
