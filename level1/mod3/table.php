<?php
	/*
	ЗАДАНИЕ 1
	- Создайте две числовые переменные $cols и $rows
	- Присвойте созданным переменным произвольные значения в диапазоне от 1 до 10
	*/
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Таблица умножения</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Таблица умножения</h1>

    <?php
  echo"<table align='center' border='1'>";
    $cols=20;
    $rows=20;
    $color='#6ca107';
    var_dump($color,$cols);
    for($tr=1;$tr<=$rows;$tr++) {
        echo "\t<tr align=\"center\">\n";
        for ($td=1;$td<=$cols;$td++){
            if($tr==1||$td==1)
                echo "\t\t<th style='background-color: $color'>".$tr*$td."</th>\n";
            else
                echo "\t\t<td>".$tr*$td."</td>\n";
        }
    echo "\t</tr>\n";
    }
    echo "</table>";
    echo "test from phone!";
	/*
	ЗАДАНИЕ 2
	- Используя циклы отрисуйте таблицу умножения в виде HTML-таблицы на следующих условиях
		- Число столбцов должно быть равно значению переменной $cols
		- Число строк должно быть равно значению переменной $rows
		-  Ячейки на пересечении столбцов и строк должны содержать значения, являющиеся произведением порядковых номеров столбца и строки
	- Рекомендуется использовать цикл for	
	
	ЗАДАНИЕ 3
	- Значения в ячейках первой строки и первого столбца должны быть отрисованы полужирным шрифтом и выровнены по центру ячейки
	- Фоновый цвет ячеек первой строки и первого столбца должен быть отличным от фонового цвета таблицы
	*/
	?>
</body>
</html>
