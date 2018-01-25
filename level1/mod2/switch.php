
<?php
/*
ЗАДАНИЕ 1
- Создайте переменную $day и присвойте ей произвольное числовое значение
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <title>Конструкция switch</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
<h1>Конструкция switch</h1>
<?php
$size = ini_get(post_max_size);
//$size='5T';
$letter = $size{strlen($size)-1};

switch ($letter)
{
    //без брейка продовжується виконуватися код!!! (проходить подальше перемноження)
    case 'T' : $size *= 1024;
    case 'G' : $size *= 1024;
    case 'M' : $size *= 1024;
    case 'K' : $size *= 1024;
}
echo 'POST_MAX_SIZE = '.$size.' bytes';

/*
ЗАДАНИЕ 2
-  С помощью конструкции switch выведите фразу "Это рабочий день", если значение переменной $day попадает в диапазон чисел от 1 до 5(включительно)
- Выведите фразу "Это выходной день", если значение переменной $day равно числам 6 или 7
- Выведите фразу "Неизвестный день", если значение переменной $day не попадает в диапазон чисел от 1 до 7(включительно)
*/
?>

</body>
</html>
